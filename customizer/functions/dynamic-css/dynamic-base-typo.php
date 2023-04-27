<?php
/**
 * Dynamic CSS for general typography.
 *
 * @package Xenial
 */

if ( ! function_exists( 'xenial_dynamic_typo_css' ) ) {
	/**
	 * Generates dynamic CSS for general typgraphy.
	 *
	 * @since 1.0.0
	 *
	 * @param string $css CSS.
	 * @return string
	 */
	function xenial_dynamic_typo_css( $css ) {

		$customizer_defaults = xenial_get_customizer_defaults();

		$body_typography = xenial_get_option( 'body_typography' );
		$body_typography = json_decode( $body_typography, true );

		$headings_typography = xenial_get_option( 'headings_typography' );
		$headings_typography = json_decode( $headings_typography, true );

		$h1_typography = xenial_get_option( 'h1_typography' );
		$h1_typography = json_decode( $h1_typography, true );

		$h2_typography = xenial_get_option( 'h2_typography' );
		$h2_typography = json_decode( $h2_typography, true );

		$h3_typography = xenial_get_option( 'h3_typography' );
		$h3_typography = json_decode( $h3_typography, true );

		$h4_typography = xenial_get_option( 'h4_typography' );
		$h4_typography = json_decode( $h4_typography, true );

		$h5_typography = xenial_get_option( 'h5_typography' );
		$h5_typography = json_decode( $h5_typography, true );

		$h6_typography = xenial_get_option( 'h6_typography' );
		$h6_typography = json_decode( $h6_typography, true );

		$css .= ':root {';

		if (
			isset( $body_typography['font_family'] ) &&
			! empty( $body_typography['font_family'] )
		) {
			$css .= '--xe_base_font_family: ' . esc_attr( $body_typography['font_family'] ) . ';';
		}

		if (
			isset( $body_typography['font_weight'] ) &&
			! empty( $body_typography['font_weight'] )
		) {
			$css .= '--xe_base_font_weight: ' . esc_attr( $body_typography['font_weight'] ) . ';';
		}

		if (
			isset( $body_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $body_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_font_size      = $body_typography['font_sizes']['desktop']['value'];
			$desktop_font_size_unit = ( isset( $body_typography['font_sizes']['desktop']['unit'] ) && ! empty( $body_typography['font_sizes']['desktop']['unit'] ) ) ? $body_typography['font_sizes']['desktop']['unit'] : 'px';

			$css .= '--xe_base_font_size: ' . esc_attr( $desktop_font_size ) . esc_attr( $desktop_font_size_unit ) . ';';
		}

		if (
			isset( $body_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $body_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_letter_spacing      = $body_typography['letter_spacings']['desktop']['value'];
			$desktop_letter_spacing_unit = ( isset( $body_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $body_typography['letter_spacings']['desktop']['unit'] ) ) ? $body_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= '--xe_base_letter_spacing: ' . esc_attr( $desktop_letter_spacing ) . esc_attr( $desktop_letter_spacing_unit ) . ';';
		}

		if (
			isset( $body_typography['line_heights']['desktop'] ) &&
			! empty( $body_typography['line_heights']['desktop'] )
		) {
			$css .= '--xe_base_font_line_height: ' . esc_attr( $body_typography['line_heights']['desktop'] ) . ';';
		}

		if (
			isset( $headings_typography['font_family'] ) &&
			! empty( $headings_typography['font_family'] )
		) {
			$css .= '--xe_heading_font_family: ' . esc_attr( $headings_typography['font_family'] ) . ';';
		}

		if (
			isset( $headings_typography['font_weight'] ) &&
			! empty( $headings_typography['font_weight'] )
		) {
			$css .= '--xe_heading_font_weight: ' . esc_attr( $headings_typography['font_weight'] ) . ';';
		}

		$css .= '}';

		// H1 font size and line height on desktop devices.

		$css .= 'h1 {';

		if (
			isset( $h1_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h1_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h1_font_size      = $h1_typography['font_sizes']['desktop']['value'];
			$desktop_h1_font_size_unit = ( isset( $h1_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h1_typography['font_sizes']['desktop']['unit'] ) ) ? $h1_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h1_font_size ) . esc_attr( $desktop_h1_font_size_unit ) . ';';
		}

		if (
			isset( $h1_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h1_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h1_letter_spacing      = $h1_typography['letter_spacings']['desktop']['value'];
			$desktop_h1_letter_spacing_unit = ( isset( $h1_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h1_typography['letter_spacings']['desktop']['unit'] ) ) ? $h1_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h1_letter_spacing ) . esc_attr( $desktop_h1_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h1_typography['line_heights']['desktop'] ) &&
			! empty( $h1_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h1_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		// H2 font size and line height on desktop devices.

		$css .= 'h2 {';

		if (
			isset( $h2_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h2_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h2_font_size      = $h2_typography['font_sizes']['desktop']['value'];
			$desktop_h2_font_size_unit = ( isset( $h2_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h2_typography['font_sizes']['desktop']['unit'] ) ) ? $h2_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h2_font_size ) . esc_attr( $desktop_h2_font_size_unit ) . ';';
		}

		if (
			isset( $h2_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h2_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h2_letter_spacing      = $h2_typography['letter_spacings']['desktop']['value'];
			$desktop_h2_letter_spacing_unit = ( isset( $h2_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h2_typography['letter_spacings']['desktop']['unit'] ) ) ? $h2_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h2_letter_spacing ) . esc_attr( $desktop_h2_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h2_typography['line_heights']['desktop'] ) &&
			! empty( $h2_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h2_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		// H3 font size and line height on desktop devices.

		$css .= 'h3 {';

		if (
			isset( $h3_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h3_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h3_font_size      = $h3_typography['font_sizes']['desktop']['value'];
			$desktop_h3_font_size_unit = ( isset( $h3_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h3_typography['font_sizes']['desktop']['unit'] ) ) ? $h3_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h3_font_size ) . esc_attr( $desktop_h3_font_size_unit ) . ';';
		}

		if (
			isset( $h3_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h3_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h3_letter_spacing      = $h3_typography['letter_spacings']['desktop']['value'];
			$desktop_h3_letter_spacing_unit = ( isset( $h3_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h3_typography['letter_spacings']['desktop']['unit'] ) ) ? $h3_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h3_letter_spacing ) . esc_attr( $desktop_h3_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h3_typography['line_heights']['desktop'] ) &&
			! empty( $h3_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h3_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		// H4 font size and line height on desktop devices.

		$css .= 'h4 {';

		if (
			isset( $h4_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h4_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h4_font_size      = $h4_typography['font_sizes']['desktop']['value'];
			$desktop_h4_font_size_unit = ( isset( $h4_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h4_typography['font_sizes']['desktop']['unit'] ) ) ? $h4_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h4_font_size ) . esc_attr( $desktop_h4_font_size_unit ) . ';';
		}

		if (
			isset( $h4_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h4_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h4_letter_spacing      = $h4_typography['letter_spacings']['desktop']['value'];
			$desktop_h4_letter_spacing_unit = ( isset( $h4_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h4_typography['letter_spacings']['desktop']['unit'] ) ) ? $h4_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h4_letter_spacing ) . esc_attr( $desktop_h4_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h4_typography['line_heights']['desktop'] ) &&
			! empty( $h4_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h4_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		// H5 font size and line height on desktop devices.

		$css .= 'h5 {';

		if (
			isset( $h5_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h5_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h5_font_size      = $h5_typography['font_sizes']['desktop']['value'];
			$desktop_h5_font_size_unit = ( isset( $h5_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h5_typography['font_sizes']['desktop']['unit'] ) ) ? $h5_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h5_font_size ) . esc_attr( $desktop_h5_font_size_unit ) . ';';
		}

		if (
			isset( $h5_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h5_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h5_letter_spacing      = $h5_typography['letter_spacings']['desktop']['value'];
			$desktop_h5_letter_spacing_unit = ( isset( $h5_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h5_typography['letter_spacings']['desktop']['unit'] ) ) ? $h5_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h5_letter_spacing ) . esc_attr( $desktop_h5_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h5_typography['line_heights']['desktop'] ) &&
			! empty( $h5_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h5_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		// H6 font size and line height on desktop devices.

		$css .= 'h6 {';

		if (
			isset( $h6_typography['font_sizes']['desktop']['value'] ) &&
			! empty( $h6_typography['font_sizes']['desktop']['value'] )
		) {
			$desktop_h6_font_size      = $h6_typography['font_sizes']['desktop']['value'];
			$desktop_h6_font_size_unit = ( isset( $h6_typography['font_sizes']['desktop']['unit'] ) && ! empty( $h6_typography['font_sizes']['desktop']['unit'] ) ) ? $h6_typography['font_sizes']['desktop']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $desktop_h6_font_size ) . esc_attr( $desktop_h6_font_size_unit ) . ';';
		}

		if (
			isset( $h6_typography['letter_spacings']['desktop']['value'] ) &&
			! empty( $h6_typography['letter_spacings']['desktop']['value'] )
		) {
			$desktop_h6_letter_spacing      = $h6_typography['letter_spacings']['desktop']['value'];
			$desktop_h6_letter_spacing_unit = ( isset( $h6_typography['letter_spacings']['desktop']['unit'] ) && ! empty( $h6_typography['letter_spacings']['desktop']['unit'] ) ) ? $h6_typography['letter_spacings']['desktop']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $desktop_h6_letter_spacing ) . esc_attr( $desktop_h6_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h6_typography['line_heights']['desktop'] ) &&
			! empty( $h6_typography['line_heights']['desktop'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h6_typography['line_heights']['desktop'] ) . ';';
		}

		$css .= '}';

		$css .= '@media (max-width: 768px) {';

		// Body font size and line height for tablet devices.

		$css .= ':root {';

		if (
			isset( $body_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $body_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_font_size      = $body_typography['font_sizes']['tablet']['value'];
			$tablet_font_size_unit = ( isset( $body_typography['font_sizes']['tablet']['unit'] ) && ! empty( $body_typography['font_sizes']['tablet']['unit'] ) ) ? $body_typography['font_sizes']['tablet']['unit'] : 'px';

			$css .= '--xe_base_font_size: ' . esc_attr( $tablet_font_size ) . esc_attr( $tablet_font_size_unit ) . ';';
		}

		if (
			isset( $body_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $body_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_letter_spacing      = $body_typography['letter_spacings']['tablet']['value'];
			$tablet_letter_spacing_unit = ( isset( $body_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $body_typography['letter_spacings']['tablet']['unit'] ) ) ? $body_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= '--xe_base_letter_spacing: ' . esc_attr( $tablet_letter_spacing ) . esc_attr( $tablet_letter_spacing_unit ) . ';';
		}

		if (
			isset( $body_typography['line_heights']['tablet'] ) &&
			! empty( $body_typography['line_heights']['tablet'] )
		) {
			$css .= '--xe_base_font_line_height: ' . esc_attr( $body_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H1 font size and line height for tablet devices.

		$css .= 'h1 {';

		if (
			isset( $h1_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h1_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h1_font_size      = $h1_typography['font_sizes']['tablet']['value'];
			$tablet_h1_font_size_unit = ( isset( $h1_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h1_typography['font_sizes']['tablet']['unit'] ) ) ? $h1_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h1_font_size ) . esc_attr( $tablet_h1_font_size_unit ) . ';';
		}

		if (
			isset( $h1_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h1_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h1_letter_spacing      = $h1_typography['letter_spacings']['tablet']['value'];
			$tablet_h1_letter_spacing_unit = ( isset( $h1_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h1_typography['letter_spacings']['tablet']['unit'] ) ) ? $h1_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h1_letter_spacing ) . esc_attr( $tablet_h1_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h1_typography['line_heights']['tablet'] ) &&
			! empty( $h1_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h1_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H2 font size and line height for tablet devices.

		$css .= 'h2 {';

		if (
			isset( $h2_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h2_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h2_font_size      = $h2_typography['font_sizes']['tablet']['value'];
			$tablet_h2_font_size_unit = ( isset( $h2_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h2_typography['font_sizes']['tablet']['unit'] ) ) ? $h2_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h2_font_size ) . esc_attr( $tablet_h2_font_size_unit ) . ';';
		}

		if (
			isset( $h2_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h2_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h2_letter_spacing      = $h2_typography['letter_spacings']['tablet']['value'];
			$tablet_h2_letter_spacing_unit = ( isset( $h2_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h2_typography['letter_spacings']['tablet']['unit'] ) ) ? $h2_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h2_letter_spacing ) . esc_attr( $tablet_h2_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h2_typography['line_heights']['tablet'] ) &&
			! empty( $h2_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h2_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H3 font size and line height for tablet devices.

		$css .= 'h3 {';

		if (
			isset( $h3_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h3_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h3_font_size      = $h3_typography['font_sizes']['tablet']['value'];
			$tablet_h3_font_size_unit = ( isset( $h3_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h3_typography['font_sizes']['tablet']['unit'] ) ) ? $h3_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h3_font_size ) . esc_attr( $tablet_h3_font_size_unit ) . ';';
		}

		if (
			isset( $h3_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h3_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h3_letter_spacing      = $h3_typography['letter_spacings']['tablet']['value'];
			$tablet_h3_letter_spacing_unit = ( isset( $h3_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h3_typography['letter_spacings']['tablet']['unit'] ) ) ? $h3_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h3_letter_spacing ) . esc_attr( $tablet_h3_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h3_typography['line_heights']['tablet'] ) &&
			! empty( $h3_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h3_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H4 font size and line height for tablet devices.

		$css .= 'h4 {';

		if (
			isset( $h4_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h4_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h4_font_size      = $h4_typography['font_sizes']['tablet']['value'];
			$tablet_h4_font_size_unit = ( isset( $h4_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h4_typography['font_sizes']['tablet']['unit'] ) ) ? $h4_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h4_font_size ) . esc_attr( $tablet_h4_font_size_unit ) . ';';
		}

		if (
			isset( $h4_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h4_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h4_letter_spacing      = $h4_typography['letter_spacings']['tablet']['value'];
			$tablet_h4_letter_spacing_unit = ( isset( $h4_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h4_typography['letter_spacings']['tablet']['unit'] ) ) ? $h4_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h4_letter_spacing ) . esc_attr( $tablet_h4_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h4_typography['line_heights']['tablet'] ) &&
			! empty( $h4_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h4_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H5 font size and line height for tablet devices.

		$css .= 'h5 {';

		if (
			isset( $h5_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h5_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h5_font_size      = $h5_typography['font_sizes']['tablet']['value'];
			$tablet_h5_font_size_unit = ( isset( $h5_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h5_typography['font_sizes']['tablet']['unit'] ) ) ? $h5_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h5_font_size ) . esc_attr( $tablet_h5_font_size_unit ) . ';';
		}

		if (
			isset( $h5_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h5_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h5_letter_spacing      = $h5_typography['letter_spacings']['tablet']['value'];
			$tablet_h5_letter_spacing_unit = ( isset( $h5_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h5_typography['letter_spacings']['tablet']['unit'] ) ) ? $h5_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h5_letter_spacing ) . esc_attr( $tablet_h5_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h5_typography['line_heights']['tablet'] ) &&
			! empty( $h5_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h5_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		// H6 font size and line height for tablet devices.

		$css .= 'h6 {';

		if (
			isset( $h6_typography['font_sizes']['tablet']['value'] ) &&
			! empty( $h6_typography['font_sizes']['tablet']['value'] )
		) {
			$tablet_h6_font_size      = $h6_typography['font_sizes']['tablet']['value'];
			$tablet_h6_font_size_unit = ( isset( $h6_typography['font_sizes']['tablet']['unit'] ) && ! empty( $h6_typography['font_sizes']['tablet']['unit'] ) ) ? $h6_typography['font_sizes']['tablet']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $tablet_h6_font_size ) . esc_attr( $tablet_h6_font_size_unit ) . ';';
		}

		if (
			isset( $h6_typography['letter_spacings']['tablet']['value'] ) &&
			! empty( $h6_typography['letter_spacings']['tablet']['value'] )
		) {
			$tablet_h6_letter_spacing      = $h6_typography['letter_spacings']['tablet']['value'];
			$tablet_h6_letter_spacing_unit = ( isset( $h6_typography['letter_spacings']['tablet']['unit'] ) && ! empty( $h6_typography['letter_spacings']['tablet']['unit'] ) ) ? $h6_typography['letter_spacings']['tablet']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $tablet_h6_letter_spacing ) . esc_attr( $tablet_h6_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h6_typography['line_heights']['tablet'] ) &&
			! empty( $h6_typography['line_heights']['tablet'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h6_typography['line_heights']['tablet'] ) . ';';
		}

		$css .= '}';

		$css .= '}';

		// Start styles for mobile devices.

		$css .= '@media (max-width: 575px) {';

		// Body font size and line height for mobile devices.

		$css .= ':root {';

		if (
			isset( $body_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $body_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_font_size      = $body_typography['font_sizes']['mobile']['value'];
			$mobile_font_size_unit = ( isset( $body_typography['font_sizes']['mobile']['unit'] ) && ! empty( $body_typography['font_sizes']['mobile']['unit'] ) ) ? $body_typography['font_sizes']['mobile']['unit'] : 'px';

			$css .= '--xe_base_font_size: ' . esc_attr( $mobile_font_size ) . esc_attr( $mobile_font_size_unit ) . ';';
		}

		if (
			isset( $body_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $body_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_letter_spacing      = $body_typography['letter_spacings']['mobile']['value'];
			$mobile_letter_spacing_unit = ( isset( $body_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $body_typography['letter_spacings']['mobile']['unit'] ) ) ? $body_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= '--xe_base_letter_spacing: ' . esc_attr( $mobile_letter_spacing ) . esc_attr( $mobile_letter_spacing_unit ) . ';';
		}

		if (
			isset( $body_typography['line_heights']['mobile'] ) &&
			! empty( $body_typography['line_heights']['mobile'] )
		) {
			$css .= '--xe_base_font_line_height: ' . esc_attr( $body_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H1 font size and line height for mobile devices.

		$css .= 'h1 {';

		if (
			isset( $h1_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h1_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h1_font_size      = $h1_typography['font_sizes']['mobile']['value'];
			$mobile_h1_font_size_unit = ( isset( $h1_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h1_typography['font_sizes']['mobile']['unit'] ) ) ? $h1_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h1_font_size ) . esc_attr( $mobile_h1_font_size_unit ) . ';';
		}

		if (
			isset( $h1_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h1_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h1_letter_spacing      = $h1_typography['letter_spacings']['mobile']['value'];
			$mobile_h1_letter_spacing_unit = ( isset( $h1_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h1_typography['letter_spacings']['mobile']['unit'] ) ) ? $h1_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h1_letter_spacing ) . esc_attr( $mobile_h1_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h1_typography['line_heights']['mobile'] ) &&
			! empty( $h1_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h1_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H2 font size and line height for mobile devices.

		$css .= 'h2 {';

		if (
			isset( $h2_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h2_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h2_font_size      = $h2_typography['font_sizes']['mobile']['value'];
			$mobile_h2_font_size_unit = ( isset( $h2_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h2_typography['font_sizes']['mobile']['unit'] ) ) ? $h2_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h2_font_size ) . esc_attr( $mobile_h2_font_size_unit ) . ';';
		}

		if (
			isset( $h2_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h2_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h2_letter_spacing      = $h2_typography['letter_spacings']['mobile']['value'];
			$mobile_h2_letter_spacing_unit = ( isset( $h2_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h2_typography['letter_spacings']['mobile']['unit'] ) ) ? $h2_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h2_letter_spacing ) . esc_attr( $mobile_h2_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h2_typography['line_heights']['mobile'] ) &&
			! empty( $h2_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h2_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H3 font size and line height for mobile devices.

		$css .= 'h3 {';

		if (
			isset( $h3_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h3_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h3_font_size      = $h3_typography['font_sizes']['mobile']['value'];
			$mobile_h3_font_size_unit = ( isset( $h3_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h3_typography['font_sizes']['mobile']['unit'] ) ) ? $h3_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h3_font_size ) . esc_attr( $mobile_h3_font_size_unit ) . ';';
		}

		if (
			isset( $h3_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h3_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h3_letter_spacing      = $h3_typography['letter_spacings']['mobile']['value'];
			$mobile_h3_letter_spacing_unit = ( isset( $h3_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h3_typography['letter_spacings']['mobile']['unit'] ) ) ? $h3_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h3_letter_spacing ) . esc_attr( $mobile_h3_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h3_typography['line_heights']['mobile'] ) &&
			! empty( $h3_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h3_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H4 font size and line height for mobile devices.

		$css .= 'h4 {';

		if (
			isset( $h4_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h4_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h4_font_size      = $h4_typography['font_sizes']['mobile']['value'];
			$mobile_h4_font_size_unit = ( isset( $h4_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h4_typography['font_sizes']['mobile']['unit'] ) ) ? $h4_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h4_font_size ) . esc_attr( $mobile_h4_font_size_unit ) . ';';
		}

		if (
			isset( $h4_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h4_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h4_letter_spacing      = $h4_typography['letter_spacings']['mobile']['value'];
			$mobile_h4_letter_spacing_unit = ( isset( $h4_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h4_typography['letter_spacings']['mobile']['unit'] ) ) ? $h4_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h4_letter_spacing ) . esc_attr( $mobile_h4_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h4_typography['line_heights']['mobile'] ) &&
			! empty( $h4_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h4_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H5 font size and line height for mobile devices.

		$css .= 'h5 {';

		if (
			isset( $h5_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h5_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h5_font_size      = $h5_typography['font_sizes']['mobile']['value'];
			$mobile_h5_font_size_unit = ( isset( $h5_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h5_typography['font_sizes']['mobile']['unit'] ) ) ? $h5_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h5_font_size ) . esc_attr( $mobile_h5_font_size_unit ) . ';';
		}

		if (
			isset( $h5_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h5_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h5_letter_spacing      = $h5_typography['letter_spacings']['mobile']['value'];
			$mobile_h5_letter_spacing_unit = ( isset( $h5_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h5_typography['letter_spacings']['mobile']['unit'] ) ) ? $h5_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h5_letter_spacing ) . esc_attr( $mobile_h5_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h5_typography['line_heights']['mobile'] ) &&
			! empty( $h5_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h5_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		// H6 font size and line height for mobile devices.

		$css .= 'h6 {';

		if (
			isset( $h6_typography['font_sizes']['mobile']['value'] ) &&
			! empty( $h6_typography['font_sizes']['mobile']['value'] )
		) {
			$mobile_h6_font_size      = $h6_typography['font_sizes']['mobile']['value'];
			$mobile_h6_font_size_unit = ( isset( $h6_typography['font_sizes']['mobile']['unit'] ) && ! empty( $h6_typography['font_sizes']['mobile']['unit'] ) ) ? $h6_typography['font_sizes']['mobile']['unit'] : 'rem';

			$css .= 'font-size: ' . esc_attr( $mobile_h6_font_size ) . esc_attr( $mobile_h6_font_size_unit ) . ';';
		}

		if (
			isset( $h6_typography['letter_spacings']['mobile']['value'] ) &&
			! empty( $h6_typography['letter_spacings']['mobile']['value'] )
		) {
			$mobile_h6_letter_spacing      = $h6_typography['letter_spacings']['mobile']['value'];
			$mobile_h6_letter_spacing_unit = ( isset( $h6_typography['letter_spacings']['mobile']['unit'] ) && ! empty( $h6_typography['letter_spacings']['mobile']['unit'] ) ) ? $h6_typography['letter_spacings']['mobile']['unit'] : 'px';

			$css .= 'letter-spacing: ' . esc_attr( $mobile_h6_letter_spacing ) . esc_attr( $mobile_h6_letter_spacing_unit ) . ';';
		}

		if (
			isset( $h6_typography['line_heights']['mobile'] ) &&
			! empty( $h6_typography['line_heights']['mobile'] )
		) {
			$css .= 'line-height: ' . esc_attr( $h6_typography['line_heights']['mobile'] ) . ';';
		}

		$css .= '}';

		$css .= '}';

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_typo_css' );
