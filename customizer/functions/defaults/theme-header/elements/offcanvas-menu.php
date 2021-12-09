<?php 


if ( ! function_exists( 'xenial_offcanvas_menu_customize_defaults' ) ) {

	function xenial_offcanvas_menu_customize_defaults() {

		return apply_filters(
			'xenial_offcanvas_menu_customize_defaults_filter',
			array(
				'offcanvas_menu' => '',				
				'offcanvas_menu_item_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'display_offcanvas_menu_item_divider' => false,
	            'offcanvas_menu_item_divider_width' => 1,
	            'offcanvas_menu_item_divider_color' => array(
	            	'initial' => array(
	            		'display' => true,
	            		'default' => ''
	            	)
	            ),
	            'offcanvas_menu_item_color' => array(
	            	'initial' => array(
	            		'display' => true,
	            		'default' => ''
	            	),
	            	'hover' => array(
	            		'display' => true,
	            		'default' => ''
	            	),
	            	'active' => array(
	            		'display' => true,
	            		'default' => ''
	            	)
	            ),

	            'offcanvas_menu_item_font_size' => '',
	            'offcanvas_menu_item_font_weight' => '400',
	            'offcanvas_menu_item_line_height' => '',
	            'offcanvas_menu_item_font_style' => 'normal',
	            'offcanvas_menu_item_text_transform' => 'inherit',
			)
		);
	}
}
