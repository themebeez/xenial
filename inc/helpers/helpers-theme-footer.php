<?php 

if ( ! function_exists( 'xenial_is_theme_footer_active' ) ) {

	function xenial_is_theme_footer_active() {

		$enable_theme_footer = true;

		if ( is_single() && get_post_type() == 'post' ) {

			$footer_display_meta = get_post_meta( get_the_ID(), 'xenial_theme_footer_display', true );

			if ( $footer_display_meta ) {
				switch ( $footer_display_meta ) {
					case 'default' :
						$enable_theme_footer = xenial_get_option( 'disable_theme_footer' );
						break;
					default :
						$enable_theme_footer = ( $footer_display_meta == 'enable' ) ? true : false;
						break;
				}
			} else {
				$enable_theme_footer = xenial_get_option( 'disable_theme_footer' );
			}

			return $enable_theme_footer;
		}

		if ( is_page() ) {

			$footer_display_meta = get_post_meta( get_the_ID(), 'xenial_theme_footer_display', true );

			if ( $footer_display_meta ) {
				switch ( $footer_display_meta ) {
					case 'default' :
						$enable_theme_footer = xenial_get_option( 'disable_theme_footer' );
						break;
					default :
						$enable_theme_footer = ( $footer_display_meta == 'enable' ) ? true : false;
						break;
				}
			} else {
				$enable_theme_footer = xenial_get_option( 'disable_theme_footer' );
			}

			return $enable_theme_footer;
		}

		$enable_theme_footer = xenial_get_option( 'disable_theme_footer' );

		return $enable_theme_footer;
	}
}