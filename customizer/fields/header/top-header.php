<?php
$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_top_header', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Top Header', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


$wp_customize->add_setting( 
	'display_top_header', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_top_header'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_top_header', 
		array(
			'label' => esc_html__( 'Display Top Header', 'xenial' ),
			'section' => 'xenial_top_header',
			'type' => 'ios',
			'priority' => 10,
		) 
	) 
);





$wp_customize->add_setting( 
	'top_header_visibility',
	array(
		'default' => $xenial_customizer_defaults['top_header_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		)
	)
);





$wp_customize->add_setting( 
	'top_header_width',
	array(
		'default' => $xenial_customizer_defaults['top_header_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_width',
		array(
			'label' => esc_html__( 'Width', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		)
	)
);



$wp_customize->add_setting(
	'top_header_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'top_header_info_1',
		array(
			'label' => esc_html__( 'Left Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'display_top_header_left_element', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_top_header_left_element'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( $wp_customize,
		'display_top_header_left_element', 
		array(
			'label' => esc_html__( 'Display Left Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		) 
	) 
);



$wp_customize->add_setting( 
	'top_header_left_element',
	array(
		'default' => $xenial_customizer_defaults['top_header_left_element'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_left_element',
		array(
			'label' => esc_html__( 'Select Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_top_header_elements(),
			'priority' => 10,
			'active_callback' => 'xenial_is_top_left_header_element_enabled'
		)
	)
);



$wp_customize->add_setting(
	'top_header_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'top_header_info_2',
		array(
			'label' => esc_html__( 'Right Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		)
	)
);


$wp_customize->add_setting( 
	'display_top_header_right_element', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_top_header_right_element'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( $wp_customize,
		'display_top_header_right_element', 
		array(
			'label' => esc_html__( 'Display Right Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_top_header_enabled'
		) 
	) 
);





$wp_customize->add_setting( 
	'top_header_right_element',
	array(
		'default' => $xenial_customizer_defaults['top_header_right_element'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_right_element',
		array(
			'label' => esc_html__( 'Select Element', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_top_header_elements(),
			'priority' => 10,
			'active_callback' => 'xenial_is_top_right_header_element_enabled'
		) 
	)
);



$wp_customize->add_setting(
	'top_header_info_3',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'top_header_info_3',
		array(
			'label' => esc_html__( 'Navigation Menu', 'xenial' ),
			'section' => 'xenial_top_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_nav_menu_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_nav_menu',
	array(
		'default' => $xenial_customizer_defaults['top_header_nav_menu'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_nav_menu',
		array(
			'label' => esc_html__( 'Select Navigation Menu', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'xenial_is_nav_menu_element_enabled_on_top_header'
		) 
	)
);




$wp_customize->add_setting( 
	'top_header_nav_menu_visibility',
	array(
		'default' => $xenial_customizer_defaults['top_header_nav_menu_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_nav_menu_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_nav_menu_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting(
	'top_header_info_4',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'top_header_info_4',
		array(
			'label' => esc_html__( 'Text', 'xenial' ),
			'section' => 'xenial_top_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_text_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting( 
	'top_header_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['top_header_text'],
	) 
);

$wp_customize->add_control( 
	'top_header_text', 
	array(
		'label' => esc_html__( 'Text', 'xenial' ),
		'section' => 'xenial_top_header',
		'type' => 'text',
		'active_callback' => 'xenial_is_text_element_enabled_on_top_header'
	) 
);




$wp_customize->add_setting( 
	'top_header_text_visibility',
	array(
		'default' => $xenial_customizer_defaults['top_header_text_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_text_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_text_element_enabled_on_top_header'
		)
	)
);


$wp_customize->add_setting(
	'top_header_info_5',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'top_header_info_5',
		array(
			'label' => esc_html__( 'Social Links', 'xenial' ),
			'section' => 'xenial_top_header',
			'priority' => 10,
			'active_callback' => 'xenial_is_social_menu_element_enabled_on_top_header'
		)
	)
);

$wp_customize->add_setting( 
	'top_header_social_menu',
	array(
		'default' => $xenial_customizer_defaults['top_header_social_menu'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_social_menu',
		array(
			'label' => esc_html__( 'Select Social Menu', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'xenial_is_social_menu_element_enabled_on_top_header'
		)
	)
);





$wp_customize->add_setting( 
	'top_header_display_social_menu_title', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['top_header_display_social_menu_title'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( $wp_customize,
		'top_header_display_social_menu_title', 
		array(
			'label' => esc_html__( 'Display Social Link&rsquo;s Title', 'xenial' ),
			'section' => 'xenial_top_header',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_social_menu_element_enabled_on_top_header'
		) 
	) 
);




$wp_customize->add_setting( 
	'top_header_social_menu_visibility',
	array(
		'default' => $xenial_customizer_defaults['top_header_social_menu_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'top_header_social_menu_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_top_header',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_social_menu_element_enabled_on_top_header'
		)
	)
);