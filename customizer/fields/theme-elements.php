<?php 

xenial_section_field( 
	'xenial_theme_elements',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Theme Elements', 'xenial' )
	)
);


xenial_switch_field(
	'disable_theme_header',
	array(
		'priority' => 10,
		'section' => 'xenial_theme_elements',
		'label' => esc_html__( 'Disable Theme Header', 'xenial' ),
		'default' => xenial_get_customize_default( 'disable_theme_header' )
	)
);


xenial_divider_field( 
	'theme_elements_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_theme_elements', 
	) 
);


xenial_switch_field(
	'disable_theme_footer',
	array(
		'priority' => 10,
		'section' => 'xenial_theme_elements',
		'label' => esc_html__( 'Disable Theme Footer', 'xenial' ),
		'default' => xenial_get_customize_default( 'disable_theme_footer' )
	)
);

xenial_divider_field( 
	'theme_elements_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_theme_elements', 
	) 
);





$wp_customize->add_setting(
	'test_typography',
	array(
		'default'           => xenial_get_customize_default( 'test_typography' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'test_typography',
		array(
			'label'   => 'Test Typography',
			'section' => 'xenial_theme_elements',
		)
	)
);


xenial_divider_field(
	'theme_elements_divider_3',
	array(
		'priority' => 10,
		'section'  => 'xenial_theme_elements',
	)
);

$wp_customize->add_setting(
	'test_typography_1',
	array(
		'default'           => xenial_get_customize_default( 'test_typography_1' ),
		'sanitize_callback' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Typography_Control(
		$wp_customize,
		'test_typography_1',
		array(
			'label'   => 'Test Typography 1',
			'section' => 'xenial_theme_elements',
		)
	)
);
