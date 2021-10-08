<?php 

if ( ! function_exists( 'xenial_dynamic_layout_css' ) ) {
	function xenial_dynamic_layout_css() {
		$siteLayout = xenial_get_option( 'site_layout' );
		$siteContainerWidth = xenial_get_option( 'site_container_width' );
		$contentAreaWidth = xenial_get_option( 'container_width' );
		$narrowcontentAreaWidth = xenial_get_option( 'narrow_container_width' );

		$sidebarWidth = xenial_get_option( 'sidebar_width' );

		$css = ':root {
			--xe_container_width: ' . absint( $contentAreaWidth ) . 'px;
			--xe_default_primary_area_width: calc( 100% - ' . absint( $sidebarWidth ) . '% );
			--xe_default_sidebar_width: ' . absint( $sidebarWidth ) .  '%;
			--xe_narrow_section_base_width: ' . absint( $narrowcontentAreaWidth ) . 'px;
			--xe_default_boxed_layout_container_maxwidth: ' . absint( $siteContainerWidth ) . 'px;
		}';

		return $css;
	}
}