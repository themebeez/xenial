<?php 

if ( ! function_exists( 'xenial_get_woo_minicart_header_element_customize_defaults' ) ) {

    function xenial_get_woo_minicart_header_element_customize_defaults( $customize_defaults ) {

        $woo_minicart_header_element_customize_defaults = apply_filters( 
            "xenial_header_woo_minicart_customize_defaults_filter", 
            array(
                'header_ele_woo_minicart_visibility' => 'desktop,tablet,mobile',
                'header_ele_woo_minicart_title' => esc_html__( 'Shopping Cart', 'xenial' ),
                'header_ele_woo_minicart_icon_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
                'header_ele_woo_minicart_icon_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_minicart_icon_count_bg_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_icon_count_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_bg_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_minicart_divider_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_title_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_subtotal_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_subtotal_price_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'header_ele_woo_minicart_view_cart_btn_padding' => array(
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
                'header_ele_woo_minicart_view_cart_btn_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
                'header_ele_woo_minicart_view_cart_btn_bg_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_minicart_view_cart_btn_label_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_minicart_checkout_btn_padding' => array(
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
                'header_ele_woo_minicart_checkout_btn_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
                'header_ele_woo_minicart_checkout_btn_bg_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'header_ele_woo_minicart_checkout_btn_label_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',

                'transparent_header_ele_woo_minicart_icon_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
                'transparent_header_ele_woo_minicart_icon_count_bg_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'transparent_header_ele_woo_minicart_icon_count_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            ) 
        );

        $customize_defaults = array_merge( $customize_defaults, $woo_minicart_header_element_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_woo_minicart_header_element_customize_defaults' );
}


if ( ! function_exists( 'xenial_header_ele_woo_minicart_customize_controls_init' ) ) {

    function xenial_header_ele_woo_minicart_customize_controls_init( $wp_customize ) {

        xenial_section_field( 
            'xenial_header_woo_minicart',
            array(
                'priority' => 11,
                'panel' => 'xenial_site_header_panel',
                'title' => esc_html__( 'Woo Minicart', 'xenial' )
            )
        );

        xenial_tab_field(
            'xenial_header_woo_minicart_tab',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'tabs' => xenial_get_tab_control_2_labels(),
                'controls' => array(
                    'tab_1' => apply_filters( 
                        'xenial_header_woo_minicart_tab_1_controls', 
                        array(
                            'header_ele_woo_minicart_visibility' => '',
                            'header_ele_woo_minicart_general_divider_1' => '',
                            'header_ele_woo_minicart_title' => '',
                            'header_ele_woo_minicart_general_divider_2' => ''
                        ) 
                    ),
                    'tab_2' => apply_filters( 
                        'xenial_header_woo_minicart_tab_2_controls', 
                        array(
                            'header_ele_woo_minicart_toggle_icon_wrapper' => '',
                            'header_ele_woo_minicart_icon_size' => '',
                            'header_ele_woo_dropdown_style_divider_1' => '',
                            'header_ele_woo_minicart_icon_color' => '',
                            'header_ele_woo_dropdown_style_divider_2' => '',
                            'header_ele_woo_minicart_icon_count_bg_color' => '',
                            'header_ele_woo_dropdown_style_divider_3' => '',
                            'header_ele_woo_minicart_icon_count_color' => '',
                            
                            'header_ele_woo_minicart_content_wrapper' => '',
                            'header_ele_woo_minicart_bg_color' => '',
                            'header_ele_woo_minicart_color' => '',
                            'header_ele_woo_dropdown_style_divider_4' => '',
                            'header_ele_woo_minicart_divider_color' => '',
                            'header_ele_woo_dropdown_style_divider_5' => '',
                            'header_ele_woo_minicart_title_color' => '',
                            'header_ele_woo_dropdown_style_divider_6' => '',
                            'header_ele_woo_minicart_subtotal_color' => '',
                            'header_ele_woo_minicart_subtotal_price_color' => '',
                            'header_ele_woo_dropdown_style_divider_7' => '',
                            'header_ele_woo_minicart_view_cart_btn_info' => '',
                            'header_ele_woo_minicart_view_cart_btn_padding' => '',
                            'header_ele_woo_minicart_view_cart_btn_border' => '',
                            'header_ele_woo_minicart_view_cart_btn_bg_color' => '',
                            'header_ele_woo_minicart_view_cart_btn_label_color' => '',
                            'header_ele_woo_dropdown_style_divider_8' => '',
                            'header_ele_woo_minicart_checkout_btn_info' => '',
                            'header_ele_woo_minicart_checkout_btn_padding' => '',
                            'header_ele_woo_minicart_checkout_btn_border' => '',
                            'header_ele_woo_minicart_checkout_btn_bg_color' => '',
                            'header_ele_woo_minicart_checkout_btn_label_color' => '',
                        ) 
                    )
                )
            )
        );

        xenial_button_checkbox_field(
            'header_ele_woo_minicart_visibility',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Visibility', 'xenial' ),
                'item' => 'icon',
                'choices' => array(
                    'desktop' => 'dashicons-desktop',
                    'tablet' => 'dashicons-tablet',
                    'mobile' => 'dashicons-smartphone'
                ),
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_visibility' )
            )
        );
    
        xenial_divider_field( 
            'header_ele_woo_minicart_general_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );
    
        xenial_text_field(
            'header_ele_woo_minicart_title',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Title', 'xenial' ),
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_title' )
            )
        );
    
        xenial_divider_field( 
            'header_ele_woo_minicart_general_divider_2', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );


        xenial_controls_wrapper_field(
            'header_ele_woo_minicart_toggle_icon_wrapper',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Icon', 'xenial' )
            ),
            false
        );

        xenial_range_control_field(
            'header_ele_woo_minicart_icon_size',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Icon Size (px)', 'xenial' ),
                'input_attrs' => xenial_get_font_size_input_attrs(),
                'responsive' => true,
                'defaults' => xenial_get_customize_default( 'header_ele_woo_minicart_icon_size' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_1', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_icon_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Icon Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_icon_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_2', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_icon_count_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Count Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_icon_count_bg_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_3', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_icon_count_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Count Text Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_icon_count_color' )
            )
        );

        xenial_controls_wrapper_field(
            'header_ele_woo_minicart_content_wrapper',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Content', 'xenial' )
            ),
            false
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Container Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_bg_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Content Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_4', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_divider_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Products Divider Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_divider_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_5', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_title_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Minicart Title Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_title_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_6', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_subtotal_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Subtotal Text Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_subtotal_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_subtotal_price_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Subtotal Amount Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_subtotal_price_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_7', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_info_field(
            'header_ele_woo_minicart_view_cart_btn_info',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'View Cart Button', 'xenial' )
            )
        );

        xenial_box_dimension_field(
            'header_ele_woo_minicart_view_cart_btn_padding',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Padding (px)', 'xenial' ),
                'input_attrs' => array(
                    'min' => 0, 
                    'max' => 100, 
                    'step' => 1, 
                    'responsive' => true
                ),
                'defaults' => xenial_get_customize_default( 'header_ele_woo_minicart_view_cart_btn_padding' )
            ),
            true
        );

        xenial_box_border_field(
            'header_ele_woo_minicart_view_cart_btn_border',
            array(
                'section' => 'xenial_header_woo_minicart',
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
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_view_cart_btn_border' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_view_cart_btn_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_view_cart_btn_bg_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_view_cart_btn_label_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Label Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_view_cart_btn_label_color' )
            )
        );

        xenial_divider_field( 
            'header_ele_woo_dropdown_style_divider_8', 
            array( 
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart', 
            ) 
        );

        xenial_info_field(
            'header_ele_woo_minicart_checkout_btn_info',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Checkout Button', 'xenial' )
            )
        );

        xenial_box_dimension_field(
            'header_ele_woo_minicart_checkout_btn_padding',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Padding (px)', 'xenial' ),
                'input_attrs' => array(
                    'min' => 0, 
                    'max' => 100, 
                    'step' => 1, 
                    'responsive' => true
                ),
                'defaults' => xenial_get_customize_default( 'header_ele_woo_minicart_checkout_btn_padding' )
            ),
            true
        );

        xenial_box_border_field(
            'header_ele_woo_minicart_checkout_btn_border',
            array(
                'section' => 'xenial_header_woo_minicart',
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
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_checkout_btn_border' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_checkout_btn_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_checkout_btn_bg_color' )
            )
        );

        xenial_color_picker_field(
            'header_ele_woo_minicart_checkout_btn_label_color',
            array(
                'priority' => 10,
                'section' => 'xenial_header_woo_minicart',
                'label' => esc_html__( 'Button Label Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'header_ele_woo_minicart_checkout_btn_label_color' )
            )
        );




        xenial_controls_wrapper_field(
            'transparent_header_woo_minicart_wrapper',
            array(
                'priority' => 10,
                'section' => 'xenial_transparent_header',
                'label' => esc_html__( 'Woo Minicart', 'xenial' )
            ),
            false
        );


        xenial_color_picker_field(
            'transparent_header_ele_woo_minicart_icon_color',
            array(
                'priority' => 10,
                'section' => 'xenial_transparent_header',
                'label' => esc_html__( 'Icon Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'transparent_header_ele_woo_minicart_icon_color' )
            )
        );

        xenial_color_picker_field(
            'transparent_header_ele_woo_minicart_icon_count_bg_color',
            array(
                'priority' => 10,
                'section' => 'xenial_transparent_header',
                'label' => esc_html__( 'Count Background Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'transparent_header_ele_woo_minicart_icon_count_bg_color' )
            )
        );

        xenial_color_picker_field(
            'transparent_header_ele_woo_minicart_icon_count_color',
            array(
                'priority' => 10,
                'section' => 'xenial_transparent_header',
                'label' => esc_html__( 'Count Text Color', 'xenial' ),
                'is_responsive' => true,
                'default' => xenial_get_customize_default( 'transparent_header_ele_woo_minicart_icon_count_color' )
            )
        );
    }
    
    /**
     * Register WooCommerce custommizer settings.
     * 
     * Hooked - xenial_header_ele_woo_minicart_customize_controls_init
     */ 
    add_action( 'customize_register', 'xenial_header_ele_woo_minicart_customize_controls_init' );
}



/**
 * Add fields in the transparent header section style tab.
 * 
 * @since 1.0.0
 * @return array 
 */
// if ( ! function_exists( 'xenial_transparent_header_style_tab_woo_minicart_fields' ) ) {

    function xenial_transparent_header_style_tab_woo_minicart_fields( $style_tab_fields ) {

        $woo_minicart_style_fields = array(
            'transparent_header_woo_minicart_wrapper' => '',
            'transparent_header_ele_woo_minicart_icon_color' => '',
            'transparent_header_ele_woo_minicart_icon_count_bg_color' => '',
            'transparent_header_ele_woo_minicart_icon_count_color' => '',
        );

        $style_tab_fields = array_merge( $style_tab_fields, $woo_minicart_style_fields );

        return $style_tab_fields;
    }
    
    add_filter( 'xenial_transparent_header_tab_2_controls', 'xenial_transparent_header_style_tab_woo_minicart_fields' );
// }


if ( ! function_exists( 'xenial_header_woo_minicart_dynamic_css' ) ) {

    function xenial_header_woo_minicart_dynamic_css( $css ) {

        if ( ! xenial_is_header_element_active( 'woocommerce_minicart' ) ) {

			return $css;
		}

        $cart_icon_size = array(
            'desktop' => xenial_get_option( 'header_ele_woo_minicart_icon_size_desktop' ),
            'tablet' => xenial_get_option( 'header_ele_woo_minicart_icon_size_tablet' ),
            'mobile' => xenial_get_option( 'header_ele_woo_minicart_icon_size_mobile' )
        );

        $cart_icon_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_icon_color' ) );

        $cart_count_bg_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_icon_count_bg_color' ) );

        $cart_count_text_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_icon_count_color' ) );

        $minicart_bg_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_bg_color' ) );

        $minicart_text_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_color' ) );

        $products_divider_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_divider_color' ) );

        $minicart_title_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_title_color' ) );

        $subtotal_text_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_subtotal_color' ) );

        $subtotal_amount_color = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_subtotal_price_color' ) );

        $view_cart_button_padding_desktop = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_desktop_left' )
        );

        $view_cart_button_padding_tablet = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_tablet_left' )
        );

        $view_cart_button_padding_mobile = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_padding_mobile_left' )
        );

        $view_cart_button_borders = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_border' ) );

        $view_cart_button_bg_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_bg_color' ) );

        $view_cart_button_label_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_view_cart_btn_label_color' ) );

        $checkout_button_padding_desktop = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_desktop_left' )
        );

        $checkout_button_padding_tablet = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_tablet_left' )
        );

        $checkout_button_padding_mobile = array(
            'padding-top' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_ele_woo_minicart_checkout_btn_padding_mobile_left' )
        );

        $checkout_button_borders = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_checkout_btn_border' ) );

        $checkout_button_bg_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_checkout_btn_bg_color' ) );

        $checkout_button_label_colors = xenial_json_decode( xenial_get_option( 'header_ele_woo_minicart_checkout_btn_label_color' ) );



        $transparent_cart_icon_color = xenial_json_decode( xenial_get_option( 'transparent_header_ele_woo_minicart_icon_color' ) );

        $transparent_cart_count_bg_color = xenial_json_decode( xenial_get_option( 'transparent_header_ele_woo_minicart_icon_count_bg_color' ) );

        $transparent_cart_count_text_color = xenial_json_decode( xenial_get_option( 'transparent_header_ele_woo_minicart_icon_count_color' ) );

        $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button svg {';
            if ( $cart_icon_size['desktop'] ) {
                $css .= 'width: ' . $cart_icon_size['desktop'] . 'px;';
                $css .= 'height: ' . $cart_icon_size['desktop'] . 'px;';
            }

            if ( $cart_icon_color['desktop']['initial'] ) {
                $css .= 'fill: ' . $cart_icon_color['desktop']['initial'] . ';';
                $css .= 'color: ' . $cart_icon_color['desktop']['initial'] . ';';
            }
        $css .= '}';

        if ( $cart_icon_color['desktop']['hover'] ) {
            $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                $css .= 'fill: ' . $cart_icon_color['desktop']['hover'] . ';';
                $css .= 'color: ' . $cart_icon_color['desktop']['hover'] . ';';
            $css .= '}';
        }

        if ( 
            $cart_count_bg_color['desktop']['initial'] ||
            $cart_count_text_color['desktop']['initial']
        ) {
            $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                if ( $cart_count_bg_color['desktop']['initial'] ) {
                    $css .= 'background-color: ' . $cart_count_bg_color['desktop']['initial'] . ';';
                }
                if ( $cart_count_text_color['desktop']['initial'] ) {
                    $css .= 'color: ' . $cart_count_text_color['desktop']['initial'] . ';';
                }
            $css .= '}';
        }

        if ( $minicart_bg_color['desktop']['initial'] ) {

            $css .= '#xe-woo-minicart-canvas {';
                $css .= 'background-color: ' . $minicart_bg_color['desktop']['initial'] . ';';
            $css .= '}';
        }

        if ( $minicart_text_color['desktop']['initial'] ) {

            $css .= '#xe-woo-minicart-canvas, 
                    #xe-woo-minicart-canvas a, 
                    #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:not(.remove_from_cart_button),
                    #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove {';
                $css .= 'color: ' . $minicart_text_color['desktop']['initial'] . ';'; 
            $css .= '}';

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close {';
                $css .= 'color: ' . $minicart_text_color['desktop']['initial'] . ';';
                $css .= 'fill: ' . $minicart_text_color['desktop']['initial'] . ';';
            $css .= '}';
        }

        if ( $minicart_text_color['desktop']['hover'] ) {

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:hover,
                    #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove:hover {';
                $css .= 'color: ' . $minicart_text_color['desktop']['hover'] . ' !important;'; 
            $css .= '}';

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close:hover {';
                $css .= 'color: ' . $minicart_text_color['desktop']['hover'] . ';';
                $css .= 'fill: ' . $minicart_text_color['desktop']['hover'] . ';';
            $css .= '}';
        }

        if ( $products_divider_color['desktop']['initial'] ) {

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li, #xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header {';
                $css .= 'border-bottom-color: ' . $products_divider_color['desktop']['initial'] . ';';
            $css .= '}';

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom {';
                $css .= 'border-top-color: ' . $products_divider_color['desktop']['initial'] . ';';
            $css .= '}';
        }


        if ( $minicart_title_color['desktop']['initial'] ) {

            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header .xe-woo-minicart-title {';
                $css .= 'color: ' . $minicart_title_color['desktop']['initial'] . ';';
            $css .= '}';
        }

        if ( $subtotal_text_color['desktop']['initial'] ) {
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__total {';
                $css .= 'color: ' . $subtotal_text_color['desktop']['initial'] . ';';
            $css .= '}';
        }

        if ( $subtotal_amount_color['desktop']['initial'] ) {
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons {';
                $css .= 'color: ' . $subtotal_amount_color['desktop']['initial'] . ';';
            $css .= '}';
        }

        $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout) {';
            $css .= xenial_dynamic_spacing_css( $view_cart_button_padding_desktop );
            $css .= xenial_dynamic_border_css( $view_cart_button_borders['desktop'] );

            if ( $view_cart_button_bg_colors['desktop']['initial'] ) {
                $css .= 'background-color: ' . $view_cart_button_bg_colors['desktop']['initial'] . ';';
            }

            if ( $view_cart_button_label_colors['desktop']['initial'] ) {
                $css .= 'color: ' . $view_cart_button_label_colors['desktop']['initial'] . ';';
                $css .= 'fill: ' . $view_cart_button_label_colors['desktop']['initial'] . ';';
            }
        $css .= '}';

        


        $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout):hover {';
            if ( $view_cart_button_bg_colors['desktop']['hover'] ) {
                $css .= 'background-color: ' . $view_cart_button_bg_colors['desktop']['hover'] . ';';
            }

            if ( $view_cart_button_label_colors['desktop']['hover'] ) {
                $css .= 'color: ' . $view_cart_button_label_colors['desktop']['hover'] . ';';
                $css .= 'fill: ' . $view_cart_button_label_colors['desktop']['hover'] . ';';
            }

            if ( $view_cart_button_borders['desktop']['border_colors']['hover'] ) {
                $css .= 'border-color: ' . $view_cart_button_borders['desktop']['border_colors']['hover'] . ';';
            }
        $css .= '}';

        $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout {';
            $css .= xenial_dynamic_spacing_css( $checkout_button_padding_desktop );
            $css .= xenial_dynamic_border_css( $checkout_button_borders['desktop'] );

            if ( $checkout_button_bg_colors['desktop']['initial'] ) {
                $css .= 'background-color: ' . $checkout_button_bg_colors['desktop']['initial'] . ';';
            }

            if ( $checkout_button_label_colors['desktop']['initial'] ) {
                $css .= 'color: ' . $checkout_button_label_colors['desktop']['initial'] . ';';
                $css .= 'fill: ' . $checkout_button_label_colors['desktop']['initial'] . ';';
            }
        $css .= '}';


        $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout:hover {';
            if ( $checkout_button_bg_colors['desktop']['hover'] ) {
                $css .= 'background-color: ' . $checkout_button_bg_colors['desktop']['hover'] . ';';
            }

            if ( $checkout_button_label_colors['desktop']['hover'] ) {
                $css .= 'color: ' . $checkout_button_label_colors['desktop']['hover'] . ';';
                $css .= 'fill: ' . $checkout_button_label_colors['desktop']['hover'] . ';';
            }

            if ( $checkout_button_borders['desktop']['border_colors']['hover'] ) {
                $css .= 'border-color: ' . $checkout_button_borders['desktop']['border_colors']['hover'] . ';';
            }
        $css .= '}';

        if ( xenial_is_transparent_header_active() ) {

            $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button svg {';
    
                if ( $transparent_cart_icon_color['desktop']['initial'] ) {
                    $css .= 'fill: ' . $transparent_cart_icon_color['desktop']['initial'] . ';';
                    $css .= 'color: ' . $transparent_cart_icon_color['desktop']['initial'] . ';';
                }
            $css .= '}';
    
            if ( $transparent_cart_icon_color['desktop']['hover'] ) {
                $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                    $css .= 'fill: ' . $transparent_cart_icon_color['desktop']['hover'] . ';';
                    $css .= 'color: ' . $transparent_cart_icon_color['desktop']['hover'] . ';';
                $css .= '}';
            }
    
            if ( 
                $transparent_cart_count_bg_color['desktop']['initial'] ||
                $transparent_cart_count_text_color['desktop']['initial']
            ) {
                $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                    if ( $transparent_cart_count_bg_color['desktop']['initial'] ) {
                        $css .= 'background-color: ' . $transparent_cart_count_bg_color['desktop']['initial'] . ';';
                    }
                    if ( $transparent_cart_count_text_color['desktop']['initial'] ) {
                        $css .= 'color: ' . $transparent_cart_count_text_color['desktop']['initial'] . ';';
                    }
                $css .= '}';
            }
        }

        $css .= '@media screen and (max-width: 768px) {';
            $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button svg {';
                if ( $cart_icon_size['tablet'] ) {
                    $css .= 'width: ' . $cart_icon_size['tablet'] . 'px;';
                    $css .= 'height: ' . $cart_icon_size['tablet'] . 'px;';
                }
    
                if ( $cart_icon_color['tablet']['initial'] ) {
                    $css .= 'fill: ' . $cart_icon_color['tablet']['initial'] . ';';
                    $css .= 'color: ' . $cart_icon_color['tablet']['initial'] . ';';
                }
            $css .= '}';
    
            if ( $cart_icon_color['tablet']['hover'] ) {
                $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                    $css .= 'fill: ' . $cart_icon_color['tablet']['hover'] . ';';
                    $css .= 'color: ' . $cart_icon_color['tablet']['hover'] . ';';
                $css .= '}';
            }
    
            if ( 
                $cart_count_bg_color['tablet']['initial'] ||
                $cart_count_text_color['tablet']['initial']
            ) {
                $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                    if ( $cart_count_bg_color['tablet']['initial'] ) {
                        $css .= 'background-color: ' . $cart_count_bg_color['tablet']['initial'] . ';';
                    }
                    if ( $cart_count_text_color['tablet']['initial'] ) {
                        $css .= 'color: ' . $cart_count_text_color['tablet']['initial'] . ';';
                    }
                $css .= '}';
            }
    
            if ( $minicart_bg_color['tablet']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas {';
                    $css .= 'background-color: ' . $minicart_bg_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $minicart_text_color['tablet']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas, 
                        #xe-woo-minicart-canvas a, 
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:not(.remove_from_cart_button),
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove {';
                    $css .= 'color: ' . $minicart_text_color['tablet']['initial'] . ';'; 
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close {';
                    $css .= 'color: ' . $minicart_text_color['tablet']['initial'] . ';';
                    $css .= 'fill: ' . $minicart_text_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $minicart_text_color['tablet']['hover'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:hover,
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove:hover {';
                    $css .= 'color: ' . $minicart_text_color['tablet']['hover'] . ' !important;'; 
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close:hover {';
                    $css .= 'color: ' . $minicart_text_color['tablet']['hover'] . ';';
                    $css .= 'fill: ' . $minicart_text_color['tablet']['hover'] . ';';
                $css .= '}';
            }
    
            if ( $products_divider_color['tablet']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li, #xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header {';
                    $css .= 'border-bottom-color: ' . $products_divider_color['tablet']['initial'] . ';';
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom {';
                    $css .= 'border-top-color: ' . $products_divider_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
    
            if ( $minicart_title_color['tablet']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header .xe-woo-minicart-title {';
                    $css .= 'color: ' . $minicart_title_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $subtotal_text_color['tablet']['initial'] ) {
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__total {';
                    $css .= 'color: ' . $subtotal_text_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $subtotal_amount_color['tablet']['initial'] ) {
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons {';
                    $css .= 'color: ' . $subtotal_amount_color['tablet']['initial'] . ';';
                $css .= '}';
            }
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout) {';
                $css .= xenial_dynamic_spacing_css( $view_cart_button_padding_tablet );
                $css .= xenial_dynamic_border_css( $view_cart_button_borders['tablet'] );
    
                if ( $view_cart_button_bg_colors['tablet']['initial'] ) {
                    $css .= 'background-color: ' . $view_cart_button_bg_colors['tablet']['initial'] . ';';
                }
    
                if ( $view_cart_button_label_colors['tablet']['initial'] ) {
                    $css .= 'color: ' . $view_cart_button_label_colors['tablet']['initial'] . ';';
                    $css .= 'fill: ' . $view_cart_button_label_colors['tablet']['initial'] . ';';
                }
            $css .= '}';
    
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout):hover {';
                if ( $view_cart_button_bg_colors['tablet']['hover'] ) {
                    $css .= 'background-color: ' . $view_cart_button_bg_colors['tablet']['hover'] . ';';
                }
    
                if ( $view_cart_button_label_colors['tablet']['hover'] ) {
                    $css .= 'color: ' . $view_cart_button_label_colors['tablet']['hover'] . ';';
                    $css .= 'fill: ' . $view_cart_button_label_colors['tablet']['hover'] . ';';
                }

                if ( $view_cart_button_borders['tablet']['border_colors']['hover'] ) {
                    $css .= 'border-color: ' . $view_cart_button_borders['tablet']['border_colors']['hover'] . ';';
                }
            $css .= '}';
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout {';
                $css .= xenial_dynamic_spacing_css( $checkout_button_padding_tablet );
                $css .= xenial_dynamic_border_css( $checkout_button_borders['tablet'] );
    
                if ( $checkout_button_bg_colors['tablet']['initial'] ) {
                    $css .= 'background-color: ' . $checkout_button_bg_colors['tablet']['initial'] . ';';
                }
    
                if ( $checkout_button_label_colors['tablet']['initial'] ) {
                    $css .= 'color: ' . $checkout_button_label_colors['tablet']['initial'] . ';';
                    $css .= 'fill: ' . $checkout_button_label_colors['tablet']['initial'] . ';';
                }
            $css .= '}';
    
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout:hover {';
                if ( $checkout_button_bg_colors['tablet']['hover'] ) {
                    $css .= 'background-color: ' . $checkout_button_bg_colors['tablet']['hover'] . ';';
                }
    
                if ( $checkout_button_label_colors['tablet']['hover'] ) {
                    $css .= 'color: ' . $checkout_button_label_colors['tablet']['hover'] . ';';
                    $css .= 'fill: ' . $checkout_button_label_colors['tablet']['hover'] . ';';
                }

                if ( $checkout_button_borders['tablet']['border_colors']['hover'] ) {
                    $css .= 'border-color: ' . $checkout_button_borders['tablet']['border_colors']['hover'] . ';';
                }
            $css .= '}';


            if ( xenial_is_transparent_header_active() ) {

                $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button svg {';
        
                    if ( $transparent_cart_icon_color['tablet']['initial'] ) {
                        $css .= 'fill: ' . $transparent_cart_icon_color['tablet']['initial'] . ';';
                        $css .= 'color: ' . $transparent_cart_icon_color['tablet']['initial'] . ';';
                    }
                $css .= '}';
        
                if ( $transparent_cart_icon_color['tablet']['hover'] ) {
                    $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                        $css .= 'fill: ' . $transparent_cart_icon_color['tablet']['hover'] . ';';
                        $css .= 'color: ' . $transparent_cart_icon_color['tablet']['hover'] . ';';
                    $css .= '}';
                }
        
                if ( 
                    $transparent_cart_count_bg_color['tablet']['initial'] ||
                    $transparent_cart_count_text_color['tablet']['initial']
                ) {
                    $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                        if ( $transparent_cart_count_bg_color['tablet']['initial'] ) {
                            $css .= 'background-color: ' . $transparent_cart_count_bg_color['tablet']['initial'] . ';';
                        }
                        if ( $transparent_cart_count_text_color['tablet']['initial'] ) {
                            $css .= 'color: ' . $transparent_cart_count_text_color['tablet']['initial'] . ';';
                        }
                    $css .= '}';
                }
            }
        $css .= '}';


        $css .= '@media screen and (max-width: 576px) {';
            $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button svg {';
                if ( $cart_icon_size['mobile'] ) {
                    $css .= 'width: ' . $cart_icon_size['mobile'] . 'px;';
                    $css .= 'height: ' . $cart_icon_size['mobile'] . 'px;';
                }
    
                if ( $cart_icon_color['mobile']['initial'] ) {
                    $css .= 'fill: ' . $cart_icon_color['mobile']['initial'] . ';';
                    $css .= 'color: ' . $cart_icon_color['mobile']['initial'] . ';';
                }
            $css .= '}';
    
            if ( $cart_icon_color['mobile']['hover'] ) {
                $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                    $css .= 'fill: ' . $cart_icon_color['mobile']['hover'] . ';';
                    $css .= 'color: ' . $cart_icon_color['mobile']['hover'] . ';';
                $css .= '}';
            }
    
            if ( 
                $cart_count_bg_color['mobile']['initial'] ||
                $cart_count_text_color['mobile']['initial']
            ) {
                $css .= '#xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                    if ( $cart_count_bg_color['mobile']['initial'] ) {
                        $css .= 'background-color: ' . $cart_count_bg_color['mobile']['initial'] . ';';
                    }
                    if ( $cart_count_text_color['mobile']['initial'] ) {
                        $css .= 'color: ' . $cart_count_text_color['mobile']['initial'] . ';';
                    }
                $css .= '}';
            }
    
            if ( $minicart_bg_color['mobile']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas {';
                    $css .= 'background-color: ' . $minicart_bg_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $minicart_text_color['mobile']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas, 
                        #xe-woo-minicart-canvas a, 
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:not(.remove_from_cart_button),
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove {';
                    $css .= 'color: ' . $minicart_text_color['mobile']['initial'] . ';'; 
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close {';
                    $css .= 'color: ' . $minicart_text_color['mobile']['initial'] . ';';
                    $css .= 'fill: ' . $minicart_text_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $minicart_text_color['mobile']['hover'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li a:hover,
                        #xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li .remove:hover {';
                    $css .= 'color: ' . $minicart_text_color['mobile']['hover'] . ' !important;'; 
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header #xe-woo-minicart-close:hover {';
                    $css .= 'color: ' . $minicart_text_color['mobile']['hover'] . ';';
                    $css .= 'fill: ' . $minicart_text_color['mobile']['hover'] . ';';
                $css .= '}';
            }
    
            if ( $products_divider_color['mobile']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-list .product_list_widget li, #xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header {';
                    $css .= 'border-bottom-color: ' . $products_divider_color['mobile']['initial'] . ';';
                $css .= '}';
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom {';
                    $css .= 'border-top-color: ' . $products_divider_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
    
            if ( $minicart_title_color['mobile']['initial'] ) {
    
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner .xe-woo-minicart-header .xe-woo-minicart-title {';
                    $css .= 'color: ' . $minicart_title_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $subtotal_text_color['mobile']['initial'] ) {
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__total {';
                    $css .= 'color: ' . $subtotal_text_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
            if ( $subtotal_amount_color['mobile']['initial'] ) {
                $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons {';
                    $css .= 'color: ' . $subtotal_amount_color['mobile']['initial'] . ';';
                $css .= '}';
            }
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout) {';
                $css .= xenial_dynamic_spacing_css( $view_cart_button_padding_mobile );
                $css .= xenial_dynamic_border_css( $view_cart_button_borders['mobile'] );
    
                if ( $view_cart_button_bg_colors['mobile']['initial'] ) {
                    $css .= 'background-color: ' . $view_cart_button_bg_colors['mobile']['initial'] . ';';
                }
    
                if ( $view_cart_button_label_colors['mobile']['initial'] ) {
                    $css .= 'color: ' . $view_cart_button_label_colors['mobile']['initial'] . ';';
                    $css .= 'fill: ' . $view_cart_button_label_colors['mobile']['initial'] . ';';
                }
            $css .= '}';
    
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .wc-forward:not(.checkout):hover {';
                if ( $view_cart_button_bg_colors['mobile']['hover'] ) {
                    $css .= 'background-color: ' . $view_cart_button_bg_colors['mobile']['hover'] . ';';
                }
    
                if ( $view_cart_button_label_colors['mobile']['hover'] ) {
                    $css .= 'color: ' . $view_cart_button_label_colors['mobile']['hover'] . ';';
                    $css .= 'fill: ' . $view_cart_button_label_colors['mobile']['hover'] . ';';
                }

                if ( $view_cart_button_borders['mobile']['border_colors']['hover'] ) {
                    $css .= 'border-color: ' . $view_cart_button_borders['mobile']['border_colors']['hover'] . ';';
                }
            $css .= '}';
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout {';
                $css .= xenial_dynamic_spacing_css( $checkout_button_padding_mobile );
                $css .= xenial_dynamic_border_css( $checkout_button_borders['mobile'] );
    
                if ( $checkout_button_bg_colors['mobile']['initial'] ) {
                    $css .= 'background-color: ' . $checkout_button_bg_colors['mobile']['initial'] . ';';
                }
    
                if ( $checkout_button_label_colors['mobile']['initial'] ) {
                    $css .= 'color: ' . $checkout_button_label_colors['mobile']['initial'] . ';';
                    $css .= 'fill: ' . $checkout_button_label_colors['mobile']['initial'] . ';';
                }
            $css .= '}';
    
    
            $css .= '#xe-woo-minicart-canvas .xe-woo-minicart-inner #xe-woo-minicart-entry .minicart-bottom .woocommerce-mini-cart__buttons .checkout:hover {';
                if ( $checkout_button_bg_colors['mobile']['hover'] ) {
                    $css .= 'background-color: ' . $checkout_button_bg_colors['mobile']['hover'] . ';';
                }
    
                if ( $checkout_button_label_colors['mobile']['hover'] ) {
                    $css .= 'color: ' . $checkout_button_label_colors['mobile']['hover'] . ';';
                    $css .= 'fill: ' . $checkout_button_label_colors['mobile']['hover'] . ';';
                }
                if ( $checkout_button_borders['mobile']['border_colors']['hover'] ) {
                    $css .= 'border-color: ' . $checkout_button_borders['mobile']['border_colors']['hover'] . ';';
                }
            $css .= '}';


            if ( xenial_is_transparent_header_active() ) {

                $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button svg {';
        
                    if ( $transparent_cart_icon_color['mobile']['initial'] ) {
                        $css .= 'fill: ' . $transparent_cart_icon_color['mobile']['initial'] . ';';
                        $css .= 'color: ' . $transparent_cart_icon_color['mobile']['initial'] . ';';
                    }
                $css .= '}';
        
                if ( $transparent_cart_icon_color['mobile']['hover'] ) {
                    $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button:hover svg {';
                        $css .= 'fill: ' . $transparent_cart_icon_color['mobile']['hover'] . ';';
                        $css .= 'color: ' . $transparent_cart_icon_color['mobile']['hover'] . ';';
                    $css .= '}';
                }
        
                if ( 
                    $transparent_cart_count_bg_color['mobile']['initial'] ||
                    $transparent_cart_count_text_color['mobile']['initial']
                ) {
                    $css .= '.xe-transparent-header-enabled #xe-mastheader #xe-woo-minicart-icon #xe-woo-minicart-button .count {';
                        if ( $transparent_cart_count_bg_color['mobile']['initial'] ) {
                            $css .= 'background-color: ' . $transparent_cart_count_bg_color['mobile']['initial'] . ';';
                        }
                        if ( $transparent_cart_count_text_color['mobile']['initial'] ) {
                            $css .= 'color: ' . $transparent_cart_count_text_color['mobile']['initial'] . ';';
                        }
                    $css .= '}';
                }
            }
        $css .= '}';

        return $css;

    } 

    add_filter( 'xenial_dynamic_woo_css', 'xenial_header_woo_minicart_dynamic_css' );
}