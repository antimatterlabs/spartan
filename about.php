<?php
$page_title = 'About | Spartan Industrial Marine';
$active_nav = 'about';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Built For Those Who Work On The Water',
    'subtitle' => 'Supplier, service centre, and rigging shop for the commercial marine industry across Atlantic Canada.',
    'image' => 'assets/images/hero.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'About'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Story: split media -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <?php
            $sm = [
                'eyebrow' => 'OUR STORY',
                'title' => 'Lorem Ipsum Dolor Sit Amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'button_label' => 'Meet Us At The Counter',
                'button_url' => 'locations.php',
                'image' => 'assets/images/spartan-2.png',
                'image_alt' => 'Spartan crew at work',
                'reverse' => false,
            ];
            include __DIR__ . '/components/split-media.php';

            $sm = [
                'eyebrow' => 'HOW WE WORK',
                'title' => 'Lorem Ipsum Dolor Sit Amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'button_label' => 'Read Our Guides',
                'button_url' => 'blog.php',
                'image' => 'assets/images/spartan-3.png',
                'image_alt' => 'Rigging shop detail',
                'reverse' => true,
                'button_style' => 'outline',
            ];
            include __DIR__ . '/components/split-media.php';
            ?>
        </div>
    </section>

    <!-- Brand pillars -->
    <?php require_once __DIR__ . '/components/pillars.php'; ?>

    <!-- Stats band -->
    <section class="bg-spartan-navy text-white py-16 overflow-hidden relative">
        <div class="absolute -left-20 bottom-0 h-40 w-[500px] bg-spartan-teal opacity-[0.04] pointer-events-none" style="-webkit-mask: url('assets/images/left-wave.svg') left center / contain no-repeat; mask: url('assets/images/left-wave.svg') left center / contain no-repeat;" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 grid grid-cols-2 lg:grid-cols-4 gap-8 select-text">
            <div class="border-l-2 border-spartan-teal pl-5">
                <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">40+</span>
                <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Lorem ipsum dolor sit amet</span>
            </div>
            <div class="border-l-2 border-spartan-teal pl-5">
                <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">10,000+</span>
                <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Lorem ipsum dolor sit amet</span>
            </div>
            <div class="border-l-2 border-spartan-teal pl-5">
                <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">48 HR</span>
                <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Lorem ipsum dolor sit amet</span>
            </div>
            <div class="border-l-2 border-spartan-teal pl-5">
                <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">1,200+</span>
                <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Lorem ipsum dolor sit amet</span>
            </div>
        </div>
    </section>

    <!-- Brands -->
    <?php $brands_limit = 6; require_once __DIR__ . '/components/brands-grid.php'; ?>

    <!-- CTA -->
    <?php
    $cta = [
        'eyebrow' => 'WORK WITH US',
        'title' => 'Lorem Ipsum Dolor Sit Amet',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'button_label' => 'Set Up an Account',
        'button_url' => 'contact.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
