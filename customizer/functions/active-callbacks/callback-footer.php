<?php

/**
 * Checks if theme footer enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_theme_footer_enabled' ) ) {

    function xenial_is_theme_footer_enabled( $control ) {

        return ( $control->manager->get_setting( 'disable_theme_footer' )->value() == false ) ? true : false;
    }
}