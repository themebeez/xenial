<?php 

if ( ! function_exists( 'xenial_offcanvas_toggle_button_selective_refresh' ) ) {

	function xenial_offcanvas_toggle_button_selective_refresh( $wp_customize ) {

		$wp_customize->get_setting( 'offcanvas_toggle_button_label' )->transport = 'postMessage';

		if ( isset( $wp_customize->selective_refresh ) ) {

			$wp_customize->selective_refresh->add_partial( 'offcanvas_toggle_button_label', array(
				'selector'        => '.xe-mobile-canvas-trigger-button-label',
				'render_callback' => 'xenial_customize_partial_offcanvas_toggle_button_label',
			) );
		}
	}

	add_action( 'customize_register', 'xenial_offcanvas_toggle_button_selective_refresh' );
}


/**
 * Render the offcanvas toggle button label for the selective refresh partial.
 *
 * @return void
 */
function xenial_customize_partial_offcanvas_toggle_button_label() {

	echo xenial_get_option( 'offcanvas_toggle_button_label' );
}