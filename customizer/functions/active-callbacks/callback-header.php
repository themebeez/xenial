<?php 
/**
 * Checks if theme header is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_theme_header_enabled' ) ) {

	function xenial_is_theme_header_enabled( $control ) {

		return ( $control->manager->get_setting( 'disable_theme_header' )->value() == false ) ? true : false;
	}
}


/**
 * Checks if theme header background is color.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_theme_header_background_color' ) ) {

	function xenial_is_theme_header_background_color( $control ) {

		return ( $control->manager->get_setting( 'header_background_type' )->value() == 'color' ) ? true : false;  
	}
}


/**
 * Checks if theme header background is image.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_theme_header_background_image' ) ) {

	function xenial_is_theme_header_background_image( $control ) {

		return ( $control->manager->get_setting( 'header_background_type' )->value() == 'image' ) ? true : false;  
	}
}


/**
 * Checks if theme header background is gradient.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_theme_header_background_gradient' ) ) {

	function xenial_is_theme_header_background_gradient( $control ) {

		return ( $control->manager->get_setting( 'header_background_type' )->value() == 'gradient' ) ? true : false;  
	}
}