<?php

use BoxyBird\Inertia\Inertia;



if (is_front_page()) {
    $data = [
        'post' => transform_get_post(),
        'fields' => collect(get_fields()),
        'shortcodes' => [
            'contact_form' => do_shortcode('[gravityform id="1" title="true" ajax="true"]'),
            'newletter_form' => do_shortcode('[gravityform id="2" title="true" ajax="true"]')
        ],
    ];
    // dd($data);

    return Inertia::render('Homepage', $data);
}

if (is_home()) {
    $data = [
        // 'post' => get_post(),
        'posts' => get_posts(), //transform_posts_data(get_posts()),
        'fields' => get_fields(),
    ];
    // dd($data);

    return Inertia::render('Index', $data);
}

// woo commerce product page
if (is_product()) {

    $product = json_decode(wc_get_product(get_the_ID()));

    $data = [
        'product' => $product,
        'wc_product' => do_shortcode('[product_page id="' . get_the_ID() . '"]'),
    ];
    // dd($data);

    return Inertia::render('Woocommerce/Product', $data);

    // $productDetails = [
    //     // Get Product General Info

    //     'type' => $product->get_type(),
    //     'name' => $product->get_name(),
    //     'slug' => $product->get_slug(),
    //     'date_created' => $product->get_date_created(),
    //     'date_modified' => $product->get_date_modified(),
    //     'status' => $product->get_status(),
    //     'featured' => $product->get_featured(),
    //     'catalog_visibility' => $product->get_catalog_visibility(),
    //     'description' => $product->get_description(),
    //     'short_description' => $product->get_short_description(),
    //     'sku' => $product->get_sku(),
    //     'menu_order' => $product->get_menu_order(),
    //     'virtual' => $product->get_virtual(),
    //     'permalink' => get_permalink($product->get_id()),

    //     // Get Product Prices

    //     'price' => $product->get_price(),
    //     'regular_price' => $product->get_regular_price(),
    //     'sale_price' => $product->get_sale_price(),
    //     'date_on_sale_from' => $product->get_date_on_sale_from(),
    //     'date_on_sale_to' => $product->get_date_on_sale_to(),
    //     'total_sales' => $product->get_total_sales(),

    //     // Get Product Tax, Shipping & Stock

    //     'tax_status' => $product->get_tax_status(),
    //     'tax_class' => $product->get_tax_class(),
    //     'manage_stock' => $product->get_manage_stock(),
    //     'stock_quantity' => $product->get_stock_quantity(),
    //     'stock_status' => $product->get_stock_status(),
    //     'backorders' => $product->get_backorders(),
    //     'sold_individually' => $product->get_sold_individually(),
    //     'purchase_note' => $product->get_purchase_note(),
    //     'shipping_class_id' => $product->get_shipping_class_id(),

    //     // Get Product Dimensions

    //     'weight' => $product->get_weight(),
    //     'length' => $product->get_length(),
    //     'width' => $product->get_width(),
    //     'height' => $product->get_height(),
    //     'dimensions' => $product->get_dimensions(),

    //     // Get Linked Products

    //     'upsell_ids' => $product->get_upsell_ids(),
    //     'cross_sell_ids' => $product->get_cross_sell_ids(),
    //     'parent_id' => $product->get_parent_id(),

    //     // Get Product Variations and Attributes

    //     'children' => $product->get_children(), // get variations
    //     'attributes' => $product->get_attributes(),
    //     'default_attributes' => $product->get_default_attributes(),
    //     'attribute' => $product->get_attribute('attributeid'), //get specific attribute value

    //     // Get Product Taxonomies

    //     'categories' => $product->get_categories(),
    //     'category_ids' => $product->get_category_ids(),
    //     'tag_ids' => $product->get_tag_ids(),

    //     // Get Product Downloads

    //     'downloads' => $product->get_downloads(),
    //     'download_expiry' => $product->get_download_expiry(),
    //     'downloadable' => $product->get_downloadable(),
    //     'download_limit' => $product->get_download_limit(),

    //     // Get Product Images

    //     'image_id' => $product->get_image_id(),
    //     'image' => $product->get_image(),
    //     'gallery_image_ids' => $product->get_gallery_image_ids(),

    //     // Get Product Reviews
    //     'reviews_allowed' => $product->get_reviews_allowed(),
    //     'rating_counts' => $product->get_rating_counts(),
    //     'average_rating' => $product->get_average_rating(),
    //     'review_count' => $product->get_review_count(),
    // ];
}

// woo commerce cart
if (is_shop()) {

    $data = [
        'products' => do_shortcode('[products]'),
    ];
    // dd($data);

    return Inertia::render('Woocommerce/Shop', $data);
}

// woo commerce cart
if (is_cart()) {
    $data = [
        'woocommerce_cart' => do_shortcode('[woocommerce_cart]'),
    ];
    // dd($data);

    return Inertia::render('Woocommerce/Cart', $data);
}

if (is_checkout()) {
    $data = [
        'woocommerce_checkout' => do_shortcode('[woocommerce_checkout]'),
    ];
    // dd($data);

    return Inertia::render('Woocommerce/Checkout', $data);
}

if (is_single()) {

    $data = [
        'post' => transform_get_post(),
    ];
    // dd($data);

    return Inertia::render('Single', $data);
}

if (is_page()) {
    $data = [
        'post' => get_post(),
        'fields' => get_fields(),
    ];
    // dd($data);

    return Inertia::render('Page', $data);
}



if (is_404()) {
    $data = [
        'content' => '404 - Not Found',
    ];
    // dd($data);

    return Inertia::render('404', $data);
}
