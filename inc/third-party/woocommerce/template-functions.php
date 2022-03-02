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



if ( ! function_exists( 'xenial_woocommerce_product_loop_title_classes' ) ) {

	function xenial_woocommerce_product_loop_title_classes( $classes ) {

		$classes .= ' xe-title';

		return $classes;
	}
}



if ( ! function_exists( 'xenial_woocommerce_product_action_buttons_template' ) ) {

	function xenial_woocommerce_product_action_buttons_template() {

		$display_quick_view_action_button = get_theme_mod( 'display_quick_view_action_button', xenial_get_customize_default( 'display_quick_view_action_button' ) );

		$display_compare_action_button = get_theme_mod( 'display_compare_action_button', xenial_get_customize_default( 'display_compare_action_button' ) );

		$display_add_to_wishlist_action_button = get_theme_mod( 'display_add_to_wishlist_action_button', xenial_get_customize_default( 'display_add_to_wishlist_action_button' ) );

		$display_add_to_cart_action_button = get_theme_mod( 'display_add_to_cart_action_button', xenial_get_customize_default( 'display_add_to_cart_action_button' ) );

		if (
			$display_quick_view_action_button ||
			$display_compare_action_button ||
			$display_add_to_wishlist_action_button ||
			$display_add_to_cart_action_button 
		) {
			?>
			<div class="xe-woo-buttons-group visible-on-hover">
				<?php
				if ( $display_quick_view_action_button ) {
					do_action( 'xenial_woocommerce_product_quick_view_action_button' );
				}

				if ( $display_compare_action_button ) {
					do_action( 'xenial_woocommerce_product_compare_action_button' );
				}

				if ( $display_add_to_wishlist_action_button ) {
					do_action( 'xenial_woocommerce_product_add_to_wishlist_action_button' );
				}

				if ( $display_add_to_cart_action_button ) {
					do_action( 'xenial_woocommerce_product_add_to_cart_action_button' );
				}
				?>
			</div><!-- .xe-woo-buttons-group -->
			<?php
		}
	}
}



if ( ! function_exists( 'xenial_woocommerce_product_quick_view_action_button_template' ) ) {

	function xenial_woocommerce_product_quick_view_action_button_template() {

		if ( 
			! class_exists( 'Addonify_Quick_View' ) &&
			! class_exists( 'YITH_WCQV' ) 
		) {
			return;
		}

		global $product;

		$tooltip_text = get_theme_mod( 'quick_view_action_button_tooltip_text', xenial_get_customize_default( 'quick_view_action_button_tooltip_text' ) );

		$button_classes = array( 'xe-button', 'xe-false-button', 'xe-quickview-button', 'xe-tippy' );

		if ( class_exists( 'Addonify_Quick_View' ) ) {
			$button_classes[] = 'addonify-qvm-button';
		} elseif ( class_exists( 'YITH_WCQV' ) ) {
			$button_classes[] = 'yith-wcqv-button';
		}
		?>
		<div class="xe-quickview xe-button-item">
            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $tooltip_text ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>">
                <i class="ti-eye"></i>
            </button>
        </div><!-- .xe-qickview.xe-button-item -->
		<?php
	}
}



if ( ! function_exists( 'xenial_woocommerce_product_compare_action_button_template' ) ) {

	function xenial_woocommerce_product_compare_action_button_template() {

		if (  
			! class_exists( 'Addonify_Compare_Products' ) &&
			! class_exists( 'YITH_Woocompare' )
		) {
			return;
		}

		global $product;

		$tooltip_text = get_theme_mod( 'compare_action_button_tooltip_text', xenial_get_customize_default( 'compare_action_button_tooltip_text' ) );

		$button_classes = array( 'xe-button', 'xe-false-button', 'xe-compare-button', 'xe-tippy' );

		if ( class_exists( 'Addonify_Compare_Products' ) ) {
			$button_classes[] = 'addonify-cp-button';
		} elseif ( class_exists( 'YITH_Woocompare' ) ) {
			$button_classes[] = 'compare';
		}
		?>
		<div class="xe-compare xe-button-item">
            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $tooltip_text ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>"><i class="ti-control-shuffle"></i></button>
        </div><!-- .xe-compare.xe-button-item -->
		<?php
	}
}


if ( ! function_exists( 'xenial_woocommerce_product_add_to_wishlist_action_button_template' ) ) {

	function xenial_woocommerce_product_add_to_wishlist_action_button_template() {

		if (  
			! class_exists( 'Addonify_Wishlist' ) &&
			! class_exists( 'YITH_WCWL' )
		) {
			return;
		}

		global $product;

		$tooltip_text = get_theme_mod( 'add_to_wishlist_action_button_tooltip_text', xenial_get_customize_default( 'add_to_wishlist_action_button_tooltip_text' ) );

		$button_classes = array( 'xe-button', 'xe-false-button', 'xe-wishlist-button', 'xe-tippy' );

		if ( class_exists( 'Addonify_Wishlist' ) ) {
			$button_classes[] = 'adfy-wishlist-btn';
			?>
			<div class="xe-wishlist xe-button-item">
	            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $tooltip_text ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_name="<?php echo esc_attr( $product->get_name() ); ?>"><i class="ti-star"></i></button>
	        </div><!-- .xe-wishlist.xe-button-item -->
			<?php
		} elseif ( class_exists( 'YITH_WCWL' ) ) {
			$button_classes[] = 'add_to_wishlist';
			?>
			<div class="xe-wishlist xe-button-item">
	            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $tooltip_text ); ?>" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>" data-product-type="<?php echo esc_attr( $product->get_type() ); ?>" data-original-product-id="<?php echo esc_attr( $product->get_parent_id() ); ?>"><i class="ti-star"></i></button>
	        </div><!-- .xe-wishlist.xe-button-item -->
			<?php
		}
	}
}



if ( ! function_exists( 'xenial_woocommerce_product_add_to_cart_action_button_template' ) ) {

	function xenial_woocommerce_product_add_to_cart_action_button_template() {

		global $product;
		?>
		<div class="xe-cart xe-button-item">
			<?php 
			if ( $product->supports( 'ajax_add_to_cart' ) ) {
				$button_classes = array( 'xe-button', 'xe-false-button', 'xe-cart-button', 'xe-tippy' );

				$button_classes[] = ( $product->is_purchasable() && $product->is_in_stock() ) ? 'add_to_cart_button ajax_add_to_cart' : '';
				?>
	            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $product->add_to_cart_text() ); ?>" data-quantity="1" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_sku="$product->get_sku()"><i class="ti-shopping-cart-full"></i></button>
		        <?php 
			} else {
				?>
	            <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="xe-button xe-false-button xe-cart-button xe-tippy" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $product->add_to_cart_text() ); ?>"><i class="ti-shopping-cart-full"></i></a>
		        <?php 
		    } 
		    ?>
        </div><!-- .xe-cart.xe-button-item -->
		<?php
	}
}