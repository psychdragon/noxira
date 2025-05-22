<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noxira - A Blockchain-Powered Social Media Platform</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(90deg, #3b82f6 0%, #8b5cf6 100%);
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .token-glow {
            box-shadow: 0 0 15px rgba(79, 70, 229, 0.45);
        }
    </style>
</head>
<body class="font-sans antialiased text-gray-900 bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-indigo-600">NXR</span>
                        <span class="ml-2 text-lg font-medium">Noxira</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#features" class="text-gray-600 hover:text-indigo-600">Features</a>
                    <a href="#token" class="text-gray-600 hover:text-indigo-600">Token Economy</a>
                    <a href="#roadmap" class="text-gray-600 hover:text-indigo-600">Roadmap</a>
                    <a href="#team" class="text-gray-600 hover:text-indigo-600">Team</a>
                    <a href="#whitepaper" class="text-gray-600 hover:text-indigo-600">Whitepaper</a>
                    <a href="#github" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">GitHub</a>
                </div>
                <div class="flex md:hidden items-center">
                    <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="gradient-bg">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                <span class="block">Reclaim your social experience</span>
                <span class="block text-indigo-200">Community-owned social media</span>
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-xl text-indigo-100 sm:max-w-3xl">
                A blockchain-powered platform where users own their data, earn from their contributions, and participate in platform governance.
            </p>
            <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                    <a href="#join-waitlist" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">
                        Join Waitlist
                    </a>
                    <a href="#learn-more" class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-800 bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                        Learn More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div id="features" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-600">Features</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">Why choose Noxira?</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Reimagining social media with decentralization at its core.</p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-user-shield text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">You Own Your Data</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Complete data sovereignty with encrypted storage and user-controlled sharing permissions.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-coins text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Get Rewarded</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Earn tokens for quality contributions, engagement, and community building.
                        </p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-vote-yea text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Community Governance</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Vote on platform decisions and participate in shaping future features.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-lock text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Censorship Resistant</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Content stored on decentralized networks ensuring permanence and accessibility.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-robot text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">AI Integration</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Personalized experiences with transparent, community-governed AI tools.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="feature-card relative bg-white p-6 rounded-lg shadow-md transition duration-300 ease-in-out">
                        <div class="absolute top-0 right-0 -mt-6 -mr-6 bg-indigo-600 rounded-full p-3 text-white">
                            <i class="fas fa-store text-xl"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-900">Service Marketplace</h3>
                        <p class="mt-3 text-base text-gray-500">
                            Direct creator monetization and service offerings with minimal fees.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Token Section -->
    <div id="token" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-600">Token Economy</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">Powered by NNXR Tokens</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">A utility token that aligns incentives across the ecosystem.</p>
            </div>
            
            <div class="mt-16 grid grid-cols-1 gap-8 lg:grid-cols-2">
                <!-- Token Distribution -->
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Token Distribution</h3>
                    <div class="flex justify-center">
                        <div class="w-64 h-64 rounded-full border-8 border-indigo-500 token-glow flex items-center justify-center">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-indigo-600">1B</div>
                                <div class="text-sm text-gray-600">Total Supply</div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 space-y-4">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Community Treasury</span>
                            <span class="font-semibold">40%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Public Distribution</span>
                            <span class="font-semibold">20%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 20%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Platform Reserve</span>
                            <span class="font-semibold">15%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Founding Team</span>
                            <span class="font-semibold">15%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 15%"></div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <span class="text-gray-700">Early Backers</span>
                            <span class="font-semibold">10%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-indigo-600 h-2 rounded-full" style="width: 10%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Token Utility -->
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Token Utility</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <i class="fas fa-key"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Access</h4>
                                <p class="mt-2 text-base text-gray-500">Purchase premium features and services.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <i class="fas fa-award"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Rewards</h4>
                                <p class="mt-2 text-base text-gray-500">Compensation for valuable contributions.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <i class="fas fa-landmark"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Governance</h4>
                                <p class="mt-2 text-base text-gray-500">Voting on platform decisions.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-medium text-gray-900">Staking</h4>
                                <p class="mt-2 text-base text-gray-500">Earn passive income through platform participation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Roadmap Section -->
    <div id="roadmap" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-600">Roadmap</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">Development Timeline</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Our journey to building a Noxira ecosystem.</p>
            </div>
            
            <div class="mt-16 relative">
                <!-- Timeline Line -->
                <div class="hidden md:block absolute top-0 bottom-0 left-1/2 w-0.5 bg-indigo-200"></div>
                
                <!-- Phase 1 -->
                <div class="relative md:flex md:items-center mb-16">
                    <div class="md:w-1/2 md:pr-8 mb-8 md:mb-0 md:text-right">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-indigo-600">Phase 1: Foundation</h3>
                            <p class="text-sm text-gray-500">Months 1-6</p>
                            <ul class="mt-4 text-gray-600 space-y-2">
                                <li>Core team assembly</li>
                                <li>Technical architecture definition</li>
                                <li>Smart contract development</li>
                                <li>Minimum viable product development</li>
                                <li>Seed member recruitment</li>
                                <li>Initial funding</li>
                            </ul>
                        </div>
                    </div>
                    <div class="absolute md:left-1/2 md:translate-x-[-50%] top-0 md:top-1/2 md:translate-y-[-50%] w-8 h-8 rounded-full bg-indigo-600 border-4 border-white">
                        <span class="text-white text-xs font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">1</span>
                    </div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <!-- Phase 2 -->
                <div class="relative md:flex md:items-center mb-16">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="absolute md:left-1/2 md:translate-x-[-50%] top-0 md:top-1/2 md:translate-y-[-50%] w-8 h-8 rounded-full bg-indigo-600 border-4 border-white">
                        <span class="text-white text-xs font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">2</span>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-indigo-600">Phase 2: Alpha Launch</h3>
                            <p class="text-sm text-gray-500">Months 7-12</p>
                            <ul class="mt-4 text-gray-600 space-y-2">
                                <li>Invitation-only platform release</li>
                                <li>Basic content posting and social features</li>
                                <li>Simplified token distribution system</li>
                                <li>Core community building</li>
                                <li>Bug fixing and optimization</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Phase 3 -->
                <div class="relative md:flex md:items-center mb-16">
                    <div class="md:w-1/2 md:pr-8 mb-8 md:mb-0 md:text-right">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-indigo-600">Phase 3: Beta Expansion</h3>
                            <p class="text-sm text-gray-500">Months 13-18</p>
                            <ul class="mt-4 text-gray-600 space-y-2">
                                <li>Service marketplace introduction</li>
                                <li>AI feature integration</li>
                                <li>Mobile application development</li>
                                <li>Enhanced governance tools</li>
                                <li>Expanded invitation system</li>
                            </ul>
                        </div>
                    </div>
                    <div class="absolute md:left-1/2 md:translate-x-[-50%] top-0 md:top-1/2 md:translate-y-[-50%] w-8 h-8 rounded-full bg-indigo-600 border-4 border-white">
                        <span class="text-white text-xs font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">3</span>
                    </div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <!-- Phase 4 -->
                <div class="relative md:flex md:items-center">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="absolute md:left-1/2 md:translate-x-[-50%] top-0 md:top-1/2 md:translate-y-[-50%] w-8 h-8 rounded-full bg-indigo-600 border-4 border-white">
                        <span class="text-white text-xs font-bold absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">4</span>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <h3 class="text-lg font-medium text-indigo-600">Phase 4: Public Launch</h3>
                            <p class="text-sm text-gray-500">Months 19-24</p>
                            <ul class="mt-4 text-gray-600 space-y-2">
                                <li>Public access implementation</li>
                                <li>Full token economy activation</li>
                                <li>Developer API release</li>
                                <li>Marketing campaign</li>
                                <li>Partnerships with creators and service providers</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section Placeholder -->
    <div id="team" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-600">Our Team</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight">Meet the builders</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Join our team of blockchain developers, designers, and community managers.</p>
            </div>
            
            <div class="mt-12 flex justify-center">
                <a href="#join-team" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    View Open Positions
                </a>
            </div>
        </div>
    </div>

    <!-- CTA / Join Waitlist -->
    <div id="join-waitlist" class="gradient-bg py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold tracking-wide uppercase text-indigo-200">Get Early Access</h2>
                <p class="mt-1 text-4xl font-extrabold text-white sm:text-5xl sm:tracking-tight">Join the waitlist</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-indigo-100">Be among the first to experience Noxira and help shape the future of social media.</p>
            </div>
            
            <div class="mt-12 max-w-md mx-auto">
                <form class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-medium text-indigo-100">Email</label>
                        <div class="mt-1">
                            <input type="email" name="email" id="email" autocomplete="email" placeholder="your@email.com" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="interest" class="block text-sm font-medium text-indigo-100">I'm interested as a...</label>
                        <div class="mt-1">
                            <select id="interest" name="interest" class="py-3 px-4 block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md">
                                <option value="user">Platform User</option>
                                <option value="creator">Content Creator</option>
                                <option value="developer">Developer</option>
                                <option value="investor">Investor</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-800 hover:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Join Waitlist
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800" id="whitepaper">
        <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Platform</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#features" class="text-base text-gray-400 hover:text-white">Features</a></li>
                        <li><a href="#token" class="text-base text-gray-400 hover:text-white">Token Economy</a></li>
                        <li><a href="#roadmap" class="text-base text-gray-400 hover:text-white">Roadmap</a></li>
                        <li><a href="#whitepaper" class="text-base text-gray-400 hover:text-white">Whitepaper</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Resources</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#github" class="text-base text-gray-400 hover:text-white" id="github">GitHub</a></li>
                        <li><a href="#documentation" class="text-base text-gray-400 hover:text-white">Documentation</a></li>
                        <li><a href="#blog" class="text-base text-gray-400 hover:text-white">Blog</a></li>
                        <li><a href="#faq" class="text-base text-gray-400 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Community</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#discord" class="text-base text-gray-400 hover:text-white">Discord</a></li>
                        <li><a href="#telegram" class="text-base text-gray-400 hover:text-white">Telegram</a></li>
                        <li><a href="#twitter" class="text-base text-gray-400 hover:text-white">Twitter</a></li>
                        <li><a href="#forum" class="text-base text-gray-400 hover:text-white">Forum</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Legal</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#privacy" class="text-base text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#terms" class="text-base text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#contact" class="text-base text-gray-400 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#twitter" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter text-xl"></i>
                    </a>
                    <a href="#github" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">GitHub</span>
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="#discord" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Discord</span>
                        <i class="fab fa-discord text-xl"></i>
                    </a>
                    <a href="#telegram" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Telegram</span>
                        <i class="fab fa-telegram text-xl"></i>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; 2025 Noxira. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Basic JavaScript functionalities
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href').substring(1);
                    if (targetId) {
                        const targetElement = document.getElementById(targetId);
                        if (targetElement) {
                            window.scrollTo({
                                top: targetElement.offsetTop - 80,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
            
            // Form submission handler (currently just prevents default)
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const email = document.getElementById('email').value;
                    const interest = document.getElementById('interest').value;
                    
                    // Add validation and submission logic here
                    alert(`Thank you for joining our waitlist! We'll contact you at ${email} with updates.`);
                    form.reset();
                });
            }
        });
    </script>
</body>
</html>