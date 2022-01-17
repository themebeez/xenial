<?php 


if ( ! function_exists( 'xenial_dynamic_header_off_canvas_css' ) ) {

	function xenial_dynamic_header_off_canvas_css() {

		$css = '';

		$header_off_canvas_width = xenial_get_option( 'offcanvas_side_panel_width' );

		$css .= ':root {';
			if ( $header_off_canvas_width ) {
				$css .= '--xe_mobile_canvas_width: ' . esc_attr( $header_off_canvas_width ) . '%;';
			}
		$css .= '}';

		$header_off_canvas_margins = array(
			'top' => xenial_get_option( 'offcanvas_margin_top' ),
			'right' => xenial_get_option( 'offcanvas_margin_right' ),
			'bottom' => xenial_get_option( 'offcanvas_margin_bottom' ),
			'left' => xenial_get_option( 'offcanvas_margin_left' )
		);

		$header_off_canvas_paddings = array(
			'padding-top' => xenial_get_option( 'offcanvas_padding_top' ),
			'padding-right' => xenial_get_option( 'offcanvas_padding_right' ),
			'padding-bottom' => xenial_get_option( 'offcanvas_padding_bottom' ),
			'padding-left' => xenial_get_option( 'offcanvas_padding_left' )
		);

		$header_off_canvas_borders = xenial_json_decode( xenial_get_option( 'offcanvas_border' ) );

		$header_off_canvas_background_type = xenial_get_option( 'offcanvas_background_type' );
	

		$css .= '#xe-mobile-canvas {';
			// $css .= xenial_dynamic_spacing_css( $header_off_canvas_margins );
			$css .= xenial_dynamic_spacing_css( $header_off_canvas_paddings );
			$css .= xenial_dynamic_border_css( $header_off_canvas_borders );

			if ( $header_off_canvas_background_type ) {
				switch ( $header_off_canvas_background_type ) {
					case 'color' :
						$header_off_canvas_background_color = xenial_json_decode( xenial_get_option( 'offcanvas_background_color' ) ); 
						$css .= '
							background-color: ' . esc_attr( $header_off_canvas_background_color['initial'] ) . ';
						';
						break;
					case 'gradient' :
						$gradient_color_1 = xenial_json_decode( xenial_get_option( 'offcanvas_gradient_background_color_1' ) );
						$gradient_color_2 = xenial_json_decode( xenial_get_option( 'offcanvas_gradient_background_color_2' ) );

						$header_off_canvas_background_gradient_values = array(
							'color-1' => $gradient_color_1['initial'],
							'location-1' => xenial_get_option( 'offcanvas_gradient_location_1' ),
							'color-2' => $gradient_color_2['initial'],
							'location-2' => xenial_get_option( 'offcanvas_gradient_location_2' ),
							'gradient-type' => xenial_get_option( 'offcanvas_gradient_type' ),
							'angle' => xenial_get_option( 'offcanvas_gradient_linear_angle' ),
						);
						$css .= xenial_dynamic_gradient_css( $header_off_canvas_background_gradient_values );
						break;
					case 'image' :
						$header_off_canvas_background_image_values = array(
							'background-image' => esc_url( xenial_get_option( 'offcanvas_background_image' ) ),
							'background-repeat' => xenial_get_option( 'offcanvas_image_background_repeat' ),
							'background-size' => xenial_get_option( 'offcanvas_image_background_size' ),
							'background-position' => xenial_get_option( 'offcanvas_image_background_position' ),
							'background-attachment' => xenial_get_option( 'offcanvas_image_background_attachment' )
						);
						$css .= xenial_dynamic_background_image_css( $header_off_canvas_background_image_values );
						break;
					default :
						break;
				}
			}
		$css .= '}';

		$css .= '[xe-submenu-style="revealing"] .xe-offcanvas-navigation .sub-menu {';
			$css .= xenial_dynamic_spacing_css( $header_off_canvas_paddings );
			$css .= xenial_dynamic_border_css( $header_off_canvas_borders );

			if ( $header_off_canvas_background_type ) {
				switch ( $header_off_canvas_background_type ) {
					case 'color' :
						$header_off_canvas_background_color = xenial_json_decode( xenial_get_option( 'offcanvas_background_color' ) ); 
						$css .= '
							background-color: ' . esc_attr( $header_off_canvas_background_color['initial'] ) . ';
						';
						break;
					case 'gradient' :
						$gradient_color_1 = xenial_json_decode( xenial_get_option( 'offcanvas_gradient_background_color_1' ) );
						$gradient_color_2 = xenial_json_decode( xenial_get_option( 'offcanvas_gradient_background_color_2' ) );

						$header_off_canvas_background_gradient_values = array(
							'color-1' => $gradient_color_1['initial'],
							'location-1' => xenial_get_option( 'offcanvas_gradient_location_1' ),
							'color-2' => $gradient_color_2['initial'],
							'location-2' => xenial_get_option( 'offcanvas_gradient_location_2' ),
							'gradient-type' => xenial_get_option( 'offcanvas_gradient_type' ),
							'angle' => xenial_get_option( 'offcanvas_gradient_linear_angle' ),
						);
						$css .= xenial_dynamic_gradient_css( $header_off_canvas_background_gradient_values );
						break;
					case 'image' :
						$header_off_canvas_background_image_values = array(
							'background-image' => esc_url( xenial_get_option( 'offcanvas_background_image' ) ),
							'background-repeat' => xenial_get_option( 'offcanvas_image_background_repeat' ),
							'background-size' => xenial_get_option( 'offcanvas_image_background_size' ),
							'background-position' => xenial_get_option( 'offcanvas_image_background_position' ),
							'background-attachment' => xenial_get_option( 'offcanvas_image_background_attachment' )
						);
						$css .= xenial_dynamic_background_image_css( $header_off_canvas_background_image_values );
						break;
					default :
						break;
				}
			}
		$css .= '}';


		$header_off_canvas_enable_background_overlay = xenial_get_option( 'enable_offcanvas_background_overlay' );

		if ( $header_off_canvas_enable_background_overlay ) {
			$header_off_canvas_background_overlay_color = xenial_json_decode( xenial_get_option( 'offcanvas_overlay_color' ) );
			if ( $header_off_canvas_background_overlay_color['initial'] ) {
				$css .= '#xe-mobile-canvas-mask {';
					$css .= 'background-color: ' . esc_attr( $header_off_canvas_background_overlay_color['initial'] ) . ';';
				$css .= '}';
			}
		}		


		$header_off_canvas_close_button_font_size = xenial_get_option( 'offcanvas_close_button_font_size' );

		$header_off_canvas_close_button_paddings = array(
			'padding-top' => xenial_get_option( 'offcanvas_close_button_padding_top' ),
			'padding-right' => xenial_get_option( 'offcanvas_close_button_padding_right' ),
			'padding-bottom' => xenial_get_option( 'offcanvas_close_button_padding_bottom' ),
			'padding-left' => xenial_get_option( 'offcanvas_close_button_padding_left' )
		);

		$header_off_canvas_close_button_borders = xenial_json_decode( xenial_get_option( 'offcanvas_close_button_border' ) );

		$header_off_canvas_close_button_label_colors = xenial_json_decode( xenial_get_option( 'offcanvas_close_button_label_color' ) );

		$header_off_canvas_close_button_background_colors = xenial_json_decode( xenial_get_option( 'offcanvas_close_button_background_color' ) );

		$css .= '#xe-mobile-canvas-close-button {';
			if ( $header_off_canvas_close_button_font_size ) {
				$css .= 'font-size: ' . esc_attr( $header_off_canvas_close_button_font_size ) . 'px;';
			}
			if ( $header_off_canvas_close_button_label_colors['initial'] ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_close_button_label_colors['initial'] ) . ';';
			}
			if ( $header_off_canvas_close_button_background_colors['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_close_button_background_colors['initial'] ) . ';';
			}
			$css .= xenial_dynamic_border_css( $header_off_canvas_close_button_borders );
			$css .= xenial_dynamic_spacing_css( $header_off_canvas_close_button_paddings );
			
		$css .= '}';

		$css .= '#xe-mobile-canvas-close-button svg {';
			if ( $header_off_canvas_close_button_label_colors['initial'] ) {
				$css .= 'fill: ' . esc_attr( $header_off_canvas_close_button_label_colors['initial'] ) . ';';
			}
		$css .= '}';

		$css .= '#xe-mobile-canvas-close-button:hover {';
			if ( $header_off_canvas_close_button_label_colors['hover'] ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_close_button_label_colors['hover'] ) . ';';
			}
			if ( $header_off_canvas_close_button_background_colors['hover'] ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_close_button_background_colors['hover'] ) . ';';
			}
			if ( $header_off_canvas_close_button_borders['border_colors']['hover'] ) {
				$css .= 'border-color: ' . esc_attr( $header_off_canvas_close_button_borders['border_colors']['hover'] ) . ';';
			}
			$css .= xenial_dynamic_border_css( $header_off_canvas_close_button_borders );
			
		$css .= '}';

		$css .= '#xe-mobile-canvas-close-button:hover svg {';
			if ( $header_off_canvas_close_button_label_colors['hover'] ) {
				$css .= 'fill: ' . esc_attr( $header_off_canvas_close_button_label_colors['hover'] ) . ';';
			}			
		$css .= '}';

		return $css;
	}
}