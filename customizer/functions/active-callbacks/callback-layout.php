<?php

/**
 * Checks if Site Layout is not Fullwidth: Stretched.
 *
 * @since 	1.0.0
 * @param  	$control control object.
 * @return 	boolean.
 */
if ( ! function_exists( 'xenial_is_fullwidth_stretched_site_layout_disabled' ) ) {

	function xenial_is_fullwidth_stretched_site_layout_disabled( $control ) {

		$site_layout = $control->manager->get_setting( 'site_layout' )->value();

		return ( $site_layout != 'xenial-fullwidth-stretched' ) ? true : false;
	}
}