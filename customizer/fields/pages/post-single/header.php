<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_controls_wrapper_field(
	'post_single_breadcrumbs_general',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' ),
		'class' => esc_attr( 'post-single-breadcrumbs-general' ),
		'controls_to_wrap' => 4,
	],
	false
);

xenial_switch_field(
	'post_single_display_breadcrumbs',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Breadcrumbs', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_breadcrumbs']
	]
);

xenial_divider_field( 
	'post_single_breadcrumbs_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_radio_button_group_field(
	'post_single_breadcrumbs_width',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => $xenial_customizer_defaults['post_single_breadcrumbs_width']
	],
	false
);


xenial_divider_field( 
	'post_single_breadcrumbs_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);



xenial_controls_wrapper_field(
	'post_single_breadcrumbs_styles',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' ),
		'class' => esc_attr( 'post-single-breadcrumbs-styles' ),
		'controls_to_wrap' => 4,
	],
	false
);


xenial_color_field(
	'post_single_breadcrumb_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_breadcrumb_background_color']
	],
	true
);


xenial_color_field(
	'post_single_breadcrumb_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Text / Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_breadcrumb_text_color']
	],
	false
);

xenial_color_field(
	'post_single_breadcrumb_link_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_breadcrumb_link_hover_color']
	],
	false
);