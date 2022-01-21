<?php 
/**
 * Adds EDD mini cart in header elements list.
 * 
 * @since 1.0.0
 * @return array
 */ 
function xenial_add_edd_mini_cart_header_element( $header_elements ) {

	$header_elements['edd_minicart'] = array(
		'section' => 'xenial_header_edd_minicart',
		'label' => esc_html__( 'EDD Minicart', 'xenial' ),
		'icon' 	=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>'
	);

	return $header_elements; 
}
add_filter( 'xenial_desktop_header_elements_filter', 'xenial_add_edd_mini_cart_header_element' );
add_filter( 'xenial_mobile_header_elements_filter', 'xenial_add_edd_mini_cart_header_element' );


/**
 * Prints EDD cart content of EDD mini cart header element.
 * 
 * @since 1.0.0
 * @return void 
 */ 
function xenial_edd_mini_cart_update_template() {

	$cart_event = isset( $_POST['cart_event'] ) ? $_POST['cart_event'] : false;

	if ( $cart_event == 'remove' ) {
		$nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : false;

		if ( ! $nonce || ! wp_verify_nonce( $nonce, 'xenial_edd_cart_item_remove' ) ) {
			return;
		}

		$cart_item_id = isset( $_POST['item'] ) ? $_POST['item'] : false;

		edd_remove_from_cart( $cart_item_id );
	}
	
	$cart_items = edd_get_cart_contents();

	if ( $cart_items ) { 
		?>
		<ul class="edd-cart">
            <?php foreach ( $cart_items as $key => $item ) { ?>
                <li class="edd-cart-item">
                    <div class="item-summary">
                        <span class="edd-cart-item-title"><?php echo wp_kses_post( edd_get_cart_item_name( $item ) ); ?> <span class="edd-cart-item-price">- <?php echo esc_html( edd_cart_item_price( $item['id'] ) ); ?></span></span>
                        <?php if ( class_exists( 'EDD_Recurring' ) ) { ?>
                            <span class="edd-terms-notice"><?php do_action( 'edd_purchase_link_end', $item['id'], array() );?></span>
                        <?php } ?>
                    </div>
                    <div class="action">
                        <button class="xe-button xe-false-button xe-edd-remove-from-cart" data-item="<?php echo esc_attr( $key ); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
                        </button>
                    </div>
                </li>
            <?php } ?>
            <li class="edd-cart-total">
                <span class="edd-cart-total-title"><?php echo esc_html__( 'Subtotal:', 'xenial' ); ?></span>
                <span class="edd-cart-total-price"><?php echo edd_cart_subtotal(); ?></span>
            </li>
            <li class="edd-checkout">
                <a class="xe-button xe-edd-minicart-checkout-button" href="<?php echo esc_url( edd_get_checkout_uri() ); ?>"><?php echo esc_html__( 'Checkout', 'xenial' ); ?></a>
            </li>
        </ul>
		<?php 
	} else { 
		?>
		<p class="empty"><?php echo esc_html__( 'Your cart is empty.', 'xenial' ); ?></p>
		<?php
	}

	wp_die();
}
add_action( 'wp_ajax_xenial_edd_mini_cart_update', 'xenial_edd_mini_cart_update_template', 20 );
add_action( 'wp_ajax_nopriv_xenial_edd_mini_cart_update', 'xenial_edd_mini_cart_update_template', 20 );


/**
 * Add customize default values for EDD customize controls.
 * 
 * @since 1.0.0
 * @return array 
 */ 
function xenial_edd_customize_defaults( $customize_defaults ) {

	$edd_customize_defaults = array(
		'edd_mini_cart_font_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}',
		'transparent_header_edd_mini_cart_font_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}'
	);

	$customize_defaults = array_merge( $customize_defaults, $edd_customize_defaults );

	return $customize_defaults;
}
add_filter( 'xenial_customize_defaults', 'xenial_edd_customize_defaults' );


/**
 * Add allowed field values for EDD customize controls.
 * 
 * @since 1.0.0
 * @return array 
 */ 
function xenial_edd_allowed_customize_fields( $allowed_customize_fields ) {

	$edd_allowed_customize_fields = array(
		'edd_mini_cart_font_color' => array(
			'desktop' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			),
			'tablet' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			),
			'mobile' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			)
		),
		'transparent_header_edd_mini_cart_font_color' => array(
			'desktop' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			),
			'tablet' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			),
			'mobile' => array(
				'initial' => array(
	                'display' => true,
	                'default' => ''
	            ),
	            'hover' => array(
	                'display' => true,
	                'default' => ''
	            )
			)
		)
	);

	$allowed_customize_fields = array_merge( $allowed_customize_fields, $edd_allowed_customize_fields );

	return $allowed_customize_fields;
}
add_filter( 'xenial_get_customize_allowed_fields_filter', 'xenial_edd_allowed_customize_fields' );


/**
 * Add customize default values for EDD customize contorls.
 * 
 * @since 1.0.0
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void 
 */ 
function xenial_edd_customize_register( $wp_customize ) {

	xenial_section_field( 
		'xenial_header_edd_minicart',
		array(
			'priority' => 10,
			'panel' => 'xenial_site_header_panel',
			'title' => esc_html__( 'EDD Mini Cart', 'xenial' )
		)
	);

	xenial_color_picker_field(
		'edd_mini_cart_font_color',
		array(
			'priority' => 10,
			'section' => 'xenial_header_edd_minicart',
			'label' => esc_html__( 'Font Color', 'xenial' ),
			'is_responsive' => true,
			'colors' => xenial_get_customize_allowed_fields( 'edd_mini_cart_font_color' ),
			'default' => xenial_get_customize_default( 'edd_mini_cart_font_color' )
		)
	);

	xenial_controls_wrapper_field(
		'transparent_header_edd_mini_cart_wrapper',
		array(
			'priority' => 10,
			'section' => 'xenial_transparent_header',
			'label' => esc_html__( 'EDD Mini Cart', 'xenial' )
		),
		false
	);

	xenial_color_picker_field(
		'transparent_header_edd_mini_cart_font_color',
		array(
			'priority' => 10,
			'section' => 'xenial_transparent_header',
			'label' => esc_html__( 'Font Color', 'xenial' ),
			'is_responsive' => true,
			'colors' => xenial_get_customize_allowed_fields( 'transparent_header_edd_mini_cart_font_color' ),
			'default' => xenial_get_customize_default( 'transparent_header_edd_mini_cart_font_color' )
		)
	);
}
add_action( 'customize_register', 'xenial_edd_customize_register' );


/**
 * Add fields in the transparent header section style tab.
 * 
 * @since 1.0.0
 * @return array 
 */
function xenial_transparent_header_style_tab_edd_fields( $style_tab_fields ) {

	$edd_style_fields = array(
		'transparent_header_edd_mini_cart_wrapper' => '',
		'transparent_header_edd_mini_cart_font_color' => ''
	);

	$style_tab_fields = array_merge( $style_tab_fields, $edd_style_fields );

	return $style_tab_fields;
}
add_filter( 'xenial_transparent_header_tab_2_controls', 'xenial_transparent_header_style_tab_edd_fields' );

/**
 * Print customize dynamic CSS of EDD elements.
 * 
 * @since 1.0.0
 * @return void 
 */
function xenial_edd_dynamic_customize_css() {

	$css = '';

	$edd_mini_cart_font_color = xenial_json_decode( xenial_get_option( 'edd_mini_cart_font_color' ) );

	if ( $edd_mini_cart_font_color['desktop']['initial'] || $edd_mini_cart_font_color['desktop']['hover'] ) {
		if ( $edd_mini_cart_font_color['desktop']['initial'] ) {
			$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button {';
				$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['initial'] ) . ';';
				$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['initial'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button::before {';
				$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if ( $edd_mini_cart_font_color['desktop']['hover'] ) {
			$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover {';
				$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['hover'] ) . ';';
				$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['hover'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover::before {';
				$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['desktop']['hover'] ) . ';';
			$css .= '}';
		}
	}

	if ( $edd_mini_cart_font_color['tablet']['initial'] || $edd_mini_cart_font_color['tablet']['hover'] ) {
		$css .= '@media screen and (max-width: 768px) {';
			if ( $edd_mini_cart_font_color['tablet']['initial'] ) {
				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['initial'] ) . ';';
					$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['initial'] ) . ';';
				$css .= '}';

				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button::before {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['initial'] ) . ';';
				$css .= '}';
			}

			if ( $edd_mini_cart_font_color['tablet']['hover'] ) {
				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['hover'] ) . ';';
				$css .= '}';

				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover::before {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['tablet']['hover'] ) . ';';
				$css .= '}';
			}
		$css .= '}';
	}

	if ( $edd_mini_cart_font_color['mobile']['initial'] || $edd_mini_cart_font_color['mobile']['hover'] ) {
		$css .= '@media screen and (max-width: 576px) {';
			if ( $edd_mini_cart_font_color['mobile']['initial'] ) {
				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['initial'] ) . ';';
					$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['initial'] ) . ';';
				$css .= '}';

				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button::before {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['initial'] ) . ';';
				$css .= '}';
			}

			if ( $edd_mini_cart_font_color['mobile']['hover'] ) {
				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['hover'] ) . ';';
					$css .= 'color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['hover'] ) . ';';
				$css .= '}';

				$css .= '.xe-header-element.is-edd-minicart .xe-edd-minicart-outer #xe-edd-minicart-button:hover::before {';
					$css .= 'border-color: ' . esc_attr( $edd_mini_cart_font_color['mobile']['hover'] ) . ';';
				$css .= '}';
			}
		$css .= '}';
	}

	wp_add_inline_style( 'xenial-edd', $css );
}
add_action( 'wp_enqueue_scripts', 'xenial_edd_dynamic_customize_css' );


