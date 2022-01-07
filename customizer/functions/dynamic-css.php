<?php

/**
 * Function to load dynamic styles.
 *
 * @since  1.0.0
 * @return null
 */
if ( ! function_exists( 'xenial_dynamic_css' ) ) {

	function xenial_dynamic_css() {

        $customizer_defaults = xenial_get_customizer_defaults();

		$css = '';

		$css .= xenial_dynamic_layout_css();
		
        $css .= xenial_dynamic_typo_css();

        $css .= xenial_dynamic_color_css();

        $css .= xenial_dynamic_general_button_css();

        $css .= xenial_dynamic_text_button_css();

        $css .= xenial_dynamic_breadcrumbs_css();

        $css .= xenial_dynamic_archive_header_css();

        $css .= xenial_dynamic_page_header_css();

        $css .= xenial_dynamic_single_header_css();

        // $css .= xenial_dynamic_sidebar_css();

		// End styles for mobile devices

		// Allow CSS to be filtered.
		$css = apply_filters( 'xenial_dynamic_css', $css ); 

		// Minify the CSS code.
		$css = xenial_minify_css( $css );

		return $css;
	}
}

/**
 * Simple minification of CSS codes.
 *
 * @since    2.0.8
 */
if ( ! function_exists( 'xenial_minify_css' ) ) {

	function xenial_minify_css( $css ) {
		$css = preg_replace( '/\s+/', ' ', $css );
		$css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
		$css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
		$css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
		$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
		$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );

		return trim( $css );
	}
}





if ( ! function_exists( 'xenial_px_to_rem' ) ) {

	function xenial_px_to_rem( $px ) {

		return ( 1/16 * $px );
	}
}


if ( ! function_exists( 'xenial_dynamic_padding_css' ) ) {

	function xenial_dynamic_padding_css( $padding_values ) {

		if ( ! is_array( $padding_values ) || empty( $padding_values ) ) {
			return;
		}

		$css = '';

		foreach ( $padding_values as $side => $value ) {

			if ( $value != '' ) {
				$css .= '
					padding-' . $side . ': ' . esc_attr( $value ) . 'px;
				';
			}
		}

		return $css;
	}
}


if ( ! function_exists( 'xenial_dynamic_font_css' ) ) {

	function xenial_dynamic_font_css( $font_values ) {

		if ( ! is_array( $font_values ) || empty( $font_values ) ) {
			return;
		}

		$css = '';

		foreach ( $font_values as $font_property => $value ) {
			switch ( $font_property ) {
				case 'font-size' :
					if ( $value != '' ) {
						$css .= '
							font-size: ' . esc_attr( $value ) . 'px;
						';
					}
					break;
				case 'font-weight' :
					if ( $value != '' ) {
						$css .= '
							font-weight: ' . esc_attr( $value ) . ';
						';
					}
					break;
				case 'letter-spacing' :
					if ( $value != '' ) {
						$css .= '
							letter-spacing: ' . esc_attr( $value ) . 'px;
						';
					}
					break;
				case 'line-height' :
					if ( $value != '' ) {
						$css .= '
							line-height: ' . esc_attr( $value ) . ';
						';
					}
					break;
				case 'font-style' :
					if ( $value != '' ) {
						$css .= '
							font-style: ' . esc_attr( $value ) . ';
						';
					}
					break;
				case 'text-transform' :
					if ( $value != '' ) {
						$css .= '
							text-transform: ' . esc_attr( $value ) . ';
						';
					}
					break;
				case 'color' :
					if ( $value != '' ) {
						$css .= '
							color: ' . esc_attr( $value ) . ';
						';
					}
					break;
				default :
					break;
			}
		}

		return $css;
	}
}


if ( ! function_exists( 'xenial_dynamic_border_css' ) ) {

	function xenial_dynamic_border_css( $border_values ) {

		if ( ! is_array( $border_values ) || empty( $border_values ) ) {
			return;
		}

		$css = '';

		if ( $border_values['border_style'] ) {
			$css .= '
				border-style: ' . esc_attr( $border_values['border_style'] ) . ';
			';
		}

		$border_width_unit = $border_values['border_widths']['unit'];

		foreach ( $border_values['border_widths'] as $side => $value ) {
			if ( 
				$side == 'top' || 
				$side == 'right' || 
				$side == 'bottom' || 
				$side == 'left' 
			) {
				if ( $value != '' ) {
					$css .= '
						border-'. esc_attr( $side ) .'-width: ' . esc_attr( $value ) . esc_attr( $border_width_unit ) . ';
					';
				}
			}
		}

		$border_radius_unit = $border_values['border_widths']['unit'];

		foreach ( $border_values['border_widths'] as $corner => $value ) {
			if ( 
				$corner == 'top_left' || 
				$corner == 'top_right' || 
				$corner == 'bottom_left' || 
				$corner == 'bottom_right' 
			) {
				$css .= '
					border-'. esc_attr( str_replace( "_", "-", $corner ) ) .'-radius: ' . esc_attr( $value ) . esc_attr( $border_radius_unit ) . ';
				';
			}
		}

		foreach ( $border_values['border_colors'] as $side => $value ) {
			if ( 
				$side == 'top' || 
				$side == 'right' || 
				$side == 'bottom' || 
				$side == 'left' 
			) {
				if ( $value != '' ) {
					$css .= '
						border-'. esc_attr( $side ) .'-color: ' . esc_attr( $value ) . ';
					';
				}
			}

			if ( $side == 'initial' && $value != '' ) {
				$css .= '
					border-color: ' . esc_attr( $value ) . ';
				';
			}
		}

		return $css;
	}
}



if ( ! function_exists( 'xenial_json_decode' ) ) {

	function xenial_json_decode( $value ) {
		
		if ( empty( $value ) ) {
			return;
		}

		$json_decoded_value = json_decode( $value, true );

		return $json_decoded_value;
	}
}