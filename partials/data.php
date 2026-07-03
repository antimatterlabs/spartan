<?php
/**
 * Spartan Industrial Marine - Mock site data
 * Central data source for all templates. When migrating to Shopify,
 * these arrays map to collections, products, blog posts, and metaobjects.
 */

$site = [
    'name'  => 'Spartan Industrial Marine',
    'phone' => '1-902-463-0000',
    'phone_href' => 'tel:+19024630000',
    'email' => 'info@spartanmarine.ca',
    'hours' => 'Mon-Fri 7:00-17:00 · Sat 8:00-12:00',
];

/* ---------- Product categories (used by filters) ---------- */
$site_product_categories = [
    'safety'   => 'Marine Safety',
    'rope'     => 'Rope & Rigging',
    'fishing'  => 'Fishing Gear',
    'workwear' => 'Workwear',
];

/* ---------- Products ---------- */
$site_products = [
    [
        'slug' => 'coastline-solas-immersion-suit',
        'name' => 'Coastline SOLAS Immersion Suit, Universal Adult',
        'category' => 'safety',
        'category_label' => 'MARINE SAFETY / SURVIVAL',
        'price' => 689.00,
        'badge' => 'TC APPROVED',
        'badge_style' => 'navy',
        'image' => 'assets/images/jacket.webp',
        'contain' => true,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'sinking-pot-warp-38',
        'name' => 'Sinking Pot Warp 3/8&Prime; × 1,200 ft Coil',
        'category' => 'rope',
        'category_label' => 'ROPE & RIGGING / POT WARP',
        'price' => 189.00,
        'badge' => 'BEST SELLER',
        'badge_style' => 'navy',
        'image' => 'assets/images/spartan-3.png',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'lobster-trap-kit',
        'name' => 'Lobster Trap Kit: Vents, Rings & Bait Bags (25 pk)',
        'category' => 'fishing',
        'category_label' => 'FISHING GEAR / LOBSTER',
        'price' => 74.50,
        'badge' => 'SEASON STOCK',
        'badge_style' => 'teal',
        'image' => 'assets/images/EQUIPMENT.jpg',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'stormwatch-float-jacket',
        'name' => 'Stormwatch Commercial Float Jacket',
        'category' => 'safety',
        'category_label' => 'MARINE SAFETY / FLOTATION',
        'price' => 149.99,
        'compare_price' => 199.99,
        'badge' => 'ON SALE',
        'badge_style' => 'teal',
        'image' => 'assets/images/float-jacket.webp',
        'contain' => true,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'fierce-frontier-deck-boot',
        'name' => 'Fierce Frontier Waterproof Deck Boot',
        'category' => 'workwear',
        'category_label' => 'WORKWEAR / FOOTWEAR',
        'price' => 129.00,
        'badge' => 'BEST SELLER',
        'badge_style' => 'navy',
        'image' => 'assets/images/the-boots.png',
        'contain' => true,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'galvanized-wire-rope-516',
        'name' => 'Galvanized Wire Rope 5/16&Prime;, Cut to Length',
        'category' => 'rope',
        'category_label' => 'ROPE & RIGGING / WIRE ROPE',
        'price' => 2.35,
        'price_suffix' => '/FT',
        'badge' => 'CUT TO LENGTH',
        'badge_style' => 'navy',
        'image' => 'assets/images/hero.png',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'dockline-grip-gloves',
        'name' => 'Dockline Heavy Grip Gloves, 3 Pair Pack',
        'category' => 'workwear',
        'category_label' => 'WORKWEAR / GLOVES',
        'price' => 34.99,
        'image' => 'assets/images/gloves.jpg',
        'contain' => true,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'hi-vis-trap-buoy',
        'name' => 'Hi-Vis Trap Buoy 11&Prime; × 18&Prime; (10 pack)',
        'category' => 'fishing',
        'category_label' => 'FISHING GEAR / BUOYS',
        'price' => 118.00,
        'badge' => 'SEASON STOCK',
        'badge_style' => 'teal',
        'image' => 'assets/images/spartan-4.png',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'galvanized-anchor-chain',
        'name' => 'Galvanized Anchor Chain 3/8&Prime;, Per Foot',
        'category' => 'rope',
        'category_label' => 'ROPE & RIGGING / CHAIN',
        'price' => 4.10,
        'price_suffix' => '/FT',
        'image' => 'assets/images/spartan-3.png',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'hydrostatic-release-unit',
        'name' => 'Hammar H20 Hydrostatic Release Unit',
        'category' => 'safety',
        'category_label' => 'MARINE SAFETY / RELEASES',
        'price' => 129.50,
        'badge' => 'TC APPROVED',
        'badge_style' => 'navy',
        'image' => 'assets/images/PFDS.jpg',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'noreaster-rain-bibs',
        'name' => "Nor'easter Heavy Rain Bibs",
        'category' => 'workwear',
        'category_label' => 'WORKWEAR / RAIN GEAR',
        'price' => 89.99,
        'image' => 'assets/images/WORKWEAR.jpg',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'knotless-bait-bags',
        'name' => 'Knotless Bait Bags (50 pack)',
        'category' => 'fishing',
        'category_label' => 'FISHING GEAR / BAIT',
        'price' => 62.00,
        'image' => 'assets/images/EQUIPMENT.jpg',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
];

/* ---------- Services ---------- */
$site_services = [
    [
        'slug' => 'life-raft-inspection',
        'title' => 'Life Raft Inspection & Repack',
        'image' => 'assets/images/PFDS.jpg',
        'cta' => 'Book Inspection',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
    [
        'slug' => 'immersion-suit-testing',
        'title' => 'Immersion Suit Testing',
        'image' => 'assets/images/spartan-2.png',
        'cta' => 'Schedule Testing',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
    [
        'slug' => 'splicing-custom-rigging',
        'title' => 'Splicing & Custom Rigging',
        'image' => 'assets/images/spartan-3.png',
        'cta' => 'Request Assembly',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
    [
        'slug' => 'certified-pull-testing',
        'title' => 'Certified Pull Testing',
        'image' => 'assets/images/hero.png',
        'cta' => 'Book Testing',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
    [
        'slug' => 'compliance-inspections',
        'title' => 'Compliance Inspections',
        'image' => 'assets/images/spartan-4.png',
        'cta' => 'Book Pre-Survey Check',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
    [
        'slug' => 'vessel-fleet-outfitting',
        'title' => 'Vessel & Fleet Outfitting',
        'image' => 'assets/images/EQUIPMENT.jpg',
        'cta' => 'Request a Quote',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
    ],
];

/* ---------- Blog posts ---------- */
$site_posts = [
    [
        'slug' => 'life-raft-service-schedule',
        'title' => 'How Often Does Your Life Raft Actually Need Servicing?',
        'category' => 'Marine Safety',
        'date' => 'June 18, 2026',
        'image' => 'assets/images/PFDS.jpg',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'sink-vs-float-pot-warp',
        'title' => 'Choosing Pot Warp: Sink Rope vs Float Rope',
        'category' => 'Gear Guides',
        'date' => 'June 4, 2026',
        'image' => 'assets/images/spartan-3.png',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'immersion-suit-storage',
        'title' => 'Immersion Suit Care Between Seasons',
        'category' => 'Marine Safety',
        'date' => 'May 22, 2026',
        'image' => 'assets/images/spartan-2.png',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'what-inspectors-check',
        'title' => 'What Transport Canada Looks For at Survey',
        'category' => 'Compliance',
        'date' => 'May 8, 2026',
        'image' => 'assets/images/spartan-4.png',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'wire-vs-synthetic-assemblies',
        'title' => 'Wire vs Synthetic: Choosing Rigging Assemblies',
        'category' => 'Gear Guides',
        'date' => 'April 24, 2026',
        'image' => 'assets/images/hero.png',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'season-prep-checklist',
        'title' => 'The Pre-Season Gear Checklist for Lobster Crews',
        'category' => 'Commercial Fishing',
        'date' => 'April 10, 2026',
        'image' => 'assets/images/EQUIPMENT.jpg',
        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
];

/* ---------- Brands ---------- */
$site_brands = [
    'VIKING', 'MUSTANG SURVIVAL', 'GUY COTTEN', 'XTRATUF', 'GRUNDÉNS', 'CROSBY',
    'HELLY HANSEN', 'ACR ELECTRONICS', 'SAMSON ROPE', 'STORMLINE', 'POLYFORM', 'HAMMAR',
];

/* ---------- Locations ---------- */
$site_locations = [
    [
        'city' => 'Dartmouth, NS',
        'badge' => 'HQ + SERVICE CENTRE',
        'badge_style' => 'teal',
        'address' => '124 Windmill Road, Dartmouth, NS',
        'phone' => '1-902-463-0000',
        'phone_href' => 'tel:+19024630000',
        'hours' => 'Mon-Fri 7:00-17:00 · Sat 8:00-12:00',
        'blurb' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'city' => 'Yarmouth, NS',
        'badge' => 'FISHING SUPPLY',
        'badge_style' => 'navy',
        'address' => '38 Water Street, Yarmouth, NS',
        'phone' => '1-902-742-0000',
        'phone_href' => 'tel:+19027420000',
        'hours' => 'Mon-Fri 7:00-17:00 · Sat 8:00-12:00',
        'blurb' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'city' => "St. John's, NL",
        'badge' => 'OFFSHORE & INDUSTRIAL',
        'badge_style' => 'navy',
        'address' => "210 Harbour Drive, St. John's, NL",
        'phone' => '1-709-579-0000',
        'phone_href' => 'tel:+17095790000',
        'hours' => 'Mon-Fri 7:00-17:00 · Sat 8:00-12:00',
        'blurb' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
];

/* ---------- FAQs ---------- */
$site_faqs = [
    [
        'q' => 'How long does a life raft inspection take?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Do you issue Transport Canada certificates?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Can you cut rope and wire to length?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Do you offer commercial or fleet pricing?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Do you ship, or is it pickup only?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'What if my immersion suit fails its test?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Can you outfit a new build or refit?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
    [
        'q' => 'Do you service gear you did not sell?',
        'a' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.',
    ],
];
