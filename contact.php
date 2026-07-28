<?php
$page_title = 'Talk to Our Industry Experts | Spartan Industrial Marine';
$meta_description = "Need a product, service, repair, or expert advice? Talk to our team at Spartan Industrial Marine. We're here to help you find the right solution.";
$active_nav = 'contact';
require_once __DIR__ . '/partials/header.php';
?>

    <!-- Contact hero + lead form -->
    <section class="relative overflow-hidden bg-white border-b border-slate-100">
        <div class="absolute inset-x-0 top-0 h-[450px] md:h-[450px] overflow-hidden bg-spartan-navy" aria-hidden="true">
            <img src="assets/images/j9/spartan-store-interior.webp" alt="" class="absolute inset-0 w-full h-full object-cover opacity-25">
            <div class="absolute inset-0 bg-gradient-to-r from-spartan-navy via-spartan-navy/90 to-spartan-navy/65"></div>
            <div class="absolute -right-24 top-16 h-44 w-[560px] bg-spartan-teal opacity-[0.08] pointer-events-none" style="-webkit-mask: url('assets/images/right-wave.svg') right center / contain no-repeat; mask: url('assets/images/right-wave.svg') right center / contain no-repeat;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 md:pt-20 pb-20 md:pb-32 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start select-text">
                <div>
                    <div class="w-14 h-4 bg-spartan-teal mb-6" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                    <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-4">CONTACT SPARTAN</span>
                    <h1 class="font-oswald text-3xl md:text-4xl lg:text-5xl font-bold tracking-widest text-white uppercase leading-tight mb-6">
                        Talk to Someone Who Understands Marine Operations
                    </h1>
                    <p class="text-base text-slate-200 font-light leading-relaxed max-w-xl mb-0">
                        Find the right products, repairs, rentals, or services to keep your operation moving. Share your project details and a member of our team will follow up within 24 hours with next steps.
                    </p>

                    <div class="max-w-xl mt-24">
                        <ul class="space-y-4 text-base text-slate-700 font-light leading-relaxed mb-8">
                            <li class="flex gap-3">
                                <i class="fa-solid fa-check text-spartan-teal text-xs mt-1.5"></i>
                                <span>Guidance from a team with hands-on marine industry experience.</span>
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-check text-spartan-teal text-xs mt-1.5"></i>
                                <span>Fast access to the products and solutions you need.</span>
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-check text-spartan-teal text-xs mt-1.5"></i>
                                <span>Reduced costly downtime with support from experts.</span>
                            </li>
                            <li class="flex gap-3">
                                <i class="fa-solid fa-check text-spartan-teal text-xs mt-1.5"></i>
                                <span>Access shipping, branch pickup, and in-person support across Atlantic Canada.</span>
                            </li>
                        </ul>

                        <div class="border-l-2 border-spartan-teal pl-6">
                            <div class="flex items-center gap-1 text-spartan-teal text-xs mb-4" aria-label="Five star testimonial">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-sm text-slate-700 font-light leading-relaxed mb-4">
                                "Spartan has always taken a personal approach to looking after our vessels in any port they have been working out of."
                            </p>
                            <div>
                                <span class="font-oswald text-sm font-bold text-spartan-navy tracking-wider uppercase block">Mark Gourdreau</span>
                                <span class="text-[10px] text-slate-400 tracking-wider uppercase block mt-0.5">Procurement Specialist, Atlantic Towing Ltd</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 p-6 md:p-8 lg:p-10 shadow-[0_22px_70px_rgba(12,27,36,0.14)]">
                    <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight mb-3">Send A Message</h2>
                    <p class="text-sm text-slate-600 font-light leading-relaxed mb-8">
                        The more detail you share, the faster we can route your request to the right product, service, or branch team.
                    </p>
                    <form onsubmit="event.preventDefault(); alert('Contact form mockup: message sent!'); this.reset();" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">First Name *</label>
                                <input type="text" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="First name">
                            </div>
                            <div>
                                <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Last Name *</label>
                                <input type="text" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Last name">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Phone</label>
                                <input type="tel" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Best number to reach you">
                            </div>
                            <div>
                                <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Email *</label>
                                <input type="email" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="you@company.ca">
                            </div>
                        </div>

                        <div>
                            <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">What do you need? *</label>
                            <select required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                                <option value="">Select one...</option>
                                <option>Product quote or availability</option>
                                <option>Book a service, repair, or inspection</option>
                                <option>Rental support</option>
                                <option>Commercial or fleet account support</option>
                                <option>Vessel or project advice</option>
                                <option>Something else</option>
                            </select>
                        </div>

                        <div>
                            <label class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Message *</label>
                            <textarea required rows="5" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Vessel, gear, quantities, timelines. The more detail, the faster the answer."></textarea>
                        </div>

                        <button type="submit" class="w-full sm:w-auto bg-spartan-teal text-white py-4 px-10 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Branch contact panels -->
    <section class="py-14 md:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 select-text">
            <div class="bg-spartan-navy p-8 lg:p-10 relative overflow-hidden">
                <div class="absolute -right-12 -bottom-6 w-[300px] h-20 bg-spartan-teal opacity-10 pointer-events-none" style="-webkit-mask: url('assets/images/full-wave.svg') center / contain no-repeat; mask: url('assets/images/full-wave.svg') center / contain no-repeat;" aria-hidden="true"></div>
                <div class="relative z-10">
                    <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.25em] uppercase block mb-2">PREFER THE PHONE?</span>
                    <h2 class="font-oswald text-xl md:text-2xl font-bold text-white tracking-widest uppercase leading-tight mb-7">Call Any Branch</h2>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-x-8 gap-y-5 text-xs text-slate-300 font-light">
                        <?php foreach ($site_locations as $loc): ?>
                        <li class="border-b border-white/10 pb-4">
                            <a href="<?php echo site_escape(site_location_url($loc)); ?>" class="font-oswald text-xs font-bold text-white hover:text-spartan-teal tracking-[0.12em] uppercase block mb-1 transition-colors"><?php echo site_escape($loc['city']); ?></a>
                            <span class="block leading-relaxed mb-2"><?php echo site_escape($loc['street_address'] ?? $loc['address']); ?></span>
                            <a href="<?php echo site_escape($loc['phone_href']); ?>" class="text-spartan-teal hover:text-spartan-teal-light transition-colors font-semibold"><?php echo site_escape($loc['phone_label'] ?? $loc['phone']); ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="border border-slate-200 p-8 lg:p-10 bg-white">
                <h2 class="font-oswald text-xl md:text-2xl font-bold text-spartan-navy tracking-widest uppercase leading-tight mb-7">Hours & Email</h2>
                <ul class="space-y-5 text-sm text-slate-700">
                    <li class="flex items-center space-x-4">
                        <span class="w-11 h-11 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-clock text-sm"></i></span>
                        <span class="text-sm font-light"><?php echo site_escape($site['hours']); ?> Atlantic</span>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="w-11 h-11 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-envelope text-sm"></i></span>
                        <a href="mailto:<?php echo site_escape($site['email']); ?>" class="text-sm font-semibold hover:text-spartan-teal transition-colors"><?php echo site_escape($site['email']); ?></a>
                    </li>
                    <li class="flex items-center space-x-4">
                        <span class="w-11 h-11 shrink-0 bg-spartan-light-gray text-spartan-teal flex items-center justify-center"><i class="fa-solid fa-location-dot text-sm"></i></span>
                        <a href="locations.php" class="text-sm font-semibold hover:text-spartan-teal transition-colors">View All Locations & Directions</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
