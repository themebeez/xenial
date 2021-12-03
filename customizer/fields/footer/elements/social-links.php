<?php 

xenial_section_field( 
	'xenial_footer_social_links',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'Social Links', 'xenial' )
	)
);


// xenial_tab_field(
// 	'xenial_footer_social_links_tab',
// 	[
// 		'priority' => 10,
// 		'section' => 'xenial_footer_social_links',
// 		'tabs' => xenial_get_tab_control_2_labels(),
// 		'controls' => [
// 			'tab_1' => apply_filters( 
// 	        	'xenial_footer_social_links_tab_1_controls', 
// 	        	[
// 	        		'footer_social_links' => '',
// 	        		'footer_social_link_general_divider_1' => '',

// 	        		'footer_social_link_visibility' => '',
// 	        		'footer_social_link_general_divider_2' => '',

// 	        		'footer_social_link_alignment' => '',
// 	        		'footer_social_link_general_divider_3' => '',

//             		'footer_social_link_display_title' => '',
//             		'footer_social_link_general_divider_4' => '',
// 	        	] 
// 	        ),
// 	        'tab_2' => apply_filters( 
// 	        	'xenial_footer_social_links_tab_2_controls', 
// 	        	[
// 	        		'footer_social_link_item_spacing' => '',
// 	        		'footer_social_link_style_divider_1' => '',

// 	        		'footer_social_link_icon' => '',
// 		            'footer_social_link_icon_size' => '',
// 		            'footer_social_link_icon_background_spacing' => '',
// 		            'footer_social_link_style_divider_2' => '',

// 		            'footer_social_link_icon_border_style' => '',
// 		            'footer_social_link_icon_border_width' => '',
// 		            'footer_social_link_icon_border_radius' => '',
// 		            'footer_social_link_style_divider_3' => '',

// 		            'footer_social_link_title' => '',
// 		            'footer_social_link_title_font_size' => '',
// 		            'footer_social_link_title_line_height' => '',
// 		            'footer_social_link_style_divider_4' => '',

// 		            'footer_social_link_color' => '',
// 		            'footer_social_link_icon_color_type' => '',
// 		            'footer_social_link_style_divider_5' => '',

// 		            'footer_social_link_default_state_color' => '',
// 		            'footer_social_link_icon_color' => '',
// 		            'footer_social_link_title_color' => '',
// 		            'footer_social_link_background_color' => '',
// 		            'footer_social_link_border_color' => '',
// 		            'footer_social_link_style_divider_6' => '',

// 		            'footer_social_link_hover_state_color' => '',
// 		            'footer_social_link_hover_icon_color' => '',
// 		            'footer_social_link_hover_title_color' => '',
// 		            'footer_social_link_hover_background_color' => '',
// 		            'footer_social_link_hover_border_color' => '',
// 	        	] 
// 	        )
// 		]
// 	]
// );


xenial_sortable_selector_field(
	'footer_social_links',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Social Links', 'xenial' ),
		'choices' => xenial_get_social_networks()
	)
);

xenial_divider_field( 
	'footer_social_link_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_button_checkbox_field(
	'footer_social_link_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'footer_social_link_visibility' )
	)
);


xenial_divider_field( 
	'footer_social_link_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_radio_button_group_field(
	'footer_social_link_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'footer_social_link_alignment' )
	),
	true
);


xenial_divider_field( 
	'footer_social_link_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_switch_field(
	'footer_social_link_display_title',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Display Title', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_display_title' )
	)
);


xenial_divider_field( 
	'footer_social_link_general_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_select_field(
	'footer_social_link_display',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Display Style', 'xenial' ),
		'choices' => array(
			'horizontal'	=> esc_html__( 'Horizontal', 'xenial' ),
			'vertical'		=> esc_html__( 'Vertical', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'footer_social_link_display' )
	)
);


xenial_range_control_field(
	'footer_social_link_item_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Item Spacing (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_item_spacing' )
	)
);


xenial_divider_field( 
	'footer_social_link_style_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);



xenial_info_field(
	'footer_social_link_icon',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Social Icon', 'xenial' )
	)
);


xenial_range_control_field(
	'footer_social_link_icon_size',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_icon_size' )
	)
);


xenial_range_control_field(
	'footer_social_link_icon_background_spacing',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Background Spacing (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_icon_background_spacing' )
	)
);


xenial_divider_field( 
	'footer_social_link_style_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_select_field(
	'footer_social_link_icon_border_style',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => xenial_get_customize_default( 'footer_social_link_icon_border_style' )
	)
);


xenial_box_dimension_field(
	'footer_social_link_icon_border_width',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 10, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_icon_border_width' )
	),
	false
);


xenial_range_control_field(
	'footer_social_link_icon_border_radius',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'footer_social_link_icon_border_radius' )
	)
);

xenial_divider_field( 
	'footer_social_link_style_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	)
);




xenial_info_field(
	'footer_social_link_title',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Social Title', 'xenial' )
	)
);


xenial_range_control_field(
	'footer_social_link_title_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_title_font_size' )
	)
);


xenial_range_control_field(
	'footer_social_link_title_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Line Height (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'footer_social_link_title_line_height' )
	)
);


xenial_divider_field( 
	'footer_social_link_style_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);



xenial_info_field(
	'footer_social_link_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Colors', 'xenial' )
	)
);

xenial_radio_button_group_field(
	'footer_social_link_icon_color_type',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Icon Color Type', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'custom' => esc_html__( 'Custom', 'xenial' ),
			'official' => esc_html__( 'Official', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'footer_social_link_icon_color_type' )
	),
	false
);

xenial_divider_field( 
	'footer_social_link_style_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);


xenial_info_field(
	'footer_social_link_default_state_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Default State Colors', 'xenial' )
	)
);


xenial_color_field(
	'footer_social_link_icon_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_icon_color' )
	),
	false
);


xenial_color_field(
	'footer_social_link_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Title Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_title_color' )
	),
	false
);


xenial_color_field(
	'footer_social_link_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_background_color' )
	),
	true
);


xenial_color_field(
	'footer_social_link_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_border_color' )
	),
	true
);


xenial_divider_field( 
	'footer_social_link_style_divider_6', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_social_links', 
	) 
);



xenial_info_field(
	'footer_social_link_hover_state_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Hover State Colors', 'xenial' )
	)
);


xenial_color_field(
	'footer_social_link_hover_icon_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_hover_icon_color' )
	),
	false
);


xenial_color_field(
	'footer_social_link_hover_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Title Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_hover_title_color' )
	),
	false
);


xenial_color_field(
	'footer_social_link_hover_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_hover_background_color' )
	),
	true
);


xenial_color_field(
	'footer_social_link_hover_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_social_links',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_social_link_hover_border_color' )
	),
	true
);