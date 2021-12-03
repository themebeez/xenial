<?php 


if ( ! function_exists( 'xenial_theme_header_mobile_menu_customize_defaults' ) ) {

	function xenial_theme_header_mobile_menu_customize_defaults() {

		return apply_filters(
			'xenial_theme_header_mobile_menu_customize_defaults_filter',
			array(
				'mobile_menu' => '',
				'mobile_menu_item_divider_width' => 1,
				'mobile_menu_item_padding' => array(
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
	            'mobile_menu_item_divider_color' => '',
	            'mobile_menu_item_color' => '',
	            'mobile_menu_item_hover_color' => '',
	            'mobile_menu_active_item_color' => '',

	            'mobile_menu_item_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'mobile_menu_item_font_weight' => '400',
	            'mobile_menu_item_line_height' => array(
	                'desktop' => 1.5,
	                'tablet' => 1.5,
	                'mobile' => 1.5
	            ),
	            'mobile_menu_item_font_style' => 'normal',
	            'mobile_menu_item_text_transform' => 'inherit',
			)
		);
	}
}
