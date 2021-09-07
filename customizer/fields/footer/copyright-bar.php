<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_footer_copyright_bar', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Copyright Bar', 'xenial' ),
		'panel'		=> 'xenial_footer_panel'
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_bar_layout', 
	array(
		'sanitize_callback'		=> 'xenial_sanitize_select',
		'default'				=> $xenial_customizer_defaults['footer_copyright_bar_layout'],
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_copyright_bar_layout', 
		array( 
			'label' => esc_html__( 'Copyright Layout', 'xenial' ),
			'type'	=> 'select',
			'choices' => xenial_get_footer_copyright_bar_layouts(),
			'section' => 'xenial_footer_copyright_bar',
		)
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_bar_width',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_bar_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_width',
		array(
			'label' => esc_html__( 'Width', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_get_container_widths(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting(
	'footer_copyright_bar_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'footer_copyright_bar_info_1',
		array(
			'label' => esc_html__( 'Element - Copyright', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_text', 
	array(
		'sanitize_callback' => 'sanitize_textarea_field',
		'default' => $xenial_customizer_defaults['footer_copyright_text'],
	) 
);

$wp_customize->add_control( 
	'footer_copyright_text', 
	array(
		'label' => esc_html__( 'Content', 'xenial' ),
		'section' => 'xenial_footer_copyright_bar',
		'type' => 'textarea',
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_position',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_position',
		array(
			'label' => esc_html__( 'Position', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_copyright_position_choices(),
			'priority' => 10,
			'active_callback' => 'xenial_is_footer_copyright_section_layout_one'
		)
	)
);


$wp_customize->add_setting(
	'footer_copyright_bar_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'footer_copyright_bar_info_2',
		array(
			'label' => esc_html__( 'Element - Extra', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'footer_copyright_bar_extra_element_visibility',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_bar_extra_element_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_extra_element_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_extra_element',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_bar_extra_element'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_extra_element',
		array(
			'label' => esc_html__( 'Select Element', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_get_top_header_elements(),
			'priority' => 10,
		)
	)
);



$wp_customize->add_setting( 
	'footer_copyright_bar_text', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['footer_copyright_bar_text'],
	) 
);

$wp_customize->add_control( 
	'footer_copyright_bar_text', 
	array(
		'label' => esc_html__( 'Text', 'xenial' ),
		'section' => 'xenial_footer_copyright_bar',
		'type' => 'text',
		'active_callback' => 'xenial_is_text_element_enabled_in_copyright_section'
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_bar_social_menu',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_bar_social_menu'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_social_menu',
		array(
			'label' => esc_html__( 'Select Social Menu', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'xenial_is_social_links_element_enabled_in_copyright_section'
		)
	)
);


$wp_customize->add_setting( 
	'footer_copyright_bar_display_social_menu_title', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['footer_copyright_bar_display_social_menu_title'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( $wp_customize,
		'footer_copyright_bar_display_social_menu_title', 
		array(
			'label' => esc_html__( 'Display Social Link&rsquo;s Title', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'type' => 'ios',
			'priority' => 10,
			'active_callback' => 'xenial_is_social_links_element_enabled_in_copyright_section'
		) 
	) 
);


$wp_customize->add_setting( 
	'footer_copyright_bar_nav_menu',
	array(
		'default' => $xenial_customizer_defaults['footer_copyright_bar_nav_menu'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_copyright_bar_nav_menu',
		array(
			'label' => esc_html__( 'Select Navigation Menu', 'xenial' ),
			'section' => 'xenial_footer_copyright_bar',
			'choices' => xenial_get_nav_menus(),
			'priority' => 10,
			'active_callback' => 'xenial_is_nav_menu_element_enabled_in_copyright_section'
		)
	)
);