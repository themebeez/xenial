<?php 
/**
 * Dyynamic CSS for site sidebar.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_sidebar_css' ) ) {

	function xenial_dynamic_sidebar_css( $css ) {

		$has_sidebar = xenial_has_sidebar();

		if ( ! $has_sidebar ) {
			return $css ;
		}

		$sidebar_width = xenial_get_option( 'sidebar_width' );

		if ( $sidebar_width ) {
			$css .= '
			#xe-page #primary {
				width: calc( 100% - ' . absint( $sidebar_width ) . '% );
			}

			#xe-page #secondary {
				width: ' . absint( $sidebar_width ) . '%;
			}';
		}

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_sidebar_css' );
