<?php

/**
 * Checks if page header is enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_enabled' ) ) {

    function xenial_is_page_header_enabled( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        return ( $is_page_header_enabled ) ? true : false;
    }
}

/**
 * Checks if background of page header is color background.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_background_a_color' ) ) {

    function xenial_is_page_header_background_a_color( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        $page_header_background = $control->manager->get_setting( 'page_header_background_type' )->value();

        return ( $is_page_header_enabled === true && $page_header_background === 'color' ) ? true : false;
    }
}

/**
 * Checks if background of page header is gradient background.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_background_a_gradient' ) ) {

    function xenial_is_page_header_background_a_gradient( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        $page_header_background = $control->manager->get_setting( 'page_header_background_type' )->value();

        return ( $is_page_header_enabled === true && $page_header_background === 'gradient' ) ? true : false;
    }
}

/**
 * Checks if gradient background of page header is linear.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_gradient_background_linear' ) ) {

    function xenial_is_page_header_gradient_background_linear( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        $page_header_background = $control->manager->get_setting( 'page_header_background_type' )->value();

        $gradient_type = $control->manager->get_setting( 'page_header_gradient_type' )->value();

        return ( $is_page_header_enabled === true && $page_header_background === 'gradient' && $gradient_type === 'linear' ) ? true : false;
    }
}

/**
 * Checks if gradient background of page header is radial.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_gradient_background_radial' ) ) {

    function xenial_is_page_header_gradient_background_radial( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        $page_header_background = $control->manager->get_setting( 'page_header_background_type' )->value();

        $gradient_type = $control->manager->get_setting( 'page_header_gradient_type' )->value();

        return ( $is_page_header_enabled === true && $page_header_background === 'gradient' && $gradient_type === 'radial' ) ? true : false;
    }
}

/**
 * Checks if background of page header is image background.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_page_header_background_a_image' ) ) {

    function xenial_is_page_header_background_a_image( $control ) {

        $is_page_header_enabled = $control->manager->get_setting( 'enable_page_header' )->value();

        $page_header_background = $control->manager->get_setting( 'page_header_background_type' )->value();

        return ( $is_page_header_enabled === true && $page_header_background === 'image' ) ? true : false;
    }
}