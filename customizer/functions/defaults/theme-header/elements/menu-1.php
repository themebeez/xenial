<?php 


if ( ! function_exists( 'xenial_get_header_primary_menu_customize_defaults' ) ) {

	function xenial_get_header_primary_menu_customize_defaults() {

		return apply_filters(
			'xenial_header_primary_menu_customize_defaults_filter',
			array(
				'primary_menu' => '',

	            'primary_desktop_top_level_menu_item_spacing' => 30,
	            'primary_desktop_top_level_menu_item_stretch' => false,
	            'primary_menu_top_level_items_color' => '{"initial":"","hover":"","active":""}',
	            'primary_menu_top_level_items_background_color' => '{"initial":"","hover":"","active":""}',
	            'primary_menu_top_level_items_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'primary_menu_top_level_items_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',
	            
	            'primary_menu_top_level_items_font_weight' => '400',
	            'primary_menu_top_level_items_font_size' => 16,
	            'primary_menu_top_level_items_line_height' => 1.5,
	            'primary_menu_top_level_items_font_style' => 'normal',
	            'primary_menu_top_level_items_text_transform' => 'inherit',
	            
	            'primary_menu_alignment' => 'left'	            
			)
		);
	}
}



if ( ! function_exists( 'xenial_get_header_primary_menu_dropdown_customize_defaults' ) ) {

	function xenial_get_header_primary_menu_dropdown_customize_defaults() {

		return apply_filters(
			'xenial_header_primary_menu_dropdown_customize_defaults_filter',
			array(
				'primary_menu_dropdown_reveal_effect' => 'none',
	            'primary_menu_dropdown_width' => 200,
	            'primary_menu_dropdown_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0,
	            ),
	            'primary_menu_dropdown_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',
	            'primary_menu_dropdown_top_offset' => 0,
	            'primary_menu_dropdown_items_divider_width' => 1,
	            'primary_menu_dropdown_items_divider_color' => '{"initial":""}',            
	            'primary_menu_dropdown_items_color' => '{"initial":"","hover":"","active":""}',
	            'primary_menu_dropdown_items_background_color' => '{"initial":"","hover":"","active":""}',
	            'primary_menu_dropdown_items_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0,
	            ),
	            'primary_menu_dropdown_items_font_size' => 16,
	            'primary_menu_dropdown_items_font_weight' => '400',
	            'primary_menu_dropdown_items_line_height' => 1.5,
	            'primary_menu_dropdown_items_font_style' => 'normal',
	            'primary_menu_dropdown_items_text_transform' => 'inherit',
			)
		);
	}
}