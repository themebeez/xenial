<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_header_button',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Button', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_button_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_header_button_tab_1_controls', 
	        	[
	        		'header_button_title' => '',
	        		'header_button_link' => '',
	        		'header_button_link_open_in_new_tab' => '',
	        		'header_button_visibility' => '',
	        		'header_button_alignment' => '',

	        		'xenial_header_button_general_divider_1' => '',
	        		'xenial_header_button_general_divider_2' => '',
	        		'xenial_header_button_general_divider_3' => '',
	        		'xenial_header_button_general_divider_4' => ''
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_button_tab_2_controls', 
	        	[
	        		'header_button_padding' => '',
	        		'header_button_font_color' => '',
	        		'header_button_hover_font_color' => '',
	        		'header_button_font_size' => '',
	        		'header_button_line_height' => '',
	        		'header_button_font_weight' => '',
	        		'header_button_font_style' => '',
	        		'header_button_text_transform' => '',
	        		'header_button_background_color' => '',
	        		'header_button_hover_background_color' => '',
	        		'header_button_border_radius' => '',
	        		'header_button_border_style' => '',
	        		'header_button_border_width' => '',
	        		'header_button_border_color' => '',
	        		'header_button_hover_border_color' => '',

	        		'header_button_typo' => '',
	        		'header_button_border' => '',
	        		'header_button_hover_state_color' => '',
	        		'header_button_default_state_color' => '',

	        		'xenial_header_button_style_divider_1' => '',
	        		'xenial_header_button_style_divider_2' => '',
	        		'xenial_header_button_style_divider_3' => '',
	        		'xenial_header_button_style_divider_4' => '',
	        	] 
	        )
		]
	]
);


xenial_text_field(
	'header_button_title',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_title']
	]
);


xenial_divider_field( 
	'xenial_header_button_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_url_field(
	'header_button_link',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Link', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_link']
	]
);


xenial_switch_field(
	'header_button_link_open_in_new_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Open in New Tab', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_link_open_in_new_tab']
	]
);


xenial_divider_field( 
	'xenial_header_button_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_button_checkbox_field(
	'header_button_visibility',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Hide On Devices', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		],
		'default' => $xenial_customizer_defaults['header_button_visibility']
	]
);

xenial_divider_field( 
	'xenial_header_button_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_radio_button_group_field(
	'header_button_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_button_alignment']
	],
	true
);

xenial_divider_field( 
	'xenial_header_button_general_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_box_dimension_field(
	'header_button_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_button_padding']
	],
	true
);


xenial_divider_field( 
	'xenial_header_button_style_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_info_field(
	'header_button_typo',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);



xenial_range_control_field(
	'header_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_button_font_size']
	]
);

xenial_range_control_field(
	'header_button_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_button_line_height']
	]
);


xenial_select_field(
	'header_button_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['header_button_font_weight']
	]
);


xenial_radio_button_group_field(
	'header_button_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['header_button_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'header_button_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['header_button_text_transform']
	],
	false
);

xenial_divider_field( 
	'xenial_header_button_style_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);

xenial_info_field(
	'header_button_border',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'header_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_button_border_style']
	]
);


xenial_box_dimension_field(
	'header_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_button_border_width']
	],
	false
);


xenial_range_control_field(
	'header_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_button_border_radius']
	]
);


xenial_divider_field( 
	'xenial_header_button_style_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_info_field(
	'header_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'header_button_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_font_color']
	],
	false
);


xenial_color_field(
	'header_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_background_color']
	],
	true
);


xenial_color_field(
	'header_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_border_color']
	],
	true
);


xenial_divider_field( 
	'xenial_header_button_style_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_button', 
	] 
);


xenial_info_field(
	'header_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'header_button_hover_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_hover_font_color']
	],
	false
);


xenial_color_field(
	'header_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'header_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_button',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_button_hover_border_color']
	],
	true
);