<?php 


if ( ! function_exists( 'xenial_page_has_header_enabled' ) ) {

	function xenial_page_has_header_enabled() {

		$display_page_header = false;

		$disable_page_header_meta = get_post_meta( get_the_ID(), 'xenial_post_disable_page_header', true );

		return ( empty( $disable_page_header_meta ) || $disable_page_header_meta == false ) ? true : false;
	}
}

if ( ! function_exists( 'xenial_page_header_has_breadcrumbs_enabled' ) ) {

	function xenial_page_header_has_breadcrumbs_enabled() {

		$display_breadcrumbs = false;

		$display_breadcrumbs_meta = get_post_meta( get_the_ID(), 'xenial_breadcrumbs_display', true );

		if ( $display_breadcrumbs_meta ) {
			switch ( $display_breadcrumbs_meta ) {
				case 'default' :
					$display_breadcrumbs = xenial_get_option( 'page_single_display_breadcrumbs' );
					break;
				default :
					$display_breadcrumbs = ( $display_breadcrumbs_meta == 'enable' ) ? true : false;
					break;
			}
		} else {
			$display_breadcrumbs = xenial_get_option( 'page_single_display_breadcrumbs' );
		}

		return $display_breadcrumbs;
	}
}