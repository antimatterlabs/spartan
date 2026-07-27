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
$page_title = 'Spartan Industrial Marine ' . $location['city'] . ' | Location & Hours';
$meta_description = 'Visit Spartan Industrial Marine in ' . $location['city'] . ' for marine safety equipment, fishing gear, industrial supplies, service support, hours, phone, and directions.';
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

$hero = [
    'title' => 'Spartan ' . $location['locality'],
    'subtitle' => $location['blurb'],
    'image' => $location['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Locations', 'url' => 'locations.php'],
        ['label' => $location['city']],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 select-text">
            <div class="lg:col-span-2 space-y-12">
                <div>
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3"><?php echo site_escape($location['branch_name']); ?></span>
                    <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">
                        Marine Supply & Service Support In <?php echo site_escape($location['city']); ?>
                    </h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed max-w-3xl">
                        <?php echo site_escape($location['intro']); ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <?php foreach ($location['services'] as $service): ?>
                    <div class="border border-slate-100 bg-white p-6 flex items-start space-x-4">
                        <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center">
                            <i class="fa-solid fa-check text-sm"></i>
                        </span>
                        <span class="text-sm text-slate-700 font-medium leading-relaxed"><?php echo site_escape($service); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <?php if (!empty($location['details_note'])): ?>
                <div class="border-l-2 border-spartan-teal bg-spartan-light-gray p-6">
                    <p class="text-xs text-slate-600 font-light leading-relaxed">
                        <?php echo site_escape($location['details_note']); ?>
                    </p>
                </div>
                <?php endif; ?>

                <div class="bg-spartan-light-gray p-8 md:p-10">
                    <h2 class="font-oswald text-xl md:text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Need Product Or Service Help?</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-7 max-w-2xl">
                        Call the branch before you visit for product availability, inspection timelines, fleet account support, or local pickup questions.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="<?php echo site_escape($location['phone_href']); ?>" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                            <i class="fa-solid fa-phone text-[11px] mr-2.5"></i>
                            <span><?php echo site_escape($location['phone_label'] ?? $location['phone']); ?></span>
                        </a>
                        <a href="contact.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                            <span>Send a Message</span>
                        </a>
                    </div>
                </div>
            </div>

            <aside class="space-y-6">
                <div class="bg-spartan-navy text-white p-8 relative overflow-hidden">
                    <div class="absolute -right-12 -bottom-6 w-[300px] h-20 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="<?php echo $location['badge_style'] === 'teal' ? 'bg-spartan-teal' : 'bg-spartan-navy-light'; ?> text-white text-[8px] px-2 py-1 font-mono font-bold tracking-wider uppercase inline-block mb-5"><?php echo site_escape($location['badge']); ?></span>
                        <h3 class="font-oswald text-xl font-bold tracking-widest uppercase mb-6"><?php echo site_escape($location['city']); ?></h3>
                        <ul class="space-y-5 text-xs text-slate-300 font-light">
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-location-dot text-spartan-teal mt-0.5"></i>
                                <span>
                                    <?php foreach ($location['address_lines'] as $line): ?>
                                        <?php echo site_escape($line); ?><br>
                                    <?php endforeach; ?>
                                </span>
                            </li>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-phone text-spartan-teal mt-0.5"></i>
                                <a href="<?php echo site_escape($location['phone_href']); ?>" class="hover:text-spartan-teal-light transition-colors"><?php echo site_escape($location['phone']); ?></a>
                            </li>
                            <?php if (!empty($location['fax'])): ?>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-fax text-spartan-teal mt-0.5"></i>
                                <span><?php echo site_escape($location['fax']); ?></span>
                            </li>
                            <?php endif; ?>
                            <li class="flex items-start space-x-3">
                                <i class="fa-solid fa-clock text-spartan-teal mt-0.5"></i>
                                <span><?php echo site_escape($location['hours']); ?></span>
                            </li>
                        </ul>
                        <div class="mt-8 pt-6 border-t border-slate-800 flex flex-col gap-3">
                            <a href="<?php echo site_escape($location['directions_url']); ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center bg-spartan-teal text-white py-3 px-5 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                                <i class="fa-solid fa-route text-[10px] mr-2"></i>
                                <span>Get Directions</span>
                            </a>
                            <a href="locations.php" class="inline-flex items-center justify-center border border-slate-700 text-slate-200 py-3 px-5 text-[10px] font-bold tracking-[0.2em] uppercase hover:border-spartan-teal hover:text-spartan-teal transition-colors">
                                <span>All Locations</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="border border-slate-100 p-8">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-5">Other Spartan Locations</h3>
                    <ul class="space-y-3 text-xs text-slate-600 font-light">
                        <?php foreach ($site_locations as $other): ?>
                            <?php if ($other['slug'] === $location['slug']) continue; ?>
                            <li>
                                <a href="<?php echo site_escape(site_location_url($other)); ?>" class="flex items-center justify-between hover:text-spartan-teal transition-colors">
                                    <span><?php echo site_escape($other['city']); ?></span>
                                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
        </div>
    </section>

    <?php require_once __DIR__ . '/components/contact-block.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
