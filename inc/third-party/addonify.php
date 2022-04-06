<?php

if ( ! function_exists( 'xenial_add_addonify_wishlist_header_element' ) ) {

	function xenial_add_addonify_wishlist_header_element( $header_elements ) {

		if ( 
			! class_exists( 'WooCommerce' ) || 
			! class_exists( 'Addonify_Wishlist' )
		) {
			return $header_elements;
		}

		$header_elements['addonify_wishlist'] = array(
			'section' => 'xenial_header_addonify_wishlist',
            'label' => esc_html__( 'Wishlist', 'xenial' ),
            'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>'
		);

		return $header_elements;
	}

	add_filter( 'xenial_desktop_header_elements_filter', 'xenial_add_addonify_wishlist_header_element' );
	add_filter( 'xenial_mobile_header_elements_filter', 'xenial_add_addonify_wishlist_header_element' );
}




if ( ! function_exists( 'xenial_get_addonify_wishlist_header_element_customize_defaults' ) ) {

	function xenial_get_addonify_wishlist_header_element_customize_defaults( $customize_defaults ) {

		$addonify_wishlist_header_element_customize_defaults = apply_filters( 
            "xenial_header_addonify_wishlist_customize_defaults_filter", 
            array(
                'header_ele_addonify_wishlist_visibility' => 'desktop,tablet,mobile',
                'header_ele_addonify_wishlist_icon_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
                'header_ele_addonify_wishlist_icon_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_addonify_wishlist_icon_count_bg_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_addonify_wishlist_icon_count_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            ) 
        );

        $customize_defaults = array_merge( $customize_defaults, $addonify_wishlist_header_element_customize_defaults );

        return $customize_defaults;
		
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_addonify_wishlist_header_element_customize_defaults' );
}

if ( ! function_exists( 'xenial_header_ele_addonify_wishlist_customize_controls_init' ) ) {

    function xenial_header_ele_addonify_wishlist_customize_controls_init( $wp_customize ) {

        xenial_section_field( 
            'xenial_header_addonify_wishlist',
            array(
                'priority' => 11,
                'panel' => 'xenial_site_header_panel',
                'title' => esc_html__( 'Addonify Wishlist', 'xenial' )
            )
        );

        xenial_tab_field(
            'xenial_header_addonify_wishlist_tab',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'tabs' => xenial_get_tab_control_2_labels(),
                'controls' => array(
                    'tab_1' => apply_filters( 
                        'xenial_header_addonify_wishlist_tab_1_controls', 
                        array(
                            'header_ele_addonify_wishlist_visibility' => '',
                            'header_ele_addonify_wishlist_general_divider_1' => '',
                        ) 
                    ),
                    'tab_2' => apply_filters( 
                        'xenial_header_addonify_wishlist_tab_2_controls', 
                        array(
                            'header_ele_addonify_wishlist_icon_size' => '',
                            'header_ele_woo_dropdown_style_divider_1' => '',
                            'header_ele_addonify_wishlist_icon_color' => '',
                            'header_ele_woo_dropdown_style_divider_2' => '',
                            'header_ele_addonify_wishlist_icon_count_bg_color' => '',
                            'header_ele_woo_dropdown_style_divider_3' => '',
                            'header_ele_addonify_wishlist_icon_count_color' => '',
                        ) 
                    )
                )
            )
        );

        xenial_button_checkbox_field(
            'header_ele_addonify_wishlist_visibility',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'label' => esc_html__( 'Visibility', 'xenial' ),
                'item' => 'icon',
                'choices' => array(
                    'desktop' => 'dashicons-desktop',
                    'tablet' => 'dashicons-tablet',
                    'mobile' => 'dashicons-smartphone'
                ),
                'default' => xenial_get_customize_default( 'header_ele_addonify_wishlist_visibility' )
            )
        );
    
        xenial_divider_field( 
            'header_ele_addonify_wishlist_general_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist', 
            ) 
        );

        xenial_range_control_field(
            'header_ele_addonify_wishlist_icon_size',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'label' => esc_html__( 'Icon Size (px)', 'xenial' ),
                'input_attrs' => xenial_get_font_size_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_addonify_wishlist_icon_size' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_addonify_wishlist_icon_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'label' => esc_html__( 'Icon Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_addonify_wishlist_icon_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_2', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_addonify_wishlist_icon_count_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'label' => esc_html__( 'Count Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_addonify_wishlist_icon_count_bg_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_3', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_addonify_wishlist_icon_count_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_addonify_wishlist',
                'label' => esc_html__( 'Count Text Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_addonify_wishlist_icon_count_color' )
            )
        );
    }
    
    /**
     * Register WooCommerce custommizer settings.
     * 
     * Hooked - xenial_header_ele_addonify_wishlist_customize_controls_init
     */ 
    add_action( 'customize_register', 'xenial_header_ele_addonify_wishlist_customize_controls_init' );
}


if ( ! function_exists( 'xenial_header_element_addonify_wishlist_template' ) ) {

	function xenial_header_element_addonify_wishlist_template() {

		$template_args = array();

		get_template_part( 'template-parts/theme-header/elements/element', 'addonify-wishlist', $template_args );
	}

	add_action( 'xenial_header_element_addonify_wishlist', 'xenial_header_element_addonify_wishlist_template' );
}



/**
 * Dyynamic CSS for header button element.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_addonify_wishlist_css' ) ) {

	function xenial_dynamic_header_addonify_wishlist_css( $css ) {

		if ( ! xenial_is_header_element_active( 'addonify_wishlist' ) ) {
			return $css;
		}

		$header_addonify_wishlist_icon_size_desktop = xenial_get_option( 'header_ele_addonify_wishlist_icon_size_desktop' );

		$header_addonify_wishlist_icon_size_tablet = xenial_get_option( 'header_ele_addonify_wishlist_icon_size_tablet' );

		$header_addonify_wishlist_icon_size_mobile = xenial_get_option( 'header_ele_addonify_wishlist_icon_size_mobile' );

		$header_addonify_wishlist_icon_color = xenial_json_decode( xenial_get_option( 'header_ele_addonify_wishlist_icon_color' ) );

		$header_addonify_wishlist_count_bg_color = xenial_json_decode( xenial_get_option( 'header_ele_addonify_wishlist_icon_count_bg_color' ) );

		$haeder_addonify_wishlist_count_text_color = xenial_json_decode( xenial_get_option( 'header_ele_addonify_wishlist_icon_count_color' ) );

		$css .= '#xe-woo-wishlist-icon #xe-wishlist-link svg {';
			
			if ( $header_addonify_wishlist_icon_size_desktop ) {

				$css .= 'height: ' . esc_attr( $header_addonify_wishlist_icon_size_desktop ) . 'px;'; 
				$css .= 'width: ' . esc_attr( $header_addonify_wishlist_icon_size_desktop ) . 'px;'; 
			}

			if ( $header_addonify_wishlist_icon_color['desktop']['initial'] ) {

				$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['desktop']['initial'] ) . ';'; 
				$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['desktop']['initial'] ) . ';';	
			}
			 
		$css .= '}';

		if ( $header_addonify_wishlist_icon_color['desktop']['hover'] ) {

			$css .= '#xe-woo-wishlist-icon #xe-wishlist-link:hover svg {';
				$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['desktop']['hover'] ) . ';'; 
				$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		if ( 
			$header_addonify_wishlist_count_bg_color['desktop']['initial'] ||
			$haeder_addonify_wishlist_count_text_color['desktop']['initial']
		) {

			$css .= '#xe-woo-wishlist-icon #xe-wishlist-link .count {';
				
				if ( $header_addonify_wishlist_count_bg_color['desktop']['initial'] ) {

					$css .= 'background-color: ' . esc_attr( $header_addonify_wishlist_count_bg_color['desktop']['initial'] ) . ';'; 
				}

				if ( $haeder_addonify_wishlist_count_text_color['desktop']['initial'] ) {

					$css .= 'color: ' . esc_attr( $haeder_addonify_wishlist_count_text_color['desktop']['initial'] ) . ';'; 
				}
			$css .= '}';
		}

		$css .= '@media screen and (max-width: 768px) {';
			$css .= '#xe-woo-wishlist-icon #xe-wishlist-link svg {';
			
				if ( $header_addonify_wishlist_icon_size_tablet ) {
	
					$css .= 'height: ' . esc_attr( $header_addonify_wishlist_icon_size_tablet ) . 'px;'; 
					$css .= 'width: ' . esc_attr( $header_addonify_wishlist_icon_size_tablet ) . 'px;'; 
				}
	
				if ( $header_addonify_wishlist_icon_color['tablet']['initial'] ) {
	
					$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['tablet']['initial'] ) . ';'; 
					$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['tablet']['initial'] ) . ';';	
				}
				 
			$css .= '}';
	
			if ( $header_addonify_wishlist_icon_color['tablet']['hover'] ) {
	
				$css .= '#xe-woo-wishlist-icon #xe-wishlist-link:hover svg {';
					$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['tablet']['hover'] ) . ';'; 
					$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['tablet']['hover'] ) . ';';
				$css .= '}';
			}
	
			if ( 
				$header_addonify_wishlist_count_bg_color['tablet']['initial'] ||
				$haeder_addonify_wishlist_count_text_color['tablet']['initial']
			) {
	
				$css .= '#xe-woo-wishlist-icon #xe-wishlist-link .count {';
					
					if ( $header_addonify_wishlist_count_bg_color['tablet']['initial'] ) {
	
						$css .= 'background-color: ' . esc_attr( $header_addonify_wishlist_count_bg_color['tablet']['initial'] ) . ';'; 
					}
	
					if ( $haeder_addonify_wishlist_count_text_color['tablet']['initial'] ) {
	
						$css .= 'color: ' . esc_attr( $haeder_addonify_wishlist_count_text_color['tablet']['initial'] ) . ';'; 
					}
				$css .= '}';
			}
		$css .= '}';
		
		$css .= '@media screen and (max-width: 567px) {';

			$css .= '#xe-woo-wishlist-icon #xe-wishlist-link svg {';
			
				if ( $header_addonify_wishlist_icon_size_mobile ) {
	
					$css .= 'height: ' . esc_attr( $header_addonify_wishlist_icon_size_mobile ) . 'px;'; 
					$css .= 'width: ' . esc_attr( $header_addonify_wishlist_icon_size_mobile ) . 'px;'; 
				}
	
				if ( $header_addonify_wishlist_icon_color['mobile']['initial'] ) {
	
					$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['mobile']['initial'] ) . ';'; 
					$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['mobile']['initial'] ) . ';';	
				}
				 
			$css .= '}';
	
			if ( $header_addonify_wishlist_icon_color['mobile']['hover'] ) {
	
				$css .= '#xe-woo-wishlist-icon #xe-wishlist-link:hover svg {';
					$css .= 'fill: ' . esc_attr( $header_addonify_wishlist_icon_color['mobile']['hover'] ) . ';'; 
					$css .= 'color: ' . esc_attr( $header_addonify_wishlist_icon_color['mobile']['hover'] ) . ';';
				$css .= '}';
			}
	
			if ( 
				$header_addonify_wishlist_count_bg_color['mobile']['initial'] ||
				$haeder_addonify_wishlist_count_text_color['mobile']['initial']
			) {
	
				$css .= '#xe-woo-wishlist-icon #xe-wishlist-link .count {';
					
					if ( $header_addonify_wishlist_count_bg_color['mobile']['initial'] ) {
	
						$css .= 'background-color: ' . esc_attr( $header_addonify_wishlist_count_bg_color['mobile']['initial'] ) . ';'; 
					}
	
					if ( $haeder_addonify_wishlist_count_text_color['mobile']['initial'] ) {
	
						$css .= 'color: ' . esc_attr( $haeder_addonify_wishlist_count_text_color['mobile']['initial'] ) . ';'; 
					}
				$css .= '}';
			}
		$css .= '}';

		return $css;
	}

	add_filter( 'xenial_dynamic_woo_css', 'xenial_dynamic_header_addonify_wishlist_css' );
}



if ( ! function_exists( 'xenial_get_wishlist_count' ) ) {

    function xenial_get_wishlist_count() {

        $wishlist_count = 0;

        if ( function_exists( 'addonify_wishlist_get_wishlist_items_count' ) ) {
            $wishlist_count = addonify_wishlist_get_wishlist_items_count();
        }

        echo $wishlist_count;
        wp_die();
    }

    add_action( 'wp_ajax_xenial_get_wishlist_count', 'xenial_get_wishlist_count' );
    add_action( 'wp_ajax_nopriv_xenial_get_wishlist_count', 'xenial_get_wishlist_count' );
}