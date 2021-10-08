<?php 


if ( ! function_exists( 'xenial_dynamic_single_header_css' ) ) {
	function xenial_dynamic_single_header_css() {
		$css = '';

		$displayBreadcrumbs = xenial_get_option( 'post_single_display_breadcrumbs' );

		if ( $displayBreadcrumbs ) {
			$backgroundColor = xenial_get_option( 'post_single_breadcrumb_background_color' );
			$breadcrumbFontColor = xenial_get_option( 'post_single_breadcrumb_text_color' );
			$breadcrumbFontHoverColor = xenial_get_option( 'post_single_breadcrumb_link_hover_color' );
			if ( $backgroundColor ) {
				$css .= '
					body.single #xe-page .xe-pageheader {
						background-color: ' . esc_attr( $backgroundColor ) . ';
 					}
				';
			}

			if ( $breadcrumbFontColor ) {
				$css .= '
					body.single .xe-breadcrumb .trail-item a,
					body.single .xe-breadcrumb .trail-item::after {
						color: ' . esc_attr( $breadcrumbFontColor ) . ';
					}
				';
			}
			if ( $breadcrumbFontHoverColor ) {
				$css .= '
					body.single .xe-breadcrumb .trail-item a:hover,
					body.single .xe-breadcrumb .trail-item a:hover {
						color: ' . esc_attr( $breadcrumbFontHoverColor ) . ';
					}
				';
			}
		}

		return $css;
	}
}