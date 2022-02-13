<?php 


if ( ! function_exists( 'xenial_get_header_html_customize_defaults' ) ) {

	function xenial_get_header_html_customize_defaults( $customize_defaults ) {

		$header_html_customize_defaults = apply_filters(
			'xenial_header_html_customize_defaults_filter',
			array(
				'header_html_content' => '',
	            'header_html_alignment' => array(
	                'desktop' => 'left',
	                'tablet' => 'left',
	                'mobile' => 'left'
	            ),
	            'header_html_visibility' => '',
	            'header_html_text_color' => '{"desktop":{"initial":"","link":"","hover":""},"tablet":{"initial":"","link":"","hover":""},"mobile":{"initial":"","link":"","hover":""}}',
	            'header_html_text_font_size' => array(
	                'desktop' => 16,
	                'tablet' => 16,
	                'mobile' => 16
	            ),
	            'header_html_text_line_height' => array(
	                'desktop' => 1.5,
	                'tablet' => 1.5,
	                'mobile' => 1.5
	            ),
	            'header_html_text_font_weight' => '400',
	            'header_html_text_font_style' => 'normal',
	            'header_html_text_text_transform' => 'inherit'
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $header_html_customize_defaults );

        return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_header_html_customize_defaults' );
}