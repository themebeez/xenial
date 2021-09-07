<?php

/**
 * Checks if breadcrumb is enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_breadcrumb_enabled' ) ) {

	function xenial_is_breadcrumb_enabled( $control ) {

		$is_breadcrumb_enabled = $control->manager->get_setting( 'enable_breadcrumbs' )->value();

		return ( $is_breadcrumb_enabled ) ? true : false;
	}
}


/**
 * Checks if breadcrumb is placed inside the page header.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_breadcrumb_placed_inside_page_header' ) ) {

	function xenial_is_breadcrumb_placed_inside_page_header( $control ) {

		$is_breadcrumb_enabled = $control->manager->get_setting( 'enable_breadcrumbs' )->value();

		$breadcrumb_placement = $control->manager->get_setting( 'breadcrumbs_position' )->value();

		return ( $is_breadcrumb_enabled === true && $breadcrumb_placement === 'page_header' ) ? true : false;
	}
}


/**
 * Checks if breadcrumb is placed in a separate container.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_breadcrumb_position_placed_in_separate_container' ) ) {

	function xenial_is_breadcrumb_position_placed_in_separate_container( $control ) {

		$is_breadcrumb_enabled = $control->manager->get_setting( 'enable_breadcrumbs' )->value();

		$breadcrumb_placement = $control->manager->get_setting( 'breadcrumbs_position' )->value();

		return ( $is_breadcrumb_enabled === true && $breadcrumb_placement === 'default' ) ? true : false;
	}
}