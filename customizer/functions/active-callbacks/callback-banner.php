<?php

/**
 * Checks if banner is enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if( ! function_exists( 'xenial_is_banner_slider_enabled' ) ) {

	function xenial_is_banner_slider_enabled( $control ) {

		$is_banner_enabled = $control->manager->get_setting( 'enable_banner_slider' )->value();

		return ( $is_banner_enabled ) ? true : false;	
	}
}



/**
 * Checks if banner width is not content width.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_banner_width_not_content_width' ) ) {

	function xenial_is_banner_width_not_content_width( $control ) {

		$is_banner_enabled = $control->manager->get_setting( 'enable_banner_slider' )->value();

		$banner_width = $control->manager->get_setting( 'banner_slider_width' )->value();

		return ( $is_banner_enabled === true && $banner_width !== 'xenial-banner-content-width' ) ? true : false;
	}
}

/**
 * Checks if read more button is enabled in the banner.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if( ! function_exists( 'xenial_is_read_more_button_enabled_in_banner' ) ) {

	function xenial_is_read_more_button_enabled_in_banner( $control ) {

		$is_banner_enabled = $control->manager->get_setting( 'enable_banner_slider' )->value();

		$is_button_enabled = $control->manager->get_setting( 'banner_slider_enable_button' )->value();

		return ( $is_banner_enabled === true && $is_button_enabled === true ) ? true : false;		
	}
}



/**
 * Checks if overlay layer is enabled in the banner.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if( ! function_exists( 'xenial_is_overlay_layer_enabled_in_banner' ) ) {

	function xenial_is_overlay_layer_enabled_in_banner( $control ) {

		$is_banner_enabled = $control->manager->get_setting( 'enable_banner_slider' )->value();

		$is_overlay_enabled = $control->manager->get_setting( 'banner_slider_enable_overlay' )->value();

		return ( $is_banner_enabled === true && $is_overlay_enabled === true ) ? true : false;		
	}
}