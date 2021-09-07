<?php

/**
 * Checks if main header layout one is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_main_header_one_enabled' ) ) {

	function xenial_is_main_header_one_enabled( $control ) {

		$main_header_layout = $control->manager->get_setting( 'main_header_layout' )->value();

		return ( $main_header_layout === 'header_1' ) ? true : false;
	}
}


/**
 * Checks if main header advertisement element is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_ad_element_enabled_on_main_header' ) ) {

	function xenial_is_ad_element_enabled_on_main_header( $control ) {

		$main_header_layout = $control->manager->get_setting( 'main_header_layout' )->value();

		$is_ad_element_enabled = $control->manager->get_setting( 'main_header_enable_header_ad' )->value();

		return ( $main_header_layout === 'header_1' && $is_ad_element_enabled === true ) ? true : false;
	}
}


/**
 * Checks if main header element section is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_main_header_elements_section_enabled' ) ) {

	function xenial_is_main_header_elements_section_enabled( $control ) {

		$is_elements_section_enabled = $control->manager->get_setting( 'main_header_enable_header_elements' )->value();

		return ( $is_elements_section_enabled ) ? true : false;
	}
}


/**
 * Checks if search element is enabled on main header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_search_element_enabled_on_main_header' ) ) {

	function xenial_is_search_element_enabled_on_main_header( $control ) {

		$is_elements_section_enabled = $control->manager->get_setting( 'main_header_enable_header_elements' )->value();

		$main_header_elements = $control->manager->get_setting( 'main_header_elements' )->value();

		return ( $is_elements_section_enabled === true && in_array( 'search', $main_header_elements ) ) ? true : false;
	}
}


/**
 * Checks if button element is enabled on main header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_button_element_enabled_on_main_header' ) ) {

	function xenial_is_button_element_enabled_on_main_header( $control ) {

		$is_elements_section_enabled = $control->manager->get_setting( 'main_header_enable_header_elements' )->value();

		$main_header_elements = $control->manager->get_setting( 'main_header_elements' )->value();

		return ( $is_elements_section_enabled === true && in_array( 'button', $main_header_elements ) ) ? true : false;
	}
}


/**
 * Checks if WooCommerce cart element is enabled on main header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_cart_element_enabled_on_main_header' ) ) {

	function xenial_is_cart_element_enabled_on_main_header( $control ) {

		if ( ! class_exists( 'WooCommerce' ) ) {
			return false;
		}

		$is_elements_section_enabled = $control->manager->get_setting( 'main_header_enable_header_elements' )->value();

		$main_header_elements = $control->manager->get_setting( 'main_header_elements' )->value();

		return ( $is_elements_section_enabled === true && in_array( 'cart', $main_header_elements ) ) ? true : false;
	}
}


/**
 * Checks if wishlist element is enabled on main header.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_wishlist_element_enabled_on_main_header' ) ) {

	function xenial_is_wishlist_element_enabled_on_main_header( $control ) {

		$is_elements_section_enabled = $control->manager->get_setting( 'main_header_enable_header_elements' )->value();

		$main_header_elements = $control->manager->get_setting( 'main_header_elements' )->value();

		return ( $is_elements_section_enabled === true && in_array( 'wishlist', $main_header_elements ) ) ? true : false;
	}
}