<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_buttons',
	[
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Buttons', 'xenial' )
	]
);


xenial_controls_wrapper_field(
	'general_button',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'General Button', 'xenial' )
	],
	false
);


xenial_box_dimension_field(
	'btn_padding',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['btn_padding']
	],
	false
);


xenial_divider_field( 
	'general_button_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);


xenial_info_field(
	'general_button_border',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'btn_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['btn_border_style']
	]
);


xenial_box_dimension_field(
	'btn_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['btn_border_width']
	]
);


xenial_range_control_field(
	'btn_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['btn_border_radius']
	]
);


xenial_divider_field( 
	'general_button_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);

xenial_info_field(
	'general_button_default_state_header',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'btn_txt_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_txt_color']
	],
	false
);


xenial_color_field(
	'btn_bg_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Background', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_bg_color']
	],
	true
);

xenial_color_field(
	'btn_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_border_color']
	],
	true
);


xenial_divider_field( 
	'general_button_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);

xenial_info_field(
	'general_button_hover_state_header',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'btn_txt_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_txt_hover_color']
	],
	false
);


xenial_color_field(
	'btn_bg_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Background', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_bg_hover_color']
	],
	true
);

xenial_color_field(
	'btn_border_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' ),
		'default' => $xenial_customizer_defaults['btn_border_hover_color']
	],
	true
);






xenial_controls_wrapper_field(
	'text_button',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text Button', 'xenial' )
	],
	false
);


xenial_box_dimension_field(
	'txt_button_padding',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['txt_button_padding']
	],
	false
);


xenial_divider_field( 
	'text_button_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);


xenial_info_field(
	'text_button_border',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'txt_button_style',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['txt_button_style']
	]
);


xenial_box_dimension_field(
	'txt_btn_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['txt_btn_border_width']
	]
);


xenial_range_control_field(
	'txt_btn_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['txt_btn_border_radius']
	]
);


xenial_divider_field( 
	'text_button_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);

xenial_info_field(
	'text_button_default_state_header',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'txt_btn_txt_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_txt_color']
	],
	false
);


xenial_color_field(
	'txt_btn_bg_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Background', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_bg_color']
	],
	true
);

xenial_color_field(
	'txt_btn_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_border_color']
	],
	true
);


xenial_divider_field( 
	'text_button_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_buttons', 
	] 
);

xenial_info_field(
	'text_button_hover_state_header',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'txt_btn_txt_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_txt_hover_color']
	],
	false
);


xenial_color_field(
	'txt_btn_bg_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Background', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_bg_hover_color']
	],
	true
);

xenial_color_field(
	'txt_btn_border_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_buttons',
		'label' => esc_html__( 'Border', 'xenial' ),
		'default' => $xenial_customizer_defaults['txt_btn_border_hover_color']
	],
	true
);