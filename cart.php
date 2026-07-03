<?php
$page_title = 'Your Order | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Your Order',
    'subtitle' => 'Review your order, then check out or send it to the counter for pickup.',
    'image' => 'assets/images/EQUIPMENT.jpg',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Cart'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

// Sample order rows for the template (Shopify will render live line items here)
$cart_rows = [
    ['product' => $site_products[0], 'qty' => 2],
    ['product' => $site_products[1], 'qty' => 4],
    ['product' => $site_products[4], 'qty' => 1],
];
$cart_subtotal = 0;
foreach ($cart_rows as $row) { $cart_subtotal += $row['product']['price'] * $row['qty']; }
$cart_shipping = 0.00;
?>

    <!-- Cart layout -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-14 select-text">

            <!-- Line items -->
            <div class="lg:col-span-2">
                <div class="hidden md:grid grid-cols-[1fr_120px_120px_40px] gap-4 pb-4 border-b border-slate-200">
                    <span class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase">Item</span>
                    <span class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase text-center">Quantity</span>
                    <span class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase text-right">Total</span>
                    <span></span>
                </div>

                <div class="divide-y divide-slate-100">
                    <?php foreach ($cart_rows as $row): $p = $row['product']; ?>
                    <div class="py-6 grid grid-cols-1 md:grid-cols-[1fr_120px_120px_40px] gap-4 items-center">
                        <div class="flex items-center space-x-5">
                            <a href="product-single.php" class="w-20 h-20 shrink-0 bg-white border border-slate-100 flex items-center justify-center <?php echo !empty($p['contain']) ? 'p-2' : ''; ?> overflow-hidden">
                                <img src="<?php echo $p['image']; ?>" alt="<?php echo htmlspecialchars(strip_tags($p['name'])); ?>" class="<?php echo !empty($p['contain']) ? 'h-full w-auto object-contain' : 'h-full w-full object-cover'; ?>">
                            </a>
                            <div>
                                <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase block mb-1"><?php echo $p['category_label']; ?></span>
                                <a href="product-single.php" class="font-oswald text-sm font-bold text-spartan-navy uppercase leading-tight hover:text-spartan-teal transition-colors"><?php echo $p['name']; ?></a>
                                <span class="text-xs text-slate-500 font-light block mt-1">$<?php echo number_format($p['price'], 2); ?><?php echo $p['price_suffix'] ?? ''; ?> CAD each</span>
                            </div>
                        </div>
                        <div class="flex md:justify-center">
                            <div class="inline-flex border border-slate-200">
                                <button onclick="alert('Quantity change mockup!')" class="px-3 py-2 text-slate-500 hover:text-spartan-teal transition-colors" aria-label="Decrease quantity"><i class="fa-solid fa-minus text-[10px]"></i></button>
                                <span class="px-4 py-2 text-sm font-semibold text-slate-800 border-x border-slate-200"><?php echo $row['qty']; ?></span>
                                <button onclick="alert('Quantity change mockup!')" class="px-3 py-2 text-slate-500 hover:text-spartan-teal transition-colors" aria-label="Increase quantity"><i class="fa-solid fa-plus text-[10px]"></i></button>
                            </div>
                        </div>
                        <div class="md:text-right">
                            <span class="font-sans text-sm font-bold text-slate-800">$<?php echo number_format($p['price'] * $row['qty'], 2); ?> <span class="text-[9.5px] text-slate-400 font-normal">CAD</span></span>
                        </div>
                        <div class="md:text-right">
                            <button onclick="alert('Remove item mockup!')" class="p-2 text-slate-400 hover:text-red-500 transition-colors" title="Remove item">
                                <i class="fa-solid fa-trash-can text-sm"></i>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="pt-8 flex flex-wrap gap-4">
                    <a href="products.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3 px-6 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                        <i class="fa-solid fa-arrow-left text-[11px] mr-2.5"></i>
                        <span>Continue Shopping</span>
                    </a>
                </div>
            </div>

            <!-- Order summary -->
            <aside>
                <div class="bg-spartan-light-gray p-8 space-y-5">
                    <h2 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.15em] uppercase">Order Summary</h2>
                    <div class="space-y-3 text-sm text-slate-700 border-b border-slate-200 pb-5">
                        <div class="flex justify-between">
                            <span class="font-light">Subtotal</span>
                            <span class="font-semibold">$<?php echo number_format($cart_subtotal, 2); ?> CAD</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-light">Shipping</span>
                            <span class="font-semibold text-spartan-teal">FREE (over $150)</span>
                        </div>
                        <div class="flex justify-between text-xs text-slate-500">
                            <span class="font-light">Taxes</span>
                            <span class="font-light">Calculated at checkout</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-baseline">
                        <span class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase">Total</span>
                        <span class="font-sans text-xl font-bold text-slate-800">$<?php echo number_format($cart_subtotal + $cart_shipping, 2); ?> <span class="text-xs text-slate-400 font-normal">CAD</span></span>
                    </div>
                    <button onclick="alert('Checkout mockup!')" class="w-full bg-spartan-teal text-white py-4 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors flex items-center justify-center space-x-2">
                        <i class="fa-solid fa-lock text-[11px]"></i>
                        <span>Checkout</span>
                    </button>
                    <p class="text-[10px] text-slate-500 font-light leading-relaxed">
                        Commercial and fleet account discounts apply automatically at checkout. Counter pickup available at all three locations.
                    </p>
                </div>

                <!-- Account nudge -->
                <div class="border border-slate-100 p-8 mt-6">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-3">Ordering For A Fleet?</h3>
                    <p class="text-xs text-slate-600 font-light leading-relaxed mb-5">Volume pricing, consolidated invoicing, and renewal tracking on certified equipment.</p>
                    <a href="contact.php" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                        <span>Set Up an Account</span>
                        <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                    </a>
                </div>
            </aside>

        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
