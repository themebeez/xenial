<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_colors',
	[
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Colors', 'xenial' )
	]
);

xenial_info_field(
	'theme_colors',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Theme Colors', 'xenial' )
	]
);


xenial_color_field(
	'primary_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Primary', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_color']
	],
	false
);



xenial_color_field(
	'secondary_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Secondary', 'xenial' ),
		'default' => $xenial_customizer_defaults['secondary_color']
	],
	false
);

xenial_divider_field( 
	'xenial_colors_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_colors', 
	] 
);


xenial_info_field(
	'text_colors',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Text Colors', 'xenial' )
	]
);


xenial_color_field(
	'text_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'General Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['text_color']
	],
	false
);


xenial_color_field(
	'headings_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Headings(H1-H6)', 'xenial' ),
		'default' => $xenial_customizer_defaults['headings_color']
	],
	false
);



xenial_color_field(
	'link_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Link', 'xenial' ),
		'default' => $xenial_customizer_defaults['link_color']
	],
	false
);


xenial_divider_field( 
	'xenial_colors_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_colors', 
	] 
);


xenial_info_field(
	'border_colors',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Border Colors', 'xenial' )
	]
);


xenial_color_field(
	'border_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Border', 'xenial' ),
		'default' => $xenial_customizer_defaults['border_color']
	],
	true
);


xenial_color_field(
	'input_fields_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Form Input Fields', 'xenial' ),
		'default' => $xenial_customizer_defaults['input_fields_border_color']
	],
	true
);


xenial_divider_field( 
	'xenial_colors_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_colors', 
	] 
);