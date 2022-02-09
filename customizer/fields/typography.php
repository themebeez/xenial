<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_typography',
	array(
		'title' => esc_html__( 'Typography', 'xenial' ),
		'panel' => 'xenial_general_panel'
	)
);


$wp_customize->add_setting( 
	'body_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'body_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Body Typograhy', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => false,
		    'priority'                 => 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'body_font_type',
	array(
		'default' => $xenial_customizer_defaults['body_font_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_font_types()
		) 
	)
);


$wp_customize->add_setting( 
	'body_system_font_family',
	array(
		'default' => $xenial_customizer_defaults['body_system_font_family'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_get_standard_fonts(),
			'active_callback' => 'xenial_is_body_font_a_system_font',
		) 
	)
);

$wp_customize->add_setting( 
	'body_system_font_weight',
	array(
		'default' => $xenial_customizer_defaults['body_system_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'body_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_get_standard_font_weights(),
			'active_callback' => 'xenial_is_body_font_a_system_font',
		) 
	)
);


$wp_customize->add_setting( 
	'body_google_font',
	array(
		'default' => $xenial_customizer_defaults['body_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'body_google_font',
		array(
			'label' => '',
			'section' => 'xenial_typography',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'xenial_is_body_font_a_google_font',
		)
	) 
);

$wp_customize->add_setting( 
	'body_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'body_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'body_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'body_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'body_font_size_desktop',
		        'tablet' 	=> 'body_font_size_tablet',
		        'mobile' 	=> 'body_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1 
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'body_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'body_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'body_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['body_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'body_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'body_line_height_desktop',
		        'tablet' 	=> 'body_line_height_tablet',
		        'mobile' 	=> 'body_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);


xenial_range_control_field(
	'body_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['body_letter_spacing']
	]
);


$wp_customize->add_setting( 
	'headings_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'headings_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Headings (H1-H6)', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => false,
		    'priority'                 => 10,
		) 
	) 
);


$wp_customize->add_setting( 
	'headings_font_type',
	array(
		'default' => $xenial_customizer_defaults['headings_font_type'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_font_type',
		array(
			'label' => esc_html__( 'Font Type', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_font_types()
		) 
	)
);


$wp_customize->add_setting( 
	'headings_system_font_family',
	array(
		'default' => $xenial_customizer_defaults['headings_system_font_family'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_system_font_family',
		array(
			'label' => esc_html__( 'Font Family', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_get_standard_fonts(),
			'active_callback' => 'xenial_is_headings_font_a_system_font',
		) 
	)
);

$wp_customize->add_setting( 
	'headings_system_font_weight',
	array(
		'default' => $xenial_customizer_defaults['headings_system_font_weight'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'headings_system_font_weight',
		array(
			'label' => esc_html__( 'Font Weight', 'xenial' ),
			'section' => 'xenial_typography',
			'choices' => xenial_get_standard_font_weights(),
			'active_callback' => 'xenial_is_headings_font_a_system_font',
		) 
	)
);


$wp_customize->add_setting( 
	'headings_google_font',
	array(
		'default' => $xenial_customizer_defaults['headings_google_font'],
		'sanitize_callback' => ''
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Google_Font_Selector_Control( 
		$wp_customize, 
		'headings_google_font',
		array(
			'label' => '',
			'section' => 'xenial_typography',
			'input_attrs' => array(
				'font_count' => 'all',
				'orderby' => 'alpha',
			),
			'active_callback' => 'xenial_is_headings_font_a_google_font',
		)
	) 
);

$wp_customize->add_setting( 
	'h1_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h1_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H1', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h1-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h1_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h1_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h1_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h1_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h1_font_size_desktop',
		        'tablet' 	=> 'h1_font_size_tablet',
		        'mobile' 	=> 'h1_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h1_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h1_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h1_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h1_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h1_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h1_line_height_desktop',
		        'tablet' 	=> 'h1_line_height_tablet',
		        'mobile' 	=> 'h1_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);

xenial_range_control_field(
	'h1_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h1_letter_spacing']
	]
);



$wp_customize->add_setting( 
	'h2_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h2_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H2', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h2-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h2_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h2_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h2_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h2_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h2_font_size_desktop',
		        'tablet' 	=> 'h2_font_size_tablet',
		        'mobile' 	=> 'h2_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h2_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h2_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h2_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h2_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h2_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h2_line_height_desktop',
		        'tablet' 	=> 'h2_line_height_tablet',
		        'mobile' 	=> 'h2_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);

xenial_range_control_field(
	'h2_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h2_letter_spacing']
	]
);


$wp_customize->add_setting( 
	'h3_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h3_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H3', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h3-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h3_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h3_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h3_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h3_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h3_font_size_desktop',
		        'tablet' 	=> 'h3_font_size_tablet',
		        'mobile' 	=> 'h3_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h3_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h3_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h3_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h3_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h3_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h3_line_height_desktop',
		        'tablet' 	=> 'h3_line_height_tablet',
		        'mobile' 	=> 'h3_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);

xenial_range_control_field(
	'h3_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h3_letter_spacing']
	]
);


$wp_customize->add_setting( 
	'h4_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h4_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H4', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h4-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h4_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h4_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h4_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h4_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h4_font_size_desktop',
		        'tablet' 	=> 'h4_font_size_tablet',
		        'mobile' 	=> 'h4_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h4_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h4_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h4_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h4_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h4_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h4_line_height_desktop',
		        'tablet' 	=> 'h4_line_height_tablet',
		        'mobile' 	=> 'h4_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);


xenial_range_control_field(
	'h4_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h4_letter_spacing']
	]
);


$wp_customize->add_setting( 
	'h5_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h5_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H5', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h5-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h5_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h5_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h5_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h5_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h5_font_size_desktop',
		        'tablet' 	=> 'h5_font_size_tablet',
		        'mobile' 	=> 'h5_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h5_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h5_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h5_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h5_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h5_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h5_line_height_desktop',
		        'tablet' 	=> 'h5_line_height_tablet',
		        'mobile' 	=> 'h5_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);


xenial_range_control_field(
	'h5_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.05, 
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h5_letter_spacing']
	]
);

$wp_customize->add_setting( 
	'h6_typography_wrapper', 
	array(
    	'sanitize_callback' 	   => 'sanitize_text_field',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Wrapper_Control( 
		$wp_customize, 
		'h6_typography_wrapper', 
		array(
		    'label'                    => esc_html__( 'Heading - H6', 'xenial' ),
		    'section'                  => 'xenial_typography',
		    'type'                     => 'xenial-wrapper',
		    'accordion'                => true,
		    'class'                    => esc_attr( 'h6-typography-content' ),
		    'controls_to_wrap'         => 3,
		    'expanded'                 => false,
		    'priority'                 => 10,
		) 
	) 
);

$wp_customize->add_setting( 
	'h6_font_size_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_font_size']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h6_font_size_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_font_size']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_setting( 
	'h6_font_size_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_font_size']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_integer_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h6_font_size', 
		array(
			'label' 			=> esc_html__( 'Font Size (px)', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h6_font_size_desktop',
		        'tablet' 	=> 'h6_font_size_tablet',
		        'mobile' 	=> 'h6_font_size_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 100,
		        'step'  => 1
		    ),
		    'responsive' => true,
		) 
	) 
);


$wp_customize->add_setting( 
	'h6_line_height_desktop', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_line_height']['desktop'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h6_line_height_tablet', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_line_height']['tablet'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_setting( 
	'h6_line_height_mobile', 
	array(
		'default'           	=> $xenial_customizer_defaults['h6_line_height']['mobile'],
		'sanitize_callback' 	=> 'xenial_sanitize_float_number',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Slider_Control( 
		$wp_customize, 
		'h6_line_height', 
		array(
			'label' 			=> esc_html__( 'Line Height', 'xenial' ),
			'section'  			=> 'xenial_typography',
			'settings' => array(
		        'desktop' 	=> 'h6_line_height_desktop',
		        'tablet' 	=> 'h6_line_height_tablet',
		        'mobile' 	=> 'h6_line_height_mobile',
		    ),
			'priority' 				=> 10,
		    'input_attrs' 			=> array(
		        'min'   => 0,
		        'max'   => 10,
		        'step'  => 0.1
		    ),
		    'responsive' => true,
		) 
	) 
);

xenial_range_control_field(
	'h6_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => [
			'min' => 0, 
			'max' => 5, 
			'step' => 0.5,
		],
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h6_letter_spacing']
	]
);