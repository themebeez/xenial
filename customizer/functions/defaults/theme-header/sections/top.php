<?php 

if ( ! function_exists( 'xenial_theme_header_top_section_defaults' ) ) {

	function xenial_theme_header_top_section_defaults( $customize_defaults ) {

		$header_top_section_customize_defaults = apply_filters(
			'xenial_theme_header_top_section_defaults_filter',
			array(
				'header_top_section_width' => 'container',
				'header_top_section_device_visibility' => '',
				'header_top_section_min_width' => array(
					'desktop' => 50,
					'tablet' => '',
					'mobile' => ''
				),
				'header_top_section_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
				'header_top_section_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}' 
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $header_top_section_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_theme_header_top_section_defaults' );
}