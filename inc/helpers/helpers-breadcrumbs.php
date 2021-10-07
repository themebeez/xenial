<?php 

if ( ! function_exists( 'xenial_has_breadcrumbs' ) ) {
	function xenial_has_breadcrumbs() {
		if ( is_page() ) {
			
		}

		if ( is_single() ) {
			
		}

		if ( is_home() || is_archive() || is_search() ) {
			
		}
	}
}



if ( ! function_exists( 'xenial_get_default_breadcrumbs' ) ) {
	function xenial_get_default_breadcrumbs() {
		$breadcrumb_args = array(
            'show_browse' => false,
            'container_classes' => implode( " ", array( 'xe-breadcrumb' ) ),
        );
        xenial_breadcrumb_trail( $breadcrumb_args );
	}
}