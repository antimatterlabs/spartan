<?php
require_once __DIR__ . '/partials/data.php';

function pd_variant_has_selection($variant, $selection) {
    $options = is_array($variant['options'] ?? null) ? $variant['options'] : [];

    foreach ($selection as $option_name => $value) {
        if ($value === '') {
            continue;
        }

        if (($options[$option_name] ?? '') !== $value) {
            return false;
        }
    }

    return true;
}

function pd_variant_for_picker_choice($variants, $selection, $option_name, $value) {
    $candidate_selection = $selection;
    $candidate_selection[$option_name] = $value;

    foreach ($variants as $variant) {
        if (pd_variant_has_selection($variant, $candidate_selection)) {
            return $variant;
        }
    }

    foreach ($variants as $variant) {
        $options = is_array($variant['options'] ?? null) ? $variant['options'] : [];
        if (($options[$option_name] ?? '') === $value) {
            return $variant;
        }
    }

    return null;
}

function pd_variant_picker_groups($variants, $option_names, $selected_variant) {
    $selected_options = is_array($selected_variant['options'] ?? null) ? $selected_variant['options'] : [];
    $groups = [];

    foreach ($option_names as $option_name) {
        $seen_values = [];
        $choices = [];

        foreach ($variants as $variant) {
            $options = is_array($variant['options'] ?? null) ? $variant['options'] : [];
            $value = site_catalog_clean_value($options[$option_name] ?? '');
            if ($value === '' || isset($seen_values[$value])) {
                continue;
            }

            $target_variant = pd_variant_for_picker_choice($variants, $selected_options, $option_name, $value);
            $choices[] = [
                'label' => $value,
                'url' => $target_variant['url'] ?? '',
                'active' => ($selected_options[$option_name] ?? '') === $value,
                'available' => $target_variant !== null,
            ];
            $seen_values[$value] = true;
        }

        if (!empty($choices)) {
            $groups[] = [
                'name' => $option_name,
                'selected' => $selected_options[$option_name] ?? '',
                'choices' => $choices,
            ];
        }
    }

    return $groups;
}

$requested_slug = trim((string) ($_GET['slug'] ?? ''));
$requested_variant = trim((string) ($_GET['variant'] ?? ''));
$product = $requested_slug !== '' ? site_product_by_slug($requested_slug) : null;
$product = $product ?? $site_products[0];
$pd_variant_options = is_array($product['variants'] ?? null) ? $product['variants'] : [];
$pd_has_variants = count($pd_variant_options) > 1;
$pd_variant_option_names = $product['variant_option_names'] ?? [];
$pd_selected_variant = null;

if ($pd_has_variants) {
    foreach ($pd_variant_options as $variant) {
        $variant_sku = site_catalog_clean_value($variant['sku'] ?? '');
        if ($requested_variant !== '' && strcasecmp($variant_sku, $requested_variant) === 0) {
            $pd_selected_variant = $variant;
            break;
        }
    }

    if ($pd_selected_variant === null) {
        foreach ($pd_variant_options as $variant) {
            if (($variant['slug'] ?? '') === ($product['slug'] ?? '')) {
                $pd_selected_variant = $variant;
                break;
            }
        }
    }

    $pd_selected_variant = $pd_selected_variant ?? $pd_variant_options[0];
}

$pd_title_source = $pd_has_variants ? ($product['variant_group_name'] ?? $product['name']) : $product['name'];
$pd_display_name = html_entity_decode(strip_tags($pd_title_source), ENT_QUOTES, 'UTF-8');
$pd_variant_row_name = html_entity_decode(strip_tags($product['name']), ENT_QUOTES, 'UTF-8');
$pd_selected_sku = $pd_selected_variant['sku'] ?? ($product['sku'] ?? '');
$pd_selected_label = $pd_selected_variant['label'] ?? '';
$pd_selected_summary = $pd_selected_label !== '' ? $pd_selected_label : $pd_variant_row_name;
$pd_variant_picker_groups = $pd_has_variants ? pd_variant_picker_groups($pd_variant_options, $pd_variant_option_names, $pd_selected_variant) : [];
$page_title = $pd_display_name . ' | Spartan Industrial Marine';
$active_nav = 'products';
$pd_js_image = str_replace("'", "\\'", $product['image']);
$pd_selected_price = $pd_selected_variant['price'] ?? null;
$pd_has_price = isset($pd_selected_price) && is_numeric($pd_selected_price);
if (!$pd_has_price) {
    $pd_has_price = isset($product['price']) && is_numeric($product['price']);
    $pd_selected_price = $pd_has_price ? $product['price'] : null;
}
$pd_price = $pd_has_price ? (float) $pd_selected_price : null;
$pd_quote_bits = array_filter([$pd_selected_label, $pd_selected_sku]);
$pd_quote_product_name = $pd_has_variants && !empty($pd_quote_bits)
    ? $pd_display_name . ' - ' . implode(' / ', $pd_quote_bits)
    : $pd_display_name;
$pd_js_name = str_replace(["'", '&Prime;'], ["\\'", ' in'], $pd_quote_product_name);
$pd_quote_url = 'contact.php?product=' . rawurlencode($pd_quote_product_name);
$pd_related_products = array_values(array_filter($site_products, function ($item) use ($product) {
    return ($item['slug'] ?? '') !== ($product['slug'] ?? '');
}));
$pd_group_slug = $product['category_group'] ?? '';
$pd_group_name = $product['category_group_name'] ?? '';
$pd_category_name = $product['category_name'] ?? ($product['category_label'] ?? '');
$pd_category_url = site_product_category_url_for_product($product);
$pd_brand = site_product_brand_for_product($product);
$pd_normalize_breadcrumb = static function ($label) {
    $label = strtolower(html_entity_decode(strip_tags((string) $label), ENT_QUOTES, 'UTF-8'));
    $label = str_replace(['&', '/'], ' ', $label);
    $parts = preg_split('/[^a-z0-9]+/', $label, -1, PREG_SPLIT_NO_EMPTY);
    sort($parts);
    return implode('-', array_unique($parts));
};
$pd_show_category_breadcrumb = $pd_category_name !== ''
    && ($pd_group_name === '' || $pd_normalize_breadcrumb($pd_category_name) !== $pd_normalize_breadcrumb($pd_group_name));

require_once __DIR__ . '/partials/header.php';
?>

    <!-- Breadcrumb strip (no big hero on product pages) -->
    <div class="bg-spartan-light-gray border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
            <nav class="flex items-center space-x-2 text-[10px] md:text-xs font-mono font-bold tracking-widest text-spartan-teal uppercase select-text">
                <a href="index.php" class="hover:text-spartan-navy transition-colors">HOME</a>
                <span class="text-slate-400 font-light">/</span>
                <a href="products.php" class="hover:text-spartan-navy transition-colors">PRODUCTS</a>
                <span class="text-slate-400 font-light">/</span>
                <?php if ($pd_group_slug !== '' && $pd_group_name !== ''): ?>
                <a href="<?php echo site_escape(site_product_group_url($pd_group_slug)); ?>" class="hover:text-spartan-navy transition-colors"><?php echo site_escape($pd_group_name); ?></a>
                <?php if ($pd_show_category_breadcrumb): ?>
                <span class="text-slate-400 font-light">/</span>
                <?php endif; ?>
                <?php endif; ?>
                <?php if ($pd_show_category_breadcrumb): ?>
                <a href="<?php echo site_escape($pd_category_url); ?>" class="hover:text-spartan-navy transition-colors"><?php echo site_escape($pd_category_name); ?></a>
                <?php endif; ?>
            </nav>
        </div>
    </div>

    <!-- Product detail -->
    <section class="py-14 md:py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">

            <!-- Gallery -->
            <div class="space-y-4">
                <div class="relative bg-white border border-slate-100 h-[360px] md:h-[520px] flex items-center justify-center overflow-hidden">
                    <img id="product-main-image" src="<?php echo site_escape($product['image']); ?>" alt="<?php echo site_escape($pd_display_name); ?>" class="<?php echo !empty($product['contain']) ? 'h-full w-auto object-contain' : 'h-full w-full object-cover'; ?>">
                </div>
                <div class="grid grid-cols-4 gap-2 md:gap-4">
                    <?php $thumbs = [$product['image'], 'assets/images/j9/immersion-suit-testing.webp', 'assets/images/j9/marine-safety.webp', 'assets/images/j9/life-raft-inspection.webp']; ?>
                    <?php foreach ($thumbs as $i => $thumb): ?>
                    <button onclick="document.getElementById('product-main-image').src='<?php echo site_escape($thumb); ?>'" class="border <?php echo $i === 0 ? 'border-spartan-teal' : 'border-slate-100 hover:border-spartan-teal'; ?> h-20 md:h-24 flex items-center justify-center bg-white overflow-hidden transition-colors">
                        <img src="<?php echo site_escape($thumb); ?>" alt="Product view <?php echo $i + 1; ?>" class="h-full w-full object-cover">
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Details -->
            <div class="flex flex-col justify-center">
                <span class="font-oswald text-xs md:text-sm font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-4"><?php echo site_escape($product['category_label']); ?></span>
                <h1 class="font-oswald text-3xl md:text-4xl font-bold tracking-wider text-spartan-navy uppercase leading-tight mb-4">
                    <?php echo site_escape($pd_display_name); ?>
                </h1>
                <?php if ($pd_has_price): ?>
                <div class="flex items-baseline space-x-3 mb-6">
                    <span class="font-sans text-2xl font-bold text-slate-800">$<?php echo number_format($pd_price, 2); ?> <span class="text-xs text-slate-400 font-normal"><?php echo site_escape($product['price_suffix'] ?? ''); ?> CAD</span></span>
                    <span class="inline-flex items-center text-xs font-bold tracking-wider text-spartan-teal uppercase"><i class="fa-solid fa-circle-check mr-1.5"></i>In Stock, All Locations</span>
                </div>
                <?php endif; ?>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-8 max-w-lg">
                    <?php echo site_escape($product['desc']); ?>
                </p>

                <?php
                $pd_detail_rows = array_filter([
                    'Brand' => $pd_brand['label'] ?? ($product['brand_name'] ?? ($product['vendor'] ?? '')),
                ]);
                ?>
                <?php if (!empty($pd_detail_rows)): ?>
                <div class="max-w-md border-y border-slate-100 divide-y divide-slate-100 mb-8">
                    <?php foreach ($pd_detail_rows as $label => $value): ?>
                    <div class="py-3 <?php echo $label === 'Brand' ? '' : 'grid grid-cols-[110px_1fr] gap-4'; ?>">
                        <?php if ($label !== 'Brand'): ?>
                        <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase"><?php echo site_escape($label); ?></span>
                        <?php endif; ?>
                        <span class="text-sm text-slate-600 font-light">
                            <?php if ($label === 'Brand' && !empty($pd_brand['slug']) && ($pd_brand['count'] ?? 0) > 0): ?>
                            <a href="<?php echo site_escape(site_brand_url($pd_brand['slug'])); ?>" class="hover:text-spartan-teal hover:underline underline-offset-4 transition-colors"><?php echo site_escape($value); ?></a>
                            <?php else: ?>
                            <?php echo site_escape($value); ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Options -->
                <div class="space-y-5 mb-8 max-w-md">
                    <?php if ($pd_has_variants): ?>
                    <div class="space-y-4">
                        <?php foreach ($pd_variant_picker_groups as $picker_group): ?>
                        <div>
                            <div class="flex items-baseline justify-between gap-4 mb-2">
                                <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase">
                                    <?php echo site_escape($picker_group['name']); ?>
                                </span>
                                <?php if (($picker_group['selected'] ?? '') !== ''): ?>
                                <span class="text-xs text-slate-500 font-light text-right">
                                    <?php echo site_escape($picker_group['selected']); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($picker_group['choices'] as $choice): ?>
                                <?php
                                $choice_classes = $choice['active']
                                    ? 'border-spartan-navy bg-spartan-navy text-white'
                                    : 'border-slate-200 bg-white text-slate-700 hover:border-spartan-teal hover:text-spartan-teal';
                                ?>
                                <?php if ($choice['available'] && $choice['url'] !== ''): ?>
                                <a href="<?php echo site_escape($choice['url']); ?>" class="inline-flex min-h-11 min-w-11 max-w-full items-center justify-center border px-3 py-2 text-center text-sm font-semibold leading-tight whitespace-normal break-words transition-colors <?php echo $choice_classes; ?>" <?php echo $choice['active'] ? 'aria-current="true"' : ''; ?>>
                                    <?php echo site_escape($choice['label']); ?>
                                </a>
                                <?php else: ?>
                                <span class="inline-flex min-h-11 min-w-11 max-w-full items-center justify-center border border-slate-100 bg-slate-50 px-3 py-2 text-center text-sm font-semibold leading-tight whitespace-normal break-words text-slate-300 opacity-70">
                                    <?php echo site_escape($choice['label']); ?>
                                </span>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <p class="text-xs text-slate-500 font-light">
                            Selected: <?php echo site_escape($pd_selected_summary); ?><?php echo $pd_selected_sku !== '' ? ' / ' . site_escape($pd_selected_sku) : ''; ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php if ($pd_has_price): ?>
                    <div>
                        <label class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Quantity</label>
                        <input id="product-qty" type="number" min="1" value="1" class="w-28 border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                    </div>
                    <?php else: ?>
                    <div class="bg-spartan-light-gray border border-slate-100 p-5">
                        <p class="text-sm text-slate-600 font-light leading-relaxed">
                            This catalogue item is ready for counter review. Send the product name or SKU to Spartan and the team will confirm pricing, pack size, and availability.
                        </p>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap gap-4 mb-10">
                    <?php if ($pd_has_price): ?>
                    <button onclick="for(let i=0;i<Math.max(1,parseInt(document.getElementById('product-qty').value)||1);i++){addToCart('<?php echo $pd_js_name; ?>', <?php echo number_format($pd_price, 2, '.', ''); ?>, '<?php echo $pd_js_image; ?>');}" class="bg-spartan-teal text-white py-4 px-10 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors flex items-center space-x-2.5">
                        <i class="fa-solid fa-cart-plus text-sm"></i>
                        <span>Add to Order</span>
                    </button>
                    <?php else: ?>
                    <button type="button" onclick="openProductQuoteModal()" class="bg-spartan-teal text-white py-4 px-10 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors flex items-center space-x-2.5">
                        <i class="fa-solid fa-circle-info text-sm"></i>
                        <span>Request Quote</span>
                    </button>
                    <?php endif; ?>
                    <a href="contact.php" class="border border-spartan-navy text-spartan-navy py-4 px-8 text-xs font-bold tracking-[0.2em] uppercase hover:bg-spartan-navy hover:text-white transition-colors flex items-center">
                        Ask About Fleet Pricing
                    </a>
                </div>

                <!-- Trust points -->
                <ul class="space-y-3 text-sm text-slate-600 font-light leading-relaxed border-t border-slate-100 pt-6">
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-truck text-spartan-teal"></i><span>Free shipping over $150 across Atlantic Canada. Same-day counter pickup.</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-certificate text-spartan-teal"></i><span>Transport Canada approved. Annual testing available in-house.</span></li>
                    <li class="flex items-center space-x-3"><i class="fa-solid fa-phone text-spartan-teal"></i><span>Sizing questions? Call <?php echo $site['phone']; ?> and talk to someone who has worn one.</span></li>
                </ul>
            </div>
        </div>

        <!-- Specs & details -->
        <div class="mt-16 grid grid-cols-1 lg:grid-cols-2 gap-14 select-text">
            <div>
                <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-6">Description</h2>
                <p class="text-sm text-slate-600 font-light leading-relaxed mb-4">
                    <?php echo site_escape($product['desc']); ?>
                </p>
            </div>
            <div>
                <h2 class="font-oswald text-xl font-bold tracking-widest text-spartan-navy uppercase mb-6">Specifications</h2>
                <div class="divide-y divide-slate-100 border-y border-slate-100">
                    <?php
                    $specs = $product['specs'] ?? [];
                    if (!empty($specs) && $pd_selected_sku !== '') {
                        $specs['SKU'] = $pd_selected_sku;
                    }
                    if (empty($specs)) {
                        $specs = [
                            'Category' => $product['category_name'] ?? $product['category_label'],
                            'Availability' => $pd_has_price ? 'In stock, all locations' : 'Confirm with Spartan counter team',
                            'Ordering' => $pd_has_price ? 'Available for order request' : 'Quote required',
                        ];
                    }
                    foreach ($specs as $label => $value): ?>
                    <div class="py-3.5 grid grid-cols-2 gap-4">
                        <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase"><?php echo site_escape($label); ?></span>
                        <span class="text-sm text-slate-600 font-light"><?php echo site_escape($value); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Related products -->
    <section class="py-16 md:py-20 bg-spartan-light-gray">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center select-text">
                <h2 class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-none">CREWS ALSO ORDER</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 select-text">
                <?php foreach (array_slice($pd_related_products, 0, 4) as $related_product): ?>
                    <?php $product = $related_product; include __DIR__ . '/components/product-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <?php
    $cta = [
        'eyebrow' => 'KEEP IT CERTIFIED',
        'title' => 'We test the suits we sell.',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.',
        'button_label' => 'Book Suit Testing',
        'button_url' => 'service-single.php',
    ];
    require_once __DIR__ . '/components/cta-band.php';
    ?>

    <?php if (!$pd_has_price): ?>
    <!-- Product quote modal -->
    <div id="product-quote-modal" class="fixed inset-0 z-[100] hidden" role="dialog" aria-modal="true" aria-labelledby="product-quote-title">
        <button type="button" onclick="closeProductQuoteModal()" class="absolute inset-0 w-full h-full bg-spartan-navy/75" aria-label="Close quote form"></button>
        <div class="relative z-10 flex min-h-full items-center justify-center p-4 md:p-8 pointer-events-none">
            <div class="w-full max-w-2xl max-h-[calc(100vh-2rem)] overflow-y-auto bg-white border border-slate-200 shadow-[0_24px_80px_rgba(4,18,26,0.3)] pointer-events-auto">
                <div class="flex items-start justify-between gap-6 border-b border-slate-100 p-6 md:p-8">
                    <div>
                        <span class="font-oswald text-xs font-bold text-spartan-teal tracking-[0.32em] uppercase block mb-3">Product Enquiry</span>
                        <h2 id="product-quote-title" class="font-oswald text-2xl md:text-3xl font-bold tracking-widest text-spartan-navy uppercase leading-tight">Request A Quote</h2>
                    </div>
                    <button type="button" onclick="closeProductQuoteModal()" class="w-11 h-11 shrink-0 border border-slate-200 text-spartan-navy hover:bg-spartan-navy hover:text-white transition-colors flex items-center justify-center" aria-label="Close quote form">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <form onsubmit="submitProductQuote(event)" class="p-6 md:p-8 space-y-5">
                    <div class="bg-spartan-light-gray border border-slate-100 p-4">
                        <span class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Product</span>
                        <strong class="font-oswald text-lg text-spartan-navy uppercase tracking-wide block"><?php echo site_escape($pd_display_name); ?></strong>
                        <?php if ($pd_selected_summary !== '' || $pd_selected_sku !== ''): ?>
                        <span class="text-sm text-slate-600 font-light block mt-1">
                            <?php echo site_escape($pd_selected_summary); ?><?php echo $pd_selected_sku !== '' ? ' / SKU ' . site_escape($pd_selected_sku) : ''; ?>
                        </span>
                        <?php endif; ?>
                        <input type="hidden" name="product" value="<?php echo site_escape($pd_quote_product_name); ?>">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="quote-name" class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Name *</label>
                            <input id="quote-name" name="name" type="text" required autocomplete="name" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Your name">
                        </div>
                        <div>
                            <label for="quote-email" class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Email *</label>
                            <input id="quote-email" name="email" type="email" required autocomplete="email" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="you@company.ca">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label for="quote-phone" class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Phone</label>
                            <input id="quote-phone" name="phone" type="tel" autocomplete="tel" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Best number to reach you">
                        </div>
                        <div>
                            <label for="quote-quantity" class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Quantity</label>
                            <input id="quote-quantity" name="quantity" type="number" min="1" value="1" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none">
                        </div>
                    </div>

                    <div>
                        <label for="quote-message" class="font-oswald text-xs font-bold text-spartan-navy tracking-[0.18em] uppercase block mb-2">Message</label>
                        <textarea id="quote-message" name="message" rows="4" class="w-full border border-slate-200 bg-white text-sm text-slate-700 px-4 py-3 outline-none focus:border-spartan-teal rounded-none" placeholder="Tell us about quantities, timing, delivery, or pickup needs."></textarea>
                    </div>

                    <div class="flex flex-col-reverse sm:flex-row sm:items-center sm:justify-end gap-3 pt-2">
                        <button type="button" onclick="closeProductQuoteModal()" class="border border-slate-300 text-spartan-navy py-3.5 px-7 text-xs font-bold tracking-[0.18em] uppercase hover:border-spartan-navy transition-colors">Cancel</button>
                        <button type="submit" class="bg-spartan-teal text-white py-3.5 px-8 text-xs font-bold tracking-[0.18em] uppercase hover:bg-spartan-teal-light hover:text-spartan-navy transition-colors">Send Quote Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function openProductQuoteModal() {
            const modal = document.getElementById('product-quote-modal');
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            window.setTimeout(() => document.getElementById('quote-name')?.focus(), 50);
        }

        function closeProductQuoteModal() {
            document.getElementById('product-quote-modal')?.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function submitProductQuote(event) {
            event.preventDefault();
            event.currentTarget.reset();
            closeProductQuoteModal();
            showToastMessage('QUOTE REQUEST SENT', 'A Spartan team member will follow up with pricing and availability.');
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && !document.getElementById('product-quote-modal')?.classList.contains('hidden')) {
                closeProductQuoteModal();
            }
        });
    </script>
    <?php endif; ?>

<?php require_once __DIR__ . '/partials/footer.php'; ?>
