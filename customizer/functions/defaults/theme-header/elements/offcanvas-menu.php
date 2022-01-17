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
	            'offcanvas_menu_item_divider_color' => '{"initial":"","link":"","hover":"","active":""}',
	            'offcanvas_menu_item_color' => '{"initial":"","link":"","hover":"","active":""}',

	            'offcanvas_menu_item_font_size' => '',
	            'offcanvas_menu_item_font_weight' => '400',
	            'offcanvas_menu_item_line_height' => '',
	            'offcanvas_menu_item_font_style' => 'normal',
	            'offcanvas_menu_item_text_transform' => 'inherit',

	            'offcanvas_menu_submenu_toggle_button_background_color' => '{"initial":"","link":"","hover":"","active":""}',
	            'offcanvas_menu_submenu_toggle_button_label_color' => '{"initial":"","link":"","hover":"","active":""}',
	            'offcanvas_menu_submenu_toggle_button_top_offset' => '',
	            'offcanvas_menu_submenu_toggle_button_border' => '{"expanded":false,"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',
			)
		);
	}
}
