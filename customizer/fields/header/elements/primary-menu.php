<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_header_primary_menu',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Primary Menu', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_primary_menu_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_header_primary_menu_tab_1_controls', 
	        	[
	        		'primary_menu' => '',
	        		
	        		'primary_desktop_menu' => '',
	        		'header_desktop_top_level_menu' => '',
	        		'primary_desktop_top_level_menu_item_spacing' => '',

	        		'primary_menu_general_divider_1' => '',
	        		'header_desktop_dropdown_menu' => '',
	        		'primary_menu_dropdown_items_wrapper' => '',
	        		'primary_menu_dropdown_items_divider_width' => '',
	        		'primary_menu_dropdown_width' => ''
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_primary_menu_tab_2_controls', 
	        	[	
	        		'primary_desktop_menu_styles' => '',

	        		'primary_desktop_top_level_menu_styles' => '',
	        		'primary_menu_top_level_items_padding' => '',
	        		'primary_menu_top_level_divider_1' => '',

	        		'primary_desktop_top_level_menu_typo' => '',
	        		'primary_menu_top_level_items_font_size' => '',
		            'primary_menu_top_level_items_font_weight' => '',
		            'primary_menu_top_level_items_line_height' => '',
		            'primary_menu_top_level_items_font_style' => '',
		            'primary_menu_top_level_items_text_transform' => '',
		            'primary_menu_top_level_divider_2' => '',

		            'primary_desktop_top_level_menu_border' => '',
		            'primary_menu_top_level_items_border_style' => '',
		            'primary_menu_top_level_items_border_width' => '',
		            'primary_menu_top_level_items_border_radius' => '',
		            'primary_menu_top_level_divider_3' => '',

		            'primary_desktop_top_level_menu_default_state_color' => '',
		            'primary_menu_top_level_items_color' => '',
		            'primary_menu_top_level_items_background_color' => '',
		            'primary_menu_top_level_items_border_color' => '',
		            'primary_menu_top_level_divider_4' => '',

		            'primary_desktop_top_level_menu_hover_state_color' => '',
		            'primary_menu_top_level_items_hover_color' => '',
		            'primary_menu_top_level_items_hover_background_color' => '',
		            'primary_menu_top_level_items_hover_border_color' => '',
		            'primary_menu_top_level_divider_5' => '',

		            'primary_desktop_top_level_menu_active_state_color' => '',
		            'primary_menu_top_level_items_active_color' => '',
		            'primary_menu_top_level_items_active_background_color' => '',
		            'primary_menu_top_level_items_active_border_color' => '',


		            'primary_menu_dropdown_styles' => '',
		            'primary_menu_dropdown_top_offset' => '',
		            'primary_menu_dropdown_divider_1' => '',


		            'primary_menu_dropdown_padding' => '',
		            'primary_menu_dropdown_divider_2' => '',

		            'primary_menu_dropdown_border' => '',
		            'primary_menu_dropdown_border_style' => '',
		            'primary_menu_dropdown_border_width' => '',
		            'primary_menu_dropdown_border_radius' => '',
		            'primary_menu_dropdown_border_color' => '',
		            'primary_menu_dropdown_divider_3' => '',


		            'primary_menu_dropdown_items_padding' => '',
		            'primary_menu_dropdown_divider_4' => '',


		            'primary_menu_dropdown_items_typo' => '',
		            'primary_menu_dropdown_items_font_size' => '',
		            'primary_menu_dropdown_items_font_weight' => '',
		            'primary_menu_dropdown_items_line_height' => '',
		            'primary_menu_dropdown_items_font_style' => '',
		            'primary_menu_dropdown_items_text_transform' => '',
		            'primary_menu_dropdown_divider_5' => '',

		            'primary_menu_dropdown_items_default_state_color' => '',
		            'primary_menu_dropdown_items_divider_color' => '', 
		            'primary_menu_dropdown_items_color' => '',
		            'primary_menu_dropdown_items_background_color' => '',
		            'primary_menu_dropdown_divider_6' => '',

		            'primary_menu_dropdown_items_hover_state_color' => '',
		            'primary_menu_dropdown_items_hover_color' => '',
		            'primary_menu_dropdown_items_hover_background_color' => '',
		            'primary_menu_dropdown_divider_7' => '',

		            'primary_menu_dropdown_items_active_state_color' => '',
		            'primary_menu_dropdown_items_active_color' => '',
		            'primary_menu_dropdown_items_active_background_color' => '',
	        	] 
	        )
		]
	]
);

xenial_select_field(
	'primary_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Primary Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => $xenial_customizer_defaults['primary_menu']
	]
);

xenial_controls_wrapper_field(
	'primary_desktop_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Desktop Menu', 'xenial' )
	],
	false
);


xenial_info_field(
	'header_desktop_top_level_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Top Level Menu', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_desktop_top_level_menu_item_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_desktop_top_level_menu_item_spacing']
	]
);


xenial_divider_field( 
	'primary_menu_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_info_field(
	'header_desktop_dropdown_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Menu', 'xenial' )
	]
);











xenial_controls_wrapper_field(
	'primary_desktop_menu_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Desktop Menu', 'xenial' )
	],
	false
);


xenial_controls_wrapper_field(
	'primary_desktop_top_level_menu_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Top Level Menu', 'xenial' ),
		'class' => 'no-margin'
	],
	false
);


xenial_box_dimension_field(
	'primary_menu_top_level_items_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_top_level_items_padding']
	],
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_typo',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_menu_top_level_items_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_size']
	]
);

xenial_range_control_field(
	'primary_menu_top_level_items_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_line_height']
	]
);


xenial_select_field(
	'primary_menu_top_level_items_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_weight']
	]
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_text_transform']
	],
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_border',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'primary_menu_top_level_items_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_style']
	]
);


xenial_box_dimension_field(
	'primary_menu_top_level_items_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_top_level_items_border_width']
	],
	false
);


xenial_range_control_field(
	'primary_menu_top_level_items_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']
	]
);


xenial_divider_field( 
	'primary_menu_top_level_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_top_level_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_border_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_top_level_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_info_field(
	'primary_desktop_top_level_menu_active_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Active State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_active_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_active_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_active_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_border_color']
	],
	true
);






xenial_controls_wrapper_field(
	'primary_menu_dropdown_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Menu', 'xenial' )
	],
	false
);

