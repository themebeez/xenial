<?php 



if ( ! function_exists( 'xenial_theme_elements_customizer_defaults' ) ) {

	function xenial_theme_elements_customizer_defaults() {

		return apply_filters(
			'xenial_theme_elements_customizer_defaults_filter',
			array(
				'disable_theme_header' => false,
				'disable_theme_footer' => false
			)
		);
	}
}