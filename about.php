<?php
$page_title = '45+ Years of Marine Expertise | Spartan Industrial Marine';
$meta_description = 'Learn why Spartan Industrial Marine has been trusted for over 45 years for marine products, safety equipment, commercial fishing supplies, and expert service.';
$active_nav = 'about';
require_once __DIR__ . '/partials/header.php';

$certifications = [
    'Transport Canada',
    'DFO Whalesafe compliance',
    'ISO certifications',
];

$testimonials = [
    [
        'quote' => 'Owning four boats in the commercial fishery industry, I appreciate the knowledge & dedication the staff put into supplying me with the products and services I require whenever I may require them.',
        'name' => 'Herb Nash',
        'role' => 'Crab/Lobster Fisherman, Glace Bay, NS',
        'branch' => 'Spartan Sydney',
    ],
    [
        'quote' => 'Spartan has always taken a personal approach to looking after our vessels in any port they have been working out of. Spartan’s ability to supply our requirements... has always been a big part of our long term relationship.',
        'name' => 'Mark Goudreau',
        'role' => 'Procurement Specialist, Atlantic Towing Ltd, Dartmouth, NS',
        'branch' => 'Spartan Dartmouth',
    ],
];

$trust_reasons = [
    [
        'title' => 'Deep Local Infrastructure',
        'text' => 'Our six active locations are more than sales offices; they connect customers with stocked products, local service intake, and regional support.',
    ],
    [
        'title' => 'Crafted by Marine Professionals',
        'text' => 'Our team is composed of the very people who rely on this gear. From former ship captains and commercial harvesters to supply chain managers, we bring real-world, hard-earned experience to every safety conversation.',
    ],
    [
        'title' => 'Lobster & Crab Trap Production',
        'text' => 'Spartan builds lobster and crab traps for commercial fishing operations. Share the trap type, quantity, specifications, and required timing with our production team.',
    ],
    [
        'title' => 'Full-Lifecycle Vessel Support',
        'text' => 'A trusted partner stays with you when you dock. Beyond top-tier equipment, we back your operations with certified marine inspections, Transport Canada-compliant liferaft servicing, and specialized crew safety training.',
    ],
];

$map_fallback_url = site_locations_map_embed_url($site_locations);
$map_js_locations = array_values(array_map(function ($location) {
    return [
        'city' => $location['city'] ?? '',
        'badge' => $location['badge'] ?? '',
        'address' => $location['address'] ?? '',
        'phone' => $location['phone'] ?? '',
        'url' => site_location_url($location),
        'lat' => (float) $location['lat'],
        'lng' => (float) $location['lng'],
    ];
}, array_filter($site_locations, function ($location) {
    return is_numeric($location['lat'] ?? null) && is_numeric($location['lng'] ?? null);
})));
$map_locations_json = json_encode($map_js_locations, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT);
$google_maps_api_key = 'AIzaSyADPdkK7EKU3zf_G-VKRavlAg_2YQLIpaU';

$hero = [
    'eyebrow' => 'About Spartan Marine Industrial',
    'title' => "Canada's Trusted Industrial & Commercial Marine Partner Since 1979",
    'subtitle' => 'For over 45 years, Spartan Industrial Marine has provided commercial fishing, industrial marine, and offshore customers with high-quality products, custom solutions, and expert services. Our experienced team understands the challenges of working on the water and delivers the equipment, support, and solutions needed to keep operations running safely and efficiently.',
    'image' => 'assets/images/j9/spartan-storefront-exterior.webp',
    'size' => 'tall',
    'show_breadcrumbs' => false,
    'overlay_class' => 'bg-gradient-to-b from-spartan-navy/55 via-spartan-navy/70 to-spartan-navy/90',
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Certifications -->
    <section class="bg-white py-12 md:py-14 overflow-hidden relative">
        <div class="absolute right-0 top-0 h-full w-[520px] bg-slate-200 opacity-40 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text relative z-10">
            <div class="py-8 grid grid-cols-1 sm:grid-cols-3 gap-x-8 gap-y-7 items-center">
                <?php foreach ($certifications as $certification): ?>
                <div class="min-h-[82px] flex items-center justify-center text-center">
                    <span class="font-oswald text-base md:text-lg font-bold tracking-[0.16em] uppercase text-slate-500 leading-snug"><?php echo site_escape($certification); ?></span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-10">
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">Our Values</h2>
                <p class="text-sm text-slate-600 font-light leading-relaxed">
                    At Spartan Industrial Marine, we understand that safety and compliance are non-negotiable for your bottom line. Every product we engineer, piece of gear we supply, and life-saving appliance we service is backed by an unwavering commitment to operational excellence.
                </p>
                <p class="text-sm text-slate-600 font-light leading-relaxed mt-4">This is what Spartan stands for:</p>
            </div>
        </div>
        <?php require __DIR__ . '/components/pillars.php'; ?>
    </section>

    <!-- Testimonials -->
    <section class="bg-spartan-navy text-white py-20 md:py-24 overflow-hidden relative">
        <div class="absolute -right-20 top-8 h-44 w-[560px] bg-spartan-teal opacity-[0.05] pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 select-text">
            <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider uppercase text-white leading-tight mb-10 max-w-3xl">See what some of our clients have to say about Spartan Industrial Marine:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <?php foreach ($testimonials as $testimonial): ?>
                <figure class="border border-white/10 bg-white/[0.03] p-8 md:p-10 min-h-[280px] flex flex-col justify-between">
                    <blockquote class="text-base text-slate-200 font-light leading-relaxed mb-8">
                        "<?php echo site_escape($testimonial['quote']); ?>"
                    </blockquote>
                    <figcaption>
                        <span class="font-oswald text-sm font-bold tracking-[0.16em] uppercase text-white block"><?php echo site_escape($testimonial['name']); ?></span>
                        <span class="text-xs text-slate-400 font-light leading-relaxed block mt-1"><?php echo site_escape($testimonial['role']); ?></span>
                        <span class="text-[10px] text-spartan-teal font-bold tracking-[0.2em] uppercase block mt-3"><?php echo site_escape($testimonial['branch']); ?></span>
                    </figcaption>
                </figure>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- History -->
    <section class="py-20 md:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr] gap-10 lg:gap-14 items-stretch mb-12 lg:mb-14">
                <div class="lg:py-8">
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">Over 45 Years of Keeping Atlantic Canada’s Fleets Moving</h2>
                    <div class="space-y-5 text-base text-slate-600 font-light leading-relaxed">
                        <p>For more than four decades, Spartan Industrial Marine has been the trusted backbone of the East Coast’s maritime economy. What began as a local commitment to regional fishermen has grown into a network of six active locations spanning Atlantic Canada.</p>
                        <p>We didn’t build our reputation in a boardroom. We built it on the decks of fishing vessels, in the high-density assembly zones of regional shipyards, and alongside offshore supply crews navigating the unpredictable North Atlantic.</p>
                    </div>
                </div>

                <div class="relative min-h-[340px] lg:min-h-[460px] overflow-hidden bg-spartan-navy">
                    <img src="assets/images/j9/spartan-warehouse-fulfillment.webp" alt="Spartan marine supply warehouse preparing safety gear" class="absolute inset-0 h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/80 via-spartan-navy/20 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-7 md:p-9 grid grid-cols-2 gap-4 text-white">
                        <div>
                            <span class="font-oswald text-4xl md:text-5xl font-bold tracking-wider leading-none block">45+</span>
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal block mt-2">Years Serving Fleets</span>
                        </div>
                        <div>
                            <span class="font-oswald text-4xl md:text-5xl font-bold tracking-wider leading-none block"><?php echo count($site_locations); ?></span>
                            <span class="text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal block mt-2">Active Locations</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-y border-slate-200 py-9 md:py-11">
                <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-10">Why Decades of Trust Matter for Your Enterprise:</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-10">
                    <?php foreach ($trust_reasons as $reason): ?>
                    <div>
                        <h4 class="font-oswald text-lg md:text-xl font-bold text-spartan-navy tracking-[0.12em] uppercase mb-4 leading-tight"><?php echo site_escape($reason['title']); ?></h4>
                        <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo site_escape($reason['text']); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <p class="text-base text-slate-600 font-light leading-relaxed mt-8 max-w-4xl">If you’re on the water, you need a partner who knows the territory. Trust the experience that has kept Atlantic Canadian fleets safe and compliant for over 45 years.</p>
            </div>
        </div>
    </section>

    <!-- Local services and supply hubs -->
    <section class="bg-spartan-light-gray py-20 md:py-28 overflow-hidden relative">
        <div class="absolute -left-16 bottom-8 h-40 w-[500px] bg-spartan-teal opacity-[0.06] pointer-events-none" style="-webkit-mask: url('assets/images/left-wave.svg') left center / contain no-repeat; mask: url('assets/images/left-wave.svg') left center / contain no-repeat;" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 select-text">
            <div class="max-w-3xl mb-12">
                <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">Our Local Services and Supply Hubs</h3>
                <p class="text-base text-slate-600 font-light leading-relaxed">With six active locations across Atlantic Canada, Spartan connects working crews with local product support, service intake, and the right regional contact.</p>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-[1.15fr_0.85fr] gap-8 lg:gap-10 items-stretch">
                <div class="relative min-h-[420px] lg:min-h-[620px] border border-slate-200 bg-white overflow-hidden">
                    <div id="spartan-locations-map" class="absolute inset-0" role="img" aria-label="Google map of all Spartan Industrial Marine locations"></div>
                    <div id="spartan-locations-map-fallback" class="absolute inset-0 hidden items-center justify-center bg-spartan-navy text-white p-8 text-center">
                        <div>
                            <h4 class="font-oswald text-lg font-bold uppercase tracking-[0.16em] mb-3">Map Unavailable</h4>
                            <p class="text-sm text-slate-300 font-light leading-relaxed mb-5">Use the location cards to view branch details and directions.</p>
                            <a href="locations.php" class="inline-flex items-center bg-spartan-teal text-white py-3 px-5 text-[10px] font-bold tracking-[0.2em] uppercase">
                                <span>View Locations</span>
                                <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <noscript>
                        <iframe src="<?php echo site_escape($map_fallback_url); ?>" title="Google map of all Spartan Industrial Marine locations" class="absolute inset-0 h-full w-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                    </noscript>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($site_locations as $loc): ?>
                    <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="group bg-white border border-slate-200 p-5 min-h-[142px] flex items-start justify-between gap-4 hover:bg-spartan-navy transition-colors">
                        <span>
                            <span class="font-oswald text-base font-bold text-spartan-navy tracking-[0.12em] uppercase leading-tight block group-hover:text-white"><?php echo site_escape($loc['city']); ?></span>
                            <span class="text-[10px] text-slate-400 font-bold tracking-[0.18em] uppercase mt-2 block group-hover:text-spartan-teal"><?php echo site_escape($loc['badge']); ?></span>
                            <span class="text-xs text-slate-500 font-light leading-relaxed mt-4 block group-hover:text-slate-300"><?php echo site_escape($loc['address']); ?></span>
                        </span>
                        <i class="fa-solid fa-arrow-right text-[11px] text-spartan-teal mt-1 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Products and services -->
    <section class="bg-white border-t border-slate-200">
        <div class="grid grid-cols-1 lg:grid-cols-2 select-text">
            <div class="relative bg-spartan-light-gray px-6 sm:px-10 lg:px-16 xl:px-24 py-16 md:py-20 min-h-[380px] flex items-center overflow-hidden">
                <div class="absolute right-0 bottom-0 h-36 w-[420px] bg-white opacity-60 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right bottom / contain no-repeat; mask: url('assets/images/right-wave.svg') right bottom / contain no-repeat;" aria-hidden="true"></div>
                <div class="max-w-xl lg:ml-auto relative z-10">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Products</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">Keep Your Operations Moving and Compliant</h2>
                    <p class="text-base text-slate-600 font-light leading-relaxed mb-8">Explore thousands of certified safety products, workwear, specialized commercial fishing gear, and custom rigging solutions available for rapid regional delivery.</p>
                    <a href="products.php" class="inline-flex items-center bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-charcoal transition-colors">
                        <span>Browse Our Product Catalog</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>
            </div>

            <div class="relative bg-spartan-navy text-white px-6 sm:px-10 lg:px-16 xl:px-24 py-16 md:py-20 min-h-[380px] flex items-center overflow-hidden">
                <div class="absolute -right-8 top-8 h-44 w-[500px] bg-spartan-teal opacity-[0.07] pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
                <div class="max-w-xl relative z-10">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Services</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest uppercase leading-tight mb-5">Book a Marine Safety Service</h2>
                    <p class="text-base text-slate-300 font-light leading-relaxed mb-8">Schedule mandatory liferaft servicing, immersion suit testing, certified vessel inspections, or request a custom gear manufacturing audit from our local technical teams.</p>
                    <a href="inspection-services.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                        <span>Book a Service</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script>
        window.spartanLocationsMapData = <?php echo $map_locations_json ?: '[]'; ?>;
        window.initSpartanLocationsMap = function() {
            const mapElement = document.getElementById('spartan-locations-map');
            const fallback = document.getElementById('spartan-locations-map-fallback');
            const locations = Array.isArray(window.spartanLocationsMapData) ? window.spartanLocationsMapData : [];

            if (!mapElement || !window.google || !google.maps || locations.length === 0) {
                if (fallback) fallback.classList.remove('hidden');
                if (fallback) fallback.classList.add('flex');
                return;
            }

            mapElement.dataset.loaded = 'true';
            if (fallback) fallback.classList.add('hidden');

            const map = new google.maps.Map(mapElement, {
                center: { lat: 46.5, lng: -59.5 },
                zoom: 5,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                mapTypeControl: false,
                streetViewControl: false,
                fullscreenControl: true,
                styles: [
                    { featureType: 'poi.business', stylers: [{ visibility: 'off' }] },
                    { featureType: 'transit', stylers: [{ visibility: 'off' }] }
                ]
            });
            const bounds = new google.maps.LatLngBounds();
            const infoWindow = new google.maps.InfoWindow();
            const markerIcon = {
                url: 'https://www.spartanmarine.ca/themes/spartan/images/map-pin-black.png',
                scaledSize: new google.maps.Size(35, 25),
                anchor: new google.maps.Point(17, 25)
            };
            const escapeHtml = function(value) {
                return String(value || '').replace(/[&<>"']/g, function(character) {
                    return {
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        '"': '&quot;',
                        "'": '&#039;'
                    }[character];
                });
            };

            locations.forEach(function(location) {
                const position = {
                    lat: Number(location.lat),
                    lng: Number(location.lng)
                };
                if (!Number.isFinite(position.lat) || !Number.isFinite(position.lng)) {
                    return;
                }

                const marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    title: location.city,
                    icon: markerIcon
                });
                bounds.extend(position);
                marker.addListener('click', function() {
                    infoWindow.setContent(
                        '<div style="max-width:240px;line-height:1.45;">' +
                        '<strong style="display:block;margin-bottom:4px;">' + escapeHtml(location.city) + '</strong>' +
                        '<span style="display:block;color:#6B737B;font-size:12px;text-transform:uppercase;letter-spacing:.08em;margin-bottom:8px;">' + escapeHtml(location.badge) + '</span>' +
                        '<span style="display:block;margin-bottom:8px;">' + escapeHtml(location.address) + '</span>' +
                        '<span style="display:block;margin-bottom:10px;">' + escapeHtml(location.phone) + '</span>' +
                        '<a href="' + encodeURI(location.url) + '" style="color:#00B3A6;font-weight:700;text-transform:uppercase;letter-spacing:.12em;font-size:11px;">View Location</a>' +
                        '</div>'
                    );
                    infoWindow.open(map, marker);
                });
            });

            if (!bounds.isEmpty()) {
                map.fitBounds(bounds, 44);
            }
        };

        window.addEventListener('load', function() {
            window.setTimeout(function() {
                const mapElement = document.getElementById('spartan-locations-map');
                const fallback = document.getElementById('spartan-locations-map-fallback');
                if (mapElement && !mapElement.dataset.loaded && fallback) {
                    fallback.classList.remove('hidden');
                    fallback.classList.add('flex');
                }
            }, 4000);
        });
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo site_escape($google_maps_api_key); ?>&callback=initSpartanLocationsMap"></script>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
