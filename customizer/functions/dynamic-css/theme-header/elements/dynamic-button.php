<?php 


if ( ! function_exists( 'xenial_dynamic_header_button_css' ) ) {

	function xenial_dynamic_header_button_css() {

		$header_button_padding_desktop = array(
			'padding-top' => xenial_get_option( 'header_button_padding_desktop_top' ),
			'padding-right' => xenial_get_option( 'header_button_padding_desktop_right' ),
			'padding-bottom' => xenial_get_option( 'header_button_padding_desktop_bottom' ),
			'padding-left' => xenial_get_option( 'header_button_padding_desktop_left' )
		);		

		$header_button_font_desktop = array(
			'font-size' => xenial_get_option( 'header_button_font_size_desktop' ),
			'line-height' => xenial_get_option( 'header_button_line_height_desktop' ),
			'font-weight' => xenial_get_option( 'header_button_font_weight' ),
			'font-style' => xenial_get_option( 'header_button_font_style' ),
			'text-transform' => xenial_get_option( 'header_button_text_transform' )
		);		

		$header_button_borders = xenial_json_decode( xenial_get_option( 'header_button_border' ) );

		$header_button_label_colors = xenial_json_decode( xenial_get_option( 'header_button_font_color' ) );

		$header_button_background_colors = xenial_json_decode( xenial_get_option( 'header_button_background_color' ) );


		$css = '.xe-header-element-button {';

			$css .= xenial_dynamic_spacing_css( $header_button_padding_desktop );

			$css .= xenial_dynamic_font_css( $header_button_font_desktop );

			$css .= xenial_dynamic_border_css( $header_button_borders['desktop'] );

			$css .= 'color: ' . esc_attr( $header_button_label_colors['desktop']['initial'] ) . ';';

			$css .= 'background-color: ' . esc_attr( $header_button_background_colors['desktop']['initial'] ) . ';';

		$css .= '}';

		$css .= '.xe-header-element-button:hover {';

			$css .= 'color: ' . esc_attr( $header_button_label_colors['desktop']['hover'] ) . ';';

			$css .= 'background-color: ' . esc_attr( $header_button_background_colors['desktop']['hover'] ) . ';';

			$css .= 'border-color: ' . esc_attr( $header_button_borders['desktop']['border_colors']['hover'] ) . ';';

		$css .= '}';


		$header_button_padding_tablet = array(
			'padding-top' => xenial_get_option( 'header_button_padding_tablet_top' ),
			'padding-right' => xenial_get_option( 'header_button_padding_tablet_right' ),
			'padding-bottom' => xenial_get_option( 'header_button_padding_tablet_bottom' ),
			'padding-left' => xenial_get_option( 'header_button_padding_tablet_left' )
		);

		$header_button_font_tablet = array(
			'font-size' => xenial_get_option( 'header_button_font_size_tablet' ),
			'line-height' => xenial_get_option( 'header_button_line_height_tablet' )
		);


		$css .= '@media screen and (max-width: 768px) {';

			$css .= '.xe-header-element-button {';

				$css .= xenial_dynamic_spacing_css( $header_button_padding_tablet );

				$css .= xenial_dynamic_font_css( $header_button_font_tablet );

				$css .= xenial_dynamic_border_css( $header_button_borders['tablet'] );

				$css .= 'color: ' . esc_attr( $header_button_label_colors['tablet']['initial'] ) . ';';

				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['tablet']['initial'] ) . ';';

			$css .= '}';

			$css .= '.xe-header-element-button:hover {';

				$css .= 'color: ' . esc_attr( $header_button_label_colors['tablet']['hover'] ) . ';';

				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['tablet']['hover'] ) . ';';

				$css .= 'border-color: ' . esc_attr( $header_button_borders['tablet']['border_colors']['hover'] ) . ';';

			$css .= '}';

		$css .= '}';

		$header_button_padding_mobile = array(
			'padding-top' => xenial_get_option( 'header_button_padding_mobile_top' ),
			'padding-right' => xenial_get_option( 'header_button_padding_mobile_right' ),
			'padding-bottom' => xenial_get_option( 'header_button_padding_mobile_bottom' ),
			'padding-left' => xenial_get_option( 'header_button_padding_mobile_left' )
		);

		$header_button_font_mobile = array(
			'font-size' => xenial_get_option( 'header_button_font_size_mobile' ),
			'line-height' => xenial_get_option( 'header_button_line_height_mobile' )
		);


		$css .= '@media screen and (max-width: 576px) {';

			$css .= '.xe-header-element-button {';

				$css .= xenial_dynamic_spacing_css( $header_button_padding_mobile );

				$css .= xenial_dynamic_font_css( $header_button_font_mobile );

				$css .= xenial_dynamic_border_css( $header_button_borders['mobile'] );

				$css .= 'color: ' . esc_attr( $header_button_label_colors['mobile']['initial'] ) . ';';

				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['mobile']['initial'] ) . ';';

			$css .= '}';

			$css .= '.xe-header-element-button:hover {';

				$css .= 'color: ' . esc_attr( $header_button_label_colors['mobile']['hover'] ) . ';';

				$css .= 'background-color: ' . esc_attr( $header_button_background_colors['mobile']['hover'] ) . ';';

				$css .= 'border-color: ' . esc_attr( $header_button_borders['mobile']['border_colors']['hover'] ) . ';';

			$css .= '}';

		$css .= '}';

		return $css;
	}
}