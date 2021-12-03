<?php 

if ( ! function_exists( 'xenial_get_footer_social_links_customize_defaults' ) ) {

	function xenial_get_footer_social_links_customize_defaults() {

		return apply_filters(
			'xenial_footer_social_links_customize_defaults_filter',
			array(
				'footer_social_links' => '',
	            'footer_social_link_visibility' => 'desktop,tablet,mobile',
	            'footer_social_link_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'footer_social_link_display_title' => false,
	            'footer_social_link_display'	=> 'horizontal',
	            'footer_social_link_item_spacing' => array(
	                'desktop' => 10,
	                'tablet' => 10,
	                'mobile' => 10,
	            ),
	            'footer_social_link_icon_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'footer_social_link_icon_background_spacing' => array(
	                'desktop' => 15,
	                'tablet' => 15,
	                'mobile' => 15,
	            ),
	            'footer_social_link_icon_border_style' => '',
	            'footer_social_link_icon_border_width' => array(
	                'top' => 0,
	                'right' => 0,
	                'bottom' => 0,
	                'left' => 0
	            ),
	            'footer_social_link_icon_border_radius' => 0,
	            'footer_social_link_title_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16,
	            ),
	            'footer_social_link_title_line_height' => array(
	                'desktop' => 1,
	                'tablet' => 1,
	                'mobile' => 1,
	            ),
	            'footer_social_link_icon_color_type' => 'custom',
	            'footer_social_link_icon_color' => '',
	            'footer_social_link_title_color' => '',
	            'footer_social_link_background_color' => '',
	            'footer_social_link_border_color' => '',
	            'footer_social_link_hover_icon_color' => '',
	            'footer_social_link_hover_title_color' => '',
	            'footer_social_link_hover_background_color' => '',
	            'footer_social_link_hover_border_color' => '',
			)
		);
	}
}