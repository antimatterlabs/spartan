<?php
$page_title = 'Brands | Spartan Industrial Marine';
$active_nav = 'brands';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Brands We Stand Behind',
    'subtitle' => 'Stocked because they hold up. Every brand on this wall has proven itself on working vessels.',
    'image' => 'assets/images/hero.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Brands'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Full brand logo grid -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-px bg-slate-100 border border-slate-100">
            <?php foreach ($site_brands as $brand): ?>
            <a href="products.php" class="bg-white h-36 flex items-center justify-center px-6 hover:bg-spartan-light-gray transition-colors group">
                <span class="font-oswald text-base md:text-lg font-bold tracking-[0.2em] uppercase text-spartan-steel group-hover:text-spartan-navy transition-colors text-center"><?php echo $brand; ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Why these brands: split media -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            $sm = [
                'eyebrow' => 'HOW WE PICK THEM',
                'title' => 'If It Fails On Deck, It Comes Off The Shelf',
                'text' => "We're an authorized dealer and certified service partner for the brands we carry, which means factory parts, valid warranties, and technicians trained by the manufacturer. When a product starts coming back broken, we stop selling it. Simple as that.",
                'button_label' => 'Shop All Products',
                'button_url' => 'products.php',
                'image' => 'assets/images/spartan-3.png',
                'image_alt' => 'Rope and hardware stock on shelves',
                'reverse' => true,
            ];
            include __DIR__ . '/components/split-media.php';
            ?>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
