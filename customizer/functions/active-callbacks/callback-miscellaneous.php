<?php

/**
 * Checks if scroll top button is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_scroll_top_button_enabled' ) ) {

    function xenial_is_scroll_top_button_enabled( $control ) {

        $is_scroll_top_button_enabled = $control->manager->get_setting( 'enable_scroll_top_button' )->value();

        return ( $is_scroll_top_button_enabled ) ? true : false;
    }
}