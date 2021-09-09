<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_header_search',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Search', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_search_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_search',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters(
				'xenial_filter_header_search_tab_1_controls',
				[
					
				]
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_search_tab_2_controls',
				[	
					
				]
			)
		]
	]
);



xenial_select_field(
	'header_search_type',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Display Option', 'xenial' ),
		'choices' => [
			'default' => esc_html__( 'Search Bar', 'xenial' ),
			'toggle' => esc_html__( 'Toggle Modal', 'xenial' )
		],
		'default' => $xenial_customizer_defaults['header_search_type']
	]
);