<?php 

if ( ! function_exists( 'xenial_theme_header_offcanvas_defaults' ) ) {

	function xenial_theme_header_offcanvas_defaults( $customize_defaults ) {

		$header_offcanvas_customize_defaults = apply_filters(
			'xenial_theme_header_offcanvas_defaults_filter',
			array(
				'offcanvas_layout' => 'side_panel',
				'offcanvas_side_panel_width' => 30,
				'offcanvas_side_panel_position' => 'left',
				'offcanvas_close_button_icon' => 'button_1',
				'offcanvas_close_button_label' => '',
				'enable_offcanvas_background_overlay' => true,

				'offcanvas_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'offcanvas_margin' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),

	            'offcanvas_background_type' => 'color',
	            'offcanvas_background_color' => '{"initial":""}',
	            'offcanvas_gradient_background_color_1' => '{"initial":""}',
	            'offcanvas_gradient_location_1' => 30,
	            'offcanvas_gradient_background_color_2' => '{"initial":""}',
	            'offcanvas_gradient_location_2' => 100,
	            'offcanvas_gradient_type' => 'linear',
	            'offcanvas_gradient_linear_angle' => 45,
	            'offcanvas_gradient_radial_position' => 'center_center',
	            'offcanvas_background_image' => '',
	            'offcanvas_image_background_repeat' => 'no-repeat',
	            'offcanvas_image_background_size' => 'auto',
	            'offcanvas_image_background_position' => 'center-center',
	            'offcanvas_image_background_attachment' => 'scroll',

	            'offcanvas_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',
	            
	            
	            
	            'offcanvas_overlay_color' => '{"initial":""}',


	            'offcanvas_close_button_font_size' => 16,
	            'offcanvas_close_button_padding' => array(
	            	'top' => '',
	            	'right' => '',
	            	'bottom' => '',
	            	'left' =>''
	            ),
	            'offcanvas_close_button_label_color' => '{"initial":"","hover":""}',
	            'offcanvas_close_button_background_color' => '{"initial":"","hover":""}',	            
	            'offcanvas_close_button_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}'
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $header_offcanvas_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_theme_header_offcanvas_defaults' );
}