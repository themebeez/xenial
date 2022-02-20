<?php 

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
if ( ! function_exists( 'xenial_woocommerce_active_body_class' ) ) {

	function xenial_woocommerce_active_body_class( $classes ) {

		$classes[] = 'woocommerce-active';

		return $classes;
	}
}


/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
if ( ! function_exists( 'xenial_woocommerce_related_products_args' ) ) {

	function xenial_woocommerce_related_products_args( $args ) {

		$defaults = array();
			
		$defaults['columns'] = intval( get_theme_mod( 'related_products_columns_per_row', 3 ) );
		$defaults['posts_per_page'] = intval( get_theme_mod( 'related_products_per_page', 3 ) );

		$args = wp_parse_args( $defaults, $args );

		return $args;
	}
}


/**
 * Related Products Section Heading.
 *
 * @param string $heading related products section heading.
 * @return string $heading related products section heading.
 */
if ( ! function_exists( 'xenial_woocommerce_related_products_heading' ) ) {

	function xenial_woocommerce_related_products_heading( $heading ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$related_products_heading = get_theme_mod( 'related_products_heading', $customizer_defaults['related_products_heading'] );

		return ( $related_products_heading ) ? $related_products_heading : $heading;
	}
}


/**
 * upsell Products Section Heading.
 *
 * @param string $heading upsell products section heading.
 * @return string $heading upsell products section heading.
 */
if ( ! function_exists( 'xenial_woocommerce_upsell_products_heading' ) ) {

	function xenial_woocommerce_upsell_products_heading( $heading ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$upsells_products_heading = get_theme_mod( 'upsell_products_heading', $customizer_defaults['upsell_products_heading'] );

		return ( $upsells_products_heading ) ? $upsells_products_heading : $heading;

	}
}


/**
 * Cross Sell Products Section Heading.
 *
 * @param string $heading cross sell products section heading.
 * @return string $heading cross sell products section heading.
 */
if ( ! function_exists( 'xenial_woocommerce_cross_sell_products_heading' ) ) {

	function xenial_woocommerce_cross_sell_products_heading( $heading ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$cross_sells_products_heading = get_theme_mod( 'cross_sell_products_heading', $customizer_defaults['upsell_products_heading'] );

		return ( $cross_sells_products_heading ) ? $cross_sells_products_heading : $heading;

	}
}

/**
 * Cart Link.
 *
 * Displayed a link to the cart including the number of items present and the cart total.
 *
 * @return void
 */
if ( ! function_exists( 'xenial_woocommerce_cart_link' ) ) {
	
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
if ( ! function_exists( 'xenial_upsell_products_args' ) ) {
	
	function xenial_upsell_products_args( $args ) {

		$defaults = array();
			
		$defaults['columns'] = intval( get_theme_mod( 'upsell_products_columns_per_row', 3 ) );
		$defaults['posts_per_page'] = intval( get_theme_mod( 'upsell_products_per_page', 3 ) );

		$args = wp_parse_args( $defaults, $args );

	 	return $args;
	}
}


/**
 * Change cross sell columns per row.
 */
if ( ! function_exists( 'xenial_cross_sells_columns' ) ) {
	
	function xenial_cross_sells_columns( $columns ) {
	 	
	 	return intval( get_theme_mod( 'cross_sell_products_columns_per_row', 3 ) );
	}
}


/**
 * Change cross sell products per page limit.
 */
if ( ! function_exists( 'xenial_cross_sells_limit' ) ) {
	
	function xenial_cross_sells_limit( $limit ) {
	 	
	 	return intval( get_theme_mod( 'cross_sell_products_per_page', 3 ) );
	}
}

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



if ( ! function_exists( 'xenial_woocommerce_product_loop_thumbnail' ) ) {

	function xenial_woocommerce_product_loop_thumbnail() {

		echo woocommerce_get_product_thumbnail();
	}
}