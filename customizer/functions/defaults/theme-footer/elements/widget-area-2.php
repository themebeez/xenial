<?php 


if ( ! function_exists( 'xenial_get_footer_widget_area_2_customize_defaults' ) ) {

	function xenial_get_footer_widget_area_2_customize_defaults( $customize_defaults ) {

		$footer_widget_area_2_customize_defaults = apply_filters(
			'xenial_footer_widget_area_2_customize_defaults_filter',
			array(
				'footer_widget_area_2_content_alignment' => array(
					'desktop' 	=> 'left',
					'tablet'	=> 'left',
					'mobile'	=> 'left',
				),
				'footer_widget_area_2_visibility'	=> 'desktop,tablet,mobile',
				'footer_widget_area_2_text_color'	=> '',
				'footer_widget_area_2_link_color'	=> '',
				'footer_widget_area_2_link_hover_color'	=> ''
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $footer_widget_area_2_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_footer_widget_area_2_customize_defaults' );
}