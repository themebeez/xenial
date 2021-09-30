<?php 
$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_controls_wrapper_field(
	'archive_pagination',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Pagination', 'xenial' ),
		'class' => esc_attr( 'archive-pagination' ),
		'controls_to_wrap' => 3,
	],
	false
);


xenial_select_field(
	'archive_pagination_type',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Type', 'xenial' ),
		'choices' => xenial_get_pagination_layouts(),
		'default' => $xenial_customizer_defaults['archive_pagination_type']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_text_field(
	'previous_posts_link_btn_label',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Previous Nav Link Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['previous_posts_link_btn_label']
	]
);


xenial_text_field(
	'next_posts_link_btn_label',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Next Nav Link Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['next_posts_link_btn_label']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_range_control_field(
	'pagination_mid_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Mid Size', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['pagination_mid_size']
	]
);




xenial_controls_wrapper_field(
	'archive_page_header_pagination_styles',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Pagination', 'xenial' ),
		'class' => esc_attr( 'archive-pagination-styles' ),
		'controls_to_wrap' => 4,
	],
	false
);



xenial_range_control_field(
	'archive_pagination_top_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Top Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_pagination_top_spacing']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_range_control_field(
	'archive_pagination_items_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_pagination_items_spacing']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_box_dimension_field(
	'archive_pagination_items_padding',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Items Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_pagination_items_padding']
	],
	true
);


xenial_divider_field( 
	'archive_pagination_general_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_range_control_field(
	'archive_pagination_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['archive_pagination_font_size']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_pagination_border_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'archive_pagination_item_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['archive_pagination_item_border_style']
	]
);


xenial_box_dimension_field(
	'archive_pagination_item_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['archive_pagination_item_border_width']
	],
	false
);


xenial_range_control_field(
	'archive_pagination_item_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['archive_pagination_item_border_radius']
	]
);


xenial_divider_field( 
	'archive_pagination_general_divider_7', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_pagination_default_state_color_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_pagination_item_initial_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_initial_font_color']
	],
	false
);


xenial_color_field(
	'archive_pagination_item_initial_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_initial_background_color']
	],
	true
);


xenial_color_field(
	'archive_pagination_item_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_border_color']
	],
	true
);


xenial_divider_field( 
	'archive_pagination_general_divider_8', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_pagination_hover_state_color_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_pagination_item_hover_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_hover_font_color']
	],
	false
);


xenial_color_field(
	'archive_pagination_item_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_hover_background_color']
	],
	true
);


xenial_color_field(
	'archive_pagination_item_border_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_border_hover_color']
	],
	true
);


xenial_divider_field( 
	'archive_pagination_general_divider_9', 
	[ 
		'priority' => 10,
		'section' => 'xenial_archive_pages', 
	] 
);


xenial_info_field(
	'archive_pagination_active_state_color_heading',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Active State Color', 'xenial' )
	]
);


xenial_color_field(
	'archive_pagination_item_active_font_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_active_font_color']
	],
	false
);


xenial_color_field(
	'archive_pagination_item_active_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_active_background_color']
	],
	true
);


xenial_color_field(
	'archive_pagination_item_border_active_color',
	[
		'priority' => 10,
		'section' => 'xenial_archive_pages',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['archive_pagination_item_border_active_color']
	],
	true
);