<?php

/**
 * Checks if transparent header is enabled.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_transparent_header_enabled' ) ) {

	function xenial_is_transparent_header_enabled( $control ) {

		$is_header_transparent = $control->manager->get_setting( 'enable_transparent_header' )->value();

		return ( $is_header_transparent ) ? true : false;	
	}
}