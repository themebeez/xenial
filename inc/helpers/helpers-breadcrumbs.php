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
		$breadcrumbs_args = array(
            'show_browse' => false
        );

        $container_classes = array( 'xe-breadcrumb' );

        $breadcrumbs_home_item = xenial_get_option( 'breadcrumbs_home_item' );

        if ( $breadcrumbs_home_item ) {
        	switch ( $breadcrumbs_home_item ) {
        		case 'text' :
        			$breadcrumbs_args['labels']['home'] = esc_html( xenial_get_option( 'breadcrumbs_home_page_text' ) );
        			$container_classes[] = 'xe-breadcrumbs-home-text';
        			break;
        		case 'icon' :
        			$breadcrumbs_args['labels']['home'] = '<i class="ti-home"></i>';
        			$container_classes[] = 'xe-breadcrumbs-home-icon';
        			break;
        		default :
        			break;
        	}
        }

        $breadcrumbs_args['container_classes'] = implode( " ", $container_classes );

        xenial_breadcrumb_trail( $breadcrumbs_args );
	}
}