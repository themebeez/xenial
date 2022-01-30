<?php

xenial_section_field( 
	'xenial_colors',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Colors', 'xenial' )
	)
);

xenial_info_field(
	'theme_colors',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Theme Colors', 'xenial' )
	)
);


xenial_color_picker_field(
	'primary_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Primary Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'primary_color' )
	)
);

xenial_color_picker_field(
	'secondary_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Secondary Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'secondary_color' )
	)
);

xenial_divider_field( 
	'xenial_colors_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_colors', 
	) 
);


xenial_info_field(
	'text_colors',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Text Colors', 'xenial' )
	)
);


xenial_color_picker_field(
	'text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'text_color' )
	)
);


xenial_color_picker_field(
	'headings_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Headings(H1-H6) Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'headings_color' )
	)
);


xenial_color_picker_field(
	'link_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Links Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'link_color' )
	)
);


xenial_divider_field( 
	'xenial_colors_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_colors', 
	) 
);


xenial_info_field(
	'border_colors',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Border Colors', 'xenial' )
	)
);

xenial_color_picker_field(
	'border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'General Border Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'border_color' )
	)
);


xenial_color_picker_field(
	'input_fields_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Form Input Fields Border Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'input_fields_border_color' )
	)
);


xenial_divider_field( 
	'xenial_colors_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_colors', 
	) 
);