<?php 


if ( ! function_exists( 'xenial_get_footer_copyright_customize_defaults' ) ) {

	function xenial_get_footer_copyright_customize_defaults() {

		return apply_filters(
			'xenial_footer_copyright_customize_defaults_filter',
			array(
				'copyright_text' => esc_html__( 'Copyright &copy; {current_year} {site_title}', 'xenial' ),
				'copyright_alignment' => array(
					'desktop'	=> 'center',
					'tablet'	=> 'center',
					'mobile'	=> 'center'
				),
				'copyright_visibility' => 'desktop,tablet,mobile',
				'copyright_text_color'	=> '',
				'copyright_link_color'	=> '',
				'copyright_link_hover_color' => '',
				'copyright_font_size'	=> array(
					'desktop'	=> '',
					'tablet'	=> '',
					'mobile'	=> ''
				)
			)
		);
	}
}