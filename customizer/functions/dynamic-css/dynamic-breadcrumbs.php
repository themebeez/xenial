<?php 

if ( ! function_exists( 'xenial_dynamic_breadcrumbs_css' ) ) {
	function xenial_dynamic_breadcrumbs_css() {
		$customizerDefaults = xenial_get_customizer_defaults();

		$breadcrumbsDesktopFontSize = xenial_get_option( 'breadcrumbs_font_size_desktop' );

		$breadcrumbsTabletFontSize = xenial_get_option( 'breadcrumbs_font_size_tablet' );

		$breadcrumbsMobileFontSize = xenial_get_option( 'breadcrumbs_font_size_mobile' );

		$breadcrumbsFontColor = xenial_get_option( 'breadcrumbs_text_color' );
		$breadcrumbsFontHoverColor = xenial_get_option( 'breadcrumbs_link_hover_color' );


		$css = '';

		if ( $breadcrumbsDesktopFontSize ) {
			$css .= '.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
				font-size: ' . absint( $breadcrumbsDesktopFontSize ) . 'px;
			}';
		}

		if ( $breadcrumbsFontColor ) {
			$css .= '.xe-breadcrumb .trail-item a {
				color: ' . esc_attr( $breadcrumbsFontColor ) . ';
			}';
		}

		if ( $breadcrumbsFontHoverColor ) {
			$css .= '.xe-breadcrumb .trail-item a:hover {
				color: ' . esc_attr( $breadcrumbsFontHoverColor ) . ';
			}';
		}

		if ( $breadcrumbsTabletFontSize ) {
			$css .= '@media screen and (max-width: 768px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbsTabletFontSize ) . 'px;
				}
			}';
		}

		if ( $breadcrumbsMobileFontSize ) {
			$css .= '@media screen and (max-width: 576px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbsMobileFontSize ) . 'px;
				}	
			}';
		}

		return $css;
	}
}