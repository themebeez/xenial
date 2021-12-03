<?php 

if ( ! function_exists( 'xenial_theme_header_middle_section_defaults' ) ) {

	function xenial_theme_header_middle_section_defaults() {

		return apply_filters(
			'xenial_theme_header_middle_section_defaults_filter',
			array(
				'header_middle_section_width' => 'container',
				'header_middle_section_device_visibility' => '',
				'header_middle_section_min_width' => array(
					'desktop' => 50,
					'tablet' => '',
					'mobile' => ''
				),
				'header_middle_section_background_color' => '',
				'header_middle_section_border_top_style' => 'solid',
				'header_middle_section_border_top_width' => 0,
				'header_middle_section_border_top_color' => '',
				'header_middle_section_border_bottom_style' => 'solid',
				'header_middle_section_border_bottom_width' => 0,
				'header_middle_section_border_bottom_color' => '' 
			)
		);
	}
}