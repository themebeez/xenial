<?php 


/**
 * Add customize default values for transparent header customize controls.
 * 
 * @since 1.0.0
 * @return array 
 */ 
if ( ! function_exists( 'xenial_get_transparent_header_customize_defaults' ) ) {

	function xenial_get_transparent_header_customize_defaults( $customize_defaults ) {

		$reponsive_default_color = xenial_get_default_color_value( true );

		$normal_default_color = xenial_get_default_color_value();

		$transparent_header_customize_defaults = array(
			'enable_transparent_header' => false,
			'enable_transparent_header_on_devices' => 'desktop,tablet,mobile',
            'enable_transparent_header_on_pages' => '',
            // Transparent header general
            'transparent_header_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'transparent_header_border_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            // Site Logo
            'enable_transparent_header_logo' => false,
            'transparent_desktop_header_logo' => '',
            'transparent_mobile_header_logo' => '',
            // Site title
            'transparent_header_site_title_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            // Site description
            'transparent_header_description_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            // Header button
            'transparent_header_button_font_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_button_background_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_button_border_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            // Header HTML
            'transparent_header_html_text_color' => '{"desktop":{"initial":"","link":"","hover":""},"tablet":{"initial":"","link":"","hover":""},"mobile":{"initial":"","link":"","hover":""}}',
            // Header offcanvas toggle button
            'transparent_header_offcanvas_toggle_button_label_color' => '{"initial":"","hover":""}',
            'transparent_header_offcanvas_toggle_button_background_color' => '{"initial":"","hover":""}',
            'transparent_header_offcanvas_toggle_button_border_color' => '{"initial":"","hover":""}',
            // Header search
            'transparent_header_search_modal_toggle_button_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}', 
            'transparent_header_search_modal_toggle_button_background_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_search_modal_toggle_button_border_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_search_bar_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'transparent_header_search_bar_text_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            'transparent_header_search_bar_border_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
            // Header social links
            'transparent_header_social_link_icon_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_social_link_title_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_social_link_background_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            'transparent_header_social_link_border_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            // Header secondary menu
            'transparent_header_secondary_menu_link_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
            // Header primary menu
            'transparent_header_primary_menu_top_level_items_color' => '{"initial":"","hover":"","active":""}',
            'transparent_header_primary_menu_top_level_items_background_color' => '{"initial":"","hover":"","active":""}',
            'transparent_header_primary_menu_top_level_items_border_color' => '{"initial":"","hover":"","active":""}'
		);

		$customize_defaults = array_merge( $customize_defaults, $transparent_header_customize_defaults );

		return $customize_defaults;
	}
}
add_filter( 'xenial_customize_defaults', 'xenial_get_transparent_header_customize_defaults' );