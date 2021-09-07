<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_layout',
	array(
		'title' => esc_html__( 'Layout', 'xenial' ),
		'panel' => 'xenial_general_panel'
	)
);


$wp_customize->add_setting( 
	'site_layout',
	array(
		'default' => $xenial_customizer_defaults['site_layout'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control(
		$wp_customize, 
		'site_layout',
		array(
			'label' => esc_html__( 'Site Layout', 'xenial' ),
			'section' => 'xenial_layout',
			'choices' => xenial_get_site_layouts()
		) 
	)
);


$wp_customize->add_setting( 
	'container_width', 
	array(
		'default' => $xenial_customizer_defaults['container_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'container_width', 
		array(
			'label' 			=> esc_html__( 'Container Width (px)', 'xenial' ),
			'section'  			=> 'xenial_layout',
            'input_attrs' 		=> array(
                'min'		=> 500,
                'max' 		=> 1920,
                'step' 		=> 1,
            ),
            'active_callback' => 'xenial_is_fullwidth_stretched_site_layout_disabled'
		) 
	) 
);