<?php
$page_title = 'Marine Inspection Services & Repairs | Spartan Industrial Marine';
$meta_description = "Ensure compliance with Transport Canada standards with Spartan's DNV and Lloyd's-certified marine inspection services, expert repairs, and free digital tracking.";
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'eyebrow' => 'Marine inspection services',
    'title' => 'Certified Marine Inspection Services & Repairs',
    'subtitle' => "Stay compliant and keep your crew safe with DNV and Lloyd's-certified inspections, factory-authorized repairs, and digital certificates synced to CertTracker.",
    'image' => 'assets/images/j9/service-compliance.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Services'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$authorized_brands = ['AB Chance', 'Crosby', 'Columbus McKinnon', 'Kito'];

$process_steps = [
    [
        'step' => '01',
        'title' => 'Drop Off or Schedule',
        'text' => 'Choose mobile service at your vessel or job site, or bring equipment to a Spartan shop for in-house inspection.',
    ],
    [
        'step' => '02',
        'title' => 'Inspection & Report',
        'text' => 'Certified technicians test the gear, document findings, and send a repair quote if any issue needs approval.',
    ],
    [
        'step' => '03',
        'title' => 'Certification & Storage',
        'text' => 'Approved gear is returned with documentation, and digital certificates are pushed to your CertTracker account.',
    ],
];

$equipment_cards = [
    [
        'title' => 'Liferafts & Immersion Suits',
        'image' => 'assets/images/j9/life-raft-inspection.webp',
        'text' => 'Annual deployment testing, pressure monitoring, emergency pack replenishment, and seam integrity verification for Transport Canada and SOLAS compliance.',
    ],
    [
        'title' => 'Emergency Beacons',
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'text' => 'EPIRB and PLB battery expiry verification, satellite signal tests, water-activation sensor checks, and registry documentation support.',
    ],
    [
        'title' => 'Fall Arrest & Confined Space Gear',
        'image' => 'assets/images/j9/other-industrial-safety.webp',
        'text' => 'Load-bearing webbing checks, hardware stress testing, self-retracting lifeline calibration, and impact indicator assessments.',
    ],
    [
        'title' => 'Slings, Lifting & Rigging',
        'image' => 'assets/images/j9/service-pull-testing.webp',
        'text' => 'Non-destructive proof-load testing, hook deformation measurement, chain wear assessment, and tag alignment to working load limits.',
    ],
];

$faqs = [
    [
        'q' => 'How often does my safety equipment need to be inspected?',
        'a' => 'Most marine and life-saving equipment requires mandatory inspection every 12 months to meet Transport Canada and industry safety standards.',
    ],
    [
        'q' => 'How long does a typical equipment inspection take?',
        'a' => 'In-shop turnaround times vary by equipment type, but most standard inspections are completed within a few business days. Mobile on-site inspections are typically completed the same day.',
    ],
    [
        'q' => 'What happens if a piece of equipment fails inspection?',
        'a' => 'If we find an issue, we pause and send a detailed repair quote. We do not perform unauthorized repair work or add hidden fees.',
    ],
    [
        'q' => 'Are your technicians certified to fix specific equipment brands?',
        'a' => "Yes. Spartan technicians support DNV and Lloyd's-certified service work, along with factory-authorized repairs for brands including AB Chance, Crosby, Columbus McKinnon, and Kito.",
    ],
    [
        'q' => "Can you repair equipment that wasn't originally purchased from Spartan?",
        'a' => 'Yes. We inspect, service, and repair qualifying marine and industrial safety gear regardless of where it was originally purchased.',
    ],
    [
        'q' => 'How do I get my inspection certificates after service is complete?',
        'a' => 'Physical certificates are digitized and uploaded to your free CertTracker account so your team can access records any time.',
    ],
    [
        'q' => 'What regulatory standards do Spartan marine inspection services comply with?',
        'a' => "Our inspection and repair processes follow Transport Canada requirements and applicable Lloyd's, DNV, and industrial safety standards.",
    ],
];
?>

    <!-- Lead copy -->
    <section class="bg-white py-16 md:py-20 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl select-text">
                <div>
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Inspection, repair, and records</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-6">
                        Stay compliant without chasing paperwork.
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 font-light leading-relaxed max-w-3xl mb-8">
                        Spartan inspects, tests, repairs, and documents life-saving marine and industrial safety equipment for working crews across Atlantic Canada. Any equipment inspected can also be fully repaired by factory-authorized technicians.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-9">
                        <div class="flex gap-3 text-sm text-slate-700 leading-relaxed">
                            <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                            <span>Services available through seven Atlantic Canada locations, dedicated safety support, and regional drop-off branches.</span>
                        </div>
                        <div class="flex gap-3 text-sm text-slate-700 leading-relaxed">
                            <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                            <span>In-shop inspection or certified mobile service directly at your boat, dock, yard, or job site.</span>
                        </div>
                        <div class="flex gap-3 text-sm text-slate-700 leading-relaxed">
                            <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                            <span>Repair quotes are reviewed before work proceeds, keeping timelines and costs clear.</span>
                        </div>
                        <div class="flex gap-3 text-sm text-slate-700 leading-relaxed">
                            <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                            <span>Inspection certificates can be synced to your free, 24/7 CertTracker account.</span>
                        </div>
                    </div>
                    <a href="contact.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                        <span>Book an Inspection</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand-certified repair -->
    <section class="bg-spartan-light-gray py-10 md:py-12 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="bg-white border border-slate-200 px-6 py-8 md:px-10 md:py-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <div class="lg:col-span-4">
                        <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Authorized repair support</span>
                        <h2 class="font-oswald text-2xl md:text-3xl font-bold text-spartan-navy uppercase tracking-wider leading-tight">
                            Brand-certified repair centre for:
                        </h2>
                    </div>
                    <div class="lg:col-span-8">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-8 gap-y-6">
                            <?php foreach ($authorized_brands as $brand): ?>
                                <div class="min-h-16 flex items-center justify-center">
                                    <span class="font-oswald text-xl md:text-2xl font-bold tracking-widest uppercase text-spartan-charcoal text-center"><?php echo site_escape($brand); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
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
                    Getting your gear certified should not be a hassle. Spartan handles the heavy lifting, from physical testing to final paperwork, in three practical steps.
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

    <!-- Service mode split -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 bg-spartan-navy text-white select-text">
                <div class="relative min-h-[360px] overflow-hidden">
                    <img src="assets/images/spartan-dock-worker.png" alt="Spartan marine service support at the dock" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-spartan-navy/35"></div>
                    <div class="absolute -bottom-3 left-8 right-8 h-16 bg-spartan-teal/70" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                </div>
                <div class="p-9 md:p-12 lg:p-14 flex flex-col justify-center">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Flexible service access</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider uppercase leading-tight mb-5">
                        Mobile on-site visits or in-shop service
                    </h2>
                    <p class="text-sm md:text-base text-slate-300 font-light leading-relaxed mb-8 max-w-xl">
                        Spartan supports crews at the pace of real operations. Bring equipment to a shop when that is easiest, or schedule certified inspectors to travel directly to your dock, vessel, facility, or job site.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div>
                            <i class="fa-solid fa-warehouse text-spartan-teal text-4xl mb-5"></i>
                            <h3 class="font-oswald text-xl font-bold tracking-widest uppercase mb-3">In-Shop</h3>
                            <p class="text-sm text-slate-300 font-light leading-relaxed">Bring your equipment to one of our convenient physical locations for inspection and repair.</p>
                        </div>
                        <div>
                            <i class="fa-solid fa-truck-fast text-spartan-teal text-4xl mb-5"></i>
                            <h3 class="font-oswald text-xl font-bold tracking-widest uppercase mb-3">On-Site / Mobile</h3>
                            <p class="text-sm text-slate-300 font-light leading-relaxed">Certified inspectors can travel directly to your job site, dock, or vessel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Equipment inspected and repaired -->
    <section class="bg-white pb-16 md:pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Inspection categories</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    Safety equipment we inspect & repair
                </h2>
                <p class="text-base text-slate-600 font-light leading-relaxed">
                    From life-saving appliances to industrial rigging and fall protection, Spartan tests the gear that keeps crews compliant, protected, and ready for the next job.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($equipment_cards as $item): ?>
                    <article class="group bg-white border border-slate-200">
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
        'text' => 'Tell us what equipment you need inspected or repaired. Spartan will route the request to the right branch, technician, or mobile service team.',
        'button_label' => 'Book an Inspection',
        'button_url' => 'contact.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
