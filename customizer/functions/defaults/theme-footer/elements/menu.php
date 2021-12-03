<?php 


if ( ! function_exists( 'xenial_get_footer_menu_customize_defaults' ) ) {

	function xenial_get_footer_menu_customize_defaults() {

		return apply_filters(
			'xenial_footer_menu_customize_defaults_filter',
			array(
				'footer_menu' => '',
	            'footer_menu_visibility' => 'desktop,tablet,mobile',
	            'footer_menu_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'footer_menu_display'	=> 'horizontal',
	            'footer_menu_items_spacing' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => '',
	            ),
	            'footer_menu_font_size' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => '',
	            ),
	            'footer_menu_line_height' => array(
	                'desktop' => '',
	                'tablet' => '',
	                'mobile' => '',
	            ),
	            'footer_menu_font_weight' => '',
	            'footer_menu_font_style' => '',
	            'footer_menu_text_transform' => 'inherit',
	            'footer_menu_link_color' => '',
	            'footer_menu_link_hover_color' => '',
			)
		);
	}
}