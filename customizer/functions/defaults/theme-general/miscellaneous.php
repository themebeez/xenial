<?php 

if ( ! function_exists( 'xenial_get_customizer_defaults_miscellaneous_values' ) ) {

	function xenial_get_customizer_defaults_miscellaneous_values( $customize_defaults ) {

		$theme_miscellaneous_customize_defaults = apply_filters( 
			'xenial_theme_miscellaneous_customize_defaults_filter', 
			array(
				'enable_scroll_top_button' => false,
	            'scroll_top_button_visibility' => '',
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $theme_miscellaneous_customize_defaults );

        return $customize_defaults;
	}
}
add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_defaults_miscellaneous_values' );