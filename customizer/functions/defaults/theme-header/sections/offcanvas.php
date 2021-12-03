<?php 

if ( ! function_exists( 'xenial_theme_header_offcanvas_defaults' ) ) {

	function xenial_theme_header_offcanvas_defaults() {

		return apply_filters(
			'xenial_theme_header_offcanvas_defaults_filter',
			array(
				'header_canvas_width' => 250,
				'header_canvas_position' => 'left',
				'header_canvas_enable_background_overlay' => true,
				'close_header_canvas_on_click_on_background_overlay' => true,
				
				'mobile_offcanvas_menu_padding' => array(
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
	            'mobile_offcanvas_menu_margin' => array(
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
	            'mobile_offcanvas_menu_background' => '',
	            'mobile_offcanvas_menu_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'mobile_offcanvas_menu_border_radius' => 0,
	            'mobile_offcanvas_menu_border_color' => '',
	            
	            
	            
	            'mobile_menu_offcanvas_overlay_color' => '',


	            'mobile_menu_close_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'mobile_menu_close_button_spacing' => array(
	                'desktop' => 0,
	                'tablet' => 0,
	                'mobile' => 0
	            ),
	            'mobile_menu_close_button_label_color' => '',
	            'mobile_menu_close_button_hover_label_color' => '',
	            'mobile_menu_close_button_background_color' => '',
	            'mobile_menu_close_button_hover_background_color' => '',
	            'mobile_menu_close_button_border_radius' => 0,
	            'mobile_menu_close_button_border_style' => 'solid',
	            'mobile_menu_close_button_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' =>0
	            ),
	            'mobile_menu_close_button_border_color' => '',
	            'mobile_menu_close_button_hover_border_color' => '',  
			)
		);
	}
}