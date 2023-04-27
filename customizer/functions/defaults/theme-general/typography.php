<?php 


if ( ! function_exists( 'xenial_get_customizer_default_typography_values' ) ) {

	function xenial_get_customizer_default_typography_values( $customize_defaults ) {

		$theme_typography_customize_defaults = apply_filters(
			'xenial_theme_typography_customize_defaults',
			array(
				'body_typography'     => wp_json_encode(
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
					)
				),
				'headings_typography' => wp_json_encode(
					array(
						'source'        => 'websafe',
						'font_family'   => 'Arial, sans-serif',
						'font_variants' => '',
						'font_url'      => '',
						'font_weight'   => 'inherit',
					)
				),
				'h1_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '2.25',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '2.25',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '2.25',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
				'h2_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '1.75',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '1.75',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '1.75',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
				'h3_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '1.5',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '1.5',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '1.5',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
				'h4_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '1.25',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '1.25',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '1.25',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
				'h5_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '1.125',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '1.125',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '1.125',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
				'h6_typography'       => wp_json_encode(
					array(
						'font_sizes'      => array(
							'desktop' => array(
								'value' => '1',
								'unit'  => 'rem',
							),
							'tablet'  => array(
								'value' => '1',
								'unit'  => 'rem',
							),
							'mobile'  => array(
								'value' => '1',
								'unit'  => 'rem',
							),
						),
						'line_heights'    => array(
							'desktop' => '1.2',
							'tablet'  => '1.2',
							'mobile'  => '1.2',
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
					)
				),
			)
		);

		$customize_defaults = array_merge( $customize_defaults, $theme_typography_customize_defaults );

		return $customize_defaults;
	}

	add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_typography_values' );
}
