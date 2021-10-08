<?php 

if ( ! function_exists( 'xenial_dynamic_page_header_css' ) ) {
	function xenial_dynamic_page_header_css() {
		$css = '';

		$displayBreadcrumbs = xenial_get_option( 'page_single_display_breadcrumbs' );

		$backgroundColor = xenial_get_option( 'page_single_header_background_color' );

		if ( $backgroundColor ) {
			$css .= '
				body.page #xe-page .xe-pageheader,
				body.error404 #xe-page .xe-pageheader {
					background-color: ' . esc_attr( $backgroundColor ) . ';
				}
			';
		}

		$titleFontSizeDesktop = xenial_get_option( 'page_single_title_font_size_desktop' );
		$titleFontSizeTablet = xenial_get_option( 'page_single_title_font_size_tablet' );
		$titleFontSizeMobile = xenial_get_option( 'page_single_title_font_size_mobile' );

		$titleLineHeightDesktop = xenial_get_option( 'page_single_title_line_height_desktop' );
		$titleLineHeightTablet = xenial_get_option( 'page_single_title_line_height_tablet' );
		$titleLineHeightMobile = xenial_get_option( 'page_single_title_line_height_mobile' );

		$titleLetterSpacingDesktop = xenial_get_option( 'page_single_title_letter_spacing_desktop' );
		$titleLetterSpacingTablet = xenial_get_option( 'page_single_title_letter_spacing_tablet' );
		$titleLetterSpacingMobile = xenial_get_option( 'page_single_title_letter_spacing_mobile' );

		$titleFontWeight = xenial_get_option( 'page_single_title_font_weight' );
		$titleFontStyle = xenial_get_option( 'page_single_title_font_style' );
		$titleTextTransform = xenial_get_option( 'page_single_title_text_transform' );

		$titleFontColor = xenial_get_option( 'page_single_header_title_color' );

		$css .= '
			body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title,
			body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';
				if ( $titleFontSizeDesktop ) {
					$css .= '
						font-size: ' . absint( $titleFontSizeDesktop ) . 'px;
					';
				}

				if ( $titleLineHeightDesktop ) {
					$css .= '
						line-height: ' . absint( $titleLineHeightDesktop ) . ';
					';
				}

				if ( $titleLetterSpacingDesktop ) {
					$css .= '
						letter-spacing: ' . absint( $titleLetterSpacingDesktop ) . 'px;
					';
				}

				if ( $titleFontWeight ) {
					$css .= '
						font-weight: ' . absint( $titleFontWeight ) . ';
					';
				}

				if ( $titleFontStyle ) {
					$css .= '
						font-style: ' . esc_attr( $titleFontStyle ) . ';
					';
				}

				if ( $titleTextTransform ) {
					$css .= '
						text-transform: ' . esc_attr( $titleTextTransform ) . ';
					';
				}

				if ( $titleFontColor ) {
					$css .= '
						color: ' . esc_attr( $titleFontColor ) . ';
					';
				}
		$css .= '}';

		if ( $titleFontSizeTablet || $titleLineHeightTablet || $titleLetterSpacingTablet ) {
			$css .= '@media screen and (max-width: 768px) {
				body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title,
				body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';

				if ( $titleFontSizeTablet ) {
					$css .= '
						font-size: ' . absint( $titleFontSizeTablet ) . 'px;
					';
				}

				if ( $titleLineHeightTablet ) {
					$css .= '
						line-height: ' . absint( $titleLineHeightTablet ) . 'px;
					';
				}

				if ( $titleLetterSpacingTablet ) {
					$css .= '
						letter-spacing: ' . absint( $titleLetterSpacingTablet ) . 'px;
					';
				}
			$css .= '}
			}';
		}


		if ( $titleFontSizeMobile || $titleLineHeightMobile || $titleLetterSpacingMobile ) {
			$css .= '@media screen and (max-width: 576px) {
				body.page #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title,
				body.error404 #xe-page .xe-pageheader .xe-pagetitle-holder .xe-title {';

				if ( $titleFontSizeMobile ) {
					$css .= '
						font-size: ' . absint( $titleFontSizeMobile ) . 'px;
					';
				}

				if ( $titleLineHeightMobile ) {
					$css .= '
						line-height: ' . absint( $titleLineHeightMobile ) . 'px;
					';
				}

				if ( $titleLetterSpacingMobile ) {
					$css .= '
						letter-spacing: ' . absint( $titleLetterSpacingMobile ) . 'px;
					';
				}
			$css .= '}
			}';
		}

		if ( $displayBreadcrumbs ) {
			$breadcrumbFontColor = xenial_get_option( 'page_single_header_breadcrumb_text_color' );
			$breadcrumbFontHoverColor = xenial_get_option( 'page_single_header_breadcrumb_link_hover_color' );
			if ( $breadcrumbFontColor ) {
				$css .= '
					body.page .xe-breadcrumb .trail-item a,
					body.page .xe-breadcrumb .trail-item::after,
					body.error404 .xe-breadcrumb .trail-item a,
					body.error404 .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbFontColor ) . ';
					}
				';
			}
			if ( $breadcrumbFontHoverColor ) {
				$css .= '
					body.page .xe-breadcrumb .trail-item a:hover,
					body.error404 .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbFontHoverColor ) . ';
					}
				';
			}
		}

		return $css;
	}
}