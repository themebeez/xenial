<?php 
/**
 * Dyynamic CSS for page single header.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_page_header_css' ) ) {

	function xenial_dynamic_page_header_css( $css ) {

		$page_header_background_color = xenial_json_decode( xenial_get_option( 'page_single_header_background_color' ) );

		$page_title_font_color = xenial_json_decode( xenial_get_option( 'page_single_header_title_color' ) );

		$page_title_typography_desktop = array(
			'font-size' => xenial_get_option( 'page_single_title_font_size_desktop' ),
			'line-height' => xenial_get_option( 'page_single_title_line_height_desktop' ),
			'letter-spacing' => xenial_get_option( 'page_single_title_letter_spacing_desktop' ),
			'font-weight' => xenial_get_option( 'page_single_title_font_weight' ),
			'font-style' => xenial_get_option( 'page_single_title_font_style' ),
			'text-transform' => xenial_get_option( 'page_single_title_text_transform' ),
			'color' => $page_title_font_color['desktop']['initial']
		);

		$page_title_typography_tablet = array(
			'font-size' => xenial_get_option( 'page_single_title_font_size_tablet' ),
			'line-height' => xenial_get_option( 'page_single_title_line_height_tablet' ),
			'letter-spacing' => xenial_get_option( 'page_single_title_letter_spacing_tablet' ),
			'color' => $page_title_font_color['tablet']['initial']
		);

		$page_title_typography_mobile = array(
			'font-size' => xenial_get_option( 'page_single_title_font_size_mobile' ),
			'line-height' => xenial_get_option( 'page_single_title_line_height_mobile' ),
			'letter-spacing' => xenial_get_option( 'page_single_title_letter_spacing_mobile' ),
			'color' => $page_title_font_color['mobile']['initial']
		);


		$display_breadcrumbs = xenial_page_header_has_breadcrumbs_enabled();

		$breadcrumbs_font_color = xenial_json_decode( xenial_get_option( 'page_single_header_breadcrumb_text_color' ) );

		// Page header background color
		if ( $page_header_background_color['desktop']['initial'] ) {
			$css .= 'body.page #xe-page .xe-pageheader, body.error404 #xe-page .xe-pageheader {
				background-color: ' . esc_attr( $page_header_background_color['desktop']['initial'] ) . ';
			}';
		}

		// Page title typography and color
		$css .= 'body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
			$css .= xenial_dynamic_font_css( $page_title_typography_desktop );
		$css .= '}';

		// Breadcrumbs font color
		if ( $display_breadcrumbs ) {
			if ( $breadcrumbs_font_color['desktop']['initial'] ) {
				$css .= 'body.page .xe-breadcrumb .trail-item a, body.page .xe-breadcrumb .trail-item::after, body.error404 .xe-breadcrumb .trail-item a, body.error404 .xe-breadcrumb .trail-item::after  {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['initial'] ) . ';
				}';
			}
			if ( $breadcrumbs_font_color['desktop']['hover'] ) {
				$css .= 'body.page .xe-breadcrumb .trail-item a:hover, body.error404 .xe-breadcrumb .trail-item a:hover {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['hover'] ) . ';
				}';
			}
		}

		$css .= '@media screen and (max-width: 768px) {';

			// Page header background color
			if ( $page_header_background_color['tablet']['initial'] ) {
				$css .= 'body.page #xe-page .xe-pageheader,	body.error404 #xe-page .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['tablet']['initial'] ) . ';
				}';
			}

			// Page title typography and color
			$css .= 'body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
				$css .= xenial_dynamic_font_css( $page_title_typography_tablet );
			$css .= '}';

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['tablet']['initial'] ) {
					$css .= 'body.page .xe-breadcrumb .trail-item a, body.page .xe-breadcrumb .trail-item::after, body.error404 .xe-breadcrumb .trail-item a, body.error404 .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['tablet']['hover'] ) {
					$css .= 'body.page .xe-breadcrumb .trail-item a:hover, body.error404 .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['hover'] ) . ';
					}';
				}
			}

		$css .= '}';

		// Start of dynamic archive page header for mobile responsive

		$css .= '@media screen and (max-width: 576px) {';

			// Page header background color
			if ( $page_header_background_color['mobile']['initial'] ) {
				$css .= 'body.page #xe-page .xe-pageheader, body.error404 #xe-page .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['mobile']['initial'] ) . ';
				}';
			}

			// Page title typography and color
			$css .= 'body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
				$css .= xenial_dynamic_font_css( $page_title_typography_mobile );
			$css .= '}';

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['mobile']['initial'] ) {
					$css .= 'body.page .xe-breadcrumb .trail-item a, body.page .xe-breadcrumb .trail-item::after, body.error404 .xe-breadcrumb .trail-item a, body.error404 .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['mobile']['hover'] ) {
					$css .= 'body.page .xe-breadcrumb .trail-item a:hover, body.error404 .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['hover'] ) . ';
					}';
				}
			}

		$css .= '}'; 

		// End of dynamic archive page header for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_page_header_css' );