<?php

/**
 * Checks if top header is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_top_header_enabled' ) ) {

	function xenial_is_top_header_enabled( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		return ( $is_top_header_enabled ) ? true : false;
	}
}


/**
 * Checks if top left header element is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_top_left_header_element_enabled' ) ) {

	function xenial_is_top_left_header_element_enabled( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		$is_top_left_header_element_enabled = $control->manager->get_setting( 'display_top_header_left_element' )->value();

		return ( $is_top_header_enabled === true && $is_top_left_header_element_enabled === true ) ? true : false;
	}
}


/**
 * Checks if top right header element is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_top_right_header_element_enabled' ) ) {

	function xenial_is_top_right_header_element_enabled( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		$is_top_right_header_element_enabled = $control->manager->get_setting( 'display_top_header_right_element' )->value();

		return ( $is_top_header_enabled === true && $is_top_right_header_element_enabled === true ) ? true : false;
	}
}


/**
 * Checks if nav menu element is enabled on top header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_nav_menu_element_enabled_on_top_header' ) ) {

	function xenial_is_nav_menu_element_enabled_on_top_header( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		$is_top_left_header_element_enabled = $control->manager->get_setting( 'display_top_header_left_element' )->value();

		$is_top_right_header_element_enabled = $control->manager->get_setting( 'display_top_header_right_element' )->value();

		$top_left_header_element = $control->manager->get_setting( 'top_header_left_element' )->value();

		$top_right_header_element = $control->manager->get_setting( 'top_header_right_element' )->value();

		return ( $is_top_header_enabled === true && ( ( $is_top_left_header_element_enabled === true && $top_left_header_element === 'nav_menu' ) || ( $is_top_right_header_element_enabled === true && $top_right_header_element === 'nav_menu' ) ) ) ? true : false;
	}
}



/**
 * Checks if text element is enabled on top header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_text_element_enabled_on_top_header' ) ) {

	function xenial_is_text_element_enabled_on_top_header( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		$is_top_left_header_element_enabled = $control->manager->get_setting( 'display_top_header_left_element' )->value();

		$is_top_right_header_element_enabled = $control->manager->get_setting( 'display_top_header_right_element' )->value();

		$top_left_header_element = $control->manager->get_setting( 'top_header_left_element' )->value();

		$top_right_header_element = $control->manager->get_setting( 'top_header_right_element' )->value();

		return ( $is_top_header_enabled === true && ( ( $is_top_left_header_element_enabled === true && $top_left_header_element === 'text' ) || ( $is_top_right_header_element_enabled === true && $top_right_header_element === 'text' ) ) ) ? true : false;
	}
}


/**
 * Checks if social menu element is enabled on top header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_social_menu_element_enabled_on_top_header' ) ) {

	function xenial_is_social_menu_element_enabled_on_top_header( $control ) {

		$is_top_header_enabled = $control->manager->get_setting( 'display_top_header' )->value();

		$is_top_left_header_element_enabled = $control->manager->get_setting( 'display_top_header_left_element' )->value();

		$is_top_right_header_element_enabled = $control->manager->get_setting( 'display_top_header_right_element' )->value();

		$top_left_header_element = $control->manager->get_setting( 'top_header_left_element' )->value();

		$top_right_header_element = $control->manager->get_setting( 'top_header_right_element' )->value();

		return ( $is_top_header_enabled === true && ( ( $is_top_left_header_element_enabled === true && $top_left_header_element === 'social_menu' ) || ( $is_top_right_header_element_enabled === true && $top_right_header_element === 'social_menu' ) ) ) ? true : false;
	}
}