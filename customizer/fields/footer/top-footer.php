<?php

xenial_section_field( 
	'xenial_top_footer',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'Footer Top', 'xenial' )
	)
);


xenial_radio_button_group_field(
	'footer_top_section_width',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'footer_top_section_width' )
	),
	false
);


xenial_divider_field( 
	'footer_top_section_fields_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_button_checkbox_field(
	'footer_top_section_device_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'footer_top_section_device_visibility' )
	)
);


xenial_divider_field( 
	'footer_top_section_fields_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_range_control_field(
	'footer_top_section_columns',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns', 'xenial' ),
		'input_attrs' => array( 
			'min' => 1, 
			'max' => 6, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'footer_top_section_columns' )
	)
);


xenial_divider_field( 
	'footer_top_section_fields_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_radio_button_group_field(
	'footer_top_section_2_columns_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Layout', 'xenial' ),
		'choices' => xenial_get_footer_2_columns_layout(),
		'item' => 'image',
		'columns' => 2,
		'defaults' => xenial_get_customize_default( 'footer_top_section_2_columns_layout' )
	),
	true
);


xenial_radio_button_group_field(
	'footer_top_section_3_columns_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Layout', 'xenial' ),
		'choices' => xenial_get_footer_3_columns_layout(),
		'item' => 'image',
		'columns' => 2,
		'defaults' => xenial_get_customize_default( 'footer_top_section_3_columns_layout' )
	),
	true
);


xenial_radio_button_group_field(
	'footer_top_section_4_columns_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Layout', 'xenial' ),
		'choices' => xenial_get_footer_4_columns_layout(),
		'item' => 'image',
		'columns' => 2,
		'defaults' => xenial_get_customize_default( 'footer_top_section_4_columns_layout' )
	),
	true
);


xenial_radio_button_group_field(
	'footer_top_section_5_columns_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Layout', 'xenial' ),
		'choices' => xenial_get_footer_5_columns_layout(),
		'item' => 'image',
		'columns' => 2,
		'defaults' => xenial_get_customize_default( 'footer_top_section_5_columns_layout' )
	),
	true
);


xenial_radio_button_group_field(
	'footer_top_section_6_columns_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Layout', 'xenial' ),
		'choices' => xenial_get_footer_6_columns_layout(),
		'item' => 'image',
		'columns' => 2,
		'defaults' => xenial_get_customize_default( 'footer_top_section_6_columns_layout' )
	),
	true
);


xenial_divider_field( 
	'footer_top_section_fields_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_range_control_field(
	'footer_top_section_columns_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Columns Spacing', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 500, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_top_section_columns_spacing' )
	)
);


xenial_divider_field( 
	'footer_top_section_fields_divider_5', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_range_control_field(
	'footer_top_section_top_bottom_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Top &amp; Bottom Spacing', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 500, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_top_section_top_bottom_spacing' )
	)
);


xenial_divider_field( 
	'footer_top_section_fields_divider_6', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_color_field(
	'footer_top_section_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_top_section_background_color')
	),
	true
);



xenial_divider_field( 
	'footer_top_section_fields_divider_7', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);

xenial_info_field(
	'footer_top_section_border_top_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Top', 'xenial' )
	)
);


xenial_select_field(
	'footer_top_section_border_top_style',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => xenial_get_customize_default( 'footer_top_section_border_top_style' )
	)
);


xenial_range_control_field(
	'footer_top_section_border_top_width',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Width', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'footer_top_section_border_top_width' )
	)
);


xenial_color_field(
	'footer_top_section_border_top_color',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_top_section_border_top_color')
	),
	true
);


xenial_divider_field( 
	'footer_top_section_fields_divider_8', 
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer', 
	)
);


xenial_info_field(
	'footer_top_section_border_bottom_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Bottom', 'xenial' )
	)
);


xenial_select_field(
	'footer_top_section_border_bottom_style',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => xenial_get_customize_default( 'footer_top_section_border_bottom_style' )
	)
);

xenial_range_control_field(
	'footer_top_section_border_bottom_width',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Width', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'footer_top_section_border_bottom_width' )
	)
);

xenial_color_field(
	'footer_top_section_border_bottom_color',
	array(
		'priority' => 10,
		'section' => 'xenial_top_footer',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_top_section_border_bottom_color')
	),
	true
);