<?php 


if ( ! function_exists( 'xenial_dynamic_header_secondary_menu_css' ) ) {

	function xenial_dynamic_header_secondary_menu_css() {

		$header_secondary_menu_font_colors = xenial_json_decode( xenial_get_option( 'header_secondary_menu_link_color' ) );

		$header_secondary_menu_items_spacing_desktop = xenial_get_option( 'header_secondary_menu_items_spacing_desktop' );

		$header_secondary_menu_font_desktop = array(
			'font-size' => xenial_get_option( 'header_secondary_menu_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_desktop' ),
			'font-weight' => xenial_get_option( 'header_secondary_menu_font_weight' ),
			'font-style' => xenial_get_option( 'header_secondary_menu_font_style' ),
			'text-transform' => xenial_get_option( 'header_secondary_menu_text_transform' )
		);

		$css = '#menu-secondary-menu {';
			$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_desktop ) . 'px;';
		$css .= '}';

		$css .= '#menu-secondary-menu > li > a {';
			$css .= xenial_dynamic_font_css( $header_secondary_menu_font_desktop );
			$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['desktop']['initial'] ) . ';';
		$css .= '}';

		$css .= '#menu-secondary-menu > li > a:hover {';
			$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['desktop']['hover'] ) . ';';
		$css .= '}';

		

		$header_secondary_menu_items_spacing_tablet = xenial_get_option( 'header_secondary_menu_items_spacing_tablet' );

		$header_secondary_menu_font_tablet = array(
        	'font-size' => xenial_get_option( 'header_secondary_menu_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_tablet' )
        );


        $css .= '@media screen and (max-width: 768px) {';

        	$css .= '#menu-secondary-menu {';
				$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_tablet ) . 'px;';
			$css .= '}';

			$css .= '#menu-secondary-menu > li > a {';
				$css .= xenial_dynamic_font_css( $header_secondary_menu_font_tablet );
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['tablet']['initial'] ) . ';';
			$css .= '}';

			$css .= '#menu-secondary-menu > li > a:hover {';
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['tablet']['hover'] ) . ';';
			$css .= '}';

        $css .= '}';


        $header_secondary_menu_items_spacing_mobile = xenial_get_option( 'header_secondary_menu_items_spacing_mobile' );

        $header_secondary_menu_font_mobile = array(
        	'font-size' => xenial_get_option( 'header_secondary_menu_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_secondary_menu_line_height_mobile' )
        );

        $css .= '@media screen and (max-width: 576px) {';

        	$css .= '#menu-secondary-menu {';
				$css .= 'gap: ' . esc_attr( $header_secondary_menu_items_spacing_mobile ) . 'px;';
			$css .= '}';

			$css .= '#menu-secondary-menu > li > a {';
				$css .= xenial_dynamic_font_css( $header_secondary_menu_font_mobile );
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['mobile']['initial'] ) . ';';
			$css .= '}';

			$css .= '#menu-secondary-menu > li > a:hover {';
				$css .= 'color: ' . esc_attr( $header_secondary_menu_font_colors['mobile']['hover'] ) . ';';
			$css .= '}';

        $css .= '}';

        return $css;
	}
}