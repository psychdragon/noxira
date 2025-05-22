#!/bin/bash
# Noxira Node Setup Script
# This script prepares a USB drive to function as a Noxira node

# Exit on any error
set -e

# Configuration variables
USB_DEVICE=$1
NODE_NAME=$2
PASSWORD=$3

# Check if parameters are provided
if [ -z "$USB_DEVICE" ] || [ -z "$NODE_NAME" ] || [ -z "$PASSWORD" ]; then
    echo "Usage: $0 /dev/sdX node_name encryption_password"
    exit 1
fi

# Verify the device exists
if [ ! -b "$USB_DEVICE" ]; then
    echo "Error: Device $USB_DEVICE does not exist or is not a block device."
    exit 1
fi

echo "=== Noxira Node Preparation ==="
echo "This will erase ALL data on $USB_DEVICE. Press Ctrl+C now to abort."
echo "Preparing in 5 seconds..."
sleep 5

# Create partitions
echo "Creating partitions..."
parted -s "$USB_DEVICE" mklabel gpt
parted -s "$USB_DEVICE" mkpart ESP fat32 1MiB 513MiB
parted -s "$USB_DEVICE" set 1 boot on
parted -s "$USB_DEVICE" mkpart primary ext4 513MiB 2561MiB
parted -s "$USB_DEVICE" mkpart primary 2561MiB 100%

# Format boot partition
echo "Formatting boot partition..."
mkfs.vfat -F32 "${USB_DEVICE}1"

# Format system partition
echo "Formatting system partition..."
mkfs.ext4 "${USB_DEVICE}2"

# Setup encrypted data partition
echo "Setting up encrypted partition..."
echo -n "$PASSWORD" | cryptsetup luksFormat --type luks2 "${USB_DEVICE}3" -
echo -n "$PASSWORD" | cryptsetup open "${USB_DEVICE}3" noxira_data -
mkfs.ext4 /dev/mapper/noxira_data

# Mount partitions
echo "Mounting partitions..."
mkdir -p /mnt/noxira_boot
mkdir -p /mnt/noxira_system
mkdir -p /mnt/noxira_data
mount "${USB_DEVICE}1" /mnt/noxira_boot
mount "${USB_DEVICE}2" /mnt/noxira_system
mount /dev/mapper/noxira_data /mnt/noxira_data

# Install base system
echo "Installing base system..."
# This would be replaced with actual system installation commands
# For example, using debootstrap for Debian-based systems

# Generate wallet keys
echo "Generating Noxira wallet..."
# This would be replaced with actual wallet generation commands
mkdir -p /mnt/noxira_data/wallet
openssl genpkey -algorithm RSA -out /mnt/noxira_data/wallet/private.pem
openssl rsa -pubout -in /mnt/noxira_data/wallet/private.pem -out /mnt/noxira_data/wallet/public.pem

# Setup node configuration
echo "Setting up node configuration..."
mkdir -p /mnt/noxira_data/config
cat > /mnt/noxira_data/config/node.conf << EOF
NODE_NAME=$NODE_NAME
NODE_ID=$(openssl rand -hex 16)
NETWORK_VERSION=0.1.0
BOOTSTRAP_PEERS=["noxira.seed1.example.com", "noxira.seed2.example.com"]
EOF

# Install Noxira client software
echo "Installing Noxira client..."
mkdir -p /mnt/noxira_system/opt/noxira
# This would copy the actual client software

# Setup autostart scripts
echo "Setting up autostart..."
mkdir -p /mnt/noxira_system/etc/systemd/system
cat > /mnt/noxira_system/etc/systemd/system/noxira-node.service << EOF
[Unit]
Description=Noxira Network Node
After=network.target

[Service]
Type=simple
User=noxira
ExecStart=/opt/noxira/bin/noxira-node --config /mnt/noxira_data/config/node.conf
Restart=on-failure
RestartSec=5s

[Install]
WantedBy=multi-user.target
EOF

# Install bootloader
echo "Installing bootloader..."
# This would be replaced with actual bootloader installation

# Cleanup
echo "Cleaning up..."
umount /mnt/noxira_boot
umount /mnt/noxira_system
umount /mnt/noxira_data
cryptsetup close noxira_data
rmdir /mnt/noxira_boot
rmdir /mnt/noxira_system
rmdir /mnt/noxira_data

echo "=== Noxira Node Setup Complete ==="
echo "Your node is ready. Boot from this USB device to join the Noxira network."
echo "Node Name: $NODE_NAME"
echo "Remember your encryption password!"
