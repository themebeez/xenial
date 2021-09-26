<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_sidebar', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Sidebar', 'xenial' )
	) 
);


$wp_customize->add_setting( 
	'sidebar_default_position',
	array(
		'default' => $xenial_customizer_defaults['sidebar_default_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_default_position',
		array(
			'label' => esc_html__( 'Default Position', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_default_sidebar_positions(),
			'priority' => 10,
		) 
	)
);

$wp_customize->add_setting( 
	'sidebar_post_single_position',
	array(
		'default' => $xenial_customizer_defaults['sidebar_post_single_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_post_single_position',
		array(
			'label' => esc_html__( 'Post Single', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


$wp_customize->add_setting( 
	'sidebar_page_single_position',
	array(
		'default' => $xenial_customizer_defaults['sidebar_page_single_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_page_single_position',
		array(
			'label' => esc_html__( 'Page Single', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


$wp_customize->add_setting( 
	'sidebar_archive_position',
	array(
		'default' => $xenial_customizer_defaults['sidebar_archive_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_archive_position',
		array(
			'label' => esc_html__( 'Archive / Category / Tag / Search', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_sidebar_positions(),
			'priority' => 10,
		) 
	)
);


if ( class_exists( 'WooCommerce' ) ) {

	$wp_customize->add_setting( 
		'sidebar_woocommerce_archive_position',
		array(
			'default' => $xenial_customizer_defaults['sidebar_woocommerce_archive_position'],
			'sanitize_callback' => 'xenial_sanitize_select'
		) 
	);

	$wp_customize->add_control( 
		new Xenial_Customize_SlimSelect_Control( 
			$wp_customize,
			'sidebar_woocommerce_archive_position',
			array( 
				'label' => esc_html__( 'WooCommerce Archive', 'xenial' ),
				'section' => 'xenial_sidebar',
				'choices' => xenial_get_sidebar_positions(),
				'priority' => 10,
			) 
		)
	);


	$wp_customize->add_setting( 
		'sidebar_woocommerce_product_position',
		array(
			'default' => $xenial_customizer_defaults['sidebar_woocommerce_product_position'],
			'sanitize_callback' => 'xenial_sanitize_select'
		) 
	);

	$wp_customize->add_control(
		new Xenial_Customize_SlimSelect_Control( 
			$wp_customize,
			'sidebar_woocommerce_product_position',
			array( 
				'label' => esc_html__( 'WooCommerce Product Single', 'xenial' ),
				'section' => 'xenial_sidebar',
				'choices' => xenial_get_sidebar_positions(),
				'priority' => 10,
			) 
		)
	);
}

$wp_customize->add_setting(
	'sidebar_info_1',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'sidebar_info_1',
		array(
			'label' => esc_html__( 'Options', 'xenial' ),
			'section' => 'xenial_sidebar',
			'priority' => 10,
		)
	)
);

$wp_customize->add_setting( 
	'sidebar_width', 
	array(
		'default' => $xenial_customizer_defaults['sidebar_width'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'sidebar_width', 
		array(
			'label' 			=> esc_html__( 'Sidebar Width (%)', 'xenial' ),
			'section'  			=> 'xenial_sidebar',
            'input_attrs' 		=> array(
                'min'		=> 0,
                'max' 		=> 40,
                'step' 		=> 1,
            ),
		) 
	) 
);



$wp_customize->add_setting( 
	'sidebar_widget_style',
	array(
		'default' => $xenial_customizer_defaults['sidebar_widget_style'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_widget_style',
		array(
			'label' => esc_html__( 'Widget Style', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_sidebar_styles(),
			'priority' => 10,
		) 
	)
);



$wp_customize->add_setting( 
	'enable_sticky_sidebar', 
	array(
		'sanitize_callback' => 'wp_validate_boolean',
		'default' => $xenial_customizer_defaults['enable_sticky_sidebar'],
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize,
		'enable_sticky_sidebar', 
		array(
			'label' => esc_html__( 'Set Sidebar Sticky', 'xenial' ),
			'section' => 'xenial_sidebar',
			'type' => 'ios',
		) 
	) 
);



$wp_customize->add_setting( 
	'sidebar_responsive_position',
	array(
		'default' => $xenial_customizer_defaults['sidebar_responsive_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'sidebar_responsive_position',
		array(
			'label' => esc_html__( 'Responsive Sidebar Position', 'xenial' ),
			'section' => 'xenial_sidebar',
			'choices' => xenial_get_responsive_sidebar_positions(),
			'priority' => 10,
		) 
	)
);