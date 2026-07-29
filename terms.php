<?php
$page_title = 'Marine Terminology & Warnings | Spartan Industrial Marine';
$meta_description = 'Learn essential marine terminology, rigging definitions, and critical safety warnings. Download a printable PDF to keep onboard for quick crew reference.';
$active_nav = 'resources';
$head_extra = '<style>
@media print {
    .no-print, header, footer, #mobile-menu, #search-overlay, #cart-drawer, #toast-notify { display: none !important; }
    body { background: #fff !important; color: #111827 !important; }
    .print-full { max-width: none !important; padding: 0 !important; }
    .print-break { break-inside: avoid; page-break-inside: avoid; }
}
</style>';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Essential Marine Terminology & Warnings',
    'subtitle' => 'Understand the critical terms, hazards, and safety warnings every marine worker needs to know. From snap-back zones and line bights to confined spaces and deck safety, learn how to recognize risks before they become incidents.',
    'image' => 'assets/images/j9/service-compliance.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Definitions & Warnings'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$definition_terms = [
    ['term' => 'Working Load Limit (WLL)', 'definition' => 'The maximum combined static and dynamic load in pounds or tonnes that should be applied to the product in service.'],
    ['term' => 'Proof Load', 'definition' => 'The specific load applied in performance of the proof tests.'],
    ['term' => 'Proof Test', 'definition' => 'A non-destructive load test made to a specific multiple of the rated load of the product.'],
    ['term' => 'Ultimate Load', 'definition' => 'The load at which the item being tested fails or no longer supports the load.'],
    ['term' => 'Shock Load', 'definition' => 'Any condition of rapid lift, sudden shifting of load, or arrest of a falling load.'],
    ['term' => 'Nominal Breaking Strength', 'definition' => 'Published catalogue design strength of a product.'],
    ['term' => 'Design Factor', 'definition' => 'An industry term denoting theoretical reserve capability. Usually computed by dividing the catalogue stated ultimate load by the catalogue stated working load limit and generally expressed as a ratio, for example 5 to 1 (5 : 1).'],
    ['term' => 'Safety Factor', 'definition' => 'The theoretical reserve capability of a product, determined by dividing the breaking strength by the rated working load unless otherwise noted.'],
];

$warnings = [
    [
        'term' => 'Ratings',
        'definition' => 'All ratings shown on this website meet or exceed ASME/ANSI 30.9 standards and are based upon the item being new or in "as new" condition. Ratings are considered to be the greatest load that should be applied to the item. Ratings are based upon usual environmental conditions and consideration must be given to item selection when unusual conditions are to be encountered.',
    ],
    [
        'term' => 'Products',
        'definition' => 'In general, the products displayed within this website are used as part of a system being employed to accomplish a task. Therefore, we can only recommend the utilization of such products to accomplish the desired task within their Working Load Limit (WLL).',
    ],
    [
        'term' => 'Wear, Misuse & Removal From Service',
        'definition' => 'The products shown are subject to wear, misuse, overloading, corrosion, deformation, intentional alteration, and other usage factors which may necessitate a reduction in the product\'s Working Load Limit (WLL) rating or cause the product to be removed from service and quarantined. All products should be regularly inspected by a competent person to determine whether they may continue to be used at the catalogue assigned WLL, a reduced WLL, a reduced safety factor, or removed from service.',
    ],
    [
        'term' => 'Side Loading',
        'definition' => 'The products shown are, in general, items intended to be used in a tension or pull manner. Caution must be used so that the product is not subjected to side loading that will cause additional and unintended loading.',
    ],
    [
        'term' => 'Hook Latches',
        'definition' => 'All hook latches shown are intended to retain loose slings or fittings under slack conditions. They are not intended to be anti-fouling devices, so caution should be used to prevent the latch from supporting any of the load. Periodic inspection of latches must be made to ensure their proper operating condition.',
    ],
    [
        'term' => 'Welding',
        'definition' => 'Welding of or to load supporting parts or products is not recommended. It is necessary to have knowledge of material, heat treatment, and welding procedures before welding of any item is to be considered. We suggest Spartan Marine be consulted for information and proof testing if necessary.',
    ],
    [
        'term' => 'Rigging Equipment',
        'definition' => 'Anyone using rigging equipment is responsible to have training on the usage of the item, as per ASME standards.',
    ],
    [
        'term' => 'Fitting Maintenance',
        'definition' => 'All fittings are subject to wear and disfigurement in the form of nicks and gouges, and should be inspected periodically for these conditions. Any detection of a crack or permanent deformation in a fitting, such as a hook, shackle, or link, is cause to remove the fitting from service and have it quarantined.',
    ],
];

$vessel_terms = [
    ['term' => 'Port', 'definition' => 'The left-hand side of the vessel when facing forward, towards the bow. It is marked by a red navigation light.'],
    ['term' => 'Starboard', 'definition' => 'The right-hand side of the vessel when facing forward. It is marked by a green navigation light.'],
    ['term' => 'Bow / Forward', 'definition' => 'The front section of the vessel.'],
    ['term' => 'Stern / Aft', 'definition' => 'The rear or back section of the vessel.'],
    ['term' => 'Abaft / Astern', 'definition' => 'Behind the vessel or further toward the rear than a specific point of reference.'],
    ['term' => 'Amidships', 'definition' => 'The central, middle section of the ship, either from front-to-back or side-to-side.'],
    ['term' => 'Windward', 'definition' => 'The side of the vessel directly facing into the oncoming wind.'],
    ['term' => 'Leeward', 'definition' => 'The sheltered side of the vessel, facing away from the wind.'],
];

$rigging_terms = [
    ['term' => 'Working Load Limit (WLL)', 'definition' => 'The maximum safe static mass or force that can be applied to a piece of lifting equipment, like a hook, block, or rope, during normal, everyday service.'],
    ['term' => 'Shock Load', 'definition' => 'A violent, sudden surge of force caused by rapid lifting, jerky shifting, or the sudden arrest of a falling load. A shock load can instantly multiply the actual weight of an object by three to four times, snapping cables even if the static weight is well under the WLL.'],
    ['term' => 'Side Loading', 'definition' => 'Applying a pulling force to a piece of hardware, like a shackle or hook, from an angle it was not designed to support. This dramatically reduces the equipment\'s lifting capacity and can cause catastrophic metal deformation.'],
    ['term' => 'Parting', 'definition' => 'The industry term for when a high-tension cable, wire rope, or mooring line catastrophically snaps under pressure.'],
];

$topic_links = [
    ['label' => 'Definitions', 'url' => '#definitions'],
    ['label' => 'Warnings', 'url' => '#warnings'],
    ['label' => 'Vessel Orientation & Directions', 'url' => '#vessel-orientation'],
    ['label' => 'Rigging & Load Management', 'url' => '#rigging-load-management'],
];

function render_term_rows($items) {
    foreach ($items as $item): ?>
        <div class="grid grid-cols-1 md:grid-cols-[240px,1fr] gap-3 md:gap-8 py-6 border-b border-slate-200/80 last:border-0 print-break">
            <dt class="font-oswald text-base font-bold tracking-[0.16em] uppercase text-spartan-navy leading-tight">
                <?php echo site_escape($item['term']); ?>
            </dt>
            <dd class="text-sm md:text-base text-slate-600 font-light leading-relaxed">
                <?php echo site_escape($item['definition']); ?>
            </dd>
        </div>
    <?php endforeach;
}
?>

    <!-- Topic navigation -->
    <section class="no-print bg-spartan-light-gray border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="flex flex-col xl:flex-row xl:items-center xl:justify-between gap-6 select-text">
                <div>
                    <span class="font-oswald text-[10px] font-bold tracking-[0.28em] uppercase text-spartan-teal block mb-2">Explore Marine Safety Topics</span>
                    <p class="text-sm text-slate-600 font-light max-w-2xl">Need a copy onboard? Use the printable version to keep this reference with your crew's safety materials.</p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <?php foreach ($topic_links as $link): ?>
                    <a href="<?php echo site_escape($link['url']); ?>" class="inline-flex items-center border border-slate-300 bg-white px-4 py-3 text-[10px] font-bold tracking-[0.16em] uppercase text-spartan-navy hover:border-spartan-teal hover:text-spartan-teal transition-colors">
                        <?php echo site_escape($link['label']); ?>
                    </a>
                    <?php endforeach; ?>
                    <button type="button" onclick="window.print()" class="inline-flex items-center bg-spartan-teal px-5 py-3 text-[10px] font-bold tracking-[0.18em] uppercase text-white hover:bg-spartan-navy transition-colors">
                        <i class="fa-solid fa-download text-[11px] mr-2"></i>
                        <span>Download Printable Version</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <main class="py-16 md:py-24">
        <div class="print-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-[320px,1fr] gap-14 select-text">
                <aside class="no-print hidden lg:block">
                    <div class="sticky top-32 border-l-2 border-spartan-teal pl-6">
                        <span class="font-oswald text-[10px] font-bold tracking-[0.28em] uppercase text-slate-400 block mb-4">On This Page</span>
                        <nav class="space-y-3 text-sm font-medium text-slate-600">
                            <?php foreach ($topic_links as $link): ?>
                            <a href="<?php echo site_escape($link['url']); ?>" class="block hover:text-spartan-teal transition-colors"><?php echo site_escape($link['label']); ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </aside>

                <div class="space-y-20">
                    <section id="definitions" class="scroll-mt-32">
                        <div class="mb-8">
                            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Definitions</h2>
                        </div>
                        <dl>
                            <?php render_term_rows($definition_terms); ?>
                        </dl>
                        <div class="mt-8 bg-spartan-navy text-white p-6 md:p-8 print-break">
                            <p class="text-sm md:text-base font-light leading-relaxed mb-0">
                                All ratings given in tons refer to short tons of 2,000 lbs. Ratings given in metric tons, or tonnes, equal 2,204 lbs. There is always a safe way to lift every load. For any of your special lifting requirements, please contact your Spartan Marine sales representative.
                            </p>
                        </div>
                    </section>

                    <section id="warnings" class="scroll-mt-32">
                        <div class="mb-8">
                            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Warnings</h2>
                        </div>
                        <dl>
                            <?php render_term_rows($warnings); ?>
                        </dl>
                    </section>

                    <section id="vessel-orientation" class="scroll-mt-32">
                        <div class="mb-8">
                            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Vessel Orientation & Directions</h2>
                        </div>
                        <dl>
                            <?php render_term_rows($vessel_terms); ?>
                        </dl>
                    </section>

                    <section id="rigging-load-management" class="scroll-mt-32">
                        <div class="mb-8">
                            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Rigging & Load Management</h2>
                        </div>
                        <dl>
                            <?php render_term_rows($rigging_terms); ?>
                        </dl>
                    </section>
                </div>
            </div>
        </div>
    </main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
