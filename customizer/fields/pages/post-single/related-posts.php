<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_controls_wrapper_field(
	'post_single_related_posts_general',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Related Posts', 'xenial' ),
		'class' => esc_attr( 'post-single-related-posts-general' ),
		'controls_to_wrap' => 4,
	],
	false
);


xenial_switch_field(
	'post_single_display_related_posts',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Display Related Posts', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_display_related_posts']
	]
);



xenial_divider_field( 
	'post_single_related_posts_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_text_field(
	'post_single_related_posts_section_title',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Section Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['post_single_related_posts_section_title']
	]
);


xenial_divider_field( 
	'post_single_related_posts_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);



xenial_radio_button_group_field(
	'post_single_related_posts_section_title_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Section Title Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['post_single_related_posts_section_title_alignment']
	],
	false
);


xenial_divider_field( 
	'post_single_related_posts_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_sortable_checkbox_field(
	'post_single_related_posts_elements',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_filter_related_posts_content_structure',  
			[
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'read_more' => esc_html__( 'Read More', 'xenial' ),
			]
		),
		'input_attrs' => [ 'sortable' => false, 'fullwidth' => true ]
	]
);


/*xenial_divider_field( 
	'post_single_related_posts_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_sortable_checkbox_field(
	'post_single_related_posts_meta',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Meta Elements', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => [ 'sortable' => true, 'fullwidth' => true ]
	]
);*/


xenial_divider_field( 
	'post_single_related_posts_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_range_control_field(
	'post_single_related_posts_number',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Number of Posts', 'xenial' ),
		'input_attrs' => ['min' => 2, 'max' => 4, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['post_single_related_posts_number']
	]
);


xenial_divider_field( 
	'post_single_related_posts_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);


xenial_radio_button_group_field(
	'post_single_related_posts_content_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Content Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['post_single_related_posts_content_alignment']
	],
	false
);


xenial_divider_field( 
	'post_single_related_posts_divider_7', 
	[ 
		'priority' => 10,
		'section' => 'xenial_post_single', 
	] 
);

xenial_radio_button_group_field(
	'post_single_related_posts_by',
	[
		'priority' => 10,
		'section' => 'xenial_post_single',
		'label' => esc_html__( 'Related Posts By', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'categories' => esc_html__( 'Categories', 'xenial' ),
			'tag' => esc_html__( 'Tags', 'xenial' )
		),
		'default' => $xenial_customizer_defaults['post_single_related_posts_by']
	],
	false
);