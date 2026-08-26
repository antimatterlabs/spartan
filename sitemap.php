<?php
$page_title = 'Sitemap | Spartan Industrial Marine';
$meta_description = 'Find every key Spartan Industrial Marine page, product department, product category, service, location, and resource from one organized sitemap.';
$active_nav = 'resources';
require_once __DIR__ . '/partials/header.php';

$main_pages = [
    ['label' => 'Home', 'url' => 'index.php'],
    ['label' => 'Shop Products', 'url' => 'products.php'],
    ['label' => 'Lobster & Crab Trap Production', 'url' => 'production.php'],
    ['label' => 'Inspection Services', 'url' => 'inspection-services.php'],
    ['label' => 'Locations', 'url' => 'locations.php'],
    ['label' => 'About Spartan', 'url' => 'about.php'],
    ['label' => 'Contact', 'url' => 'contact.php'],
];

$service_pages = [
    ['label' => 'Inspection Services', 'url' => 'inspection-services.php'],
    ['label' => 'Rental Equipment', 'url' => 'rental-equipment.php'],
    ['label' => 'Safety & Training', 'url' => 'training-courses.php'],
    ['label' => 'CERTTracker', 'url' => 'certtracker.php'],
];

$resource_pages = [
    ['label' => 'Frequently Asked Questions', 'url' => 'faq.php'],
    ['label' => 'Definitions & Warnings', 'url' => 'terms.php'],
    ['label' => 'Sitemap', 'url' => 'sitemap.php'],
];

function sitemap_link_list($links) {
    foreach ($links as $link): ?>
        <li>
            <a href="<?php echo site_escape($link['url']); ?>" class="block py-2 text-sm text-slate-600 hover:text-spartan-teal transition-colors">
                <?php echo site_escape($link['label']); ?>
            </a>
        </li>
    <?php endforeach;
}
?>

    <!-- Sitemap hero -->
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14 md:py-16 select-text">
            <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Site Index</span>
            <h1 class="font-oswald text-4xl md:text-5xl font-bold tracking-widest uppercase text-spartan-navy leading-tight mb-4">Sitemap</h1>
        </div>
    </section>

    <!-- Core navigation -->
    <section class="py-12 md:py-14 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-12 gap-y-10">
                <div>
                    <h2 class="font-oswald text-base font-bold tracking-[0.18em] uppercase text-spartan-navy pb-3 mb-2 border-b border-slate-200">Main Pages</h2>
                    <ul><?php sitemap_link_list($main_pages); ?></ul>
                </div>

                <div>
                    <h2 class="font-oswald text-base font-bold tracking-[0.18em] uppercase text-spartan-navy pb-3 mb-2 border-b border-slate-200">Services</h2>
                    <ul><?php sitemap_link_list($service_pages); ?></ul>
                </div>

                <div>
                    <h2 class="font-oswald text-base font-bold tracking-[0.18em] uppercase text-spartan-navy pb-3 mb-2 border-b border-slate-200">Resources</h2>
                    <ul><?php sitemap_link_list($resource_pages); ?></ul>
                </div>

                <div>
                    <h2 class="font-oswald text-base font-bold tracking-[0.18em] uppercase text-spartan-navy pb-3 mb-2 border-b border-slate-200">Locations</h2>
                    <ul>
                        <?php foreach ($site_locations as $location): ?>
                        <li>
                            <a href="<?php echo site_escape(site_location_url($location)); ?>" class="block py-2 text-sm text-slate-600 hover:text-spartan-teal transition-colors">
                                <?php echo site_escape($location['city']); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Product departments -->
    <section class="py-12 md:py-16 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-5 mb-8">
                <div>
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">Products</span>
                    <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest uppercase text-spartan-navy leading-tight">Product Departments</h2>
                </div>
                <a href="products.php" class="inline-flex w-fit items-center text-[10px] font-bold tracking-[0.2em] uppercase text-spartan-teal hover:text-spartan-navy transition-colors">
                    <span>View All Products</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-14 gap-y-12">
                <?php foreach ($site_product_category_groups as $group_slug => $group): ?>
                <div>
                    <h3 class="font-oswald text-base font-bold tracking-[0.18em] uppercase text-spartan-navy pb-3 mb-2 border-b border-slate-200 leading-tight">
                        <a href="<?php echo site_escape(site_product_group_url($group_slug)); ?>" class="hover:text-spartan-teal transition-colors">
                            <?php echo site_escape($group['label']); ?>
                        </a>
                    </h3>

                    <ul>
                        <?php foreach ($group['categories'] as $category): ?>
                        <?php $category = site_clean_catalog_label($category); ?>
                        <li>
                            <a href="<?php echo site_escape(site_product_category_url($category)); ?>" class="block py-2 text-sm text-slate-600 hover:text-spartan-teal transition-colors">
                                <?php echo site_escape($category); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
