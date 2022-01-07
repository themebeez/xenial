<?php 

if ( ! function_exists( 'xenial_theme_header_middle_section_defaults' ) ) {

	function xenial_theme_header_middle_section_defaults() {

		return apply_filters(
			'xenial_theme_header_middle_section_defaults_filter',
			array(
				'header_middle_section_width' => 'container',
				'header_middle_section_device_visibility' => '',
				'header_middle_section_min_width' => '',
				'header_middle_section_background_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}',
				'header_middle_section_border' => '{"expanded":false,"desktop":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"tablet":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}},"mobile":{"border_style":"none","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}}',
			)
		);
	}
}