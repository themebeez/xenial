<?php 



if ( ! function_exists( 'xenial_theme_elements_customizer_defaults' ) ) {

	function xenial_theme_elements_customizer_defaults( $customize_defaults ) {

		$theme_elements_defaults = apply_filters(
			'xenial_theme_elements_customizer_defaults_filter',
			array(
				'disable_theme_header' => false,
				'disable_theme_footer' => false,
				'test_typography'      => wp_json_encode(
					array(
						'source'          => 'websafe',
						'font_family'     => 'Arial, sans-serif',
						'font_variants'   => '',
						'font_url'        => '',
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '18',
								'unit'  => 'px',
							),
							'tablet'  => array(
								'value' => '16',
								'unit'  => 'px',
							),
							'mobile'  => array(
								'value' => '14',
								'unit'  => 'px',
							),
						),
						'font_weight'     => 'inherit',
						'line_heights'    => array(
							'desktop' => '1.7',
							'tablet'  => '1.6',
							'mobile'  => '1.5',
						),
						'letter_spacings' => array(
							'desktop' => array(
								'value' => '0',
								'unit'  => 'px',
							),
							'tablet'  => array(
								'value' => '0',
								'unit'  => 'px',
							),
							'mobile'  => array(
								'value' => '0',
								'unit'  => 'px',
							),
						),
						'font_style'      => 'normal',
						'text_transform'  => 'inherit',
					)
				),
				'test_typography_1'    => wp_json_encode(
					array(
						'source'        => 'websafe',
						'font_family'   => 'Arial, sans-serif',
						'font_variants' => '',
						'font_url'      => '',
						'font_size'     => array(
							'value' => '12',
							'unit'  => 'px',
						),
						'font_weight'   => 'inherit',
						// 'line_height'    => '1.7',
						// 'letter_spacing' => array(
						// 	'value' => '0',
						// 	'unit'  => 'px',
						// ),
						// 'font_style'     => 'normal',
						// 'text_transform' => 'inherit',
					)
				),
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $theme_elements_defaults );

		return $customize_defaults;
	}
}
add_filter( 'xenial_customize_defaults', 'xenial_theme_elements_customizer_defaults' );