<?php
$page_title = 'Coastline SOLAS Immersion Suit | Spartan Industrial Marine';
$active_nav = 'products';
require_once __DIR__ . '/partials/header.php';

// Template renders the first product as the example; all product links point here.
$product = $site_products[0];
$pd_js_name = str_replace(["'", '&Prime;'], ["\\'", ' in'], $product['name']);
?>

    <!-- Breadcrumb strip (no big hero on product pages) -->
    <div class="bg-spartan-light-gray border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-[10px] md:text-xs font-mono font-bold tracking-widest text-spartan-teal uppercase select-text">
                <a href="index.php" class="hover:text-spartan-navy transition-colors">HOME</a>
                <span class="text-slate-400 font-light">/</span>
                <a href="products.php" class="hover:text-spartan-navy transition-colors">PRODUCTS</a>
                <span class="text-slate-400 font-light">/</span>
                <span class="text-slate-500">IMMERSION SUITS</span>
            </nav>
        </div>
    </div>

    <!-- Product detail -->
    <section class="py-14 md:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">

            <!-- Gallery -->
            <div class="space-y-4">
                <div class="relative bg-white border border-slate-100 h-[420px] md:h-[520px] flex items-center justify-center p-10 overflow-hidden">
                    <img id="product-main-image" src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars(strip_tags($product['name'])); ?>" class="h-full w-auto object-contain">
                    <span class="absolute top-4 left-4 bg-spartan-navy text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase"><?php echo $product['badge']; ?></span>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <?php $thumbs = [$product['image'], 'assets/images/spartan-2.png', 'assets/images/PFDS.jpg', 'assets/images/spartan-4.png']; ?>
                    <?php foreach ($thumbs as $i => $thumb): ?>
                    <button onclick="document.getElementById('product-main-image').src='<?php echo $thumb; ?>'" class="border <?php echo $i === 0 ? 'border-spartan-teal' : 'border-slate-100 hover:border-spartan-teal'; ?> h-24 flex items-center justify-center p-2 bg-white transition-colors">
                        <img src="<?php echo $thumb; ?>" alt="Product view <?php echo $i + 1; ?>" class="h-full w-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Details -->
            <div class="flex flex-col justify-center">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-3"><?php echo $product['category_label']; ?></span>
                <h1 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
                    <?php echo $product['name']; ?>
                </h1>
                <div class="flex items-baseline space-x-3 mb-6">
                    <span class="font-sans text-2xl font-bold text-slate-800">$<?php echo number_format($product['price'], 2); ?> <span class="text-xs text-slate-400 font-normal">CAD</span></span>
                    <span class="inline-flex items-center text-[10px] font-bold tracking-widest text-spartan-teal uppercase"><i class="fa-solid fa-circle-check mr-1.5"></i>In Stock, All Locations</span>
                </div>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-lg">
                    <?php echo $product['desc']; ?>
                </p>

                <!-- Options -->
                <div class="space-y-5 mb-8 max-w-md">
                    <div>
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Size</label>
                        <select class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                            <option>Universal Adult (fits 110-330 lb)</option>
                            <option>Jumbo Adult</option>
                            <option>Small Adult / Youth</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Quantity</label>
                        <input id="product-qty" type="number" min="1" value="1" class="w-28 border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap gap-4 mb-10">
                    <button onclick="for(let i=0;i<Math.max(1,parseInt(document.getElementById('product-qty').value)||1);i++){addToCart('<?php echo $pd_js_name; ?>', <?php echo $product['price']; ?>, '<?php echo $product['image']; ?>');}" class="bg-spartan-teal text-white py-4 px-10 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors flex items-center space-x-2.5">
                        <i class="fa-solid fa-cart-plus text-sm"></i>
                        <span>Add to Order</span>
                    </button>
                    <a href="contact.php" class="border border-spartan-navy text-spartan-navy py-4 px-8 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors flex items-center">
                        Ask About Fleet Pricing
                    </a>
                </div>

                <!-- Trust points -->
                <ul class="space-y-3 text-xs text-slate-600 font-light border-t border-slate-100 pt-6">
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-truck text-spartan-teal"></i><span>Free shipping over $150 across Atlantic Canada. Same-day counter pickup.</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-certificate text-spartan-teal"></i><span>Transport Canada approved. Annual testing available in-house.</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-phone text-spartan-teal"></i><span>Sizing questions? Call <?php echo $site['phone']; ?> and talk to someone who has worn one.</span></li>
                </ul>
            </div>
        </div>

        <!-- Specs & details -->
        <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">
            <div>
                <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-6">Description</h2>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p class="text-sm text-slate-600 font-light leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                </p>
            </div>
            <div>
                <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-6">Specifications</h2>
                <div class="divide-y divide-slate-100 border-y border-slate-100">
                    <?php
                    $specs = [
                        'Approval' => 'Transport Canada / SOLAS 74 as amended',
                        'Material' => '5mm fire-retardant neoprene',
                        'Sizing' => 'Universal Adult, 110-330 lb',
                        'Buoyancy' => 'Inherent, with inflatable head pillow',
                        'Visibility' => 'SOLAS retro-reflective tape, hi-vis shell',
                        'Storage' => 'Includes valise storage bag',
                        'Service Interval' => 'Annual pressure-leak test recommended',
                    ];
                    foreach ($specs as $label => $value): ?>
                    <div class="py-3.5 grid grid-cols-2 gap-4">
                        <span class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase"><?php echo $label; ?></span>
                        <span class="text-sm text-slate-600 font-light"><?php echo $value; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Related products -->
    <section class="py-16 md:py-20 bg-spartan-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center select-text">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-none">CREWS ALSO ORDER</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 select-text">
                <?php foreach (array_slice($site_products, 1, 4) as $product): ?>
                    <?php include __DIR__ . '/components/product-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta = [
        'eyebrow' => 'KEEP IT CERTIFIED',
        'title' => 'We test the suits we sell.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'button_label' => 'Book Suit Testing',
        'button_url' => 'service-single.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
