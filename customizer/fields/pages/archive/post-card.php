<?php
xenial_radio_button_group_field(
	'archive_content_container_width',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Content Container Width', 'xenial' ),
		'item' => 'text',
		'columns' => 3,
		'choices' => xenial_get_inner_container_widths(),
		'default' => xenial_get_customize_default( 'archive_content_container_width' )
	),
	false
);


xenial_controls_wrapper_field(
	'archive_post_cards',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Cards', 'xenial' ),
		'class' => esc_attr( 'archive-page-header' ),
		'controls_to_wrap' => 3,
	),
	false
);


xenial_sortable_checkbox_field(
	'archive_post_structure_one',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Elements', 'xenial' ),
		'choices' => apply_filters( 
			'xenial_archive_post_structure_one_array',  
			array(
				'image' => esc_html__( 'Featured Image', 'xenial' ),
				'title' => esc_html__( 'Title', 'xenial' ),
				'meta' => esc_html__( 'Meta', 'xenial' ),
				'excerpt' => esc_html__( 'Excerpt', 'xenial' ),
				'read_more' => esc_html__( 'Read More', 'xenial' ),
			)
		),
		'input_attrs' => array( 
			'sortable' => true, 
			'fullwidth' => true 
		),
		'default' => xenial_get_customize_default( 'archive_post_structure_one' )
	)
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_post_meta_header',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta', 'xenial' )
	)
);


xenial_sortable_checkbox_field(
	'archive_post_meta',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Meta Elements', 'xenial' ),
		'choices' => xenial_get_post_meta_structure(),
		'input_attrs' => array( 
			'sortable' => true, 
			'fullwidth' => true 
		),
		'default' => xenial_get_customize_default( 'archive_post_meta' )
	)
);



xenial_switch_field(
	'archive_show_icons_in_post_meta',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Display Icons', 'xenial' ),
		'default' => xenial_get_customize_default( 'archive_show_icons_in_post_meta' )
	)
);



xenial_divider_field( 
	'xenial_archive_pages_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_excerpt_heading',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt', 'xenial' )
	)
);


xenial_range_control_field(
	'archive_excerpt_length',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Length', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'archive_excerpt_length' )
	)
);


xenial_text_field(
	'archive_excerpt_more',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'More Text', 'xenial' ),
		'default' => xenial_get_customize_default( 'archive_excerpt_more' )
	)
);


xenial_divider_field( 
	'xenial_archive_pages_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_read_more_heading',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Read More Button', 'xenial' )
	)
);


xenial_text_field(
	'archive_read_more_button_title',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'archive_read_more_button_title' )
	)
);



xenial_controls_wrapper_field(
	'archive_page_header_post_cards_styles',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Cards', 'xenial' ),
		'class' => esc_attr( 'archive-post-cards-styles' ),
		'controls_to_wrap' => 4,
	),
	false
);


xenial_color_picker_field(
	'archive_post_card_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Card Background Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'archive_post_card_background_color' )
	)
);


xenial_divider_field( 
	'archive_page_header_post_card_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_box_border_field(
	'archive_post_card_border',
	array(
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Card Border', 'xenial' ),
		'is_responsive' => true,
		'allowed_fields' => array(
			'desktop' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'tablet' => array(
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			),
			'mobile' => array( 
				'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
				'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
				'border_colors' => array( 'initial', 'hover' )
			)
		),
		'default' => xenial_get_customize_default( 'archive_post_card_border' )
	)
);


xenial_divider_field( 
	'archive_page_header_post_card_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_page_header_post_title_typography',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Title Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'archive_post_title_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_title_font_size' )
	)
);

xenial_range_control_field(
	'archive_post_title_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_title_line_height' )
	)
);


xenial_range_control_field(
	'archive_post_title_letter_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_title_letter_spacing' )
	)
);


xenial_select_field(
	'archive_post_title_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'archive_post_title_font_weight' )
	)
);


xenial_radio_button_group_field(
	'archive_post_title_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'archive_post_title_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'archive_post_title_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'archive_post_title_text_transform' )
	),
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);

xenial_info_field(
	'archive_page_header_post_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Title Color', 'xenial' )
	)
);


xenial_color_picker_field(
	'archive_post_title_font_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Title Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'archive_post_title_font_color' )
	)
);



xenial_divider_field( 
	'archive_page_header_post_card_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_page_header_post_meta_typography',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'archive_post_meta_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_meta_font_size' )
	)
);

xenial_range_control_field(
	'archive_post_meta_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_meta_line_height' )
	)
);


xenial_range_control_field(
	'archive_post_meta_letter_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_meta_letter_spacing' )
	)
);


xenial_select_field(
	'archive_post_meta_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'archive_post_meta_font_weight' )
	)
);


xenial_radio_button_group_field(
	'archive_post_meta_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'archive_post_meta_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'archive_post_meta_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'archive_post_meta_text_transform' )
	),
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);

xenial_info_field(
	'archive_page_header_post_meta_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Meta Color', 'xenial' )
	)
);

xenial_color_picker_field(
	'archive_post_meta_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Meta Font Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'archive_post_meta_color' )
	)
);


xenial_color_picker_field(
	'archive_post_meta_separator_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Meta Separator Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'archive_post_meta_separator_color' )
	)
);




xenial_divider_field( 
	'archive_page_header_post_card_divider_6', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);


xenial_info_field(
	'archive_page_header_post_excerpt_typography',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'archive_post_excerpt_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_excerpt_font_size' )
	)
);

xenial_range_control_field(
	'archive_post_excerpt_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array(
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_excerpt_line_height' )
	)
);


xenial_range_control_field(
	'archive_post_excerpt_letter_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Letter Spacing', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 0.01, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'archive_post_excerpt_letter_spacing' )
	)
);


xenial_select_field(
	'archive_post_excerpt_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'archive_post_excerpt_font_weight' )
	)
);


xenial_radio_button_group_field(
	'archive_post_excerpt_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'archive_post_excerpt_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'archive_post_excerpt_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array(
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'archive_post_excerpt_text_transform' )
	),
	false
);

xenial_divider_field( 
	'archive_page_header_post_card_divider_7', 
	array( 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	) 
);

xenial_info_field(
	'archive_page_header_post_excerpt_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt Color', 'xenial' )
	)
);


xenial_color_picker_field(
	'archive_post_excerpt_color',
	array(
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Post Excerpt Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'archive_post_excerpt_color' )
	)
);