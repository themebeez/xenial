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
					'header_html' => [],
					'header_html_alignment_wrapper' => [],
					'header_html_alignment_desktop' => [],
					'header_html_alignment_tablet' => [],
					'header_html_alignment_mobile' => [],
					'header_html_visibility' => []
				]
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_html_tab_2_controls',
				[	
					'header_html_alignment_color_wrapper' => [],
					'header_html_text_color' => [],
					'header_html_link_color' => [],
		            'header_html_link_hover_color' => [],
		            'header_html_alignment_typo_wrapper' => [],
		            'header_html_text_font_size' => [],
		            'header_html_text_line_height' => [],
		            'header_html_text_font_weight' => [],
		            'header_html_text_font_style' => [],
		            'header_html_text_text_transform' => [],
				]
			)
		]
	]
);


xenial_tinymce_editor_field(
	'header_html',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Content', 'xenial' ),
		'input_attrs' => [
			'toolbar1' => 'formatselect bold italic underline strikethrough bullist numlist alignleft aligncenter alignright link unlink',
			'toolbar2' => '',
			'mediaButtons' => false
		],
		'default' => $xenial_customizer_defaults['header_html']
	]
);


xenial_button_checkbox_field(
	'header_html_visibility',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		],
		'default' => $xenial_customizer_defaults['header_html_visibility']
	]
);


xenial_controls_wrapper_field(
	'header_html_alignment_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Alignment', 'xenial' ),
	    'class' => 'header-html-alignment',
	    'controls_to_wrap' => 3,
		'expanded' => false
	],
	true
);


xenial_button_group_field(
	'header_html_alignment_desktop',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Desktop', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_html_alignment_desktop']
	]
);


xenial_button_group_field(
	'header_html_alignment_tablet',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Tablet', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_html_alignment_tablet']
	]
);


xenial_button_group_field(
	'header_html_alignment_mobile',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Mobile', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_html_alignment_mobile']
	]
);



xenial_controls_wrapper_field(
	'header_html_alignment_color_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Color', 'xenial' )
	],
	false
);


xenial_color_field(
	'header_html_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text Initial', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_text_color']
	],
	false
);


xenial_color_field(
	'header_html_link_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Link Initial', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_link_color']
	],
	false
);


xenial_color_field(
	'header_html_link_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Link Hover', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_html_link_hover_color']
	],
	false
);



xenial_controls_wrapper_field(
	'header_html_alignment_typo_wrapper',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Typography', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'header_html_text_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1],
		'defaults' => $xenial_customizer_defaults['header_html_text_font_size']
	],
	true
);


xenial_range_control_field(
	'header_html_text_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 5, 'step' => 0.5],
		'defaults' => $xenial_customizer_defaults['header_html_text_font_size']
	],
	true
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


xenial_select_field(
	'header_html_text_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'choices' => xenial_get_font_styles(),
		'default' => $xenial_customizer_defaults['header_html_text_font_style']
	]
);


xenial_select_field(
	'header_html_text_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'choices' => xenial_get_text_transforms(),
		'default' => $xenial_customizer_defaults['header_html_text_text_transform']
	]
);