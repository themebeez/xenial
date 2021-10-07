<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_controls_wrapper_field(
	'post_single_comments_general',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Comments', 'xenial' ),
		'class' => esc_attr( 'post-single-comments-general' ),
		'controls_to_wrap' => 4,
	],
	false
);


xenial_switch_field(
	'post_single_display_comments',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Comments', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_comments']
	]
);


xenial_divider_field( 
	'post_single_comments_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_info_field(
	'post_single_comments_toggle_heading',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Comments Toggle Button', 'xenial' )
	]
);


xenial_switch_field(
	'post_single_show_toggle_comments_btn',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Enable Button', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_show_toggle_comments_btn']
	]
);


xenial_text_field(
	'post_single_comment_toggle_btn_title',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Initial Button Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_comment_toggle_btn_title']
	]
);

xenial_text_field(
	'post_single_comment_toggled_state_toggle_btn_title',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Comments Toggled State Button Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_comment_toggled_state_toggle_btn_title']
	]
);