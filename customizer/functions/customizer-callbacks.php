<?php
if ( ! function_exists( 'xenial_get_option' ) ) {

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function xenial_get_option( $key ) {

        if ( empty( $key ) ) {

            return;
        }

        $default_keys_values = xenial_get_customizer_defaults();

        if ( array_key_exists( $key, $default_keys_values ) ) {

            // Get default key value.
            $default_key_value = $default_keys_values[ $key ];

            // Get and return customizer option set value using default value.
            return get_theme_mod( $key, $default_key_value );
        } else {

            // Return customizer option set value without using default value.
            return get_theme_mod( $key );
        }
    }
}



if ( ! function_exists( 'xenial_get_customize_default' ) ) {

    function xenial_get_customize_default( $customize_id ) {

        $customize_defaults = xenial_get_customizer_defaults();

        return ( isset( $customize_defaults[ $customize_id ] ) ) ? $customize_defaults[ $customize_id ] : '';
    }
}




if ( ! function_exists( 'xenial_get_customizer_defaults' ) ) {

    function xenial_get_customizer_defaults() {

        $defaults = array(
            
            

            'enable_page_header' => false,
            'page_header_display_pages' => array(),
            'page_header_content_width' => 'xenial-content-width',
            'page_header_content_position' => 'bottom',
            'page_header_text_alignments' => 'left',
            'page_header_text_color' => '#ffffff',
            'page_header_link_hover_color' => '#16c1ff',
            'page_header_background_type' => 'color',
            'page_header_bg_color' => '#000000',
            'page_header_gradient_bg_color_1' => '#000000',
            'page_header_gradient_location_1' => 30,
            'page_header_gradient_bg_color_2' => '#000000',
            'page_header_gradient_location_2' => 100,
            'page_header_gradient_type' => 'linear',
            'page_header_gradient_linear_angle' => 45,
            'page_header_gradient_radial_position' => 'center_center',
            'page_header_image_background_repeat' => 'no-repeat',
            'page_header_image_background_size' => 'auto',
            'page_header_image_background_position' => 'center-center',
            'page_header_image_background_attachment' => 'scroll',
            'page_header_overlay_color' => '#000000',
            'page_header_height' => array(
                'desktop' => 100,
                'tablet' => 100,
                'mobile' => 100,
            ),
            'page_header_content_margin' => array(
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
            'page_header_content_padding' => array(
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
            
            
            


            'page_single_enable_breadcrumb' => true,
            'page_single_enable_title' => true,
            'page_single_enable_featured_image' => true,
            'page_single_sidebar_position' => 'default',

            'display_top_header' => false,
            'top_header_visibility' => 'default',
            'top_header_width' => 'xenial-content-width',
            'display_top_header_left_element' => false,
            'top_header_left_element' => '',
            'display_top_header_middle_element' => false,
            'top_header_middle_element' => '',
            'display_top_header_right_element' => false,
            'top_header_right_element' => '',
            'top_header_nav_menu' => '',
            'top_header_nav_menu_visibility' => 'default',
            'top_header_text' => '',
            'top_header_text_visibility' => 'default',
            'top_header_social_menu' => '',
            'top_header_display_social_menu_title' => false,
            'top_header_social_menu_visibility' => 'default',
            'main_header_layout' => 'header_2',
            'main_header_width' => 'xenial-content-width',
            'main_header_enable_header_ad' => false,
            'main_header_ad_visibility' => 'default',
            'main_header_enable_header_elements' => false,
            'main_header_elements' => array( 'search' ),
            'main_header_elements_separator' => 'none',
            'main_header_search_visibility' => 'default',
            'main_header_button_text' => esc_html__( 'Button Text', 'xenial' ),
            'main_header_button_link' => '#',
            'main_header_button_link_in_new_tab' => false,
            'main_header_button_visibility' => 'desktop,tablet,mobile',
            'main_navigation_enable_sticky' => false,
            'main_navigation_alignment' => 'left',
            'main_navigation_mobile_breakpoint' => 768,
            'main_navigation_mobile_menu_button_label' => '',
            'main_navigation_alignment' => 'left',
            'enable_transparent_header' => false,
            'enable_transparent_header_on_pages' => '',
            'transparent_header_alternative_logo' => '',
            'transparent_header_site_title_color' => '#ffffff',
            'transparent_header_tagline_color' => '#ffffff',
            'transparent_header_text_color' => '#ffffff',
            'transparent_header_link_hover_color' => '#16c1ff',
            'transparent_header_border_color' => '#eeeeee',
            

            'sidebar_default_position' => 'no-sidebar',
            'sidebar_post_single_position' => 'default',
            'sidebar_page_single_position' => 'default',
            'sidebar_archive_position' => 'default',
            'sidebar_width' => 30,
            'sidebar_widget_style' => 'default',
            'enable_sticky_sidebar' => false,
            'sidebar_responsive_position' => 'hide',
            'display_footer_widgets' => false,
            'footer_widgets_visibility' => 'default',
            'footer_widgets_width' => 'xenial-content-width',
            'footer_widgets_columns' => '3',
            'footer_widget_2_columns_layout' => 'variation_1',
            'footer_widget_3_columns_layout' => 'variation_1',
            'footer_copyright_bar_layout' => 'variation_1',
            'footer_copyright_bar_width' => 'xenial-content-width',
            'footer_copyright_text' => esc_html__( 'Copyright &copy; {current_year} {site_title}', 'xenial' ),
            'footer_copyright_position' => 'left',
            'footer_copyright_bar_extra_element_visibility' => 'default',
            'footer_copyright_bar_extra_element' => 'text',
            'footer_copyright_bar_text' => '',
            'footer_copyright_bar_social_menu' => '',
            'footer_copyright_bar_display_social_menu_title' => false,
            'footer_copyright_bar_nav_menu' => ''
        );

        $customize_defaults = array(
            'theme_elements'        => xenial_theme_elements_customizer_defaults(),
            'layouts'               => xenial_get_customizer_default_layout_values(),
            'colors'                => xenial_get_customizer_default_color_values(),
            'typography'            => xenial_get_customizer_default_typography_values(),
            'buttons'               => xenial_get_customizer_default_button_values(),
            'miscellaneous'         => xenial_get_customizer_defaults_miscellaneous_values(),
            'breadcrumbs'           => xenial_get_customizer_default_breadcrumbs_values(),
            'archive_template'      => xenial_get_customizer_default_archive_page_values(),
            'page_template'         => xenial_get_customizer_default_post_single_page_values(),
            'post_template'         => xenial_get_customizer_default_post_single_page_values(),
            'header_general'        => xenial_get_header_general_customize_defaults(),
            'header_top'            => xenial_theme_header_top_section_defaults(),
            'header_middle'         => xenial_theme_header_middle_section_defaults(),
            'header_bottom'         => xenial_theme_header_bottom_section_defaults(),
            'site_title_logo'       => xenial_theme_header_site_identity_logo_defaults(),
            'header_button'         => xenial_get_header_button_customize_defaults(),
            'header_html'           => xenial_get_header_html_customize_defaults(),
            'menu_1'                => xenial_get_header_primary_menu_customize_defaults(),
            'menu_2'                => xenial_get_header_secondary_menu_customize_defaults(),
            'header_search'         => xenial_get_header_search_customize_defaults(),
            'header_social_links'   => xenial_get_header_social_links_customize_defaults(),
            'footer_general'        => xenial_get_footer_general_customize_defaults(),
            'footer_top'            => xenial_theme_footer_top_section_defaults(),
            'footer_middle'         => xenial_theme_footer_middle_section_defaults(),
            'footer_bottom'         => xenial_theme_footer_bottom_section_defaults(),
            'footer_copyright'      => xenial_get_footer_copyright_customize_defaults(),
            'footer_menu'           => xenial_get_footer_menu_customize_defaults(),
            'footer_social_links'   => xenial_get_footer_social_links_customize_defaults(),
            'footer_widget_area_1'  => xenial_get_footer_widget_area_1_customize_defaults(),
            'footer_widget_area_2'  => xenial_get_footer_widget_area_2_customize_defaults(),
            'footer_widget_area_3'  => xenial_get_footer_widget_area_3_customize_defaults(),
            'footer_widget_area_4'  => xenial_get_footer_widget_area_4_customize_defaults(),
            'footer_widget_area_5'  => xenial_get_footer_widget_area_5_customize_defaults(),
            'footer_widget_area_6'  => xenial_get_footer_widget_area_6_customize_defaults(),
        );

        if ( class_exists( 'WooCommerce' ) ) {
            $customize_defaults['woocommerce'] = xenial_get_woocommerce_customize_defaults();
        }

        if ( class_exists( 'YITH_WCWL' ) ) {
            $customize_defaults['yith_wishlist'] = xenial_get_yith_wishlist_customize_defaults();
        }

        foreach ( $customize_defaults as $customize_default ) {

            $defaults = array_merge( $defaults, $customize_default );
        }

        return apply_filters( 'xenial_customizer_defaults', $defaults );
    }
}





























