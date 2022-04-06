<?php 


if ( ! function_exists( 'xenial_get_woo_dropdown_header_element_customize_defaults' ) ) {

    function xenial_get_woo_dropdown_header_element_customize_defaults( $customize_defaults ) {

        $woo_dropdown_header_element_customize_defaults = apply_filters( 
            "xenial_header_woo_dropdown_customize_defaults_filter", 
            array(
                'header_ele_woo_dropdown_menu' => '',
                'header_ele_woo_dropdown_visibility' => 'desktop,tablet,mobile',
                'header_ele_woo_dropdown_toggle_on' => 'click',
                'header_ele_woo_dropdown_toggle_direction' => 'default',
                'header_ele_woo_dropdown_toggle_animation' => 'FadeInDown',
                'header_ele_woo_dropdown_btn_label' => esc_html__( 'All Products', 'xenial' ),
                'header_ele_woo_dropdown_btn_bg_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_dropdown_btn_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_dropdown_btn_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'header_ele_woo_dropdown_btn_line_heignt' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1,
	            ),
	            'header_ele_woo_dropdown_btn_font_weight' => '400',
	            'header_ele_woo_dropdown_btn_font_style' => 'normal',
                'header_ele_woo_dropdown_btn_text_transform' => 'none',
                'header_ele_woo_dropdown_btn_padding' => array(
                    'desktop_top' => 0,
	                'desktop_right' => 0,
	                'desktop_bottom' => 0,
	                'desktop_left' => 0,
	                'tablet_top' => 0,
	                'tablet_right' => 0,
	                'tablet_bottom' => 0,
	                'tablet_left' => 0,
	                'mobile_top' => 0,
	                'mobile_right' => 0,
	                'mobile_bottom' => 0,
	                'mobile_left' => 0,
                ),
                'header_ele_woo_dropdown_btn_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
                'header_ele_woo_dropdown_bg_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_dropdown_items_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_dropdown_items_divider_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_dropdown_items_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'header_ele_woo_dropdown_items_line_heignt' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1,
	            ),
	            'header_ele_woo_dropdown_items_font_weight' => '400',
	            'header_ele_woo_dropdown_items_font_style' => 'normal',
            ) 
        );

        $customize_defaults = array_merge( $customize_defaults, $woo_dropdown_header_element_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_woo_dropdown_header_element_customize_defaults' );
}



if ( ! function_exists( 'xenial_header_ele_woo_dropdown_customize_controls_init' ) ) {

    function xenial_header_ele_woo_dropdown_customize_controls_init( $wp_customize ) {
        
        xenial_section_field( 
            'xenial_header_woocommerce_dropdown',
            array(
                'priority' => 11,
                'panel' => 'xenial_site_header_panel',
                'title' => esc_html__( 'Woo Dropdown', 'xenial' )
            )
        );

        xenial_tab_field(
            'xenial_header_woo_dropdown_tab',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'tabs' => xenial_get_tab_control_2_labels(),
                'controls' => array(
                    'tab_1' => apply_filters( 
                        'xenial_header_woo_dropdown_tab_1_controls', 
                        array(
                            'header_ele_woo_dropdown_menu' => '',
                            'header_ele_woo_dropdown_general_divider_1' => '',
                            'header_ele_woo_dropdown_visibility' => '',
                            'header_ele_woo_dropdown_general_divider_2' => '',
                            'header_ele_woo_dropdown_btn_label' => '',
                            'header_ele_woo_dropdown_general_divider_3' => '',
                            'header_ele_woo_dropdown_toggle_on' => '',
                            'header_ele_woo_dropdown_general_divider_4' => '',
                            'header_ele_woo_dropdown_toggle_direction' => '',
                            'header_ele_woo_dropdown_general_divider_5' => '',
                            'header_ele_woo_dropdown_toggle_animation' => '',
                        ) 
                    ),
                    'tab_2' => apply_filters( 
                        'xenial_header_woo_dropdown_tab_2_controls', 
                        array(
                            'header_ele_woo_dropdown_toggle_button_info' => '',
                            'header_ele_woo_dropdown_btn_padding' => '',
                            'header_ele_woo_dropdown_style_divider_1' => '',
                            'header_ele_woo_dropdown_btn_bg_color' => '',
                            'header_ele_woo_dropdown_btn_text_color' => '',
                            'header_ele_woo_dropdown_style_divider_2' => '',
                            'header_ele_woo_dropdown_btn_border' => '',
                            'header_ele_woo_dropdown_style_divider_3' => '',
                            'header_ele_woo_dropdown_btn_font_size' => '',
                            'header_ele_woo_dropdown_btn_line_heignt' => '',
                            'header_ele_woo_dropdown_btn_font_weight' => '',
                            'header_ele_woo_dropdown_btn_font_style' => '',
                            'header_ele_woo_dropdown_btn_text_transform' => '',
                            'header_ele_woo_dropdown_content_info' => '',
                            'header_ele_woo_dropdown_bg_color' => '',
                            'header_ele_woo_dropdown_items_text_color' => '',
                            'header_ele_woo_dropdown_items_divider_color' => '',
                            'header_ele_woo_dropdown_style_divider_4' => '',
                            'header_ele_woo_dropdown_items_font_size' => '',
                            'header_ele_woo_dropdown_items_line_heignt' => '',
                            'header_ele_woo_dropdown_items_font_weight' => '',
                            'header_ele_woo_dropdown_items_font_style' => '',
                            'header_ele_woo_dropdown_items_text_transform' => ''
                        ) 
                    )
                )
            )
        );

        xenial_select_field(
            'header_ele_woo_dropdown_menu',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Woo Dropdown Menu', 'xenial' ),
                'choices' => xenial_get_nav_menus(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_menu' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_general_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_button_checkbox_field(
            'header_ele_woo_dropdown_visibility',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Visibility', 'xenial' ),
                'item' => 'icon',
                'choices' => array(
                    'desktop' => 'dashicons-desktop',
                    'tablet' => 'dashicons-tablet',
                    'mobile' => 'dashicons-smartphone'
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_visibility' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_general_divider_2', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_text_field(
            'header_ele_woo_dropdown_btn_label',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Toggle Button Label', 'xenial' ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_label' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_general_divider_3', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_select_field(
            'header_ele_woo_dropdown_toggle_on',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Toggle On', 'xenial' ),
                'choices' => array(
                    'hover' => esc_html__( 'Hover', 'xenial' ),
                    'click' => esc_html__( 'Click', 'xenial' )
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_toggle_on' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_general_divider_4', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_select_field(
            'header_ele_woo_dropdown_toggle_direction',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Toggle Direction', 'xenial' ),
                'choices' => array(
                    'default' => esc_html__( 'Right', 'xenial' ),
                    'left'  => esc_html__( 'Left', 'xenial' )
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_toggle_direction' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_general_divider_5', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_select_field(
            'header_ele_woo_dropdown_toggle_animation',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Reveal Effect', 'xenial' ),
                'choices' => xenial_get_dropdown_reveal_effects(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_toggle_animation' )
            )
        );

        xenial_controls_wrapper_field(
            'header_ele_woo_dropdown_toggle_button_info',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Toggle Button', 'xenial' )
            ),
            false
        );

        xenial_box_dimension_field(
            'header_ele_woo_dropdown_btn_padding',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Padding (px)', 'xenial' ),
                'input_attrs' => array(
                    'min' => 0, 
                    'max' => 100, 
                    'step' => 1, 
                    'responsive' => true
                ),
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_padding' )
            ),
            true
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_dropdown_btn_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_bg_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_dropdown_btn_text_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_text_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_2', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_box_border_field(
            'header_ele_woo_dropdown_btn_border',
            array(
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Button Border', 'xenial' ),
                'is_responsive' => true,
                'allowed_fields' => array(
                    'desktop' => array(
                        'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
                        'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
                        'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
                    ),
                    'tablet' => array(
                        'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
                        'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
                        'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
                    ),
                    'mobile' => array( 
                        'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
                        'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
                        'border_colors' => array( 'top', 'right', 'bottom', 'left', 'hover' )
                    )
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_border' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_3', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );

        xenial_range_control_field(
            'header_ele_woo_dropdown_btn_font_size',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Size (px)', 'xenial' ),
                'input_attrs' => xenial_get_font_size_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_font_size' )
            )
        );
        
        xenial_range_control_field(
            'header_ele_woo_dropdown_btn_line_heignt',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Line Height', 'xenial' ),
                'input_attrs' => xenial_get_line_height_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_line_heignt' )
            )
        );
        
        
        xenial_select_field(
            'header_ele_woo_dropdown_btn_font_weight',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Weight', 'xenial' ),
                'choices' => xenial_get_standard_font_weights(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_font_weight' )
            )
        );
        
        
        xenial_radio_button_group_field(
            'header_ele_woo_dropdown_btn_font_style',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Style', 'xenial' ),
                'item' => 'text',
                'columns' => 2,
                'choices' => array(
                    'normal' => 'Aa',
                    'italic' => '<i>Aa</i>'
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_font_style' )
            ),
            false
        );

        xenial_radio_button_group_field(
            'header_ele_woo_dropdown_btn_text_transform',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Text Transform', 'xenial' ),
                'item' => 'text',
                'columns' => 4,
                'choices' => xenial_get_text_transforms(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_text_transform' )
            ),
            false
        );

        xenial_controls_wrapper_field(
            'header_ele_woo_dropdown_content_info',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown', 'xenial' )
            ),
            false
        );

        xenial_color_picker_field(
            'header_ele_woo_dropdown_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_bg_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_dropdown_items_text_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_text_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_dropdown_items_divider_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Dropdown Items Divider Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_divider_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_4', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown', 
            ) 
        );


        xenial_range_control_field(
            'header_ele_woo_dropdown_items_font_size',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Size (px)', 'xenial' ),
                'input_attrs' => xenial_get_font_size_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_font_size' )
            )
        );
        
        xenial_range_control_field(
            'header_ele_woo_dropdown_items_line_heignt',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Line Height', 'xenial' ),
                'input_attrs' => xenial_get_line_height_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_line_heignt' )
            )
        );
        
        
        xenial_select_field(
            'header_ele_woo_dropdown_items_font_weight',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Weight', 'xenial' ),
                'choices' => xenial_get_standard_font_weights(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_font_weight' )
            )
        );
        
        
        xenial_radio_button_group_field(
            'header_ele_woo_dropdown_items_font_style',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Font Style', 'xenial' ),
                'item' => 'text',
                'columns' => 2,
                'choices' => array(
                    'normal' => 'Aa',
                    'italic' => '<i>Aa</i>'
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_font_style' )
            ),
            false
        );

        xenial_radio_button_group_field(
            'header_ele_woo_dropdown_items_text_transform',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Text Transform', 'xenial' ),
                'item' => 'text',
                'columns' => 4,
                'choices' => xenial_get_text_transforms(),
                'default' => xenial_get_customize_default( 'header_ele_woo_dropdown_items_text_transform' )
            ),
            false
        );
    }


    /**
     * Register WooCommerce custommizer settings.
     * 
     * Hooked - xenial_header_ele_woo_dropdown_customize_controls_init
     */ 
    add_action( 'customize_register', 'xenial_header_ele_woo_dropdown_customize_controls_init' );
}


if ( ! function_exists( 'xenial_header_woo_dropdown_dynamic_css' ) ) {

    function xenial_header_woo_dropdown_dynamic_css( $css ) {

        if ( ! xenial_is_header_element_active( 'woocommerce_dropdown' ) ) {
			return $css;
		}

        $dropdown_toggle_btn_bg_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_btn_bg_color' ) );

        $dropdown_toggle_btn_label_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_btn_text_color' ) );

        $dropdown_toggle_btn_font_desktop = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_btn_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_btn_line_heignt_desktop' ),
			'font-weight' => xenial_get_option( 'header_ele_woo_dropdown_btn_font_weight' ),
			'font-style' => xenial_get_option( 'header_ele_woo_dropdown_btn_font_style' ),
			'text-transform' => xenial_get_option( 'header_ele_woo_dropdown_btn_text_transform' )
        );

        $dropdown_toggle_btn_font_tablet = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_btn_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_btn_line_heignt_tablet' )
        );

        $dropdown_toggle_btn_font_mobile = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_btn_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_btn_line_heignt_mobile' )
        );

        $dropdown_toggle_btn_padding_desktop = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_desktop_left' )
        );

        $dropdown_toggle_btn_padding_tablet = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_tablet_left' )
        );

        $dropdown_toggle_btn_padding_mobile = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_dropdown_btn_padding_mobile_left' )
        );

        $dropdown_toggle_btn_borders = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_btn_border' ) );

        $dropdown_bg_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_bg_color' ) );

        $dropdown_items_font_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_items_text_color' ) );

        $dropdown_items_divider_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_dropdown_items_divider_color' ) );

        $dropdown_items_font_desktop = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_items_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_items_line_height_desktop' ),
			'font-weight' => xenial_get_option( 'header_ele_woo_dropdown_items_font_weight' ),
			'font-style' => xenial_get_option( 'header_ele_woo_dropdown_items_font_style' ),
			'text-transform' => xenial_get_option( 'header_ele_woo_dropdown_items_text_transform' )
        );

        $dropdown_items_font_tablet = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_items_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_items_line_height_tablet' )
        );

        $dropdown_items_font_mobile = array(
            'font-size' => xenial_get_option( 'header_ele_woo_dropdown_items_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_ele_woo_dropdown_items_line_height_mobile' )
        );

        $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle {';
            if ( $dropdown_toggle_btn_bg_colors['desktop']['initial'] ) {
                $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['desktop']['initial'] ) . ';';
            }
            $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_font_desktop );
            if ( $dropdown_toggle_btn_label_colors['desktop']['initial'] ) {
                $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['initial'] ) . ';';
            }
            $css .= xenial_dynamic_spacing_css( $dropdown_toggle_btn_padding_desktop );
            $css .= xenial_dynamic_border_css( $dropdown_toggle_btn_borders['desktop'] );
        $css .= '}';

        $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover {';
            if ( $dropdown_toggle_btn_bg_colors['desktop']['hover'] ) {
                $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['desktop']['hover'] ) . ';';
            }
            $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_label_colors );
            if ( $dropdown_toggle_btn_label_colors['desktop']['hover'] ) {
                $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['hover'] ) . ';';
            }
        $css .= '}';
        
        if ( $dropdown_toggle_btn_label_colors['desktop']['initial'] ) {
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle .icon svg {';
                $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['initial'] ) . ';';
                $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['initial'] ) . ';';
            $css .= '}';
        }

        if ( $dropdown_toggle_btn_label_colors['desktop']['hover'] ) {
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover .icon svg {';
                $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['hover'] ) . ';';
                $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['desktop']['hover'] ) . ';';
            $css .= '}';
        }

        if ( $dropdown_bg_colors['desktop']['initial'] ) {
            $css .= '#xe-woo-vertical-navigation ul {';
                $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['desktop']['initial'] ) . ';';
            $css .= '}';
            $css .= '#xe-woo-vertical-navigation>ul:after {';
                $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['desktop']['initial'] ) . ';';
            $css .= '}';
            $css .= '#xe-woo-vertical-navigation .children, #xe-woo-vertical-navigation .sub-menu {';
                $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['desktop']['initial'] ) . ';';
            $css .= '}';
        }

        $css .= '#xe-woo-vertical-navigation ul li a {';
            if ( $dropdown_items_font_colors['desktop']['initial'] ) {
                $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['desktop']['initial'] ) . ';';
                $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['desktop']['initial'] ) . ';';
            }
            if ( $dropdown_items_divider_colors['desktop']['initial'] ) {
                $css .= 'border-bottom-color: ' . esc_attr( $dropdown_items_divider_colors['desktop']['initial'] ) . ';';
            }
            $css .= xenial_dynamic_font_css( $dropdown_items_font_desktop );
        $css .= '}';

        if ( $dropdown_items_font_colors['desktop']['hover'] ) {
            $css .= '#xe-woo-vertical-navigation ul li a:hover {';
                $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['desktop']['hover'] ) . ';';
                $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['desktop']['hover'] ) . ';';
            $css .= '}';
        }



        $css .= '@media screen and (max-width: 768px) {';
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle {';
                if ( $dropdown_toggle_btn_bg_colors['tablet']['initial'] ) {
                    $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['tablet']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_font_tablet );
                if ( $dropdown_toggle_btn_label_colors['tablet']['initial'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_spacing_css( $dropdown_toggle_btn_padding_tablet );
                $css .= xenial_dynamic_border_css( $dropdown_toggle_btn_borders['tablet'] );
            $css .= '}';
    
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover {';
                if ( $dropdown_toggle_btn_bg_colors['tablet']['hover'] ) {
                    $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['tablet']['hover'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_label_colors );
                if ( $dropdown_toggle_btn_label_colors['tablet']['hover'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['hover'] ) . ';';
                }
            $css .= '}';
            
            if ( $dropdown_toggle_btn_label_colors['tablet']['initial'] ) {
                $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle .icon svg {';
                    $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['initial'] ) . ';';
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['initial'] ) . ';';
                $css .= '}';
            }
    
            if ( $dropdown_toggle_btn_label_colors['tablet']['hover'] ) {
                $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover .icon svg {';
                    $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['hover'] ) . ';';
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['tablet']['hover'] ) . ';';
                $css .= '}';
            }
    
            if ( $dropdown_bg_colors['tablet']['initial'] ) {
                $css .= '#xe-woo-vertical-navigation ul {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['tablet']['initial'] ) . ';';
                $css .= '}';
                $css .= '#xe-woo-vertical-navigation>ul:after {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['tablet']['initial'] ) . ';';
                $css .= '}';
                $css .= '#xe-woo-vertical-navigation .children, #xe-woo-vertical-navigation .sub-menu {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['tablet']['initial'] ) . ';';
                $css .= '}';
            }
    
            $css .= '#xe-woo-vertical-navigation ul li a {';
                if ( $dropdown_items_font_colors['tablet']['initial'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['tablet']['initial'] ) . ';';
                    $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['tablet']['initial'] ) . ';';
                }
                if ( $dropdown_items_divider_colors['tablet']['initial'] ) {
                    $css .= 'border-bottom-color: ' . esc_attr( $dropdown_items_divider_colors['tablet']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_items_font_tablet );
            $css .= '}';
    
            if ( $dropdown_items_font_colors['tablet']['hover'] ) {
                $css .= '#xe-woo-vertical-navigation ul li a:hover {';
                    $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['tablet']['hover'] ) . ';';
                    $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['tablet']['hover'] ) . ';';
                $css .= '}';
            }
        $css .= '}';

        $css .= '@media screen and (max-width: 567px) {';
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle {';
                if ( $dropdown_toggle_btn_bg_colors['mobile']['initial'] ) {
                    $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['mobile']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_font_mobile );
                if ( $dropdown_toggle_btn_label_colors['mobile']['initial'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_spacing_css( $dropdown_toggle_btn_padding_mobile );
                $css .= xenial_dynamic_border_css( $dropdown_toggle_btn_borders['mobile'] );
            $css .= '}';
    
            $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover {';
                if ( $dropdown_toggle_btn_bg_colors['mobile']['hover'] ) {
                    $css .= 'background-color: ' . esc_attr( $dropdown_toggle_btn_bg_colors['mobile']['hover'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_toggle_btn_label_colors );
                if ( $dropdown_toggle_btn_label_colors['mobile']['hover'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['hover'] ) . ';';
                }
            $css .= '}';
            
            if ( $dropdown_toggle_btn_label_colors['mobile']['initial'] ) {
                $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle .icon svg {';
                    $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['initial'] ) . ';';
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['initial'] ) . ';';
                $css .= '}';
            }
    
            if ( $dropdown_toggle_btn_label_colors['mobile']['hover'] ) {
                $css .= '#xe-woo-vertical-navigation #xe-woo-vertical-menu-toggle:hover .icon svg {';
                    $css .= 'fill: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['hover'] ) . ';';
                    $css .= 'color: ' . esc_attr( $dropdown_toggle_btn_label_colors['mobile']['hover'] ) . ';';
                $css .= '}';
            }
    
            if ( $dropdown_bg_colors['mobile']['initial'] ) {
                $css .= '#xe-woo-vertical-navigation ul {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['mobile']['initial'] ) . ';';
                $css .= '}';
                $css .= '#xe-woo-vertical-navigation>ul:after {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['mobile']['initial'] ) . ';';
                $css .= '}';
                $css .= '#xe-woo-vertical-navigation .children, #xe-woo-vertical-navigation .sub-menu {';
                    $css .= 'background-color: ' . esc_attr( $dropdown_bg_colors['mobile']['initial'] ) . ';';
                $css .= '}';
            }
    
            $css .= '#xe-woo-vertical-navigation ul li a {';
                if ( $dropdown_items_font_colors['mobile']['initial'] ) {
                    $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['mobile']['initial'] ) . ';';
                    $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['mobile']['initial'] ) . ';';
                }
                if ( $dropdown_items_divider_colors['mobile']['initial'] ) {
                    $css .= 'border-bottom-color: ' . esc_attr( $dropdown_items_divider_colors['mobile']['initial'] ) . ';';
                }
                $css .= xenial_dynamic_font_css( $dropdown_items_font_mobile );
            $css .= '}';
    
            if ( $dropdown_items_font_colors['mobile']['hover'] ) {
                $css .= '#xe-woo-vertical-navigation ul li a:hover {';
                    $css .= 'color: ' . esc_attr( $dropdown_items_font_colors['mobile']['hover'] ) . ';';
                    $css .= 'fill: ' . esc_attr( $dropdown_items_font_colors['mobile']['hover'] ) . ';';
                $css .= '}';
            }
        $css .= '}';

        return $css;
    }

    add_filter( 'xenial_dynamic_woo_css', 'xenial_header_woo_dropdown_dynamic_css' );
}