<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_header_html',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'HTML', 'xenial' )
	]
);

xenial_tab_field(
	'xenial_header_html_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters(
				'xenial_filter_header_html_tab_1_controls',
				[
					'header_html_content' => [],
					'header_html_alignment' => [],
					'header_html_visibility' => [],

					'header_html_general_divider_1' => '',
					'header_html_general_divider_2' => '',
					'header_html_general_divider_3' => '',
				]
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_html_tab_2_controls',
				[	
					'header_html_typo' => [],
		            'header_html_text_font_size' => [],
		            'header_html_text_line_height' => [],
		            'header_html_text_font_weight' => [],
		            'header_html_text_font_style' => [],
		            'header_html_text_text_transform' => [],

		            'header_html_default_state_color' => '',
		            'header_html_text_color' => '',
					'header_html_link_color' => '',

					'header_html_hover_state_color' => '',
					'header_html_link_hover_color' => [],

					'header_html_style_divider_1' => '',
					'header_html_style_divider_2' => ''
				]
			)
		]
	]
);


xenial_tinymce_editor_field(
	'header_html_content',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Content', 'xenial' ),
		'input_attrs' => [
			'toolbar1' => 'formatselect underline strikethrough bullist numlist alignleft aligncenter alignright link unlink',
			'toolbar2' => '',
			'mediaButtons' => false
		],
		'default' => $xenial_customizer_defaults['header_html_content']
	]
);


xenial_divider_field( 
	'header_html_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	] 
);


xenial_button_checkbox_field(
	'header_html_visibility',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Hide on Devices', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		],
		'default' => $xenial_customizer_defaults['header_html_visibility']
	]
);


xenial_divider_field( 
	'header_html_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	] 
);


xenial_radio_button_group_field(
	'header_html_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_html_alignment']
	],
	true
);


xenial_divider_field( 
	'header_html_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	] 
);





xenial_info_field(
	'header_html_typo',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'header_html_text_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_html_text_font_size']
	]
);


xenial_range_control_field(
	'header_html_text_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 5, 'step' => 0.5, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_html_text_font_size']
	]
);


xenial_select_field(
	'header_html_text_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['header_html_text_font_weight']
	]
);


xenial_radio_button_group_field(
	'header_html_text_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['header_html_text_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'header_html_text_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => xenial_get_text_transforms(),
		'default' => $xenial_customizer_defaults['header_html_text_text_transform']
	],
	false
);


xenial_divider_field( 
	'header_html_style_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	] 
);


xenial_info_field(
	'header_html_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'header_html_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_text_color']
	],
	false
);


xenial_color_field(
	'header_html_link_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_link_color']
	],
	false
);


xenial_divider_field( 
	'header_html_style_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	] 
);


xenial_info_field(
	'header_html_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'header_html_link_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_link_hover_color']
	],
	false
);