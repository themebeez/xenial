<?php 
/**
 * Dyynamic CSS for header off canvas toggle button element.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_header_off_canvas_toggle_button_css' ) ) {

	function xenial_dynamic_header_off_canvas_toggle_button_css( $css ) {

		if ( ! xenial_is_header_element_active( 'offcanvas_toggle_button' ) ) {
			return $css;
		}

		$header_off_canvas_toggle_button_padding = array(
			'padding-top' => xenial_get_option( 'offcanvas_toggle_button_padding_top' ),
			'padding-right' => xenial_get_option( 'offcanvas_toggle_button_padding_right' ),
			'padding-bottom' => xenial_get_option( 'offcanvas_toggle_button_padding_bottom' ),
			'padding-left' => xenial_get_option( 'offcanvas_toggle_button_padding_left' )
		);

		$header_off_canvas_toggle_button_font_size = xenial_get_option( 'offcanvas_toggle_button_font_size' );

		$header_off_canvas_toggle_button_label_colors = xenial_json_decode( xenial_get_option( 'offcanvas_toggle_button_label_color' ) );

		$header_off_canvas_toggle_button_background_colors = xenial_json_decode( xenial_get_option( 'offcanvas_toggle_button_background_color' ) );

		$header_off_canvas_toggle_button_borders = xenial_json_decode( xenial_get_option( 'offcanvas_toggle_button_border' ) );

		if ( $header_off_canvas_toggle_button_label_colors['initial'] ) {
			$css .= ':root {';
				$css .= '--xe_menu_toggle_button_color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['initial'] ) . ';';
			$css .= '}';
		}
		

		$css .= '.xe-mobile-canvas-trigger-button {';
			$css .= xenial_dynamic_spacing_css( $header_off_canvas_toggle_button_padding );
			if ( $header_off_canvas_toggle_button_font_size ) {
				$css .= 'font-size: ' . esc_attr( $header_off_canvas_toggle_button_font_size ) . 'px;';
			}
			
			if ( $header_off_canvas_toggle_button_label_colors['initial'] ) {
				$css .= 'color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['initial'] ) . ';';
			}
			
			if ( $header_off_canvas_toggle_button_background_colors['initial'] ) {
				$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_background_colors['initial'] ) . ';';
			}
			
			$css .= xenial_dynamic_border_css( $header_off_canvas_toggle_button_borders );
		$css .= '}';

		if ( $header_off_canvas_toggle_button_label_colors['hover'] || $header_off_canvas_toggle_button_background_colors['hover'] || $header_off_canvas_toggle_button_borders['border_colors']['hover'] ) {

			$css .= '.xe-mobile-canvas-trigger-button:hover {';
			
				if ( $header_off_canvas_toggle_button_label_colors['hover'] ) {
					$css .= 'color: ' . esc_attr( $header_off_canvas_toggle_button_label_colors['hover'] ) . ';';
				}
				
				if ( $header_off_canvas_toggle_button_background_colors['hover'] ) {
					$css .= 'background-color: ' . esc_attr( $header_off_canvas_toggle_button_background_colors['hover'] ) . ';';
				}
				
				if ( $header_off_canvas_toggle_button_borders['border_colors']['hover'] ) {
					$css .= 'border-color: ' . esc_attr( $header_off_canvas_toggle_button_borders['border_colors']['hover'] ) . ';';
				}
				
			$css .= '}';
		}		

		return $css;
	}
}  
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_header_off_canvas_toggle_button_css' );