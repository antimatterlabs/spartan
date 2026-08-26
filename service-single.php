<?php
$page_title = 'Life Raft Inspection & Repacking | Spartan Industrial Marine';
$active_nav = 'services';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Life Raft Inspection & Repacking',
    'subtitle' => 'Transport Canada certified inspection, pressure testing, and annual recertification for SOLAS, commercial, and recreational survival vessels.',
    'image' => 'assets/images/j9/life-raft-inspection.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Inspection Services', 'url' => 'inspection-services.php'],
        ['label' => 'Life Raft Servicing'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Service detail -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-14 select-text">

            <!-- Main content -->
            <div class="lg:col-span-2 space-y-10">
                <div>
                    <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">What The Service Includes</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed max-w-2xl mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <p class="text-sm text-slate-600 font-light leading-relaxed max-w-2xl">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

                <!-- Included checklist -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-x-10 gap-y-4">
                    <?php
                    $includes = [
                        'Full inflation and 24-hour pressure hold test',
                        'Fabric, seam, valve, and canopy inspection',
                        'Emergency pack inspection and restock',
                        'Flares, rations, and water replacement as required',
                        'Hydrostatic release check and replacement',
                        'CO2 cylinder weighing and recharge',
                        'Repack to manufacturer specification',
                        'Transport Canada certificate on approval',
                    ];
                    foreach ($includes as $item): ?>
                    <div class="flex items-start space-x-3 border-b border-slate-100 pb-4">
                        <i class="fa-solid fa-check text-spartan-teal mt-0.5"></i>
                        <span class="text-sm text-slate-700 font-light"><?php echo $item; ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Process steps -->
                <div>
                    <h2 class="font-oswald text-2xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-8">How It Works</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="border-l-2 border-spartan-teal pl-5">
                            <span class="font-oswald text-3xl font-bold text-spartan-navy block leading-none mb-3">01</span>
                            <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-2">Book & Drop Off</h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="border-l-2 border-spartan-teal pl-5">
                            <span class="font-oswald text-3xl font-bold text-spartan-navy block leading-none mb-3">02</span>
                            <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-2">Inspect & Service</h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="border-l-2 border-spartan-teal pl-5">
                            <span class="font-oswald text-3xl font-bold text-spartan-navy block leading-none mb-3">03</span>
                            <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.15em] uppercase mb-2">Certify & Return</h3>
                            <p class="text-xs text-slate-500 font-light leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="space-y-6">
                <!-- Booking card -->
                <div class="bg-spartan-navy p-8 relative overflow-hidden">
                    <div class="absolute -right-12 -bottom-6 w-[300px] h-20 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">BOOK THIS SERVICE</span>
                        <h3 class="font-oswald text-xl font-bold text-white tracking-wider uppercase leading-tight mb-4">Confirm Service Timing</h3>
                        <ul class="space-y-3 text-xs text-slate-300 font-light mb-6">
                            <li class="flex items-center space-x-3"><i class="fa-solid fa-location-dot text-spartan-teal"></i><span>Dartmouth Service Center</span></li>
                            <li class="flex items-center space-x-3"><i class="fa-solid fa-phone text-spartan-teal"></i><span><?php echo $site['phone']; ?></span></li>
                            <li class="flex items-center space-x-3"><i class="fa-solid fa-clock text-spartan-teal"></i><span><?php echo $site['hours']; ?></span></li>
                        </ul>
                        <button onclick="requestService('Life Raft Inspection & Repack')" class="w-full bg-spartan-teal text-white py-3.5 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                            Book Inspection
                        </button>
                    </div>
                </div>

                <!-- Other services -->
                <div class="border border-slate-100 p-8">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-5">Other Services</h3>
                    <ul class="text-[13px] text-slate-600 font-medium">
                        <?php $other_services = array_slice($site_services, 1); $other_last = count($other_services) - 1; ?>
                        <?php foreach ($other_services as $i => $svc): ?>
                        <li class="<?php echo $i < $other_last ? 'border-b border-slate-100' : ''; ?> py-3 flex items-center justify-between hover:text-spartan-teal transition-colors">
                            <a href="<?php echo site_escape($svc['url'] ?? 'inspection-services.php'); ?>" class="flex-grow"><?php echo site_escape($svc['title']); ?></a>
                            <i class="fa-solid fa-chevron-right text-[9px] text-spartan-teal"></i>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Related product -->
                <div class="border border-slate-100 p-8">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-5">Often Needed With This</h3>
                    <a href="product-single.php" class="flex items-center space-x-4 group">
                        <img src="assets/images/j9/marine-safety.webp" alt="Hydrostatic release unit" class="w-16 h-16 object-cover border border-slate-100">
                        <div>
                            <h4 class="font-oswald text-xs font-bold text-spartan-navy uppercase leading-tight group-hover:text-spartan-teal transition-colors">Hammar H20 Hydrostatic Release</h4>
                            <span class="font-sans text-xs font-semibold text-slate-700 mt-1 block">$129.50 CAD</span>
                        </div>
                    </a>
                </div>
            </aside>

        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
