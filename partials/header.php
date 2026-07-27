<?php
/**
 * Global header: <head>, announcement bar, navigation, mega menus,
 * mobile menu, search overlay, and cart drawer.
 *
 * Expects (optional):
 *   $page_title  - string page title
 *   $active_nav  - 'home' | 'products' | 'services' | 'brands' | 'resources' | 'about' | 'faq' | 'locations' | 'contact'
 */
require_once __DIR__ . '/data.php';

$page_title = $page_title ?? 'Spartan Industrial Marine | Commercial Marine Supply & Certified Service';
$meta_description = $meta_description ?? 'Rope, rigging, safety equipment, commercial fishing gear, and certified life raft and immersion suit servicing for the people who work on the water. Atlantic Canada.';
$active_nav = $active_nav ?? '';

if (!function_exists('shop_category_link')) {
    function shop_category_link($label) {
        return [
            'label' => $label,
            'url' => site_product_category_url($label),
        ];
    }
}

$shop_menu_columns = [
    [
        [
            'title' => 'Rope, Line & Nets',
            'links' => array_map('shop_category_link', [
                'Rope',
                'Twine',
                'Nets',
                'Net Needles',
                'Fishing Line',
                'Leadlines',
                'Shock Cord',
            ]),
        ],
    ],
    [
        [
            'title' => 'Rigging Hardware',
            'links' => array_map('shop_category_link', [
                'Hooks',
                'Shackles',
                'Sleeves',
                'Turnbuckles',
                'Links',
                'Clips',
                'Snaps',
                'Swivels',
                'Thimbles',
                'Chain',
                'Tie-Down Straps',
                'Load Binders',
                'Hammerlocks',
                'Eye Bolts',
                'Eye Nuts',
            ]),
        ],
    ],
    [
        [
            'title' => 'Workwear & Footwear',
            'links' => array_map('shop_category_link', [
                'Boots',
                'Insoles',
                'Boot Bands',
                'Jackets',
                'Foul Weather Jackets',
                'Pants',
                'Foul Weather Pants',
                'Gloves',
                'Bibs',
                'Belts',
                'Belt Extender',
                'Base Layer Bottoms',
                'Base Layer Tops',
                'Leggings',
                'Hoodies',
                'Balaclavas',
                'Aprons',
                'Kneepads',
                'Hairnets',
                'Duffle Bags',
            ]),
        ],
    ],
    [
        [
            'title' => 'Safety, Buoys & Survival',
            'links' => array_map('shop_category_link', [
                'Buoys',
                'Fenders',
                'PFDs',
                'Immersion Suits',
                'Life Rafts',
                'Re-Arm Kits',
                'Marine Pyrotechnics',
                'Personal Locator Beacons',
                'EPIRBs',
                'Reflective Tape',
                'Lights',
                'Markers',
            ]),
        ],
    ],
    [
        [
            'title' => 'Fishing & Trap Gear',
            'links' => array_map('shop_category_link', [
                'Knives',
                'Fishing Lures',
                'Gangion',
                'Lobster Bands',
                'Lobster Trap Components',
                'Crabpot Cones',
                'Fish Boxes',
                'Lobster Crackers and Forks',
                'Bait Jars',
                'Lobster Gauges',
                'Lobster Pot Escape Hatches',
                'Scallop Bags',
                'Scallop Knives',
                'Sinkers',
            ]),
        ],
    ],
    [
        [
            'title' => 'Maintenance & Supplies',
            'links' => array_map('shop_category_link', [
                'Marine Paint',
                'Nails',
                'Brushes',
                'Cleaners',
                'Flax Packing',
                'Cutting Tools',
                'Fuel Additives',
                'Grease',
                'Screws',
                'Staples',
                'Anti-Fatigue Mats',
                'Bleach',
                'Boat Hooks',
                'Buttons',
                'Clip Tools',
                'Latch Kits',
                'Lubricants',
                'Scraper',
                'Sharpeners',
                'Wipe Cloths',
                'Zipper Lubricants',
            ]),
        ],
    ],
];

foreach ($shop_menu_columns as &$shop_menu_column) {
    foreach ($shop_menu_column as &$shop_menu_group) {
        $shop_group_meta = site_product_group_by_label($shop_menu_group['title'] ?? '');
        if ($shop_group_meta !== null) {
            $shop_menu_group['url'] = site_product_group_url($shop_group_meta['slug']);
            $shop_menu_group['slug'] = $shop_group_meta['slug'];
        }
    }
}
unset($shop_menu_column, $shop_menu_group, $shop_group_meta);

$marine_service_menu = [
    ['label' => 'Inspections & Repairs', 'url' => 'services.php'],
    ['label' => 'Rental Equipment', 'url' => 'services.php'],
    ['label' => 'Product Recall', 'url' => 'services.php'],
];

$resource_menu = [
    ['label' => 'Definitions & Warnings', 'url' => 'terms.php'],
    ['label' => 'Industry Articles', 'url' => 'blog.php'],
    ['label' => 'FAQs', 'url' => 'faq.php'],
    ['label' => 'Safety & Training', 'url' => 'services.php'],
    ['label' => 'CertTracker', 'url' => 'contact.php', 'highlight' => true],
];

$about_menu = [
    ['label' => 'Why Spartan', 'url' => 'about.php'],
    ['label' => 'Careers', 'url' => 'contact.php'],
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo site_escape($page_title); ?></title>
    <meta name="description" content="<?php echo site_escape($meta_description); ?>">
    <?php if (!empty($canonical_url)): ?>
    <link rel="canonical" href="<?php echo site_escape($canonical_url); ?>">
    <?php endif; ?>
    <?php if (!empty($head_extra)): ?>
    <?php echo $head_extra; ?>
    <?php endif; ?>

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
                <span><?php echo count($site_locations); ?> LOCATIONS ACROSS ATLANTIC CANADA</span>
            </a>
            <a href="services.php" class="hover:text-spartan-teal-light transition-colors flex items-center space-x-2">
                <i class="fa-solid fa-certificate text-spartan-teal-light text-xs"></i>
                <span>TRANSPORT CANADA CERTIFIED SERVICE CENTRE</span>
            </a>
            <a href="<?php echo $site['phone_href']; ?>" class="hover:text-spartan-teal-light transition-colors flex items-center space-x-2">
                <i class="fa-solid fa-phone text-spartan-teal-light text-xs"></i>
                <span>CALL: <?php echo site_escape($site['phone']); ?></span>
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
            <nav class="hidden lg:flex items-center space-x-1 xl:space-x-3 text-[11px] font-bold tracking-[0.13em] text-white">
                <div class="relative group" data-mega-trigger="shop-online-menu">
                    <a href="products.php" class="px-3 py-2 <?php echo in_array($active_nav, ['products', 'brands'], true) ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Shop Online</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                </div>

                <div class="relative group" data-mega-trigger="marine-services-menu">
                    <a href="services.php" class="px-3 py-2 <?php echo $active_nav === 'services' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Marine Services</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div id="marine-services-menu" data-mega-panel class="absolute left-0 top-full w-72 bg-white text-spartan-charcoal border border-slate-200 shadow-2xl transition-all duration-200 origin-top transform scale-y-0 opacity-0 pointer-events-none z-50">
                        <div class="py-2">
                            <?php foreach ($marine_service_menu as $item): ?>
                            <a href="<?php echo site_escape($item['url']); ?>" class="block px-5 py-3 text-sm font-semibold text-spartan-navy hover:bg-spartan-light-gray hover:text-spartan-teal transition-colors">
                                <?php echo site_escape($item['label']); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-mega-trigger="locations-menu">
                    <a href="locations.php" class="px-3 py-2 <?php echo $active_nav === 'locations' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Locations</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div id="locations-menu" data-mega-panel class="absolute left-0 top-full w-80 bg-white text-spartan-charcoal border border-slate-200 shadow-2xl transition-all duration-200 origin-top transform scale-y-0 opacity-0 pointer-events-none z-50">
                        <div class="py-2">
                            <?php foreach ($site_locations as $loc): ?>
                            <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="block px-5 py-3 text-sm font-semibold text-spartan-navy hover:bg-spartan-light-gray hover:text-spartan-teal transition-colors">
                                <?php echo site_escape($loc['city']); ?><?php echo ($loc['branch_name'] ?? '') === 'Head Office' ? ' (Head office)' : ''; ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-mega-trigger="resources-menu">
                    <a href="blog.php" class="px-3 py-2 <?php echo in_array($active_nav, ['resources', 'faq'], true) ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>Resources</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div id="resources-menu" data-mega-panel class="absolute left-0 top-full w-72 bg-white text-spartan-charcoal border border-slate-200 shadow-2xl transition-all duration-200 origin-top transform scale-y-0 opacity-0 pointer-events-none z-50">
                        <div class="py-2">
                            <?php foreach ($resource_menu as $item): ?>
                            <a href="<?php echo site_escape($item['url']); ?>" class="<?php echo !empty($item['highlight']) ? 'bg-spartan-navy text-white hover:bg-black' : 'text-spartan-navy hover:bg-spartan-light-gray hover:text-spartan-teal'; ?> block px-5 py-3 text-sm font-semibold transition-colors">
                                <?php echo site_escape($item['label']); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="relative group" data-mega-trigger="about-menu">
                    <a href="about.php" class="px-3 py-2 <?php echo $active_nav === 'about' ? 'text-spartan-teal' : ''; ?> hover:text-spartan-teal transition-colors flex items-center space-x-1 uppercase focus:outline-none">
                        <span>About</span>
                        <i class="fa-solid fa-chevron-down text-[9px] ml-1 transition-transform duration-200 group-hover:rotate-180"></i>
                    </a>
                    <div id="about-menu" data-mega-panel class="absolute right-0 top-full w-60 bg-white text-spartan-charcoal border border-slate-200 shadow-2xl transition-all duration-200 origin-top transform scale-y-0 opacity-0 pointer-events-none z-50">
                        <div class="py-2">
                            <?php foreach ($about_menu as $item): ?>
                            <a href="<?php echo site_escape($item['url']); ?>" class="block px-5 py-3 text-sm font-semibold text-spartan-navy hover:bg-spartan-light-gray hover:text-spartan-teal transition-colors">
                                <?php echo site_escape($item['label']); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Navigation Controls (Right Side) -->
            <div class="flex items-center space-x-3 xl:space-x-4 text-white shrink-0">
                <a href="contact.php" class="hidden lg:inline-flex items-center bg-spartan-teal text-white py-3 px-5 text-[10px] font-bold tracking-[0.18em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                    <span>Talk to Spartan</span>
                </a>

                <!-- Search Button -->
                <button onclick="toggleSearch()" class="p-2 hover:text-spartan-teal transition-colors" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass text-lg"></i>
                </button>

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

        <!-- ================= MEGA MENU: SHOP ONLINE ================= -->
        <div id="shop-online-menu" data-mega-panel class="absolute left-0 right-0 bg-white text-spartan-charcoal border-b border-slate-200 shadow-2xl transition-all duration-300 origin-top transform scale-y-0 opacity-0 pointer-events-none z-40 max-h-[calc(100vh-8rem)] overflow-y-auto">
            <div class="max-w-[1500px] mx-auto grid grid-cols-1 xl:grid-cols-[240px_minmax(0,1fr)]">
                <div class="bg-spartan-light-gray border-b xl:border-b-0 xl:border-r border-slate-200 p-6">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-5">Shop Online</h3>
                    <div class="space-y-4 text-xs font-bold tracking-[0.12em] uppercase">
                        <a href="brands.php" class="group relative block h-32 overflow-hidden bg-spartan-navy text-white">
                            <img src="assets/images/j9/marine-rigging.webp" alt="" class="absolute inset-0 h-full w-full object-cover opacity-45 group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute inset-0 bg-[#0A4070]/85"></span>
                            <span class="relative z-10 flex h-full flex-col justify-between p-5">
                                <span class="font-oswald text-3xl font-bold italic tracking-wide leading-none">PAUL</span>
                                <span class="max-w-[9rem] text-[10px] leading-relaxed tracking-[0.18em]">Built For Serious Work</span>
                                <i class="fa-solid fa-arrow-right absolute right-5 bottom-5 text-sm text-white/80 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </span>
                        </a>
                        <a href="products.php?cat=workwear" class="group relative block h-32 overflow-hidden bg-[#F45B22] text-white">
                            <img src="assets/images/j9/spartan-workwear-woman.webp" alt="" class="absolute inset-0 h-full w-full object-cover opacity-45 group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute inset-0 bg-[#F45B22]/85"></span>
                            <span class="relative z-10 flex h-full flex-col justify-between p-5">
                                <span class="font-oswald text-2xl font-bold italic tracking-wide leading-none">FIERCE<br><span class="text-base tracking-[0.2em] not-italic">WORKWEAR</span></span>
                                <span class="max-w-[10rem] text-[10px] leading-relaxed tracking-[0.16em]">Gear That Works Hard</span>
                                <i class="fa-solid fa-arrow-right absolute right-5 bottom-5 text-sm text-white/80 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </span>
                        </a>
                        <a href="brands.php" class="inline-flex items-center text-[10px] font-bold tracking-[0.22em] text-spartan-teal uppercase hover:text-spartan-navy transition-colors">
                            <span>View All Brands</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                        </a>
                        <div class="pt-3 border-t border-slate-200">
                            <a href="products.php" class="flex items-center justify-between bg-yellow-300 px-4 py-3 text-spartan-navy hover:bg-yellow-200 transition-colors">
                                <span>On Sale</span>
                                <i class="fa-solid fa-arrow-right text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 lg:p-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6 gap-x-8 xl:gap-x-10 gap-y-8">
                        <?php foreach ($shop_menu_columns as $column): ?>
                        <div class="space-y-8">
                            <?php foreach ($column as $group): ?>
                            <div>
                                <h4 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-wide mb-2">
                                    <?php if (!empty($group['url'])): ?>
                                    <a href="<?php echo site_escape($group['url']); ?>" class="hover:text-spartan-teal hover:underline underline-offset-4 transition-colors">
                                        <?php echo site_escape($group['title']); ?>
                                    </a>
                                    <?php else: ?>
                                    <?php echo site_escape($group['title']); ?>
                                    <?php endif; ?>
                                </h4>
                                <ul class="space-y-1.5 text-[13px] leading-tight">
                                    <?php foreach (($group['links'] ?? []) as $link): ?>
                                    <li>
                                        <a href="<?php echo site_escape($link['url']); ?>" class="<?php echo !empty($link['strong']) ? 'font-bold text-spartan-navy' : 'text-slate-700'; ?> hover:text-spartan-teal hover:underline underline-offset-4 transition-colors">
                                            <?php echo site_escape($link['label']); ?>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php endforeach; ?>
                    </div>
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
                    <a href="products.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Shop Online</a>
                    <a href="services.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Marine Services</a>
                    <a href="locations.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Locations</a>
                    <a href="blog.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">Resources</a>
                    <a href="about.php" class="hover:text-spartan-teal transition-colors py-2 border-b border-slate-800/40">About</a>
                </nav>
            </div>

            <div class="border-t border-slate-800 pt-6 space-y-4">
                <a href="contact.php" class="flex items-center justify-center bg-spartan-teal text-white py-3 px-5 hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                    <span class="text-xs font-bold tracking-[0.18em] uppercase">Talk to Spartan</span>
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
