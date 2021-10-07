<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_radio_button_group_field(
	'archive_content_container_width',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Content Container Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => $xenial_customizer_defaults['archive_content_container_width']
	],
	false
);


xenial_controls_wrapper_field(
	'archive_post_cards',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Cards', 'xenial' ),
		'class' => esc_attr( 'archive-page-header' ),
		'controls_to_wrap' => 3,
	],
	false
);


xenial_sortable_checkbox_field(
	'archive_post_structure_one',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_archive_post_structure_one_array',  
			[
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
				'read_more' => esc_html__( 'Read More', 'xenial' ),
			]
		),
		'input_attrs' => [ 'sortable' => true, 'fullwidth' => true ],
		'default' => $xenial_customizer_defaults['archive_post_structure_one']
	]
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_post_meta_header',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta', 'xenial' )
	]
);


xenial_sortable_checkbox_field(
	'archive_post_meta',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Meta Elements', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => [ 'sortable' => true, 'fullwidth' => true ],
		'default' => $xenial_customizer_defaults['archive_post_meta']
	]
);



xenial_switch_field(
	'archive_show_icons_in_post_meta',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Display Icons', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_show_icons_in_post_meta']
	]
);



xenial_divider_field( 
	'xenial_archive_pages_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_excerpt_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt', 'xenial' )
	]
);


xenial_range_control_field(
	'archive_excerpt_length',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Length', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['archive_excerpt_length']
	]
);


xenial_text_field(
	'archive_excerpt_more',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'More Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_excerpt_more']
	]
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_read_more_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Read More Button', 'xenial' )
	]
);


xenial_text_field(
	'archive_read_more_button_title',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_read_more_button_title']
	]
);



xenial_controls_wrapper_field(
	'archive_page_header_post_cards_styles',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Cards', 'xenial' ),
		'class' => esc_attr( 'archive-post-cards-styles' ),
		'controls_to_wrap' => 4,
	],
	false
);


xenial_color_field(
	'archive_post_card_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_card_background_color']
	],
	true
);


xenial_divider_field( 
	'archive_page_header_post_card_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_select_field(
	'archive_post_card_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['archive_post_card_border_style']
	]
);


xenial_box_dimension_field(
	'archive_post_card_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['archive_post_card_border_width']
	],
	false
);


xenial_box_dimension_field(
	'archive_post_card_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_card_border_radius']
	],
	true
);

xenial_color_field(
	'archive_post_card_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_card_border_color']
	],
	true
);


xenial_divider_field( 
	'archive_page_header_post_card_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_page_header_post_title_typography',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Title Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'archive_post_title_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_title_font_size']
	]
);

xenial_range_control_field(
	'archive_post_title_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_title_line_height']
	]
);


xenial_range_control_field(
	'archive_post_title_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_title_letter_spacing']
	]
);


xenial_select_field(
	'archive_post_title_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['archive_post_title_font_weight']
	]
);


xenial_radio_button_group_field(
	'archive_post_title_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['archive_post_title_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'archive_post_title_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['archive_post_title_text_transform']
	],
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);

xenial_info_field(
	'archive_page_header_post_title_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Title Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_post_title_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_title_font_color']
	],
	false
);


xenial_color_field(
	'archive_post_title_font_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_title_font_hover_color']
	],
	false
);



xenial_divider_field( 
	'archive_page_header_post_card_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_page_header_post_meta_typography',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'archive_post_meta_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_meta_font_size']
	]
);

xenial_range_control_field(
	'archive_post_meta_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_meta_line_height']
	]
);


xenial_range_control_field(
	'archive_post_meta_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_meta_letter_spacing']
	]
);


xenial_select_field(
	'archive_post_meta_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['archive_post_meta_font_weight']
	]
);


xenial_radio_button_group_field(
	'archive_post_meta_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['archive_post_meta_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'archive_post_meta_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['archive_post_meta_text_transform']
	],
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);

xenial_info_field(
	'archive_page_header_post_meta_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_post_meta_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_meta_color']
	],
	false
);


xenial_color_field(
	'archive_post_meta_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_meta_hover_color']
	],
	false
);


xenial_color_field(
	'archive_post_meta_separator_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Separator Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_meta_separator_color']
	],
	false
);




xenial_divider_field( 
	'archive_page_header_post_card_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_page_header_post_excerpt_typography',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'archive_post_excerpt_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_excerpt_font_size']
	]
);

xenial_range_control_field(
	'archive_post_excerpt_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_excerpt_line_height']
	]
);


xenial_range_control_field(
	'archive_post_excerpt_letter_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_post_excerpt_letter_spacing']
	]
);


xenial_select_field(
	'archive_post_excerpt_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['archive_post_excerpt_font_weight']
	]
);


xenial_radio_button_group_field(
	'archive_post_excerpt_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['archive_post_excerpt_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'archive_post_excerpt_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['archive_post_excerpt_text_transform']
	],
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_7', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);

xenial_info_field(
	'archive_page_header_post_excerpt_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_post_excerpt_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_post_excerpt_color']
	],
	false
);