<?php 


if ( ! function_exists( 'xenial_get_footer_general_customize_defaults' ) ) {

	function xenial_get_footer_general_customize_defaults( $customize_defaults ) {

		$footer_general_customize_defaults = apply_filters(
			'xenial_footer_general_customize_defaults_filter',
			array(
				'footer_elements' => '',
				'footer_margin' => array(
					'desktop_top' => 0,
	                'desktop_right' => 0,
	                'desktop_bottom' => 0,
	                'desktop_left' => 0,
	                'tablet_top' => 0,
	                'tablet_right' => 0,
	                'tablet_bottom' => 0,
	                'tablet_left' => 0,
	                'mobile_top' => 0,
	                'mobile_right' => 0,
	                'mobile_bottom' => 0,
	                'mobile_left' => 0
				),
				'footer_padding' => array(
					'desktop_top' => 0,
	                'desktop_right' => 0,
	                'desktop_bottom' => 0,
	                'desktop_left' => 0,
	                'tablet_top' => 0,
	                'tablet_right' => 0,
	                'tablet_bottom' => 0,
	                'tablet_left' => 0,
	                'mobile_top' => 0,
	                'mobile_right' => 0,
	                'mobile_bottom' => 0,
	                'mobile_left' => 0,
				),
				'footer_background_type' => 'color',
	            'footer_background_color' => '#000000',
	            'footer_gradient_background_color_1' => '#000000',
	            'footer_gradient_location_1' => 30,
	            'footer_gradient_background_color_2' => '#000000',
	            'footer_gradient_location_2' => 100,
	            'footer_gradient_type' => 'linear',
	            'footer_gradient_linear_angle' => 45,
	            'footer_gradient_radial_position' => 'center_center',
	            'footer_image_background_repeat' => 'no-repeat',
	            'footer_image_background_size' => 'auto',
	            'footer_image_background_position' => 'center-center',
	            'footer_image_background_attachment' => 'scroll',
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $footer_general_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_footer_general_customize_defaults' );
}