<?php 


if ( ! function_exists( 'xenial_get_header_primary_menu_customize_defaults' ) ) {

	function xenial_get_header_primary_menu_customize_defaults() {

		return apply_filters(
			'xenial_header_primary_menu_customize_defaults_filter',
			array(
				'primary_menu_display' => '',

	            'primary_desktop_top_level_menu_item_spacing' => 30,
	            'primary_menu_top_level_items_color' => '',
	            'primary_menu_top_level_items_hover_color' => '',
	            'primary_menu_top_level_items_active_color' => '',
	            'primary_menu_top_level_items_background_color' => '',
	            'primary_menu_top_level_items_hover_background_color' => '',
	            'primary_menu_top_level_items_active_background_color' => '',
	            'primary_menu_top_level_items_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'primary_menu_top_level_items_border_style' => 'solid',
	            'primary_menu_top_level_items_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'primary_menu_top_level_items_border_radius' => 0,
	            'primary_menu_top_level_items_border_color' => '',
	            'primary_menu_top_level_items_hover_border_color' => '',
	            'primary_menu_top_level_items_active_border_color' => '',
	            
	            'primary_menu_top_level_items_font_weight' => '400',
	            'primary_menu_top_level_items_font_size' => 16,
	            'primary_menu_top_level_items_line_height' => 1.5,
	            'primary_menu_top_level_items_font_style' => 'normal',
	            'primary_menu_top_level_items_text_transform' => 'inherit',
	            
	            'primary_menu_dropdown_items_hover_effect' => 'default',
	            'primary_menu_dropdown_width' => 200,
	            'primary_menu_dropdown_padding' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0,
	            ),
	            'primary_menu_dropdown_border_style' => 'solid',
	            'primary_menu_dropdown_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'primary_menu_dropdown_border_radius' => 0,
	            'primary_menu_dropdown_border_color' => '',
	            'primary_menu_dropdown_top_offset' => 0,
	            'primary_menu_dropdown_items_divider_width' => 1,
	            'primary_menu_dropdown_items_divider_color' => '',            
	            'primary_menu_dropdown_items_color' => '',
	            'primary_menu_dropdown_items_hover_color' => '',
	            'primary_menu_dropdown_items_active_color' => '',
	            'primary_menu_dropdown_items_background_color' => '',
	            'primary_menu_dropdown_items_hover_background_color' => '',
	            'primary_menu_dropdown_items_active_background_color' => '',
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

	            'primary_menu_alignment' => 'left',

	            'offcanvas_menu_toggle_button_breakpoint' => 768,
	            'offcanvas_menu_toggle_button_label' => '',
	            'offcanvas_menu_position' => 'left',
	            'enable_offcanvas_menu_overlay' => true,
	            'close_offcanvas_menu_on_click_on_overlay' => true,
	            

	            'mobile_menu_toggle_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'mobile_menu_toggle_button_spacing' => array(
	                'desktop' => 0,
	                'tablet' => 0,
	                'mobile' => 0
	            ),
	            'mobile_menu_toggle_button_label_color' => '',
	            'mobile_menu_toggle_button_hover_label_color' => '',
	            'mobile_menu_toggle_button_background_color' => '',
	            'mobile_menu_toggle_button_hover_background_color' => '',
	            'mobile_menu_toggle_button_border_radius' => 0,
	            'mobile_menu_toggle_button_border_style' => 'solid',
	            'mobile_menu_toggle_button_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'mobile_menu_toggle_button_border_color' => '',
	            'mobile_menu_toggle_button_hover_border_color' => '',
			)
		);
	}
}