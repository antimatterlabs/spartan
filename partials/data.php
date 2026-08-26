<?php
/**
 * Spartan Industrial Marine - Mock site data
 * Central data source for all templates. When migrating to Shopify,
 * these arrays map to collections, products, blog posts, and metaobjects.
 */

$site = [
    'name'  => 'Spartan Industrial Marine',
    'phone' => '(902) 468-2111',
    'phone_href' => 'tel:+19024682111',
    'email' => 'info@spartanmarine.ca',
    'hours' => 'Mon-Fri 8am-5pm',
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
        'image' => 'assets/images/j9/marine-rigging.webp',
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
        'image' => 'assets/images/j9/commercial-fishing.webp',
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
        'image' => 'assets/images/j9/marine-footwear.webp',
        'contain' => false,
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
        'image' => 'assets/images/j9/marine-rigging.webp',
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
        'image' => 'assets/images/j9/other-buoys-floats.webp',
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
        'image' => 'assets/images/j9/marine-rigging.webp',
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
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'noreaster-rain-bibs',
        'name' => "Nor'easter Heavy Rain Bibs",
        'category' => 'workwear',
        'category_label' => 'WORKWEAR / RAIN GEAR',
        'price' => 89.99,
        'image' => 'assets/images/j9/spartan-workwear-woman.webp',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
    [
        'slug' => 'knotless-bait-bags',
        'name' => 'Knotless Bait Bags (50 pack)',
        'category' => 'fishing',
        'category_label' => 'FISHING GEAR / BAIT',
        'price' => 62.00,
        'image' => 'assets/images/j9/other-trawling-gear.webp',
        'contain' => false,
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ],
];

/* ---------- Services ---------- */
$site_services = [
    [
        'slug' => 'life-raft-inspection',
        'title' => 'Life Raft Inspection',
        'image' => 'assets/images/j9/life-raft-inspection.webp',
        'url' => 'inspection-services.php#life-raft-inspection',
        'cta' => 'Book Inspection',
        'desc' => 'Annual inspection, deployment testing, repacking, emergency pack checks, and documentation for commercial marine life raft compliance.',
    ],
    [
        'slug' => 'immersion-suit-testing',
        'title' => 'Immersion Suit Inspection',
        'image' => 'assets/images/j9/immersion-suit-testing.webp',
        'url' => 'inspection-services.php#immersion-suit-testing',
        'cta' => 'Schedule Testing',
        'desc' => 'Pressure testing, seam checks, zipper inspection, leakage assessment, and certification support for immersion suits used in harsh marine conditions.',
    ],
    [
        'slug' => 'epirb-plb-inspection',
        'title' => 'EPIRB & PLB Inspection',
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'url' => 'inspection-services.php#epirb-plb-inspection',
        'cta' => 'Book Inspection',
        'desc' => 'Inspection support for emergency position-indicating radio beacons and personal locator beacons.',
    ],
    [
        'slug' => 'jasons-cradle-inspection',
        'title' => "Jason's Cradle MOB Device Inspection",
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'url' => 'inspection-services.php#jasons-cradle-inspection',
        'cta' => 'Request Inspection',
        'desc' => 'Inspection support for Jason\'s Cradle marine rescue and man-overboard recovery devices.',
    ],
    [
        'slug' => 'life-jacket-pfd-inspection',
        'title' => 'Life Jacket & PFD Inspection',
        'image' => 'assets/images/j9/marine-safety.webp',
        'url' => 'inspection-services.php#life-jacket-pfd-inspection',
        'cta' => 'Request Inspection',
        'desc' => 'Condition and serviceability inspection support for life jackets and personal flotation devices.',
    ],
    [
        'slug' => 'davit-release-hook-inspection',
        'title' => 'Davit Release Hook Inspection',
        'image' => 'assets/images/j9/service-pull-testing.webp',
        'url' => 'inspection-services.php#davit-release-hook-inspection',
        'cta' => 'Request Inspection',
        'desc' => 'Inspection support for davit release hooks and associated marine rescue equipment.',
    ],
    [
        'slug' => 'distress-signal-pyrotechnic-inspection',
        'title' => 'Distress Signal & Pyrotechnic Inspection',
        'image' => 'assets/images/j9/marine-safety.webp',
        'url' => 'inspection-services.php#distress-signal-pyrotechnic-inspection',
        'cta' => 'Request Inspection',
        'desc' => 'Inspection support for marine distress signals, flares, and related pyrotechnic safety equipment.',
    ],
    [
        'slug' => 'rescue-boat-inspection',
        'title' => 'Rescue Boat Inspection',
        'image' => 'assets/images/j9/service-fleet-outfitting.webp',
        'url' => 'inspection-services.php#rescue-boat-inspection',
        'cta' => 'Request Inspection',
        'desc' => 'Inspection support for rescue boats and their onboard safety equipment.',
    ],
];

/* ---------- Blog posts ---------- */
$site_posts = require __DIR__ . '/blog-posts.php';

/* ---------- Brands ---------- */
$site_brands = [
    'VIKING', 'MUSTANG SURVIVAL', 'GUY COTTEN', 'XTRATUF', 'GRUNDÉNS', 'CROSBY',
    'HELLY HANSEN', 'ACR ELECTRONICS', 'SAMSON ROPE', 'STORMLINE', 'POLYFORM', 'HAMMAR',
    'PAUL', 'FIERCE WORKWEAR',
];

$site_brand_display_aliases = [
    'ACR ELECTRONICS INC.' => 'ACR ELECTRONICS',
    'CM HAMMAR AB' => 'HAMMAR',
    "GRUNDEN'S USA LTD" => 'GRUNDÉNS',
    'HELLY HANSEN WORKWEAR' => 'HELLY HANSEN',
    'MUSTANG SURVIVAL ULC' => 'MUSTANG SURVIVAL',
    'POLYFORM AS' => 'POLYFORM',
    'STORMLINE CANADA' => 'STORMLINE',
];

$site_product_category_groups = [
    'rope-line-nets' => [
        'label' => 'Rope, Line & Nets',
        'categories' => ['Rope', 'Twine', 'Nets', 'Net Needles', 'Fishing Line', 'Leadlines', 'Shock Cord'],
    ],
    'rigging-hardware' => [
        'label' => 'Rigging Hardware',
        'categories' => ['Hooks', 'Shackles', 'Sleeves', 'Turnbuckles', 'Links', 'Clips', 'Snaps', 'Swivels', 'Thimbles', 'Chain', 'Tie-Down Straps', 'Load Binders', 'Hammerlocks', 'Eye Bolts', 'Eye Nuts'],
    ],
    'workwear-footwear' => [
        'label' => 'Workwear & Footwear',
        'categories' => ['Boots', 'Insoles', 'Boot Bands', 'Jackets', 'Foul Weather Jackets', 'Pants', 'Foul Weather Pants', 'Gloves', 'Bibs', 'Belts', 'Belt Extender', 'Base Layer Bottoms', 'Base Layer Tops', 'Leggings', 'Hoodies', 'Balaclavas', 'Aprons', 'Kneepads', 'Hairnets', 'Duffle Bags'],
    ],
    'safety-buoys-survival' => [
        'label' => 'Safety, Buoys & Survival',
        'categories' => ['Buoys', 'Fenders', 'PFDs', 'Immersion Suits', 'Life Rafts', 'Re-Arm Kits', 'Marine Pyrotechnics', 'Personal Locator Beacons', 'EPIRBs', 'Reflective Tape', 'Lights', 'Markers'],
    ],
    'fishing-trap-gear' => [
        'label' => 'Fishing & Trap Gear',
        'categories' => ['Knives', 'Fishing Lures', 'Gangion', 'Lobster Bands', 'Lobster Trap Components', 'Crabpot Cones', 'Fish Boxes', 'Lobster Crackers and Forks', 'Bait Jars', 'Lobster Gauges', 'Lobster Pot Escape Hatches', 'Scallop Bags', 'Scallop Knives', 'Sinkers'],
    ],
    'maintenance-supplies' => [
        'label' => 'Maintenance & Supplies',
        'categories' => ['Marine Paint', 'Nails', 'Brushes', 'Cleaners', 'Flax Packing', 'Cutting Tools', 'Fuel Additives', 'Grease', 'Screws', 'Staples', 'Anti-Fatigue Mats', 'Bleach', 'Boat Hooks', 'Buttons', 'Clip Tools', 'Latch Kits', 'Lubricants', 'Scraper', 'Sharpeners', 'Wipe Cloths', 'Zipper Lubricants'],
    ],
];

function site_slugify($value) {
    $value = html_entity_decode((string) $value, ENT_QUOTES, 'UTF-8');
    $value = preg_replace('/[^a-z0-9]+/i', '-', $value);
    $value = trim(strtolower((string) $value), '-');

    return $value !== '' ? $value : 'item';
}

function site_clean_catalog_label($label, $aliases = []) {
    $label = trim((string) $label);
    if ($label === '') {
        return '';
    }

    if (isset($aliases[$label])) {
        $label = $aliases[$label];
    }

    $cleanups = [
        'Fishing Lines' => 'Fishing Line',
        'Liferafts' => 'Life Rafts',
        'EPRIBS' => 'EPIRBs',
        'EPRIBs' => 'EPIRBs',
        'PFDS' => 'PFDs',
        'Re Arm Kits' => 'Re-Arm Kits',
        'Re-arm Kits' => 'Re-Arm Kits',
        'Gagnion' => 'Gangion',
        'Eye Bolt' => 'Eye Bolts',
    ];

    return $cleanups[$label] ?? $label;
}

function site_product_group_by_label($label) {
    global $site_product_category_groups;

    foreach ($site_product_category_groups as $slug => $group) {
        if (($group['label'] ?? '') === $label) {
            return ['slug' => $slug] + $group;
        }
    }

    return null;
}

function site_product_group_for_category($category_label) {
    global $site_product_category_groups;

    $category_label = site_clean_catalog_label($category_label);
    foreach ($site_product_category_groups as $slug => $group) {
        if (in_array($category_label, $group['categories'] ?? [], true)) {
            return ['slug' => $slug] + $group;
        }
    }

    return null;
}

function site_product_group_url($group_slug) {
    return 'products.php?group=' . rawurlencode((string) $group_slug);
}

function site_product_category_url($category_label) {
    global $site_product_categories;

    $slug = site_slugify(site_clean_catalog_label($category_label));
    if (array_key_exists($slug, $site_product_categories)) {
        return 'products.php?cat=' . rawurlencode($slug);
    }

    return 'search.php?q=' . rawurlencode((string) $category_label);
}

function site_product_category_url_for_product($product) {
    global $site_product_categories;

    $category_slug = $product['category'] ?? '';
    if ($category_slug !== '' && array_key_exists($category_slug, $site_product_categories)) {
        return 'products.php?cat=' . rawurlencode($category_slug);
    }

    return site_product_category_url($product['category_name'] ?? $product['category_label'] ?? '');
}

function site_brand_display_label($brand) {
    global $site_brand_display_aliases;

    $brand = site_catalog_clean_value($brand);
    return $site_brand_display_aliases[$brand] ?? $brand;
}

function site_brand_slug($brand) {
    $brand = site_brand_display_label($brand);
    $brand = str_replace(['&'], [' and '], $brand);

    if (function_exists('iconv')) {
        $converted = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $brand);
        if (is_string($converted) && $converted !== '') {
            $brand = $converted;
        }
    }

    $brand = str_replace(["'", '`', '’'], '', $brand);

    return site_slugify($brand);
}

function site_brand_url($brand_slug) {
    return 'products.php?brand=' . rawurlencode((string) $brand_slug);
}

function site_product_brand_override($product) {
    $name = site_catalog_clean_value($product['name'] ?? '');

    if ($name !== '' && preg_match('/\bfierce\b/i', $name)) {
        return [
            'name' => 'Fierce Workwear',
            'slug' => site_brand_slug('Fierce Workwear'),
        ];
    }

    return null;
}

function site_attach_product_brand($product) {
    $override = site_product_brand_override($product);
    if ($override !== null) {
        $product['brand_name'] = $override['name'];
        $product['brand_slug'] = $override['slug'];

        return $product;
    }

    $vendor = site_catalog_clean_value($product['vendor'] ?? '');
    if ($vendor === '') {
        return $product;
    }

    $product['brand_name'] = site_brand_display_label($vendor);
    $product['brand_slug'] = site_brand_slug($product['brand_name']);

    return $product;
}

function site_build_brand_catalog($brands, $products) {
    $catalog = [];

    foreach ($brands as $brand) {
        $label = site_brand_display_label($brand);
        if ($label === '') {
            continue;
        }

        $slug = site_brand_slug($label);
        if (!isset($catalog[$slug])) {
            $catalog[$slug] = [
                'slug' => $slug,
                'label' => $label,
                'count' => 0,
                'vendors' => [],
                'categories' => [],
            ];
        }
    }

    foreach ($products as $product) {
        $vendor = site_catalog_clean_value($product['vendor'] ?? '');
        $label = $product['brand_name'] ?? site_brand_display_label($vendor);
        $slug = $product['brand_slug'] ?? site_brand_slug($label);
        if ($label === '' || $slug === '') {
            continue;
        }

        if (!isset($catalog[$slug])) {
            $catalog[$slug] = [
                'slug' => $slug,
                'label' => $label,
                'count' => 0,
                'vendors' => [],
                'categories' => [],
            ];
        }

        $catalog[$slug]['count']++;
        if ($vendor !== '') {
            $catalog[$slug]['vendors'][$vendor] = true;
        }

        $category = $product['category_group_name'] ?? ($product['category_name'] ?? '');
        if ($category !== '') {
            $catalog[$slug]['categories'][$category] = true;
        }
    }

    foreach ($catalog as &$brand) {
        $brand['vendors'] = array_keys($brand['vendors']);
        $brand['categories'] = array_keys($brand['categories']);
    }
    unset($brand);

    uasort($catalog, function ($a, $b) {
        if (($a['count'] > 0) !== ($b['count'] > 0)) {
            return $a['count'] > 0 ? -1 : 1;
        }

        if ($a['count'] !== $b['count']) {
            return $b['count'] <=> $a['count'];
        }

        return strcasecmp($a['label'], $b['label']);
    });

    return array_values($catalog);
}

function site_brand_by_slug($slug) {
    global $site_brand_catalog;

    foreach ($site_brand_catalog ?? [] as $brand) {
        if (($brand['slug'] ?? '') === $slug) {
            return $brand;
        }

        foreach ($brand['vendors'] ?? [] as $vendor) {
            if (site_brand_slug($vendor) === $slug) {
                return $brand;
            }
        }
    }

    return null;
}

function site_product_brand_for_product($product) {
    $slug = $product['brand_slug'] ?? site_brand_slug($product['vendor'] ?? '');
    return $slug !== '' ? site_brand_by_slug($slug) : null;
}

function site_product_attribute_value($product, $names) {
    $sources = [
        is_array($product['attributes'] ?? null) ? $product['attributes'] : [],
        is_array($product['specs'] ?? null) ? $product['specs'] : [],
    ];

    foreach ((array) $names as $name) {
        foreach ($sources as $source) {
            if (array_key_exists($name, $source) && site_catalog_has_value($source[$name])) {
                return site_catalog_clean_value($source[$name]);
            }
        }
    }

    return '';
}

function site_variant_base_name($product) {
    $name = site_catalog_clean_value($product['name'] ?? '');
    $base = $name;

    $base = preg_replace('/\bSIZE\s+[A-Z0-9.\/-]+\b/i', ' ', $base);

    $values = array_filter([
        site_product_attribute_value($product, ['Size', 'Size Number', 'Size (in)', 'Size / Length (mm)', 'Carton Size']),
        site_product_attribute_value($product, ['Colour', 'Color']),
    ]);

    foreach ($values as $value) {
        if (strlen($value) < 2) {
            continue;
        }

        $base = preg_replace('/\b' . preg_quote($value, '/') . '\b/i', ' ', $base);
    }

    $base = trim((string) preg_replace('/\s+/', ' ', $base));

    return $base !== '' ? $base : $name;
}

function site_variant_sort_value($value) {
    $value = site_catalog_clean_value($value);
    if (preg_match('/^-?\d+(?:\.\d+)?$/', $value)) {
        return str_pad((string) ((float) $value * 1000), 12, '0', STR_PAD_LEFT);
    }

    $normalized_size = strtoupper(str_replace([' ', '-', '_'], '', $value));
    $size_order = [
        'XXS' => 100,
        'XS' => 110,
        'S' => 120,
        'M' => 130,
        'L' => 140,
        'XL' => 150,
        'XXL' => 160,
        '2XL' => 160,
        'XXXL' => 170,
        '3XL' => 170,
        '4XL' => 180,
        '5XL' => 190,
    ];

    if (isset($size_order[$normalized_size])) {
        return 'size-' . str_pad((string) $size_order[$normalized_size], 4, '0', STR_PAD_LEFT);
    }

    return $value;
}

function site_variant_option_summary($product, $option_names) {
    $values = [];
    foreach ($option_names as $option_name) {
        $value = '';
        if ($option_name === ($product['variant_option1_name'] ?? '')) {
            $value = $product['variant_option1_value'] ?? '';
        } elseif ($option_name === ($product['variant_option2_name'] ?? '')) {
            $value = $product['variant_option2_value'] ?? '';
        } elseif ($option_name === ($product['variant_option3_name'] ?? '')) {
            $value = $product['variant_option3_value'] ?? '';
        } elseif ($option_name === 'Size') {
            $value = site_product_attribute_value($product, ['Size', 'Size Number', 'Size (in)', 'Size / Length (mm)', 'Carton Size']);
        } elseif ($option_name === 'Colour') {
            $value = site_product_attribute_value($product, ['Colour', 'Color']);
        }

        if (site_catalog_has_value($value)) {
            $values[$option_name] = site_catalog_clean_value($value);
        }
    }

    return $values;
}

function site_attach_product_variants($products) {
    $groups = [];

    foreach ($products as $index => $product) {
        if (!empty($product['variants'])) {
            continue;
        }

        $option_names = [];
        $group_key = '';
        $group_name = '';

        if (!empty($product['variant_group_id'])) {
            $group_key = 'explicit:' . $product['variant_group_id'];
            $group_name = site_catalog_clean_value($product['variant_group_name'] ?? $product['name'] ?? '');
            foreach ([
                $product['variant_option1_name'] ?? '',
                $product['variant_option2_name'] ?? '',
                $product['variant_option3_name'] ?? '',
            ] as $option_name) {
                if (site_catalog_has_value($option_name) && $option_name !== 'Title') {
                    $option_names[] = site_catalog_clean_value($option_name);
                }
            }
        } else {
            $size = site_product_attribute_value($product, ['Size', 'Size Number', 'Size (in)', 'Size / Length (mm)', 'Carton Size']);
            $colour = site_product_attribute_value($product, ['Colour', 'Color']);
            if ($size === '' && $colour === '') {
                continue;
            }

            $group_name = site_variant_base_name($product);
            $group_key = implode('|', [
                'infer',
                site_catalog_normalized_text($product['vendor'] ?? ''),
                $product['category'] ?? '',
                site_catalog_normalized_text($group_name),
            ]);
            $option_names = ['Size', 'Colour'];
        }

        if ($group_key === '') {
            continue;
        }

        if (!isset($groups[$group_key])) {
            $groups[$group_key] = [
                'name' => $group_name,
                'option_names' => $option_names,
                'indexes' => [],
            ];
        }

        $groups[$group_key]['indexes'][] = $index;
    }

    foreach ($groups as $group_key => $group) {
        if (count($group['indexes']) < 2) {
            continue;
        }

        $option_names = [];
        foreach ($group['option_names'] as $option_name) {
            $values = [];
            foreach ($group['indexes'] as $index) {
                $summary = site_variant_option_summary($products[$index], [$option_name]);
                if (!empty($summary[$option_name])) {
                    $values[] = $summary[$option_name];
                }
            }

            if (count(array_unique($values)) > 1) {
                $option_names[] = $option_name;
            }
        }

        if (empty($option_names)) {
            continue;
        }

        $variants = [];
        foreach ($group['indexes'] as $index) {
            $variant_product = $products[$index];
            $option_values = site_variant_option_summary($variant_product, $option_names);
            $label = implode(' / ', array_values($option_values));
            $variants[] = [
                'slug' => $variant_product['slug'] ?? '',
                'url' => site_product_url($variant_product),
                'name' => $variant_product['name'] ?? '',
                'sku' => $variant_product['sku'] ?? '',
                'price' => $variant_product['price'] ?? null,
                'price_suffix' => $variant_product['price_suffix'] ?? '',
                'options' => $option_values,
                'label' => $label !== '' ? $label : ($variant_product['name'] ?? ''),
            ];
        }

        usort($variants, function ($a, $b) use ($option_names) {
            foreach ($option_names as $option_name) {
                $cmp = strnatcasecmp(
                    site_variant_sort_value($a['options'][$option_name] ?? ''),
                    site_variant_sort_value($b['options'][$option_name] ?? '')
                );
                if ($cmp !== 0) {
                    return $cmp;
                }
            }

            return strnatcasecmp($a['sku'] ?? '', $b['sku'] ?? '');
        });

        foreach ($group['indexes'] as $index) {
            $products[$index]['variant_group_key'] = $group_key;
            $products[$index]['variant_group_name'] = $group['name'];
            $products[$index]['variant_option_names'] = $option_names;
            $products[$index]['variants'] = $variants;
        }
    }

    return $products;
}

function site_attach_product_group($product) {
    $group = site_product_group_for_category($product['category_name'] ?? '');
    if ($group === null) {
        $broad_group_by_category = [
            'rope' => 'rope-line-nets',
            'workwear' => 'workwear-footwear',
            'safety' => 'safety-buoys-survival',
            'fishing' => 'fishing-trap-gear',
        ];
        $group_slug = $broad_group_by_category[$product['category'] ?? ''] ?? '';
        if ($group_slug !== '') {
            global $site_product_category_groups;
            $group = ['slug' => $group_slug] + $site_product_category_groups[$group_slug];
        }
    }

    if ($group === null && !empty($product['category_label'])) {
        foreach (array_reverse(array_map('trim', explode('/', $product['category_label']))) as $label_part) {
            $group = site_product_group_for_category(ucwords(strtolower($label_part)));
            if ($group !== null) {
                break;
            }
        }
    }

    if ($group !== null) {
        $product['category_group'] = $group['slug'];
        $product['category_group_name'] = $group['label'];
    }

    return $product;
}

function site_has_any_term($haystack, $terms) {
    foreach ($terms as $term) {
        if (strpos($haystack, $term) !== false) {
            return true;
        }
    }

    return false;
}

function site_catalog_image_for($category_label, $product_type = '') {
    $haystack = strtolower($category_label . ' ' . $product_type);

    if (site_has_any_term($haystack, ['boot', 'jacket', 'pant', 'glove', 'bib', 'workwear', 'hoodie', 'apron'])) {
        return 'assets/images/j9/department-workwear.webp';
    }

    if (site_has_any_term($haystack, ['pfd', 'epirb', 'eprib', 'raft', 'immersion', 'pyrotechnic', 'beacon'])) {
        return 'assets/images/j9/other-marine-life-safety.webp';
    }

    if (site_has_any_term($haystack, ['buoy', 'fender', 'marker'])) {
        return 'assets/images/j9/other-buoys-floats.webp';
    }

    if (site_has_any_term($haystack, ['rope', 'line', 'twine', 'chain', 'shackle', 'snap', 'swivel', 'hook', 'rigging', 'hardware'])) {
        return 'assets/images/j9/marine-rigging.webp';
    }

    if (site_has_any_term($haystack, ['lobster', 'trap', 'scallop', 'crab', 'fish', 'net', 'lure', 'sinkers'])) {
        return 'assets/images/j9/commercial-fishing.webp';
    }

    return 'assets/images/j9/spartan-warehouse-fulfillment.webp';
}

function site_nullable_price($value) {
    if ($value === null || $value === '') {
        return null;
    }

    $normalized = preg_replace('/[^0-9.\-]/', '', (string) $value);

    return is_numeric($normalized) ? (float) $normalized : null;
}

function site_catalog_clean_value($value) {
    if (is_array($value) || is_object($value)) {
        return '';
    }

    $value = html_entity_decode((string) $value, ENT_QUOTES, 'UTF-8');
    $value = str_replace("\xC2\xA0", ' ', $value);

    return trim((string) preg_replace('/\s+/', ' ', $value));
}

function site_catalog_has_value($value) {
    return site_catalog_clean_value($value) !== '';
}

function site_catalog_normalized_text($value) {
    $value = strtolower(site_catalog_clean_value($value));
    $value = preg_replace('/[^a-z0-9]+/', ' ', $value);

    return trim((string) preg_replace('/\s+/', ' ', $value));
}

function site_catalog_attribute_name($name) {
    $clean = site_catalog_clean_value($name);
    $key = site_catalog_normalized_text($clean);
    $aliases = [
        'item desc' => 'Description',
        'shipping weight' => 'Shipping Weight',
        'shipping weight pounds' => 'Shipping Weight',
        'shipping weight lb' => 'Shipping Weight',
        'shipping weight kg' => 'Shipping Weight',
        'temperature limit if applicable' => 'Temperature Limit',
        'type of product' => 'Product Type',
        'manufactur lvl1 txt' => 'ERP Product Group',
        'material description' => 'Material Description',
        'customer material alternative' => 'Customer Material',
        'prod type level2 txt' => 'Product Type Level 2',
        'raw mat trdname txt' => 'Raw Material / Trade Name',
        'tech detail l4 txt' => 'Technical Detail Level 4',
        'average gross weight invoiced quantity kg' => 'Average Gross Unit Weight (kg)',
        'average net weight invoiced quantity kg' => 'Average Net Unit Weight (kg)',
        'wll' => 'Working Load Limit',
        'wll pounds' => 'Working Load Limit (lb)',
        'working load pounds' => 'Working Load Limit (lb)',
        'working load limit pounds' => 'Working Load Limit (lb)',
    ];

    return $aliases[$key] ?? $clean;
}

function site_catalog_is_generic_sheet($sheet_name) {
    return in_array(site_catalog_normalized_text($sheet_name), ['sheet1', 'sheet2', 'feuil1', 'feuille1', 'folha1'], true);
}

function site_catalog_fallback_category($sheet_name) {
    return site_catalog_is_generic_sheet($sheet_name) ? '' : site_catalog_clean_value($sheet_name);
}

function site_catalog_parse_weight($value, $header_name) {
    $original = site_catalog_clean_value($value);
    $text = strtolower(str_replace(',', '.', $original));
    $header = strtolower((string) $header_name);
    if (!preg_match('/-?\d+(?:\.\d+)?/', $text, $match)) {
        return ['grams' => null, 'original' => $original];
    }

    $number = (float) $match[0];
    if (preg_match('/\bkg\b|kilogram/', $text . ' ' . $header)) {
        return ['grams' => (int) round($number * 1000), 'original' => $original];
    }

    if (preg_match('/\blbs?\b|pounds?|\bpds\b/', $text . ' ' . $header)) {
        return ['grams' => (int) round($number * 453.59237), 'original' => $original];
    }

    if (preg_match('/\bgrams?\b|\bg\b/', $text . ' ' . $header)) {
        return ['grams' => (int) round($number), 'original' => $original];
    }

    return ['grams' => null, 'original' => $original];
}

function site_catalog_infer_category($title, $description, $vendor, $attributes) {
    $title_text = site_catalog_normalized_text($title);
    $text = site_catalog_normalized_text($title . ' ' . $description . ' ' . implode(' ', $attributes));
    $vendor_text = site_catalog_normalized_text($vendor);
    $erp_group = site_catalog_normalized_text($attributes['ERP Product Group'] ?? '');

    if ($vendor_text === 'cotesi') {
        if (preg_match('/\bknife/', $title_text)) {
            return 'Knives';
        }
        if (preg_match('/\bsheet net\b|\bnetting\b/', $title_text)) {
            return 'Nets';
        }
        if (in_array($erp_group, ['ropes', 'yachting'], true)) {
            return 'Rope';
        }
        if ($erp_group === 'fishing nets twines') {
            if (preg_match('/\bsheet net\b/', $title_text)) {
                return 'Nets';
            }
            if (preg_match('/\btwine\b/', $title_text)) {
                return 'Twine';
            }
        }
        if ($erp_group === 'purchase' && preg_match('/\bknife\b/', $title_text)) {
            return 'Knives';
        }
    }

    $rules = [
        ['/ratchet tie downs?|winch straps?/', 'Tie-Down Straps'],
        ['/needles?.*net|nor net/', 'Net Needles'],
        ['/pyrotechnics?|rocket signal|rocket illuminating|signal smoke|hand flare|buoyant smoke|line thrower/', 'Marine Pyrotechnics'],
        ['/gloves?|mitts?/', 'Gloves'],
        ['/spindles?/', 'Buoys'],
        ['/paint|interlac/', 'Marine Paint'],
        ['/lobster bands?/', 'Lobster Bands'],
        ['/brush|brushes/', 'Brushes'],
        ['/jigs?|rubber worm|worm.*rubber/', 'Fishing Lures'],
        ['/conspicuity.*tape|tape.*conspicuity/', 'Reflective Tape'],
        ['/corner protector.*traps?|lobster trap runner/', 'Lobster Trap Components'],
        ['/^chain\b/', 'Chain'],
        ['/packing flax/', 'Flax Packing'],
        ['/fuel conditioner|fuel-conditioner/', 'Fuel Additives'],
        ['/buoys?|floats?/', 'Buoys'],
        ['/screws?/', 'Screws'],
        ['/anti fatigue|anti-fatigue|antifatigue/', 'Anti-Fatigue Mats'],
        ['/scissors?|side cutter/', 'Cutting Tools'],
        ['/swivel barrel/', 'Swivels'],
        ['/measure lobster/', 'Lobster Gauges'],
        ['/hairnets?/', 'Hairnets'],
    ];

    foreach ($rules as [$pattern, $category]) {
        if (preg_match($pattern, $text)) {
            return $category;
        }
    }

    if ($vendor_text === 'multi brosses inc' && preg_match('/\bhandle threaded\b/', $text)) {
        return 'Brushes';
    }

    if ($vendor_text === 'norsk formblasing' && preg_match('/\bneedle\b/', $text)) {
        return 'Net Needles';
    }

    return '';
}

function site_product_from_catalog_record($record, $aliases = []) {
    if (!empty($record['excluded'])) {
        return null;
    }

    $name = site_catalog_clean_value($record['title'] ?? '');
    if ($name === '') {
        return null;
    }

    $category_label = site_clean_catalog_label($record['category'] ?? '', $aliases);
    if ($category_label === '') {
        $category_label = 'Imported Products';
    }

    $collection = site_clean_catalog_label($record['collection'] ?? $category_label, $aliases);
    $product_type = site_clean_catalog_label($record['productType'] ?? $category_label, $aliases);
    $category_parts = array_values(array_unique(array_filter([$category_label, $product_type])));
    $sku = site_catalog_clean_value($record['sku'] ?? '');
    $vendor = site_catalog_clean_value($record['vendor'] ?? $record['sourceSupplier'] ?? '');
    $handle = site_catalog_clean_value($record['handle'] ?? '');
    $price = site_nullable_price($record['price'] ?? null);
    $compare_price = site_nullable_price($record['compareAtPrice'] ?? null);
    $description = site_catalog_clean_value($record['description'] ?? '');
    $attributes = is_array($record['attributes'] ?? null) ? $record['attributes'] : [];

    if ($description === '') {
        $description = 'Contact Spartan for current availability, pricing, and ordering details.';
    }

    $specs = array_filter([
        'SKU' => $sku,
        'Vendor' => $vendor,
        'Collection' => $collection,
        'Product Type' => $product_type,
        'Weight' => !empty($record['weightOriginal']) ? site_catalog_clean_value($record['weightOriginal']) : (!empty($record['weightGrams']) ? number_format((float) $record['weightGrams']) . ' g' : ''),
    ]);

    foreach ($attributes as $attribute_name => $attribute_value) {
        if (count($specs) >= 10) {
            break;
        }

        $attribute_value = site_catalog_clean_value($attribute_value);
        if ($attribute_value !== '') {
            $specs[site_catalog_attribute_name($attribute_name)] = $attribute_value;
        }
    }

    return [
        'slug' => $handle !== '' ? site_slugify($handle) : site_slugify($name . ' ' . $sku),
        'name' => $name,
        'category' => site_slugify($category_label),
        'category_name' => $category_label,
        'category_label' => strtoupper(implode(' / ', $category_parts)),
        'price' => $price,
        'compare_price' => $compare_price,
        'badge' => $price === null ? 'QUOTE' : 'CATALOG',
        'badge_style' => 'navy',
        'image' => site_catalog_image_for($category_label, $product_type),
        'contain' => false,
        'desc' => $description,
        'sku' => $sku,
        'vendor' => $vendor,
        'collection' => $collection,
        'product_type' => $product_type,
        'attributes' => $attributes,
        'specs' => $specs,
        'source' => $record['source'] ?? 'catalog-source.json',
        'source_row_id' => $record['id'] ?? '',
        'variant_group_id' => $record['groupId'] ?? '',
        'variant_group_key' => $record['handle'] ?? '',
        'variant_group_name' => $record['title'] ?? '',
        'variant_option1_name' => $record['option1Name'] ?? 'Title',
        'variant_option1_value' => $record['option1Value'] ?? 'Default Title',
        'variant_option2_name' => $record['option2Name'] ?? '',
        'variant_option2_value' => $record['option2Value'] ?? '',
        'variant_option3_name' => $record['option3Name'] ?? '',
        'variant_option3_value' => $record['option3Value'] ?? '',
    ];
}

function site_shopify_csv_header_name($header) {
    $header = preg_replace('/^\xEF\xBB\xBF/', '', (string) $header);

    return trim($header, "\" \t\n\r\0\x0B");
}

function site_shopify_csv_rows($path) {
    if (!is_readable($path)) {
        return [];
    }

    $handle = fopen($path, 'r');
    if ($handle === false) {
        return [];
    }

    $headers = fgetcsv($handle, 0, ',', '"', '\\');
    if (!is_array($headers)) {
        fclose($handle);
        return [];
    }

    $headers = array_map('site_shopify_csv_header_name', $headers);
    $rows = [];

    while (($values = fgetcsv($handle, 0, ',', '"', '\\')) !== false) {
        $row = [];
        $has_value = false;

        foreach ($headers as $index => $header) {
            if ($header === '') {
                continue;
            }

            $value = $values[$index] ?? '';
            $row[$header] = $value;
            if (!$has_value && site_catalog_has_value($value)) {
                $has_value = true;
            }
        }

        if ($has_value) {
            $rows[] = $row;
        }
    }

    fclose($handle);

    return $rows;
}

function site_shopify_csv_first_value($rows, $field) {
    foreach ($rows as $row) {
        $value = site_catalog_clean_value($row[$field] ?? '');
        if ($value !== '') {
            return $value;
        }
    }

    return '';
}

function site_shopify_csv_first_price($rows, $field) {
    foreach ($rows as $row) {
        $price = site_nullable_price($row[$field] ?? null);
        if ($price !== null) {
            return $price;
        }
    }

    return null;
}

function site_shopify_csv_description_text($html) {
    $html = (string) $html;
    if ($html === '') {
        return '';
    }

    if (preg_match_all('/<tr[^>]*>\s*<th[^>]*>(.*?)<\/th>\s*<td[^>]*>(.*?)<\/td>\s*<\/tr>/is', $html, $matches, PREG_SET_ORDER)) {
        $parts = [];
        foreach ($matches as $match) {
            $label = site_catalog_clean_value(strip_tags($match[1]));
            $value = site_catalog_clean_value(strip_tags($match[2]));
            if ($label !== '' && $value !== '') {
                $parts[] = $label . ': ' . $value;
            }
        }

        if (!empty($parts)) {
            return implode('. ', $parts) . '.';
        }
    }

    $html = str_ireplace(['<br>', '<br/>', '<br />', '</p>', '</li>', '</tr>'], ["\n", "\n", "\n", ". ", ". ", ". "], $html);

    return site_catalog_clean_value(strip_tags($html));
}

function site_shopify_csv_metafield_label($field) {
    $field = site_catalog_clean_value($field);
    $aliases = [
        'product.metafields.spartan.department' => 'Department',
        'product.metafields.spartan.spec_available_colours' => 'Available Colours',
        'product.metafields.spartan.spec_average_gross_unit_weight_kg' => 'Average Gross Unit Weight (kg)',
        'product.metafields.spartan.spec_average_net_unit_weight_kg' => 'Average Net Unit Weight (kg)',
        'product.metafields.spartan.spec_box_dimensions_l_x_w_x_h_m' => 'Box Dimensions (L x W x H m)',
        'product.metafields.spartan.spec_cable_size_in' => 'Cable Size (in)',
        'product.metafields.spartan.spec_carton_size' => 'Carton Size',
        'product.metafields.spartan.spec_colour' => 'Colour',
        'product.metafields.spartan.spec_dimensions_in' => 'Dimensions (in)',
        'product.metafields.spartan.spec_eu_size' => 'EU Size',
        'product.metafields.spartan.spec_inside_diameter_in' => 'Inside Diameter (in)',
        'product.metafields.spartan.spec_outside_diameter_in' => 'Outside Diameter (in)',
        'product.metafields.spartan.spec_outside_diameter_after_swage_in' => 'Outside Diameter After Swage (in)',
        'product.metafields.spartan.spec_shank_x_diameter_in' => 'Shank x Diameter (in)',
        'product.metafields.spartan.spec_size_in' => 'Size (in)',
        'product.metafields.spartan.spec_size_length_mm' => 'Size / Length (mm)',
        'product.metafields.spartan.spec_size_number' => 'Size Number',
        'product.metafields.spartan.spec_standard_tap_size_in' => 'Standard Tap Size (in)',
        'product.metafields.spartan.spec_stock_size_in' => 'Stock Size (in)',
        'product.metafields.spartan.spec_take_up_length_j_length_in' => 'Take Up Length / J Length (in)',
        'product.metafields.spartan.spec_temperature_limit_if_applicable' => 'Temperature Limit',
        'product.metafields.spartan.spec_torque_specification_ft_lb' => 'Torque Specification (ft-lb)',
        'product.metafields.spartan.spec_working_load_limit_lb' => 'Working Load Limit (lb)',
        'product.metafields.spartan.spec_working_load_limit_ton' => 'Working Load Limit (ton)',
        'product.metafields.spartan_erp.material_code' => 'ERP Material Code',
        'product.metafields.spartan_erp.product_group' => 'ERP Product Group',
        'product.metafields.spartan_erp.supplier_type_code' => 'Supplier Type Code',
    ];

    if (isset($aliases[$field])) {
        return $aliases[$field];
    }

    $field = preg_replace('/^product\.metafields\.spartan_erp\./', '', $field);
    $field = preg_replace('/^product\.metafields\.spartan\./', '', $field);
    $field = preg_replace('/^spec_/', '', (string) $field);
    $field = str_replace('_', ' ', $field);

    return ucwords(strtolower($field));
}

function site_shopify_csv_metafields($rows) {
    $attributes = [];

    foreach ($rows as $row) {
        foreach ($row as $field => $value) {
            if (strpos($field, 'product.metafields.') !== 0 || !site_catalog_has_value($value)) {
                continue;
            }

            $label = site_shopify_csv_metafield_label($field);
            if ($label !== '' && !isset($attributes[$label])) {
                $attributes[$label] = site_catalog_clean_value($value);
            }
        }
    }

    return $attributes;
}

function site_shopify_csv_label_value($value) {
    $value = site_clean_catalog_label(site_catalog_clean_value($value));
    if ($value === '') {
        return '';
    }

    if (strtoupper($value) === $value && strlen($value) > 3) {
        $value = ucwords(strtolower($value));
    }

    $aliases = [
        'Bib Pants' => 'Bibs',
        'Jacket' => 'Jackets',
        'Pant' => 'Pants',
    ];

    return $aliases[$value] ?? $value;
}

function site_shopify_csv_variant_option_names($rows) {
    $option_names = [];

    for ($i = 1; $i <= 3; $i++) {
        $name_field = 'Option' . $i . ' name';
        $value_field = 'Option' . $i . ' value';
        $name = site_shopify_csv_first_value($rows, $name_field);
        if ($name === '') {
            continue;
        }

        $values = [];
        foreach ($rows as $row) {
            $value = site_catalog_clean_value($row[$value_field] ?? '');
            if ($value !== '') {
                $values[$value] = true;
            }
        }

        $unique_values = array_keys($values);
        if ($name === 'Title' && count($unique_values) <= 1 && (($unique_values[0] ?? '') === 'Default Title')) {
            continue;
        }

        if (count($unique_values) > 1 || count($rows) > 1) {
            $option_names[$i] = $name;
        }
    }

    return $option_names;
}

function site_shopify_csv_variant_label($options, $fallback) {
    $label = implode(' / ', array_filter(array_values($options)));

    return $label !== '' ? $label : $fallback;
}

function site_shopify_csv_product_from_rows($handle, $rows) {
    $title = site_shopify_csv_first_value($rows, 'Title');
    $sku = site_shopify_csv_first_value($rows, 'SKU');
    if ($title === '') {
        $title = $handle !== '' ? ucwords(str_replace('-', ' ', $handle)) : $sku;
    }

    if ($title === '') {
        return null;
    }

    $slug = site_slugify($handle !== '' ? $handle : ($title . ' ' . $sku));
    $collection = site_shopify_csv_label_value(site_shopify_csv_first_value($rows, 'Collection'));
    $product_type = site_shopify_csv_label_value(site_shopify_csv_first_value($rows, 'Type'));
    $shopify_category = site_shopify_csv_label_value(site_shopify_csv_first_value($rows, 'Product category'));
    $category_label = $collection ?: ($product_type ?: ($shopify_category ?: 'Imported Products'));
    $department = site_shopify_csv_label_value(site_shopify_csv_first_value($rows, 'product.metafields.spartan.department'));
    $vendor = site_shopify_csv_first_value($rows, 'Vendor');
    $description = site_shopify_csv_description_text(site_shopify_csv_first_value($rows, 'Description'));
    $price = site_shopify_csv_first_price($rows, 'Price');
    $compare_price = site_shopify_csv_first_price($rows, 'Compare-at price');
    $attributes = site_shopify_csv_metafields($rows);
    $option_names = site_shopify_csv_variant_option_names($rows);
    $variant_count = count($rows);
    $variants = [];
    $variant_search = [];

    if ($description === '') {
        $description = 'Contact Spartan for current availability, pricing, and ordering details.';
    }

    if (!empty($option_names) && $variant_count > 1) {
        foreach ($rows as $row) {
            $variant_sku = site_catalog_clean_value($row['SKU'] ?? '');
            $options = [];
            foreach ($option_names as $index => $option_name) {
                $value = site_catalog_clean_value($row['Option' . $index . ' value'] ?? '');
                if ($value !== '') {
                    $options[$option_name] = $value;
                }
            }

            $variant_label = site_shopify_csv_variant_label($options, $variant_sku);
            $variant_price = site_nullable_price($row['Price'] ?? null);
            $variant_compare_price = site_nullable_price($row['Compare-at price'] ?? null);
            $variants[] = [
                'slug' => $slug,
                'url' => site_product_variant_url(['slug' => $slug], $variant_sku),
                'name' => $title,
                'sku' => $variant_sku,
                'price' => $variant_price,
                'compare_price' => $variant_compare_price,
                'price_suffix' => '',
                'options' => $options,
                'label' => $variant_label,
            ];
            $variant_search[] = trim($variant_sku . ' ' . $variant_label);
        }

        usort($variants, function ($a, $b) use ($option_names) {
            foreach ($option_names as $option_name) {
                $cmp = strnatcasecmp(
                    site_variant_sort_value($a['options'][$option_name] ?? ''),
                    site_variant_sort_value($b['options'][$option_name] ?? '')
                );
                if ($cmp !== 0) {
                    return $cmp;
                }
            }

            return strnatcasecmp($a['sku'] ?? '', $b['sku'] ?? '');
        });
    }

    $category_parts = array_values(array_unique(array_filter([$department, $category_label])));
    $weight_grams = site_shopify_csv_first_value($rows, 'Weight value (grams)');
    $weight = $weight_grams !== '' ? number_format((float) $weight_grams) . ' g' : '';
    $specs = array_filter([
        'SKU' => $sku,
        'Vendor' => $vendor,
        'Collection' => $collection,
        'Product Type' => $product_type,
        'Variants' => count($variants) > 1 ? count($variants) . ' options' : '',
        'Weight' => $weight,
    ]);

    foreach ($attributes as $attribute_name => $attribute_value) {
        if (count($specs) >= 12) {
            break;
        }

        if ($attribute_name === 'Department') {
            continue;
        }

        if (site_catalog_has_value($attribute_value) && !isset($specs[$attribute_name])) {
            $specs[$attribute_name] = site_catalog_clean_value($attribute_value);
        }
    }

    return [
        'slug' => $slug,
        'name' => $title,
        'category' => site_slugify($category_label),
        'category_name' => $category_label,
        'category_label' => strtoupper(implode(' / ', $category_parts)),
        'price' => $price,
        'compare_price' => $compare_price,
        'badge' => $price === null ? 'QUOTE' : 'CATALOG',
        'badge_style' => 'navy',
        'image' => site_catalog_image_for($department . ' ' . $category_label, $product_type),
        'contain' => false,
        'desc' => $description,
        'sku' => $sku,
        'vendor' => $vendor,
        'collection' => $collection,
        'product_type' => $product_type,
        'attributes' => $attributes,
        'specs' => $specs,
        'source' => 'spartan-shopify-import-2026-07-23.csv',
        'source_row_id' => $handle,
        'variant_group_id' => count($variants) > 1 ? $slug : '',
        'variant_group_key' => count($variants) > 1 ? $handle : '',
        'variant_group_name' => count($variants) > 1 ? $title : '',
        'variant_option_names' => count($variants) > 1 ? array_values($option_names) : [],
        'variants' => $variants,
        'variant_search_text' => implode(' ', array_filter($variant_search)),
    ];
}

function site_load_shopify_csv_products($path) {
    $rows = site_shopify_csv_rows($path);
    if (empty($rows)) {
        return [];
    }

    $groups = [];
    foreach ($rows as $row) {
        $handle = site_catalog_clean_value($row['URL handle'] ?? '');
        if ($handle === '') {
            $handle = site_slugify(($row['Title'] ?? '') . ' ' . ($row['SKU'] ?? ''));
        }

        if ($handle === '') {
            continue;
        }

        if (!isset($groups[$handle])) {
            $groups[$handle] = [];
        }

        $groups[$handle][] = $row;
    }

    $products = [];
    foreach ($groups as $handle => $group_rows) {
        $product = site_shopify_csv_product_from_rows($handle, $group_rows);
        if ($product !== null) {
            $products[] = $product;
        }
    }

    return $products;
}

function site_normalize_catalog_source_row($row, $source, $sheet, $source_data, $state) {
    $core = [
        'sku' => '',
        'title' => '',
        'description' => '',
        'vendor' => '',
        'category' => '',
        'product_type' => '',
        'price' => '',
        'barcode' => '',
    ];
    $attributes = [];
    $weight = ['grams' => null, 'original' => ''];
    $headers = $sheet['headers'] ?? [];
    $values = $row['values'] ?? [];
    $mappings = is_array($state['mappings'] ?? null) ? $state['mappings'] : [];

    foreach ($headers as $index => $header) {
        $value = $values[$index] ?? '';
        if (!site_catalog_has_value($value)) {
            continue;
        }

        $raw_name = $header['name'] ?? 'Column ' . ($header['column'] ?? ($index + 1));
        $target = $mappings[$header['normalized'] ?? ''] ?? ($header['suggestedTarget'] ?? 'ignore');

        if ($target === 'attribute') {
            $attributes[site_catalog_attribute_name($raw_name)] = site_catalog_clean_value($value);
        } elseif ($target === 'weight') {
            $parsed_weight = site_catalog_parse_weight($value, $raw_name);
            if ($weight['original'] === '') {
                $weight = $parsed_weight;
            }
            if ($weight['grams'] === null && $parsed_weight['grams'] !== null) {
                $weight = $parsed_weight;
            }
        } elseif ($target !== 'ignore' && array_key_exists($target, $core) && !site_catalog_has_value($core[$target])) {
            $core[$target] = site_catalog_clean_value($value);
        }
    }

    $sku = site_catalog_clean_value($core['sku']);
    $category_lookup = is_array($source_data['categoryLookup'] ?? null) ? $source_data['categoryLookup'] : [];
    $source_category = $core['category']
        ?: ($category_lookup[strtoupper($sku)] ?? '')
        ?: site_catalog_fallback_category($sheet['name'] ?? '');
    $inferred_category = $source_category === ''
        ? site_catalog_infer_category($core['title'], $core['description'], $source['supplier'] ?? '', $attributes)
        : '';
    $category = $source_category ?: $inferred_category;
    $edit = is_array(($state['edits'] ?? [])[$row['id'] ?? ''] ?? null) ? $state['edits'][$row['id']] : [];

    $record = [
        'id' => $row['id'] ?? '',
        'sku' => $sku,
        'title' => site_catalog_clean_value($core['title']),
        'description' => site_catalog_clean_value($core['description']),
        'vendor' => site_catalog_clean_value($core['vendor'] ?: ($source['supplier'] ?? '')),
        'category' => site_catalog_clean_value($category),
        'collection' => site_catalog_clean_value($category),
        'productType' => site_catalog_clean_value($core['product_type'] ?: $category),
        'price' => site_nullable_price($core['price']),
        'compareAtPrice' => null,
        'barcode' => site_catalog_clean_value($core['barcode']),
        'weightGrams' => $weight['grams'],
        'weightOriginal' => $weight['original'],
        'handle' => site_slugify(($core['title'] ?: $sku ?: 'product') . '-' . ($sku ?: ($row['rowNumber'] ?? ''))),
        'attributes' => $attributes,
        'reviewStatus' => 'unreviewed',
        'excluded' => false,
        'sourceSupplier' => $source['supplier'] ?? '',
        'sourceFile' => $source['file'] ?? '',
        'sourceSheet' => $sheet['name'] ?? '',
        'source' => 'catalog-source.json',
    ];

    $record = array_merge($record, $edit);
    if (is_array($edit['attributes'] ?? null)) {
        $record['attributes'] = array_merge($attributes, $edit['attributes']);
    }

    $aliases = is_array($state['categoryAliases'] ?? null) ? $state['categoryAliases'] : [];
    $record['category'] = site_clean_catalog_label($record['category'] ?? '', $aliases);
    $record['collection'] = site_clean_catalog_label($record['collection'] ?? $record['category'], $aliases);
    $record['productType'] = site_clean_catalog_label($record['productType'] ?? $record['category'], $aliases);
    if (($record['productType'] ?? '') === '') {
        $record['productType'] = $record['category'];
    }

    $group = is_array(($state['groups'] ?? [])[$row['id'] ?? ''] ?? null) ? $state['groups'][$row['id']] : null;
    if ($group !== null) {
        $record['groupId'] = site_catalog_clean_value($group['groupId'] ?? '');
        $record['title'] = site_catalog_clean_value($group['title'] ?? $record['title']);
        $record['handle'] = site_slugify($group['handle'] ?? $record['handle']);
        $record['option1Name'] = site_catalog_clean_value($group['option1Name'] ?? 'Title');
        $record['option1Value'] = site_catalog_clean_value($group['option1Value'] ?? 'Default Title');
        $record['option2Name'] = site_catalog_clean_value($group['option2Name'] ?? '');
        $record['option2Value'] = site_catalog_clean_value($group['option2Value'] ?? '');
        $record['option3Name'] = site_catalog_clean_value($group['option3Name'] ?? '');
        $record['option3Value'] = site_catalog_clean_value($group['option3Value'] ?? '');
    }

    return $record;
}

function site_load_catalog_state($path) {
    if (!is_readable($path)) {
        return ['version' => 1, 'mappings' => [], 'edits' => [], 'categoryAliases' => [], 'groups' => []];
    }

    $json = json_decode((string) file_get_contents($path), true);
    $state = is_array($json['state'] ?? null) ? $json['state'] : [];

    return array_merge(['version' => 1, 'mappings' => [], 'edits' => [], 'categoryAliases' => [], 'groups' => []], $state);
}

function site_load_spartan_products($state_path, $source_path) {
    $state = site_load_catalog_state($state_path);
    $products = [];

    if (is_readable($source_path)) {
        $source_data = json_decode((string) file_get_contents($source_path), true);
        if (is_array($source_data)) {
            $sources_by_id = [];
            $sheets_by_id = [];

            foreach (($source_data['sources'] ?? []) as $source) {
                $sources_by_id[$source['id']] = $source;
                foreach (($source['sheets'] ?? []) as $sheet) {
                    $sheet['sourceId'] = $source['id'];
                    $sheets_by_id[$sheet['id']] = $sheet;
                }
            }

            $seen_identity = [];
            foreach (($source_data['rows'] ?? []) as $row) {
                $source = $sources_by_id[$row['sourceId'] ?? ''] ?? null;
                $sheet = $sheets_by_id[$row['sheetId'] ?? ''] ?? null;
                if ($source === null || $sheet === null) {
                    continue;
                }

                $record = site_normalize_catalog_source_row($row, $source, $sheet, $source_data, $state);
                $product = site_product_from_catalog_record($record, $state['categoryAliases']);
                if ($product === null) {
                    continue;
                }

                $identity = $product['sku'] !== '' ? 'sku:' . strtoupper($product['sku']) : 'slug:' . $product['slug'];
                if (isset($seen_identity[$identity])) {
                    continue;
                }

                $products[] = $product;
                $seen_identity[$identity] = true;
            }

            return $products;
        }
    }

    foreach (($state['edits'] ?? []) as $raw_product) {
        if (!is_array($raw_product)) {
            continue;
        }

        $product = site_product_from_catalog_record(array_merge(['source' => 'spartan-products.json'], $raw_product), $state['categoryAliases']);
        if ($product !== null) {
            $products[] = $product;
        }
    }

    return $products;
}

$site_shopify_csv_path = __DIR__ . '/../spartan-shopify-import-2026-07-23.csv';
$site_imported_products = is_readable($site_shopify_csv_path)
    ? site_load_shopify_csv_products($site_shopify_csv_path)
    : site_load_spartan_products(
        __DIR__ . '/../spartan-products.json',
        __DIR__ . '/../../spartan_products/data/catalog-source.json'
    );
$existing_product_slugs = array_fill_keys(array_column($site_products, 'slug'), true);
$imported_vendors = [];
foreach ($site_imported_products as $imported_product) {
    if (!isset($existing_product_slugs[$imported_product['slug']])) {
        $site_products[] = $imported_product;
        $existing_product_slugs[$imported_product['slug']] = true;
    }

    if (!isset($site_product_categories[$imported_product['category']])) {
        $site_product_categories[$imported_product['category']] = $imported_product['category_name'];
    }

    if (!empty($imported_product['vendor'])) {
        $imported_vendors[] = $imported_product['vendor'];
    }
}

if (!empty($imported_vendors)) {
    $site_brands = array_values(array_unique(array_merge($site_brands, $imported_vendors)));
}

foreach ($site_products as $site_product_index => $site_product) {
    $site_product = site_attach_product_group($site_product);
    $site_products[$site_product_index] = site_attach_product_brand($site_product);
}

$site_products = site_attach_product_variants($site_products);

$site_brand_catalog = site_build_brand_catalog($site_brands, $site_products);

/* ---------- Locations ---------- */
$site_locations = [
    [
        'slug' => 'dartmouth-ns',
        'city' => 'Dartmouth, NS',
        'branch_name' => 'Head Office',
        'badge' => 'SERVICE CENTER',
        'badge_style' => 'teal',
        'address' => '120 Thornhill Drive, Dartmouth, NS B3B 1B3',
        'address_lines' => ['120 Thornhill Drive', 'Dartmouth, NS B3B 1B3'],
        'street_address' => '120 Thornhill Drive',
        'locality' => 'Dartmouth',
        'province' => 'NS',
        'postal_code' => 'B3B 1B3',
        'phone' => '(902) 468-2111',
        'phone_href' => 'tel:+19024682111',
        'fax' => '(902) 468-3077',
        'hours' => 'Mon-Fri 8am-5pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00'],
        'lat' => 44.693314,
        'lng' => -63.594758,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+120+Thornhill+Drive+Dartmouth+NS',
        'image' => 'assets/images/j9/spartan-storefront-exterior.webp',
        'blurb' => 'Spartan head office, marine safety service support, and Atlantic Canada customer service from Dartmouth.',
        'intro' => 'The Dartmouth head office supports commercial, industrial, and recreational marine customers across Atlantic Canada with safety equipment, service coordination, product support, and branch assistance.',
        'services' => ['Head office support', 'Marine life safety equipment', 'Inspection and repair coordination', 'Commercial account support'],
        'local_page' => [
            'page_title' => 'Marine Supplies in Dartmouth, NS | Spartan Industrial Marine',
            'meta_description' => 'Source commercial marine supplies in Dartmouth, NS. Our Burnside warehouse offers heavy rigging, fishing gear, expert support, and certified local safety services.',
            'hero_title' => 'Marine Supplies Dartmouth, NS',
            'hero_eyebrow' => 'Dartmouth, NS',
            'hero_subtitle' => 'Serving the local fleet, industrial sites, and commercial fishermen from our Dartmouth service center. Drop off your gear, pick up supplies, or speak with the local team.',
            'intro_heading' => 'Your Local Marine Equipment, Services & Supplies Hub',
            'intro_text' => 'Spartan’s Dartmouth branch gives commercial crews, industrial sites, shipyards, and regional operators a local counter for stocked marine supplies, service intake, and technical support.',
            'product_heading' => 'Product Catalogue & Supplies',
            'product_subtext' => 'Our Dartmouth warehouse stocks a complete range of industrial marine hardware. If we do not have your exact item on the shelf, we can source it rapidly through our regional network.',
            'product_cta_label' => 'Shop Dartmouth Inventory',
            'product_cta_url' => 'products.php',
            'product_cards' => [
                [
                    'title' => 'Ropes & Twines',
                    'text' => 'High-strength wire rope, synthetic lines, and twines for industrial rigging.',
                    'url' => 'products.php?group=rope-line-nets',
                    'image' => 'assets/images/j9/marine-rigging.webp',
                ],
                [
                    'title' => 'Commercial Fishing Gear',
                    'text' => 'Trap gear, rope, netting, buoys, and commercial fishing hardware for working crews.',
                    'url' => 'products.php?group=fishing-trap-gear',
                    'image' => 'assets/images/j9/commercial-fishing.webp',
                ],
                [
                    'title' => 'Rainwear & Marine Operations Workwear',
                    'text' => 'Heavy-duty, weather-resistant protective clothing tailored for rough industrial crews.',
                    'url' => 'products.php?group=workwear-footwear',
                    'image' => 'assets/images/j9/department-workwear.webp',
                ],
                [
                    'title' => 'Marine Safety Equipment',
                    'text' => 'Transport Canada approved liferafts, survival suits, and emergency beacons.',
                    'url' => 'products.php?group=safety-buoys-survival',
                    'image' => 'assets/images/j9/marine-safety.webp',
                ],
            ],
            'service_heading' => 'Certified Local Inspection & Repair Support',
            'service_subtext' => 'Dartmouth is a Spartan service center for in-shop marine safety inspections, equipment intake, repair coordination, and certification records.',
            'service_cta_label' => 'Book Dartmouth Services',
            'service_cta_url' => 'contact.php',
            'service_items' => [
                [
                    'title' => 'Certified Marine Safety Inspections',
                    'text' => 'In-shop inspection support for liferafts, immersion suits, emergency beacons, PFDs, and related marine safety equipment.',
                    'image' => 'assets/images/j9/life-raft-inspection.webp',
                ],
                [
                    'title' => 'Specialized Equipment Support',
                    'text' => 'Inspection and repair coordination for supported marine safety equipment and manufacturer product lines.',
                    'image' => 'assets/images/j9/service-pull-testing.webp',
                ],
                [
                    'title' => 'Equipment Rental Pickup',
                    'text' => 'Local collection and drop-off coordination for your pre-certified fleet rental gear.',
                    'image' => 'assets/images/j9/spartan-warehouse-fulfillment.webp',
                ],
                [
                    'title' => 'CertTracker Document Syncing',
                    'text' => 'Digital record organization for applicable inspection paperwork and service details.',
                    'image' => 'assets/images/j9/service-compliance.webp',
                ],
            ],
            'faqs' => [
                [
                    'q' => 'Where is your Dartmouth shop located, and is there room for heavy freight transport?',
                    'a' => 'Our primary safety centre and warehouse are located at 120 Thornhill Drive in the Burnside Industrial Park. Our facility features a commercial-grade yard with dedicated bays and loading docks designed to accommodate heavy freight trucks, flatbeds, and commercial transport vehicles for seamless equipment drop-off and pickup.',
                ],
                [
                    'q' => 'Does the Dartmouth location handle emergency compliance repairs for container lines and tug fleets?',
                    'a' => 'Contact the Dartmouth team with the equipment type, manufacturer, service history, and required date. The team will confirm intake, service availability, documentation needs, and expected timing.',
                ],
                [
                    'q' => 'Can bulk commercial fishing and rigging supplies be ordered from Dartmouth for regional delivery?',
                    'a' => 'Absolutely. In addition to local warehouse pickups in Burnside, the Dartmouth hub serves as our primary logistics base for shipping commercial fishing gear, wire rope, and heavy rigging hardware directly to ports and shipyards across Nova Scotia.',
                ],
            ],
        ],
    ],
    [
        'slug' => 'sydney-ns',
        'city' => 'Sydney, NS',
        'branch_name' => 'Sydney Branch',
        'badge' => 'SERVICE DEPOT',
        'badge_style' => 'navy',
        'address' => 'P.O. Box 38, 1291 Victoria Road, Sydney, NS B1N 3B1',
        'address_lines' => ['P.O. Box 38, 1291 Victoria Road', 'Sydney, NS B1N 3B1'],
        'street_address' => 'P.O. Box 38, 1291 Victoria Road',
        'locality' => 'Sydney',
        'province' => 'NS',
        'postal_code' => 'B1N 3B1',
        'phone' => '(902) 564-5425',
        'phone_href' => 'tel:+19025645425',
        'fax' => '(902) 539-0904',
        'hours' => 'Mon-Fri 8am-5pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00'],
        'lat' => 46.165272,
        'lng' => -60.187604,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+1291+Victoria+Road+Sydney+NS',
        'image' => 'assets/images/j9/spartan-store-interior.webp',
        'blurb' => 'Cape Breton counter service for marine safety, fishing gear, industrial supplies, and local product support.',
        'intro' => 'The Sydney branch gives Cape Breton crews and operators a local Spartan counter for marine safety supplies, commercial fishing gear, and service coordination.',
        'services' => ['Marine safety equipment', 'Commercial fishing supplies', 'Industrial safety products', 'Local pickup support'],
    ],
    [
        'city' => 'Yarmouth, NS',
        'slug' => 'yarmouth-ns',
        'branch_name' => 'Yarmouth Branch',
        'badge' => 'SERVICE DEPOT',
        'badge_style' => 'navy',
        'address' => '44 Hawthorne Street, Yarmouth, NS B5A 1M7',
        'address_lines' => ['44 Hawthorne Street', 'Yarmouth, NS B5A 1M7'],
        'street_address' => '44 Hawthorne Street',
        'locality' => 'Yarmouth',
        'province' => 'NS',
        'postal_code' => 'B5A 1M7',
        'phone' => '(902) 742-3042',
        'phone_href' => 'tel:+19027423042',
        'fax' => '(902) 742-0982',
        'hours' => 'Mon-Fri 8am-5pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00'],
        'lat' => 43.835127,
        'lng' => -66.12099,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+44+Hawthorne+Street+Yarmouth+NS',
        'image' => 'assets/images/j9/department-commercial-fishing.webp',
        'blurb' => 'Southwest Nova Scotia branch for fishing gear, rope, marine hardware, and safety products.',
        'intro' => 'The Yarmouth branch supports Southwest Nova Scotia with local access to Spartan marine supplies, commercial fishing gear, rope, hardware, and safety equipment.',
        'services' => ['Commercial fishing gear', 'Rope and twine', 'Marine hardware', 'Safety and industrial supplies'],
    ],
    [
        'slug' => 'charlottetown-pei',
        'city' => 'Charlottetown, PEI',
        'branch_name' => 'Charlottetown Branch',
        'badge' => 'SERVICE DEPOT',
        'badge_style' => 'navy',
        'address' => '40 Schurman Street, Charlottetown, PE C1E 1B0',
        'address_lines' => ['40 Schurman Street', 'Charlottetown, PE C1E 1B0'],
        'street_address' => '40 Schurman Street',
        'locality' => 'Charlottetown',
        'province' => 'PE',
        'postal_code' => 'C1E 1B0',
        'phone' => '(902) 629-1218',
        'phone_href' => 'tel:+19026291218',
        'fax' => '(902) 566-9753',
        'hours' => 'Mon-Fri 8am-5pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00'],
        'lat' => 46.266515,
        'lng' => -63.169184,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+40+Schurman+Street+Charlottetown+PE',
        'image' => 'assets/images/j9/marine-safety.webp',
        'blurb' => 'Prince Edward Island branch for marine safety products, commercial fishing supply, and service support.',
        'intro' => 'The Charlottetown branch gives Prince Edward Island customers a local Spartan counter for marine life safety equipment, fishing supplies, and industrial products.',
        'services' => ['Marine life safety products', 'Fishing supplies', 'Industrial safety gear', 'PEI pickup support'],
    ],
    [
        'slug' => 'paradise-nl',
        'city' => 'Paradise, NL',
        'branch_name' => 'Paradise / Mount Pearl Branch',
        'badge' => 'SERVICE CENTER',
        'badge_style' => 'navy',
        'address' => '1225 Kenmount Rd, Paradise, NL A1L 0V8',
        'address_lines' => ['1225 Kenmount Rd', 'Paradise, NL A1L 0V8'],
        'street_address' => '1225 Kenmount Rd',
        'locality' => 'Paradise',
        'province' => 'NL',
        'postal_code' => 'A1L 0V8',
        'phone' => '(709) 722-4221',
        'phone_href' => 'tel:+17097224221',
        'fax' => '(709) 722-9736',
        'hours' => 'Mon-Fri 8am-5pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00'],
        'lat' => 47.5184546,
        'lng' => -52.8636341,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+1225+Kenmount+Road+Paradise+NL',
        'image' => 'assets/images/j9/spartan-warehouse-fulfillment.webp',
        'blurb' => 'Newfoundland branch serving Paradise, Mount Pearl, St. John\'s, and surrounding marine customers.',
        'intro' => 'The Paradise branch supports Newfoundland customers around Paradise, Mount Pearl, and St. John\'s with Spartan marine supplies, safety equipment, and service support.',
        'services' => ['Marine safety equipment', 'Industrial products', 'Fishing and vessel supplies', 'Newfoundland branch support'],
    ],
    [
        'slug' => 'caraquet-nb',
        'city' => 'Caraquet, NB',
        'branch_name' => 'Bas-Caraquet Branch',
        'badge' => 'SERVICE DEPOT',
        'badge_style' => 'navy',
        'address' => '7721 Rue St-Paul, Bas-Caraquet, NB E1W 6C1',
        'address_lines' => ['7721 Rue St-Paul', 'Bas-Caraquet, NB E1W 6C1'],
        'street_address' => '7721 Rue St-Paul',
        'locality' => 'Bas-Caraquet',
        'province' => 'NB',
        'postal_code' => 'E1W 6C1',
        'phone' => '(506) 727-4496',
        'phone_href' => 'tel:+15067274496',
        'fax' => '(506) 727-6926',
        'hours' => 'Mon-Fri 8am-5pm · Sat 8am-12pm',
        'schema_hours' => ['Mo-Fr 08:00-17:00', 'Sa 08:00-12:00'],
        'lat' => 47.805055,
        'lng' => -64.854655,
        'directions_url' => 'https://www.google.com/maps/search/?api=1&query=Spartan+Industrial+Marine+7721+Rue+St-Paul+Bas-Caraquet+NB',
        'image' => 'assets/images/j9/department-commercial-fishing.webp',
        'blurb' => 'Acadian Peninsula branch in Bas-Caraquet serving Caraquet-area marine and fishing customers.',
        'intro' => 'The Bas-Caraquet branch serves Caraquet and the Acadian Peninsula with Spartan marine supplies, fishing gear, rope, safety equipment, and local branch support.',
        'services' => ['Fishing gear', 'Marine safety products', 'Rope and twine', 'Saturday counter hours'],
    ],
];

function site_escape($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function site_post_url($post) {
    return 'blog-single.php?post=' . rawurlencode((string) ($post['slug'] ?? ''));
}

function site_find_post($slug) {
    global $site_posts;

    foreach ($site_posts as $post) {
        if (($post['slug'] ?? '') === $slug) {
            return $post;
        }
    }

    return null;
}

function site_location_map_query($location) {
    if (!empty($location['directions_url'])) {
        $url_query = parse_url($location['directions_url'], PHP_URL_QUERY);
        parse_str((string) $url_query, $params);

        if (!empty($params['query'])) {
            return $params['query'];
        }
    }

    $parts = ['Spartan Industrial Marine'];

    if (!empty($location['street_address'])) {
        $parts[] = $location['street_address'];
    }

    if (!empty($location['locality'])) {
        $parts[] = $location['locality'];
    }

    if (!empty($location['province'])) {
        $parts[] = $location['province'];
    }

    if (!empty($location['postal_code'])) {
        $parts[] = $location['postal_code'];
    }

    if (count($parts) === 1 && !empty($location['city'])) {
        $parts[] = $location['city'];
    }

    return implode(' ', $parts);
}

function site_location_map_embed_url($location) {
    return 'https://www.google.com/maps?q=' . rawurlencode(site_location_map_query($location)) . '&output=embed';
}

function site_locations_map_embed_url($locations) {
    return 'https://www.google.com/maps?q=' . rawurlencode('Spartan Industrial Marine locations Atlantic Canada') . '&output=embed';
}

function site_product_url($product) {
    return 'product-single.php?slug=' . rawurlencode($product['slug'] ?? '');
}

function site_product_variant_url($product, $variant_sku = '') {
    $url = site_product_url($product);
    $variant_sku = site_catalog_clean_value($variant_sku);
    if ($variant_sku !== '') {
        $url .= '&variant=' . rawurlencode($variant_sku);
    }

    return $url;
}

function site_product_by_slug($slug) {
    global $site_products;

    $slug_aliases = [
        'fierce-frontier-deck-boot' => 'fierce-frontier-boots',
    ];
    $slug = $slug_aliases[$slug] ?? $slug;

    foreach ($site_products as $product) {
        if (($product['slug'] ?? '') === $slug) {
            return $product;
        }
    }

    return null;
}

function site_location_url($location) {
    return 'location-' . $location['slug'] . '.php';
}

function site_location_by_slug($slug) {
    global $site_locations;

    foreach ($site_locations as $location) {
        if (($location['slug'] ?? '') === $slug) {
            return $location;
        }
    }

    return null;
}

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
