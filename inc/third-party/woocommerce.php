<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Xenial
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function xenial_woocommerce_setup() {

	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'xenial_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function xenial_woocommerce_scripts() {

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'orchid-store-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'xenial_woocommerce_scripts' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function xenial_woocommerce_active_body_class( $classes ) {

	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'xenial_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function xenial_woocommerce_related_products_args( $args ) {

	$defaults = array();
		
	$defaults['columns'] = intval( get_theme_mod( 'related_products_columns_per_row', 3 ) );
	$defaults['posts_per_page'] = intval( get_theme_mod( 'related_products_per_page', 3 ) );

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'xenial_woocommerce_related_products_args' );


function xenial_woocommerce_related_products_heading( $heading ) {

	$customizer_defaults = xenial_get_customizer_defaults();

	$related_products_heading = get_theme_mod( 'related_products_heading', $customizer_defaults['related_products_heading'] );

	return ( $related_products_heading ) ? $related_products_heading : $heading;

}
add_filter( 'woocommerce_product_related_products_heading', 'xenial_woocommerce_related_products_heading' );


function xenial_woocommerce_upsell_products_heading( $heading ) {

	$customizer_defaults = xenial_get_customizer_defaults();

	$upsells_products_heading = get_theme_mod( 'upsell_products_heading', $customizer_defaults['upsell_products_heading'] );

	return ( $upsells_products_heading ) ? $upsells_products_heading : $heading;

}
add_filter( 'woocommerce_product_upsells_products_heading', 'xenial_woocommerce_upsell_products_heading' );


function xenial_woocommerce_cross_sell_products_heading( $heading ) {

	$customizer_defaults = xenial_get_customizer_defaults();

	$cross_sells_products_heading = get_theme_mod( 'cross_sell_products_heading', $customizer_defaults['upsell_products_heading'] );

	return ( $cross_sells_products_heading ) ? $cross_sells_products_heading : $heading;

}
add_filter( 'woocommerce_product_cross_sells_products_heading', 'xenial_woocommerce_cross_sell_products_heading' );


if ( ! function_exists( 'xenial_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function xenial_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'xenial' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'xenial' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}


/**
 * Change number of upsells output
 */
function xenial_upsell_products_args( $args ) {

	$defaults = array();
		
	$defaults['columns'] = intval( get_theme_mod( 'upsell_products_columns_per_row', 3 ) );
	$defaults['posts_per_page'] = intval( get_theme_mod( 'upsell_products_per_page', 3 ) );

	$args = wp_parse_args( $defaults, $args );

 	return $args;
}
add_filter( 'woocommerce_upsell_display_args', 'xenial_upsell_products_args', 20 );


/**
 * Change cross sell columns per row.
 */
function xenial_cross_sells_columns( $columns ) {
 	
 	return intval( get_theme_mod( 'cross_sell_products_columns_per_row', 3 ) );
}
add_filter( 'woocommerce_cross_sells_columns', 'xenial_cross_sells_columns' );


/**
 * Change cross sell products per page limit.
 */
function xenial_cross_sells_limit( $limit ) {
 	
 	return intval( get_theme_mod( 'cross_sell_products_per_page', 3 ) );
}
add_filter( 'woocommerce_cross_sells_total', 'xenial_cross_sells_limit' );


if ( ! function_exists( 'xenial_refresh_cart_count' ) ) {

	function xenial_refresh_cart_count( $fragments ) {
		ob_start();
		?>
		<span id="xenial-cart-items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
		<?php
		$fragments['#xenial-cart-items-count'] = ob_get_clean();
		return $fragments;
	}  
}
add_filter( 'woocommerce_add_to_cart_fragments', 'xenial_refresh_cart_count' );




remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'xenial_woocommerce_breadcrumb', 'woocommerce_breadcrumb', 20, 0 );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );