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
		'choices' => apply_filters(
			'xenial_filter_site_layouts',
			array(
				'default' => esc_html__( 'Default', 'xenial' ),
				'boxed' => esc_html__( 'Boxed', 'xenial' )
			)
		),
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
	'site_container_width',
	[
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Site Container Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 700, 'max' => 1920, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['site_container_width']
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
	'container_width',
	[
		'priority' => 10,
		'section' => 'xenial_layout',
		'label' => esc_html__( 'Container Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 700, 'max' => 1920, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['container_width']
	]
);


xenial_divider_field( 
	'xenial_layout_divider_3', 
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
	'xenial_layout_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_layout', 
	] 
);


// xenial_color_picker_field(
// 	'test_color_picker',
// 	array(
// 		'priority' => 10,
// 		'section' => 'xenial_layout',
// 		'label' => esc_html__( 'Color Picker Test', 'xenial' ),
// 		'is_responsive' => true,
// 		'allowed_fields' => array(
// 			'desktop' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			),
// 			'tablet' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			),
// 			'mobile' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			)
// 		),
// 		'colors' => array(
// 			'desktop' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			),
// 			'tablet' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			),
// 			'mobile' => array(
// 				'initial' => array(
// 					'display' => true,
// 					'default' => ''
// 				),
// 				'hover' => array(
// 					'display' => true,
// 					'default' => ''
// 				)
// 			)
// 		),
// 		// 'colors' => array(
// 		// 	'initial' => array(
// 		// 		'display' => true,
// 		// 		'default' => ''
// 		// 	),
// 		// 	'hover' => array(
// 		// 		'display' => true,
// 		// 		'default' => ''
// 		// 	)
// 		// )
// 		'default' => ''
// 	)
// );


xenial_section_link_field(
	'text_section_link',
	array(
		'section' => 'xenial_layout',
		'section_link' => 'xenial_theme_elements',
		'button_label' => 'Test Button',
		'enable_switch' => false,
		'default' => ''
	)
);



// xenial_rgba_color_picker_field(
// 	'test_rgba_color_picker',
// 	array(
// 		'priority' => 10,
// 		'section' => 'colors',
// 		'label' => esc_html__( 'RGBA Color Picker Test', 'xenial' ),
// 		'is_responsive' => false,
// 		'default' => '{"link":"","hover":""}'
// 	)
// );


// xenial_rgba_color_picker_field(
// 	'test_responsive_rgba_color_picker',
// 	array(
// 		'priority' => 10,
// 		'section' => 'colors',
// 		'label' => esc_html__( 'RGBA Responsive Color Picker Test', 'xenial' ),
// 		'is_responsive' => true,
// 		'default' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}'
// 	)
// );