<?php 


if ( ! function_exists( 'xenial_dynamic_header_primary_menu_dropdown_css' ) ) {

	function xenial_dynamic_header_primary_menu_dropdown_css() {

		$header_primary_menu_dropdown_width = xenial_get_option( 'primary_menu_dropdown_width' );

		$header_primary_menu_dropdown_top_offset = xenial_get_option( 'primary_menu_dropdown_top_offset' );

		$header_primary_menu_dropdown_padding = array(
			'padding-top' => xenial_get_option( 'primary_menu_dropdown_padding_top' ),
			'padding-right' => xenial_get_option( 'primary_menu_dropdown_padding_right' ),
			'padding-bottom' => xenial_get_option( 'primary_menu_dropdown_padding_bottom' ),
			'padding-left' => xenial_get_option( 'primary_menu_dropdown_padding_left' )
		);

		$header_primary_menu_dropdown_borders = xenial_json_decode( xenial_get_option( 'primary_menu_dropdown_border' ) );

		$header_primary_menu_dropdown_items_divider_width = xenial_get_option( 'primary_menu_dropdown_items_divider_width' );

		$header_primary_menu_dropdown_items_divider_colors = xenial_json_decode( xenial_get_option( 'primary_menu_dropdown_items_divider_color' ) );

		$header_primary_menu_dropdown_items_padding = array(
			'padding-top' => xenial_get_option( 'primary_menu_dropdown_items_padding_top' ),
			'padding-right' => xenial_get_option( 'primary_menu_dropdown_items_padding_right' ),
			'padding-bottom' => xenial_get_option( 'primary_menu_dropdown_items_padding_bottom' ),
			'padding-left' => xenial_get_option( 'primary_menu_dropdown_items_padding_left' )
		);

		$header_primary_menu_dropdown_items_font_colors = xenial_json_decode( xenial_get_option( 'primary_menu_dropdown_items_color' ) );

		$header_primary_menu_dropdown_items_background_colors = xenial_json_decode( xenial_get_option( 'primary_menu_dropdown_items_background_color' ) );

		$header_primary_menu_dropdown_items_fonts = array(
			'font-size' => xenial_get_option( 'primary_menu_dropdown_items_font_size' ),
			'line-height' => xenial_get_option( 'primary_menu_dropdown_items_line_height' ),
			'font-weight' => xenial_get_option( 'primary_menu_dropdown_items_font_weight' ),
			'font-style' => xenial_get_option( 'primary_menu_dropdown_items_font_style' ),
			'text-transform' => xenial_get_option( 'primary_menu_dropdown_items_text_transform' )
		);

		$css = '';

		$css .= ':root {';
			if ( $header_primary_menu_dropdown_items_background_colors['initial'] ) {
				$css .= '--xe_navigation_dropdown_background_color: ' . esc_attr( $header_primary_menu_dropdown_items_background_colors['initial'] ) . ';';
			}
			
			if ( $header_primary_menu_dropdown_borders['border_widths']['top'] ) {
				$css .= '--xe_navigation_dropdown_top_border_color: ' . esc_attr( $header_primary_menu_dropdown_borders['border_widths']['top'] ) . esc_attr( $header_primary_menu_dropdown_borders['border_widths']['unit'] ) . ';';
			}
			
			if ( $header_primary_menu_dropdown_top_offset ) {
				$css .= '--xe_navigation_dropdown_top_spacing: ' . esc_attr( $header_primary_menu_dropdown_top_offset ) . 'px;';
			}
			
			if ( $header_primary_menu_dropdown_width ) {
				$css .= '--xe_navigation_dropdown_width: ' . esc_attr( $header_primary_menu_dropdown_width ) . 'px;';
			}
			
		$css .= '}';

		$css .= '.xe-site-navigation ul li .children, .xe-site-navigation ul li .sub-menu {';
			$css .= xenial_dynamic_spacing_css( $header_primary_menu_dropdown_padding );
			$css .= xenial_dynamic_border_css( $header_primary_menu_dropdown_borders );
		$css .= '}';

		if ( $header_primary_menu_dropdown_items_divider_width || $header_primary_menu_dropdown_items_divider_colors['initial'] ) {
			$css .= '.xe-site-navigation ul li ul.children li, .xe-site-navigation ul li ul.sub-menu li {';
				if ( $header_primary_menu_dropdown_items_divider_width ) {
					$css .= 'border-bottom-width: ' . esc_attr( $header_primary_menu_dropdown_items_divider_width ) . 'px;';
				}
				
				if ( $header_primary_menu_dropdown_items_divider_colors['initial'] ) {
					$css .= 'border-bottom-color: ' . esc_attr( $header_primary_menu_dropdown_items_divider_colors['initial'] ) . ';';
				}
				
			$css .= '}';
		}


		$css .= '.xe-site-navigation ul li .children li a, .xe-site-navigation ul li .sub-menu li a {';
			if ( $header_primary_menu_dropdown_items_font_colors['initial'] ) {
				$css .= 'color: ' . esc_attr( $header_primary_menu_dropdown_items_font_colors['initial'] ) . ';';
			}
			
			if ( $header_primary_menu_dropdown_items_background_colors['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $header_primary_menu_dropdown_items_background_colors['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_font_css( $header_primary_menu_dropdown_items_fonts );
		$css .= '}';

		if ( $header_primary_menu_dropdown_items_font_colors['hover'] || $header_primary_menu_dropdown_items_background_colors['hover'] ) {
			$css .= '.xe-site-navigation ul li .children li a:hover, .xe-site-navigation ul li .sub-menu li a:hover {';
				if ( $header_primary_menu_dropdown_items_font_colors['hover'] ) {
					$css .= 'color: ' . esc_attr( $header_primary_menu_dropdown_items_font_colors['hover'] ) . ';';
				}
				
				if ( $header_primary_menu_dropdown_items_background_colors['hover'] ) {
					$css .= 'background-color: ' . esc_attr( $header_primary_menu_dropdown_items_background_colors['hover'] ) . ';';
				}
				
			$css .= '}';
		}		

		if ( $header_primary_menu_dropdown_items_font_colors['active'] || $header_primary_menu_dropdown_items_background_colors['active'] ) {
			$css .= '.xe-site-navigation ul li .children li.current-menu-item a, .xe-site-navigation ul li .sub-menu li.current-menu-item a {';
				if ( $header_primary_menu_dropdown_items_font_colors['active'] ) {
					$css .= 'color: ' . esc_attr( $header_primary_menu_dropdown_items_font_colors['active'] ) . ';';
				}
				
				if ( $header_primary_menu_dropdown_items_background_colors['active'] ) {
					$css .= 'background-color: ' . esc_attr( $header_primary_menu_dropdown_items_background_colors['active'] ) . ';';
				}				
			$css .= '}';
		}		

		return $css;
	}
}