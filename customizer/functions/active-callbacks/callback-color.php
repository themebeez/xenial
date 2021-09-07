<?php

/**
 * Checks if theme skin is not dark.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_theme_skin_not_dark' ) ) {

	function xenial_is_theme_skin_not_dark( $control ) {

		$theme_skin = $control->manager->get_setting( 'theme_skin' )->value();

		return ( $theme_skin !== 'xenial-theme-dark' ) ? true : false;
	}
}



/**
 * Checks if dark mode switcher is enabled.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_dark_mode_switcher_enabled' ) ) {

    function xenial_is_dark_mode_switcher_enabled( $control ) {

        $theme_skin = $control->manager->get_setting( 'theme_skin' )->value();

        $dark_mode_switcher_enabled = $control->manager->get_setting( 'display_dark_mode_toggle_button' )->value();

        return ( $theme_skin !== 'xenial-theme-dark' && $dark_mode_switcher_enabled === true ) ? true : false;
    }
}