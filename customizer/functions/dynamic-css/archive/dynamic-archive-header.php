<?php 
/**
 * Dyynamic CSS for archive header.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_archive_header_css' ) ) {

	function xenial_dynamic_archive_header_css( $css ) {

		$page_header_background_color = xenial_json_decode( xenial_get_option( 'archive_page_header_background_color' ) );

		$page_title_font_color = xenial_json_decode( xenial_get_option( 'archive_page_header_title_color' ) );

		$page_title_typography_desktop = array(
			'font-size' => xenial_get_option( 'archive_page_title_font_size_desktop' ),
			'line-height' => xenial_get_option( 'archive_page_title_line_height_desktop' ),
			'letter-spacing' => xenial_get_option( 'archive_page_title_letter_spacing_desktop' ),
			'font-weight' => xenial_get_option( 'archive_page_title_font_weight' ),
			'font-style' => xenial_get_option( 'archive_page_title_font_style' ),
			'text-transform' => xenial_get_option( 'archive_page_title_text_transform' ),
			'color' => $page_title_font_color['desktop']['initial']
		);

		$page_title_typography_tablet = array(
			'font-size' => xenial_get_option( 'archive_page_title_font_size_tablet' ),
			'line-height' => xenial_get_option( 'archive_page_title_line_height_tablet' ),
			'letter-spacing' => xenial_get_option( 'archive_page_title_letter_spacing_tablet' ),
			'color' => $page_title_font_color['tablet']['initial']
		);

		$page_title_typography_mobile = array(
			'font-size' => xenial_get_option( 'archive_page_title_font_size_mobile' ),
			'line-height' => xenial_get_option( 'archive_page_title_line_height_mobile' ),
			'letter-spacing' => xenial_get_option( 'archive_page_title_letter_spacing_mobile' ),
			'color' => $page_title_font_color['mobile']['initial']
		);


		$display_breadcrumbs = xenial_get_option( 'archive_page_display_breadcrumbs' );

		$breadcrumbs_font_color = xenial_json_decode( xenial_get_option( 'archive_page_header_breadcrumb_text_color' ) );

		// Page header background color
		if ( $page_header_background_color['desktop']['initial'] ) {
			$css .= 'body.archive #xe-page .xe-pageheader, body.search #xe-page .xe-pageheader, body.blog #xe-page .xe-pageheader {
				background-color: ' . esc_attr( $page_header_background_color['desktop']['initial'] ) . ';
			}';
		}

		// Page title typography and color
		$css .= 'body.archive #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.search #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.blog #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
			$css .= xenial_dynamic_font_css( $page_title_typography_desktop );
		$css .= '}';

		// Breadcrumbs font color
		if ( $display_breadcrumbs ) {
			if ( $breadcrumbs_font_color['desktop']['initial'] ) {
				$css .= 'body.archive .xe-breadcrumb .trail-item a, body.search .xe-breadcrumb .trail-item a, body.blog .xe-breadcrumb .trail-item a, body.archive .xe-breadcrumb .trail-item::after, body.search .xe-breadcrumb .trail-item::after, body.blog .xe-breadcrumb .trail-item::after {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['initial'] ) . ';
				}';
			}
			if ( $breadcrumbs_font_color['desktop']['hover'] ) {
				$css .= 'body.archive .xe-breadcrumb .trail-item a:hover, body.search .xe-breadcrumb .trail-item a:hover, body.blog .xe-breadcrumb .trail-item a:hover {
					color: ' . esc_attr( $breadcrumbs_font_color['desktop']['hover'] ) . ';
				}';
			}
		}

		$css .= '@media (max-width: 768px) {';

			// Page header background color
			if ( $page_header_background_color['tablet']['initial'] ) {
				$css .= 'body.archive #xe-page .xe-pageheader, body.search #xe-page .xe-pageheader, body.blog #xe-page .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['tablet']['initial'] ) . ';
				}';
			}

			// Page title typography and color
			$css .= 'body.archive #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.search #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.blog #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
				$css .= xenial_dynamic_font_css( $page_title_typography_tablet );
			$css .= '}';

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['tablet']['initial'] ) {
					$css .= 'body.archive .xe-breadcrumb .trail-item a, body.search .xe-breadcrumb .trail-item a, body.blog .xe-breadcrumb .trail-item a, body.archive .xe-breadcrumb .trail-item::after, body.search .xe-breadcrumb .trail-item::after, body.blog .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['tablet']['hover'] ) {
					$css .= 'body.archive .xe-breadcrumb .trail-item a:hover, body.search .xe-breadcrumb .trail-item a:hover, body.blog .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['tablet']['hover'] ) . ';
					}';
				}
			}

		$css .= '}';

		// Start of dynamic archive page header for mobile responsive

		$css .= '@media (max-width: 575px) {';

			// Page header background color
			if ( $page_header_background_color['mobile']['initial'] ) {
				$css .= 'body.archive #xe-page .xe-pageheader, body.search #xe-page .xe-pageheader, body.blog #xe-page .xe-pageheader {
					background-color: ' . esc_attr( $page_header_background_color['mobile']['initial'] ) . ';
				}';
			}

			// Page title typography and color
			$css .= 'body.archive #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.search #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title, body.blog #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
				$css .= xenial_dynamic_font_css( $page_title_typography_mobile );
			$css .= '}';

			// Breadcrumbs font color
			if ( $display_breadcrumbs ) {
				if ( $breadcrumbs_font_color['mobile']['initial'] ) {
					$css .= 'body.archive .xe-breadcrumb .trail-item a, body.search .xe-breadcrumb .trail-item a, body.blog .xe-breadcrumb .trail-item a, body.archive .xe-breadcrumb .trail-item::after, body.search .xe-breadcrumb .trail-item::after, body.blog .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['initial'] ) . ';
					}';
				}
				if ( $breadcrumbs_font_color['mobile']['hover'] ) {
					$css .= 'body.archive .xe-breadcrumb .trail-item a:hover, body.search .xe-breadcrumb .trail-item a:hover, body.blog .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbs_font_color['mobile']['hover'] ) . ';
					}';
				}
			}

		$css .= '}'; 

		// End of dynamic archive page header for mobile responsive

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_archive_header_css' );