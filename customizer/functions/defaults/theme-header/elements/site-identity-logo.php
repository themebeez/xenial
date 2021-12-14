<?php 


if ( ! function_exists( 'xenial_theme_header_site_identity_logo_defaults' ) ) {

	function xenial_theme_header_site_identity_logo_defaults() {
		return apply_filters(
			'xenial_theme_header_site_identity_logo_defaults_filter',
			array(
				'mobile_logo' => '',
	            'transparent_desktop_logo' => '',
	            'transparent_mobile_logo' => '',
	            'site_identity_logo_width' => array(
	                'desktop' => 200,
	                'tablet' => '',
	                'mobile' => ''
	            ),
	            'display_site_title' => true,
	            'site_title_visibility' => 'default',
	            'site_description_visibility' => 'default',
	            'logo_position' => 'left',
	            'site_identity_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'site_title_color' => '#000000',
	            'site_title_hover_color' => '#000000',
	            'site_identity_font_type' => 'system_font',
	            'site_identity_system_font_family' => 'arial',
	            'site_identity_system_font_weight' => '400',
	            'site_identity_google_font' => json_encode(
	                array(
	                    'font' => 'Open Sans',
	                    'regularweight' => array( 'regular' ),
	                    'boldweight' => array( '400' ),
	                    'category' => 'sans-serif'
	                )
	            ),
	            'site_identity_font_size' => array(
	                'desktop' => 36,
	                'tablet' => 36,
	                'mobile' => 36,
	            ),
	            'site_identity_line_height' => array(
	                'desktop' => 1.5,
	                'tablet' => 1.5,
	                'mobile' => 1.5,
	            ),
	            'site_identity_font_style' => 'normal',
	            'site_identity_text_transform' => 'inherit',
	            'site_description_font_size' => array(
	                'desktop' => 36,
	                'tablet' => 36,
	                'mobile' => 36,
	            ),
	            'site_description_line_height' => array(
	                'desktop' => 1.5,
	                'tablet' => 1.5,
	                'mobile' => 1.5,
	            ),
	            'site_description_font_style' => 'normal',
	            'site_description_text_transform' => 'inherit',
			)
		);
	}
}