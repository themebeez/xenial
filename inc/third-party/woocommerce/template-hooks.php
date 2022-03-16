<?php 
/**
 * Update the cart count on Ajax call.
 * 
 * Hooked - xenial_refresh_cart_count
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'xenial_refresh_cart_count' );

/**
 * Adds xenial cart popup modal box markup when product is added to cart.
 * 
 * Hooked - wp_body_open
 */

add_action( 'wp_body_open', 'xenial_woocommerce_product_added_to_cart');

/**
 * Removes default WooCommerce breadcrumb from WooCommerce template.
 * 
 * Hooked - woocommerce_breadcrumb
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

/**
 * Adds themes breadcrumb to WooCommerce template.
 * 
 * Hooked - woocommerce_breadcrumb
 */
add_action( 'xenial_woocommerce_breadcrumb', 'woocommerce_breadcrumb', 20, 0 );

/**
 * Removes WooCommerce sidebar from WooCommerce template.
 * 
 * Hooked - woocommerce_get_sidebar
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Set the products per row and products per page to be displayed in upsell products section.
 * 
 * Hooked - xenial_upsell_products_args
 */
add_filter( 'woocommerce_upsell_display_args', 'xenial_upsell_products_args', 20 );

/**
 * Sets the products per row to be displayed in cross sells products section.
 * 
 * Hooked - xenial_cross_sells_columns
 */
add_filter( 'woocommerce_cross_sells_columns', 'xenial_cross_sells_columns' );

/**
 * Set the products per page to be displayed in cross sells products section.
 * 
 * Hooked - xenial_cross_sells_limit
 */
add_filter( 'woocommerce_cross_sells_total', 'xenial_cross_sells_limit' );

/**
 * Sets related products section title.
 * 
 * Hooked - xenial_woocommerce_related_products_heading
 */
add_filter( 'body_class', 'xenial_woocommerce_active_body_class' );

/**
 * Sets related products section title.
 * 
 * Hooked - xenial_woocommerce_related_products_heading
 */
add_filter( 'woocommerce_output_related_products_args', 'xenial_woocommerce_related_products_args' );

/**
 * Sets related products section title.
 * 
 * Hooked - xenial_woocommerce_related_products_heading
 */
add_filter( 'woocommerce_product_related_products_heading', 'xenial_woocommerce_related_products_heading' );

/**
 * Sets upsells products section title.
 * 
 * Hooked - xenial_woocommerce_upsell_products_heading
 */
add_filter( 'woocommerce_product_upsells_products_heading', 'xenial_woocommerce_upsell_products_heading' );

/**
 * Sets cross sells products section title.
 * 
 * Hooked - xenial_woocommerce_cross_sell_products_heading
 */
add_filter( 'woocommerce_product_cross_sells_products_heading', 'xenial_woocommerce_cross_sell_products_heading' );



// add_filter( 'woocommerce_sale_flash', 'xenial_woocommerce_onsale_flash', $html, $post, $product );
add_action( 'woocommerce_product_sale_flash', 'woocommerce_show_product_loop_sale_flash' );



add_filter( 'woocommerce_product_loop_title_classes', 'xenial_woocommerce_product_loop_title_classes' );





add_action( 'xenial_woocommerce_product_action_buttons', 'xenial_woocommerce_product_action_buttons_template' );

add_action( 'xenial_woocommerce_product_quick_view_action_button', 'xenial_woocommerce_product_quick_view_action_button_template' );

add_action( 'xenial_woocommerce_product_compare_action_button', 'xenial_woocommerce_product_compare_action_button_template' );

add_action( 'xenial_woocommerce_product_add_to_wishlist_action_button', 'xenial_woocommerce_product_add_to_wishlist_action_button_template' );

add_action( 'xenial_woocommerce_product_add_to_cart_action_button', 'xenial_woocommerce_product_add_to_cart_action_button_template' );