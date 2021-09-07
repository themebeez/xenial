<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_transparent_header', 
	array(
		'priority'		=> 12,
		'title'			=> esc_html__( 'Transparent Header', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'enable_transparent_header', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['enable_transparent_header'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'enable_transparent_header', 
		array(
			'label' => esc_html__( 'Enable Transparent Header', 'xenial' ),
			'section' => 'xenial_transparent_header',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);




$wp_customize->add_setting( 
	'enable_transparent_header_on_pages',
	array(
		'default' => $xenial_customizer_defaults['enable_transparent_header_on_pages'],
		'sanitize_callback' => 'sanitize_text_field'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'enable_transparent_header_on_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'xenial' ),
			'section' => 'xenial_transparent_header',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => xenial_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting(
	'transparent_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'transparent_header_info_1',
		array(
			'label' => esc_html__( 'Logo', 'xenial' ),
			'section' => 'xenial_transparent_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'transparent_header_alternative_logo', 
	array(
		'sanitize_callback'		=> 'esc_url_raw',
		'default'				=> $xenial_customizer_defaults['transparent_header_alternative_logo'],
	)
);


$wp_customize->add_control( 
	new WP_Customize_Image_Control( 
		$wp_customize, 
		'transparent_header_alternative_logo', 
		array(
			'label' => esc_html__( 'Alternative Logo', 'xenial' ),
			'section' => 'xenial_transparent_header',
			'active_callback' => 'xenial_is_transparent_header_enabled'
		)
	) 
);


$wp_customize->add_setting(
	'transparent_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'transparent_header_info_2',
		array(
			'label' => esc_html__( 'Colors', 'xenial' ),
			'section' => 'xenial_transparent_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'transparent_header_site_title_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['transparent_header_site_title_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_site_title_color', 
		array(
			'label'	   	=> esc_html__( 'Site Title', 'xenial' ),
			'section'  	=> 'xenial_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		) 
	) 
);





$wp_customize->add_setting( 
	'transparent_header_tagline_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['transparent_header_tagline_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_tagline_color', 
		array(
			'label'	   	=> esc_html__( 'Tagline', 'xenial' ),
			'section'  	=> 'xenial_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		) 
	) 
);



$wp_customize->add_setting( 
	'transparent_header_text_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['transparent_header_text_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_text_color', 
		array(
			'label'	   	=> esc_html__( 'Text &amp Links', 'xenial' ),
			'section'  	=> 'xenial_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		) 
	) 
);




$wp_customize->add_setting( 
	'transparent_header_link_hover_color', 
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default' => $xenial_customizer_defaults['transparent_header_link_hover_color'],
	) 
);

$wp_customize->add_control( 
	new WP_Customize_Color_Control( 
		$wp_customize, 
		'transparent_header_link_hover_color', 
		array(
			'label'	   	=> esc_html__( 'Link - On Hover', 'xenial' ),
			'section'  	=> 'xenial_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		) 
	) 
);




$wp_customize->add_setting( 
	'transparent_header_border_color', 
	array(
		'sanitize_callback' => '',
		'default' => $xenial_customizer_defaults['transparent_header_border_color'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Alpha_Color_Picker_Control( 
		$wp_customize, 
		'transparent_header_border_color', 
		array(
			'label'	   	=> esc_html__( 'Border Color', 'xenial' ),
			'section'  	=> 'xenial_transparent_header',
			'priority' 	=> 10,
			'active_callback' => 'xenial_is_transparent_header_enabled'
		) 
	) 
);