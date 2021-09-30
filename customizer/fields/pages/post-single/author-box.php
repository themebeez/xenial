<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_controls_wrapper_field(
	'post_single_author_box_general',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Author Box', 'xenial' ),
		'class' => esc_attr( 'post-single-author-box-general' ),
		'controls_to_wrap' => 4,
	],
	false
);

xenial_switch_field(
	'post_single_display_author_box',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Author Box', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_author_box']
	]
);