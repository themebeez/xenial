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
 * Upsell Products Args.
 *
 * @param array $args upsell products args.
 * @return array $args upsell products args.
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
 * Added to cart modal popup.
 *
 * Displayed when product is added to the cart.
 *
 * @return void
 */

if ( ! function_exists( 'xenial_woocommerce_product_added_to_cart' ) ) {
	
	function xenial_woocommerce_product_added_to_cart() {

		$nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : '';

		if ( ! wp_verify_nonce( $nonce, 'xenial_woo_ajax_nonce' ) ) {
			wp_die();
		}

		$product_id = isset( $_POST['product_id'] ) ? $_POST['product_id'] : '';

		if ( ! $product_id ) {
			wp_die();
		}

		$product = wc_get_product( absint( $product_id ) );



		// ob_start();
		?>
		<aside id="xe-woo-added-to-cart-modal" class="visible">
			<header class="xe-modal-header">
				<h3 class="xe-title">
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
					<?php esc_html_e( 'Product added to Cart:', 'xenial' ); ?>
				</h3>
			</header>
			<main class="xe-modal-body">
				<div class="xe-product-info">
					<div class="xe-product-thumb">
						<?php echo wp_kses_post( $product->get_image() ); ?>
					</div>
					<div class="xe-product-title">
						<span class="xe-title"><?php echo wp_kses_post( $product->get_name() ); ?></span>
						<span class="xe-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
					</div><!-- // xe-product-title -->
				</div><!-- // xe-product-info -->
			</main>
			<footer class="xe-modal-footer">
				<button class="xe-button" id="xe-close-cart-modal-button">
					<?php esc_html_e( 'Continue shopping', 'xenial' ); ?>
				</button>
				<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="xe-button xe-link" id="xe-cart-link">
					<?php esc_html_e( 'Go to Cart', 'xenial' ); ?>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
					<path d="M61.5,28.5l-6.9-8.2c-0.6-0.7-1.7-0.8-2.5-0.2c-0.7,0.6-0.8,1.7-0.2,2.5l6.5,7.7H3c-1,0-1.8,0.8-1.8,1.8
						c0,1,0.8,1.8,1.8,1.8h55.4l-6.5,7.7c-0.6,0.7-0.5,1.8,0.2,2.5c0.3,0.3,0.7,0.4,1.1,0.4c0.5,0,1-0.2,1.3-0.6l6.9-8.2
						C63.2,33.5,63.2,30.5,61.5,28.5z"/>
					</svg>
				</a>
			</footer>
		</aside>
		<aside id="xe-added-to-cart-modal-overlay" class="visible"></aside>
		<?php 
		// ob_end_clean();
		wp_die();
	}

	add_action( 'wp_ajax_xenial_woo_added_to_cart', 'xenial_woocommerce_product_added_to_cart' );
	add_action( 'wp_ajax_nopriv_xenial_woo_added_to_cart', 'xenial_woocommerce_product_added_to_cart' );
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
		<span class="xenial-cart-items-count count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
		<?php
		$fragments['.xenial-cart-items-count'] = ob_get_clean();
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
			$button_classes[] = 'addonify-add-to-wishlist-btn addonify-custom-wishlist-btn';
			$product_in_wishlist = addonify_wishlist_is_product_in_wishlist( $product->get_id() );
			if ( $product_in_wishlist ) {
				$tooltip_text = addonify_wishlist_get_button_label( true );
				$button_classes[] = 'added-to-wishlist';
			}
			?>
			<div class="xe-wishlist xe-button-item">
	            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $tooltip_text ); ?>" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_name="<?php echo esc_attr( $product->get_name() ); ?>">
					<?php if ( $product_in_wishlist ) { ?>
						<i class="ti-star"></i>
					<?php } else { ?>
						<i class="ti-star"></i>
					<?php } ?>
			</button>
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

		$woo_ajax_add_to_cart_enabled = get_option( 'woocommerce_enable_ajax_add_to_cart' );
		?>
		<div class="xe-cart xe-button-item">
			<?php 
			if ( 
				$product->supports( 'ajax_add_to_cart' ) &&
				$woo_ajax_add_to_cart_enabled == 'yes'
			) {
				$button_classes = array( 'xe-button', 'xe-false-button', 'xe-cart-button', 'xe-tippy' );

				$button_classes[] = ( $product->is_purchasable() && $product->is_in_stock() ) ? 'add_to_cart_button ajax_add_to_cart' : '';
				?>
	            <button class="<?php echo esc_attr( implode( ' ', $button_classes ) ); ?>" data-tippy-placement="left" data-tippy-content="<?php echo esc_attr( $product->add_to_cart_text() ); ?>" data-quantity="1" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_sku="<?php echo esc_attr( $product->get_sku() ); ?>"><i class="ti-shopping-cart-full"></i></button>
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


if ( ! function_exists( 'xenial_header_element_woocommerce_minicart_template' ) ) {

	function xenial_header_element_woocommerce_minicart_template() {

		if ( ! xenial_is_header_element_active( 'woocommerce_minicart' ) ) {
			return;
		}

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'woocommerce-minicart', $template_args );
	}

	add_action( 'xenial_header_element_woocommerce_minicart', 'xenial_header_element_woocommerce_minicart_template' );
}


if ( ! function_exists( 'xenial_header_element_woocommerce_minicart_offcanvas_template' ) ) {

	function xenial_header_element_woocommerce_minicart_offcanvas_template() {

		if ( ! xenial_is_header_element_active( 'woocommerce_minicart' ) ) {

			return;
		}

		get_template_part( 'template-parts/theme-header/elements/element', 'woocommerce-minicart-offcanvas' );
	}

	add_action( 'xenial_after_header', 'xenial_header_element_woocommerce_minicart_offcanvas_template' );
}



if ( ! function_exists( 'xenial_header_element_woocommerce_dropdown_template' ) ) {

	function xenial_header_element_woocommerce_dropdown_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'woocommerce-dropdown', $template_args );
	}

	add_action( 'xenial_header_element_woocommerce_dropdown', 'xenial_header_element_woocommerce_dropdown_template' );
}



if ( ! function_exists( 'xenial_do_not_display_woo_page_title' ) ) {

	function xenial_do_not_display_woo_page_title() {

		return false;
	}
}



if ( ! function_exists( 'xenial_ajax_product_search' ) ) {

	function xenial_ajax_product_search() {

		$nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : '';

		$return_data = array(
			'success' => false,
			'message' => '',
			'data' => ''
		);

		if ( ! wp_verify_nonce( $nonce, 'xenial_woo_ajax_nonce' ) ) {

			$return_data['message'] = esc_html__( 'Security check failed!', 'xenial' );

			wp_send_json_error( $return_data );
		}

		$product_search_text = isset( $_REQUEST['product_search_text'] ) ? sanitize_text_field( $_REQUEST['product_search_text'] ) : '';


		if ( empty( $product_search_text ) ) {
			
			$return_data['message'] = esc_html__( 'Please enter a search term.', 'xenial' ); 

			wp_send_json_error( $return_data );
		}

		$search_products = new WC_Product_Query( array(
			's' => $product_search_text,
		) );

		$search_products = $search_products->get_products();

		if ( 
			is_array( $search_products ) &&
			count( $search_products ) > 0
		) {

			$return_data['data'] = '<ul id="xe-ajax-search-items">';

			foreach ( $search_products as $search_product ) {

				$return_data['data'] .= '<li class="search-item">';

					$return_data['data'] .= '<div class="xe-woo-product">';

					if ( $search_product->get_image() ) {

						$return_data['data'] .= '<div class="xe-product-thumb">';

							$return_data['data'] .= '<a class="xe-link xe-thumb-link woocommerce-LoopProduct-link woocommerce-loop-product__link" href="' . esc_url( $search_product->get_permalink() ) . '">';

								$return_data['data'] .= $search_product->get_image();

							$return_data['data'] .= '</a>';

						$return_data['data'] .= '</div>';
					}

					$return_data['data'] .= '<div class="xe-product-title-price">';

						$return_data['data'] .= '<div class="xe-product-title">';

							$return_data['data'] .= '<a class="xe-link" href="' . esc_url( $search_product->get_permalink() ) . '">';

								$return_data['data'] .= $search_product->get_title();

							$return_data['data'] .= '</a>';
						
						$return_data['data'] .= '</div>';

						$return_data['data'] .= '<div class="xe-product-price">';

							$return_data['data'] .= $search_product->get_price_html();
							
						$return_data['data'] .= '</div>';

					$return_data['data'] .= '</div>';

					$return_data['data'] .= '</div>';

				$return_data['data'] .= '</li>';
			}

			$return_data['data'] .= '</ul>';

			$return_data['success'] = true;
		} else {

			$return_data['data'] = '<div class="no-result"><span class="desc">'. __('Sorry no results found.', 'xenial') . '</span></div>';

			$return_data['message'] = esc_html__( 'No products found.', 'xenial' );
		}

		wp_send_json( $return_data );
	}

	add_action( 'wp_ajax_xenial_ajax_product_search', 'xenial_ajax_product_search' );
	add_action( 'wp_ajax_nopriv_xenial_ajax_product_search', 'xenial_ajax_product_search' );
}