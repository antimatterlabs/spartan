<?php
$page_title = 'Training Courses | Spartan Industrial Marine';
$meta_description = 'Explore LEEA accredited and industry-recognized safety, rigging, crane, equipment, and workplace training courses delivered through Hercules Training Academy.';
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$training_portal_url = 'https://www.herculeslifting.com/pages/training';

$hero = [
    'eyebrow' => 'Training courses',
    'title' => 'Safety, Rigging & Equipment Training',
    'subtitle' => 'Spartan customers can access the same LEEA accredited and industry-recognized training programs delivered through Hercules Training Academy.',
    'image' => 'assets/images/j9/other-industrial-safety.webp',
    'height_class' => 'min-h-[420px] md:min-h-[500px]',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Marine Services', 'url' => 'services.php'],
        ['label' => 'Training'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$training_courses = [
    [
        'title' => 'Fundamentals of Rigging',
        'category' => 'Rigging',
        'image' => 'assets/images/j9/marine-rigging.webp',
        'url' => 'https://www.herculeslifting.com/pages/fundamentals-of-rigging-with-practical',
        'description' => 'A practical introduction to rigging principles, inspection habits, sling selection, and safe load handling for workers involved in lifting operations.',
    ],
    [
        'title' => 'Intermediate Rigging',
        'category' => 'Rigging',
        'image' => 'assets/images/j9/service-splicing.webp',
        'url' => 'https://www.herculeslifting.com/pages/fundamentals-of-rigging',
        'description' => 'Builds on core rigging knowledge with deeper coverage of load control, equipment choice, and safe lifting decisions in the field.',
    ],
    [
        'title' => 'Advanced Rigger Technician',
        'category' => 'Rigging',
        'image' => 'assets/images/j9/service-pull-testing.webp',
        'url' => 'https://www.herculeslifting.com/pages/advanced-rigger-technician',
        'description' => 'Advanced training for experienced riggers who need a stronger technical understanding of rigging applications, equipment, and inspection practices.',
    ],
    [
        'title' => 'Rigger, Slinger, and Banksman',
        'category' => 'Rigging',
        'image' => 'assets/images/j9/lifting-material-handling.webp',
        'url' => 'https://www.herculeslifting.com/pages/rigger-training',
        'description' => 'Covers safe rigging, signaling, load movement, and communication responsibilities for crews working around cranes and lifting equipment.',
    ],
    [
        'title' => 'Overhead Crane and Rigging',
        'category' => 'Crane Operations',
        'image' => 'assets/images/j9/lifting-material-handling.webp',
        'url' => 'https://www.herculeslifting.com/pages/fundamentals-of-overhead-cranes',
        'description' => 'Introduces safe overhead crane operation, inspection points, rigging basics, and the responsibilities of workers using lifting systems.',
    ],
    [
        'title' => '5 Day Overhead Crane Operator (NS > 10 Ton Capacity)',
        'category' => 'Crane Operations',
        'image' => 'assets/images/j9/department-industrial-shipyard.webp',
        'url' => 'https://www.herculeslifting.com/pages/overhead-crane-operator-training',
        'description' => 'A Nova Scotia-focused operator program for overhead cranes over 10 ton capacity, covering safe operation, controls, and practical requirements.',
    ],
    [
        'title' => 'Mobile Elevated Work Platforms',
        'category' => 'Equipment',
        'image' => 'assets/images/j9/other-industrial-safety.webp',
        'url' => 'https://www.herculeslifting.com/pages/mobile-elevated-work-platforms',
        'description' => 'Training for workers operating mobile elevated work platforms, with emphasis on safe setup, operation, fall hazards, and jobsite awareness.',
    ],
    [
        'title' => 'Forklift Operator',
        'category' => 'Equipment',
        'image' => 'assets/images/j9/spartan-warehouse-fulfillment.webp',
        'url' => 'https://www.herculeslifting.com/pages/forklift-operator-training',
        'description' => 'Operator training for safe forklift use, daily checks, load handling, workplace travel, and hazard prevention around powered industrial trucks.',
    ],
    [
        'title' => 'Telehandler Operator',
        'category' => 'Equipment',
        'image' => 'assets/images/j9/department-industrial-shipyard.webp',
        'url' => 'https://www.herculeslifting.com/pages/telehandler-operator-training',
        'description' => 'Covers telehandler operation, load placement, stability, site hazards, and practical safety expectations for variable-reach equipment.',
    ],
    [
        'title' => 'System Scaffolding',
        'category' => 'Equipment',
        'image' => 'assets/images/j9/other-industrial-safety.webp',
        'url' => 'https://www.herculeslifting.com/pages/system-scaffolding-training',
        'description' => 'Training for workers who assemble, inspect, or work around system scaffolding, with focus on safe access and compliant setup.',
    ],
    [
        'title' => 'WHMIS',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/service-compliance.webp',
        'url' => 'https://www.herculeslifting.com/pages/whmis-training',
        'description' => 'Workplace hazardous materials training covering labels, safety data sheets, hazard classes, and safe handling responsibilities.',
    ],
    [
        'title' => 'Lock Out Tag Out',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/service-compliance.webp',
        'url' => 'https://www.herculeslifting.com/pages/lock-out-tag-out-training',
        'description' => 'Teaches workers how to control hazardous energy before maintenance, service, inspection, or repair work begins.',
    ],
    [
        'title' => 'Confined Space Entrant and Attendant',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'url' => 'https://www.herculeslifting.com/pages/confined-space-entrant-and-attendant',
        'description' => 'Training for confined space entrants and attendants, including hazard recognition, monitoring, entry roles, and emergency readiness.',
    ],
    [
        'title' => 'Fall Protection',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/other-industrial-safety.webp',
        'url' => 'https://www.herculeslifting.com/pages/fall-protection-training',
        'description' => 'Covers fall hazards, equipment use, anchor points, inspection, and safe work practices for employees working at height.',
    ],
    [
        'title' => 'Fall Rescue Systems',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/service-compliance.webp',
        'url' => 'https://www.herculeslifting.com/pages/fall-rescue-systems',
        'description' => 'Focused training for planning and carrying out rescue procedures after a fall arrest event or elevated work emergency.',
    ],
    [
        'title' => 'Chainsaw Safety',
        'category' => 'Workplace Safety',
        'image' => 'assets/images/j9/department-industrial-shipyard.webp',
        'url' => 'https://www.herculeslifting.com/pages/chainsaw-safety',
        'description' => 'Safety training for chainsaw users, including personal protective equipment, hazard control, handling, and basic cutting precautions.',
    ],
    [
        'title' => 'Training Academy Consulting Services',
        'category' => 'Consulting',
        'image' => 'assets/images/j9/spartan-service-workshop.webp',
        'url' => 'https://www.herculeslifting.com/pages/training-academy-consulting-services',
        'description' => 'Consulting support for employers who need help building training plans, improving safety systems, or aligning programs with workplace needs.',
    ],
];

$training_notes = [
    'Courses are delivered through Hercules Training Academy.',
    'Course details, schedules, and registration are handled on the Hercules website.',
    'Each course link opens in a new tab so visitors can review the full Hercules course page.',
];
?>

    <!-- Training intro -->
    <section class="bg-white py-14 md:py-18">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-7">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Hercules Training Academy</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-6">
                        Our Training Courses
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 font-light leading-relaxed max-w-3xl">
                        Explore an extensive suite of LEEA accredited and industry-recognized training programs for rigging, crane operation, equipment operation, fall protection, confined space, and workplace safety.
                    </p>
                </div>
                <aside class="lg:col-span-5 bg-spartan-light-gray p-7 md:p-8 border border-slate-200">
                    <h3 class="font-oswald text-xl font-bold tracking-widest uppercase text-spartan-navy mb-5">How it works</h3>
                    <div class="space-y-4">
                        <?php foreach ($training_notes as $note): ?>
                            <div class="flex gap-3 text-sm text-slate-700 leading-relaxed">
                                <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                                <span><?php echo site_escape($note); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center mt-7 bg-spartan-teal text-white py-3.5 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy transition-colors">
                        <span>Open Hercules Training</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[11px] ml-2.5"></i>
                    </a>
                </aside>
            </div>
        </div>
    </section>

    <!-- Course grid -->
    <section class="bg-white py-14 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                <div class="max-w-3xl">
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                        Training available through Hercules.
                    </h2>
                    <p class="text-base text-slate-600 font-light leading-relaxed">
                        Browse the full course set below. Each course links to Hercules for the current outline, schedule, and registration details.
                    </p>
                </div>
                <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="inline-flex w-fit items-center border border-spartan-teal text-spartan-teal py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                    <span>View All at Hercules</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[11px] ml-2.5"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                <?php foreach ($training_courses as $course): ?>
                    <article class="group bg-white border border-slate-200 flex flex-col min-h-[440px]">
                        <a href="<?php echo site_escape($course['url']); ?>" target="_blank" rel="noopener" class="relative block h-52 overflow-hidden bg-spartan-navy">
                            <img src="<?php echo site_escape($course['image']); ?>" alt="<?php echo site_escape($course['title']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute inset-0 bg-gradient-to-t from-spartan-navy/80 via-spartan-navy/25 to-transparent"></span>
                            <span class="absolute left-5 bottom-5 font-oswald text-[10px] font-bold tracking-[0.24em] uppercase text-spartan-teal">
                                <?php echo site_escape($course['category']); ?>
                            </span>
                        </a>
                        <div class="p-6 md:p-7 flex flex-col grow">
                            <h3 class="font-oswald text-xl md:text-2xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
                                <a href="<?php echo site_escape($course['url']); ?>" target="_blank" rel="noopener" class="hover:text-spartan-teal transition-colors">
                                    <?php echo site_escape($course['title']); ?>
                                </a>
                            </h3>
                            <p class="text-sm text-slate-600 font-light leading-relaxed mb-6">
                                <?php echo site_escape($course['description']); ?>
                            </p>
                            <a href="<?php echo site_escape($course['url']); ?>" target="_blank" rel="noopener" class="inline-flex items-center mt-auto text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal hover:text-spartan-navy transition-colors">
                                <span>Learn More</span>
                                <i class="fa-solid fa-arrow-up-right-from-square text-[10px] ml-2"></i>
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Training CTA -->
    <section class="bg-white py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-spartan-navy text-white p-8 md:p-12 lg:p-14 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 relative overflow-hidden select-text">
                <div class="absolute -right-12 bottom-0 h-32 w-[520px] bg-spartan-teal opacity-20 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
                <div class="relative z-10 max-w-2xl">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Course registration</span>
                    <h2 class="font-oswald text-2xl md:text-4xl font-bold tracking-widest uppercase leading-tight mb-4">
                        Review schedules and register through Hercules.
                    </h2>
                    <p class="text-sm md:text-base text-slate-300 font-light leading-relaxed">
                        Spartan connects customers to the Hercules Training Academy catalogue. Use the Hercules course pages for current outlines, availability, and booking details.
                    </p>
                </div>
                <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="relative z-10 inline-flex w-fit items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                    <span>View Training Portal</span>
                    <i class="fa-solid fa-arrow-up-right-from-square text-[11px] ml-2.5"></i>
                </a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
