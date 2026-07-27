<?php
$page_title = 'Brands | Spartan Industrial Marine';
$active_nav = 'brands';
require_once __DIR__ . '/partials/header.php';

$brand_cards = array_values(array_filter($site_brand_catalog, function ($brand) {
    return ($brand['count'] ?? 0) > 0;
}));
$product_backed_brand_count = 0;
$product_backed_product_count = 0;
foreach ($brand_cards as $brand) {
    $product_backed_brand_count++;
    $product_backed_product_count += $brand['count'];
}

$hero = [
    'title' => 'Brands We Stand Behind',
    'subtitle' => 'Stocked because they hold up. Every brand on this wall has proven itself on working vessels.',
    'image' => 'assets/images/j9/spartan-store-interior.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Brands'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Full brand grid -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
            <div>
                <h2 class="font-oswald text-2xl font-bold tracking-[0.14em] uppercase text-spartan-navy">Shop By Brand</h2>
                <p class="mt-2 text-sm text-slate-600 font-light">
                    <?php echo number_format($product_backed_brand_count); ?> brands connected to <?php echo number_format($product_backed_product_count); ?> catalogue products.
                </p>
            </div>
            <a href="products.php" class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal uppercase hover:text-spartan-navy transition-colors">
                <span>Browse All Products</span>
                <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px bg-slate-100 border border-slate-100">
            <?php foreach ($brand_cards as $brand): ?>
            <?php
            $brand_url = site_brand_url($brand['slug']);
            $brand_categories = array_slice($brand['categories'] ?? [], 0, 2);
            ?>
            <a href="<?php echo site_escape($brand_url); ?>" class="bg-white min-h-40 flex flex-col justify-between p-6 hover:bg-spartan-light-gray transition-colors group">
                <span class="font-oswald text-base md:text-lg font-bold tracking-[0.14em] uppercase text-spartan-steel group-hover:text-spartan-navy transition-colors">
                    <?php echo site_escape($brand['label']); ?>
                </span>
                <span class="mt-5 block">
                    <span class="block text-[10px] font-bold tracking-[0.18em] uppercase text-spartan-teal"><?php echo number_format($brand['count']); ?> Products</span>
                    <?php if (!empty($brand_categories)): ?>
                    <span class="mt-1 block text-xs text-slate-500 font-light leading-relaxed"><?php echo site_escape(implode(' / ', $brand_categories)); ?></span>
                    <?php endif; ?>
                </span>
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
                'image' => 'assets/images/j9/spartan-warehouse-fulfillment.webp',
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
