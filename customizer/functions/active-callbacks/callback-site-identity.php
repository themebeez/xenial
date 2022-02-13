<?php
/**
 * Checks if site title font is a system font.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_site_title_font_a_system_font' ) ) {

	function xenial_is_site_title_font_a_system_font( $control ) {

		$site_identity_font_type = $control->manager->get_setting( 'site_identity_font_type' )->value();

		return ( $site_identity_font_type === 'system_font' ) ? true : false;
	}
}


/**
 * Checks if site title font is a google font.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_site_title_font_a_google_font' ) ) {

	function xenial_is_site_title_font_a_google_font( $control ) {

		$site_identity_font_type = $control->manager->get_setting( 'site_identity_font_type' )->value();

		return ( $site_identity_font_type === 'google_font' ) ? true : false;
	}
}


/**
 * Checks if tagline is displayed.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_tagline_displayed' ) ) {

	function xenial_is_tagline_displayed( $control ) {

		return ( get_bloginfo( 'description', 'display' ) ) ? true : false;
	}
}