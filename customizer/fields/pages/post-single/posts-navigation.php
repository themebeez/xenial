<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_controls_wrapper_field(
	'post_single_posts_navigation_general',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Posts Navigation', 'xenial' ),
		'class' => esc_attr( 'post-single-posts-navigation-general' ),
		'controls_to_wrap' => 4,
	],
	false
);

xenial_switch_field(
	'post_single_display_posts_navigation',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Posts Navigation', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_posts_navigation']
	]
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_switch_field(
	'post_single_display_post_image_in_post_navigation',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Posts Image', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_post_image_in_post_navigation']
	]
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_text_field(
	'post_single_prev_post_link_title_label',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Previous Post Link Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_prev_post_link_title_label']
	]
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_text_field(
	'post_single_next_post_link_title_label',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Previous Next Link Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_next_post_link_title_label']
	]
);


xenial_divider_field( 
	'post_single_posts_navigation_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);