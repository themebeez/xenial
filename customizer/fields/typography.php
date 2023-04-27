<?php
/**
 * Theme's typography sections and settings.
 *
 * @since 1.0.0
 *
 * @package Xenial
 */

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section(
	'xenial_typography',
	array(
		'title' => esc_html__( 'Typography', 'xenial' ),
		'panel' => 'xenial_general_panel',
	)
);

$wp_customize->add_setting(
	'body_typography_wrapper',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Wrapper_Control(
		$wp_customize,
		'body_typography_wrapper',
		array(
			'label'     => esc_html__( 'Base Font', 'xenial' ),
			'section'   => 'xenial_typography',
			'type'      => 'xenial-wrapper',
			'accordion' => false,
			'priority'  => 10,
		)
	)
);


$wp_customize->add_setting(
	'body_typography',
	array(
		'default'           => xenial_get_customize_default( 'body_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'body_typography',
		array(
			'label'   => 'Body Font',
			'section' => 'xenial_typography',
		)
	)
);

xenial_divider_field(
	'base_font_separator_1',
	array(
		'priority' => 10,
		'section'  => 'xenial_typography',
	)
);

$wp_customize->add_setting(
	'headings_typography',
	array(
		'default'           => xenial_get_customize_default( 'headings_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'headings_typography',
		array(
			'label'   => 'Headings Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'headings_typography_wrapper',
	array(
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Wrapper_Control(
		$wp_customize,
		'headings_typography_wrapper',
		array(
			'label'     => esc_html__( 'Headings Font', 'xenial' ),
			'section'   => 'xenial_typography',
			'type'      => 'xenial-wrapper',
			'accordion' => false,
			'priority'  => 10,
		)
	)
);

$wp_customize->add_setting(
	'h1_typography',
	array(
		'default'           => xenial_get_customize_default( 'h1_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h1_typography',
		array(
			'label'   => 'H1 Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'h2_typography',
	array(
		'default'           => xenial_get_customize_default( 'h2_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h2_typography',
		array(
			'label'   => 'H2 Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'h3_typography',
	array(
		'default'           => xenial_get_customize_default( 'h3_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h3_typography',
		array(
			'label'   => 'H3 Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'h4_typography',
	array(
		'default'           => xenial_get_customize_default( 'h4_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h4_typography',
		array(
			'label'   => 'H4 Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'h5_typography',
	array(
		'default'           => xenial_get_customize_default( 'h5_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h5_typography',
		array(
			'label'   => 'H5 Font',
			'section' => 'xenial_typography',
		)
	)
);

$wp_customize->add_setting(
	'h6_typography',
	array(
		'default'           => xenial_get_customize_default( 'h6_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'h6_typography',
		array(
			'label'   => 'H6 Font',
			'section' => 'xenial_typography',
		)
	)
);
