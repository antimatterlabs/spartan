<?php
$page_title = 'Search | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$query = trim($_GET['q'] ?? '');
$query_safe = htmlspecialchars($query);

function site_search_normalize_text($value) {
    $value = html_entity_decode(strip_tags((string) $value), ENT_QUOTES, 'UTF-8');
    if (function_exists('iconv')) {
        $converted = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $value);
        if (is_string($converted) && $converted !== '') {
            $value = $converted;
        }
    }
    $value = strtolower($value);
    $value = str_replace("\xC2\xA0", ' ', $value);
    $value = preg_replace('/[^a-z0-9]+/', ' ', $value);

    return trim((string) preg_replace('/\s+/', ' ', $value));
}

function site_search_singular_token($token) {
    $token = (string) $token;
    if (strlen($token) > 4 && substr($token, -3) === 'ies') {
        return substr($token, 0, -3) . 'y';
    }

    if (strlen($token) > 4 && substr($token, -3) === 'ves') {
        return substr($token, 0, -3) . 'fe';
    }

    if (strlen($token) > 3 && substr($token, -1) === 's' && substr($token, -2) !== 'ss') {
        return substr($token, 0, -1);
    }

    return $token;
}

function site_search_phrase_variant($phrase) {
    return implode(' ', array_map('site_search_singular_token', explode(' ', $phrase)));
}

function site_search_contains_term($haystack, $term) {
    if ($term === '') {
        return false;
    }

    return (bool) preg_match('/(?:^| )' . preg_quote($term, '/') . '(?: |$)/', $haystack);
}

function site_search_matches($query, $fields) {
    $haystack = site_search_normalize_text(implode(' ', array_filter($fields)));
    $normalized_query = site_search_normalize_text($query);
    if ($haystack === '' || $normalized_query === '') {
        return false;
    }

    $phrase_variants = array_unique(array_filter([
        $normalized_query,
        site_search_phrase_variant($normalized_query),
    ]));

    foreach ($phrase_variants as $variant) {
        if (site_search_contains_term($haystack, $variant)) {
            return true;
        }
    }

    $stop_words = ['and', 'the', 'for', 'with', 'per', 'all', 'our'];
    $tokens = array_values(array_filter(explode(' ', $normalized_query), function ($token) use ($stop_words) {
        return strlen($token) > 1 && !in_array($token, $stop_words, true);
    }));

    if (empty($tokens)) {
        return false;
    }

    foreach ($tokens as $token) {
        $token_variants = array_unique([$token, site_search_singular_token($token)]);
        $token_matched = false;
        foreach ($token_variants as $variant) {
            if (site_search_contains_term($haystack, $variant)) {
                $token_matched = true;
                break;
            }
        }

        if (!$token_matched) {
            return false;
        }
    }

    return true;
}

// Search products by title, category, SKU, vendor, collection, and product type.
$product_results = [];
$service_results = [];
if ($query !== '') {
    foreach ($site_products as $p) {
        if (site_search_matches($query, [
            $p['name'] ?? '',
            $p['category_label'] ?? '',
            $p['category_name'] ?? '',
            $p['desc'] ?? '',
            $p['sku'] ?? '',
            $p['vendor'] ?? '',
            $p['brand_name'] ?? '',
            $p['collection'] ?? '',
            $p['product_type'] ?? '',
            $p['variant_search_text'] ?? '',
        ])) {
            $product_results[] = $p;
        }
    }
    foreach ($site_services as $s) {
        if (site_search_matches($query, [$s['title'] ?? '', $s['desc'] ?? ''])) {
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
    'image' => 'assets/images/j9/spartan-store-interior.webp',
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
                Try a related category, SKU, vendor, or product term. Spartan can also confirm availability and substitutions over the counter.
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
            <a href="products.php?cat=<?php echo site_escape($cat_key); ?>" class="border border-slate-100 p-8 hover:border-spartan-teal transition-colors group">
                <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-2 group-hover:text-spartan-teal transition-colors"><?php echo site_escape($cat_label); ?></h3>
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
