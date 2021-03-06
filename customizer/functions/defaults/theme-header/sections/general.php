<?php 


if ( ! function_exists( 'xenial_get_header_general_customize_defaults' ) ) {

	function xenial_get_header_general_customize_defaults( $customize_defaults ) {

		$header_general_customize_defaults = apply_filters(
			'xenial_header_general_customize_defaults_filter',
			array(
				'theme_header_elements' => '{"desktop":{"top":{"left":null,"middle":null,"right":null},"middle":{"left":["site_identity"],"middle":null,"right":["menu_1"]},"bottom":{"left":null,"middle":null,"right":null}},"mobile":{"top":{"left":null,"middle":null,"right":null},"middle":{"left":null,"middle":null,"right":null},"bottom":{"left":null,"middle":null,"right":null},"offcanvas":null}}',
				'header_margin' => array(
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
				'header_padding' => array(
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
				'header_background_type' => 'color',
	            'header_background_color' => '{"initial":""}',
	            'header_gradient_background_color_1' => '{"initial":""}',
	            'header_gradient_location_1' => 30,
	            'header_gradient_background_color_2' => '{"initial":""}',
	            'header_gradient_location_2' => 100,
	            'header_gradient_type' => 'linear',
	            'header_gradient_linear_angle' => 45,
	            'header_gradient_radial_position' => 'center_center',
	            'header_background_image' => '',
	            'header_image_background_repeat' => 'no-repeat',
	            'header_image_background_size' => 'auto',
	            'header_image_background_position' => 'center-center',
	            'header_image_background_attachment' => 'scroll',
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $header_general_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_header_general_customize_defaults' );
}