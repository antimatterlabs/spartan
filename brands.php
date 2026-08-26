<?php
$page_title = 'Brands | Spartan Industrial Marine';
$active_nav = 'brands';
require_once __DIR__ . '/partials/header.php';

$brand_cards = array_values(array_filter($site_brand_catalog, function ($brand) {
    return ($brand['count'] ?? 0) > 0;
}));

$brand_logo_assets = [];
$brand_logo_directory = __DIR__ . '/assets/images/service-brands';
$brand_logo_web_directory = 'assets/images/service-brands';
$brand_logo_files = glob($brand_logo_directory . '/*.{svg,png,jpg,jpeg,webp}', GLOB_BRACE) ?: [];

foreach ($brand_logo_files as $brand_logo_file) {
    $brand_logo_slug = pathinfo($brand_logo_file, PATHINFO_FILENAME);
    $brand_logo_assets[$brand_logo_slug] = $brand_logo_web_directory . '/' . basename($brand_logo_file);
}

// Fierce's available artwork is a banner, so its card uses the logo portion of that image.
$brand_logo_assets['fierce-workwear'] = $brand_logo_web_directory . '/fierce-workwear-banner.jpg';
$brand_logo_assets['plantes-lobster-escape-vents-inc'] = $brand_logo_web_directory . '/plantes.png';
$brand_logo_assets['cotesi'] = $brand_logo_web_directory . '/cotesi1.svg';
$brand_logo_assets['mtkmfl-inc'] = $brand_logo_web_directory . '/morty-shadow.png';
$brand_logo_assets['ching-fa-fishing-implements-factory-co'] = $brand_logo_web_directory . '/ching-fa.png';
$brand_logo_assets['sea-master-enterprise-co-ltd'] = $brand_logo_web_directory . '/sea-master-enterprise-co.png';
$brand_logo_assets['dbc-marine-safety-systems-ltd'] = $brand_logo_web_directory . '/survitec-logo.svg';
$brand_logo_assets['brdr-markussens-metalvarefabrik-a-s'] = $brand_logo_web_directory . '/brd-logo.svg';

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
            $brand_logo = $brand_logo_assets[$brand['slug']] ?? null;
            $is_fierce_banner = $brand['slug'] === 'fierce-workwear';
            ?>
            <a
                id="brand-<?php echo site_escape($brand['slug']); ?>"
                href="<?php echo site_escape($brand_url); ?>"
                class="bg-white min-h-56 flex flex-col justify-between p-6 hover:bg-spartan-light-gray transition-colors group scroll-mt-32"
                aria-label="Shop <?php echo site_escape($brand['label']); ?> products"
            >
                <span class="h-24 flex items-center justify-center">
                    <?php if ($brand_logo !== null): ?>
                        <?php if ($is_fierce_banner): ?>
                            <span class="relative block h-20 w-36 overflow-hidden" aria-hidden="true">
                                <img
                                    src="<?php echo site_escape($brand_logo); ?>"
                                    alt=""
                                    class="absolute right-0 top-0 h-[150px] w-auto max-w-none"
                                    loading="lazy"
                                >
                            </span>
                        <?php else: ?>
                            <img
                                src="<?php echo site_escape($brand_logo); ?>"
                                alt=""
                                class="max-h-20 max-w-full w-auto object-contain"
                                loading="lazy"
                            >
                        <?php endif; ?>
                    <?php else: ?>
                        <span class="font-oswald text-base md:text-lg font-bold tracking-[0.14em] uppercase text-spartan-steel text-center group-hover:text-spartan-navy transition-colors">
                            <?php echo site_escape($brand['label']); ?>
                        </span>
                    <?php endif; ?>
                </span>
                <span class="mt-5 block">
                    <?php if ($brand_logo !== null): ?>
                    <span class="mb-2 block font-oswald text-xs font-bold tracking-[0.12em] uppercase text-spartan-steel group-hover:text-spartan-navy transition-colors">
                        <?php echo site_escape($brand['label']); ?>
                    </span>
                    <?php endif; ?>
                    <?php if (!empty($brand_categories)): ?>
                    <span class="block text-xs text-slate-500 font-light leading-relaxed"><?php echo site_escape(implode(' / ', $brand_categories)); ?></span>
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
