<?php 


if ( ! function_exists( 'xenial_offcanvas_toggle_button_customize_defaults' ) ) {

	function xenial_offcanvas_toggle_button_customize_defaults() {

		return apply_filters(
			'xenial_offcanvas_toggle_button_customize_defaults_filter',
			array(
				'offcanvas_toggle_button_icon' => 'button_1',
				'offcanvas_toggle_button_label' => '',
	            'offcanvas_toggle_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'offcanvas' => 16
	            ),
	            'offcanvas_toggle_button_padding' => array(
	                'top' => '',
	                'right' => '',
	                'bottom' => '',
	                'left' => ''
	            ),
	            'offcanvas_toggle_button_label_color' => array(
	            	'initial' => array(
	            		'display' => true,
	            		'default' => ''
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => ''
	            	)
	            ),
	            'offcanvas_toggle_button_background_color' => array(
	            	'initial' => array(
	            		'display' => true,
	            		'default' => ''
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => ''
	            	)
	            ),
	            
	            'offcanvas_toggle_button_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',
			)
		);
	}
}
