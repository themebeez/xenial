<?php 

if ( ! function_exists( 'xenial_scroll_top_template' ) ) {

	function xenial_scroll_top_template() {

		$display_scroll_top_button = xenial_get_option( 'enable_scroll_top_button' );

		if ( $display_scroll_top_button == false ) {
			return;
		}

		$template_args = array(
			'classes' => array()
		);

		$device_visibilities 	= xenial_get_option( 'scroll_top_button_visibility' );

		if ( $device_visibilities ) {
			$device_visibilities = explode( ',', $device_visibilities );
			foreach ( $device_visibilities as $device_visibility ) {
				$template_args['classes'][] = xenial_get_device_visibility_class( $device_visibility );
			}
		}

		get_template_part( 'template-parts/template', 'scroll-top', $template_args );	
	}
}