<?php 

if ( ! function_exists( 'xenial_get_sidebar_position' ) ) {

	function xenial_get_sidebar_position() {

		$global_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		if ( is_page() ) {
			return xenial_get_page_sidebar_position();
		}

		if ( is_single() ) {
			return xenial_get_post_sidebar_position();
		}

		if ( is_home() || is_archive() || is_search() ) {
			return xenial_get_archive_sidebar_position();
		}

		if ( is_404() ) {
			return 'no-sidebar';
		}

		return $global_sidebar_position;
	}
}



if ( ! function_exists( 'xenial_get_page_sidebar_position' ) ) {

	function xenial_get_page_sidebar_position() {

		$global_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		$sidebar_position_post_meta = get_post_meta( 'xenial_post_sidebar_position', true );

		$sidebar_position_customizer = xenial_get_option( 'sidebar_page_single_position' );
			
		if ( empty( $sidebar_position_post_meta ) || $sidebar_position_post_meta == 'default' ) {
			if ( $sidebar_position_customizer == 'default' ) {
				return $global_sidebar_position;
			} else {
				return $sidebar_position_customizer;
			}
		} else {
			return $sidebar_position_post_meta;
		}
	}
}



if ( ! function_exists( 'xenial_get_post_sidebar_position' ) ) {

	function xenial_get_post_sidebar_position() {

		$global_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		$sidebar_position_post_meta = get_post_meta( 'xenial_post_sidebar_position', true );

		$sidebar_position_customizer = xenial_get_option( 'sidebar_post_single_position' );
			
		if ( empty( $sidebar_position_post_meta ) || $sidebar_position_post_meta == 'default' ) {
			if ( $sidebar_position_customizer == 'default' ) {
				return $global_sidebar_position;
			} else {
				return $sidebar_position_customizer;
			}
		} else {
			return $sidebar_position_post_meta;
		}
	}
}



if ( ! function_exists( 'xenial_get_archive_sidebar_position' ) ) {

	function xenial_get_archive_sidebar_position() {

		$global_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		$sidebar_position_customizer = xenial_get_option( 'sidebar_archive_position' );

		if ( $sidebar_position_customizer == 'default' ) {
			return $global_sidebar_position;
		} else {
			return $sidebar_position_customizer;
		}
	}
}