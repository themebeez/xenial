<?php

if ( ! function_exists( 'xenial_theme_header_bottom_section_defaults' ) ) {

	function xenial_theme_header_bottom_section_defaults() {

		return apply_filters(
			'xenial_theme_header_bottom_section_defaults_filter',
			array(
				'header_bottom_section_width' => 'container',
				'header_bottom_section_device_visibility' => '',
				'header_bottom_section_min_width' => array(
					'desktop' => 50,
					'tablet' => '',
					'mobile' => ''
				),
				'header_bottom_section_background_color' => '',
				'header_bottom_section_border_top_style' => 'solid',
				'header_bottom_section_border_top_width' => 0,
				'header_bottom_section_border_top_color' => '',
				'header_bottom_section_border_bottom_style' => 'solid',
				'header_bottom_section_border_bottom_width' => 0,
				'header_bottom_section_border_bottom_color' => '' 
			)
		);
	}
}