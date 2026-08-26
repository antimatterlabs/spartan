<?php
$page_title = 'Marine Equipment Rentals | Spartan Industrial Marine';
$meta_description = 'Ask Spartan about marine safety gear, liferaft, and immersion suit rentals. Availability and rental terms vary by equipment and location.';
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'eyebrow' => 'Marine rental services',
    'title' => 'Rental Equipment',
    'subtitle' => 'Fill the gaps in your fleet without the cost of buying new. Rent fully maintained, certified equipment by the day, week, month, or year.',
    'image' => 'assets/images/j9/marine-safety.webp',
    'show_breadcrumbs' => false,
    'overlay_class' => 'bg-gradient-to-b from-spartan-navy/55 via-spartan-navy/70 to-spartan-navy/90',
];
require_once __DIR__ . '/components/page-hero.php';

$rental_categories = [
    [
        'title' => 'Liferafts & Immersion Suits',
        'image' => 'assets/images/j9/life-raft-service-inspection.webp',
        'text' => 'Ask about rental options when owned survival gear is being serviced or a project requires additional equipment.',
    ],
    [
        'title' => 'Marine Safety Gear',
        'image' => 'assets/images/j9/other-marine-life-safety.webp',
        'text' => 'Contact the nearest branch with the equipment type, dates, vessel details, and receiving location.',
    ],
];

$rental_steps = [
    [
        'step' => '01',
        'title' => 'Tell Us What You Need',
        'text' => 'Contact your local branch or submit a request with the equipment, dates, vessel details, and pickup or delivery preference.',
    ],
    [
        'step' => '02',
        'title' => 'Pick Up or Deliver',
        'text' => 'Grab your gear from an active Spartan branch, or have our team coordinate delivery, setup, and crew handoff where available.',
    ],
    [
        'step' => '03',
        'title' => 'Return When Finished',
        'text' => 'Drop the equipment off when your job, trip, or season wraps up. Long-term and full-season rental terms are available.',
    ],
];

$faqs = [
    [
        'q' => 'How fast can I get my rental equipment?',
        'a' => 'Timing depends on the equipment, current availability, and receiving location. Contact the nearest branch with your requested dates so the team can confirm options.',
    ],
    [
        'q' => 'Can I pick up gear at one location and drop it off at another?',
        'a' => 'Yes. For one-way trips or changing jobs, ask your local branch about picking up rental gear at one active Spartan location and returning it to another when you are finished.',
    ],
    [
        'q' => 'What happens if a piece of rental gear gets damaged on the job?',
        'a' => 'Normal wear and tear happens on the water. If equipment is heavily damaged, lost, or a liferaft is deployed in a non-emergency situation, the renter is responsible for repair or replacement costs. Contact your branch immediately if there is an issue.',
    ],
    [
        'q' => 'Do you offer discounts for long-term or full-season rentals?',
        'a' => 'Yes. Spartan can quote competitive monthly, seasonal, or year-long commercial rental terms for crews and projects that need gear for more than a quick trip.',
    ],
];
?>

    <!-- Rental categories -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                <div class="lg:col-span-4 lg:sticky lg:top-32">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Rental equipment</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                        Ask about availability.
                    </h2>
                    <p class="text-base text-slate-600 font-light leading-relaxed mb-8">
                        Liferafts, immersion suits, and marine safety gear are available for rent. Availability varies by branch and requested dates.
                    </p>
                    <a href="contact.php?need=rental" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy transition-colors">
                        <span>Request a Rental</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="lg:col-span-8 space-y-6">
                    <?php foreach ($rental_categories as $item): ?>
                    <article class="group grid grid-cols-1 sm:grid-cols-[minmax(240px,0.9fr)_minmax(0,1.1fr)] border border-slate-200 bg-white overflow-hidden">
                        <div class="relative min-h-[260px] overflow-hidden bg-spartan-navy">
                            <img src="<?php echo site_escape($item['image']); ?>" alt="<?php echo site_escape($item['title']); ?>" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-7 md:p-9 flex flex-col justify-center">
                            <h3 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4"><?php echo site_escape($item['title']); ?></h3>
                            <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed mb-6"><?php echo site_escape($item['text']); ?></p>
                            <a href="contact.php?need=rental" class="inline-flex w-fit items-center font-oswald text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal hover:text-spartan-navy transition-colors">
                                <span>Ask About This Equipment</span>
                                <i class="fa-solid fa-arrow-right text-[9px] ml-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Rental process -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">How rentals work</span>
                <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                    Get your gear and get to work.
                </h2>
                <p class="text-base text-slate-600 font-light leading-relaxed">
                    We keep the paperwork light while making sure the equipment is inspected, documented, and ready for your operation.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-12">
                <?php foreach ($rental_steps as $step): ?>
                    <article>
                        <span class="font-oswald text-6xl md:text-7xl font-bold text-spartan-teal/30 tracking-wider block mb-5 leading-none"><?php echo site_escape($step['step']); ?></span>
                        <h3 class="font-oswald text-xl md:text-2xl font-bold text-spartan-navy tracking-widest uppercase mb-4"><?php echo site_escape($step['title']); ?></h3>
                        <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed"><?php echo site_escape($step['text']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Branch contact grid -->
    <section class="bg-white py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
                <div class="lg:col-span-4">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Need something specific?</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">
                        Ask the nearest branch.
                    </h2>
                    <p class="text-base text-slate-600 font-light leading-relaxed mb-8">
                        Availability changes fast depending on the season. Contact a local branch or email <?php echo site_escape($site['email']); ?> and Spartan will help source the right safety or industrial rental gear.
                    </p>
                    <a href="locations.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                        <span>View All Locations</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>
                <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ($site_locations as $loc): ?>
                        <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="border border-slate-200 p-5 bg-white hover:border-spartan-teal transition-colors group">
                            <div class="flex items-start justify-between gap-4 mb-3">
                                <div>
                                    <h3 class="font-oswald text-lg font-bold tracking-wider text-spartan-navy uppercase group-hover:text-spartan-teal transition-colors"><?php echo site_escape($loc['city']); ?></h3>
                                    <span class="font-oswald text-[10px] font-bold tracking-[0.22em] uppercase text-slate-400"><?php echo site_escape($loc['badge']); ?></span>
                                </div>
                                <i class="fa-solid fa-arrow-right text-spartan-teal text-sm mt-1"></i>
                            </div>
                            <p class="text-xs text-slate-600 font-light leading-relaxed mb-3"><?php echo site_escape($loc['address']); ?></p>
                            <span class="text-xs font-bold tracking-[0.16em] uppercase text-spartan-navy"><?php echo site_escape($loc['phone']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">FAQ</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">
                    Rental questions
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
        'eyebrow' => 'Marine rentals',
        'title' => 'Need certified gear for the next job?',
        'text' => 'Send Spartan your equipment list, location, and dates. We will confirm availability, rental terms, pickup, delivery, and setup options.',
        'button_label' => 'Request a Rental Quote',
        'button_url' => 'contact.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
