// Noxira Node Main Process
const express = require('express');
const { Web3 } = require('web3');
const IPFS = require('ipfs-core');
const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const leveldb = require('level');
const libp2p = require('libp2p');
const TCP = require('libp2p-tcp');
const { Multiaddr } = require('multiaddr');
const { Noise } = require('@chainsafe/libp2p-noise');
const { Mplex } = require('libp2p-mplex');
const Bootstrap = require('libp2p-bootstrap');

class NoxiraNode {
  constructor(config) {
    this.config = config;
    this.app = express();
    this.server = null;
    this.web3 = null;
    this.ipfs = null;
    this.db = null;
    this.p2p = null;
    this.wallet = null;
    this.tokenContract = null;
    this.running = false;
    
    this.init = this.init.bind(this);
    this.start = this.start.bind(this);
    this.stop = this.stop.bind(this);
  }

  async init() {
    console.log(`Initializing Noxira Node: ${this.config.NODE_NAME}`);
    
    try {
      // Initialize database
      console.log('Setting up local database...');
      this.db = leveldb(path.join(this.config.DATA_DIR, 'noxira_db'));
      
      // Initialize wallet
      console.log('Loading wallet...');
      await this.initWallet();
      
      // Initialize IPFS node
      console.log('Starting IPFS node...');
      this.ipfs = await IPFS.create({
        repo: path.join(this.config.DATA_DIR, 'ipfs'),
        config: {
          Addresses: {
            Swarm: [
              '/ip4/0.0.0.0/tcp/4002',
              '/ip4/0.0.0.0/tcp/4003/ws'
            ],
            API: '/ip4/127.0.0.1/tcp/5002',
            Gateway: '/ip4/127.0.0.1/tcp/9090'
          }
        }
      });
      
      // Initialize Web3 connection
      console.log('Connecting to blockchain...');
      this.web3 = new Web3(this.config.BLOCKCHAIN_RPC);
      
      // Load token contract
      const contractABI = JSON.parse(fs.readFileSync(
        path.join(this.config.CONFIG_DIR, 'NoxiraToken.abi.json'), 
        'utf8'
      ));
      this.tokenContract = new this.web3.eth.Contract(
        contractABI, 
        this.config.TOKEN_CONTRACT_ADDRESS
      );
      
      // Initialize P2P network
      console.log('Setting up P2P network...');
      await this.initP2P();
      
      // Setup HTTP API
      this.setupAPI();
      
      console.log('Noxira Node initialized successfully');
      return true;
    } catch (error) {
      console.error('Failed to initialize Noxira Node:', error);
      return false;
    }
  }
  
  async initWallet() {
    const walletPath = path.join(this.config.DATA_DIR, 'wallet', 'private.pem');
    
    if (fs.existsSync(walletPath)) {
      const privateKey = fs.readFileSync(walletPath, 'utf8');
      this.wallet = this.web3.eth.accounts.privateKeyToAccount(privateKey);
      console.log(`Wallet loaded: ${this.wallet.address}`);
    } else {
      console.log('No wallet found, creating new wallet...');
      this.wallet = this.web3.eth.accounts.create();
      
      // Save wallet
      fs.mkdirSync(path.join(this.config.DATA_DIR, 'wallet'), { recursive: true });
      fs.writeFileSync(walletPath, this.wallet.privateKey, { mode: 0o600 });
      console.log(`New wallet created: ${this.wallet.address}`);
    }
    
    // Check for NNXR token balance
    const balance = await this.tokenContract.methods.balanceOf(this.wallet.address).call();
    console.log(`NNXR Token Balance: ${this.web3.utils.fromWei(balance, 'ether')} NNXR`);
  }
  
  async initP2P() {
    // Create libp2p node
    this.p2p = await libp2p.create({
      addresses: {
        listen: ['/ip4/0.0.0.0/tcp/6001']
      },
      modules: {
        transport: [TCP],
        connEncryption: [Noise],
        streamMuxer: [Mplex],
        peerDiscovery: [Bootstrap]
      },
      config: {
        peerDiscovery: {
          bootstrap: {
            list: this.config.BOOTSTRAP_PEERS.map(addr => new Multiaddr(addr))
          }
        }
      }
    });
    
    // Register event handlers
    this.p2p.on('peer:discovery', (peer) => {
      console.log(`Discovered peer: ${peer.id.toB58String()}`);
    });
    
    // Start P2P node
    await this.p2p.start();
    console.log(`P2P node started with ID: ${this.p2p.peerId.toB58String()}`);
    
    // Register protocol handlers
    this.p2p.handle('/noxira/content/1.0.0', async ({ connection, stream }) => {
      // Handle incoming content
      // This would handle content propagation
    });
    
    this.p2p.handle('/noxira/message/1.0.0', async ({ connection, stream }) => {
      // Handle direct messages
      // This would handle private messaging
    });
  }
  
  setupAPI() {
    // Setup Express middleware
    this.app.use(express.json());
    this.app.use(express.static(path.join(__dirname, 'public')));
    
    // API endpoints
    this.app.get('/api/status', (req, res) => {
      res.json({
        nodeName: this.config.NODE_NAME,
        nodeId: this.config.NODE_ID,
        version: this.config.NETWORK_VERSION,
        wallet: this.wallet.address,
        peersConnected: this.p2p ? this.p2p.connectionManager.size : 0,
        running: this.running
      });
    });
    
    // Content API
    this.app.post('/api/content', async (req, res) => {
      try {
        const { content, type } = req.body;
        
        // Store content in IPFS
        const result = await this.ipfs.add(JSON.stringify({
          content,
          type,
          author: this.wallet.address,
          timestamp: Date.now()
        }));
        
        // Store reference in local DB
        await this.db.put(`content:${result.cid.toString()}`, JSON.stringify({
          cid: result.cid.toString(),
          type,
          timestamp: Date.now()
        }));
        
        // Announce content to the network
        this.announceContent(result.cid.toString());
        
        res.json({ success: true, cid: result.cid.toString() });
      } catch (error) {
        console.error('Error creating content:', error);
        res.status(500).json({ success: false, error: error.message });
      }
    });
    
    this.app.get('/api/content/:cid', async (req, res) => {
      try {
        const { cid } = req.params;
        
        // Retrieve content from IPFS
        const chunks = [];
        for await (const chunk of this.ipfs.cat(cid)) {
          chunks.push(chunk);
        }
        
        const content = JSON.parse(Buffer.concat(chunks).toString());
        res.json({ success: true, content });
      } catch (error) {
        console.error('Error retrieving content:', error);
        res.status(500).json({ success: false, error: error.message });
      }
    });
    
    // Token API
    this.app.get('/api/wallet', async (req, res) => {
      try {
        const balance = await this.tokenContract.methods.balanceOf(this.wallet.address).call();
        const reputation = await this.tokenContract.methods.userReputation(this.wallet.address).call();
        const invitations = await this.tokenContract.methods.userInvitationsRemaining(this.wallet.address).call();
        
        res.json({
          address: this.wallet.address,
          balance: this.web3.utils.fromWei(balance, 'ether'),
          reputation,
          invitations
        });
      } catch (error) {
        console.error('Error retrieving wallet info:', error);
        res.status(500).json({ success: false, error: error.message });
      }
    });
    
    this.app.post('/api/invite', async (req, res) => {
      try {
        const { inviteeAddress } = req.body;
        
        // Create invitation transaction
        const tx = this.tokenContract.methods.inviteUser(inviteeAddress);
        const gas = await tx.estimateGas({ from: this.wallet.address });
        
        const signedTx = await this.web3.eth.accounts.signTransaction({
          to: this.config.TOKEN_CONTRACT_ADDRESS,
          data: tx.encodeABI(),
          gas
        }, this.wallet.privateKey);
        
        const receipt = await this.web3.eth.sendSignedTransaction(signedTx.rawTransaction);
        
        res.json({ success: true, txHash: receipt.transactionHash });
      } catch (error) {
        console.error('Error sending invitation:', error);
        res.status(500).json({ success: false, error: error.message });
      }
    });
  }
  
  async announceContent(cid) {
    // Announce new content to connected peers
    for (const connection of this.p2p.connectionManager.values()) {
      try {
        const { stream } = await connection.newStream('/noxira/content/1.0.0');
        await stream.sink(JSON.stringify({ cid, nodeId: this.config.NODE_ID }));
      } catch (error) {
        console.error(`Failed to announce content to peer: ${error.message}`);
      }
    }
  }
  
  async start() {
    if (this.running) return;
    
    // Start HTTP server
    this.server = this.app.listen(this.config.HTTP_PORT, () => {
      console.log(`Noxira Node HTTP API listening on port ${this.config.HTTP_PORT}`);
    });
    
    this.running = true;
    console.log(`Noxira Node started: ${this.config.NODE_NAME}`);
  }
  
  async stop() {
    if (!this.running) return;
    
    // Stop services
    if (this.server) {
      this.server.close();
    }
    
    if (this.p2p) {
      await this.p2p.stop();
    }
    
    if (this.ipfs) {
      await this.ipfs.stop();
    }
    
    if (this.db) {
      await this.db.close();
    }
    
    this.running = false;
    console.log(`Noxira Node stopped: ${this.config.NODE_NAME}`);
  }
}

// Load configuration
const config = require('./config');

// Create and start node
const node = new NoxiraNode(config);
node.init().then(() => {
  node.start();
  
  // Handle shutdown signals
  process.on('SIGINT', async () => {
    console.log('Received shutdown signal, stopping node...');
    await node.stop();
    process.exit(0);
  });
}).catch(error => {
  console.error('Failed to start Noxira Node:', error);
  process.exit(1);
});
