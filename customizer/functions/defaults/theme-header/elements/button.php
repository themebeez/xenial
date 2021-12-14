<?php 


if ( ! function_exists( 'xenial_get_header_button_customize_defaults' ) ) {

	function xenial_get_header_button_customize_defaults() {

		return apply_filters(
			'xenial_header_button_customize_defaults_filter',
			array(
				'header_button_title' => esc_html__( 'Download', 'xenial' ),
	            'header_button_link' => '#',
	            'header_button_link_open_in_new_tab' => false,
	            'header_button_visibility' => '',
	            'header_button_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left', 
	                'mobile' => 'left'
	            ),
	            'header_button_font_color' => '',
	            'header_button_hover_font_color' => '',
	            'header_button_background_color' => '',
	            'header_button_hover_background_color' => '',
	            'header_button_border_radius' => array(
	                'desktop' => 0,
	                'tablet' => 0,
	                'mobile' => 0
	            ),
	            'header_button_border_style' => 'solid',
	            'header_button_border_width' => array(
	                'top' => 1,
	                'right' => 1,
	                'bottom' => 1,
	                'left' => 1
	            ),
	            'header_button_border_color' => '',
	            'header_button_hover_border_color' => '',
	            'header_button_padding' => array(
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

	            'header_button_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_button_line_height' => array(
	                'desktop' => 1.5,
	                'tablet' => 1.5,
	                'mobile' => 1.5
	            ),
	            'header_button_font_weight' => '400',
	            'header_button_font_style' => 'normal',
	            'header_button_text_transform' => 'inherit',
			)
		);
	}
}