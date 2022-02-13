<?php 

if ( ! function_exists( 'xenial_theme_footer_top_section_defaults' ) ) {

	function xenial_theme_footer_top_section_defaults( $customize_defaults ) {

		$footer_top_section_customize_defaults = apply_filters(
			'xenial_theme_footer_top_section_defaults_filter',
			array(
				'footer_top_section_width' => 'container',
				'footer_top_section_device_visibility' => '',
				'footer_top_section_columns' => 3,
				'footer_top_section_columns_spacing' => array(
					'desktop' => 15,
					'tablet' => '',
					'mobile' => ''
				),
				'footer_top_section_2_columns_layout' => array(
					'desktop' => 'layout_1',
					'tablet' => 'layout_1',
					'mobile' => 'layout_1',
				),
				'footer_top_section_3_columns_layout' => array(
					'desktop' => 'layout_1',
					'tablet' => 'layout_1',
					'mobile' => 'layout_1',
				),
				'footer_top_section_4_columns_layout' => array(
					'desktop' => 'layout_1',
					'tablet' => 'layout_1',
					'mobile' => 'layout_1',
				),
				'footer_top_section_5_columns_layout' => array(
					'desktop' => 'layout_1',
					'tablet' => 'layout_1',
					'mobile' => 'layout_1',
				),
				'footer_top_section_6_columns_layout' => array(
					'desktop' => 'layout_1',
					'tablet' => 'layout_1',
					'mobile' => 'layout_1',
				),
				'footer_top_section_top_bottom_spacing' => array(
					'desktop' => 50,
					'tablet' => '',
					'mobile' => ''
				),
				'footer_top_section_background_color' => '',
				'footer_top_section_border_top_style' => 'solid',
				'footer_top_section_border_top_width' => 0,
				'footer_top_section_border_top_color' => '',
				'footer_top_section_border_bottom_style' => 'solid',
				'footer_top_section_border_bottom_width' => 0,
				'footer_top_section_border_bottom_color' => '' 
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $footer_top_section_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_theme_footer_top_section_defaults' );
}