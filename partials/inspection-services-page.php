<?php
$page_title = 'Marine Inspection Services & Repairs | Spartan Industrial Marine';
$meta_description = 'Book marine safety equipment inspections and repair support for liferafts, immersion suits, EPIRBs, PLBs, PFDs, rescue devices, davit hooks, distress signals, and rescue boats.';
$active_nav = 'services';
require_once __DIR__ . '/header.php';

$hero = [
    'eyebrow' => 'Marine inspection services',
    'title' => 'Certified Marine Inspection Services & Repairs',
    'subtitle' => 'Book liferaft, immersion suit, beacon, PFD, rescue-device, davit hook, distress signal, and rescue boat inspection support through Spartan.',
    'image' => 'assets/images/j9/service-compliance.webp',
    'button_label' => 'Book an Inspection',
    'button_url' => 'contact.php',
    'button_spacing_class' => 'pt-8',
    'wave_color_class' => 'text-spartan-light-gray',
    'show_breadcrumbs' => false,
    'overlay_class' => 'bg-gradient-to-b from-spartan-navy/55 via-spartan-navy/70 to-spartan-navy/90',
];
require_once dirname(__DIR__) . '/components/page-hero.php';

$authorized_brands = [
    [
        'name' => 'Survitec',
        'logo' => 'assets/images/service-brands/survitec.svg',
        'logo_class' => 'max-h-14',
    ],
    [
        'name' => 'DSB',
        'logo' => 'assets/images/service-brands/dsb.jpg',
        'logo_class' => 'max-h-20',
    ],
    [
        'name' => 'RFD',
        'logo' => 'assets/images/service-brands/rfd.png',
        'logo_class' => 'max-h-16',
    ],
    [
        'name' => 'Mustang Survival',
        'logo' => 'assets/images/service-brands/mustang-survival.svg',
        'logo_class' => 'max-h-20',
    ],
    [
        'name' => 'Fierce Workwear',
        'logo' => 'assets/images/service-brands/fierce-workwear-banner.jpg',
        'display' => 'banner-crop',
    ],
    [
        'name' => 'Crewsaver',
        'logo' => 'assets/images/service-brands/crewsaver.png',
        'logo_class' => 'max-h-12',
    ],
    [
        'name' => "Jason's Cradle",
        'logo' => 'assets/images/service-brands/jasons-cradle.svg',
        'logo_class' => 'max-h-14',
    ],
];

$process_steps = [
    [
        'step' => '01',
        'title' => 'Contact & Drop Off',
        'text' => 'Contact the nearest Spartan location to confirm service intake, then bring the equipment to the identified service center or service depot.',
    ],
    [
        'step' => '02',
        'title' => 'Inspection & Report',
        'text' => 'Certified technicians test the gear, document findings, and send a repair quote if any issue needs approval.',
    ],
    [
        'step' => '03',
        'title' => 'Documentation & Return',
        'text' => 'Approved equipment is returned with the applicable service documentation and record details.',
    ],
];

$equipment_cards = [
    [
        'slug' => 'life-raft-inspection',
        'title' => 'Life Raft Inspection',
        'image' => 'assets/images/j9/life-raft-service-inspection.webp',
        'text' => 'Inspection, deployment testing, repacking, emergency pack checks, and service documentation for marine life rafts.',
    ],
    [
        'slug' => 'immersion-suit-testing',
        'title' => 'Immersion Suit Inspection',
        'image' => 'assets/images/j9/immersion-suit-testing.webp',
        'text' => 'Pressure testing, seam checks, zipper inspection, leakage assessment, and applicable service records for immersion suits.',
    ],
    [
        'slug' => 'epirb-plb-inspection',
        'title' => 'EPIRB & PLB Inspection',
        'image' => 'assets/images/j9/epirb-plb-inspection.webp',
        'text' => 'Inspection support for emergency position-indicating radio beacons and personal locator beacons.',
    ],
    [
        'slug' => 'jasons-cradle-inspection',
        'title' => "Jason's Cradle MOB Device Inspection",
        'image' => 'assets/images/j9/jasons-cradle-mob-inspection.webp',
        'text' => 'Inspection support for Jason\'s Cradle marine rescue and man-overboard recovery devices.',
    ],
    [
        'slug' => 'life-jacket-pfd-inspection',
        'title' => 'Life Jacket & PFD Inspection',
        'image' => 'assets/images/j9/marine-safety.webp',
        'text' => 'Condition and serviceability inspection support for life jackets and personal flotation devices.',
    ],
    [
        'slug' => 'davit-release-hook-inspection',
        'title' => 'Davit Release Hook Inspection',
        'image' => 'assets/images/j9/service-pull-testing.webp',
        'text' => 'Inspection support for davit release hooks and associated marine rescue equipment.',
    ],
    [
        'slug' => 'distress-signal-pyrotechnic-inspection',
        'title' => 'Distress Signal & Pyrotechnic Inspection',
        'image' => 'assets/images/j9/distress-signal-pyrotechnic-inspection.webp',
        'text' => 'Inspection support for marine distress signals, flares, and related pyrotechnic safety equipment.',
    ],
    [
        'slug' => 'rescue-boat-inspection',
        'title' => 'Rescue Boat Inspection',
        'image' => 'assets/images/j9/rescue-boat-inspection.webp',
        'text' => 'Inspection support for rescue boats and their onboard safety equipment.',
    ],
];

$faqs = [
    [
        'q' => 'How often does my safety equipment need to be inspected?',
        'a' => 'Inspection intervals depend on the equipment, manufacturer instructions, applicable regulations, and intended use. Contact Spartan with the equipment details to confirm the appropriate service interval.',
    ],
    [
        'q' => 'How long does a typical equipment inspection take?',
        'a' => 'In-shop turnaround times vary by equipment type, condition, parts requirements, and current workload. Contact the receiving location for timing.',
    ],
    [
        'q' => 'What happens if a piece of equipment fails inspection?',
        'a' => 'If we find an issue, we pause and send a detailed repair quote. We do not perform unauthorized repair work or add hidden fees.',
    ],
    [
        'q' => 'Are your technicians certified to fix specific equipment brands?',
        'a' => "Spartan technicians support product lines including Survitec, DSB, RFD, Mustang Survival, Fierce Workwear, Crewsaver, and Jason's Cradle. Contact Spartan with the manufacturer and model to confirm service availability.",
    ],
    [
        'q' => "Can you repair equipment that wasn't originally purchased from Spartan?",
        'a' => 'Service availability depends on the equipment type, manufacturer, model, condition, and available support. Contact Spartan with those details before bringing the equipment in.',
    ],
    [
        'q' => 'How do I get my inspection certificates after service is complete?',
        'a' => 'The receiving location will confirm what service documentation applies and whether the resulting records can be organized through CertTracker.',
    ],
    [
        'q' => 'What regulatory standards do Spartan marine inspection services comply with?',
        'a' => 'Inspection requirements depend on the equipment, manufacturer, and intended use. Spartan can confirm the applicable service process when reviewing your equipment.',
    ],
];
?>

    <!-- Brand-certified repair -->
    <section class="bg-spartan-light-gray py-10 md:py-12 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-2xl mx-auto text-center mb-8 md:mb-10">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold text-spartan-navy uppercase tracking-wider leading-tight">
                    Technician service support for
                </h2>
            </div>
            <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-6">
                <?php foreach ($authorized_brands as $brand): ?>
                    <div class="w-36 sm:w-40 xl:w-36 min-h-24 flex items-center justify-center px-2 py-3">
                        <?php if (($brand['display'] ?? '') === 'banner-crop'): ?>
                            <div class="relative h-20 w-36 max-w-full overflow-hidden">
                                <img
                                    src="<?php echo site_escape($brand['logo']); ?>"
                                    alt="<?php echo site_escape($brand['name']); ?>"
                                    class="absolute right-0 top-0 h-[150px] w-auto max-w-none mix-blend-multiply"
                                    loading="lazy"
                                >
                            </div>
                        <?php else: ?>
                            <img
                                src="<?php echo site_escape($brand['logo']); ?>"
                                alt="<?php echo site_escape($brand['name']); ?>"
                                class="h-auto w-auto max-w-full object-contain mix-blend-multiply <?php echo site_escape($brand['logo_class']); ?>"
                                loading="lazy"
                            >
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Inspection process -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">How it works</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    The inspection process
                </h2>
                <p class="text-base text-slate-600 font-light leading-relaxed">
                    Start with the nearest Spartan location. The team will confirm the receiving point, inspect the equipment, and provide the applicable service documentation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">
                <?php foreach ($process_steps as $step): ?>
                    <article class="relative pt-5 md:pt-0">
                        <span class="font-oswald text-6xl md:text-7xl font-bold text-spartan-teal/30 tracking-wider block mb-5 leading-none"><?php echo site_escape($step['step']); ?></span>
                        <h3 class="font-oswald text-xl md:text-2xl font-bold text-spartan-navy tracking-widest uppercase mb-4"><?php echo site_escape($step['title']); ?></h3>
                        <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed"><?php echo site_escape($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Equipment inspected and repaired -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Inspection categories</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    Safety equipment we inspect & repair
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($equipment_cards as $item): ?>
                    <article id="<?php echo site_escape($item['slug']); ?>" class="group bg-white border border-slate-200 scroll-mt-32">
                        <div class="h-52 overflow-hidden">
                            <img src="<?php echo site_escape($item['image']); ?>" alt="<?php echo site_escape($item['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <h3 class="font-oswald text-lg font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4"><?php echo site_escape($item['title']); ?></h3>
                            <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo site_escape($item['text']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CertTracker -->
    <section class="bg-spartan-navy text-white py-16 md:py-24 relative overflow-hidden">
        <div class="absolute -right-20 top-12 h-44 w-[540px] bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center select-text">
                <div>
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Digital compliance tracking</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider uppercase leading-tight mb-5">
                        Never miss a compliance deadline again.
                    </h2>
                    <p class="text-base text-slate-300 font-light leading-relaxed mb-8">
                        Every physical inspection certificate can be uploaded to CertTracker, Spartan's free, 24/7 online database for tracking certifications on your gear, even for brands not bought from us.
                    </p>
                    <a href="certtracker.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                        <span>Learn More About CertTracker</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>
                <div class="bg-white text-spartan-navy p-6 md:p-8 shadow-2xl">
                    <div class="flex items-center justify-between border-b border-slate-200 pb-4 mb-5">
                        <div>
                            <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">Sample record</span>
                            <h3 class="font-oswald text-2xl font-bold uppercase tracking-wider">Fleet safety dashboard</h3>
                        </div>
                        <i class="fa-solid fa-shield-halved text-3xl text-spartan-teal"></i>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center justify-between bg-slate-50 border border-slate-100 p-4">
                            <span class="text-sm font-medium text-slate-700">Liferaft certificate</span>
                            <span class="font-oswald text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal">Current</span>
                        </div>
                        <div class="flex items-center justify-between bg-slate-50 border border-slate-100 p-4">
                            <span class="text-sm font-medium text-slate-700">Immersion suit test</span>
                            <span class="font-oswald text-[10px] font-bold tracking-[0.2em] uppercase text-amber-600">Due soon</span>
                        </div>
                        <div class="flex items-center justify-between bg-slate-50 border border-slate-100 p-4">
                            <span class="text-sm font-medium text-slate-700">Fall arrest inspection</span>
                            <span class="font-oswald text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal">Uploaded</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">FAQ</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">
                    Marine inspection questions
                </h2>
            </div>

            <div class="divide-y divide-slate-100 border-y border-slate-100">
                <?php foreach ($faqs as $faq): ?>
                    <div>
                        <button onclick="toggleFaq(this)" class="w-full py-6 flex items-center justify-between text-left group">
                            <h3 class="font-oswald text-base md:text-lg font-bold text-spartan-navy tracking-wide uppercase pr-6 group-hover:text-spartan-teal transition-colors"><?php echo site_escape($faq['q']); ?></h3>
                            <i class="fa-solid fa-plus text-spartan-teal text-sm shrink-0 transition-transform duration-200"></i>
                        </button>
                        <div class="hidden pb-6">
                            <p class="text-sm text-slate-600 font-light leading-relaxed max-w-2xl"><?php echo site_escape($faq['a']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta = [
        'eyebrow' => 'Book certified service',
        'title' => 'Ready to get your gear inspected?',
        'text' => 'Tell us what equipment you need inspected or repaired. Spartan will route the request to the right service center, service depot, or intake team.',
        'button_label' => 'Book an Inspection',
        'button_url' => 'contact.php',
    ];
    require_once dirname(__DIR__) . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/footer.php'; ?>
