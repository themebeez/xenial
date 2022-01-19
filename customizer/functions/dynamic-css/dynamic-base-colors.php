<?php 


if ( ! function_exists( 'xenial_dynamic_color_css' ) ) {
	function xenial_dynamic_color_css() {

		$primary_color = xenial_json_decode( xenial_get_option( 'primary_color' ) );

		$secondary_color = xenial_json_decode( xenial_get_option( 'secondary_color' ) );

		$text_color = xenial_json_decode( xenial_get_option( 'text_color' ) );

		$headings_color = xenial_json_decode( xenial_get_option( 'headings_color' ) );

		$links_color = xenial_json_decode( xenial_get_option( 'link_color' ) );

		$button_label_color = xenial_json_decode( xenial_get_option( 'btn_txt_color' ) );

		$button_background_color = xenial_json_decode( xenial_get_option( 'btn_bg_color' ) );

		$global_border_color = xenial_json_decode( xenial_get_option( 'border_color' ) );

		$global_input_field_border_color = xenial_json_decode( xenial_get_option( 'input_fields_border_color' ) );

		$css = ':root {';

			if ( $primary_color['initial'] ) {
				$css .= '--xe_primary_color: ' . esc_attr( $primary_color['initial'] ) . ';';
			}

			if ( $secondary_color['initial'] ) {
				$css .= '--xe_seconary_color: ' . esc_attr( $secondary_color['initial'] ) . ';';
			}

			if ( $text_color['initial'] ) {
				$css .= '--xe_base_text_color: ' . esc_attr( $body_text_color['initial'] ) . ';';
			}

			if ( $headings_color['initial'] ) {
				$css .= '--xe_base_heading_color: ' . esc_attr( $headings_color['initial'] ) . ';';
			}

			if ( $links_color['initial'] ) {
				$css .= '--xe_base_link_color: ' . esc_attr( $links_color['initial'] ) . ';';
			}

			if ( $links_color['hover'] ) {
				$css .= '--xe_base_link_hover_color: ' . esc_attr( $links_color['hover'] ) . ';';
			}

			if ( $button_label_color['initial'] ) {
				$css .= '--xe_button_text_color: ' . esc_attr( $button_label_color['initial'] ) . ';';
			}

			if ( $button_background_color['initial'] ) {
				$css .= '--xe_button_background_color: ' . esc_attr( $button_background_color['initial'] ) . ';';
			}

			if ( $button_label_color['hover'] ) {
				$css .= '--xe_button_hover_text_color: ' . esc_attr( $button_label_color['hover'] ) . ';';
			}

			if ( $button_background_color['hover'] ) {
				$css .= '--xe_button_hover_background_color: ' . esc_attr( $button_background_color['hover'] ) . ';';
			}

			if ( $global_border_color['initial'] ) {
				$css .= '--xe_border_color: ' . esc_attr( $global_border_color['initial'] ) . ';';
			}

			if ( $global_input_field_border_color['initial'] ) {
				$css .= '--xe_inputs_border_color: ' . esc_attr( $global_input_field_border_color['initial'] ) . ';';
			}

		$css .= '}'; 

		return $css;
	}
}