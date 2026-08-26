<?php
$page_title = 'Lobster & Crab Trap Production | Spartan Industrial Marine';
$meta_description = 'Contact Spartan Industrial Marine about lobster and crab trap production for commercial fishing operations in Atlantic Canada.';
$active_nav = 'production';
require_once __DIR__ . '/partials/header.php';

$production_contact_url = '#trap-production-form';

$hero = [
    'eyebrow' => 'Commercial fishing production',
    'title' => 'Lobster & Crab Trap Production',
    'subtitle' => 'Talk with Spartan about trap type, quantity, specifications, and timing for your commercial fishing operation.',
    'image' => 'assets/images/lobster-traps.jpg',
    'button_label' => 'Start a Trap Production Inquiry',
    'button_url' => $production_contact_url,
    'button_spacing_class' => 'pt-8',
    'show_breadcrumbs' => false,
    'overlay_class' => 'bg-gradient-to-b from-spartan-navy/55 via-spartan-navy/70 to-spartan-navy/90',
];
require_once __DIR__ . '/components/page-hero.php';
?>

    <section class="bg-white py-16 md:py-24 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                <div class="relative min-h-[360px] md:min-h-[460px] overflow-hidden bg-spartan-light-gray">
                    <img src="assets/images/lobster-traps.jpg" alt="Lobster traps on a working waterfront" class="absolute inset-0 h-full w-full object-cover">
                </div>

                <div class="lg:py-6">
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-6">
                        Lobster and crab trap production.
                    </h2>
                    <p class="text-base md:text-lg text-slate-600 font-light leading-relaxed max-w-2xl">
                        Tell us the trap type, quantity, any dimensions or drawings, and when you need them. We’ll review the details and get back to you.
                    </p>

                    <div class="mt-9 border-y border-slate-200 divide-y divide-slate-200">
                        <a href="#trap-production-form" onclick="document.getElementById('production-trap-type').value = 'lobster';" class="group flex items-center justify-between gap-6 py-5 text-spartan-navy hover:text-spartan-teal transition-colors">
                            <span>
                                <span class="font-oswald text-lg font-bold tracking-widest uppercase block">Lobster Traps</span>
                                <span class="mt-1 text-sm text-slate-500 font-light block">Begin a lobster trap inquiry.</span>
                            </span>
                            <i class="fa-solid fa-arrow-right text-xs text-spartan-teal transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                        <a href="#trap-production-form" onclick="document.getElementById('production-trap-type').value = 'crab';" class="group flex items-center justify-between gap-6 py-5 text-spartan-navy hover:text-spartan-teal transition-colors">
                            <span>
                                <span class="font-oswald text-lg font-bold tracking-widest uppercase block">Crab Traps</span>
                                <span class="mt-1 text-sm text-slate-500 font-light block">Begin a crab trap inquiry.</span>
                            </span>
                            <i class="fa-solid fa-arrow-right text-xs text-spartan-teal transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-spartan-light-gray py-16 md:py-24 scroll-mt-32" id="trap-production-form">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <div class="lg:col-span-5 lg:sticky lg:top-32">
                    <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4">What to include</span>
                    <h2 class="font-oswald text-3xl md:text-5xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-5">Help us understand the request.</h2>
                    <p class="text-base text-slate-600 font-light leading-relaxed">Send us the details you have, and our production team will confirm the next steps.</p>

                    <div class="mt-9 border-y border-slate-300 divide-y divide-slate-300">
                        <?php
                        $request_details = [
                            ['number' => '01', 'title' => 'Trap Type', 'text' => 'Lobster traps, crab traps, or both.'],
                            ['number' => '02', 'title' => 'Quantity', 'text' => 'The approximate number of traps required.'],
                            ['number' => '03', 'title' => 'Specifications', 'text' => 'Drawings, dimensions, or other available requirements.'],
                            ['number' => '04', 'title' => 'Timing', 'text' => 'When they are needed and where the operation is based.'],
                        ];
                        foreach ($request_details as $detail):
                        ?>
                        <article class="grid grid-cols-[48px_minmax(0,1fr)] gap-4 py-5">
                            <span class="font-oswald text-2xl font-bold text-spartan-teal/45 tracking-wider"><?php echo site_escape($detail['number']); ?></span>
                            <div>
                                <h3 class="font-oswald text-sm font-bold tracking-widest text-spartan-navy uppercase mb-1.5"><?php echo site_escape($detail['title']); ?></h3>
                                <p class="text-sm text-slate-600 font-light leading-relaxed"><?php echo site_escape($detail['text']); ?></p>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="lg:col-span-7">
                    <form onsubmit="event.preventDefault(); alert('Trap production inquiry mockup: request sent!'); this.reset();" class="bg-white border border-slate-200 p-7 md:p-10 shadow-sm space-y-6" aria-labelledby="trap-production-form-title">
                        <input type="hidden" name="need" value="trap-production">
                        <div class="border-b border-slate-200 pb-6">
                            <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.24em] uppercase block mb-2">Production inquiry</span>
                            <h2 id="trap-production-form-title" class="font-oswald text-2xl md:text-3xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">Tell us what you need produced.</h2>
                            <p class="mt-3 text-sm text-slate-600 font-light leading-relaxed">Fields marked with an asterisk are required. Approximate details are fine.</p>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="production-first-name" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">First Name *</label>
                                <input id="production-first-name" name="first_name" type="text" required autocomplete="given-name" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="First name">
                            </div>
                            <div>
                                <label for="production-last-name" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Last Name *</label>
                                <input id="production-last-name" name="last_name" type="text" required autocomplete="family-name" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Last name">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="production-email" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Email *</label>
                                <input id="production-email" name="email" type="email" required autocomplete="email" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="you@company.ca">
                            </div>
                            <div>
                                <label for="production-phone" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Phone</label>
                                <input id="production-phone" name="phone" type="tel" autocomplete="tel" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Best number to reach you">
                            </div>
                        </div>

                        <div>
                            <label for="production-company" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Company, Vessel, or Operation</label>
                            <input id="production-company" name="company" type="text" autocomplete="organization" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Business, vessel, or fishing operation">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="production-trap-type" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Trap Type *</label>
                                <select id="production-trap-type" name="trap_type" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                                    <option value="">Select one...</option>
                                    <option value="lobster">Lobster traps</option>
                                    <option value="crab">Crab traps</option>
                                    <option value="both">Lobster and crab traps</option>
                                </select>
                            </div>
                            <div>
                                <label for="production-quantity" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Approximate Quantity *</label>
                                <input id="production-quantity" name="quantity" type="number" min="1" step="1" required inputmode="numeric" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Number of traps">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="production-location" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Operation Location *</label>
                                <input id="production-location" name="location" type="text" required class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Community and province">
                            </div>
                            <div>
                                <label for="production-required-date" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Required By</label>
                                <input id="production-required-date" name="required_date" type="date" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                            </div>
                        </div>

                        <div>
                            <label for="production-specifications" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Specifications and Requirements *</label>
                            <textarea id="production-specifications" name="specifications" required rows="6" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Share dimensions, construction requirements, reference details, and anything else the production team should know."></textarea>
                        </div>

                        <div>
                            <label for="production-attachments" class="font-oswald text-[10px] font-bold text-spartan-navy tracking-[0.2em] uppercase block mb-2">Drawings or Reference Files</label>
                            <input id="production-attachments" name="attachments[]" type="file" multiple accept=".pdf,.jpg,.jpeg,.png,.doc,.docx" class="block w-full border border-slate-200 bg-white text-sm text-slate-600 file:mr-4 file:border-0 file:bg-spartan-light-gray file:px-4 file:py-3 file:font-oswald file:text-[10px] file:font-bold file:tracking-[0.16em] file:uppercase file:text-spartan-navy hover:file:bg-slate-200">
                            <p class="mt-2 text-xs text-slate-500 font-light">Optional: PDF, JPG, PNG, DOC, or DOCX files.</p>
                        </div>

                        <button type="submit" class="w-full sm:w-auto bg-spartan-teal text-white py-4 px-8 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                            Send Production Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
