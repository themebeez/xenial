<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_layout',
	[
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Layout', 'xenial' )
	]
);

xenial_select_field(
	'site_layout',
	[
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Site Layout', 'xenial' ),
		'choices' => xenial_get_site_layouts(),
		'default' => $xenial_customizer_defaults['site_layout']
	]
);

xenial_divider_field( 
	'xenial_layout_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_layout', 
	] 
);


xenial_range_control_field(
	'container_width',
	[
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Container Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 700, 'max' => 1920, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['container_width'],
		'active_callback' => 'xenial_is_fullwidth_stretched_site_layout_disabled'
	]
);


xenial_divider_field( 
	'xenial_layout_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_layout', 
	] 
);

xenial_range_control_field(
	'narrow_container_width',
	[
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Narrow Container Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 700, 'max' => 1920, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['narrow_container_width']
	]
);


xenial_divider_field( 
	'xenial_layout_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_layout', 
	] 
);