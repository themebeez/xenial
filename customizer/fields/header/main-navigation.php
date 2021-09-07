<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_main_navigation', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Main Navigation', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'main_navigation_enable_sticky', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['main_navigation_enable_sticky'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'main_navigation_enable_sticky', 
		array(
			'label' => esc_html__( 'Enable Sticky Header', 'xenial' ),
			'description' => esc_html__( 'Only the section with the main navigation is made sticky.', 'xenial' ),
			'section' => 'xenial_main_navigation',
			'type' => 'ios',
		) 
	) 
);




$wp_customize->add_setting( 
	'main_navigation_alignment',
	array(
		'default' => $xenial_customizer_defaults['main_navigation_alignment'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'main_navigation_alignment',
		array(
			'label' => esc_html__( 'Menu Alignment', 'xenial' ),
			'section' => 'xenial_main_navigation',
			'choices' => xenial_get_alignments()
		)
	)
);





$wp_customize->add_setting( 
	'main_navigation_mobile_breakpoint', 
	array(
		'default' => $xenial_customizer_defaults['main_navigation_mobile_breakpoint'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'main_navigation_mobile_breakpoint', 
		array(
			'label' 			=> esc_html__( 'Mobile Breakpoint (px)', 'xenial' ),
			'section'  			=> 'xenial_main_navigation',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 1920,
                'step' 		=> 1,
            ),
		) 
	) 
);





$wp_customize->add_setting( 
	'main_navigation_mobile_menu_button_label', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['main_navigation_mobile_menu_button_label'],
	) 
);

$wp_customize->add_control( 
	'main_navigation_mobile_menu_button_label', 
	array(
		'label' => esc_html__( 'Mobile Menu Button Label', 'xenial' ),
		'section' => 'xenial_main_navigation',
		'type' => 'text',
	) 
);