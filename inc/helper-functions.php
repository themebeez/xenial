<?php 


if ( ! function_exists( 'xenial_has_post_thumbnail' ) ) {
	function xenial_has_post_thumbnail( $currentPage ) {
		
	}
}

if ( ! function_exists( 'xenial_has_sidebar' ) ) {

	function xenial_has_sidebar() {

		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return false;
		}

		$sidebar_position = xenial_get_sidebar_position();

		if ( $sidebar_position == 'no-sidebar' ) {
			return false;
		} else {
			return true;
		}
	}
}





