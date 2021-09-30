<?php 


if ( ! function_exists( 'xenial_dynamic_color_css' ) ) {
	function xenial_dynamic_color_css() {
		$customizer_defaults = xenial_get_customizer_defaults();

		$css = ':root {';

			if ( xenial_get_option( 'primary_color' ) ) {
				$css .= '--xe_primary_color: ' . esc_attr( xenial_get_option( 'primary_color' ) ) . ';';
			}

			if ( xenial_get_option( 'secondary_color' ) ) {
				$css .= '--xe_seconary_color: ' . esc_attr( xenial_get_option( 'secondary_color' ) ) . ';';
			}

			if ( xenial_get_option( 'text_color' ) ) {
				$css .= '--xe_base_text_color: ' . esc_attr( xenial_get_option( 'text_color' ) ) . ';';
			}

			if ( xenial_get_option( 'headings_color' ) ) {
				$css .= '--xe_base_heading_color: ' . esc_attr( xenial_get_option( 'headings_color' ) ) . ';';
			}

			if ( xenial_get_option( 'link_color' ) ) {
				$css .= '--xe_base_link_color: ' . esc_attr( xenial_get_option( 'link_color' ) ) . ';';
			}

			if ( xenial_get_option( 'btn_txt_color' ) ) {
				$css .= '--xe_button_text_color: ' . esc_attr( xenial_get_option( 'btn_txt_color' ) ) . ';';
			}

			if ( xenial_get_option( 'btn_bg_color' ) ) {
				$css .= '--xe_button_background_color: ' . esc_attr( xenial_get_option( 'btn_bg_color' ) ) . ';';
			}

			if ( xenial_get_option( 'btn_txt_hover_color' ) ) {
				$css .= '--xe_button_hover_text_color: ' . esc_attr( xenial_get_option( 'btn_txt_hover_color' ) ) . ';';
			}

			if ( xenial_get_option( 'btn_bg_hover_color' ) ) {
				$css .= '--xe_button_hover_background_color: ' . esc_attr( xenial_get_option( 'btn_bg_hover_color' ) ) . ';';
			}

			if ( xenial_get_option( 'border_color' ) ) {
				$css .= '--xe_border_color: ' . esc_attr( xenial_get_option( 'border_color' ) ) . ';';
			}

			if ( xenial_get_option( 'input_fields_border_color' ) ) {
				$css .= '--xe_inputs_border_color: ' . esc_attr( xenial_get_option( 'input_fields_border_color' ) ) . ';';
			}

		$css .= '}'; 

		return $css;
	}
}