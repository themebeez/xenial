<?php

xenial_section_field( 
	'xenial_top_header',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Header Top', 'xenial' )
	)
);


xenial_radio_button_group_field(
	'header_top_section_width',
	array(
		'priority' => 10,
		'section' => 'xenial_top_header',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'header_top_section_width' )
	),
	false
);


xenial_divider_field( 
	'header_top_section_fields_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_header', 
	)
);


xenial_button_checkbox_field(
	'header_top_section_device_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_top_header',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_top_section_device_visibility' )
	)
);


xenial_divider_field( 
	'header_top_section_fields_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_header', 
	)
);


xenial_range_control_field(
	'header_top_section_min_width',
	array(
		'priority' => 10,
		'section' => 'xenial_top_header',
		'label' => esc_html__( 'Height', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'header_top_section_min_width' )
	)
);


xenial_divider_field( 
	'header_top_section_fields_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_header', 
	)
);

xenial_color_picker_field(
	'header_top_section_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_top_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_default( 'header_top_section_background_color' )
	)
);


xenial_divider_field( 
	'header_top_section_fields_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_header', 
	)
);


xenial_box_border_field(
	'header_top_section_border',
	array(
		'section' => 'xenial_top_header',
		'label' => esc_html__( 'Top Header Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'bottom' ),
				'border_colors' => array( 'top', 'bottom' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'bottom' ),
				'border_colors' => array( 'top', 'bottom' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'bottom' ),
				'border_colors' => array( 'top', 'bottom' )
			)
		),
		'default' => xenial_get_customize_default( 'header_top_section_border' )
	)
);