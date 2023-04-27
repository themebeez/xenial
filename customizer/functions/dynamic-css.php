<?php

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-layout.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-typo.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-colors.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-base-buttons.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-header-general.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-header-top.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-header-middle.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-header-bottom.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-off-canvas.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-site-identity.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-button.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-html.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-primary-menu.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-secondary-menu.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-social-links.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-search.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-off-canvas-toggle-button.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-off-canvas-menu.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/elements/dynamic-primary-menu-dropdown.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/theme-header/sections/dynamic-transparent-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-breadcrumbs.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-pagination.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/archive/dynamic-archive-post-card.php';

require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/single/dynamic-page-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/single/dynamic-single-header.php';
require XENIAL_THEME_DIR . '/customizer/functions/dynamic-css/dynamic-sidebar.php';



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

		// Allow CSS to be filtered.
		$css .= apply_filters( 'xenial_dynamic_css', $css ); 

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

		return trim( (string) $css );
	}
}





if ( ! function_exists( 'xenial_px_to_rem' ) ) {

	function xenial_px_to_rem( $px ) {

		return ( 1/16 * $px );
	}
}


if ( ! function_exists( 'xenial_dynamic_spacing_css' ) ) {

	function xenial_dynamic_spacing_css( $spacing_values ) {

		if ( ! is_array( $spacing_values ) || empty( $spacing_values ) ) {
			return;
		}

		$css = '';

		foreach ( $spacing_values as $property => $value ) {

			if ( $value != '' ) {
				$css .= $property . ': ' . esc_attr( $value ) . 'px;';
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
				case 'letter-spacing' :
					if ( $value != '' ) {
						$css .= $font_property . ': ' . esc_attr( $value ) . 'px;';
					}
					break;
				case 'font-family' :
				case 'font-weight' :
				case 'line-height' :
				case 'font-style' :
				case 'text-transform' :
				case 'color' :
					if ( $value != '' ) {
						$css .= $font_property . ': ' . esc_attr( $value ) . ';
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

		if ( $border_values['border_style'] == 'none' ) {
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
				if ( $border_values['border_style'] != 'none' && $value != '' ) {
					$css .= '
						border-' . $side . '-style: ' . esc_attr( $border_values['border_style'] ) . ';
					';

					$css .= '
						border-'. esc_attr( $side ) .'-width: ' . esc_attr( $value ) . esc_attr( $border_width_unit ) . ';
					';
				}
			}
		}

		$border_radius_unit = $border_values['border_radius']['unit'];

		foreach ( $border_values['border_radius'] as $corner => $value ) {
			if ( 
				$corner == 'top_left' || 
				$corner == 'top_right' || 
				$corner == 'bottom_left' || 
				$corner == 'bottom_right' 
			) {

				if ( $value != '' ) {
					$css .= '
						border-'. esc_attr( str_replace( "_", "-", $corner ) ) .'-radius: ' . esc_attr( $value ) . esc_attr( $border_radius_unit ) . ';
					';
				}				
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


if ( ! function_exists( 'xenial_dynamic_gradient_css' ) ) {

	function xenial_dynamic_gradient_css( $gradient_values ) {

		if ( ! is_array( $gradient_values ) || empty( $gradient_values ) ) {
			return;
		}

		$css = '';

		if ( $gradient_values['gradient-type'] == 'linear' ) {
			$css .= '
				background-image: linear-gradient(' . esc_attr( $gradient_values['angle'] ) . 'deg, ' . esc_attr( $gradient_values['color-1'] ) . ' ' . esc_attr( $gradient_values['location-1'] ) . '%, ' . esc_attr( $gradient_values['color-2'] ) . ' ' . esc_attr( $gradient_values['location-2'] ) . '%);
				';
		} else {
			$css .= '
				background-image: radial-gradient(' . esc_attr( $gradient_values['color-1'] ) . ' ' . esc_attr( $gradient_values['location-1'] ) . '%, ' . esc_attr( $gradient_values['color-2'] ) . ' ' . esc_attr( $gradient_values['location-2'] ) . '%);
				';
		}

		return $css;
	}
}


if ( ! function_exists( 'xenial_dynamic_background_image_css' ) ) {

	function xenial_dynamic_background_image_css( $background_image_values ) {

		if ( ! is_array( $background_image_values ) || empty( $background_image_values ) ) {
			return;
		}

		$css = '';

		foreach ( $background_image_values as $background_property => $value ) {

			if ( $background_property == 'background-image' ) {

				$css .= $background_property . ': url(' . esc_attr( $value ) . ');';
			} elseif ( $background_property == 'background-position' ) {

				$css .= $background_property . ': ' . str_replace( '-', ' ', $value ) . ';';
			}else {

				$css .= $background_property . ': ' . esc_attr( $value ) . ';';
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