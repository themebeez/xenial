<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_miscellaneous',
	array(
		'title' => esc_html__( 'Miscellaneous', 'xenial' ),
		'panel' => 'xenial_general_panel'
	)
);

$wp_customize->add_setting(
	'miscellaneous_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'miscellaneous_info_1',
		array(
			'label' => esc_html__( 'Site Icon', 'xenial' ),
			'section' => 'xenial_miscellaneous',
			'priority' => 10,
		)
	)
);


$wp_customize->get_control( 'site_icon' )->section = 'xenial_miscellaneous';
$wp_customize->get_control( 'site_icon' )->priority = 11;


$wp_customize->add_setting(
	'miscellaneous_info_2',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'miscellaneous_info_2',
		array(
			'label' => esc_html__( 'Scroll Top Button', 'xenial' ),
			'section' => 'xenial_miscellaneous',
			'priority' => 12,
		)
	)
);


$wp_customize->add_setting( 
	'enable_scroll_top_button',
	array(
		'default' => $xenial_customizer_defaults['enable_scroll_top_button'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);
$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_scroll_top_button',
		array(
			'label' => esc_html__( 'Enable Scroll Top Button', 'xenial' ),
			'section' => 'xenial_miscellaneous',
			'type' => 'ios',
			'priority' => 12
		)
	) 
);

xenial_button_checkbox_field(
	'scroll_top_button_visibility',
array(
		'priority' => 12,
		'section' => 'xenial_miscellaneous',
		'label' => esc_html__( 'Hide On Devices', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'scroll_top_button_visibility' )
	)
);