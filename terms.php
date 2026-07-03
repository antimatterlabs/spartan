<?php
$page_title = 'Terms & Conditions | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Terms & Conditions',
    'subtitle' => 'The legal details for orders, servicing, and use of this site. Last updated July 2026.',
    'image' => 'assets/images/spartan-3.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Terms & Conditions'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$legal_sections = [
    'orders' => 'Orders & Payment',
    'shipping' => 'Shipping & Pickup',
    'returns' => 'Returns & Warranty',
    'servicing' => 'Servicing & Certification',
    'accounts' => 'Commercial Accounts',
    'privacy' => 'Privacy Policy',
];
?>

    <!-- Legal layout with sidebar nav -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-14 select-text">

            <!-- Sidebar nav -->
            <aside class="lg:col-span-1">
                <div class="lg:sticky lg:top-32 border border-slate-100 p-6">
                    <h2 class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.25em] uppercase mb-4">On This Page</h2>
                    <ul class="space-y-1 text-[13px] text-slate-600 font-medium">
                        <?php foreach ($legal_sections as $anchor => $label): ?>
                        <li><a href="#<?php echo $anchor; ?>" class="block py-2 border-b border-slate-100 last:border-0 hover:text-spartan-teal transition-colors"><?php echo $label; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>

            <!-- Legal content -->
            <div class="lg:col-span-3 max-w-3xl space-y-12">
                <div id="orders">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Orders & Payment</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                    </p>
                </div>

                <div id="shipping">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Shipping & Pickup</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                    </p>
                </div>

                <div id="returns">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Returns & Warranty</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                    </p>
                </div>

                <div id="servicing">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Servicing & Certification</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
                    </p>
                </div>

                <div id="accounts">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Commercial Accounts</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div>

                <div id="privacy">
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-4">Privacy Policy</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed">
                        Questions about your data can be sent to <a href="mailto:<?php echo $site['email']; ?>" class="text-spartan-teal hover:text-spartan-navy transition-colors font-semibold"><?php echo $site['email']; ?></a>.
                    </p>
                </div>
            </div>

        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
