<?php
$page_title = 'Search | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$query = trim($_GET['q'] ?? '');
$query_safe = htmlspecialchars($query);

// Search mock data: products by name/category, services by title/desc
$product_results = [];
$service_results = [];
if ($query !== '') {
    foreach ($site_products as $p) {
        $haystack = strtolower(html_entity_decode($p['name'] . ' ' . $p['category_label'] . ' ' . $p['desc']));
        if (strpos($haystack, strtolower($query)) !== false) {
            $product_results[] = $p;
        }
    }
    foreach ($site_services as $s) {
        $haystack = strtolower($s['title'] . ' ' . $s['desc']);
        if (strpos($haystack, strtolower($query)) !== false) {
            $service_results[] = $s;
        }
    }
}
$total_results = count($product_results) + count($service_results);

$hero = [
    'title' => 'Search',
    'subtitle' => $query !== ''
        ? $total_results . ' result' . ($total_results === 1 ? '' : 's') . ' for "' . $query_safe . '"'
        : 'Search products and services by name, category, or keyword.',
    'image' => 'assets/images/spartan-3.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Search'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Search form -->
    <section class="py-14 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <form action="search.php" method="get" class="relative select-text">
            <input type="text" name="q" value="<?php echo $query_safe; ?>" placeholder="Search rope, suits, rafts, boots, part numbers..." class="w-full bg-white border-b-2 border-slate-200 focus:border-spartan-teal text-spartan-navy text-xl md:text-2xl font-light py-4 px-2 placeholder-slate-400 outline-none transition-all duration-300">
            <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 p-2 text-slate-400 hover:text-spartan-teal transition-colors" aria-label="Submit search">
                <i class="fa-solid fa-arrow-right text-2xl"></i>
            </button>
        </form>
        <div class="mt-6 flex flex-wrap gap-2 text-xs font-bold tracking-widest uppercase text-slate-500 select-text">
            <span class="mr-2 self-center">Popular:</span>
            <a href="search.php?q=pot+warp" class="bg-spartan-light-gray text-slate-700 px-3.5 py-1.5 hover:bg-spartan-teal hover:text-white transition-colors">Pot Warp</a>
            <a href="search.php?q=immersion+suit" class="bg-spartan-light-gray text-slate-700 px-3.5 py-1.5 hover:bg-spartan-teal hover:text-white transition-colors">Immersion Suits</a>
            <a href="search.php?q=raft" class="bg-spartan-light-gray text-slate-700 px-3.5 py-1.5 hover:bg-spartan-teal hover:text-white transition-colors">Raft Inspection</a>
            <a href="search.php?q=boot" class="bg-spartan-light-gray text-slate-700 px-3.5 py-1.5 hover:bg-spartan-teal hover:text-white transition-colors">Deck Boots</a>
        </div>
    </section>

    <?php if ($query !== '' && $total_results === 0): ?>
    <!-- Empty state -->
    <section class="pb-24 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center select-text">
        <div class="border border-slate-100 p-14">
            <div class="w-16 h-16 bg-spartan-light-gray text-slate-400 flex items-center justify-center mx-auto mb-6">
                <i class="fa-solid fa-magnifying-glass text-2xl"></i>
            </div>
            <h2 class="font-oswald text-xl font-bold text-spartan-navy tracking-[0.15em] uppercase mb-3">Nothing matched "<?php echo $query_safe; ?>"</h2>
            <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-md mx-auto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="<?php echo $site['phone_href']; ?>" class="inline-flex items-center bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                    <i class="fa-solid fa-phone text-[11px] mr-2.5"></i>
                    <span><?php echo $site['phone']; ?></span>
                </a>
                <a href="products.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                    Browse All Products
                </a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if (count($service_results) > 0): ?>
    <!-- Service results -->
    <section class="pb-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-8 select-text">Services (<?php echo count($service_results); ?>)</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-14 select-text">
            <?php foreach ($service_results as $service): ?>
                <?php include __DIR__ . '/components/service-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if (count($product_results) > 0): ?>
    <!-- Product results -->
    <section class="pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-8 select-text">Products (<?php echo count($product_results); ?>)</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 select-text">
            <?php foreach ($product_results as $product): ?>
                <?php include __DIR__ . '/components/product-card.php'; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($query === ''): ?>
    <!-- No query yet: show departments -->
    <section class="pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-8 select-text">Or Browse By Department</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 select-text">
            <?php foreach ($site_product_categories as $cat_key => $cat_label): ?>
            <a href="products.php?cat=<?php echo $cat_key; ?>" class="border border-slate-100 p-8 hover:border-spartan-teal transition-colors group">
                <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-2 group-hover:text-spartan-teal transition-colors"><?php echo $cat_label; ?></h3>
                <span class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal uppercase">
                    <span>Shop Now</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </span>
            </a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
