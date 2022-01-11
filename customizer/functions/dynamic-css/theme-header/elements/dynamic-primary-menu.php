<?php 


if ( ! function_exists( 'xenial_dynamic_header_primary_menu_css' ) ) {

	function xenial_dynamic_header_primary_menu_css() {

		$header_primary_menu_items_padding = array(
			'padding-top' => xenial_get_option( 'primary_menu_top_level_items_padding_top' ),
			'padding-right' => xenial_get_option( 'primary_menu_top_level_items_padding_right' ),
			'padding-bottom' => xenial_get_option( 'primary_menu_top_level_items_padding_bottom' ),
			'padding-left' => xenial_get_option( 'primary_menu_top_level_items_padding_left' )
		);

		$header_primary_menu_items_spacing = xenial_get_option( 'primary_desktop_top_level_menu_item_spacing' );

		$header_primary_menu_items_font = array(
			'font-size' => xenial_get_option( 'primary_menu_top_level_items_font_size' ),
			'line-height' => xenial_get_option( 'primary_menu_top_level_items_line_height' ),
			'font-weight' => xenial_get_option( 'primary_menu_top_level_items_font_weight' ),
			'font-style' => xenial_get_option( 'primary_menu_top_level_items_font_style' ),
			'text-transform' => xenial_get_option( 'primary_menu_top_level_items_text_transform' )
		);

		$header_primary_menu_item_borders = xenial_json_decode( xenial_get_option( 'primary_menu_top_level_items_border' ) );

		$header_primary_menu_item_font_colors = xenial_json_decode( xenial_get_option( 'primary_menu_top_level_items_color' ) );

		$header_primary_menu_item_background_colors = xenial_json_decode( xenial_get_option( 'primary_menu_top_level_items_background_color' ) );


		$css = '';

		$css .= '.xe-site-navigation > ul.xe-main-navigation {';
			$css .= 'gap: ' . esc_attr( $header_primary_menu_items_spacing ) . 'px;';
		$css .= '}';

		$css .= '.xe-site-navigation > ul > li > a {';
			$css .= xenial_dynamic_spacing_css( $header_primary_menu_items_padding );
			$css .= xenial_dynamic_border_css( $header_primary_menu_item_borders );
			$css .= xenial_dynamic_font_css( $header_primary_menu_items_font );
			$css .= 'color: ' . esc_attr( $header_primary_menu_item_font_colors['initial'] ) . ';';
			$css .= 'background-color: ' . esc_attr( $header_primary_menu_item_background_colors['initial'] ) . ';';
		$css .= '}';

		$css .= '.xe-site-navigation > ul > li > a:hover {';
			$css .= 'color: ' . esc_attr( $header_primary_menu_item_font_colors['hover'] ) . ';';
			$css .= 'background-color: ' . esc_attr( $header_primary_menu_item_background_colors['hover'] ) . ';';
			$css .= 'border-color: ' . esc_attr( $header_primary_menu_item_borders['border_colors']['hover'] ) . ';';
		$css .= '}';

		$css .= '.xe-site-navigation > ul > li.current-menu-item > a {';
			$css .= 'color: ' . esc_attr( $header_primary_menu_item_font_colors['active'] ) . ';';
			$css .= 'background-color: ' . esc_attr( $header_primary_menu_item_background_colors['active'] ) . ';';
			$css .= 'border-color: ' . esc_attr( $header_primary_menu_item_borders['border_colors']['active'] ) . ';';
		$css .= '}';

		return $css;
	}
}