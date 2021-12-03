<?php

xenial_section_field( 
	'xenial_bottom_header',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Header Bottom', 'xenial' )
	)
);


xenial_radio_button_group_field(
	'header_bottom_section_width',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'header_bottom_section_width' )
	),
	false
);


xenial_divider_field( 
	'header_bottom_section_fields_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header', 
	)
);


xenial_button_checkbox_field(
	'header_bottom_section_device_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'deskmiddle' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_bottom_section_device_visibility' )
	)
);


xenial_divider_field( 
	'header_bottom_section_fields_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header', 
	)
);


xenial_range_control_field(
	'header_bottom_section_min_width',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_bottom_section_min_width' )
	)
);


xenial_divider_field( 
	'header_bottom_section_fields_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header', 
	)
);


xenial_color_field(
	'header_bottom_section_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_bottom_section_background_color')
	),
	true
);


xenial_divider_field( 
	'header_bottom_section_fields_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header', 
	)
);


xenial_info_field(
	'header_bottom_section_border_middle_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Top', 'xenial' )
	)
);


xenial_select_field(
	'header_bottom_section_border_middle_style',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => xenial_get_customize_default( 'header_bottom_section_border_middle_style' )
	)
);


xenial_range_control_field(
	'header_bottom_section_border_middle_width',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Width', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'header_bottom_section_border_middle_width' )
	)
);


xenial_color_field(
	'header_bottom_section_border_middle_color',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_bottom_section_border_middle_color')
	),
	true
);


xenial_divider_field( 
	'header_bottom_section_fields_divider_5', 
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header', 
	)
);


xenial_info_field(
	'header_bottom_section_border_bottom_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Bottom', 'xenial' )
	)
);


xenial_select_field(
	'header_bottom_section_border_bottom_style',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => xenial_get_customize_default( 'header_bottom_section_border_bottom_style' )
	)
);

xenial_range_control_field(
	'header_bottom_section_border_bottom_width',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Width', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'header_bottom_section_border_bottom_width' )
	)
);

xenial_color_field(
	'header_bottom_section_border_bottom_color',
	array(
		'priority' => 10,
		'section' => 'xenial_bottom_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'header_bottom_section_border_bottom_color')
	),
	true
);