<?php 

if ( ! function_exists( 'xenial_dynamic_sidebar_css' ) ) {
	function xenial_dynamic_sidebar_css() {

		$hasSidebar = xenial_has_sidebar();
		if ( ! $hasSidebar ) {
			return;
		}

		$sidebarWidth = xenial_get_option( 'sidebar_width' );

		$css = '';

		if ( $sidebarWidth ) {
			$css .= '
			#xe-page #primary {
				width: calc( 100% - ' . absint( $sidebarWidth ) . '% );
			}

			#xe-page #secondary {
				width: ' . absint( $sidebarWidth ) . '%;
			}';
		}

		return $css;
	}
}