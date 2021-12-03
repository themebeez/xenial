<?php 

if ( ! function_exists( 'xenial_theme_header_top_section_defaults' ) ) {

	function xenial_theme_header_top_section_defaults() {

		return apply_filters(
			'xenial_theme_header_top_section_defaults_filter',
			array(
				'header_top_section_width' => 'container',
				'header_top_section_device_visibility' => '',
				'header_top_section_min_width' => array(
					'desktop' => 50,
					'tablet' => '',
					'mobile' => ''
				),
				'header_top_section_background_color' => '',
				'header_top_section_border_top_style' => 'solid',
				'header_top_section_border_top_width' => 0,
				'header_top_section_border_top_color' => '',
				'header_top_section_border_bottom_style' => 'solid',
				'header_top_section_border_bottom_width' => 0,
				'header_top_section_border_bottom_color' => '' 
			)
		);
	}
}