<?php
/**
 * Component: Product Card (grid item)
 * Use with include() inside a loop.
 *
 * Expects $product = one item from $site_products.
 */
$pc_js_name = str_replace(["'", '&Prime;'], ["\\'", ' in'], $product['name']);
$pc_js_image = str_replace("'", "\\'", $product['image']);
$pc_badge_bg = ($product['badge_style'] ?? 'navy') === 'teal' ? 'bg-spartan-teal text-white' : 'bg-spartan-navy text-white';
$pc_has_price = isset($product['price']) && is_numeric($product['price']);
$pc_price = $pc_has_price ? (float) $product['price'] : null;
$pc_url = site_product_url($product);
$pc_display_name = html_entity_decode(strip_tags($product['name']), ENT_QUOTES, 'UTF-8');
$pc_quote_url = 'contact.php?product=' . rawurlencode($pc_display_name);
$pc_brand_slug = $product['brand_slug'] ?? site_brand_slug($product['vendor'] ?? '');
$pc_has_variants = count($product['variants'] ?? []) > 1;
?>
<div class="space-y-4 group product-card-element transition-all duration-300 hover:bg-slate-50 p-2" data-category="<?php echo site_escape($product['category']); ?>" data-group="<?php echo site_escape($product['category_group'] ?? ''); ?>" data-brand="<?php echo site_escape($pc_brand_slug); ?>">
    <div class="relative bg-white border border-slate-100 rounded-none h-60 flex items-center justify-center overflow-hidden <?php echo !empty($product['contain']) ? 'p-6' : ''; ?>">
        <a href="<?php echo site_escape($pc_url); ?>" class="absolute inset-0 z-0" aria-label="View <?php echo site_escape($pc_display_name); ?>"></a>
        <img src="<?php echo site_escape($product['image']); ?>" alt="<?php echo site_escape($pc_display_name); ?>" class="<?php echo !empty($product['contain']) ? 'h-full w-auto object-contain' : 'h-full w-full object-cover'; ?> group-hover:scale-105 transition-transform duration-500 ease-in-out pointer-events-none">
        <?php if (!empty($product['badge'])): ?>
        <span class="absolute top-3 left-3 <?php echo $pc_badge_bg; ?> text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase"><?php echo site_escape($product['badge']); ?></span>
        <?php endif; ?>

        <!-- Quick Add hover overlay -->
        <div class="absolute inset-0 bg-spartan-navy/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
            <?php if ($pc_has_variants): ?>
            <a href="<?php echo site_escape($pc_url); ?>" class="relative z-10 bg-spartan-navy text-white hover:bg-spartan-teal px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                <i class="fa-solid fa-list-check text-xs"></i>
                <span>VIEW OPTIONS</span>
            </a>
            <?php elseif ($pc_has_price): ?>
            <button onclick="addToCart('<?php echo $pc_js_name; ?>', <?php echo number_format($pc_price, 2, '.', ''); ?>, '<?php echo $pc_js_image; ?>')" class="relative z-10 bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                <i class="fa-solid fa-cart-plus text-xs"></i>
                <span>QUICK ADD</span>
            </button>
            <?php else: ?>
            <a href="<?php echo site_escape($pc_quote_url); ?>" class="relative z-10 bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy px-4 py-2.5 text-[10px] font-bold tracking-widest transition-colors duration-300 uppercase flex items-center space-x-2 rounded-none">
                <i class="fa-solid fa-circle-info text-xs"></i>
                <span>REQUEST QUOTE</span>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="space-y-2">
        <h3 class="font-oswald text-sm md:text-base font-bold text-spartan-navy uppercase tracking-normal leading-tight min-h-[44px]">
            <a href="<?php echo site_escape($pc_url); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape(strtoupper($pc_display_name)); ?></a>
        </h3>
        <div class="flex items-center justify-between border-t border-slate-100 pt-3">
            <div class="flex items-baseline space-x-1.5">
                <?php if ($pc_has_price): ?>
                <span class="font-sans text-sm font-bold text-slate-800">$<?php echo number_format($pc_price, 2); ?><span class="text-[9.5px] text-slate-400 font-normal"><?php echo site_escape($product['price_suffix'] ?? ''); ?> CAD</span></span>
                <?php if (!empty($product['compare_price'])): ?>
                <span class="font-sans text-[10px] text-slate-400 line-through">$<?php echo number_format($product['compare_price'], 2); ?></span>
                <?php endif; ?>
                <?php else: ?>
                <span class="font-sans text-xs font-bold text-slate-700 uppercase tracking-[0.12em]">Request Quote</span>
                <?php endif; ?>
            </div>
            <?php if ($pc_has_variants): ?>
            <a href="<?php echo site_escape($pc_url); ?>" class="bg-spartan-navy text-white hover:bg-spartan-teal py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                VIEW OPTIONS
            </a>
            <?php elseif ($pc_has_price): ?>
            <button onclick="addToCart('<?php echo $pc_js_name; ?>', <?php echo number_format($pc_price, 2, '.', ''); ?>, '<?php echo $pc_js_image; ?>')" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                ADD TO ORDER
            </button>
            <?php else: ?>
            <a href="<?php echo site_escape($pc_quote_url); ?>" class="bg-spartan-teal text-white hover:bg-spartan-teal-light hover:text-spartan-navy py-1.5 px-3 text-[8px] font-bold tracking-widest transition-colors rounded-none uppercase">
                QUOTE
            </a>
            <?php endif; ?>
        </div>
    </div>
</div>
