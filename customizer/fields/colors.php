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




xenial_color_field(
	'primary_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Primary Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_color']
	],
	false
);



xenial_color_field(
	'secondary_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Secondary Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['secondary_color']
	],
	false
);


xenial_color_field(
	'text_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['text_color']
	],
	false
);


xenial_color_field(
	'headings_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Headings Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['headings_color']
	],
	false
);



xenial_color_field(
	'link_color',
	[
		'priority' => 10,
		'section' => 'xenial_colors',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['link_color']
	],
	false
);


