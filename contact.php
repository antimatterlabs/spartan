<?php
$page_title = 'Contact | Spartan Industrial Marine';
$meta_description = 'Contact Spartan Industrial Marine for marine safety equipment, inspection support, service bookings, and branch locations across Atlantic Canada.';
$active_nav = 'contact';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Contact Us',
    'subtitle' => 'Phone, email, or walk up to the counter. Describe the job and we will spec it with you.',
    'image' => 'assets/images/j9/spartan-store-interior.webp',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'Contact'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <!-- Contact form + info -->
    <section class="py-16 md:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-14 select-text">

            <!-- Form -->
            <div class="lg:col-span-3">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-3">Send A Message</h2>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-10 max-w-lg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
                <form onsubmit="event.preventDefault(); alert('Contact form mockup: message sent!'); this.reset();" class="space-y-5 max-w-xl">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Name *</label>
                            <input type="text" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Your name">
                        </div>
                        <div>
                            <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Phone</label>
                            <input type="tel" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Best number to reach you">
                        </div>
                    </div>
                    <div>
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Email *</label>
                        <input type="email" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="you@company.ca">
                    </div>
                    <div>
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">What do you need? *</label>
                        <select required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                            <option value="">Select one...</option>
                            <option>Book a service (raft, suit, rigging, testing)</option>
                            <option>Product quote or availability</option>
                            <option>Set up a commercial / fleet account</option>
                            <option>Vessel or fleet outfitting</option>
                            <option>Something else</option>
                        </select>
                    </div>
                    <div>
                        <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Message *</label>
                        <textarea required rows="5" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Vessel, gear, quantities, timelines. The more detail, the faster the answer."></textarea>
                    </div>
                    <button type="submit" class="bg-spartan-teal text-white py-4 px-10 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Direct contact sidebar -->
            <aside class="lg:col-span-2 space-y-6">
                <div class="bg-spartan-navy p-8 relative overflow-hidden">
                    <div class="absolute -right-12 -bottom-6 w-[300px] h-20 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <div class="relative z-10">
                        <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">PREFER THE PHONE?</span>
                        <h3 class="font-oswald text-xl font-bold text-white tracking-wider uppercase leading-tight mb-5">Call Any Branch</h3>
                        <ul class="space-y-4 text-xs text-slate-300 font-light">
                            <?php foreach ($site_locations as $loc): ?>
                            <li class="flex items-start justify-between border-b border-slate-800 pb-4 last:border-0 last:pb-0">
                                <div>
                                    <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="font-oswald text-xs font-bold text-white hover:text-spartan-teal tracking-[0.12em] uppercase block mb-1 transition-colors"><?php echo site_escape($loc['city']); ?></a>
                                    <span class="block"><?php echo site_escape($loc['address']); ?></span>
                                </div>
                                <a href="<?php echo site_escape($loc['phone_href']); ?>" class="text-spartan-teal hover:text-spartan-teal-light transition-colors font-semibold shrink-0 ml-4"><?php echo site_escape($loc['phone_label'] ?? $loc['phone']); ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="border border-slate-100 p-8">
                    <h3 class="font-oswald text-sm font-bold text-spartan-navy tracking-[0.2em] uppercase mb-5">Hours & Email</h3>
                    <ul class="space-y-4 text-sm text-slate-700">
                        <li class="flex items-center space-x-4">
                            <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-clock text-sm"></i></span>
                            <span class="text-xs font-light"><?php echo $site['hours']; ?></span>
                        </li>
                        <li class="flex items-center space-x-4">
                            <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-envelope text-sm"></i></span>
                            <a href="mailto:<?php echo $site['email']; ?>" class="text-xs font-semibold hover:text-spartan-teal transition-colors"><?php echo $site['email']; ?></a>
                        </li>
                        <li class="flex items-center space-x-4">
                            <span class="w-10 h-10 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-location-dot text-sm"></i></span>
                            <a href="locations.php" class="text-xs font-semibold hover:text-spartan-teal transition-colors">View All Locations & Directions</a>
                        </li>
                    </ul>
                </div>
            </aside>

        </div>
    </section>

    <!-- CTA -->
    <?php require_once __DIR__ . '/components/cta-band.php'; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
