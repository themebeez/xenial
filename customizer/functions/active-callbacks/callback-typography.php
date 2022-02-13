<?php
/**
 * Checks if body font is a system font.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_body_font_a_system_font' ) ) {

	function xenial_is_body_font_a_system_font( $control ) {

		$font_type = $control->manager->get_setting( 'body_font_type' )->value();

		return ( $font_type === 'system_font' ) ? true : false;		
	}
}

/**
 * Checks if body font is a google font.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_body_font_a_google_font' ) ) {

	function xenial_is_body_font_a_google_font( $control ) {

		$font_type = $control->manager->get_setting( 'body_font_type' )->value();

		return ( $font_type === 'google_font' ) ? true : false;	
	}
}


/**
 * Checks if headings font is a system font.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_headings_font_a_system_font' ) ) {

	function xenial_is_headings_font_a_system_font( $control ) {

		$font_type = $control->manager->get_setting( 'headings_font_type' )->value();

		return ( $font_type === 'system_font' ) ? true : false;		
	}
}


/**
 * Checks if headings font is a google font.
 *
 * @since 	1.0.0
 * @param 	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_headings_font_a_google_font' ) ) {

	function xenial_is_headings_font_a_google_font( $control ) {

		$font_type = $control->manager->get_setting( 'headings_font_type' )->value();

		return ( $font_type === 'google_font' ) ? true : false;	
	}
}