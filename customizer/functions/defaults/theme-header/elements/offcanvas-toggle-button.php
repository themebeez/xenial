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
	            'offcanvas_toggle_button_spacing' => array(
	                'desktop' => 0,
	                'tablet' => 0,
	                'offcanvas' => 0
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
	            
	            'offcanvas_toggle_button_border_style' => 'solid',
	            'offcanvas_toggle_button_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'offcanvas_toggle_button_border_radius' => 0,
	            'offcanvas_toggle_button_border_color' => array(
	            	'initial' => array(
	            		'display' => true,
	            		'default' => ''
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => ''
	            	)
	            ),
			)
		);
	}
}
