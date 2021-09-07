<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_colors',
	array(
		'title' => esc_html__( 'Colors', 'xenial' ),
		'panel' => 'xenial_general_panel'
	)
);


$wp_customize->add_setting( 
	'theme_skin',
	array(
		'default' => $xenial_customizer_defaults['theme_skin'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'theme_skin',
		array(
			'label' => esc_html__( 'Theme Skin', 'xenial' ),
			'section' => 'xenial_colors',
			'choices' => xenial_color_themes()
		) 
	)
);




$wp_customize->add_setting( 
	'accent_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['accent_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'accent_color', 
		array(
			'label'	   	=> esc_html__( 'Accent Color', 'xenial' ),
			'section'  	=> 'xenial_colors',
			'priority' 	=> 10,
		) 
	) 
);





$wp_customize->add_setting( 
	'display_dark_mode_toggle_button', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_dark_mode_toggle_button'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_dark_mode_toggle_button', 
		array(
			'label' => esc_html__( 'Display Dark Mode Toggle Button', 'xenial' ),
			'section' => 'xenial_colors',
			'type' => 'ios',
			'active_callback' => 'xenial_is_theme_skin_not_dark'
		) 
	) 
);


