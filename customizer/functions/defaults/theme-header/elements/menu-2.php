<?php 


if ( ! function_exists( 'xenial_get_header_secondary_menu_customize_defaults' ) ) {

	function xenial_get_header_secondary_menu_customize_defaults() {

		return apply_filters(
			'xenial_header_secondary_menu_customize_defaults_filter',
			array(
				'header_secondary_menu' => '',
	            'header_secondary_menu_visibility' => 'desktop,tablet,mobile',
	            'header_secondary_menu_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'header_secondary_menu_items_spacing' => array(
	                'desktop' => 10,
	                'tablet' => 10,
	                'mobile' => 10,
	            ),
	            'header_secondary_menu_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'header_secondary_menu_line_height' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1,
	            ),
	            'header_secondary_menu_font_weight' => '400',
	            'header_secondary_menu_font_style' => 'normal',
	            'header_secondary_menu_text_transform' => 'inherit',
	            'header_secondary_menu_link_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',
			)
		);
	}
}