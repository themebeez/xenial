<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->add_section( 
	'xenial_breadcrumbs', 
	array(
		'priority'		=> 10,
		'title'			=> esc_html__( 'Breadcrumbs', 'xenial' ),
		'panel'			=> 'xenial_site_pages'
	) 
);


$wp_customize->add_setting( 
	'enable_breadcrumbs',
	array(
		'default' => $xenial_customizer_defaults['enable_breadcrumbs'],
		'sanitize_callback' => 'wp_validate_boolean'
	)
);

$wp_customize->add_control( 
	new Xenial_Customize_Toggle_Switch_Control( 
		$wp_customize, 
		'enable_breadcrumbs',
		array(
			'label' => esc_html__( 'Enable Breadcrumbs', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'type' => 'ios'
		)
	) 
);




$wp_customize->add_setting( 
	'breadcrumbs_source',
	array(
		'default' => $xenial_customizer_defaults['breadcrumbs_source'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_source',
		array(
			'label' => esc_html__( 'Source', 'xenial' ),
			'description' => sprintf( esc_html__( 'You can use theme&rsquo;s default breadcrumb or use any one of the plugin for breadcrumb, %sBreadcrumb NavXT%s or %sYoast SEO%s or %sRank Math%s', 'xenial' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/seo-by-rank-math/" target="_blank">', '</a>' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_breadcrumb_sources(),
			'active_callback' => 'xenial_is_breadcrumb_enabled'
		) 
	)
);




$wp_customize->add_setting(
	'breadcrumbs_display_pages',
	array(
		'default'           => $xenial_customizer_defaults['breadcrumbs_display_pages'],
		'sanitize_callback' => 'xenial_sanitize_multi_checkboxes_value'
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Sortable_Checkbox_Control(
		$wp_customize,
		'breadcrumbs_display_pages',
		array(
			'label'   => esc_html__( 'Enable On', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'input_attrs' => array(
				'sortable' => false,
				'fullwidth' => true,
			),
			'choices' => xenial_get_general_pages(),
			'priority' => 10,
			'active_callback' => 'xenial_is_breadcrumb_enabled'
		)
	)
);





$wp_customize->add_setting( 
	'breadcrumbs_position',
	array(
		'default' => $xenial_customizer_defaults['breadcrumbs_position'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_position',
		array(
			'label' => esc_html__( 'Position', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_get_breadcrumb_positions(),
			'active_callback' => 'xenial_is_breadcrumb_enabled'
		) 
	)
);





$wp_customize->add_setting( 
	'breadcrumbs_position_inside_page_header',
	array(
		'default' => $xenial_customizer_defaults['breadcrumbs_position_inside_page_header'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_position_inside_page_header',
		array(
			'label' => esc_html__( 'Position Inside Page Header', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_get_breadcrumb_page_header_positions(),
			'active_callback' => 'xenial_is_breadcrumb_placed_inside_page_header'
		) 
	)
);





$wp_customize->add_setting( 
	'breadcrumbs_width',
	array(
		'default' => $xenial_customizer_defaults['breadcrumbs_width'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control(
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_width',
		array(
			'label' => esc_html__( 'Width', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_get_container_widths(),
			'active_callback' => 'xenial_is_breadcrumb_position_placed_in_separate_container'
		) 
	)
);





$wp_customize->add_setting( 
	'breadcrumbs_alignment',
	array(
		'default' => $xenial_customizer_defaults['breadcrumbs_alignment'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumbs_alignment',
		array(
			'label' => esc_html__( 'Alignment', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_get_alignments(),
			'active_callback' => 'xenial_is_breadcrumb_position_placed_in_separate_container'
		) 
	)
);





$wp_customize->add_setting( 
	'breadcrumb_visibility',
	array(
		'default' => $xenial_customizer_defaults['breadcrumb_visibility'],
		'sanitize_callback' => 'xenial_sanitize_select'
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_SlimSelect_Control( 
		$wp_customize,
		'breadcrumb_visibility',
		array(
			'label' => esc_html__( 'Device Visibility', 'xenial' ),
			'section' => 'xenial_breadcrumbs',
			'choices' => xenial_get_device_visibility(),
			'priority' => 10,
			'active_callback' => 'xenial_is_breadcrumb_enabled'
		) 
	)
);