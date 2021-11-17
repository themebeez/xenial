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







if ( ! function_exists( 'xenial_get_social_networks_icon' ) ) {

	function xenial_get_social_networks_icon( $social_network ) {

		if ( $social_network ) {

			$social_networks_icons_path = '';

			$social_network_icon_path = $social_networks_icons_path . $social_network . '.svg';

			return $social_network_icon_path;
		}

		return false;
	}
}




