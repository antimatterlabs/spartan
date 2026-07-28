<?php
$page_title = 'Frequently Asked Questions | Spartan Industrial Marine';
$meta_description = "Find answers to common questions about Spartan Marine's products, shipping, locations, marine services, commercial fishing supplies, and customer support.";
$active_nav = 'faq';
require_once __DIR__ . '/partials/header.php';

$hero = [
    'title' => 'Frequently Asked Questions',
    'subtitle' => "Find answers to common questions about our marine products, commercial fishing supplies, shipping, store locations, and customer services. If you can't find what you're looking for, our team is here to help.",
    'image' => 'assets/images/j9/spartan-store-interior.webp',
    'button_label' => 'Talk to Our Team',
    'button_url' => 'contact.php',
    'breadcrumbs' => [
        ['label' => 'Home', 'url' => 'index.php'],
        ['label' => 'FAQ'],
    ],
];
require_once __DIR__ . '/components/page-hero.php';

$products_url = 'products.php';
$rope_url = site_product_group_url('rope-line-nets');
$fierce_url = 'search.php?q=' . rawurlencode('Fierce Workwear');
$immersion_suits_url = site_product_category_url('Immersion Suits');
$locations_by_province = [
    'Nova Scotia (NS)' => ['dartmouth-ns', 'sydney-ns', 'yarmouth-ns', 'barrington-passage-ns'],
    'Newfoundland and Labrador (NL)' => ['paradise-nl'],
    'New Brunswick (NB)' => ['caraquet-nb'],
    'Prince Edward Island (PEI)' => ['charlottetown-pei'],
];
$locations_by_slug = [];
foreach ($site_locations as $location) {
    $locations_by_slug[$location['slug']] = $location;
}

$location_answer = '<p>Spartan Marine operates multiple locations throughout Atlantic Canada, making it convenient for customers to access products, services, and technical support close to where they work. See our locations:</p>';
$location_answer .= '<div class="mt-5 space-y-5">';
foreach ($locations_by_province as $province_label => $slugs) {
    $location_answer .= '<div>';
    $location_answer .= '<h4 class="font-oswald text-xs font-bold tracking-[0.2em] uppercase text-spartan-navy mb-2">' . site_escape($province_label) . '</h4>';
    $location_answer .= '<ul class="space-y-2">';
    foreach ($slugs as $slug) {
        if (empty($locations_by_slug[$slug])) {
            continue;
        }
        $location = $locations_by_slug[$slug];
        $location_answer .= '<li><a href="' . site_escape(site_location_url($location)) . '" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">' . site_escape($location['city']) . '</a>: ' . site_escape($location['address']) . '</li>';
    }
    $location_answer .= '</ul>';
    $location_answer .= '</div>';
}
$location_answer .= '</div>';

$faq_items = [
    [
        'q' => 'What products does Spartan Marine offer?',
        'a' => 'Spartan Marine supplies a wide range of marine products, including safety equipment, commercial fishing gear, <a href="' . site_escape($rope_url) . '" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">ropes</a>, rigging, marine hardware, paints, electrical supplies, navigation equipment, pumps, clothing, and boat maintenance products for commercial, industrial, and recreational marine applications.',
        'cta_label' => 'Browse Products',
        'cta_url' => $products_url,
    ],
    [
        'q' => 'What brands of marine apparel and foul weather gear do you carry?',
        'a' => 'We carry top-tier brands built to survive the harshest ocean environments, including Grundéns, Helly Hansen, Viking, Stormline, and Dunlop industrial footwear. We are also the exclusive home of Fierce Workwear, our proprietary line of high-quality clothing and boots engineered specifically for Atlantic Canadian commercial fishermen.',
    ],
    [
        'q' => 'What is Fierce Workwear?',
        'a' => '<a href="' . site_escape($fierce_url) . '" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">Fierce Workwear and Outdoor Apparel</a> is Spartan Marine\'s exclusive brand of premium commercial clothing. Thoughtfully designed to endure the rigors of heavy marine work, the lineup includes highly durable foul weather jackets, bib pants, Fierce Frontier waterproof polyurethane boots, thermo boots, and specialized protective gloves.',
    ],
    [
        'q' => 'Can you source hard-to-find marine parts or equipment?',
        'a' => 'Yes. If you cannot find a specific marine product, Spartan Marine can often source specialty parts and equipment through its extensive supplier network. Contact your nearest location with your requirements for assistance.',
    ],
    [
        'q' => 'Do you provide marine inspections and repair services?',
        'a' => 'Yes. Spartan Marine offers <a href="services.php" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">inspections, testing, repairs, certifications, and other marine support services</a> to help keep vessels operating safely and in compliance with industry standards.',
    ],
    [
        'q' => 'What is CertTracker and how does it benefit vessel operators?',
        'a' => '<a href="certtracker.php" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">CertTracker</a> is our free, 100% web-based certificate tracking system that grants you 24/7 access to your current and past equipment inspection certificates from any computer. It eliminates downtime caused by expired paperwork, tracks historical assets, and sends proactive notifications when your equipment is due for its next inspection, even for products you did not buy from us.',
    ],
    [
        'q' => 'Can Spartan Marine manufacture custom fishing gear and rigging?',
        'a' => 'Absolutely. Spartan Marine specializes in custom solutions, including netting, trawls, traps, rigging, and other commercial fishing equipment designed to meet your specific operational needs.',
    ],
    [
        'q' => 'Where are Spartan Marine locations?',
        'a' => $location_answer,
    ],
    [
        'q' => 'Do you offer same-day or next-day shipping?',
        'a' => 'Many in-stock products can be shipped the same day or overnight between Spartan Marine locations, depending on product availability and destination. Contact your local branch for delivery options.',
    ],
    [
        'q' => 'What marine safety equipment do you carry?',
        'a' => 'Spartan Marine stocks a comprehensive selection of marine safety equipment, including life jackets, <a href="' . site_escape($immersion_suits_url) . '" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">immersion suits</a>, liferafts, emergency signaling devices, survival equipment, first aid supplies, and other safety essentials.',
    ],
    [
        'q' => 'Do you carry products for boat maintenance and repairs?',
        'a' => 'Yes. Spartan Marine offers everything needed for vessel maintenance, including paints and coatings, adhesives, sealants, electrical components, pumps, engine supplies, cleaning products, and marine tools.',
    ],
    [
        'q' => 'How can I contact Spartan Marine for product recommendations or technical support?',
        'a' => 'You can contact your nearest Spartan Marine location by phone or submit a message using our <a href="contact.php" class="font-bold text-spartan-teal hover:text-spartan-navy transition-colors">contact form</a> to speak with our expert team who can recommend the right products and solutions for your vessel or marine operation.',
    ],
];
?>

    <!-- FAQ accordion -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 select-text">
            <div class="text-center mb-12">
                <span class="font-oswald text-[10px] font-bold text-spartan-teal tracking-[0.3em] uppercase block mb-4">Support</span>
                <h2 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight">
                    Frequently Asked Questions
                </h2>
            </div>

            <div class="divide-y divide-slate-100 border-y border-slate-100">
                <?php foreach ($faq_items as $faq): ?>
                <div>
                    <button onclick="toggleFaq(this)" class="w-full py-6 flex items-center justify-between text-left group">
                        <h3 class="font-oswald text-base md:text-lg font-bold text-spartan-navy tracking-wide uppercase pr-6 group-hover:text-spartan-teal transition-colors"><?php echo site_escape($faq['q']); ?></h3>
                        <i class="fa-solid fa-plus text-spartan-teal text-sm shrink-0 transition-transform duration-200"></i>
                    </button>
                    <div class="hidden pb-6">
                        <div class="text-sm text-slate-600 font-light leading-relaxed max-w-3xl space-y-4">
                            <?php echo $faq['a']; ?>
                            <?php if (!empty($faq['cta_label']) && !empty($faq['cta_url'])): ?>
                                <div class="pt-2">
                                    <a href="<?php echo site_escape($faq['cta_url']); ?>" class="inline-flex items-center bg-spartan-teal text-white py-3 px-5 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">
                                        <span><?php echo site_escape($faq['cta_label']); ?></span>
                                        <i class="fa-solid fa-arrow-right text-[10px] ml-2"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Still stuck strip -->
            <div class="mt-14 bg-spartan-light-gray p-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-6">
                <div>
                    <h3 class="font-oswald text-lg font-bold text-spartan-navy tracking-[0.15em] uppercase mb-1.5">Didn't find your answer?</h3>
                    <p class="text-sm text-slate-600 font-light">Call <?php echo site_escape($site['phone']); ?> or send a message. A Spartan team member will help route your question.</p>
                </div>
                <a href="contact.php" class="inline-flex items-center bg-spartan-teal text-white py-3.5 px-7 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors shrink-0">
                    <span>Talk to Our Team</span>
                    <i class="fa-solid fa-arrow-right text-[11px] ml-2.5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta = [
        'eyebrow' => 'Need a direct answer?',
        'title' => 'Talk to someone who knows the gear.',
        'text' => 'Send us your product, service, shipping, or location question and Spartan will point you toward the right branch, counter team, or service contact.',
        'button_label' => 'Contact Us',
        'button_url' => 'contact.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
