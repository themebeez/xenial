<?php 


if ( ! function_exists( 'xenial_get_footer_widget_area_5_customize_defaults' ) ) {

	function xenial_get_footer_widget_area_5_customize_defaults() {

		return apply_filters(
			'xenial_footer_widget_area_5_customize_defaults_filter',
			array(
				'footer_widget_area_5_content_alignment' => array(
					'desktop' 	=> 'left',
					'tablet'	=> 'left',
					'mobile'	=> 'left',
				),
				'footer_widget_area_5_visibility'	=> 'desktop,tablet,mobile',
				'footer_widget_area_5_text_color'	=> '',
				'footer_widget_area_5_link_color'	=> '',
				'footer_widget_area_5_link_hover_color'	=> ''
			)
		);
	}
}