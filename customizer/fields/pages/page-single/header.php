<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_controls_wrapper_field(
	'page_single_header',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Page Header', 'xenial' ),
		'class' => esc_attr( 'page-single-header' ),
		'controls_to_wrap' => 4,
	],
	false
);

xenial_radio_button_group_field(
	'page_single_header_width',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => $xenial_customizer_defaults['page_single_header_width']
	],
	false
);


xenial_divider_field( 
	'page_single_header_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);


xenial_select_field(
	'page_single_title_tag',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Heading Tag', 'xenial' ),
		'choices' => xenial_get_heading_tags(),
		'default' => $xenial_customizer_defaults['page_single_title_tag']
	]
);


xenial_divider_field( 
	'page_single_header_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);

xenial_switch_field(
	'page_single_display_breadcrumbs',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Display Breadcrumbs', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_display_breadcrumbs']
	]
);


xenial_divider_field( 
	'page_single_header_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);



xenial_controls_wrapper_field(
	'page_single_header_styles',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Page Header', 'xenial' ),
		'class' => esc_attr( 'archive-page-header-styles' ),
		'controls_to_wrap' => 4,
	],
	false
);


xenial_color_field(
	'page_single_header_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_header_background_color']
	],
	true
);


xenial_divider_field( 
	'page_single_header_styles_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);


xenial_info_field(
	'page_single_header_title_typography',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Title Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'page_single_title_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['page_single_title_font_size']
	]
);

xenial_range_control_field(
	'page_single_title_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['page_single_title_line_height']
	]
);


xenial_range_control_field(
	'page_single_title_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['page_single_title_letter_spacing']
	]
);


xenial_select_field(
	'page_single_title_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['page_single_title_font_weight']
	]
);


xenial_radio_button_group_field(
	'page_single_title_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['page_single_title_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'page_single_title_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['page_single_title_text_transform']
	],
	false
);



xenial_info_field(
	'page_single_header_title_color_header',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Title Color', 'xenial' )
	]
);


xenial_color_field(
	'page_single_header_title_color',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_header_title_color']
	],
	false
);

xenial_divider_field( 
	'page_single_header_styles_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_page_single', 
	] 
);


xenial_info_field(
	'page_single_header_breadcrumb_styles',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' )
	]
);


xenial_color_field(
	'page_single_header_breadcrumb_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Text / Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_header_breadcrumb_text_color']
	],
	false
);

xenial_color_field(
	'page_single_header_breadcrumb_link_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_page_single',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['page_single_header_breadcrumb_link_hover_color']
	],
	false
);