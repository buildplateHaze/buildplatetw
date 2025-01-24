<?php
/**
 * WooCommerce specific functions
 *
 * @package buildplate_tw
 */

// Remove default WooCommerce styles
add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// Customize product loops
function buildplate_tw_before_shop_loop_item() {
    echo '<div class="group relative bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">';
}
add_action('woocommerce_before_shop_loop_item', 'buildplate_tw_before_shop_loop_item', 5);

function buildplate_tw_after_shop_loop_item() {
    echo '</div>';
}
add_action('woocommerce_after_shop_loop_item', 'buildplate_tw_after_shop_loop_item', 15);

// Customize product cards
function buildplate_tw_loop_product_thumbnail() {
    global $product;
    $image_size = apply_filters('single_product_archive_thumbnail_size', 'product-thumbnail');
    echo $product ? '<div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">' . $product->get_image($image_size, array('class' => 'h-full w-full object-cover object-center group-hover:opacity-75')) . '</div>' : '';
}
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'buildplate_tw_loop_product_thumbnail', 10); 