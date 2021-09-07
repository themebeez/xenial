<?php


if ( ! function_exists( 'xenial_light_dark_mode_toggle_button_template' ) ) {

	function xenial_light_dark_mode_toggle_button_template() {

		$customizer_defaults = xenial_get_customizer_defaults();

		$theme_skin = xenial_get_option( 'theme_skin' ) ? xenial_get_option( 'theme_skin' ) : $customizer_defaults['theme_skin'];

		$enable_dark_mode_toggler = xenial_get_option( 'display_dark_mode_toggle_button' ) ? true : false;

		if ( $enable_dark_mode_toggler === false || $theme_skin === 'xenial-theme-dark'  ) {
			return;
		}

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = ( $theme_skin !== 'xenial-theme-dark' ) ? 'xenial-show-dark-icon xenial-hide-light-icon' : 'xenial-show-light-icon xenial-hide-dark-icon';

		$args = apply_filters( 'xenial_light_dark_mode_toggle_button_args', $args );

		get_template_part( 'template-parts/miscellaneous/button', 'light-dark-mode-toggle', $args );
	}
}
add_action( 'xenial_light_dark_mode_toggle_button', 'xenial_light_dark_mode_toggle_button_template' );


if ( ! function_exists( 'xenial_scroll_top_button_template' ) ) {

	function xenial_scroll_top_button_template() {

		if ( ! xenial_get_option( 'enable_scroll_top_button' ) ) {
			return;
		}

		$customizer_defaults = xenial_get_customizer_defaults();

		$args = array(
			'classes' => array()
		);

		$args['classes'][] = xenial_get_option( 'scroll_top_btn_device_visibility' ) ? xenial_get_option( 'scroll_top_btn_device_visibility' ) : $customizer_defaults['scroll_top_btn_device_visibility'];

		$args = apply_filters( 'xenial_scroll_top_button_args', $args );

		get_template_part( 'template-parts/miscellaneous/button', 'scroll-top', $args );
	}
}
add_action( 'xenial_scroll_top_button', 'xenial_scroll_top_button_template' );