<?php 
/**
 * Dyynamic CSS for site layout.
 *  
 * @param string 
 * @return string
 */
if ( ! function_exists( 'xenial_dynamic_layout_css' ) ) {

	function xenial_dynamic_layout_css( $css ) {

		$siteLayout = xenial_get_option( 'site_layout' );

		$siteContainerWidth = xenial_get_option( 'site_container_width' );

		$contentAreaWidth = xenial_get_option( 'container_width' );

		$narrowcontentAreaWidth = xenial_get_option( 'narrow_container_width' );

		$sidebarWidth = xenial_get_option( 'sidebar_width' );

		$css .= ':root {
			--xe_container_width: ' . absint( $contentAreaWidth ) . 'px;
			--xe_default_primary_area_width: calc( 100% - ' . absint( $sidebarWidth ) . '% );
			--xe_default_sidebar_width: ' . absint( $sidebarWidth ) .  '%;
			--xe_container_width_narrow: ' . absint( $narrowcontentAreaWidth ) . 'px;
		}';

		$wide_container_side_spacings = array(
			'desktop' => xenial_get_option( 'wide_container_side_spacings_desktop' ),
			'tablet' => xenial_get_option( 'wide_container_side_spacings_tablet' ),
			'mobile' => xenial_get_option( 'wide_container_side_spacings_mobile' )
		);

		if ( $wide_container_side_spacings['desktop'] ) {
			$css .= '.xe-container-wide {';
				$css .= 'padding-left: ' . esc_attr( $wide_container_side_spacings['desktop'] ) . 'px;';
				$css .= 'padding-right: ' . esc_attr( $wide_container_side_spacings['desktop'] ) . 'px;';
			$css .= '}';
		}

		if ( $wide_container_side_spacings['tablet'] ) {
			$css .= '@media screen and (max-width: 768px) {';
				$css .= '.xe-container-wide {';
					$css .= 'padding-left: ' . esc_attr( $wide_container_side_spacings['tablet'] ) . 'px;';
					$css .= 'padding-right: ' . esc_attr( $wide_container_side_spacings['tablet'] ) . 'px;';
				$css .= '}';
			$css .= '}';
		}
		
		if ( $wide_container_side_spacings['mobile'] ) {
			$css .= '@media screen and (max-width: 567px) {';
				$css .= '.xe-container-wide {';
					$css .= 'padding-left: ' . esc_attr( $wide_container_side_spacings['mobile'] ) . 'px;';
					$css .= 'padding-right: ' . esc_attr( $wide_container_side_spacings['mobile'] ) . 'px;';
				$css .= '}';
			$css .= '}';
		}
		

		return $css;
	}
}
add_filter( 'xenial_dynamic_css', 'xenial_dynamic_layout_css' );