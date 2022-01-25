<?php 

/**
 * Add customize default values for sticky header customize controls.
 * 
 * @since 1.0.0
 * @return array 
 */ 
if ( ! function_exists( 'xenial_get_sticky_header_customize_defaults' ) ) {

	function xenial_get_sticky_header_customize_defaults( $customize_defaults ) {

		$sticky_header_customize_defaults = array(
			'enable_sticky_header' => false,
			'enable_sticky_header_on_devices' => 'desktop,tablet'
		);

		$customize_defaults = array_merge( $customize_defaults, $sticky_header_customize_defaults );

		return $customize_defaults;
	}
}
add_filter( 'xenial_customize_defaults', 'xenial_get_sticky_header_customize_defaults' );