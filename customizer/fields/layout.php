<?php

xenial_section_field( 
	'xenial_layout',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Layout', 'xenial' )
	)
);

xenial_select_field(
	'site_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Site Layout', 'xenial' ),
		'choices' => apply_filters(
			'xenial_filter_site_layouts',
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'boxed' => esc_html__( 'Boxed', 'xenial' )
			)
		),
		'default' => xenial_get_customize_default( 'site_layout' )
	)
);


xenial_divider_field( 
	'xenial_layout_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_layout', 
	) 
);


xenial_range_control_field(
	'site_container_width',
	array(
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Site Container Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 700, 
			'max' => 1920, 
			'step' => 1
		),
		'default' => xenial_get_customize_default( 'site_container_width' )
	)
);


xenial_divider_field( 
	'xenial_layout_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_layout', 
	) 
);


xenial_range_control_field(
	'container_width',
	array(
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Container Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 700, 
			'max' => 1920, 
			'step' => 1
		),
		'default' => xenial_get_customize_default( 'container_width' )
	)
);


xenial_divider_field( 
	'xenial_layout_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_layout', 
	) 
);

xenial_range_control_field(
	'narrow_container_width',
	array(
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Narrow Container Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 700, 
			'max' => 1920, 
			'step' => 1
		),
		'default' => xenial_get_customize_default( 'narrow_container_width' )
	)
);


xenial_divider_field( 
	'xenial_layout_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_layout', 
	) 
);



xenial_range_control_field(
	'wide_container_side_spacings',
	array(
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Wide Container Side Spacings (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 200, 
			'step' => 1
		),
		'responsive' => true,
		'default' => xenial_get_customize_default( 'wide_container_side_spacings' )
	)
);