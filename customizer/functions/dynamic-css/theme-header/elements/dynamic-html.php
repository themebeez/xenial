<?php 


if ( ! function_exists( 'xenial_dynamic_header_html_css' ) ) {

	function xenial_dynamic_header_html_css() {

		$header_html_font_colors = xenial_json_decode( xenial_get_option( 'header_html_text_color' ) );

		$header_html_font_desktop = array(
			'font-size' => xenial_get_option( 'header_html_text_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_html_text_line_height_desktop' ),
			'font-weight' => xenial_get_option( 'header_html_text_font_weight' ),
			'font-style' => xenial_get_option( 'header_html_text_font_style' ),
			'text-transform' => xenial_get_option( 'header_html_text_text_transform' )
		);

		$css = '.xe-header-element.is-html {';
			$css .= xenial_dynamic_font_css( $header_html_font_desktop );
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['initial'] ) . ';';
		$css .= '}';

		$css .= '.xe-header-element.is-html a {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['link'] ) . ';';
		$css .= '}';

		$css .= '.xe-header-element.is-html a:hover {';
			$css .= 'color: ' . esc_attr( $header_html_font_colors['desktop']['hover'] ) . ';';
		$css .= '}';

		$header_html_font_tablet = array(
        	'font-size' => xenial_get_option( 'header_html_text_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_html_text_line_height_tablet' )
        );


        $css .= '@media screen and (max-width: 768px) {';

        	$css .= '.xe-header-element.is-html {';
				$css .= xenial_dynamic_font_css( $header_html_font_tablet );
				$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['initial'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-html a {';
				$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['link'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-html a:hover {';
				$css .= 'color: ' . esc_attr( $header_html_font_colors['tablet']['hover'] ) . ';';
			$css .= '}';

        $css .= '}';

        $header_html_font_mobile = array(
        	'font-size' => xenial_get_option( 'header_html_text_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_html_text_line_height_mobile' )
        );

        $css .= '@media screen and (max-width: 576px) {';

        	$css .= '.xe-header-element.is-html {';
				$css .= xenial_dynamic_font_css( $header_html_font_mobile );
				$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['initial'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-html a {';
				$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['link'] ) . ';';
			$css .= '}';

			$css .= '.xe-header-element.is-html a:hover {';
				$css .= 'color: ' . esc_attr( $header_html_font_colors['mobile']['hover'] ) . ';';
			$css .= '}';

        $css .= '}';

        return $css;
	}
}