<?php 


if ( ! function_exists( 'xenial_dynamic_transparent_header_css' ) ) {

	function xenial_dynamic_transparent_header_css( $css ) {

		if ( ! xenial_is_transparent_header_active() ) {
			return $css;
		}

		$general_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_border_color' ) );

		// Site Title & Description Color
		$site_title_colors = xenial_json_decode( xenial_get_option( 'transparent_header_site_title_color' ) ); 
		$site_description_colors = xenial_json_decode( xenial_get_option( 'transparent_header_description_color' ) ); 

		// Header button element colors
		$header_button_label_colors = xenial_json_decode( xenial_get_option( 'transparent_header_button_font_color' ) );
		$header_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_button_background_color' ) );
		$header_button_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_button_border_color' ) );

		// Header HTML/Text element colors
		$header_html_font_colors = xenial_json_decode( xenial_get_option( 'transparent_header_html_text_color' ) );

		// Header off-canvas toggle button element colors
		$header_off_canvas_toggle_button_label_colors = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_label_color' ) );
		$header_off_canvas_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_background_color' ) );
		$header_off_canvas_toggle_button_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_border_color' ) );


		// Header search element colors
		$header_search_modal_toggle_button_label_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_text_color' ) );
		$header_search_modal_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_background_color' ) );
		$header_search_modal_toggle_button_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_border_color' ) );

		$header_search_bar_font_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_text_color' ) );
		$header_search_bar_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_background_color' ) );
		$header_search_bar_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_border_color' ) );


		// Header social links element colors
		$header_social_links_icon_colors = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_icon_color' ) );
		$header_social_links_title_colors = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_title_color' ) );
		$header_social_links_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_background_color' ) );
		$header_social_links_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_border_color' ) );

		// Header primary menu element colors
		$header_primary_menu_links_colors = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_color' ) );
		$header_primary_menu_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_background_color' ) );
		$header_primary_menu_border_colors = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_border_color' ) );

		// Header secondary menu element colors
		$header_secondary_menu_links_colors = xenial_json_decode( xenial_get_option( 'transparent_header_secondary_menu_link_color' ) );
	}
}