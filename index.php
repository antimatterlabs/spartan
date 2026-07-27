<?php
$page_title = 'Spartan Industrial Marine | Commercial Marine Supply & Certified Service';
$active_nav = 'home';
require_once __DIR__ . '/partials/header.php';
?>

    <!-- ======================================================= -->
    <!-- ===================== MAIN HERO SECTION ================ -->
    <!-- ======================================================= -->
    <section class="relative h-[700px] md:h-[800px] w-full overflow-hidden bg-spartan-navy">
        <!-- Hero Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="assets/images/hero-upscale.jpg" alt="Commercial marine gear built for harsh weather" class="w-full h-full object-cover object-top contrast-[1.05]">
            <div class="absolute inset-0 bg-gradient-to-r from-spartan-navy/85 from-[30%] via-spartan-navy/55 via-[48%] to-transparent to-[70%]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy via-transparent to-transparent opacity-60"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center pb-20 md:pb-28">
            <div class="max-w-2xl text-white space-y-6">
                <div class="flex items-center space-x-2.5">
                    <span class="h-px w-8 bg-spartan-teal"></span>
                    <span class="font-oswald text-[10px] md:text-xs font-bold text-spartan-teal tracking-[0.3em] uppercase">COMMERCIAL MARINE SUPPLY & SERVICE · ATLANTIC CANADA</span>
                </div>

                <h1 class="font-oswald text-4xl sm:text-5xl md:text-6xl lg:text-[70px] font-bold uppercase tracking-wider leading-[1.05] text-white select-text">
                    Gear Built<br>For Harsh<br>Weather.
                </h1>

                <p class="font-sans text-base md:text-lg text-slate-300 leading-relaxed max-w-xl font-light select-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
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
            <!-- Pillar 1: Liferaft Servicing -->
            <a href="services.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-life-ring text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Liferaft Servicing</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>EXPLORE SERVICES</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pillar 2: Custom Rigging -->
            <a href="services.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-link text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Rigging & Splicing</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>EXPLORE SERVICES</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pillar 3: Fleet Compliance -->
            <a href="services.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-shield-halved text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Vessel Compliance</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>EXPLORE Compliance</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1.5"></i>
                </span>
            </a>

            <!-- Pillar 4: Commercial Stock -->
            <a href="products.php" class="relative bg-gradient-to-br from-white/90 via-white/80 to-white/65 backdrop-blur-md pt-10 pb-10 px-7 border-t border-t-white/90 border-x border-x-white/50 border-b border-b-white/30 flex flex-col justify-between group shadow-[0_10px_30px_rgba(12,27,36,0.04)] hover:-translate-y-2 hover:shadow-[0_20px_40px_rgba(12,27,36,0.12)] hover:border-t-spartan-teal/60 hover:border-x-spartan-teal/30 transition-all duration-500 ease-[cubic-bezier(0.16,1,0.3,1)]">
                <div>
                    <div class="w-14 h-14 bg-gradient-to-br from-spartan-teal/15 to-spartan-teal/5 text-spartan-teal flex items-center justify-center mb-6 transition-all duration-300 group-hover:from-spartan-teal/25 group-hover:to-spartan-teal/10">
                        <i class="fa-solid fa-warehouse text-xl"></i>
                    </div>
                    <h3 class="font-oswald text-base font-bold text-spartan-navy tracking-wider uppercase mb-3">Commercial Stock</h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                </div>
                <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal group-hover:text-spartan-navy transition-colors mt-4 uppercase">
                    <span>SHOP INVENTORY</span>
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
        <div id="dept-carousel" class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-6 -mx-1 px-1">

            <!-- Department 1: Marine Safety -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/marine-safety.webp" alt="Marine safety equipment" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Marine Safety</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Immersion suits, PFDs, life rafts, flares, EPIRBs.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP SAFETY</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 2: Rope & Rigging -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/department-rope-rigging.webp" alt="Rope and rigging department" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Rope & Rigging</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Pot warp, wire rope, chain, shackles, mooring lines.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP ROPE & RIGGING</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 3: Commercial Fishing -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/department-commercial-fishing.webp" alt="Commercial fishing gear and supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Commercial Fishing</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Lobster and crab gear, buoys, bait supplies, trawl hardware.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP FISHING GEAR</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 4: Workwear -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/department-workwear.webp" alt="Commercial marine workwear" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Workwear</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Rain gear, bibs, gloves, hi-vis, and thermal layers.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP WORKWEAR</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 5: Footwear -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/marine-footwear.webp" alt="Deck boots and marine footwear" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Footwear</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Deck boots and safety footwear built for wet decks.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP FOOTWEAR</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 6: Industrial & Shipyard -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/department-industrial-shipyard.webp" alt="Industrial and shipyard marine supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Industrial & Shipyard</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Lifting hardware, fall protection, PPE, and site supply.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP INDUSTRIAL</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 7: Marine Life Safety -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-marine-life-safety.webp" alt="Marine life safety equipment" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Marine Life Safety</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Certified safety gear, survival equipment, and vessel readiness supplies.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP LIFE SAFETY</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 8: Buoys & Floats -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-buoys-floats.webp" alt="Buoys and floats" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Buoys & Floats</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Trap buoys, float systems, markers, and working-water visibility gear.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP BUOYS</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 9: Scallop Fishing -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-scallop-fishing.webp" alt="Scallop fishing gear" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Scallop Fishing</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Fleet supplies, deck gear, and seasonal support for scallop crews.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP SCALLOP GEAR</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 10: Trawling Gear -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-trawling-gear.webp" alt="Trawling gear" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Trawling Gear</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Nets, hardware, handling gear, and supply support for trawlers.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP TRAWLING</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 11: Pumps & Plumbing -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-pumps-plumbing.webp" alt="Marine pumps and plumbing supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Pumps & Plumbing</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Bilge, deck, hose, fittings, and marine plumbing essentials.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP PUMPS</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 12: Cabin & Navigation -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-cabin-navigation.webp" alt="Cabin and navigation supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Cabin & Navigation</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Wheelhouse essentials, navigation support, and onboard supplies.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP NAVIGATION</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 13: Industrial Safety -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-industrial-safety.webp" alt="Industrial safety supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Industrial Safety</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">PPE, jobsite safety, fall protection, and yard-ready equipment.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP SAFETY</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

            <!-- Department 14: Military & Coast Guard -->
            <a href="products.php" class="relative group h-[540px] w-[300px] sm:w-[340px] shrink-0 snap-start overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/other-military-coast-guard.webp" alt="Military and coast guard marine supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-spartan-navy/25 to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-7 flex flex-col justify-end">
                    <h3 class="font-oswald text-2xl font-bold tracking-widest text-white uppercase mb-1.5">Military & Coast Guard</h3>
                    <p class="text-sm text-slate-300 font-light mb-5">Reliable marine supply for government, defence, and response crews.</p>
                    <span class="inline-flex items-center text-xs font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                        <span>SHOP GOVERNMENT</span>
                        <i class="fa-solid fa-arrow-right text-xs ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                    </span>
                </div>
            </a>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ==================== BEST SELLERS ===================== -->
    <!-- ======================================================= -->
    <section id="bestsellers-section" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-t border-slate-100">
        <!-- Title and carousel controls -->
        <div class="mb-10 flex flex-col md:flex-row md:items-end justify-between select-text">
            <div>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">BEST SELLERS</h2>
            </div>
            <div class="mt-6 md:mt-0 flex items-center space-x-3">
                <button onclick="scrollCarousel('bestsellers-carousel', -1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Previous best sellers">
                    <i class="fa-solid fa-arrow-left text-sm"></i>
                </button>
                <button onclick="scrollCarousel('bestsellers-carousel', 1)" class="w-11 h-11 border border-slate-300 text-spartan-navy hover:bg-spartan-navy hover:text-white hover:border-spartan-navy transition-colors flex items-center justify-center" aria-label="Next best sellers">
                    <i class="fa-solid fa-arrow-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Horizontal snap carousel of product cards -->
        <div id="bestsellers-carousel" class="flex overflow-x-auto no-scrollbar snap-x snap-mandatory scroll-smooth gap-6 -mx-1 px-1">
            <!-- Product 1: Immersion Suit -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/jacket.webp" alt="SOLAS immersion suit, universal adult" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">TC APPROVED</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">MARINE SAFETY / SURVIVAL</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=coastline-solas-immersion-suit" class="hover:text-spartan-teal transition-colors">COASTLINE SOLAS IMMERSION SUIT</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$689.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2: Pot Warp Rope -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
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
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">ROPE & RIGGING / POT WARP</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=sinking-pot-warp-38" class="hover:text-spartan-teal transition-colors">SINKING POT WARP 3/8″ × 1,200 FT</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$189.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Sinking Pot Warp, 3/8 in x 1,200 ft Coil', 189.00, 'assets/images/j9/marine-rigging.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3: Spartan Deck Boots -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-4">
                    <img src="assets/images/j9/marine-footwear.webp" alt="Commercial deck boots" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">NEW ARRIVAL</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Spartan Commercial Pro Deck Boots', 139.50, 'assets/images/j9/marine-footwear.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">FOOTWEAR / DECK BOOTS</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=fierce-frontier-deck-boot" class="hover:text-spartan-teal transition-colors">SPARTAN COMMERCIAL DECK BOOTS</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$139.50 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Spartan Commercial Pro Deck Boots', 139.50, 'assets/images/j9/marine-footwear.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4: Float Jacket -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/float-jacket.webp" alt="High-vis lobster float jacket" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">BEST SELLER</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('High-Vis Lobster Float Jacket', 249.00, 'assets/images/float-jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">WORKWEAR / FLOTATION</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=stormwatch-float-jacket" class="hover:text-spartan-teal transition-colors">HIGH-VIS LOBSTER FLOAT JACKET</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$249.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('High-Vis Lobster Float Jacket', 249.00, 'assets/images/float-jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5: Lobster Trap Kit -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
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
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">COMMERCIAL FISHING / HARDWARE</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=lobster-trap-kit" class="hover:text-spartan-teal transition-colors">LOBSTER TRAP HARDWARE KIT</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$74.50 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Lobster Trap Kit, Vents, Rings & Bait Bags (25 Pack)', 74.50, 'assets/images/j9/commercial-fishing.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6: Heavy Duty Bibs -->
            <div class="space-y-4 group transition-all duration-300 hover:bg-slate-50 p-2 w-[280px] shrink-0 snap-start select-text">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/spartan-workwear-woman.webp" alt="Commercial marine foul weather bibs" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">HEAVY DUTY</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Commercial Pro Foul Weather Bib Pants', 119.00, 'assets/images/j9/spartan-workwear-woman.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">WORKWEAR / FOUL WEATHER</span>
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=noreaster-rain-bibs" class="hover:text-spartan-teal transition-colors">COMMERCIAL PRO BIB PANTS</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$119.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Commercial Pro Foul Weather Bib Pants', 119.00, 'assets/images/j9/spartan-workwear-woman.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ====================== AISLES ========================= -->
    <!-- 3-column: image aisle / image aisle / list aisle        -->
    <!-- ======================================================= -->
    <section class="pb-16 md:pb-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Aisle 1: Image (Commercial Fishing) -->
            <a href="products.php" class="relative group h-[460px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/commercial-fishing.webp" alt="Commercial fishing gear and crew supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">SEASON PREP</span>
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Gear Up Before<br>The Season Opens</h3>
                    <p class="text-sm text-slate-300 font-light mb-6 max-w-[280px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                    <span class="inline-flex bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        Shop Fishing Gear
                    </span>
                </div>
            </a>

            <!-- Aisle 2: Image (Marine Safety) -->
            <a href="products.php" class="relative group h-[460px] overflow-hidden bg-spartan-navy">
                <div class="absolute inset-0">
                    <img src="assets/images/j9/marine-safety.webp" alt="Marine safety equipment and service supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.65]">
                    <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/90 via-transparent to-transparent"></div>
                </div>
                <div class="absolute inset-x-0 bottom-0 p-8">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">MARINE SAFETY</span>
                    <h3 class="font-oswald text-3xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Certified Kit For<br>Every Crew Member</h3>
                    <p class="text-sm text-slate-300 font-light mb-6 max-w-[280px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                    <span class="inline-flex bg-spartan-teal text-white py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase group-hover:bg-spartan-teal-light group-hover:text-spartan-navy transition-colors">
                        Shop Safety
                    </span>
                </div>
            </a>

            <!-- Aisle 3: Services List -->
            <div class="relative h-[460px] bg-spartan-navy p-8 flex flex-col justify-between overflow-hidden">
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
                        <li class="py-3 flex items-center justify-between hover:text-white transition-colors">
                            <a href="services.php" class="flex-grow">Vessel & Fleet Outfitting</a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                    </ul>
                </div>
                <a href="services.php" class="relative z-10 inline-flex items-center justify-center border border-spartan-teal text-spartan-teal py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                    View All Services
                </a>
            </div>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================== SPLIT MEDIA CARDS ================== -->
    <!-- Reusable: image one side, content the other             -->
    <!-- ======================================================= -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Split Media 1: Image left, content right -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white">
                <div class="relative h-[300px] md:h-auto md:min-h-[420px] overflow-hidden">
                    <img src="assets/images/j9/spartan-service-workshop.webp" alt="Spartan marine service workshop" class="absolute inset-0 w-full h-full object-cover">
                    <!-- Wave accent bleeding off the image edge -->
                    <div class="absolute -bottom-2 -left-8 w-[120%] h-16 bg-spartan-teal opacity-60 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                </div>
                <div class="p-10 md:p-14 flex flex-col justify-center">
                    <div class="w-14 h-4 bg-spartan-teal mb-5" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">CERTIFIED SERVICE CENTRE</span>
                    <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
                        Lorem Ipsum Dolor Sit Amet
                    </h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div>
                        <a href="services.php" class="inline-flex items-center bg-spartan-navy text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-charcoal transition-colors">
                            <span>Book a Service</span>
                            <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Split Media 2: Content left, image right -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white">
                <div class="p-10 md:p-14 flex flex-col justify-center order-2 md:order-1">
                    <div class="w-14 h-4 bg-spartan-teal mb-5" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">FLEET & COMMERCIAL ACCOUNTS</span>
                    <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
                        Lorem Ipsum Dolor Sit Amet
                    </h3>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-md">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                    <div>
                        <a href="contact.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                            <span>Set Up an Account</span>
                            <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                        </a>
                    </div>
                </div>
                <div class="relative h-[300px] md:h-auto md:min-h-[420px] overflow-hidden order-1 md:order-2">
                    <img src="assets/images/j9/spartan-warehouse-fulfillment.webp" alt="Spartan warehouse fulfillment and account orders" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute -bottom-2 -right-8 w-[120%] h-16 bg-spartan-teal opacity-60 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                </div>
            </div>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================= SERVICES SHOWCASE =================== -->
    <!-- ======================================================= -->
    <section id="services-section" class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Centered heading only -->
        <div class="mb-14 text-center select-text">
            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">SERVICE IS HALF THE BUSINESS</h2>
        </div>

        <!-- 6 image-led service items, no card chrome -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-14 select-text">

            <!-- Service 1 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/life-raft-inspection.webp" alt="Life raft inspection and repacking" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Life Raft Inspection & Repack</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Life Raft Inspection & Repack')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Book Inspection</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

            <!-- Service 2 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/immersion-suit-testing.webp" alt="Immersion suit testing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Immersion Suit Testing</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Immersion Suit Testing')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Schedule Testing</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

            <!-- Service 3 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/service-splicing.webp" alt="Rope and rigging supplies being packed in a Spartan shop" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Splicing & Custom Rigging</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Splicing & Custom Rigging')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Request Assembly</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

            <!-- Service 4 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/service-pull-testing.webp" alt="Certified pull testing" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Certified Pull Testing</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Certified Pull Testing')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Book Testing</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

            <!-- Service 5 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/service-compliance.webp" alt="Marine compliance inspection support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Compliance Inspections</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Compliance Inspections')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Book Pre-Survey Check</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

            <!-- Service 6 -->
            <div class="group">
                <div class="h-52 w-full overflow-hidden mb-6">
                    <img src="assets/images/j9/service-fleet-outfitting.webp" alt="Vessel and fleet outfitting support" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-widest uppercase mb-3">Vessel & Fleet Outfitting</h3>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
                <button onclick="requestService('Vessel & Fleet Outfitting')" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                    <span>Request a Quote</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                </button>
            </div>

        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ============== WHO WE SERVE (AISLE STYLE) ============= -->
    <!-- ======================================================= -->
    <section id="industries-section" class="bg-spartan-navy text-white py-16 md:py-24 overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="mb-12 text-center select-text">
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest uppercase leading-tight">TRUSTED WHERE WORK MEETS WATER</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Who-we-serve Aisle 1: On the water -->
                <a href="contact.php" class="relative group h-[440px] overflow-hidden bg-spartan-charcoal">
                    <div class="absolute inset-0">
                        <img src="assets/images/j9/commercial-fishing.webp" alt="Commercial fishing customers and gear" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.6]">
                        <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-8">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">ON THE WATER</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Fishing, Aquaculture & Offshore</h3>
                        <p class="text-xs text-slate-300 font-light mb-6 max-w-[300px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                        <span class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                            <span>Talk To Us</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </span>
                    </div>
                </a>

                <!-- Who-we-serve Aisle 2: In the yard -->
                <a href="contact.php" class="relative group h-[440px] overflow-hidden bg-spartan-charcoal">
                    <div class="absolute inset-0">
                        <img src="assets/images/j9/department-industrial-shipyard.webp" alt="Shipyard and industrial marine supplies" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out brightness-[0.6]">
                        <div class="absolute inset-0 bg-gradient-to-t from-spartan-navy/95 via-transparent to-transparent"></div>
                    </div>
                    <div class="absolute inset-x-0 bottom-0 p-8">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">IN THE YARD</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-3">Shipyards, Industrial & Government</h3>
                        <p class="text-xs text-slate-300 font-light mb-6 max-w-[300px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.</p>
                        <span class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal group-hover:text-spartan-teal-light transition-colors uppercase">
                            <span>Talk To Us</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-1.5 transition-transform duration-300 group-hover:translate-x-1"></i>
                        </span>
                    </div>
                </a>

                <!-- Who-we-serve Aisle 3: Sector list -->
                <div class="relative h-[440px] bg-spartan-navy-light/30 border border-slate-800 p-8 flex flex-col justify-between overflow-hidden">
                    <div class="absolute -right-12 -top-4 w-[380px] h-24 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">EVERY SECTOR</span>
                        <h3 class="font-oswald text-2xl font-bold tracking-wider text-white uppercase leading-tight mb-6">Who We Supply</h3>
                        <ul class="text-[13px] text-slate-300 font-medium">
                            <li class="border-b border-slate-800 py-3">Commercial Fishing</li>
                            <li class="border-b border-slate-800 py-3">Aquaculture</li>
                            <li class="border-b border-slate-800 py-3">Shipyards & Industrial</li>
                            <li class="border-b border-slate-800 py-3">Offshore & Energy</li>
                            <li class="py-3">Government & Defence</li>
                        </ul>
                    </div>
                    <a href="contact.php" class="relative z-10 inline-flex items-center justify-center border border-spartan-teal text-spartan-teal py-3 px-6 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal hover:text-white transition-colors">
                        Set Up a Commercial Account
                    </a>
                </div>

            </div>

            <!-- Stats row -->
            <div class="mt-14 grid grid-cols-2 lg:grid-cols-4 gap-8 select-text">
                <div class="border-l-2 border-spartan-teal pl-5">
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">40+</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Years of combined experience on the water</span>
                </div>
                <div class="border-l-2 border-spartan-teal pl-5">
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">10,000+</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">SKUs stocked across Atlantic Canada</span>
                </div>
                <div class="border-l-2 border-spartan-teal pl-5">
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">48 HR</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Typical life raft service turnaround</span>
                </div>
                <div class="border-l-2 border-spartan-teal pl-5">
                    <span class="font-oswald text-3xl md:text-4xl font-bold text-white block leading-none">1,200+</span>
                    <span class="text-[11px] text-slate-400 font-light tracking-wide mt-2 block">Vessels serviced and outfitted every year</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- =================== PRODUCTS GRID ===================== -->
    <!-- ======================================================= -->
    <section id="products-section" class="py-20 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Title area -->
        <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between select-text">
            <div>
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">IN STOCK NOW</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-none">WORKING GEAR, PROVEN DAILY</h2>
            </div>

            <!-- Filter Tabs -->
            <div class="mt-6 md:mt-0 flex flex-wrap gap-2 text-[10px] font-bold tracking-widest uppercase">
                <button onclick="filterProducts('all')" class="bg-spartan-navy text-white px-4 py-2 hover:bg-spartan-teal transition-colors" id="tab-all">ALL</button>
                <button onclick="filterProducts('safety')" class="bg-spartan-light-gray text-slate-700 px-4 py-2 hover:bg-spartan-teal hover:text-white transition-colors" id="tab-safety">Marine Safety</button>
                <button onclick="filterProducts('rope')" class="bg-spartan-light-gray text-slate-700 px-4 py-2 hover:bg-spartan-teal hover:text-white transition-colors" id="tab-rope">Rope & Rigging</button>
                <button onclick="filterProducts('fishing')" class="bg-spartan-light-gray text-slate-700 px-4 py-2 hover:bg-spartan-teal hover:text-white transition-colors" id="tab-fishing">Fishing Gear</button>
                <button onclick="filterProducts('workwear')" class="bg-spartan-light-gray text-slate-700 px-4 py-2 hover:bg-spartan-teal hover:text-white transition-colors" id="tab-workwear">Workwear</button>
            </div>
        </div>

        <!-- 4-Column Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 select-text">

            <!-- Product 1: Immersion Suit -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="safety">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/jacket.webp" alt="SOLAS immersion suit, universal adult" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">TC APPROVED</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">MARINE SAFETY / SURVIVAL</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=coastline-solas-immersion-suit" class="hover:text-spartan-teal transition-colors">COASTLINE SOLAS IMMERSION SUIT, UNIVERSAL ADULT</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$689.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Coastline SOLAS Immersion Suit, Universal Adult', 689.00, 'assets/images/jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2: Pot Warp Rope -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="rope">
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
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">ROPE & RIGGING / POT WARP</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=sinking-pot-warp-38" class="hover:text-spartan-teal transition-colors">SINKING POT WARP 3/8″ × 1,200 FT COIL</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$189.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Sinking Pot Warp, 3/8 in x 1,200 ft Coil', 189.00, 'assets/images/j9/marine-rigging.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3: Lobster Trap Kit -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="fishing">
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
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">FISHING GEAR / LOBSTER</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=lobster-trap-kit" class="hover:text-spartan-teal transition-colors">LOBSTER TRAP KIT: VENTS, RINGS & BAIT BAGS (25 PK)</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$74.50 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Lobster Trap Kit, Vents, Rings & Bait Bags (25 Pack)', 74.50, 'assets/images/j9/commercial-fishing.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4: Float Jacket (Sale) -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="safety">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/float-jacket.webp" alt="Stormwatch commercial float jacket" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">ON SALE</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Stormwatch Commercial Float Jacket', 149.99, 'assets/images/float-jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">MARINE SAFETY / FLOTATION</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=stormwatch-float-jacket" class="hover:text-spartan-teal transition-colors">STORMWATCH COMMERCIAL FLOAT JACKET</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <div class="flex items-baseline space-x-1.5">
                            <span class="font-sans text-sm font-bold text-slate-800">$149.99 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                            <span class="font-sans text-[10px] text-slate-400 line-through">$199.99</span>
                        </div>
                        <button onclick="addToCart('Stormwatch Commercial Float Jacket', 149.99, 'assets/images/float-jacket.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5: Deck Boot -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="workwear">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/j9/marine-footwear.webp" alt="Fierce Frontier waterproof deck boot" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">BEST SELLER</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Fierce Frontier Waterproof Deck Boot', 129.00, 'assets/images/j9/marine-footwear.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">WORKWEAR / FOOTWEAR</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=fierce-frontier-deck-boot" class="hover:text-spartan-teal transition-colors">FIERCE FRONTIER WATERPROOF DECK BOOT</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$129.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Fierce Frontier Waterproof Deck Boot', 129.00, 'assets/images/j9/marine-footwear.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6: Wire Rope -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="rope">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/marine-rigging.webp" alt="Galvanized wire rope on vessel rigging" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">CUT TO LENGTH</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Galvanized Wire Rope, 5/16 in, Per Foot', 2.35, 'assets/images/j9/marine-rigging.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">ROPE & RIGGING / WIRE ROPE</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=galvanized-wire-rope-516" class="hover:text-spartan-teal transition-colors">GALVANIZED WIRE ROPE 5/16″, CUT TO LENGTH</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$2.35<span class="text-[9.5px] text-slate-400 font-normal">/FT CAD</span></span>
                        <button onclick="addToCart('Galvanized Wire Rope, 5/16 in, Per Foot', 2.35, 'assets/images/j9/marine-rigging.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 7: Grip Gloves -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="workwear">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden p-6">
                    <img src="assets/images/gloves.jpg" alt="Dockline heavy grip work gloves" class="h-full w-auto object-contain group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Dockline Heavy Grip Gloves (3 Pair)', 34.99, 'assets/images/gloves.jpg')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">WORKWEAR / GLOVES</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=dockline-grip-gloves" class="hover:text-spartan-teal transition-colors">DOCKLINE HEAVY GRIP GLOVES, 3 PAIR PACK</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$34.99 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Dockline Heavy Grip Gloves (3 Pair)', 34.99, 'assets/images/gloves.jpg')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 8: Trap Buoys -->
            <div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="fishing">
                <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden">
                    <img src="assets/images/j9/other-buoys-floats.webp" alt="Trap buoys and deck floats" class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                    <span class="absolute top-3 left-3 bg-spartan-teal text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase">SEASON STOCK</span>
                    <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <button onclick="addToCart('Hi-Vis Trap Buoy, 11 in x 18 in (10 Pack)', 118.00, 'assets/images/j9/other-buoys-floats.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                            <i class="fa-solid fa-cart-plus text-xs"></i>
                            <span>QUICK ADD</span>
                        </button>
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase">FISHING GEAR / BUOYS</span>
                    <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
                        <a href="product-single.php?slug=hi-vis-trap-buoy" class="hover:text-spartan-teal transition-colors">HI-VIS TRAP BUOY 11″ × 18″ (10 PACK)</a>
                    </h3>
                    <div class="flex items-center justify-between border-t border-slate-100 pt-3">
                        <span class="font-sans text-sm font-bold text-slate-800">$118.00 <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        <button onclick="addToCart('Hi-Vis Trap Buoy, 11 in x 18 in (10 Pack)', 118.00, 'assets/images/j9/other-buoys-floats.webp')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                            ADD TO ORDER
                        </button>
                    </div>
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
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">TESTIMONIALS</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">TRUSTED BY ATLANTIC MARINERS</h2>
                <p class="text-sm text-slate-500 font-light mt-3 max-w-lg mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-white">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-1 text-spartan-teal text-[11px]">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 font-light leading-relaxed text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">CAPT. JONATHAN LANDRY</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">F/V Sea Rover · Yarmouth, NS</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> FLEET ACCOUNT
                        </span>
                    </div>
                </div>

                <!-- Review 2 -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-white">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-1 text-spartan-teal text-[11px]">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 font-light leading-relaxed text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">SARAH MCALLISTER</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">Operations Director, Fundy Salmon Co.</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> VERIFIED ACCOUNT
                        </span>
                    </div>
                </div>

                <!-- Review 3 -->
                <div class="border border-slate-200/80 p-8 space-y-6 flex flex-col justify-between hover:border-slate-300 transition-colors bg-white">
                    <div class="space-y-4">
                        <div class="flex items-center space-x-1 text-spartan-teal text-[11px]">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p class="text-slate-700 font-light leading-relaxed text-sm">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100">
                        <h4 class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase">MARKUS NIELSEN</h4>
                        <span class="text-[10px] text-slate-400 block tracking-wider uppercase mt-0.5">Fleet Engineer, Atlantic Tug & Barge</span>
                        <span class="inline-flex items-center text-[9px] font-bold text-spartan-teal tracking-widest uppercase mt-2">
                            <i class="fa-solid fa-anchor text-[8px] mr-1.5"></i> COMMERCIAL CUSTOMER
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
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">LOGBOOK & RESOURCES</span>
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
                <!-- Article 1 -->
                <a href="blog-single.php" class="group flex flex-col justify-between bg-white border border-slate-200/65 overflow-hidden transition-all duration-300 hover:bg-slate-50/50">
                    <div>
                        <div class="h-48 w-full overflow-hidden bg-spartan-navy relative">
                            <img src="assets/images/j9/life-raft-inspection.webp" alt="SOLAS life rafts" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-8 space-y-3">
                            <div class="flex items-center justify-between text-[9px] font-mono tracking-wider text-slate-400">
                                <span>SAFETY COMPLIANCE</span>
                                <span>JUNE 18, 2026</span>
                            </div>
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy uppercase tracking-wider group-hover:text-spartan-teal transition-colors leading-snug">
                                Transport Canada Life Raft Regs: What Changed?
                            </h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
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

                <!-- Article 2 -->
                <a href="blog-single.php" class="group flex flex-col justify-between bg-white border border-slate-200/65 overflow-hidden transition-all duration-300 hover:bg-slate-50/50">
                    <div>
                        <div class="h-48 w-full overflow-hidden bg-spartan-navy relative">
                            <img src="assets/images/j9/marine-rigging.webp" alt="Rope and rigging supplies organized in a Spartan shop" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-8 space-y-3">
                            <div class="flex items-center justify-between text-[9px] font-mono tracking-wider text-slate-400">
                                <span>RIGGING GUIDE</span>
                                <span>MAY 24, 2026</span>
                            </div>
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy uppercase tracking-wider group-hover:text-spartan-teal transition-colors leading-snug">
                                Wire Swaging vs. Socketing: Choosing Ends
                            </h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
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

                <!-- Article 3 -->
                <a href="blog-single.php" class="group flex flex-col justify-between bg-white border border-slate-200/65 overflow-hidden transition-all duration-300 hover:bg-slate-50/50">
                    <div>
                        <div class="h-48 w-full overflow-hidden bg-spartan-navy relative">
                            <img src="assets/images/j9/commercial-fishing.webp" alt="Commercial fisherman repairing trap gear at sea" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500 ease-in-out">
                        </div>
                        <div class="p-8 space-y-3">
                            <div class="flex items-center justify-between text-[9px] font-mono tracking-wider text-slate-400">
                                <span>INDUSTRY INSIGHT</span>
                                <span>JUNE 30, 2026</span>
                            </div>
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy uppercase tracking-wider group-hover:text-spartan-teal transition-colors leading-snug">
                                Fall Prep: Trap Sourcing & Sizing Timelines
                            </h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
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
    <!-- ==================== BRANDS BAND ====================== -->
    <!-- ======================================================= -->
    <section id="brands-section" class="py-14 bg-white border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-px bg-slate-100 border border-slate-100">
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">VIKING</span>
                </div>
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">MUSTANG</span>
                </div>
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">GUY COTTEN</span>
                </div>
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">XTRATUF</span>
                </div>
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">GRUNDÉNS</span>
                </div>
                <div class="bg-white h-24 flex items-center justify-center px-4">
                    <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel">CROSBY</span>
                </div>
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ======================= FAQ SECTION ==================== -->
    <!-- ======================================================= -->
    <section id="faq-section" class="py-20 md:py-24 bg-spartan-light-gray border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-16">
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">KNOWLEDGE BASE</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">FREQUENTLY ASKED QUESTIONS</h2>
                <p class="text-sm text-slate-500 font-light mt-3 max-w-lg mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
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
            </div>
        </div>
    </section>


    <!-- ======================================================= -->
    <!-- ================== CONTACT SECTION ==================== -->
    <!-- Lead inquiry block                                      -->
    <!-- ======================================================= -->
    <section id="contact-section" class="py-20 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">

            <!-- Left: Contact Form -->
            <div class="flex flex-col justify-start">
                <div class="w-14 h-4 bg-spartan-teal mb-5" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">CONTACT US</span>
                <h2 class="font-oswald text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-6">SEND AN INQUIRY</h2>
                
                <form onsubmit="event.preventDefault(); showToast('MESSAGE SENT', 'Thank you! A Spartan marine specialist will contact you shortly.'); this.reset();" class="space-y-5 max-w-lg">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label for="contact-name" class="font-oswald text-[10px] font-bold tracking-wider text-slate-500 uppercase">Full Name *</label>
                            <input type="text" id="contact-name" required placeholder="John Doe" class="w-full bg-slate-50 border border-slate-200/80 focus:border-spartan-teal focus:bg-white px-4 py-3 text-xs outline-none rounded-none transition-all">
                        </div>
                        <div class="space-y-1.5">
                            <label for="contact-email" class="font-oswald text-[10px] font-bold tracking-wider text-slate-500 uppercase">Work Email *</label>
                            <input type="email" id="contact-email" required placeholder="john@vessel.com" class="w-full bg-slate-50 border border-slate-200/80 focus:border-spartan-teal focus:bg-white px-4 py-3 text-xs outline-none rounded-none transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label for="contact-company" class="font-oswald text-[10px] font-bold tracking-wider text-slate-500 uppercase">Company / Vessel</label>
                            <input type="text" id="contact-company" placeholder="e.g. Atlantic FV" class="w-full bg-slate-50 border border-slate-200/80 focus:border-spartan-teal focus:bg-white px-4 py-3 text-xs outline-none rounded-none transition-all">
                        </div>
                        <div class="space-y-1.5">
                            <label for="contact-dept" class="font-oswald text-[10px] font-bold tracking-wider text-slate-500 uppercase">Department *</label>
                            <select id="contact-dept" required class="w-full bg-slate-50 border border-slate-200/80 focus:border-spartan-teal focus:bg-white px-4 py-3 text-xs outline-none rounded-none transition-all cursor-pointer">
                                <option value="" disabled selected>Select Department...</option>
                                <option value="safety">SOLAS Liferaft Servicing</option>
                                <option value="rigging">Rigging & Splicing</option>
                                <option value="compliance">Compliance Audit Request</option>
                                <option value="sales">Commercial Gear Sales</option>
                                <option value="other">General Inquiry</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-1.5">
                        <label for="contact-msg" class="font-oswald text-[10px] font-bold tracking-wider text-slate-500 uppercase">Message *</label>
                        <textarea id="contact-msg" required rows="4" placeholder="How can we help you? Describe your gear, vessel, or service required..." class="w-full bg-slate-50 border border-slate-200/80 focus:border-spartan-teal focus:bg-white px-4 py-3 text-xs outline-none rounded-none transition-all resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full sm:w-auto bg-spartan-teal text-white py-3.5 px-8 text-xs font-bold tracking-[0.2em] flex items-center justify-center hover:bg-spartan-teal-light hover:text-spartan-navy transition-all duration-300 uppercase rounded-none">
                        <span>SEND INQUIRY</span>
                        <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                    </button>
                </form>
            </div>

            <!-- Right: Lead support -->
            <div class="flex flex-col justify-start">
                <div class="bg-spartan-navy text-white p-8 lg:p-10 relative overflow-hidden">
                    <div class="absolute -right-20 -bottom-10 w-[360px] h-32 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3">GET THE RIGHT GEAR FASTER</span>
                        <h3 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest uppercase leading-tight mb-4">Tell us what you need. We will route it to the right Spartan team.</h3>
                        <p class="text-sm text-slate-300 font-light leading-relaxed max-w-xl mb-8">
                            Send product questions, service requests, quote needs, or vessel supply lists. A Spartan specialist will follow up with availability, pricing, and next steps.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 mb-8">
                            <div class="border border-white/10 bg-white/[0.04] p-4">
                                <span class="block font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.2em] uppercase mb-2">1. Send</span>
                                <p class="text-xs text-slate-300 font-light leading-relaxed">Share the product, service, vessel, or deadline.</p>
                            </div>
                            <div class="border border-white/10 bg-white/[0.04] p-4">
                                <span class="block font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.2em] uppercase mb-2">2. Review</span>
                                <p class="text-xs text-slate-300 font-light leading-relaxed">We check stock, fit, specs, and service requirements.</p>
                            </div>
                            <div class="border border-white/10 bg-white/[0.04] p-4">
                                <span class="block font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.2em] uppercase mb-2">3. Confirm</span>
                                <p class="text-xs text-slate-300 font-light leading-relaxed">Get pricing, timing, and pickup or delivery options.</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <a href="<?php echo site_escape($site['phone_href']); ?>" class="group border border-white/15 bg-white text-spartan-navy p-5 hover:bg-spartan-teal-light transition-colors">
                                <span class="text-slate-500 block uppercase tracking-wider font-mono text-[9px] mb-1">Call Spartan</span>
                                <span class="font-bold text-lg group-hover:text-spartan-navy"><?php echo site_escape($site['phone']); ?></span>
                            </a>
                            <a href="mailto:<?php echo site_escape($site['email']); ?>" class="group border border-white/15 bg-white text-spartan-navy p-5 hover:bg-spartan-teal-light transition-colors">
                                <span class="text-slate-500 block uppercase tracking-wider font-mono text-[9px] mb-1">Email</span>
                                <span class="font-bold text-base break-words group-hover:text-spartan-navy"><?php echo site_escape($site['email']); ?></span>
                            </a>
                        </div>

                        <div class="mt-6 border-t border-white/10 pt-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                            <p class="text-xs text-slate-300 font-light">
                                <?php echo site_escape($site['hours']); ?> Atlantic
                            </p>
                            <a href="contact.php" class="inline-flex items-center text-[10px] font-bold tracking-[0.2em] text-spartan-teal uppercase hover:text-white transition-colors">
                                <span>Contact Page</span>
                                <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>
    </section>


<?php require_once __DIR__ . '/partials/footer.php'; ?>
