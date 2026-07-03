<?php
$page_title = 'Locations | Spartan Industrial Marine';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'On The Wharf, Not Across The Country',
    'subtitle' => 'Three branches across Atlantic Canada, each with counter service, warehouse stock, and pickup at the door.',
    'image' => 'assets/images/hero.png',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Locations'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Location cards -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 select-text">
            <?php foreach ($site_locations as $loc): ?>
            <div class="border border-slate-200/60 bg-white flex flex-col">
                <!-- Map placeholder -->
                <div class="relative h-44 bg-spartan-navy overflow-hidden">
                    <img src="assets/images/hero.png" alt="<?php echo $loc['city']; ?> location" class="w-full h-full object-cover brightness-[0.45]">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="w-12 h-12 bg-spartan-teal text-white flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-xl"></i>
                        </span>
                    </div>
                </div>
                <div class="p-8 flex flex-col justify-between flex-grow">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.12em] uppercase"><?php echo $loc['city']; ?></h3>
                            <span class="<?php echo $loc['badge_style'] === 'teal' ? 'bg-spartan-teal' : 'bg-spartan-navy'; ?> text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase"><?php echo $loc['badge']; ?></span>
                        </div>
                        <p class="text-xs text-slate-600 font-light leading-relaxed mb-6"><?php echo $loc['blurb']; ?></p>
                        <ul class="space-y-3 text-xs text-slate-500 font-light">
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-location-dot text-spartan-teal mt-0.5"></i><span><?php echo $loc['address']; ?></span></li>
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-phone text-spartan-teal mt-0.5"></i><a href="<?php echo $loc['phone_href']; ?>" class="hover:text-spartan-teal transition-colors"><?php echo $loc['phone']; ?></a></li>
                            <li class="flex items-start space-x-3"><i class="fa-solid fa-clock text-spartan-teal mt-0.5"></i><span><?php echo $loc['hours']; ?></span></li>
                        </ul>
                    </div>
                    <div class="mt-8 border-t border-slate-100 pt-6">
                        <a href="#" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors">
                            <span>Get Directions</span>
                            <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Fleet delivery split media -->
    <section class="bg-spartan-light-gray py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <?php
            $sm = [
                'eyebrow' => 'WHARF-SIDE DELIVERY',
                'title' => 'Lorem Ipsum Dolor Sit Amet',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'button_label' => 'Arrange a Delivery',
                'button_url' => 'contact.php',
                'image' => 'assets/images/spartan-4.png',
                'image_alt' => 'Wharf-side delivery to a commercial vessel',
                'reverse' => false,
            ];
            include __DIR__ . '/components/split-media.php';
            ?>
        </div>
    </section>

    <!-- Contact block -->
    <?php require_once __DIR__ . '/components/contact-block.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
