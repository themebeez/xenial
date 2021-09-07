<?php

/**
 * Checks if content width in single is a narrow width.
 *
 * @since   1.0.0
 * @param   $control control object.
 * @return  boolean.
 */
if ( ! function_exists( 'xenial_is_single_content_width_narrow_width' ) ) {

	function xenial_is_single_content_width_narrow_width( $control ) {

		$content_width = $control->manager->get_setting( 'single_content_width' )->value();

		return ( $content_width === 'xenial-narrow-width' ) ? true : false;
	}
}