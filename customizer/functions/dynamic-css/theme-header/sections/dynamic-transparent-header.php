<?php

if ( ! function_exists( 'xenial_dynamic_transparent_header_css' ) ) {
	/**
	 * Dyynamic CSS for transparent header.
	 *
	 * @param string $css CSS.
	 * @return string $css
	 */
	function xenial_dynamic_transparent_header_css( $css ) {

		if ( ! xenial_is_transparent_header_active() ) {
			return $css;
		}

		$general_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_background_color' ) );
		$general_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_border_color' ) );

		// Site Title & Description Color.
		$site_title_colors       = xenial_json_decode( xenial_get_option( 'transparent_header_site_title_color' ) );
		$site_description_colors = xenial_json_decode( xenial_get_option( 'transparent_header_description_color' ) );

		// Header button element colors.
		$header_button_label_colors      = xenial_json_decode( xenial_get_option( 'transparent_header_button_font_color' ) );
		$header_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_button_background_color' ) );
		$header_button_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_button_border_color' ) );

		// Header HTML/Text element colors.
		$header_html_font_colors = xenial_json_decode( xenial_get_option( 'transparent_header_html_text_color' ) );

		// Header off-canvas toggle button element colors.
		$header_off_canvas_toggle_button_label_colors      = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_label_color' ) );
		$header_off_canvas_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_background_color' ) );
		$header_off_canvas_toggle_button_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_offcanvas_toggle_button_border_color' ) );

		// Header search element colors.
		$header_search_modal_toggle_button_label_colors      = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_text_color' ) );
		$header_search_modal_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_background_color' ) );
		$header_search_modal_toggle_button_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_search_modal_toggle_button_border_color' ) );

		$header_search_bar_font_colors       = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_text_color' ) );
		$header_search_bar_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_background_color' ) );
		$header_search_bar_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_search_bar_border_color' ) );

		// Header social links element colors.
		$header_social_links_icon_colors       = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_icon_color' ) );
		$header_social_links_title_colors      = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_title_color' ) );
		$header_social_links_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_background_color' ) );
		$header_social_links_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_social_link_border_color' ) );

		// Header primary menu element colors.
		$header_primary_menu_links_colors      = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_color' ) );
		$header_primary_menu_background_colors = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_background_color' ) );
		$header_primary_menu_border_colors     = xenial_json_decode( xenial_get_option( 'transparent_header_primary_menu_top_level_items_border_color' ) );

		// Header secondary menu element colors.
		$header_secondary_menu_links_colors = xenial_json_decode( xenial_get_option( 'transparent_header_secondary_menu_link_color' ) );

		if (
			isset( $general_border_colors['desktop']['initial'] ) ||
			isset( $general_border_colors['tablet']['initial'] ) ||
			isset( $general_border_colors['mobile']['initial'] ) ||
			isset( $general_background_colors['desktop']['initial'] ) ||
			isset( $general_background_colors['tablet']['initial'] ) ||
			isset( $general_background_colors['mobile']['initial'] )
		) {
			$css .= ':root {';
			if ( isset( $general_border_colors['desktop']['initial'] ) ) {
				$css .= '--xe_transparent_header_border_color_desktop: ' . esc_attr( $general_border_colors['desktop']['initial'] ) . ';';
			}

			if ( isset( $general_border_colors['tablet']['initial'] ) ) {
				$css .= '--xe_transparent_header_border_color_tablet: ' . esc_attr( $general_border_colors['tablet']['initial'] ) . ';';
			}

			if ( isset( $general_border_colors['mobile']['initial'] ) ) {
				$css .= '--xe_transparent_header_border_color_mobile: ' . esc_attr( $general_border_colors['mobile']['initial'] ) . ';';
			}

			if ( isset( $general_background_colors['desktop']['initial'] ) ) {
				$css .= '--xe_transparent_header_background_color_desktop: ' . esc_attr( $general_background_colors['desktop']['initial'] ) . ';';
			}

			if ( isset( $general_background_colors['tablet']['initial'] ) ) {
				$css .= '--xe_transparent_header_background_color_tablet: ' . esc_attr( $general_background_colors['tablet']['initial'] ) . ';';
			}

			if ( isset( $general_background_colors['mobile']['initial'] ) ) {
				$css .= '--xe_transparent_header_background_color_mobile: ' . esc_attr( $general_background_colors['mobile']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $site_title_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a {';
			$css .= 'color: ' . esc_attr( $site_title_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_title_colors['desktop']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a:hover {';
			$css .= 'color: ' . esc_attr( $site_title_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_description_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-description {';
			$css .= 'color: ' . esc_attr( $site_description_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['desktop']['initial'] ) ||
			isset( $header_button_background_colors['desktop']['initial'] ) ||
			isset( $header_button_border_colors['desktop']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button {';
			if ( isset( $header_button_label_colors['desktop']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_button_background_colors['desktop']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_button_border_colors['desktop']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['desktop']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['desktop']['hover'] ) ||
			isset( $header_button_background_colors['desktop']['hover'] ) ||
			isset( $header_button_border_colors['desktop']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button:hover {';
			if ( isset( $header_button_label_colors['desktop']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_button_background_colors['desktop']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_button_border_colors['desktop']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['desktop']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['desktop']['link'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['link'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['desktop']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_off_canvas_toggle_button_label_colors['initial'] ) ||
			isset( $header_off_canvas_toggle_button_background_colors['initial'] ) ||
			isset( $header_off_canvas_toggle_button_border_colors['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-mobile-canvas-trigger-button {';
			if ( isset( $header_off_canvas_toggle_button_label_colors['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['initial'] ) . ';';
			}
			if ( isset( $header_off_canvas_toggle_button_background_colors['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_background_colors['initial'] ) . ';';
			}
			if ( isset( $header_off_canvas_toggle_button_border_colors['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_off_canvas_toggle_button_border_colors['initial'] ) . ';';
			}
			$css .= '}';

			$css .= '.xe-transparent-header-enabled .xe-mobile-canvas-trigger-button .menu-bar {';
			if ( isset( $header_off_canvas_toggle_button_label_colors['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['initial'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_off_canvas_toggle_button_label_colors['hover'] ) ||
			isset( $header_off_canvas_toggle_button_background_colors['hover'] ) ||
			isset( $header_off_canvas_toggle_button_border_colors['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-mobile-canvas-trigger-button:hover {';
			if ( isset( $header_off_canvas_toggle_button_label_colors['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['hover'] ) . ';';
			}
			if ( isset( $header_off_canvas_toggle_button_background_colors['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_background_colors['hover'] ) . ';';
			}
			if ( isset( $header_off_canvas_toggle_button_border_colors['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_off_canvas_toggle_button_border_colors['hover'] ) . ';';
			}
			$css .= '}';

			$css .= '.xe-transparent-header-enabled .xe-mobile-canvas-trigger-button:hover .menu-bar {';
			if ( isset( $header_off_canvas_toggle_button_label_colors['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['hover'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['desktop']['initial'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['desktop']['initial'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['desktop']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button {';
			if ( isset( $header_search_modal_toggle_button_label_colors['desktop']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['desktop']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['desktop']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['desktop']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['desktop']['hover'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['desktop']['hover'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['desktop']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover {';
			if ( isset( $header_search_modal_toggle_button_label_colors['desktop']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['desktop']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['desktop']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['desktop']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['desktop']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['desktop']['initial'] ) ||
			isset( $header_social_links_background_colors['desktop']['initial'] ) ||
			isset( $header_social_links_border_colors['desktop']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a {';
			if ( isset( $header_social_links_title_colors['desktop']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['desktop']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['desktop']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['desktop']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['desktop']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['desktop']['hover'] ) ||
			isset( $header_social_links_background_colors['desktop']['hover'] ) ||
			isset( $header_social_links_border_colors['desktop']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover {';
			if ( isset( $header_social_links_title_colors['desktop']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['desktop']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['desktop']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['desktop']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['desktop']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['desktop']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_primary_menu_links_colors['initial'] ) ||
			isset( $header_primary_menu_background_colors['initial'] ) ||
			isset( $header_primary_menu_border_colors['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-site-navigation > ul > li > a {';
			if ( isset( $header_primary_menu_links_colors['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_primary_menu_links_colors['initial'] ) . ';';
			}
			if ( isset( $header_primary_menu_background_colors['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_primary_menu_background_colors['initial'] ) . ';';
			}
			if ( isset( $header_primary_menu_border_colors['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_primary_menu_border_colors['initial'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_primary_menu_links_colors['hover'] ) ||
			isset( $header_primary_menu_background_colors['hover'] ) ||
			isset( $header_primary_menu_border_colors['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-site-navigation > ul > li > a:hover {';
			if ( isset( $header_primary_menu_links_colors['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_primary_menu_links_colors['hover'] ) . ';';
			}
			if ( isset( $header_primary_menu_background_colors['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_primary_menu_background_colors['hover'] ) . ';';
			}
			if ( isset( $header_primary_menu_border_colors['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_primary_menu_border_colors['hover'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_primary_menu_links_colors['active'] ) ||
			isset( $header_primary_menu_background_colors['active'] ) ||
			isset( $header_primary_menu_border_colors['active'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-site-navigation > ul > li.current-menu-item > a {';
			if ( isset( $header_primary_menu_links_colors['active'] ) ) {
				$css .= 'color: ' . esc_attr( $header_primary_menu_links_colors['active'] ) . ';';
			}
			if ( isset( $header_primary_menu_background_colors['active'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_primary_menu_background_colors['active'] ) . ';';
			}
			if ( isset( $header_primary_menu_border_colors['active'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_primary_menu_border_colors['active'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['desktop']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a {';
			$css .= 'color: ' . esc_attr( $header_secondary_menu_links_colors['desktop']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['desktop']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['hover'] ) . ';';
			$css .= '}';
		}

		$css .= '@media (max-width: 768px) {';
		if ( isset( $site_title_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a {';
			$css .= 'color: ' . esc_attr( $site_title_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_title_colors['tablet']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a:hover {';
			$css .= 'color: ' . esc_attr( $site_title_colors['tablet']['hover'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_description_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-description {';
			$css .= 'color: ' . esc_attr( $site_description_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['tablet']['initial'] ) ||
			isset( $header_button_background_colors['tablet']['initial'] ) ||
			isset( $header_button_border_colors['tablet']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button {';
			if ( isset( $header_button_label_colors['tablet']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_button_background_colors['tablet']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_button_border_colors['tablet']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['tablet']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['tablet']['hover'] ) ||
			isset( $header_button_background_colors['tablet']['hover'] ) ||
			isset( $header_button_border_colors['tablet']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button:hover {';
			if ( isset( $header_button_label_colors['tablet']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_button_background_colors['tablet']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_button_border_colors['tablet']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['tablet']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['tablet']['link'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['link'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['tablet']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['tablet']['initial'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['tablet']['initial'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['tablet']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button {';
			if ( isset( $header_search_modal_toggle_button_label_colors['tablet']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['tablet']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['tablet']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['tablet']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['tablet']['hover'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['tablet']['hover'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['tablet']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover {';
			if ( isset( $header_search_modal_toggle_button_label_colors['tablet']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['tablet']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['tablet']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['tablet']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['tablet']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['tablet']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['tablet']['initial'] ) ||
			isset( $header_social_links_background_colors['tablet']['initial'] ) ||
			isset( $header_social_links_border_colors['tablet']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a {';
			if ( isset( $header_social_links_title_colors['tablet']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['tablet']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['tablet']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['tablet']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['tablet']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['tablet']['hover'] ) ||
			isset( $header_social_links_background_colors['tablet']['hover'] ) ||
			isset( $header_social_links_border_colors['tablet']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover {';
			if ( isset( $header_social_links_title_colors['tablet']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['tablet']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['tablet']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['tablet']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['tablet']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['tablet']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['tablet']['hover'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['tablet']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a {';
			$css .= 'color: ' . esc_attr( $header_secondary_menu_links_colors['tablet']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['tablet']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['hover'] ) . ';';
			$css .= '}';
		}
		$css .= '}';

		$css .= '@media (max-width: 575px) {';

		if ( isset( $site_title_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a {';
			$css .= 'color: ' . esc_attr( $site_title_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_title_colors['mobile']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-title a:hover {';
			$css .= 'color: ' . esc_attr( $site_title_colors['mobile']['hover'] ) . ';';
			$css .= '}';
		}

		if ( isset( $site_description_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-site-branding .site-description {';
			$css .= 'color: ' . esc_attr( $site_description_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['mobile']['initial'] ) ||
			isset( $header_button_background_colors['mobile']['initial'] ) ||
			isset( $header_button_border_colors['mobile']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button {';
			if ( isset( $header_button_label_colors['mobile']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_button_background_colors['mobile']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_button_border_colors['mobile']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['mobile']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if (
			isset( $header_button_label_colors['mobile']['hover'] ) ||
			isset( $header_button_background_colors['mobile']['hover'] ) ||
			isset( $header_button_border_colors['mobile']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-button:hover {';
			if ( isset( $header_button_label_colors['mobile']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_button_label_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_button_background_colors['mobile']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_button_border_colors['mobile']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_button_border_colors['mobile']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['mobile']['link'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['link'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_html_font_colors['mobile']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element.is-html a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['mobile']['initial'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['mobile']['initial'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['mobile']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button {';

			if ( isset( $header_search_modal_toggle_button_label_colors['mobile']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['mobile']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['mobile']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['mobile']['initial'] ) . ';';
			}

			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_search_modal_toggle_button_label_colors['mobile']['hover'] ) ||
			isset( $header_search_modal_toggle_button_background_colors['mobile']['hover'] ) ||
			isset( $header_search_modal_toggle_button_border_colors['mobile']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover {';
			if ( isset( $header_search_modal_toggle_button_label_colors['mobile']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_search_modal_toggle_button_label_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_background_colors['mobile']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_search_modal_toggle_button_background_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_search_modal_toggle_button_border_colors['mobile']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_search_modal_toggle_button_border_colors['mobile']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_search_modal_toggle_button_label_colors['mobile']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-search-button:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_search_modal_toggle_button_label_colors['mobile']['hover'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['mobile']['initial'] ) ||
			isset( $header_social_links_background_colors['mobile']['initial'] ) ||
			isset( $header_social_links_border_colors['mobile']['initial'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a {';
			if ( isset( $header_social_links_title_colors['mobile']['initial'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['mobile']['initial'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['mobile']['initial'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['mobile']['initial'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['mobile']['initial'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if (
			isset( $header_social_links_title_colors['mobile']['hover'] ) ||
			isset( $header_social_links_background_colors['mobile']['hover'] ) ||
			isset( $header_social_links_border_colors['mobile']['hover'] )
		) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover {';
			if ( isset( $header_social_links_title_colors['mobile']['hover'] ) ) {
				$css .= 'color: ' . esc_attr( $header_social_links_title_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_background_colors['mobile']['hover'] ) ) {
				$css .= 'background-color: ' . esc_attr( $header_social_links_background_colors['mobile']['hover'] ) . ';';
			}
			if ( isset( $header_social_links_border_colors['mobile']['hover'] ) ) {
				$css .= 'border-color: ' . esc_attr( $header_social_links_border_colors['mobile']['hover'] ) . ';';
			}
			$css .= '}';
		}

		if ( isset( $header_social_links_icon_colors['mobile']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled .xe-header-element-social li a:hover svg {';
			$css .= 'fill: ' . esc_attr( $header_social_links_icon_colors['mobile']['hover'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['mobile']['initial'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a {';
			$css .= 'color: ' . esc_attr( $header_secondary_menu_links_colors['mobile']['initial'] ) . ';';
			$css .= '}';
		}

		if ( isset( $header_secondary_menu_links_colors['mobile']['hover'] ) ) {
			$css .= '.xe-transparent-header-enabled #menu-secondary-menu > li > a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['hover'] ) . ';';
			$css .= '}';
		}
		$css .= '}';

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_transparent_header_css' );
