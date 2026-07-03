<?php
/**
 * Component: Brands logo grid (show, don't tell)
 *
 * Optional:
 *   $brands_limit - int, number of brands to show (default 6)
 */
$brands_limit = $brands_limit ?? 6;
$brands_list = array_slice($site_brands, 0, $brands_limit);
?>
<section class="py-14 bg-white border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-px bg-slate-100 border border-slate-100">
            <?php foreach ($brands_list as $brand): ?>
            <div class="bg-white h-24 flex items-center justify-center px-4">
                <span class="font-oswald text-sm font-bold tracking-[0.2em] uppercase text-spartan-steel"><?php echo $brand; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php unset($brands_limit); ?>
