<?php
/**
 * Component: Contact block with compact locations list.
 * Reusable on homepage, contact page, locations page.
 */
?>
<section id="contact-section" class="py-20 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">

        <!-- Left: Contact content -->
        <div class="flex flex-col justify-center">
            <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">CONTACT</span>
            <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-5">TALK TO A REAL PERSON</h2>
            <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
            <ul class="space-y-4 text-sm text-slate-700 mb-10">
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-phone text-sm"></i></span>
                    <a href="<?php echo $site['phone_href']; ?>" class="hover:text-spartan-teal transition-colors font-semibold"><?php echo $site['phone']; ?></a>
                </li>
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-envelope text-sm"></i></span>
                    <a href="mailto:<?php echo $site['email']; ?>" class="hover:text-spartan-teal transition-colors font-semibold"><?php echo $site['email']; ?></a>
                </li>
                <li class="flex items-center space-x-4">
                    <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-clock text-sm"></i></span>
                    <span><?php echo $site['hours']; ?></span>
                </li>
            </ul>
            <div class="flex flex-wrap gap-4">
                <a href="contact.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                    <span>Send a Message</span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
                <a href="services.php" class="inline-flex items-center border border-spartan-navy text-spartan-navy py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors">
                    <span>Book a Service</span>
                </a>
            </div>
        </div>

        <!-- Right: Locations list -->
        <div class="flex flex-col justify-center divide-y divide-slate-100 border-y border-slate-100">
            <?php foreach ($site_locations as $loc): ?>
            <div class="py-7 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <div class="flex items-center space-x-3 mb-2">
                        <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.12em] uppercase">
                            <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($loc['city']); ?></a>
                        </h3>
                        <span class="<?php echo $loc['badge_style'] === 'teal' ? 'bg-spartan-teal' : 'bg-spartan-navy'; ?> text-white text-[8px] px-2 py-0.5 font-mono font-bold tracking-wider uppercase"><?php echo site_escape($loc['badge']); ?></span>
                    </div>
                    <p class="text-xs text-slate-500 font-light"><?php echo site_escape($loc['address']); ?> · <a href="<?php echo site_escape($loc['phone_href']); ?>" class="hover:text-spartan-teal transition-colors"><?php echo site_escape($loc['phone_label'] ?? $loc['phone']); ?></a></p>
                </div>
                <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="text-spartan-teal hover:text-spartan-navy text-[10px] font-bold tracking-[0.2em] inline-flex items-center uppercase transition-colors shrink-0">
                    <span>Details</span>
                    <i class="fa-solid fa-arrow-right text-[10px] ml-1.5"></i>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
