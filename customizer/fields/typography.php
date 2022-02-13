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



xenial_range_control_field(
	'body_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['body_font_size']
	]
);

xenial_range_control_field(
	'body_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['body_line_height']
	]
);


xenial_range_control_field(
	'body_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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


xenial_range_control_field(
	'h1_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h1_font_size']
	]
);

xenial_range_control_field(
	'h1_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h1_line_height']
	]
);

xenial_range_control_field(
	'h1_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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

xenial_range_control_field(
	'h2_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h2_font_size']
	]
);

xenial_range_control_field(
	'h2_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h2_line_height']
	]
);

xenial_range_control_field(
	'h2_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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


xenial_range_control_field(
	'h3_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h3_font_size']
	]
);

xenial_range_control_field(
	'h3_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h3_line_height']
	]
);

xenial_range_control_field(
	'h3_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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


xenial_range_control_field(
	'h4_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h4_font_size']
	]
);

xenial_range_control_field(
	'h4_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h4_line_height']
	]
);


xenial_range_control_field(
	'h4_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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


xenial_range_control_field(
	'h5_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h5_font_size']
	]
);

xenial_range_control_field(
	'h5_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h5_line_height']
	]
);


xenial_range_control_field(
	'h5_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
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


xenial_range_control_field(
	'h6_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h6_font_size']
	]
);

xenial_range_control_field(
	'h6_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
	    'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h6_line_height']
	]
);

xenial_range_control_field(
	'h6_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_typography',
		'label' => esc_html__( 'Letter Spacing (px)', 'xenial' ),
		'input_attrs' => xenial_get_letter_spacing_input_attrs(),
		'responsive' => true,
		'defaults' => $xenial_customizer_defaults['h6_letter_spacing']
	]
);