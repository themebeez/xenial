<?php 
/**
 * Dyynamic CSS for breadcrumbs.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_breadcrumbs_css' ) ) {

	function xenial_dynamic_breadcrumbs_css( $css ) {

		$breadcrumbs_desktop_font_size = xenial_get_option( 'breadcrumbs_font_size_desktop' );

		$breadcrumbs_tablet_font_size = xenial_get_option( 'breadcrumbs_font_size_tablet' );

		$breadcrumbs_mobile_font_size = xenial_get_option( 'breadcrumbs_font_size_mobile' );

		$breadcrumbs_font_colors = xenial_json_decode( xenial_get_option( 'breadcrumbs_text_color' ) );

		if ( $breadcrumbs_desktop_font_size ) {
			$css .= '.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
				font-size: ' . absint( $breadcrumbs_desktop_font_size ) . 'px;
			}';
		}

		if ( $breadcrumbs_font_colors['initial'] ) {
			$css .= '.xe-breadcrumb .trail-item a, .xe-breadcrumb .trail-item::after {
				color: ' . esc_attr( $breadcrumbs_font_colors['initial'] ) . ';
			}';
		}

		if ( $breadcrumbs_font_colors['hover'] ) {
			$css .= '.xe-breadcrumb .trail-item a:hover {
				color: ' . esc_attr( $breadcrumbs_font_colors['hover'] ) . ';
			}';
		}

		if ( $breadcrumbs_tablet_font_size ) {
			$css .= '@media (max-width: 768px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbs_tablet_font_size ) . 'px;
				}
			}';
		}

		if ( $breadcrumbs_mobile_font_size ) {
			$css .= '@media (max-width: 575px) {
				.xe-breadcrumb .trail-item > a, .xe-breadcrumb .trail-item > span {
					font-size: ' . absint( $breadcrumbs_mobile_font_size ) . 'px;
				}	
			}';
		}

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_breadcrumbs_css' );