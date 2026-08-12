<?php
$page_title = 'Locations | Spartan Industrial Marine';
$meta_description = 'Find Spartan Industrial Marine locations across Atlantic Canada, including Dartmouth, Sydney, Yarmouth, Barrington Passage, Charlottetown, Paradise, and Caraquet.';
$active_nav = 'locations';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'On The Wharf, Not Across The Country',
    'subtitle' => 'Branch counters and service-area support across Atlantic Canada for crews, fleets, yards, and marine operators.',
    'image' => 'assets/images/j9/spartan-storefront-exterior.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Locations'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Location cards -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 select-text">
            <?php foreach ($site_locations as $loc): ?>
            <div class="border border-slate-200/60 bg-white flex flex-col">
                <!-- Map placeholder -->
                <div class="relative h-44 bg-spartan-navy overflow-hidden">
                    <img src="<?php echo site_escape($loc['image'] ?? 'assets/images/j9/spartan-storefront-exterior.webp'); ?>" alt="<?php echo site_escape($loc['city']); ?> location" class="w-full h-full object-cover brightness-[0.45]">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="w-12 h-12 bg-spartan-teal text-white flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </span>
                    </div>
                </div>
                <div class="p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="mb-4">
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.12em] uppercase">
                                <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($loc['city']); ?></a>
                            </h3>
                        </div>
                        <p class="text-xs text-slate-600 font-light leading-relaxed mb-6"><?php echo site_escape($loc['blurb']); ?></p>
                        <ul class="space-y-3 text-xs text-slate-500 font-light">
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-location-dot text-spartan-teal mt-0.5"></i><span><?php echo site_escape($loc['address']); ?></span></li>
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-phone text-spartan-teal mt-0.5"></i><a href="<?php echo site_escape($loc['phone_href']); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($loc['phone_label'] ?? $loc['phone']); ?></a></li>
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-clock text-spartan-teal mt-0.5"></i><span><?php echo site_escape($loc['hours']); ?></span></li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-6 flex items-center justify-between gap-4">
                        <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                            <span>View Location</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                        </a>
                        <a href="<?php echo site_escape($loc['directions_url']); ?>" target="_blank" rel="noopener" class="text-slate-400 hover:text-spartan-teal transition-colors" aria-label="Directions to <?php echo site_escape($loc['city']); ?>">
                            <i class="fa-solid fa-route text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Fleet delivery split media -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            $sm = [
                'eyebrow' => 'WHARF-SIDE DELIVERY',
                'title' => 'Support Across Atlantic Canada',
                'text' => 'Call your nearest branch for counter pickup, product availability, inspection timing, and coordinated support for vessels and worksites.',
                'button_label' => 'Arrange a Delivery',
                'button_url' => 'contact.php',
                'image' => 'assets/images/j9/service-fleet-outfitting.webp',
                'image_alt' => 'Wharf-side delivery to a commercial vessel',
                'reverse' => false,
            ];
            include __DIR__ . '/components/split-media.php';
            ?>
        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
