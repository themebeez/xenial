<?php 

if ( ! function_exists( 'xenial_dynamic_breadcrumbs_css' ) ) {
	function xenial_dynamic_breadcrumbs_css() {

		$breadcrumbs_desktop_font_size = xenial_get_option( 'breadcrumbs_font_size_desktop' );

		$breadcrumbs_tablet_font_size = xenial_get_option( 'breadcrumbs_font_size_tablet' );

		$breadcrumbs_mobile_font_size = xenial_get_option( 'breadcrumbs_font_size_mobile' );

		$breadcrumbs_font_color = xenial_get_option( 'breadcrumbs_text_color' );
		$breadcrumbs_font_hover_color = xenial_get_option( 'breadcrumbs_link_hover_color' );

		$css = '';

		if ( $breadcrumbs_desktop_font_size ) {
			$css .= '.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
				font-size: ' . absint( $breadcrumbs_desktop_font_size ) . 'px;
			}';
		}

		if ( $breadcrumbs_font_color ) {
			$css .= '.xe-breadcrumb .trail-item a, .xe-breadcrumb .trail-item::after {
				color: ' . esc_attr( $breadcrumbs_font_color ) . ';
			}';
		}

		if ( $breadcrumbs_font_hover_color ) {
			$css .= '.xe-breadcrumb .trail-item a:hover {
				color: ' . esc_attr( $breadcrumbs_font_hover_color ) . ';
			}';
		}

		if ( $breadcrumbs_tablet_font_size ) {
			$css .= '@media screen and (max-width: 768px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbs_tablet_font_size ) . 'px;
				}
			}';
		}

		if ( $breadcrumbs_mobile_font_size ) {
			$css .= '@media screen and (max-width: 576px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbs_mobile_font_size ) . 'px;
				}	
			}';
		}

		return $css;
	}
}