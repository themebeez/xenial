<?php 


if ( ! function_exists( 'xenial_dynamic_general_button_css' ) ) {
	
	function xenial_dynamic_general_button_css() {

		$global_button_padding = array(
			'padding-top' => xenial_get_option( 'btn_padding_top' ),
			'padding-right' => xenial_get_option( 'btn_padding_right' ),
			'padding-bottom' => xenial_get_option( 'btn_padding_bottom' ),
			'padding-left' => xenial_get_option( 'btn_padding_left' )
		);

		$global_button_label_colors = xenial_json_decode( xenial_get_option( 'btn_txt_color' ) );

		$global_button_background_colors = xenial_json_decode( xenial_get_option( 'btn_bg_color' ) );

		$global_button_border = xenial_json_decode( xenial_get_option( 'btn_border' ) );

		// Dynamic CSS for global button initial state.

		$css = 'button, input[type="button"], input[type="reset"], input[type="submit"], .xe-button {';

			$css .= xenial_dynamic_spacing_css( $global_button_padding );

			if ( $global_button_label_colors['initial'] ) {
				$css .= '
					color: ' . esc_attr( $global_button_label_colors['initial'] ) . ';
				';
			}

			if ( $global_button_background_colors['initial'] ) {
				$css .= '
					background-color: ' . esc_attr( $global_button_background_colors['initial'] ) . ';
				';
			}

			$css .= xenial_dynamic_border_css( $global_button_border ); 
		$css .= '}';


		// Dynamic CSS for global button hover state.

		$css .= 'button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .xe-button:hover {';

			if ( $global_button_label_colors['hover'] ) {
				$css .= '
					color: ' . esc_attr( $global_button_label_colors['hover'] ) . ';
				';
			}

			if ( $global_button_background_colors['hover'] ) {
				$css .= '
					background-color: ' . esc_attr( $global_button_background_colors['hover'] ) . ';
				';
			}

			if ( $global_button_border['border_colors']['hover'] ) {
				$css .= '
					background-color: ' . esc_attr( $global_button_border['border_colors']['hover'] ) . ';
				';
			}
		$css .= '}';

		return $css;
	}
}




if ( ! function_exists( 'xenial_dynamic_text_button_css' ) ) {

	function xenial_dynamic_text_button_css() {

		$global_text_button_label_colors = xenial_json_decode( xenial_get_option( 'txt_btn_txt_color' ) );

		$global_text_button_border_colors = xenial_json_decode( xenial_get_option( 'txt_btn_border_color' ) );

		$global_text_button_bottom_border_width = xenial_get_option( 'txt_btn_border_width' );

		$css = '';

		$css .= ':root {';
			$css .= '--xe_text_button_color: ' . esc_attr( $global_text_button_label_colors['initial'] ) . ';';
			$css .= '--xe_text_button_hover_color: ' . esc_attr( $global_text_button_label_colors['initial'] ) . ';';
			$css .= '--xe_text_button_underline_height: ' . esc_attr( $global_text_button_bottom_border_width ) . 'px;';
			$css .= '--xe_text_button_underline_color: ' . esc_attr( $global_text_button_border_colors['initial'] ) . ';';
			$css .= '--xe_text_button_hover_underline_color: ' . esc_attr( $global_text_button_border_colors['hover'] ) . ';';
		$css .= '}';

		return $css;
	}
}