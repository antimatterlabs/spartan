<?php
$page_title = 'Products | Spartan Industrial Marine';
$active_nav = 'products';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Shop Products',
    'subtitle' => 'Safety equipment, rope and rigging, fishing gear, and workwear. Stocked deep across three Atlantic Canada locations.',
    'image' => 'assets/images/EQUIPMENT.jpg',
    'size' => 'short',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Products'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

// Optional initial category filter, e.g. products.php?cat=rope
$initial_cat = isset($_GET['cat']) && array_key_exists($_GET['cat'], $site_product_categories) ? $_GET['cat'] : 'all';

// Category counts for the sidebar
$cat_counts = array_fill_keys(array_keys($site_product_categories), 0);
foreach ($site_products as $p) { $cat_counts[$p['category']]++; }
$total_products = count($site_products);
$initial_count = $initial_cat === 'all' ? $total_products : $cat_counts[$initial_cat];
?>

    <!-- Archive: sidebar filters + product grid -->
    <section class="py-12 md:py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Mobile filter toggle -->
        <div class="lg:hidden mb-6">
            <button onclick="document.getElementById('filters-sidebar').classList.toggle('hidden')" class="w-full border border-slate-200 text-spartan-navy py-3 px-5 text-xs font-bold tracking-[0.2em] uppercase flex items-center justify-between hover:border-spartan-teal transition-colors">
                <span><i class="fa-solid fa-sliders mr-2.5 text-spartan-teal"></i>Filters</span>
                <i class="fa-solid fa-chevron-down text-[10px]"></i>
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">

            <!-- ================= FILTERS SIDEBAR ================= -->
            <aside id="filters-sidebar" class="hidden lg:block lg:col-span-1 select-text">
                <div class="lg:sticky lg:top-32 space-y-8">

                    <!-- Department filter (functional) -->
                    <div>
                        <h2 class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.25em] uppercase pb-3 border-b border-slate-200 mb-1">Department</h2>
                        <ul class="text-[13px] font-medium">
                            <li>
                                <button onclick="filterProducts('all')" data-cat="all" class="filter-cat w-full text-left py-2.5 pl-3 border-l-2 <?php echo $initial_cat === 'all' ? 'text-spartan-teal font-bold border-spartan-teal' : 'text-slate-600 border-transparent'; ?> hover:text-spartan-teal transition-colors flex items-center justify-between">
                                    <span>All Products</span>
                                    <span class="text-[10px] font-mono text-slate-400"><?php echo $total_products; ?></span>
                                </button>
                            </li>
                            <?php foreach ($site_product_categories as $cat_key => $cat_label): ?>
                            <li>
                                <button onclick="filterProducts('<?php echo $cat_key; ?>')" data-cat="<?php echo $cat_key; ?>" class="filter-cat w-full text-left py-2.5 pl-3 border-l-2 <?php echo $initial_cat === $cat_key ? 'text-spartan-teal font-bold border-spartan-teal' : 'text-slate-600 border-transparent'; ?> hover:text-spartan-teal transition-colors flex items-center justify-between">
                                    <span><?php echo $cat_label; ?></span>
                                    <span class="text-[10px] font-mono text-slate-400"><?php echo $cat_counts[$cat_key]; ?></span>
                                </button>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Availability filter (visual mockup) -->
                    <div>
                        <h2 class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.25em] uppercase pb-3 border-b border-slate-200 mb-4">Availability</h2>
                        <ul class="space-y-3 text-[13px] text-slate-600 font-medium">
                            <li>
                                <label class="flex items-center space-x-3 cursor-pointer hover:text-spartan-teal transition-colors">
                                    <input type="checkbox" checked class="w-4 h-4 accent-[#00B3A6] rounded-none">
                                    <span>In Stock</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center space-x-3 cursor-pointer hover:text-spartan-teal transition-colors">
                                    <input type="checkbox" class="w-4 h-4 accent-[#00B3A6] rounded-none">
                                    <span>On Sale</span>
                                </label>
                            </li>
                            <li>
                                <label class="flex items-center space-x-3 cursor-pointer hover:text-spartan-teal transition-colors">
                                    <input type="checkbox" class="w-4 h-4 accent-[#00B3A6] rounded-none">
                                    <span>Special Order</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <!-- Brand filter (visual mockup) -->
                    <div>
                        <h2 class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.25em] uppercase pb-3 border-b border-slate-200 mb-4">Brand</h2>
                        <ul class="space-y-3 text-[13px] text-slate-600 font-medium">
                            <?php foreach (array_slice($site_brands, 0, 6) as $brand): ?>
                            <li>
                                <label class="flex items-center space-x-3 cursor-pointer hover:text-spartan-teal transition-colors">
                                    <input type="checkbox" class="w-4 h-4 accent-[#00B3A6] rounded-none">
                                    <span><?php echo ucwords(strtolower($brand)); ?></span>
                                </label>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <button onclick="alert('Show all brands mockup!')" class="mt-4 text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] uppercase transition-colors">
                            + Show All Brands
                        </button>
                    </div>

                    <!-- Price filter (visual mockup) -->
                    <div>
                        <h2 class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.25em] uppercase pb-3 border-b border-slate-200 mb-4">Price</h2>
                        <div class="flex items-center space-x-3">
                            <input type="number" placeholder="Min" class="w-full border border-slate-200 bg-white text-xs text-slate-700 px-3 py-2.5 outline-none focus:border-spartan-teal rounded-none">
                            <span class="text-slate-400 text-xs">to</span>
                            <input type="number" placeholder="Max" class="w-full border border-slate-200 bg-white text-xs text-slate-700 px-3 py-2.5 outline-none focus:border-spartan-teal rounded-none">
                        </div>
                        <button onclick="alert('Price filter mockup!')" class="mt-3 w-full border border-spartan-navy text-spartan-navy py-2.5 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                            Apply
                        </button>
                    </div>

                    <!-- Clear filters -->
                    <button onclick="filterProducts('all')" class="w-full text-slate-400 hover:text-spartan-teal py-2 text-[10px] font-bold tracking-[0.2em] uppercase transition-colors border-t border-slate-100 pt-5">
                        <i class="fa-solid fa-rotate-left mr-1.5"></i>Clear All Filters
                    </button>

                    <!-- Sidebar help card -->
                    <div class="bg-spartan-navy p-6 relative overflow-hidden">
                        <div class="absolute -right-10 -bottom-4 w-[240px] h-16 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                        <div class="relative z-10">
                            <h3 class="font-oswald text-sm font-bold text-white tracking-[0.15em] uppercase mb-2">Not sure what you need?</h3>
                            <p class="text-xs text-slate-300 font-light leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <a href="<?php echo $site['phone_href']; ?>" class="inline-flex items-center text-[10px] font-bold text-spartan-teal tracking-[0.2em] hover:text-spartan-teal-light transition-colors uppercase">
                                <i class="fa-solid fa-phone text-[10px] mr-2"></i>
                                <span><?php echo $site['phone']; ?></span>
                            </a>
                        </div>
                    </div>

                </div>
            </aside>

            <!-- ================= PRODUCT GRID ================= -->
            <div class="lg:col-span-3">

                <!-- Toolbar: count + sort -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 mb-8 border-b border-slate-100 select-text">
                    <p class="text-xs text-slate-500 font-light tracking-wide">
                        Showing <span id="product-count" class="font-bold text-spartan-navy"><?php echo $initial_count; ?></span> products
                    </p>
                    <div class="flex items-center space-x-3">
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase shrink-0">Sort By</label>
                        <select onchange="alert('Sort mockup!')" class="border border-slate-200 bg-white text-xs text-slate-700 px-3 py-2.5 outline-none focus:border-spartan-teal rounded-none">
                            <option>Featured</option>
                            <option>Best Selling</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest</option>
                        </select>
                    </div>
                </div>

                <!-- 3-Column Product Grid (all products) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8 select-text">
                    <?php foreach ($site_products as $product): ?>
                        <?php include __DIR__ . '/components/product-card.php'; ?>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination (visual mockup) -->
                <div class="mt-14 flex items-center justify-center space-x-2 select-none">
                    <button class="w-10 h-10 border border-slate-200 text-slate-400 hover:border-spartan-teal hover:text-spartan-teal transition-colors flex items-center justify-center" aria-label="Previous page">
                        <i class="fa-solid fa-chevron-left text-[10px]"></i>
                    </button>
                    <button class="w-10 h-10 bg-spartan-navy text-white flex items-center justify-center text-xs font-bold">1</button>
                    <button class="w-10 h-10 border border-slate-200 text-slate-600 hover:border-spartan-teal hover:text-spartan-teal transition-colors flex items-center justify-center text-xs font-bold">2</button>
                    <button class="w-10 h-10 border border-slate-200 text-slate-600 hover:border-spartan-teal hover:text-spartan-teal transition-colors flex items-center justify-center text-xs font-bold">3</button>
                    <button class="w-10 h-10 border border-slate-200 text-slate-400 hover:border-spartan-teal hover:text-spartan-teal transition-colors flex items-center justify-center" aria-label="Next page">
                        <i class="fa-solid fa-chevron-right text-[10px]"></i>
                    </button>
                </div>

                <!-- Help strip -->
                <div class="mt-14 border border-slate-100 bg-spartan-light-gray p-8 flex flex-col md:flex-row md:items-center md:justify-between gap-6 select-text">
                    <div>
                        <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.15em] uppercase mb-1.5">Can't find what you need?</h3>
                        <p class="text-sm text-slate-600 font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                    </div>
                    <a href="contact.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors shrink-0">
                        <span>Send a Request</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

    <script>window.SPARTAN_INITIAL_FILTER = '<?php echo $initial_cat; ?>';</script>
<?php require_once __DIR__ . '/partials/footer.php'; ?>
