<?php 


if ( ! function_exists( 'xenial_get_woo_dropdown_header_element_customize_defaults' ) ) {

    function xenial_get_woo_dropdown_header_element_customize_defaults( $customize_defaults ) {

        $woo_dropdown_header_element_customize_defaults = apply_filters( 
            "xenial_header_woo_dropdown_customize_defaults_filter", 
            array(
                'header_ele_woo_dropdown_menu' => '',
                'header_ele_woo_dropdown_visibility' => 'desktop,tablet,mobile',
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
                'header_ele_woo_dropdown_items_divider_color' => '{"desktop":{"initial":""},"tablet":{"initial":"",},"mobile":{"initial":""}}',
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
                            'header_ele_woo_dropdown_general_divider_3' => ''
                        ) 
                    ),
                    'tab_2' => apply_filters( 
                        'xenial_header_woo_dropdown_tab_2_controls', 
                        array(
                            'header_ele_woo_dropdown_btn_bg_color' => '',
                            'header_ele_woo_dropdown_btn_text_color' => '',
                            'header_ele_woo_dropdown_btn_font_size' => '',
                            'header_ele_woo_dropdown_btn_font_size' => '',
                            'header_ele_woo_dropdown_btn_line_heignt' => '',
                            'header_ele_woo_dropdown_btn_font_weight' => '',
                            'header_ele_woo_dropdown_btn_font_style' => '',
                            'header_ele_woo_dropdown_btn_padding' => '',
                            'header_ele_woo_dropdown_btn_border' => '',
                            'header_ele_woo_dropdown_bg_color' => '',
                            'header_ele_woo_dropdown_text_color' => '',
                            'header_ele_woo_dropdown_hover_text_color' => '',
                            'header_ele_woo_dropdown_item_divider_color' => '',
                            'header_ele_woo_dropdown_items_font_size' => '',
                            'header_ele_woo_dropdown_items_line_heignt' => '',
                            'header_ele_woo_dropdown_items_font_weight' => '',
                            'header_ele_woo_dropdown_items_font_style' => '',
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
                'label' => esc_html__( 'Label', 'xenial' ),
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
            'header_ele_woo_dropdown_btn_line_height',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woocommerce_dropdown',
                'label' => esc_html__( 'Line Height', 'xenial' ),
                'input_attrs' => xenial_get_line_height_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_dropdown_btn_line_height' )
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
    }


    /**
     * Register WooCommerce custommizer settings.
     * 
     * Hooked - xenial_header_ele_woo_dropdown_customize_controls_init
     */ 
    add_action( 'customize_register', 'xenial_header_ele_woo_dropdown_customize_controls_init' );
}