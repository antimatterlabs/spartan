<?php
/**
 * Component: Product Card (grid item)
 * Use with include() inside a loop.
 *
 * Expects $product = one item from $site_products.
 */
$pc_js_name = str_replace(["'", '&Prime;'], ["\\'", ' in'], $product['name']);
$pc_badge_bg = ($product['badge_style'] ?? 'navy') === 'teal' ? 'bg-spartan-teal text-white' : 'bg-spartan-navy text-white';
?>
<div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="<?php echo $product['category']; ?>">
    <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden <?php echo !empty($product['contain']) ? 'p-6' : ''; ?>">
        <a href="product-single.php" class="absolute inset-0 z-0" aria-label="View <?php echo htmlspecialchars(strip_tags($product['name'])); ?>"></a>
        <img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars(strip_tags($product['name'])); ?>" class="<?php echo !empty($product['contain']) ? 'h-full w-auto object-contain' : 'h-full w-full object-cover'; ?> group-hover:scale-105 transition-transform duration-500 ease-in-out pointer-events-none">
        <?php if (!empty($product['badge'])): ?>
        <span class="absolute top-3 left-3 <?php echo $pc_badge_bg; ?> text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase"><?php echo $product['badge']; ?></span>
        <?php endif; ?>

        <!-- Quick Add hover overlay -->
        <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <button onclick="addToCart('<?php echo $pc_js_name; ?>', <?php echo $product['price']; ?>, '<?php echo $product['image']; ?>')" class="relative z-10 bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                <i class="fa-solid fa-cart-plus text-xs"></i>
                <span>QUICK ADD</span>
            </button>
        </div>
    </div>
    <div class="space-y-2">
        <span class="font-oswald text-[9px] font-bold text-spartan-charcoal tracking-widest uppercase"><?php echo $product['category_label']; ?></span>
        <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
            <a href="product-single.php" class="hover:text-spartan-teal transition-colors"><?php echo strtoupper($product['name']); ?></a>
        </h3>
        <div class="flex items-center justify-between border-t border-slate-100 pt-3">
            <div class="flex items-baseline space-x-1.5">
                <span class="font-sans text-sm font-bold text-slate-800">$<?php echo number_format($product['price'], 2); ?><span class="text-[9.5px] text-slate-400 font-normal"><?php echo $product['price_suffix'] ?? ''; ?> CAD</span></span>
                <?php if (!empty($product['compare_price'])): ?>
                <span class="font-sans text-[10px] text-slate-400 line-through">$<?php echo number_format($product['compare_price'], 2); ?></span>
                <?php endif; ?>
            </div>
            <button onclick="addToCart('<?php echo $pc_js_name; ?>', <?php echo $product['price']; ?>, '<?php echo $product['image']; ?>')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                ADD TO ORDER
            </button>
        </div>
    </div>
</div>
