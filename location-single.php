<?php
require_once __DIR__ . '/partials/data.php';

$location_slug = $location_slug ?? ($_GET['slug'] ?? '');
$location = site_location_by_slug($location_slug);

if (!$location) {
    http_response_code(404);
    $page_title = 'Location Not Found | Spartan Industrial Marine';
    $active_nav = 'locations';
    require_once __DIR__ . '/partials/header.php';
    ?>
    <section class="py-20 md:py-28 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center select-text">
        <h1 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase mb-4">Location Not Found</h1>
        <p class="text-sm text-slate-600 font-light leading-relaxed mb-8">The Spartan location you requested could not be found.</p>
        <a href="locations.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
            <span>View Locations</span>
            <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
        </a>
    </section>
    <?php
    require_once __DIR__ . '/partials/footer.php';
    return;
}

$location_url = site_location_url($location);
$local_page = $location['local_page'] ?? [];
$page_title = $local_page['page_title'] ?? ('Spartan Industrial Marine ' . $location['city'] . ' | Location & Hours');
$meta_description = $local_page['meta_description'] ?? ('Visit Spartan Industrial Marine in ' . $location['city'] . ' for marine safety equipment, fishing gear, industrial supplies, service support, hours, phone, and directions.');
$canonical_url = $location_url;
$active_nav = 'locations';

$schema = [
    '@context' => 'https://schema.org',
    '@type' => 'LocalBusiness',
    'name' => 'Spartan Industrial Marine - ' . $location['city'],
    'url' => $canonical_url,
    'telephone' => $location['phone'],
    'areaServed' => $location['city'],
];

if (!empty($location['street_address'])) {
    $schema['address'] = [
        '@type' => 'PostalAddress',
        'streetAddress' => $location['street_address'],
        'addressLocality' => $location['locality'],
        'addressRegion' => $location['province'],
        'postalCode' => $location['postal_code'],
        'addressCountry' => 'CA',
    ];
}

if (!empty($location['schema_hours'])) {
    $schema['openingHours'] = $location['schema_hours'];
}

if (!empty($location['lat']) && !empty($location['lng'])) {
    $schema['geo'] = [
        '@type' => 'GeoCoordinates',
        'latitude' => $location['lat'],
        'longitude' => $location['lng'],
    ];
}

$head_extra = '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

require_once __DIR__ . '/partials/header.php';

$hero_eyebrow = $local_page['hero_eyebrow'] ?? $location['branch_name'];
$hero_title = $local_page['hero_title'] ?? ('Spartan ' . $location['locality']);
$hero_heading = $local_page['intro_heading'] ?? ('Marine Supply & Service Support In ' . $location['city']);
$hero_subtitle = $local_page['hero_subtitle'] ?? ($location['intro'] ?? $location['blurb']);
$product_heading = $local_page['product_heading'] ?? 'Product Catalogue & Supplies';
$product_subtext = $local_page['product_subtext'] ?? ('The ' . $location['locality'] . ' branch connects local crews, vessel operators, and industrial teams with Spartan marine supplies, safety equipment, fishing gear, and branch pickup support.');
$product_cta_label = $local_page['product_cta_label'] ?? 'Shop Products';
$product_cta_url = $local_page['product_cta_url'] ?? 'products.php';
$product_cards = $local_page['product_cards'] ?? [
    [
        'title' => 'Marine Safety Equipment',
        'text' => 'Life safety gear, flotation, emergency equipment, and compliance essentials for working vessels.',
        'url' => 'products.php?group=safety-buoys-survival',
        'image' => 'assets/images/j9/marine-safety.webp',
    ],
    [
        'title' => 'Commercial Fishing Gear',
        'text' => 'Fishing supplies, trap gear, lines, hardware, and daily-use gear for regional crews.',
        'url' => 'products.php?group=fishing-trap-gear',
        'image' => 'assets/images/j9/commercial-fishing.webp',
    ],
    [
        'title' => 'Rope, Line & Rigging',
        'text' => 'Rope, twine, rigging hardware, tie-downs, and working line for marine operations.',
        'url' => 'products.php?group=rope-line-nets',
        'image' => 'assets/images/j9/marine-rigging.webp',
    ],
    [
        'title' => 'Workwear & Footwear',
        'text' => 'Weather-ready clothing, boots, gloves, bibs, and protective gear built for harsh conditions.',
        'url' => 'products.php?group=workwear-footwear',
        'image' => 'assets/images/j9/department-workwear.webp',
    ],
];
$service_heading = $local_page['service_heading'] ?? 'Local Service & Branch Support';
$service_subtext = $local_page['service_subtext'] ?? ('Spartan ' . $location['locality'] . ' supports product questions, branch pickup, regional sourcing, and service coordination for marine and industrial customers.');
$service_cta_label = $local_page['service_cta_label'] ?? 'Contact This Branch';
$service_cta_url = $local_page['service_cta_url'] ?? 'contact.php';
$service_items = $local_page['service_items'] ?? [
    [
        'title' => 'Local Counter Support',
        'text' => 'Call ahead or stop in for product availability, branch pickup timing, and practical support from the local Spartan team.',
        'image' => $location['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp',
    ],
    [
        'title' => 'Marine Safety Supply',
        'text' => 'Access safety gear, industrial products, and vessel essentials through the regional Spartan branch network.',
        'image' => 'assets/images/j9/marine-safety.webp',
    ],
    [
        'title' => 'Fishing Gear & Rigging',
        'text' => 'Source rope, twine, hardware, fishing gear, and working supplies for commercial crews and operators.',
        'image' => 'assets/images/j9/commercial-fishing.webp',
    ],
    [
        'title' => 'Service Coordination',
        'text' => 'Coordinate inspection questions, repairs, rentals, and certification support with Spartan’s service team.',
        'image' => 'assets/images/j9/service-compliance.webp',
    ],
];
$faq_heading = $local_page['faq_heading'] ?? ($location['locality'] . ' Branch Questions');
$faqs = $local_page['faqs'] ?? [
    [
        'q' => 'Can I call the ' . $location['city'] . ' branch before visiting?',
        'a' => 'Yes. Call the branch at ' . $location['phone'] . ' to ask about product availability, pickup timing, service questions, or regional support before you visit.',
    ],
    [
        'q' => 'Can this branch help source products that are not on the shelf?',
        'a' => 'Yes. If a specific marine product, safety item, rope, rigging component, or fishing supply is not immediately available, the branch can help check Spartan’s regional network and supplier options.',
    ],
    [
        'q' => 'Does this location support commercial fishing and marine crews?',
        'a' => 'Yes. The ' . $location['locality'] . ' branch supports working waterfront customers with marine supplies, safety equipment, fishing gear, local pickup, and practical product guidance.',
    ],
    [
        'q' => 'Can this branch help coordinate Spartan services?',
        'a' => 'Yes. The local team can help route inspection, repair, rental, and certification questions to the right Spartan service team.',
    ],
];
?>

    <!-- Local SEO hero -->
    <section class="relative overflow-hidden bg-spartan-navy">
        <div class="absolute inset-0 overflow-hidden bg-spartan-navy" aria-hidden="true">
            <img src="<?php echo site_escape($location['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0" style="background: linear-gradient(90deg, rgba(12, 27, 36, 0.74) 0%, rgba(12, 27, 36, 0.66) 52%, rgba(12, 27, 36, 0.38) 100%);"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 md:pt-20 pb-16 md:pb-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_390px] gap-10 lg:gap-16 items-start select-text">
                <div class="max-w-3xl">
                    <?php if (!empty($hero_eyebrow)): ?>
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.28em] uppercase block mb-5">
                        <?php echo site_escape($hero_eyebrow); ?>
                    </span>
                    <?php endif; ?>

                    <h1 class="font-oswald text-4xl md:text-5xl lg:text-6xl font-bold tracking-widest text-white uppercase leading-tight mb-6">
                        <?php echo site_escape($hero_title); ?>
                    </h1>

                    <h2 class="font-oswald text-xl md:text-2xl font-bold tracking-widest text-white uppercase leading-tight mb-5 max-w-2xl">
                        <?php echo site_escape($hero_heading); ?>
                    </h2>

                    <p class="text-base text-slate-200 font-light leading-relaxed max-w-2xl mb-8">
                        <?php echo site_escape($hero_subtitle); ?>
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="<?php echo site_escape($location['phone_href']); ?>" class="inline-flex items-center justify-center bg-spartan-teal text-white py-4 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                            <i class="fa-solid fa-phone text-[11px] mr-2.5"></i>
                            <span>Call Local Shop</span>
                        </a>
                        <a href="<?php echo site_escape($location['directions_url']); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center border border-white/50 text-white py-4 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                            <i class="fa-solid fa-route text-[11px] mr-2.5"></i>
                            <span>Get Driving Directions</span>
                        </a>
                    </div>
                </div>

                <aside class="bg-white border border-slate-200 p-6 md:p-8 lg:p-10 shadow-[0_22px_70px_rgba(12,27,36,0.16)]">
                    <span class="<?php echo $location['badge_style'] === 'teal' ? 'bg-spartan-teal' : 'bg-spartan-navy'; ?> text-white text-[8px] px-2.5 py-1.5 font-mono font-bold tracking-wider uppercase inline-block mb-6">
                        <?php echo site_escape($location['badge']); ?>
                    </span>
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase mb-7">
                        <?php echo site_escape($location['city']); ?>
                    </h3>

                    <ul class="space-y-5 text-sm text-slate-700 font-light">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot text-spartan-teal text-sm mt-1"></i>
                            <span class="leading-relaxed">
                                <?php foreach ($location['address_lines'] as $line): ?>
                                    <?php echo site_escape($line); ?><br>
                                <?php endforeach; ?>
                            </span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-spartan-teal text-sm"></i>
                            <a href="<?php echo site_escape($location['phone_href']); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($location['phone']); ?></a>
                        </li>
                        <?php if (!empty($location['fax'])): ?>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-fax text-spartan-teal text-sm"></i>
                            <span><?php echo site_escape($location['fax']); ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if (!empty($site['email'])): ?>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-spartan-teal text-sm"></i>
                            <a href="mailto:<?php echo site_escape($site['email']); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($site['email']); ?></a>
                        </li>
                        <?php endif; ?>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-clock text-spartan-teal text-sm"></i>
                            <span><?php echo site_escape($location['hours']); ?></span>
                        </li>
                    </ul>

                    <div class="mt-8">
                        <a href="locations.php" class="inline-flex items-center text-spartan-navy hover:text-spartan-teal text-[10px] font-bold tracking-[0.2em] uppercase transition-colors">
                            <span>View All Locations</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                        </a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <?php if (!empty($product_cards)): ?>
    <!-- Local product catalogue -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Local catalogue</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    <?php echo site_escape($product_heading); ?>
                </h2>
                <?php if (!empty($product_subtext)): ?>
                <p class="text-base text-slate-600 font-light leading-relaxed">
                    <?php echo site_escape($product_subtext); ?>
                </p>
                <?php endif; ?>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <?php foreach ($product_cards as $card): ?>
                    <a href="<?php echo site_escape($card['url'] ?? 'products.php'); ?>" class="relative group h-[360px] overflow-hidden bg-spartan-navy">
                        <div class="absolute inset-0">
                            <img src="<?php echo site_escape($card['image'] ?? 'assets/images/j9/spartan-warehouse-fulfillment.webp'); ?>" alt="<?php echo site_escape($card['title'] ?? 'Marine supplies'); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/30 to-transparent"></div>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 p-6">
                            <h3 class="font-oswald text-xl font-bold tracking-widest text-white uppercase leading-tight mb-3"><?php echo site_escape($card['title'] ?? 'Marine Supplies'); ?></h3>
                            <p class="text-sm text-slate-300 font-light leading-relaxed mb-5"><?php echo site_escape($card['text'] ?? ''); ?></p>
                            <span class="text-spartan-teal text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase">
                                <span>Shop Category</span>
                                <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                            </span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($product_cta_label)): ?>
            <div class="mt-10">
                <a href="<?php echo site_escape($product_cta_url); ?>" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                    <span><?php echo site_escape($product_cta_label); ?></span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($service_items)): ?>
    <!-- Local services -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-8 mb-12">
                <div class="max-w-3xl">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Service centre</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                        <?php echo site_escape($service_heading); ?>
                    </h2>
                    <?php if (!empty($service_subtext)): ?>
                    <p class="text-base text-slate-600 font-light leading-relaxed mb-8">
                        <?php echo site_escape($service_subtext); ?>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="flex items-center gap-3">
                    <button onclick="scrollCarousel('local-service-carousel', -1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Previous local services">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button onclick="scrollCarousel('local-service-carousel', 1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Next local services">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div id="local-service-carousel" class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-6 -mx-1 px-1">
                <?php foreach ($service_items as $item): ?>
                    <article class="relative group h-[420px] w-[300px] sm:w-[360px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                        <img src="<?php echo site_escape($item['image'] ?? 'assets/images/j9/service-compliance.webp'); ?>" alt="<?php echo site_escape($item['title'] ?? 'Local marine service'); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/45 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-7">
                            <h3 class="font-oswald text-xl font-bold tracking-widest text-white uppercase leading-tight mb-4"><?php echo site_escape($item['title'] ?? 'Service'); ?></h3>
                            <p class="text-sm text-slate-300 font-light leading-relaxed"><?php echo site_escape($item['text'] ?? ''); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php if (!empty($service_cta_label)): ?>
            <div class="mt-10">
                <a href="<?php echo site_escape($service_cta_url); ?>" class="inline-flex items-center bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-charcoal transition-colors">
                    <span><?php echo site_escape($service_cta_label); ?></span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (!empty($faqs)): ?>
    <!-- Local FAQ -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Local FAQ</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">
                    <?php echo site_escape($faq_heading); ?>
                </h2>
            </div>
            <div class="divide-y divide-slate-200 border-y border-slate-200">
                <?php foreach ($faqs as $faq): ?>
                <div>
                    <button onclick="toggleFaq(this)" class="w-full py-6 flex items-center justify-between text-left group">
                        <h3 class="font-oswald text-base md:text-lg font-bold text-spartan-navy tracking-wide uppercase pr-6 group-hover:text-spartan-teal transition-colors"><?php echo site_escape($faq['q'] ?? 'Question'); ?></h3>
                        <i class="fa-solid fa-plus text-spartan-teal text-sm shrink-0 transition-transform duration-200"></i>
                    </button>
                    <div class="hidden pb-6">
                        <p class="text-sm text-slate-600 font-light leading-relaxed max-w-3xl"><?php echo site_escape($faq['a'] ?? ''); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
