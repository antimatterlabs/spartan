<?php
$page_title = 'Marine Supplies You Can Trust | Spartan Industrial Marine';
$meta_description = 'More than marine supplies. Explore trusted products and expert services for commercial, industrial, and military operations to stay ready for the job.';
$active_nav = 'home';
require_once __DIR__ . '/partials/header.php';

$home_department_cards = [
    [
        'title' => 'Marine Safety & Rescue',
        'text' => 'Immersion suits, PFDs, life rafts, flares, EPIRBs, and survival gear.',
        'cta' => 'Shop Safety',
        'url' => site_product_group_url('safety-buoys-survival'),
        'image' => 'assets/images/j9/marine-safety.webp',
        'alt' => 'Marine safety equipment',
    ],
    [
        'title' => 'Rope, Twine & Nets',
        'text' => 'Ropes, pot warp, twine, nets, net needles, leadlines, and shock cord.',
        'cta' => 'Shop Rope',
        'url' => site_product_group_url('rope-line-nets'),
        'image' => 'assets/images/j9/department-rope-rigging.webp',
        'alt' => 'Rope and netting department',
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
        'title' => 'Commercial Fishing Gear',
        'text' => 'Knives, gangion, trap components, lobster bands, bait jars, and fish boxes.',
        'cta' => 'Shop Fishing Gear',
        'url' => site_product_group_url('fishing-trap-gear'),
        'image' => 'assets/images/j9/department-commercial-fishing.webp',
        'alt' => 'Commercial fishing gear and supplies',
    ],
    [
        'title' => 'Buoys & Floats',
        'text' => 'Trap buoys, working-water floats, markers, and high-visibility gear.',
        'cta' => 'Shop Buoys',
        'url' => site_product_category_url('Buoys'),
        'image' => 'assets/images/j9/other-buoys-floats.webp',
        'alt' => 'Buoys and floats',
    ],
    [
        'title' => 'Workwear & Footwear',
        'text' => 'Rain gear, bibs, gloves, boots, base layers, hoodies, and deckwear.',
        'cta' => 'Shop Workwear',
        'url' => site_product_group_url('workwear-footwear'),
        'image' => 'assets/images/j9/department-workwear.webp',
        'alt' => 'Commercial marine workwear',
    ],
    [
        'title' => 'Maintenance & Supplies',
        'text' => 'Marine paint, cleaners, lubricants, brushes, fasteners, and shop supplies.',
        'cta' => 'Shop Supplies',
        'url' => site_product_group_url('maintenance-supplies'),
        'image' => 'assets/images/j9/spartan-store-interior.webp',
        'alt' => 'Marine maintenance supplies in store',
    ],
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
                    A Trusted Partner<br>For Harsh Offshore<br>Conditions
                </h1>

                <p class="font-sans text-base md:text-lg text-slate-300 leading-relaxed max-w-xl font-light select-text">
                    Equip your vessel with industry-leading supplies and clothing, or schedule rapid Transport Canada inspections, liferaft servicing, and custom rigging, all in one place.
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
    <!-- ================= BRAND PILLARS STRIP ================= -->
    <!-- ======================================================= -->
    <section class="relative z-20 -mt-16 md:-mt-28 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 select-text">
            <!-- Pathway 1: Marine Safety -->
            <a href="<?php echo site_escape(site_product_group_url('safety-buoys-survival')); ?>" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-life-ring text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Shop Marine Safety</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">PFDs, immersion suits, life rafts, emergency signals, and safety gear for working vessels.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>SHOP SAFETY</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pathway 2: Workwear -->
            <a href="<?php echo site_escape(site_product_group_url('workwear-footwear')); ?>" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-shirt text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Shop Workwear & Gear</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Foul weather jackets, bibs, boots, gloves, base layers, and crew-ready marine workwear.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>SHOP WORKWEAR</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pathway 3: Certified Service -->
            <a href="services.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-screwdriver-wrench text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Request Certified Service</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Book inspections, liferaft service, immersion suit testing, pull testing, or custom rigging support.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>BOOK SERVICE</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pathway 4: Fleet Supply -->
            <a href="contact.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-warehouse text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Commercial & Fleet Supply</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Get account support for recurring supplies, branch pickup, fleet consumables, and vessel outfitting.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>TALK TO SPARTAN</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>
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
    <!-- ================= FEATURED PRODUCTS =================== -->
    <!-- ======================================================= -->
    <section id="products-section" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-slate-100">
        <div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-6 select-text">
            <div class="max-w-2xl">
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">POPULAR PRODUCTS</h2>
            </div>
            <a href="products.php" class="inline-flex items-center justify-center bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal transition-colors">
                <span>View All Products</span>
                <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
            </a>
        </div>
        <div class="mb-10 flex flex-col lg:flex-row lg:items-center justify-between gap-5 select-text">
            <div class="flex flex-wrap gap-2 text-[10px] font-bold tracking-widest uppercase">
                <button onclick="filterProducts('all')" class="bg-spartan-navy text-white border border-spartan-navy px-4 py-2 ring-2 ring-spartan-teal ring-offset-2 ring-offset-white shadow-sm transition-colors" id="tab-all">ALL</button>
                <button onclick="filterProducts('safety')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 hover:border-spartan-teal hover:text-spartan-navy transition-colors" id="tab-safety">Marine Safety</button>
                <button onclick="filterProducts('rope')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 hover:border-spartan-teal hover:text-spartan-navy transition-colors" id="tab-rope">Rope & Rigging</button>
                <button onclick="filterProducts('fishing')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 hover:border-spartan-teal hover:text-spartan-navy transition-colors" id="tab-fishing">Fishing Gear</button>
                <button onclick="filterProducts('workwear')" class="bg-white border border-slate-200 text-slate-700 px-4 py-2 hover:border-spartan-teal hover:text-spartan-navy transition-colors" id="tab-workwear">Workwear</button>
            </div>
                <div class="flex items-center space-x-3">
                    <button onclick="scrollCarousel('featured-products-carousel', -1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Previous featured products">
                        <i class="fa-solid fa-arrow-left text-sm"></i>
                    </button>
                    <button onclick="scrollCarousel('featured-products-carousel', 1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Next featured products">
                        <i class="fa-solid fa-arrow-right text-sm"></i>
                    </button>
                </div>
        </div>

        <!-- Horizontal snap carousel of product cards -->
        <div id="featured-products-carousel" class="flex items-stretch overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-6 -mx-1 px-1">
            <!-- Product 1: Immersion Suit -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="safety">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/jacket.webp" alt="SOLAS immersion suit, universal adult" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=coastline-solas-immersion-suit" class="hover:text-spartan-teal transition-colors">COASTLINE SOLAS IMMERSION SUIT</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$689.00 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="w-full bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            QUICK ADD
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2: Pot Warp Rope -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="rope">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/marine-rigging.webp" alt="Sinking pot warp rope coil" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">BEST SELLER</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Sinking Pot Warp, 3/8 in x 1,200 ft Coil', 189.00, 'assets/images/j9/marine-rigging.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=sinking-pot-warp-38" class="hover:text-spartan-teal transition-colors">SINKING POT WARP 3/8″ × 1,200 FT</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$189.00 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <button onclick="addToCart('Sinking Pot Warp, 3/8 in x 1,200 ft Coil', 189.00, 'assets/images/j9/marine-rigging.webp')" class="w-full bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            QUICK ADD
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3: Spartan Deck Boots -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="workwear">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-4">
                    <img src="assets/images/j9/marine-footwear.webp" alt="Commercial deck boots" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">SIZES AVAILABLE</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="product-single.php?slug=fierce-frontier-boots" class="bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-list-check text-xs"></i>
                            <span>VIEW OPTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=fierce-frontier-boots" class="hover:text-spartan-teal transition-colors">FIERCE FRONTIER BOOTS</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-sm font-bold text-slate-700 uppercase tracking-[0.12em]">Request Quote</span>
                        </div>
                        <a href="product-single.php?slug=fierce-frontier-boots" class="block w-full text-center bg-spartan-navy text-white hover:bg-spartan-teal py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            VIEW OPTIONS
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 4: Float Jacket -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="safety">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/float-jacket.webp" alt="High-vis lobster float jacket" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">BEST SELLER</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="product-single.php?slug=stormwatch-float-jacket" class="bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-list-check text-xs"></i>
                            <span>VIEW OPTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=stormwatch-float-jacket" class="hover:text-spartan-teal transition-colors">HIGH-VIS LOBSTER FLOAT JACKET</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$249.00 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <a href="product-single.php?slug=stormwatch-float-jacket" class="block w-full text-center bg-spartan-navy text-white hover:bg-spartan-teal py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            VIEW OPTIONS
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 5: Lobster Trap Kit -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="fishing">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/commercial-fishing.webp" alt="Lobster trap hardware kit" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">SEASON STOCK</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Lobster Trap Kit, Vents, Rings & Bait Bags (25 Pack)', 74.50, 'assets/images/j9/commercial-fishing.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=lobster-trap-kit" class="hover:text-spartan-teal transition-colors">LOBSTER TRAP HARDWARE KIT</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$74.50 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <button onclick="addToCart('Lobster Trap Kit, Vents, Rings & Bait Bags (25 Pack)', 74.50, 'assets/images/j9/commercial-fishing.webp')" class="w-full bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            QUICK ADD
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6: Heavy Duty Bibs -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="workwear">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/spartan-workwear-woman.webp" alt="Commercial marine foul weather bibs" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">SIZES AVAILABLE</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="product-single.php?slug=noreaster-rain-bibs" class="bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-list-check text-xs"></i>
                            <span>VIEW OPTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=noreaster-rain-bibs" class="hover:text-spartan-teal transition-colors">COMMERCIAL PRO BIB PANTS</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$119.00 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <a href="product-single.php?slug=noreaster-rain-bibs" class="block w-full text-center bg-spartan-navy text-white hover:bg-spartan-teal py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            VIEW OPTIONS
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 7: Wire Rope -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="rope">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/marine-rigging.webp" alt="Galvanized wire rope on vessel rigging" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">CUT TO LENGTH</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="product-single.php?slug=galvanized-wire-rope-516" class="bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-list-check text-xs"></i>
                            <span>VIEW OPTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=galvanized-wire-rope-516" class="hover:text-spartan-teal transition-colors">GALVANIZED WIRE ROPE 5/16″</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$2.35<span class="text-[10px] text-slate-400 font-normal">/FT CAD</span></span>
                        </div>
                        <a href="product-single.php?slug=galvanized-wire-rope-516" class="block w-full text-center bg-spartan-navy text-white hover:bg-spartan-teal py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            VIEW OPTIONS
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 8: Trap Buoys -->
            <div class="flex flex-col space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2 w-[300px] shrink-0 snap-start select-text" data-category="fishing">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/other-buoys-floats.webp" alt="Trap buoys and deck floats" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">SEASON STOCK</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="product-single.php?slug=hi-vis-trap-buoy" class="bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-list-check text-xs"></i>
                            <span>VIEW OPTIONS</span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col flex-1 space-y-2">
                    <h3 class="font-oswald text-[18px] md:text-xl font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[64px]">
                        <a href="product-single.php?slug=hi-vis-trap-buoy" class="hover:text-spartan-teal transition-colors">HI-VIS TRAP BUOY 11″ × 18″</a>
                    </h3>
                    <div class="mt-auto border-t border-slate-100 pt-4 space-y-3">
                        <div class="flex flex-col items-start gap-2">
                            <span class="font-sans text-lg font-bold text-slate-800">$118.00 <span class="text-[10px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <a href="product-single.php?slug=hi-vis-trap-buoy" class="block w-full text-center bg-spartan-navy text-white hover:bg-spartan-teal py-3 px-3 text-[10px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            VIEW OPTIONS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ==================== BRANDS BAND ====================== -->
    <!-- ======================================================= -->
    <section id="brands-section" class="pb-16 md:pb-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-px bg-slate-200 border border-slate-200">
                <?php foreach ([
                    'COTESI' => 'Cotesi',
                    'POLYFORM' => 'POLYFORM',
                    'MUSTANG' => 'MUSTANG SURVIVAL',
                    'BADINOTTI' => 'BADINOTTI NET SERVICE CANADA',
                    'GRUNDÉNS' => 'GRUNDÉNS',
                    'HELLY HANSEN' => 'HELLY HANSEN',
                    'DEXTER RUSSELL' => 'DEXTER RUSSELL INC',
                    'SHOWA' => 'SHOWA',
                ] as $home_brand_label => $home_brand): ?>
                <a href="<?php echo site_escape(site_brand_url(site_brand_slug($home_brand))); ?>" class="group bg-white min-h-[88px] flex items-center justify-center px-4 hover:bg-spartan-navy transition-colors">
                    <span class="font-oswald text-[13px] md:text-sm font-bold tracking-[0.2em] uppercase text-spartan-navy text-center leading-snug group-hover:text-white transition-colors"><?php echo site_escape($home_brand_label); ?></span>
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
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Aisle 1: Image (Commercial Fishing) -->
            <a href="<?php echo site_escape(site_product_group_url('fishing-trap-gear')); ?>" class="relative group h-[540px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/spartan-warehouse-fulfillment.webp" alt="Warehouse fulfillment and seasonal fleet supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">SEASON PREP</span>
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Gear Up Before<br>The Season Opens</h3>
                    <p class="text-sm text-slate-300 font-light mb-6 max-w-[300px]">Stock commercial fishing gear, buoys, rope, gloves, and deck supplies before weather and demand tighten lead times.</p>
                    <span class="inline-flex bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        Shop Fishing Gear
                    </span>
                </div>
            </a>

            <!-- Aisle 2: Image (Marine Safety) -->
            <a href="contact.php" class="relative group h-[540px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/marine-safety.webp" alt="Marine safety equipment and service supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">MARINE SAFETY</span>
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Certified Kit For<br>Every Crew Member</h3>
                    <p class="text-sm text-slate-300 font-light mb-6 max-w-[300px]">Find PFDs, immersion suits, life rafts, distress signals, and emergency gear selected for commercial marine work.</p>
                    <span class="inline-flex bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        Explore Crew Outfitting
                    </span>
                </div>
            </a>

            <!-- Aisle 3: Services List -->
            <div class="relative h-[540px] bg-spartan-navy p-8 flex flex-col justify-between overflow-hidden">
                <div class="absolute -right-12 -bottom-6 w-[380px] h-24 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                <div class="relative z-10">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">SERVICE CENTRE</span>
                    <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-6">Certified In-House Servicing</h3>
                    <ul class="text-[15px] text-slate-300 font-medium">
                        <li class="border-b border-slate-800 py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Life Raft Inspection & Repack</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <li class="border-b border-slate-800 py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Immersion Suit Testing</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <li class="border-b border-slate-800 py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Splicing & Custom Rigging</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <li class="border-b border-slate-800 py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Certified Pull Testing</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <li class="border-b border-slate-800 py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Compliance Inspections</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <li class="py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Vessel & Fleet Outfitting</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                    </ul>
                </div>
                <a href="services.php" class="relative z-10 inline-flex items-center justify-center border border-spartan-teal text-spartan-teal py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                    Request Service
                </a>
            </div>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ============== WHO WE SERVE (AISLE STYLE) ============= -->
    <!-- ======================================================= -->
    <section id="industries-section" class="bg-spartan-navy text-white py-16 md:py-24 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-12 text-center select-text">
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest uppercase leading-tight">COMMERCIAL MARINE SUPPLY & SUPPORT</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Who-we-serve Aisle 1: On the water -->
                <div class="relative h-[440px] overflow-hidden bg-spartan-charcoal">
                    <div class="absolute inset-0">
                        <img src="assets/images/j9/commercial-fishing.webp" alt="Commercial fishing customers and gear" class="w-full h-full object-cover object-center brightness-[0.6]">
                        <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-8">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">ON THE WATER</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Fishing, Aquaculture & Offshore</h3>
                        <p class="text-xs text-slate-300 font-light max-w-[300px]">Commercial supplies, safety gear, workwear, and rigging support for crews working in cold, wet, high-pressure conditions.</p>
                    </div>
                </div>

                <!-- Who-we-serve Aisle 2: In the yard -->
                <div class="relative h-[440px] overflow-hidden bg-spartan-charcoal">
                    <div class="absolute inset-0">
                        <img src="assets/images/j9/department-industrial-shipyard.webp" alt="Shipyard and industrial marine supplies" class="w-full h-full object-cover object-center brightness-[0.6]">
                        <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-8">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">IN THE YARD</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Shipyards, Industrial & Government</h3>
                        <p class="text-xs text-slate-300 font-light max-w-[300px]">Procurement-ready safety equipment, custom assemblies, and fleet consumables for complex operational schedules.</p>
                    </div>
                </div>

                <!-- Who-we-serve Aisle 3: Sector list -->
                <div class="relative h-[440px] bg-spartan-navy-light/30 border border-slate-800 p-8 flex flex-col justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-4 w-[380px] h-24 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">EVERY SECTOR</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-6">Who We Supply</h3>
                        <ul class="text-[13px] text-slate-300 font-medium">
                            <li class="border-b border-slate-800 py-3">
                                <span>Commercial Fishing</span>
                            </li>
                            <li class="border-b border-slate-800 py-3">
                                <span>Aquaculture</span>
                            </li>
                            <li class="border-b border-slate-800 py-3">
                                <span>Shipyards & Industrial</span>
                            </li>
                            <li class="border-b border-slate-800 py-3">
                                <span>Offshore & Energy</span>
                            </li>
                            <li class="py-3">
                                <span>Government & Defence</span>
                            </li>
                        </ul>
                    </div>
                    <a href="contact.php" class="relative z-10 inline-flex items-center justify-center border border-spartan-teal text-spartan-teal py-3 px-6 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                        Request a Commercial Quote
                    </a>
                </div>

            </div>

            <!-- Stats row -->
            <div class="mt-14 grid grid-cols-2 lg:grid-cols-4 gap-8 select-text">
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">45+</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Years serving Atlantic Canadian fleets</span>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">7</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Active locations across Atlantic Canada</span>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">48 HR</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Typical life raft service turnaround</span>
                </div>
                <div>
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">1,200+</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Vessels serviced and outfitted every year</span>
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
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">MARK GOURDREAU</h4>
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
                            Seven active branches across Atlantic Canada keep Spartan close to working ports, stocked for commercial buyers, and ready to route service requests to the right local team.
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
                    Book liferaft servicing, immersion suit testing, compliance inspections, and custom rigging before the next vessel deadline is already on deck.
                </p>
            </div>
            <div class="flex flex-wrap gap-4 shrink-0">
                <a href="services.php" class="bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] flex items-center rounded-none border border-spartan-navy hover:bg-spartan-charcoal transition-all duration-300 uppercase">
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
                        Yes. Spartan provides pre-survey safety audits to ensure vessels meet all Transport Canada, SOLAS, and class safety specifications (DNV, Lloyd's, ABS). A certified safety inspector will visit your vessel in port, inventory all safety systems (rafts, suits, PFDs, flares, first aid, EPIRBs), identify expiring dates, and draft a compliance schedule. Contact our Dartmouth HQ to schedule an audit.
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
                        Our head office and primary service facility is located at 120 Thornhill Drive in Dartmouth, NS. We also operate active regional branches in Sydney, Yarmouth, Barrington Passage, Caraquet, Charlottetown, and Paradise. We can coordinate reliable local pickup, dockside delivery, and hot-shot transport to regional commercial slips, processing facilities, and shipyards.
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
