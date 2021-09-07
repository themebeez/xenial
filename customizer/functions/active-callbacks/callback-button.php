<?php

/**
 * Checks if button style is rounded.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_button_rounded' ) ) {

	function xenial_is_button_rounded( $control ) {

		$button_style = $control->manager->get_setting( 'button_style' )->value();

		return ( $button_style == 'rounded' ) ? true : false;
	}
}


/**
 * Checks if text button style is rounded.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_text_button_rounded' ) ) {

	function xenial_is_text_button_rounded( $control ) {

		$button_style = $control->manager->get_setting( 'txt_button_style' )->value();

		return ( $button_style == 'rounded' ) ? true : false;
	}
}