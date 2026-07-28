<?php
$page_title = 'CERTTracker - Certification Tracking Software | Spartan Industrial Marine';
$meta_description = "Stay audit-ready with CERTTracker. Spartan's certification tracking software to track inspections, store digital certificates, provide reminders, and more.";
$active_nav = 'resources';
require_once __DIR__ . '/partials/header.php';

$hero_bullets = [
    'Stop work delays caused by expired gear or missing paperwork.',
    'Easily meet provincial regulations with instant access to signed certificates.',
    'Search, view, and export inspection data to Excel at the click of a button. No paper mess.',
    'Create unlimited user accounts so field workers and managers see the same data.',
];

$steps = [
    [
        'title' => 'Log In Anywhere',
        'text' => 'Access your secure, cloud-based dashboard from any device with zero software installation.',
    ],
    [
        'title' => 'Track Automatically',
        'text' => 'Store digital certificates, review history, or sync with optional RFID equipment tags.',
    ],
    [
        'title' => 'Get Alerts',
        'text' => 'Receive automated email notifications months before inspections expire to plan your workflow.',
    ],
];

$features = [
    ['icon' => 'fa-cloud', 'title' => 'Cloud Dashboard'],
    ['icon' => 'fa-tower-broadcast', 'title' => 'RFID Integration'],
    ['icon' => 'fa-clock-rotate-left', 'title' => 'Inspection History'],
    ['icon' => 'fa-file-shield', 'title' => 'Digital Certificates'],
    ['icon' => 'fa-envelope-open-text', 'title' => 'Email Alerts'],
    ['icon' => 'fa-file-excel', 'title' => 'Excel Export'],
    ['icon' => 'fa-users', 'title' => 'Unlimited Users'],
    ['icon' => 'fa-clipboard-check', 'title' => 'Audit Ready'],
];

$faqs = [
    [
        'q' => 'How are reminders sent?',
        'a' => 'CERTTracker can send automated email notifications before inspection dates expire, giving your team time to schedule service and avoid last-minute downtime.',
    ],
    [
        'q' => 'Can I upload existing certificates?',
        'a' => 'Yes. Existing digital certificates and inspection files can be stored in the platform so your team can find records from one secure dashboard.',
    ],
    [
        'q' => 'Can multiple people log in?',
        'a' => 'Yes. CERTTracker supports unlimited user accounts so managers, office teams, and field workers can access the same current equipment information.',
    ],
    [
        'q' => 'Can inspectors upload reports?',
        'a' => 'Inspection reports and signed certificates can be added to the equipment record, keeping service history and compliance documents together.',
    ],
    [
        'q' => 'How secure is the data?',
        'a' => 'CERTTracker is a web-based system designed to keep inspection records organized in a secure cloud environment with controlled user access.',
    ],
];
?>

    <!-- CERTTracker hero -->
    <section class="relative overflow-hidden bg-spartan-navy text-white">
        <div class="absolute inset-0" aria-hidden="true">
            <img src="assets/images/j9/service-compliance.webp" alt="" class="absolute inset-0 w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-spartan-navy via-spartan-navy/95 to-spartan-navy/70"></div>
            <div class="absolute -right-20 bottom-8 h-44 w-[560px] bg-spartan-teal opacity-[0.08] pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28">
            <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_minmax(360px,0.82fr)] gap-12 lg:gap-16 items-center select-text">
                <div>
                    <div class="w-14 h-4 bg-spartan-teal mb-6" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-4">CERTTracker</span>
                    <h1 class="font-oswald text-4xl md:text-5xl lg:text-6xl font-bold tracking-widest uppercase leading-tight mb-6">
                        Certification Tracking Software for Marine Operations
                    </h1>
                    <div class="space-y-3 mb-8 max-w-2xl">
                        <p class="text-xl md:text-2xl text-white font-light leading-snug">
                            Never miss a safety inspection. Access all your equipment certificates, 24/7.
                        </p>
                        <p class="text-base text-slate-300 font-light leading-relaxed">
                            A 100% web-based tracking system built to eliminate downtime and keep your business compliant.
                        </p>
                    </div>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-3 text-sm text-slate-200 font-light leading-relaxed mb-9 max-w-3xl">
                        <?php foreach ($hero_bullets as $bullet): ?>
                        <li class="flex gap-3">
                            <i class="fa-solid fa-check text-spartan-teal text-xs mt-1.5"></i>
                            <span><?php echo site_escape($bullet); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <a href="contact.php" class="inline-flex items-center bg-spartan-teal text-white py-4 px-8 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                        <span>Talk to Our Team</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>
                </div>

                <div class="bg-white text-spartan-navy border border-white/20 shadow-[0_24px_90px_rgba(0,0,0,0.28)] p-6 md:p-7">
                    <div class="flex items-center justify-between border-b border-slate-100 pb-5 mb-5">
                        <div>
                            <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-1">Dashboard</span>
                            <h2 class="font-oswald text-2xl font-bold tracking-widest uppercase">CERTTracker</h2>
                        </div>
                        <span class="h-10 w-10 bg-spartan-light-gray text-spartan-teal flex items-center justify-center">
                            <i class="fa-solid fa-shield-halved"></i>
                        </span>
                    </div>

                    <div class="grid grid-cols-3 gap-3 mb-6">
                        <div class="bg-spartan-light-gray p-4">
                            <span class="font-oswald text-2xl font-bold block leading-none">248</span>
                            <span class="text-[9px] font-bold tracking-[0.16em] text-slate-500 uppercase">Assets</span>
                        </div>
                        <div class="bg-spartan-light-gray p-4">
                            <span class="font-oswald text-2xl font-bold block leading-none">17</span>
                            <span class="text-[9px] font-bold tracking-[0.16em] text-slate-500 uppercase">Due Soon</span>
                        </div>
                        <div class="bg-spartan-light-gray p-4">
                            <span class="font-oswald text-2xl font-bold block leading-none">0</span>
                            <span class="text-[9px] font-bold tracking-[0.16em] text-slate-500 uppercase">Missing Certs</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex items-center justify-between border border-slate-100 px-4 py-3">
                            <div>
                                <span class="font-oswald text-xs font-bold tracking-[0.15em] uppercase block">Life Raft A-104</span>
                                <span class="text-[11px] text-slate-500">Inspection certificate current</span>
                            </div>
                            <span class="text-[10px] font-bold tracking-[0.18em] text-spartan-teal uppercase">Current</span>
                        </div>
                        <div class="flex items-center justify-between border border-slate-100 px-4 py-3">
                            <div>
                                <span class="font-oswald text-xs font-bold tracking-[0.15em] uppercase block">Immersion Suit Set</span>
                                <span class="text-[11px] text-slate-500">Reminder sent 90 days before due date</span>
                            </div>
                            <span class="text-[10px] font-bold tracking-[0.18em] text-amber-600 uppercase">Due Soon</span>
                        </div>
                        <div class="flex items-center justify-between border border-slate-100 px-4 py-3">
                            <div>
                                <span class="font-oswald text-xs font-bold tracking-[0.15em] uppercase block">Pull Test Report</span>
                                <span class="text-[11px] text-slate-500">Exportable inspection history</span>
                            </div>
                            <span class="text-[10px] font-bold tracking-[0.18em] text-spartan-navy uppercase">Export</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How it works -->
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">How it works</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">The 3-Step Process</h2>
                <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed">
                    Never miss a safety inspection. From setup to compliance, CertTracker simplifies every step of your inspection management process so you can spend less time on paperwork and more time keeping operations moving.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php foreach ($steps as $index => $step): ?>
                <div class="border border-slate-200 p-7 bg-white">
                    <span class="font-oswald text-5xl font-bold text-spartan-teal/25 block mb-5">0<?php echo $index + 1; ?></span>
                    <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3"><?php echo site_escape($step['title']); ?></h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo site_escape($step['text']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Before / after -->
    <section class="bg-spartan-light-gray py-20 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14 items-center">
                <div>
                    <div class="w-14 h-4 bg-spartan-teal mb-5" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">Digital compliance</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">From Paper Records to Digital Compliance</h2>
                    <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed">
                        Replace paper files, spreadsheets, and manual reminders with one secure digital platform. Keep inspection records organized, accessible, and ready whenever your team or an auditor needs them.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="bg-white border border-slate-200 p-7">
                        <span class="font-oswald text-[10px] font-bold text-slate-400 tracking-[0.25em] uppercase block mb-4">The old way</span>
                        <ul class="space-y-3 text-sm text-slate-600 font-light leading-relaxed">
                            <li class="flex gap-3"><i class="fa-solid fa-xmark text-slate-400 mt-1"></i><span>Lost paperwork</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-xmark text-slate-400 mt-1"></i><span>Missed inspection dates</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-xmark text-slate-400 mt-1"></i><span>Chaotic Excel sheets</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-xmark text-slate-400 mt-1"></i><span>Compliance fines</span></li>
                        </ul>
                    </div>
                    <div class="bg-spartan-navy text-white p-7">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-4">The CertTracker way</span>
                        <ul class="space-y-3 text-sm text-slate-300 font-light leading-relaxed">
                            <li class="flex gap-3"><i class="fa-solid fa-check text-spartan-teal mt-1"></i><span>24/7 cloud access</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-check text-spartan-teal mt-1"></i><span>Proactive email alerts</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-check text-spartan-teal mt-1"></i><span>Digital certificate storage</span></li>
                            <li class="flex gap-3"><i class="fa-solid fa-check text-spartan-teal mt-1"></i><span>Complete compliance history</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform features -->
    <section class="py-20 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="max-w-3xl mb-12">
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">One platform</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">Purpose-Built for Marine Inspection Management</h2>
                <p class="text-sm md:text-base text-slate-600 font-light leading-relaxed">
                    From automated reminders and digital certificates to reporting and RFID integration, CertTracker gives your team the tools to manage equipment inspections with confidence. All from one secure, cloud-based platform.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-slate-200 border border-slate-200">
                <?php foreach ($features as $feature): ?>
                <div class="bg-white p-7 min-h-[150px] flex flex-col justify-between">
                    <i class="fa-solid <?php echo site_escape($feature['icon']); ?> text-spartan-teal text-xl mb-5"></i>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy tracking-[0.16em] uppercase leading-snug"><?php echo site_escape($feature['title']); ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 md:py-24 bg-spartan-light-gray">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">Questions</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Frequently Asked Questions</h2>
            </div>

            <div class="space-y-4">
                <?php foreach ($faqs as $faq): ?>
                <details class="group bg-white border border-slate-200/70 p-6 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/35">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase pr-6"><?php echo site_escape($faq['q']); ?></h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        <?php echo site_escape($faq['a']); ?>
                    </div>
                </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php
    $cta = [
        'eyebrow' => 'CERTTRACKER',
        'title' => 'Keep every certificate within reach.',
        'text' => 'Talk to Spartan about certification tracking for your fleet, branch, or operation.',
        'button_label' => 'Talk to Our Team',
        'button_url' => 'contact.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
