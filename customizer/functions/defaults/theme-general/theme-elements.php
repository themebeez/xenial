<?php 



if ( ! function_exists( 'xenial_theme_elements_customizer_defaults' ) ) {

	function xenial_theme_elements_customizer_defaults( $customize_defaults ) {

		$theme_elements_defaults = apply_filters(
			'xenial_theme_elements_customizer_defaults_filter',
			array(
				'disable_theme_header' => false,
				'disable_theme_footer' => false
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $theme_elements_defaults );

		return $customize_defaults;
	}
}
add_filter( 'xenial_customize_defaults', 'xenial_theme_elements_customizer_defaults' );