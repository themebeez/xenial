<?php 
xenial_controls_wrapper_field(
	'post_single_breadcrumbs_general',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' ),
		'class' => esc_attr( 'post-single-breadcrumbs-general' ),
		'controls_to_wrap' => 4,
	),
	false
);

xenial_switch_field(
	'post_single_display_breadcrumbs',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Breadcrumbs', 'xenial' ),
		'default' => xenial_get_customize_default( 'post_single_display_breadcrumbs' )
	)
);

xenial_divider_field( 
	'post_single_breadcrumbs_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);


xenial_radio_button_group_field(
	'post_single_breadcrumbs_width',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'post_single_breadcrumbs_width' )
	),
	false
);


xenial_divider_field( 
	'post_single_breadcrumbs_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	) 
);



xenial_controls_wrapper_field(
	'post_single_breadcrumbs_styles',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Breadcrumbs', 'xenial' ),
		'class' => esc_attr( 'post-single-breadcrumbs-styles' ),
		'controls_to_wrap' => 4,
	),
	false
);

xenial_color_picker_field(
	'post_single_breadcrumb_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'post_single_breadcrumb_background_color' ),
		'default' => xenial_get_customize_default( 'post_single_breadcrumb_background_color' )
	)
);


xenial_color_picker_field(
	'post_single_breadcrumb_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Breadcrumbs Font Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'post_single_breadcrumb_text_color' ),
		'default' => xenial_get_customize_default( 'post_single_breadcrumb_text_color' )
	)
);