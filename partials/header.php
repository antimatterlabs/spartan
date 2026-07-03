<?php
/**
 * Global header: <head>, announcement bar, navigation, mega menus,
 * mobile menu, search overlay, and cart drawer.
 *
 * Expects (optional):
 *   $page_title  - string page title
 *   $active_nav  - 'products' | 'services' | 'contact'
 */
require_once __DIR__ . '/data.php';

$page_title = $page_title ?? 'Spartan Industrial Marine | Commercial Marine Supply & Certified Service';
$active_nav = $active_nav ?? '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="Rope, rigging, safety equipment, commercial fishing gear, and certified life raft and immersion suit servicing for the people who work on the water. Atlantic Canada.">

    <!-- Preconnect & Prefetch -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>

    <!-- Google Fonts Preload & Import -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Prevent Layout Shift / FOUT -->
    <script>
        document.documentElement.classList.add('loading-fonts');
        if (document.fonts) {
            document.fonts.ready.then(function() {
                document.documentElement.classList.remove('loading-fonts');
            }).catch(function() {
                document.documentElement.classList.remove('loading-fonts');
            });
            setTimeout(function() {
                document.documentElement.classList.remove('loading-fonts');
            }, 800);
        } else {
            document.documentElement.classList.remove('loading-fonts');
        }
    </script>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        spartan: {
                            teal: '#00B3A6',
                            navy: '#0C1B24',
                            charcoal: '#1D2228',
                            steel: '#6B737B',
                            'teal-light': '#BDEFEA',
                            'navy-light': '#383F4C',
                            'gray-light': '#E6E9EC',
                            'light-gray': '#F3F5F6',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        oswald: ['Oswald', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <style>
        /* Prevent FOUT / FOIT */
        .loading-fonts body {
            opacity: 0 !important;
            visibility: hidden !important;
        }
        body {
            transition: opacity 0.15s ease-in-out;
        }

        /* Solid header */
        .solid-header {
            background: rgba(12, 27, 36, 0.97);
            backdrop-filter: blur(10px);
        }

        /* Hide horizontal scrollbar on carousels */
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .no-scrollbar::-webkit-scrollbar { display: none; }

        /* Scale animation for cart badge pop */
        @keyframes pop {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        .badge-pop { animation: pop 0.3s ease-out; }
    </style>
</head>
<body class="bg-white text-spartan-charcoal min-h-screen font-sans">

    <!-- ================= TOP ANNOUNCEMENT BAR ================= -->
    <div class="bg-spartan-teal text-white text-[10px] sm:text-xs font-semibold py-2.5 tracking-wider">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center space-y-1.5 sm:space-y-0 text-center font-sans">
            <a href="locations.php" class="hover:text-spartan-teal-light transition-colors flex items-center space-x-2">
                <i class="fa-solid fa-location-dot text-spartan-teal-light text-xs"></i>
                <span>3 LOCATIONS ACROSS ATLANTIC CANADA</span>
            </a>
            <a href="services.php" class="hover:text-spartan-teal-light transition-colors flex items-center space-x-2">
                <i class="fa-solid fa-certificate text-spartan-teal-light text-xs"></i>
                <span>TRANSPORT CANADA CERTIFIED SERVICE CENTRE</span>
            </a>
            <a href="tel:+19024630000" class="hover:text-spartan-teal-light transition-colors flex items-center space-x-2">
                <i class="fa-solid fa-phone text-spartan-teal-light text-xs"></i>
                <span>TOLL FREE: 1-902-463-0000</span>
            </a>
        </div>
    </div>

    <!-- ================= NAVIGATION HEADER ================= -->
    <header class="sticky top-0 z-50 solid-header border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-24 flex items-center justify-between">
            <!-- Brand Logo -->
            <a href="index.php" class="flex items-center space-x-3 shrink-0 py-2">
                <img src="assets/images/Spartan Industrial Marine White.png" alt="Spartan Industrial Marine" class="h-14 md:h-16 w-auto object-contain">
            </a>

            <!-- Navigation Links -->
            <nav class="hidden lg:flex items-center space-x-2 xl:space-x-6 text-xs font-bold tracking-[0.15em] text-white">
                <!-- Products Menu Link with Hover trigger -->
                <div class="relative group" id="products-menu-trigger">
                    <a href="products.php" class="px-3 py-2 <?php echo $active_nav === 'products' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Products</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                </div>

                <!-- Services Menu Link with Hover trigger -->
                <div class="relative group" id="services-menu-trigger">
                    <a href="services.php" class="px-3 py-2 <?php echo $active_nav === 'services' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Services</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                </div>

                <a href="brands.php" class="px-3 py-2 <?php echo $active_nav === 'brands' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors uppercase">Brands</a>
                <a href="about.php" class="px-3 py-2 <?php echo $active_nav === 'about' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors uppercase">About Us</a>
                <a href="faq.php" class="px-3 py-2 <?php echo $active_nav === 'faq' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors uppercase">FAQ</a>
                <a href="contact.php" class="px-3 py-2 <?php echo $active_nav === 'contact' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors uppercase">Contact</a>
            </nav>

            <!-- Navigation Controls (Right Side) -->
            <div class="flex items-center space-x-4 xl:space-x-6 text-white shrink-0">
                <!-- Search Button -->
                <button onclick="toggleSearch()" class="p-2 hover:text-spartan-teal transition-colors" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </button>

                <!-- Profile Link -->
                <a href="#" class="p-2 hover:text-spartan-teal transition-colors hidden sm:block" aria-label="Account">
                    <i class="fa-regular fa-user text-lg"></i>
                </a>

                <!-- Cart Button -->
                <button onclick="toggleCart()" class="p-2 hover:text-spartan-teal transition-colors relative" aria-label="Cart">
                    <i class="fa-solid fa-bag-shopping text-lg"></i>
                    <span id="cart-badge" class="absolute -top-0.5 -right-1 bg-spartan-teal text-white text-[8px] font-bold px-1.5 py-0.5 rounded-none border border-spartan-navy">0</span>
                </button>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()" class="p-2 hover:text-spartan-teal transition-colors lg:hidden" aria-label="Menu">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- ================= MEGA MENU: PRODUCTS ================= -->
        <div id="products-mega-menu" class="absolute left-0 right-0 bg-spartan-navy border-b border-slate-800 py-10 px-8 transition-all duration-300 origin-top transform scale-y-0 opacity-0 pointer-events-none z-40">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-5 gap-8">
                <!-- Column 1: Marine Safety -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">MARINE SAFETY</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="products.php?cat=safety" class="hover:text-white transition-colors">Immersion Suits</a></li>
                        <li><a href="products.php?cat=safety" class="hover:text-white transition-colors">PFDs & Commercial Lifejackets</a></li>
                        <li><a href="products.php?cat=safety" class="hover:text-white transition-colors">Life Rafts & Cradles</a></li>
                        <li><a href="products.php?cat=safety" class="hover:text-white transition-colors">Flares & Distress Signals</a></li>
                        <li><a href="products.php?cat=safety" class="hover:text-white transition-colors">EPIRBs & PLBs</a></li>
                    </ul>
                </div>
                <!-- Column 2: Rope & Rigging -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">ROPE & RIGGING</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="products.php?cat=rope" class="hover:text-white transition-colors">Pot Warp & Sinking Rope</a></li>
                        <li><a href="products.php?cat=rope" class="hover:text-white transition-colors">Wire Rope & Cable</a></li>
                        <li><a href="products.php?cat=rope" class="hover:text-white transition-colors">Chain, Shackles & Hooks</a></li>
                        <li><a href="products.php?cat=rope" class="hover:text-white transition-colors">Mooring & Dock Lines</a></li>
                        <li><a href="products.php?cat=rope" class="hover:text-white transition-colors">Blocks & Lifting Hardware</a></li>
                    </ul>
                </div>
                <!-- Column 3: Commercial Fishing -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">COMMERCIAL FISHING</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="products.php?cat=fishing" class="hover:text-white transition-colors">Lobster & Crab Gear</a></li>
                        <li><a href="products.php?cat=fishing" class="hover:text-white transition-colors">Buoys & Highflyers</a></li>
                        <li><a href="products.php?cat=fishing" class="hover:text-white transition-colors">Bait Bags, Totes & Tubs</a></li>
                        <li><a href="products.php?cat=fishing" class="hover:text-white transition-colors">Trawl & Net Hardware</a></li>
                        <li><a href="products.php?cat=fishing" class="hover:text-white transition-colors">Aquaculture Supplies</a></li>
                    </ul>
                </div>
                <!-- Column 4: Workwear -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">WORKWEAR & FOOTWEAR</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="products.php?cat=workwear" class="hover:text-white transition-colors">Deck Boots</a></li>
                        <li><a href="products.php?cat=workwear" class="hover:text-white transition-colors">Rain Gear, Bibs & Oilskins</a></li>
                        <li><a href="products.php?cat=workwear" class="hover:text-white transition-colors">Gloves</a></li>
                        <li><a href="products.php?cat=workwear" class="hover:text-white transition-colors">Hi-Vis & Float Jackets</a></li>
                        <li><a href="products.php?cat=workwear" class="hover:text-white transition-colors">Thermal Layers</a></li>
                    </ul>
                </div>
                <!-- Column 5: Featured Callout -->
                <div class="relative overflow-hidden group border border-slate-700/50">
                    <img src="assets/images/spartan-3.png" alt="Rigging and rope stock" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 absolute inset-0 brightness-[0.4]">
                    <div class="relative z-10 p-6 h-full flex flex-col justify-between min-h-[180px]">
                        <div>
                            <span class="bg-spartan-teal text-white text-[8px] font-bold px-2 py-0.5 tracking-wider uppercase inline-block mb-2">IN STOCK</span>
                            <h4 class="font-oswald text-sm font-bold text-white tracking-wide uppercase">SEASON ROPE ORDERS, CUT TO LENGTH</h4>
                        </div>
                        <a href="products.php?cat=rope" class="inline-flex items-center text-[10px] font-bold text-spartan-teal tracking-[0.2em] hover:text-white transition-colors uppercase">
                            <span>SHOP ROPE</span>
                            <i class="fa-solid fa-chevron-right text-[9px] ml-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= MEGA MENU: SERVICES ================= -->
        <div id="services-mega-menu" class="absolute left-0 right-0 bg-spartan-navy border-b border-slate-800 py-10 px-8 transition-all duration-300 origin-top transform scale-y-0 opacity-0 pointer-events-none z-40">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Column 1: Safety Servicing -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">SAFETY SERVICING</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Life Raft Inspection & Repack</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Immersion Suit Testing</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Inflatable PFD Servicing</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Hydrostatic Release Replacement</a></li>
                    </ul>
                </div>
                <!-- Column 2: Rigging Shop -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">RIGGING SHOP</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Wire Rope Splicing & Pressing</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Synthetic Rope Assemblies</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Certified Pull Testing to 100 t</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Mooring System Builds</a></li>
                    </ul>
                </div>
                <!-- Column 3: Compliance & Fleet -->
                <div>
                    <h3 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.2em] uppercase mb-4">COMPLIANCE & FLEET</h3>
                    <ul class="space-y-3 text-[13px] text-slate-300 font-medium">
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Transport Canada Compliance Checks</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">SOLAS Equipment Inspections</a></li>
                        <li><a href="service-single.php" class="hover:text-white transition-colors">Vessel Safety Outfitting</a></li>
                        <li><a href="contact.php" class="hover:text-white transition-colors">Fleet & Commercial Accounts</a></li>
                    </ul>
                </div>
                <!-- Column 4: Promotional Asset -->
                <div class="bg-spartan-navy-light p-6 relative overflow-hidden flex flex-col justify-between border border-slate-700/50">
                    <div class="absolute -right-16 -bottom-16 w-48 h-48 bg-spartan-teal opacity-10" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <div>
                        <h4 class="font-oswald text-sm font-bold text-white tracking-wider uppercase mb-2">CERTIFIED TECHNICIANS</h4>
                        <p class="text-xs text-slate-300 leading-relaxed font-light">
                            All servicing is performed by OEM-trained, Transport Canada certified technicians. Typical raft turnaround: 48 hours.
                        </p>
                    </div>
                    <a href="services.php" class="mt-4 inline-flex items-center text-[10px] font-bold text-spartan-teal tracking-[0.2em] hover:text-spartan-teal-light transition-colors uppercase">
                        <span>VIEW ALL SERVICES</span>
                        <i class="fa-solid fa-chevron-right text-[9px] ml-1.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- ================= MOBILE MENU DRAWER ================= -->
    <div id="mobile-menu" class="fixed inset-0 z-50 bg-spartan-navy/90 backdrop-blur-md transition-all duration-300 opacity-0 pointer-events-none">
        <div class="fixed top-0 bottom-0 right-0 w-80 max-w-full bg-spartan-navy border-l border-slate-800 p-6 flex flex-col justify-between transition-transform duration-300 translate-x-full" id="mobile-menu-inner">
            <div>
                <div class="flex items-center justify-between pb-6 border-b border-slate-800">
                    <img src="assets/images/Spartan Industrial Marine White.png" alt="Spartan Industrial Marine" class="h-12 object-contain">
                    <button onclick="toggleMobileMenu()" class="p-2 text-white hover:text-spartan-teal" aria-label="Close menu">
                        <i class="fa-solid fa-xmark text-2xl"></i>
                    </button>
                </div>

                <nav class="mt-8 flex flex-col space-y-4 font-oswald text-lg font-bold tracking-[0.15em] text-white uppercase">
                    <a href="products.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Products</a>
                    <a href="services.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Services</a>
                    <a href="brands.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Brands</a>
                    <a href="about.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">About Us</a>
                    <a href="faq.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">FAQ</a>
                    <a href="blog.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Blog</a>
                    <a href="locations.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Locations</a>
                    <a href="contact.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Contact</a>
                </nav>
            </div>

            <div class="border-t border-slate-800 pt-6 space-y-4">
                <a href="#" class="flex items-center space-x-3 text-white hover:text-spartan-teal transition-colors">
                    <i class="fa-regular fa-user text-base"></i>
                    <span class="text-xs font-bold tracking-[0.1em] uppercase">My Account</span>
                </a>
                <p class="text-[10px] text-slate-500 font-mono tracking-widest uppercase">
                    READY WHEN CONDITIONS TURN
                </p>
            </div>
        </div>
    </div>

    <!-- ================= SEARCH OVERLAY ================= -->
    <div id="search-overlay" class="fixed inset-0 z-50 bg-spartan-navy/95 backdrop-blur-sm transition-all duration-300 opacity-0 pointer-events-none flex items-center justify-center p-4">
        <button onclick="toggleSearch()" class="absolute top-6 right-6 p-3 text-white hover:text-spartan-teal transition-colors" aria-label="Close Search">
            <i class="fa-solid fa-xmark text-4xl"></i>
        </button>
        <div class="w-full max-w-2xl text-center select-text">
            <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-white uppercase mb-6">Search Products & Services</h2>
            <form action="search.php" method="get" class="relative">
                <input type="text" name="q" placeholder="Search rope, suits, rafts, boots, part numbers..." class="w-full bg-transparent border-b-2 border-slate-700 focus:border-spartan-teal text-white text-xl md:text-2xl font-light py-4 px-2 placeholder-slate-500 outline-none transition-all duration-300">
                <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-slate-400 hover:text-spartan-teal transition-colors" aria-label="Submit search">
                    <i class="fa-solid fa-arrow-right text-2xl"></i>
                </button>
            </form>
            <div class="mt-8 flex flex-wrap justify-center gap-2 text-xs font-bold tracking-widest uppercase text-slate-400">
                <span class="mr-2 self-center">Popular:</span>
                <a href="search.php?q=pot+warp" class="bg-spartan-navy-light text-white px-3.5 py-1.5 hover:bg-spartan-teal transition-colors">Pot Warp</a>
                <a href="search.php?q=immersion+suit" class="bg-spartan-navy-light text-white px-3.5 py-1.5 hover:bg-spartan-teal transition-colors">Immersion Suits</a>
                <a href="search.php?q=raft" class="bg-spartan-navy-light text-white px-3.5 py-1.5 hover:bg-spartan-teal transition-colors">Raft Inspection</a>
                <a href="search.php?q=boot" class="bg-spartan-navy-light text-white px-3.5 py-1.5 hover:bg-spartan-teal transition-colors">Deck Boots</a>
            </div>
        </div>
    </div>

    <!-- ================= CART DRAWER ================= -->
    <div id="cart-drawer" class="fixed inset-0 z-50 bg-spartan-navy/80 transition-all duration-300 opacity-0 pointer-events-none">
        <div class="fixed top-0 bottom-0 right-0 w-96 max-w-full bg-white flex flex-col justify-between transition-transform duration-300 translate-x-full border-l border-slate-200" id="cart-drawer-inner">
            <!-- Cart Header -->
            <div class="p-6 border-b border-slate-200 flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <i class="fa-solid fa-bag-shopping text-spartan-teal text-xl"></i>
                    <h3 class="font-oswald text-lg font-bold tracking-widest text-spartan-navy uppercase">Your Order</h3>
                </div>
                <button onclick="toggleCart()" class="p-2 text-slate-500 hover:text-spartan-teal" aria-label="Close Cart">
                    <i class="fa-solid fa-xmark text-2xl"></i>
                </button>
            </div>

            <!-- Cart Items Container -->
            <div class="flex-grow overflow-y-auto p-6 space-y-6" id="cart-items-list">
                <!-- Empty Cart State -->
                <div id="cart-empty-state" class="h-full flex flex-col items-center justify-center text-center space-y-4 py-12">
                    <div class="w-16 h-16 bg-spartan-light-gray flex items-center justify-center text-slate-400">
                        <i class="fa-solid fa-basket-shopping text-3xl"></i>
                    </div>
                    <div>
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-wider">Order is Empty</h4>
                        <p class="text-xs text-slate-500 max-w-[220px] mx-auto mt-2">
                            You haven't added anything yet. Commercial pricing applies at checkout for account holders.
                        </p>
                    </div>
                    <a href="products.php" class="bg-spartan-teal text-white py-2.5 px-6 text-[10px] font-bold tracking-widest hover:bg-spartan-teal-light hover:text-spartan-navy transition-all duration-300 rounded-none uppercase inline-block">
                        Browse Products
                    </a>
                </div>

                <!-- Mock items inside the cart (hidden initially) -->
                <div id="cart-items-grid" class="space-y-4 hidden select-text">
                    <!-- Dynamic items will render here via JS -->
                </div>
            </div>

            <!-- Cart Footer Summary -->
            <div class="p-6 border-t border-slate-200 bg-spartan-light-gray space-y-4">
                <div class="flex items-center justify-between text-xs font-bold uppercase tracking-wider text-slate-700">
                    <span>Subtotal:</span>
                    <span id="cart-subtotal-val">$0.00 CAD</span>
                </div>
                <p class="text-[10px] text-slate-500">
                    Taxes and shipping calculated at checkout. Commercial and fleet account discounts apply automatically.
                </p>
                <div class="grid grid-cols-2 gap-3">
                    <a href="cart.php" class="border border-slate-300 bg-transparent text-slate-600 py-3 text-[10px] font-bold tracking-widest hover:bg-slate-100 transition-colors uppercase rounded-none text-center">
                        View Cart
                    </a>
                    <button onclick="alert('Checkout mockup!'); clearCart(); toggleCart();" class="bg-spartan-teal text-white py-3 text-[10px] font-bold tracking-widest hover:bg-spartan-teal-light hover:text-spartan-navy transition-all duration-300 uppercase rounded-none flex items-center justify-center space-x-1.5">
                        <i class="fa-solid fa-lock text-[10px]"></i>
                        <span>CHECKOUT</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
