<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_footer_widgets', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Footer Widgets', 'xenial' ),
		'panel'		=> 'xenial_footer_panel'
	) 
);

$wp_customize->add_setting( 
	'display_footer_widgets', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['display_footer_widgets'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'display_footer_widgets', 
		array(
			'label' => esc_html__( 'Enable Footer Widgets', 'xenial' ),
			'section' => 'xenial_footer_widgets',
			'type' => 'ios',
		) 
	) 
);



$wp_customize->add_setting( 
	'footer_widgets_visibility',
	array(
		'default' => $xenial_customizer_defaults['footer_widgets_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_footer_widgets',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_footer_widgets_enabled'
		)
	)
);





$wp_customize->add_setting( 
	'footer_widgets_width',
	array(
		'default' => $xenial_customizer_defaults['footer_widgets_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_width',
		array(
			'label' => esc_html__( 'Width', 'xenial' ),
			'section' => 'xenial_footer_widgets',
			'choices' => xenial_get_container_widths(),
			'priority' => 10,
			'active_callback' => 'xenial_is_footer_widgets_enabled'
		)
	)
);



$wp_customize->add_setting( 
	'footer_widgets_columns',
	array(
		'default' => $xenial_customizer_defaults['footer_widgets_columns'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'footer_widgets_columns',
		array(
			'label' => esc_html__( 'Widget Columns', 'xenial' ),
			'section' => 'xenial_footer_widgets',
			'choices' => xenial_get_footer_widget_columns(),
			'priority' => 10,
			'active_callback' => 'xenial_is_footer_widgets_enabled'
		)
	)
);





$wp_customize->add_setting( 
	'footer_widget_2_columns_layout', 
	array(
		'sanitize_callback'		=> 'xenial_sanitize_select',
		'default'				=> $xenial_customizer_defaults['footer_widget_2_columns_layout'],
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_widget_2_columns_layout', 
		array( 
			'label' => esc_html__( '2 Columns Layout', 'xenial' ),
			'type'	=> 'select',
			'choices' => xenial_get_footer_widget_2_columns_variations(),
			'section' => 'xenial_footer_widgets',
			'active_callback' => 'xenial_is_footer_widgets_columns_2'
		)
	) 
);





$wp_customize->add_setting( 
	'footer_widget_3_columns_layout', 
	array(
		'sanitize_callback'		=> 'xenial_sanitize_select',
		'default'				=> $xenial_customizer_defaults['footer_widget_3_columns_layout'],
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Radio_Image_Control( 
		$wp_customize, 
		'footer_widget_3_columns_layout', 
		array( 
			'label' => esc_html__( '3 Columns Layout', 'xenial' ),
			'type'	=> 'select',
			'choices' => xenial_get_footer_widget_3_columns_variations(),
			'section' => 'xenial_footer_widgets',
			'active_callback' => 'xenial_is_footer_widgets_columns_3'
		)
	) 
);