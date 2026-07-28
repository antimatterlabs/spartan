<?php
$page_title = 'Marine Safety Training | Spartan Industrial Marine';
$meta_description = 'Keep your crew safe and compliant. Explore marine safety, rigging, fall protection, confined space, and industrial training delivered through Hercules Training Academy.';
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$training_portal_url = 'https://www.herculeslifting.com/pages/training';

$hero = [
    'eyebrow' => 'Safety training',
    'title' => 'Marine Safety Training & Courses',
    'subtitle' => 'Delivered through our trusted partner, Hercules Training Academy, for crews that need practical safety training and recognized workplace certifications.',
    'image' => 'assets/images/j9/other-industrial-safety.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Marine Services', 'url' => 'services.php'],
        ['label' => 'Training'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$programs = [
    [
        'title' => 'Rigging & Slinging Safety',
        'image' => 'assets/images/j9/marine-rigging.webp',
        'icon' => 'fa-link',
        'text' => 'Proper inspection, hook-up, load control, and lifting practices for industrial and marine cranes.',
    ],
    [
        'title' => 'Fall Protection',
        'image' => 'assets/images/j9/other-industrial-safety.webp',
        'icon' => 'fa-shield-halved',
        'text' => 'Certified safety protocols for working at heights on vessels, docks, yards, and industrial job sites.',
    ],
    [
        'title' => 'Confined Space Entry',
        'image' => 'assets/images/j9/service-compliance.webp',
        'icon' => 'fa-helmet-safety',
        'text' => 'Safe operations, air monitoring, hazard recognition, and emergency response for tight vessel compartments and industrial spaces.',
    ],
    [
        'title' => 'Equipment Specialization',
        'image' => 'assets/images/j9/lifting-material-handling.webp',
        'icon' => 'fa-gears',
        'text' => 'Hands-on training for brand-specific hardware, winches, hoists, lifting systems, and safety equipment.',
    ],
];

$benefits = [
    'Find practical courses designed to safeguard your employees, boat, and business.',
    'Get certifications that help clear government-issued safety work orders.',
    'Build a proactive safety-first mindset across your marine or industrial workforce.',
    'Review course outlines and schedules directly through the Hercules Training Academy portal.',
];

$faqs = [
    [
        'q' => "Why is Spartan Marine's training handled by Hercules?",
        'a' => 'Hercules is Spartan\'s dedicated safety and rigging partner. Their specialized instructors, training facilities, and industrial safety experience give crews access to a deeper training bench.',
    ],
    [
        'q' => 'What specific marine safety courses are available?',
        'a' => 'Through Hercules Training Academy, crews can book industrial and marine training for fall protection, confined space entry, hoist and crane operation, and proper rigging safety.',
    ],
    [
        'q' => 'Can these courses help resolve a government-issued safety work order?',
        'a' => 'Yes. Courses are designed to support Canadian workplace safety and marine compliance needs, including official certifications that may be required to close active work orders.',
    ],
    [
        'q' => 'Where do these safety training courses take place?',
        'a' => 'Training can be completed at Hercules training centres, and depending on crew size and course type, on-site training at your facility or vessel may also be arranged.',
    ],
];
?>

    <!-- Training lead -->
    <section class="bg-white py-16 md:py-20 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <div class="lg:col-span-7">
                    <div class="w-14 h-4 bg-spartan-teal mb-6" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Partner-led safety training</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-6">
                        A safe crew is a profitable crew.
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 font-light leading-relaxed max-w-3xl mb-8">
                        Spartan connects marine and industrial customers with hands-on training through Hercules Training Academy. The goal is simple: protect your team, support compliance, and help your operation respond quickly when safety certifications are required.
                    </p>
                    <div class="space-y-4 mb-9">
                        <?php foreach ($benefits as $benefit): ?>
                            <div class="flex gap-3 text-sm md:text-base text-slate-700 leading-relaxed">
                                <i class="fa-solid fa-check text-spartan-teal mt-1"></i>
                                <span><?php echo site_escape($benefit); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                        <span>Go to Training Portal</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-[11px] ml-2.5"></i>
                    </a>
                </div>
                <div class="lg:col-span-5 bg-spartan-navy text-white p-8 md:p-10 relative overflow-hidden">
                    <img src="assets/images/j9/lifting-material-handling.webp" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20">
                    <div class="absolute inset-0 bg-spartan-navy/82"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.28em] uppercase block mb-4">Delivered by Hercules</span>
                        <h3 class="font-oswald text-3xl font-bold uppercase tracking-wider leading-tight mb-5">
                            Course outlines, schedules, and registration live in the Hercules portal.
                        </h3>
                        <p class="text-sm text-slate-300 font-light leading-relaxed mb-8">
                            Spartan helps route customers to the right training path, while Hercules provides the dedicated instructors and facilities.
                        </p>
                        <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center border border-spartan-teal text-spartan-teal py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                            <span>View Courses</span>
                            <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core programs -->
    <section class="py-16 md:py-24 bg-spartan-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Core safety training programs</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    Essential certifications for crews and worksites.
                </h2>
                <p class="text-base text-slate-600 font-light leading-relaxed">
                    Whether you are managing a commercial fishing crew or an industrial job site, these programs cover key safety subjects your team needs to stay legal and stay safe.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($programs as $program): ?>
                    <article class="group bg-white border border-slate-200">
                        <div class="h-52 overflow-hidden bg-spartan-navy relative">
                            <img src="<?php echo site_escape($program['image']); ?>" alt="<?php echo site_escape($program['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6">
                            <h3 class="font-oswald text-lg font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4"><?php echo site_escape($program['title']); ?></h3>
                            <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo site_escape($program['text']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Split CTA -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 bg-spartan-navy text-white select-text">
                <div class="relative min-h-[360px] overflow-hidden">
                    <img src="assets/images/j9/other-industrial-safety.webp" alt="Industrial safety equipment prepared for training" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-spartan-navy/30"></div>
                    <div class="absolute -bottom-2 -left-8 w-[120%] h-16 bg-spartan-teal opacity-60 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                </div>
                <div class="p-10 md:p-14 flex flex-col justify-center">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">Training access</span>
                    <h3 class="font-oswald text-2xl md:text-4xl font-bold tracking-wider uppercase leading-tight mb-5">
                        Resolve safety gaps before they turn into downtime.
                    </h3>
                    <p class="text-sm md:text-base text-slate-300 font-light leading-relaxed mb-8 max-w-md">
                        Use the Hercules Training Academy portal to review course options, request training, and coordinate the certifications your crew needs.
                    </p>
                    <div>
                        <a href="<?php echo site_escape($training_portal_url); ?>" target="_blank" rel="noopener" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                            <span>Open Training Portal</span>
                            <i class="fa-solid fa-arrow-up-right-from-square text-[11px] ml-2.5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">FAQ</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">
                    Training questions
                </h2>
            </div>
            <div class="divide-y divide-slate-200 border-y border-slate-200">
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

    <?php
    $cta = [
        'eyebrow' => 'Safety training',
        'title' => 'Need to get a crew certified?',
        'text' => 'Review training options through Hercules Training Academy or contact Spartan if you need help routing a marine or industrial safety request.',
        'button_label' => 'Go to Training Portal',
        'button_url' => $training_portal_url,
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
