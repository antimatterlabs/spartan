<?php
$page_title = 'Services | Spartan Industrial Marine';
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Certified Marine Services',
    'subtitle' => 'Raft inspections, suit testing, splicing, pull testing, and compliance checks. Performed in-house by Transport Canada certified technicians.',
    'image' => 'assets/images/j9/spartan-service-workshop.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Services'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Services grid -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-14 select-text">
            <?php foreach ($site_services as $service): ?>
                <?php include __DIR__ . '/components/service-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- How servicing works: split media -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            $sm = [
                'eyebrow' => 'HOW IT WORKS',
                'title' => 'Lorem Ipsum Dolor Sit Amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.',
                'button_label' => 'Book a Service',
                'button_url' => 'contact.php',
                'image' => 'assets/images/j9/spartan-service-workshop.webp',
                'image_alt' => 'Service drop-off at the counter',
                'reverse' => true,
            ];
            include __DIR__ . '/components/split-media.php';
            ?>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
