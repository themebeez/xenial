<?php 


if ( ! function_exists( 'xenial_dynamic_single_header_css' ) ) {

	function xenial_dynamic_single_header_css() {

		$page_header_background_color = xenial_json_decode( xenial_get_option( 'post_single_breadcrumb_background_color' ) );

		$display_breadcrumbs = xenial_get_option( 'post_single_display_breadcrumbs' );

		$breadcrumbs_font_color = xenial_json_decode( xenial_get_option( 'post_single_breadcrumb_text_color' ) );

		$css = '';

		// Page header background color
		if ( $page_header_background_color['desktop']['initial'] ) {
			$css .= '.single .xe-pageheader {
				background-color: ' . esc_attr( $page_header_background_color['desktop']['initial'] ) . ';
			}';
		}

		// Breadcrumbs font color
		if ( $display_breadcrumbs ) {
			if ( $breadcrumbs_font_color['desktop']['initial'] ) {
				$css .= 'body.single .xe-breadcrumb .trail-item a, body.single .xe-breadcrumb .trail-item::after {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['initial'] ) . ';
				}';
			}
			if ( $breadcrumbs_font_color['desktop']['hover'] ) {
				$css .= 'body.single .xe-breadcrumb .trail-item a:hover, body.single .xe-breadcrumb .trail-item a:hover {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['hover'] ) . ';
				}';
			}
		}

		$css .= '@media screen and (max-width: 768px) {';

			// Page header background color
			if ( $page_header_background_color['tablet']['initial'] ) {
				$css .= '.single .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['tablet']['initial'] ) . ';
				}';
			}

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['tablet']['initial'] ) {
					$css .= 'body.single .xe-breadcrumb .trail-item a, body.single .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['tablet']['hover'] ) {
					$css .= 'body.single .xe-breadcrumb .trail-item a:hover, body.single .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['hover'] ) . ';
					}';
				}
			}

		$css .= '}';

		// Start of dynamic archive page header for mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			// Page header background color
			if ( $page_header_background_color['mobile']['initial'] ) {
				$css .= '.single .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['mobile']['initial'] ) . ';
				}';
			}

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['mobile']['initial'] ) {
					$css .= 'body.single .xe-breadcrumb .trail-item a, body.single .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['mobile']['hover'] ) {
					$css .= 'body.single .xe-breadcrumb .trail-item a:hover, body.single .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['hover'] ) . ';
					}';
				}
			}

		$css .= '}'; 

		// End of dynamic archive page header for mobile responsive

		return $css;
	}
}