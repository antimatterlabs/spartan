<?php
$page_title = 'Marine Supplies You Can Trust | Spartan Industrial Marine';
$meta_description = 'More than marine supplies. Explore trusted products and expert services for commercial, industrial, and military operations to stay ready for the job.';
$active_nav = 'home';
require_once __DIR__ . '/partials/header.php';

$home_department_cards = [
    [
        'title' => 'Foul Weather Clothing',
        'text' => 'Jackets, bibs, pants, base layers, and rain gear for working crews.',
        'cta' => 'Shop Foul Weather Gear',
        'url' => 'search.php?q=' . rawurlencode('foul weather'),
        'image' => 'assets/images/j9/department-workwear.webp',
        'alt' => 'Foul weather workwear for marine crews',
    ],
    [
        'title' => 'Work Gloves',
        'text' => 'Grip, protection, and cold-weather glove options for marine work.',
        'cta' => 'Shop Gloves',
        'url' => site_product_category_url('Gloves'),
        'image' => 'assets/images/home-flextech-gloves-in-use-v2.webp',
        'alt' => 'Marine work gloves',
    ],
    [
        'title' => 'Boots & Footwear',
        'text' => 'Waterproof deck boots, thermo boots, insoles, and job-ready footwear.',
        'cta' => 'Shop Boots',
        'url' => site_product_category_url('Boots'),
        'image' => 'assets/images/home-fierce-boots-display.webp',
        'alt' => 'Waterproof marine work boots',
    ],
    [
        'title' => 'Lobster & Crab Trap Supplies',
        'text' => 'Trap components, lobster bands, bait gear, cones, gauges, and related supplies.',
        'cta' => 'Shop Trap Supplies',
        'url' => site_product_group_url('fishing-trap-gear'),
        'image' => 'assets/images/lobster-traps.jpg',
        'alt' => 'Lobster and crab trap supplies',
    ],
    [
        'title' => 'Rope, Net & Twine',
        'text' => 'Pot warp, rope, twine, nets, net needles, leadlines, and fishing line.',
        'cta' => 'Shop Rope & Netting',
        'url' => site_product_group_url('rope-line-nets'),
        'image' => 'assets/images/fisherman-with-nets.jpeg',
        'alt' => 'Rope, nets, and twine in commercial fishing use',
    ],
    [
        'title' => 'Marine Safety & Rescue',
        'text' => 'Immersion suits, PFDs, life rafts, flares, EPIRBs, and survival gear.',
        'cta' => 'Shop Safety',
        'url' => site_product_group_url('safety-buoys-survival'),
        'image' => 'assets/images/j9/marine-safety.webp',
        'alt' => 'Marine safety equipment',
    ],
    [
        'title' => 'Rigging & Marine Hardware',
        'text' => 'Hooks, shackles, sleeves, chain, straps, binders, clips, and fittings.',
        'cta' => 'Shop Rigging',
        'url' => site_product_group_url('rigging-hardware'),
        'image' => 'assets/images/j9/marine-rigging.webp',
        'alt' => 'Marine rigging hardware',
    ],
    [
        'title' => 'Buoys & Floats',
        'text' => 'Trap buoys, working-water floats, markers, and high-visibility gear.',
        'cta' => 'Shop Buoys',
        'url' => site_product_category_url('Buoys'),
        'image' => 'assets/images/j9/other-buoys-floats.webp',
        'alt' => 'Buoys and floats',
    ],
];

$home_top_product_slugs = [
    'stormwatch-float-jacket',
    'fierce-frontier-deck-boot',
    'dockline-grip-gloves',
    'sinking-pot-warp-38',
    'lobster-trap-kit',
    'noreaster-rain-bibs',
    'coastline-solas-immersion-suit',
    'hi-vis-trap-buoy',
    'knotless-bait-bags',
    'galvanized-wire-rope-516',
    'hydrostatic-release-unit',
    'galvanized-anchor-chain',
];

$home_top_products = array_values(array_filter(array_map(function ($slug) {
    return site_product_by_slug($slug);
}, $home_top_product_slugs)));

$home_popular_product_specs = [
    ['slug' => 'noreaster-rain-bibs', 'filter' => 'foul-weather', 'featured' => true],
    ['slug' => 'stormwatch-float-jacket', 'filter' => 'foul-weather', 'featured' => true],
    ['slug' => 'grundens-neptune-hooded-jacket', 'filter' => 'foul-weather'],
    ['slug' => 'stormline-heavy-duty-foul-weather-jacket-blue-neon', 'filter' => 'foul-weather'],

    ['slug' => 'dockline-grip-gloves', 'filter' => 'gloves', 'featured' => true],
    ['slug' => 'showa-660-chemical-resistant-gloves', 'filter' => 'gloves'],
    ['slug' => 'showa-temres-282-insulated-gloves', 'filter' => 'gloves'],
    ['slug' => 'jokapolar-cold-wet-grip-gloves-black', 'filter' => 'gloves'],

    ['slug' => 'fierce-frontier-deck-boot', 'filter' => 'boots', 'featured' => true],
    ['slug' => 'grundens-deck-boss-15-m4-boot', 'filter' => 'boots'],
    ['slug' => 'dunlop-fieldpro-thermo-full-safety-boot-green', 'filter' => 'boots'],
    ['slug' => 'fierce-thermo-boots', 'filter' => 'boots'],

    ['slug' => 'lobster-trap-kit', 'filter' => 'trap-supplies', 'featured' => true],
    ['slug' => 'hi-vis-trap-buoy', 'filter' => 'trap-supplies', 'featured' => true],
    ['slug' => 'crabpot-cone-44x12-12050408', 'filter' => 'trap-supplies'],
    ['slug' => 'escape-hatch-1-7-8-trap-plastic-orange-35010062', 'filter' => 'trap-supplies'],

    ['slug' => 'sinking-pot-warp-38', 'filter' => 'rope-net-twine', 'featured' => true],
    ['slug' => 'galvanized-wire-rope-516', 'filter' => 'rope-net-twine', 'featured' => true],
    ['slug' => 'braided-twine-normal-nl-3-0-180m-kg-64400', 'filter' => 'rope-net-twine'],
    ['slug' => 'd-tech-24-12x1-331g-m-r321dy600grc', 'filter' => 'rope-net-twine'],
];

$home_popular_products = array_values(array_filter(array_map(function ($spec) {
    $product = site_product_by_slug($spec['slug']);
    if (!$product) {
        return null;
    }

    return [
        'filter' => $spec['filter'],
        'featured' => !empty($spec['featured']),
        'product' => $product,
    ];
}, $home_popular_product_specs)));

$home_upcoming_courses = [
    ['label' => 'Overhead Cranes', 'url' => 'https://www.herculeslifting.com/pages/fundamentals-of-overhead-cranes'],
    ['label' => 'Fall Protection', 'url' => 'https://www.herculeslifting.com/pages/fall-protection-training'],
    ['label' => 'Fundamentals of Rigging', 'url' => 'https://www.herculeslifting.com/pages/fundamentals-of-rigging-with-practical'],
    ['label' => 'Forklift Operator', 'url' => 'https://www.herculeslifting.com/pages/forklift-operator-training'],
    ['label' => 'Telehandler Operator', 'url' => 'https://www.herculeslifting.com/pages/telehandler-operator-training'],
    ['label' => 'Rigger, Slinger, and Banksman', 'url' => 'https://www.herculeslifting.com/pages/rigger-training'],
];

?>

    <!-- ======================================================= -->
    <!-- ===================== MAIN HERO SECTION ================ -->
    <!-- ======================================================= -->
    <section class="relative h-[700px] md:h-[800px] w-full overflow-hidden bg-spartan-navy">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="assets/images/hero-upscale.jpg" alt="Commercial marine gear built for harsh weather" class="w-full h-full object-cover object-top">
            <div class="absolute inset-0 bg-gradient-to-r from-spartan-navy/85 from-[30%] via-spartan-navy/55 via-[48%] to-transparent to-[70%]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy via-transparent to-transparent opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center pb-20 md:pb-28">
            <div class="max-w-2xl text-white space-y-6">
                <div class="flex items-center space-x-2.5">
                    <span class="h-px w-8 bg-spartan-teal"></span>
                    <span class="font-oswald text-[10px] md:text-xs font-bold text-spartan-teal tracking-[0.3em] uppercase">Commercial Marine Supplies & Services</span>
                </div>

                <h1 class="font-oswald text-3xl sm:text-4xl md:text-5xl lg:text-[58px] font-bold uppercase tracking-wider leading-[1.08] text-white select-text">
                    Gear Up For<br><span class="text-spartan-teal">What’s Next.</span>
                </h1>

                <p class="font-sans text-base md:text-lg text-slate-300 leading-relaxed max-w-xl font-light select-text">
                    Shop commercial-grade marine supplies, foul weather gear, fishing equipment and Spartan-exclusive products online. Built for the Atlantic. Backed by expert service.
                </p>

                <div class="flex flex-wrap gap-4 pt-2">
                    <a href="#products-section" class="bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center justify-between rounded-none border border-spartan-teal hover:bg-spartan-teal-light hover:border-spartan-teal-light hover:text-spartan-navy transition-all duration-300 uppercase">
                        <span>Shop Products</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </a>

                    <a href="#services-section" class="border border-white/60 hover:border-white bg-transparent text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center justify-between rounded-none hover:bg-white/10 transition-all duration-300 uppercase">
                        <span>Book a Service</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5 text-slate-300"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Wave Mask Divider -->
        <div class="absolute bottom-0 inset-x-0 z-10 overflow-hidden leading-[0] pointer-events-none">
            <svg viewBox="0 0 176.23 11.78" preserveAspectRatio="none" class="relative block w-full h-12 md:h-20 text-white fill-current">
                <path d="M175.37,11.19S152.97,0,121.72,0c-26.26,0-36.05,6.77-71.07,6.77C25.36,6.77,6.95,2.88,1.14,1.46c-.55-.13-.99-.18-1.14-.14l.04,10.46h176.19l-.86-.59Z"></path>
            </svg>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ==================== TOP PRODUCTS ===================== -->
    <!-- ======================================================= -->
    <section id="products-section" class="bg-white pt-7 md:pt-9 pb-12 md:pb-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-8">
                <div class="max-w-2xl">
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.28em] uppercase block mb-4">Top Products</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">Gear up. Get to work.</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">Shop essential workwear, gloves, rope, and fishing gear selected for Atlantic crews.</p>
                </div>

                <div class="flex flex-wrap items-center gap-3">
                    <a href="products.php" class="inline-flex w-fit items-center bg-spartan-teal text-white py-3.5 px-6 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy transition-colors">
                        <span>Shop All Products</span>
                        <i class="fa-solid fa-arrow-right text-[10px] ml-2" aria-hidden="true"></i>
                    </a>
                    <div class="flex gap-2">
                        <button onclick="scrollCarousel('top-products-carousel', -1)" class="w-10 h-10 border border-slate-300 bg-white text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Previous top products">
                            <i class="fa-solid fa-arrow-left text-xs" aria-hidden="true"></i>
                        </button>
                        <button onclick="scrollCarousel('top-products-carousel', 1)" class="w-10 h-10 border border-slate-300 bg-white text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Next top products">
                            <i class="fa-solid fa-arrow-right text-xs" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div id="top-products-carousel" class="flex items-stretch overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-4 pb-1">
                        <?php foreach ($home_top_products as $home_top_product): ?>
                        <?php
                        $home_top_name = html_entity_decode(strip_tags($home_top_product['name']), ENT_QUOTES, 'UTF-8');
                        $home_top_url = site_product_url($home_top_product);
                        $home_top_has_price = isset($home_top_product['price']) && is_numeric($home_top_product['price']);
                        $home_top_price = $home_top_has_price ? (float) $home_top_product['price'] : null;
                        $home_top_has_variants = count($home_top_product['variants'] ?? []) > 1;
                        $home_top_js_name = str_replace(["'", '&Prime;'], ["\\'", ' in'], $home_top_product['name']);
                        $home_top_js_image = str_replace("'", "\\'", $home_top_product['image']);
                        ?>
                        <article class="group w-[82vw] max-w-[290px] sm:w-[calc((100%_-_1rem)/2)] sm:max-w-none lg:w-[calc((100%_-_3rem)/4)] shrink-0 snap-start bg-white border border-slate-200 p-3 flex flex-col">
                            <a href="<?php echo site_escape($home_top_url); ?>" class="relative h-36 bg-white overflow-hidden flex items-center justify-center mb-4 <?php echo !empty($home_top_product['contain']) ? 'p-3' : ''; ?>" aria-label="View <?php echo site_escape($home_top_name); ?>">
                                <img src="<?php echo site_escape($home_top_product['image']); ?>" alt="<?php echo site_escape($home_top_name); ?>" class="<?php echo !empty($home_top_product['contain']) ? 'h-full w-auto object-contain' : 'h-full w-full object-cover'; ?> group-hover:scale-105 transition-transform duration-500">
                                <?php if (!empty($home_top_product['badge'])): ?>
                                <span class="absolute top-2 left-2 bg-spartan-navy text-white text-[7px] px-2 py-1 font-mono font-bold tracking-wider uppercase"><?php echo site_escape($home_top_product['badge']); ?></span>
                                <?php endif; ?>
                            </a>
                            <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase leading-tight min-h-[42px] mb-3">
                                <a href="<?php echo site_escape($home_top_url); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($home_top_name); ?></a>
                            </h3>
                            <div class="mt-auto pt-3">
                                <div class="min-h-[26px] mb-3">
                                    <?php if ($home_top_has_price): ?>
                                    <span class="text-sm font-bold text-slate-800">$<?php echo number_format($home_top_price, 2); ?><span class="text-[9px] text-slate-400 font-normal"><?php echo site_escape($home_top_product['price_suffix'] ?? ''); ?> CAD</span></span>
                                    <?php else: ?>
                                    <span class="text-[10px] font-bold text-slate-600 tracking-[0.12em] uppercase">Request Quote</span>
                                    <?php endif; ?>
                                </div>
                                <?php if ($home_top_has_variants): ?>
                                <a href="<?php echo site_escape($home_top_url); ?>" class="block w-full text-center bg-spartan-navy text-white py-2.5 px-3 text-[9px] font-bold tracking-[0.16em] uppercase hover:bg-spartan-teal transition-colors">View Options</a>
                                <?php elseif ($home_top_has_price): ?>
                                <button onclick="addToCart('<?php echo $home_top_js_name; ?>', <?php echo number_format($home_top_price, 2, '.', ''); ?>, '<?php echo $home_top_js_image; ?>')" class="w-full bg-spartan-teal text-white py-2.5 px-3 text-[9px] font-bold tracking-[0.16em] uppercase hover:bg-spartan-navy transition-colors">Add to Order</button>
                                <?php else: ?>
                                <a href="contact.php?product=<?php echo rawurlencode($home_top_name); ?>" class="block w-full text-center bg-spartan-teal text-white py-2.5 px-3 text-[9px] font-bold tracking-[0.16em] uppercase hover:bg-spartan-navy transition-colors">Request Quote</a>
                                <?php endif; ?>
                            </div>
                        </article>
                        <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ============ SHOP BY DEPARTMENT (CAROUSEL) ============ -->
    <!-- ======================================================= -->
    <section id="categories-section" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title and carousel controls -->
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between select-text">
            <div>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">SHOP BY DEPARTMENT</h2>
            </div>
            <div class="mt-6 md:mt-0 flex items-center space-x-3">
                <button onclick="scrollCarousel('dept-carousel', -1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Previous departments">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </button>
                <button onclick="scrollCarousel('dept-carousel', 1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Next departments">
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Horizontal snap carousel of tall department cards -->
        <div id="dept-carousel" class="flex items-stretch overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-6 -mx-1 px-1">
            <?php foreach ($home_department_cards as $department_card): ?>
            <a href="<?php echo site_escape($department_card['url']); ?>" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="<?php echo site_escape($department_card['image']); ?>" alt="<?php echo site_escape($department_card['alt']); ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5"><?php echo site_escape($department_card['title']); ?></h3>
                    <p class="text-sm text-slate-300 font-light mb-5"><?php echo site_escape($department_card['text']); ?></p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span><?php echo site_escape($department_card['cta']); ?></span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ======================================================= -->
    <!-- ================== POPULAR PRODUCTS =================== -->
    <!-- ======================================================= -->
    <section id="popular-products-section" class="bg-white py-16 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-8 select-text">
                <div>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">Popular Products</h2>
                </div>
                <a href="products.php" class="inline-flex w-fit items-center bg-spartan-navy text-white py-3 px-5 text-[10px] font-bold tracking-[0.18em] uppercase hover:bg-spartan-teal transition-colors">
                    <span>View All Products</span>
                    <i class="fa-solid fa-arrow-right text-[9px] ml-2" aria-hidden="true"></i>
                </a>
            </div>

            <div class="flex flex-wrap gap-2 mb-10" aria-label="Filter popular products">
                <?php foreach ([
                    'all' => 'All',
                    'foul-weather' => 'Foul Weather',
                    'gloves' => 'Gloves',
                    'boots' => 'Boots',
                    'trap-supplies' => 'Trap Supplies',
                    'rope-net-twine' => 'Rope, Net & Twine',
                ] as $popular_filter => $popular_label): ?>
                <button
                    type="button"
                    data-home-popular-filter="<?php echo site_escape($popular_filter); ?>"
                    aria-pressed="<?php echo $popular_filter === 'all' ? 'true' : 'false'; ?>"
                    onclick="filterHomePopularProducts('<?php echo site_escape($popular_filter); ?>', this)"
                    class="home-popular-filter border px-4 py-2 text-[9px] font-bold tracking-[0.16em] uppercase transition-colors <?php echo $popular_filter === 'all' ? 'bg-spartan-navy border-spartan-navy text-white' : 'bg-white border-slate-300 text-slate-600 hover:border-spartan-teal hover:text-spartan-navy'; ?>"
                ><?php echo site_escape($popular_label); ?></button>
                <?php endforeach; ?>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10 select-text" aria-live="polite">
                <?php foreach ($home_popular_products as $popular_item): ?>
                <div
                    class="home-popular-product<?php echo empty($popular_item['featured']) ? ' hidden' : ''; ?>"
                    data-home-popular-group="<?php echo site_escape($popular_item['filter']); ?>"
                    data-home-popular-featured="<?php echo !empty($popular_item['featured']) ? 'true' : 'false'; ?>"
                >
                    <?php $product = $popular_item['product']; ?>
                    <?php include __DIR__ . '/components/product-card.php'; ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        function filterHomePopularProducts(filter, trigger) {
            const section = document.getElementById('popular-products-section');
            if (!section) return;

            section.querySelectorAll('.home-popular-product').forEach((item) => {
                const visible = filter === 'all'
                    ? item.dataset.homePopularFeatured === 'true'
                    : item.dataset.homePopularGroup === filter;
                item.classList.toggle('hidden', !visible);
            });

            section.querySelectorAll('.home-popular-filter').forEach((button) => {
                const active = button === trigger;
                button.setAttribute('aria-pressed', active ? 'true' : 'false');
                button.classList.toggle('bg-spartan-navy', active);
                button.classList.toggle('border-spartan-navy', active);
                button.classList.toggle('text-white', active);
                button.classList.toggle('bg-white', !active);
                button.classList.toggle('border-slate-300', !active);
                button.classList.toggle('text-slate-600', !active);
                button.classList.toggle('hover:text-white', active);
                button.classList.toggle('hover:border-spartan-navy', active);
                button.classList.toggle('hover:text-spartan-navy', !active);
                button.classList.toggle('hover:border-spartan-teal', !active);
            });
        }
    </script>

    <!-- ======================================================= -->
    <!-- ==================== BRANDS BAND ====================== -->
    <!-- ======================================================= -->
    <section id="brands-section" class="pb-16 md:pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex items-center justify-between gap-6 mb-6">
                <h2 class="font-oswald text-xl md:text-2xl font-bold tracking-[0.14em] uppercase text-spartan-navy">Featured Brands</h2>
                <a href="brands.php" class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal uppercase hover:text-spartan-navy transition-colors">
                    <span>View All Brands</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-2" aria-hidden="true"></i>
                </a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-5 sm:gap-6 lg:gap-8">
                <?php foreach ([
                    [
                        'label' => 'Cotesi',
                        'brand' => 'Cotesi',
                        'logo' => 'assets/images/service-brands/cotesi1.svg',
                    ],
                    [
                        'label' => 'Polyform',
                        'brand' => 'POLYFORM',
                        'logo' => 'assets/images/service-brands/polyform.jpg',
                    ],
                    [
                        'label' => 'Mustang Survival',
                        'brand' => 'MUSTANG SURVIVAL',
                        'logo' => 'assets/images/service-brands/mustang-survival.svg',
                    ],
                    [
                        'label' => 'Badinotti',
                        'brand' => 'BADINOTTI NET SERVICE CANADA',
                        'logo' => 'assets/images/service-brands/badinotti-net-service-canada.svg',
                    ],
                    [
                        'label' => 'Grundéns',
                        'brand' => 'GRUNDÉNS',
                        'logo' => 'assets/images/service-brands/grundens.png',
                    ],
                    [
                        'label' => 'Helly Hansen',
                        'brand' => 'HELLY HANSEN',
                        'logo' => 'assets/images/service-brands/helly-hansen.png',
                    ],
                    [
                        'label' => 'Dexter Russell',
                        'brand' => 'DEXTER RUSSELL INC',
                        'logo' => 'assets/images/service-brands/dexter-russell-inc.jpg',
                    ],
                    [
                        'label' => 'Showa',
                        'brand' => 'SHOWA',
                        'logo' => 'assets/images/service-brands/showa.jpg',
                    ],
                ] as $home_brand): ?>
                <?php $home_brand_slug = site_brand_slug($home_brand['brand']); ?>
                <a
                    href="<?php echo site_escape(site_brand_url($home_brand_slug)); ?>"
                    class="group bg-white min-h-[112px] flex items-center justify-center px-5 py-5 hover:bg-spartan-light-gray transition-colors"
                    aria-label="Shop <?php echo site_escape($home_brand['label']); ?> products"
                >
                    <img
                        src="<?php echo site_escape($home_brand['logo']); ?>"
                        alt="<?php echo site_escape($home_brand['label']); ?>"
                        class="max-h-14 max-w-full w-auto object-contain mix-blend-multiply transition-transform duration-300 group-hover:scale-105"
                        loading="lazy"
                    >
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ====================== AISLES ========================= -->
    <!-- 3-column: image aisle / image aisle / list aisle        -->
    <!-- ======================================================= -->
    <section id="services-section" class="pb-16 md:pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10 select-text">
            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">Services</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Aisle 1: Rental Equipment -->
            <a href="rental-equipment.php" class="relative group h-[570px] lg:h-[600px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/spartan-warehouse-fulfillment.webp" alt="Marine safety equipment available for rent" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]" style="object-position: 15% center;">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8 md:p-10">
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-[1.12] mb-4">Marine Safety<br>Equipment Rentals</h3>
                    <p class="text-sm text-slate-300 font-light leading-relaxed mb-7 max-w-[330px]">Fill the gaps in your fleet without the cost of buying new. Rent fully maintained, certified equipment by the day, week, month, or year.</p>
                    <span class="inline-flex items-center justify-center bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        View Rental Equipment
                    </span>
                </div>
            </a>

            <!-- Aisle 2: Safety and Training -->
            <a href="training-courses.php" class="relative group h-[570px] lg:h-[600px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/home-safety-training-worker.webp" alt="Safety professional wearing fall-arrest equipment in a shipyard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]" style="object-position: 38% center;">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8 md:p-10">
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-[1.12] mb-4">Safety, Rigging &amp;<br>Equipment Training</h3>
                    <p class="text-sm text-slate-300 font-light leading-relaxed mb-7 max-w-[330px]">Spartan customers can access the same LEEA accredited and industry-recognized training programs delivered through Hercules Training Academy.</p>
                    <span class="inline-flex items-center justify-center bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        View Training Courses
                    </span>
                </div>
            </a>

            <!-- Aisle 3: Upcoming Courses -->
            <div class="relative h-[570px] lg:h-[600px] bg-spartan-navy p-8 md:p-10 flex flex-col justify-between overflow-hidden">
                <div class="absolute -right-12 -bottom-6 w-[380px] h-24 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                <div class="relative z-10">
                    <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-5">Upcoming Courses</h3>
                    <ul class="text-sm text-slate-300 font-medium leading-relaxed">
                        <?php foreach ($home_upcoming_courses as $course_index => $course): ?>
                        <li class="<?php echo $course_index < count($home_upcoming_courses) - 1 ? 'border-b border-slate-800' : ''; ?> py-4 flex items-center justify-between hover:text-white transition-colors">
                            <a href="<?php echo site_escape($course['url']); ?>" <?php echo empty($course['internal']) ? 'target="_blank" rel="noopener"' : ''; ?> class="flex-grow"><?php echo site_escape($course['label']); ?></a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="training-courses.php" class="relative z-10 inline-flex items-center justify-center bg-spartan-teal text-white py-3.5 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-white hover:text-spartan-navy transition-colors">
                    <span>Browse Courses</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-2" aria-hidden="true"></i>
                </a>
            </div>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================= REVIEWS & STATS BAR ================= -->
    <!-- ======================================================= -->
    <section id="industries-section" class="bg-spartan-navy text-white py-10 md:py-12 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 lg:grid-cols-[1.35fr_repeat(3,minmax(0,1fr))] gap-7 lg:gap-12 items-center select-text">
                <div class="col-span-2 lg:col-span-1 flex items-center gap-4">
                    <img src="assets/images/google-g.svg" alt="Google" class="w-8 h-8 shrink-0 object-contain">
                    <div>
                        <div class="flex items-center gap-2 mb-1">
                            <span class="font-oswald text-lg font-bold leading-none">4.5</span>
                            <span class="flex items-center gap-0.5 text-[#F4B400] text-[10px]" aria-label="4.5 out of 5 stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </span>
                        </div>
                        <span class="font-oswald text-[10px] font-bold tracking-[0.12em] uppercase text-slate-400">Customer Reviews</span>
                    </div>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">45+</span>
                    <span class="text-[10px] text-slate-400 font-light tracking-wide mt-2 block">Years serving Atlantic Canadian fleets</span>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">6</span>
                    <span class="text-[10px] text-slate-400 font-light tracking-wide mt-2 block">Active locations across Atlantic Canada</span>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">1,200+</span>
                    <span class="text-[10px] text-slate-400 font-light tracking-wide mt-2 block">Vessels serviced and outfitted every year</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================== CUSTOMER REVIEWS =================== -->
    <!-- ======================================================= -->
    <section id="reviews-section" class="py-20 md:py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-16">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">TESTIMONIALS</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">TRUSTED BY ATLANTIC MARINERS</h2>
                <p class="text-sm text-slate-500 font-light mt-3 max-w-lg mx-auto">
                    Real crews and fleet operators rely on Spartan for responsive service, stocked branches, and practical support when conditions are working against them.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-white">
                    <div class="space-y-4">
                        <div class="h-10 w-10 bg-spartan-light-gray text-spartan-teal flex items-center justify-center">
                            <i class="fa-solid fa-quote-left text-sm"></i>
                        </div>
                        <p class="text-slate-700 font-light leading-relaxed text-sm">
                            "Owning four boats in the commercial fishery industry, I appreciate the knowledge and dedication the staff put into supplying me with the products and services I require whenever I may require them."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">HERB NASH</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">Crab/Lobster Fisherman, Glace Bay, NS</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> SPARTAN SYDNEY
                        </span>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-white">
                    <div class="space-y-4">
                        <div class="h-10 w-10 bg-spartan-light-gray text-spartan-teal flex items-center justify-center">
                            <i class="fa-solid fa-quote-left text-sm"></i>
                        </div>
                        <p class="text-slate-700 font-light leading-relaxed text-sm">
                            "Spartan has always taken a personal approach to looking after our vessels in any port they have been working out of. Spartan's ability to supply our requirements has always been a big part of our long term relationship."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">MARK GOUDREAU</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">Procurement Specialist, Atlantic Towing Ltd, Dartmouth, NS</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> SPARTAN DARTMOUTH
                        </span>
                    </div>
                </div>

                <!-- Trust Card -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-spartan-navy text-white">
                    <div class="space-y-4">
                        <div class="h-10 w-10 bg-white/10 text-spartan-teal flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-sm"></i>
                        </div>
                        <p class="text-slate-300 font-light leading-relaxed text-sm">
                            Six active locations across Atlantic Canada keep Spartan close to working ports, stocked for commercial buyers, and ready to route service requests to the right local team.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-white/10">
                        <h4 class="font-oswald text-sm font-bold text-white tracking-wider uppercase">LOCAL SUPPORT NETWORK</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">Products, service, and compliance help</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> ATLANTIC CANADA
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ==================== LOGBOOK BAND ===================== -->
    <!-- ======================================================= -->
    <section id="articles-section" class="py-20 md:py-24 bg-slate-50 border-t border-slate-200/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">LOGBOOK & RESOURCES</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">NEWS & TECHNICAL ARTICLES</h2>
                </div>
                <div class="mt-6 md:mt-0">
                    <a href="blog.php" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                        <span>View All Articles</span>
                        <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach (array_slice($site_posts, 0, 3) as $home_post): ?>
                <a href="<?php echo site_escape(site_post_url($home_post)); ?>" class="group flex flex-col justify-between bg-white border border-slate-200/65 overflow-hidden transition-all duration-300 hover:bg-slate-50/50">
                    <div>
                        <div class="h-48 w-full overflow-hidden bg-spartan-navy relative">
                            <img src="<?php echo site_escape($home_post['image']); ?>" alt="<?php echo site_escape($home_post['title']); ?>" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-8 space-y-3">
                            <div class="flex items-center justify-between text-[9px] font-mono tracking-wider text-slate-400">
                                <span><?php echo site_escape($home_post['category']); ?></span>
                                <span><?php echo site_escape($home_post['date']); ?></span>
                            </div>
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy uppercase tracking-wider group-hover:text-spartan-teal transition-colors leading-snug">
                                <?php echo site_escape($home_post['title']); ?>
                            </h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">
                                <?php echo site_escape($home_post['excerpt']); ?>
                            </p>
                        </div>
                    </div>
                    <div class="px-8 pb-8 pt-2">
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal group-hover:text-spartan-navy transition-colors tracking-widest uppercase">
                            <span>READ ARTICLE</span>
                            <i class="fa-solid fa-arrow-right text-[8px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================ SERVICE CTA BAND ===================== -->
    <!-- ======================================================= -->
    <section class="bg-spartan-teal text-white py-16 overflow-hidden relative">
        <div class="absolute -right-10 bottom-0 h-32 w-[480px] bg-white opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8 select-text">
            <div class="max-w-2xl">
                <span class="font-oswald text-[10px] font-bold tracking-[0.3em] uppercase text-white/80 block mb-3">CERTIFICATION SEASON</span>
                <h2 class="font-oswald text-2xl md:text-4xl font-bold tracking-widest uppercase leading-tight mb-4">
                    Don't wait for survey week.
                </h2>
                <p class="text-sm text-white/90 font-light leading-relaxed max-w-xl">
            Book liferaft servicing, immersion suit inspections, compliance inspections, and custom rigging before the next vessel deadline is already on deck.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 shrink-0">
                <a href="inspection-services.php" class="bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center rounded-none border border-spartan-navy hover:bg-spartan-charcoal transition-all duration-300 uppercase">
                    <span>Book a Service</span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
                <a href="<?php echo site_escape($site['phone_href']); ?>" class="border border-white/70 hover:border-white bg-transparent text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center rounded-none hover:bg-white/10 transition-all duration-300 uppercase">
                    <i class="fa-solid fa-phone text-[11px] mr-2.5"></i>
                    <span><?php echo site_escape($site['phone']); ?></span>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ======================= FAQ SECTION ==================== -->
    <!-- ======================================================= -->
    <section id="faq-section" class="py-20 md:py-24 bg-spartan-light-gray border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-16">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">KNOWLEDGE BASE</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">FREQUENTLY ASKED QUESTIONS</h2>
                <p class="text-sm text-slate-500 font-light mt-3 max-w-lg mx-auto">
                    Answers for crews, buyers, and fleet managers sourcing marine gear or service support across Atlantic Canada.
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">How often do SOLAS life rafts require certified servicing?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Under Transport Canada regulations, SOLAS-certified life rafts used on commercial vessels must undergo inspection and repacking annually (every 12 months) at an approved service station. Recreational rafts and non-SOLAS commercial rafts may follow a 2-year or 3-year cycle depending on the manufacturer's specification. We provide full Transport Canada certification with detailed inspection logs for every raft serviced.
                    </div>
                </details>

                <!-- FAQ Item 2 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">What is the typical turnaround time for custom rigging wire pressing?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Standard rigging assemblies (wire swaging, wire pressing up to 1-inch diameter, rope splicing) are completed within 3 to 5 business days. During peak season (April through June), lead times may extend to 7 to 10 days. Emergency rigging support is available for commercial vessels with active gear failures to minimize dock time. Proof-testing up to 100t is performed in-house, and compliance certs are provided immediately.
                    </div>
                </details>

                <!-- FAQ Item 3 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Can we set up a fleet compliance audit for our vessels?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Spartan can review marine safety equipment and inspection records against applicable Transport Canada, manufacturer, and industry requirements. Contact the Dartmouth service center to discuss the equipment and documentation involved.
                    </div>
                </details>

                <!-- FAQ Item 4 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Do you offer commercial credit accounts for commercial fishing & industrial buyers?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Yes, we offer net-30 commercial credit accounts for registered businesses, vessel owners, aquaculture operators, and industrial enterprises. Commercial account holders benefit from volume-based price tiering, dedicated account managers, and automatic compliance notifications for expiring safety equipment. Credit application forms are available at any branch or can be requested via email.
                    </div>
                </details>

                <!-- FAQ Item 5 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Are you capable of programming EPIRBs and PLBs in-house?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Yes, our Dartmouth HQ is fully equipped to program, test, and recertify Cospas-Sarsat EPIRBs (Emergency Position Indicating Radio Beacons) and PLBs (Personal Locator Beacons). We program country-specific MMSI protocols, perform battery replacements, verify GPS signals, and register the beacon data directly with the Canadian Beacon Registry.
                    </div>
                </details>

                <!-- FAQ Item 6 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Where are your branches located, and do you offer dockside delivery to Atlantic ports?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Our head office and a service center are located at 120 Thornhill Drive in Dartmouth, NS. Spartan also operates locations in Sydney, Yarmouth, Caraquet, Charlottetown, and Paradise. Contact the nearest team for product availability, pickup, and service-intake information.
                    </div>
                </details>

                <!-- FAQ Item 7 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Can we purchase bulk commercial supplies, deck hardware, and fleet consumables online?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Yes. Our e-commerce platform is custom-built for commercial fishing, aquaculture, and industrial procurement. Registered corporate accounts can log in directly to buy commercial deck hardware, zinc anodes, institutional safety kits, and heavy rigging supplies in bulk. Custom volume-based price tiering can apply automatically at checkout for eligible accounts.
                    </div>
                </details>

                <!-- FAQ Item 8 -->
                <details class="group bg-white border border-slate-200/60 p-6 transition-all duration-300 [&_summary::-webkit-details-marker]:hidden open:border-spartan-teal/30">
                    <summary class="flex items-center justify-between cursor-pointer focus:outline-none">
                        <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase">Do you stock complete safety and emergency rescue kits for commercial fleet compliance?</h3>
                        <span class="relative h-5 w-5 shrink-0">
                            <i class="fa-solid fa-plus absolute inset-0 text-slate-400 group-open:opacity-0 transition-opacity duration-300"></i>
                            <i class="fa-solid fa-minus absolute inset-0 text-spartan-teal opacity-0 group-open:opacity-100 transition-opacity duration-300"></i>
                        </span>
                    </summary>
                    <div class="mt-4 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-4">
                        Yes. We supply fully integrated, commercial-grade emergency rescue and safety packages tailored to Transport Canada and SOLAS regulations. Required safety equipment varies based on location and vessel type, but inventory can include visual distress signals, heavy-duty sound signaling devices, fixed or handheld VHF marine radios, compliance checklists, and vessel outfitting logs.
                    </div>
                </details>
            </div>

            <div class="mt-12 text-center">
                <a href="contact.php" class="inline-flex items-center justify-center bg-spartan-teal text-white py-4 px-8 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy transition-colors">
                    <span>Contact Spartan</span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================== BRAND STATEMENT ==================== -->
    <!-- ======================================================= -->
    <section class="bg-spartan-navy text-white py-16 overflow-hidden relative border-t border-slate-800">
        <div class="absolute inset-0 flex items-center justify-center opacity-[0.03] pointer-events-none" aria-hidden="true">
            <div class="w-full h-80 bg-white" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;"></div>
        </div>

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 select-text">
            <h2 class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.3em] uppercase mb-4">READY WHEN CONDITIONS TURN</h2>
            <p class="font-oswald text-2xl md:text-3xl font-bold tracking-widest uppercase leading-snug max-w-3xl mx-auto">
                More than marine supplies: Spartan keeps commercial, industrial, and offshore operations equipped, compliant, and ready for the job.
            </p>
        </div>
    </section>


<?php require_once __DIR__ . '/partials/footer.php'; ?>
