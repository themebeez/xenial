<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();

xenial_section_field( 
	'xenial_header_social_links',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Social Links', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_social_links_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_header_social_links_tab_1_controls', 
	        	[
	        		'header_social_link_menu' => '',
	        		'header_social_link_general_divider_1' => '',

	        		'header_social_link_visibility' => '',
	        		'header_social_link_general_divider_2' => '',

	        		'header_social_link_alignment' => '',
	        		'header_social_link_general_divider_3' => '',

            		'header_social_link_display_title' => '',
            		'header_social_link_general_divider_4' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_social_links_tab_2_controls', 
	        	[
	        		'header_social_link_item_spacing' => '',
	        		'header_social_link_style_divider_1' => '',

	        		'header_social_link_icon' => '',
		            'header_social_link_icon_size' => '',
		            'header_social_link_icon_background_spacing' => '',
		            'header_social_link_style_divider_2' => '',

		            'header_social_link_icon_border_style' => '',
		            'header_social_link_icon_border_width' => '',
		            'header_social_link_icon_border_radius' => '',
		            'header_social_link_style_divider_3' => '',

		            'header_social_link_title' => '',
		            'header_social_link_title_font_size' => '',
		            'header_social_link_title_line_height' => '',
		            'header_social_link_style_divider_4' => '',

		            'header_social_link_color' => '',
		            'header_social_link_icon_color_type' => '',
		            'header_social_link_style_divider_5' => '',

		            'header_social_link_default_state_color' => '',
		            'header_social_link_icon_color' => '',
		            'header_social_link_title_color' => '',
		            'header_social_link_background_color' => '',
		            'header_social_link_border_color' => '',
		            'header_social_link_style_divider_6' => '',

		            'header_social_link_hover_state_color' => '',
		            'header_social_link_hover_icon_color' => '',
		            'header_social_link_hover_title_color' => '',
		            'header_social_link_hover_background_color' => '',
		            'header_social_link_hover_border_color' => '',
	        	] 
	        )
		]
	]
);


xenial_select_field(
	'header_social_link_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Social Link Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => $xenial_customizer_defaults['header_social_link_menu']
	]
);


xenial_divider_field( 
	'header_social_link_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);


xenial_button_checkbox_field(
	'header_social_link_visibility',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => [
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		],
		'default' => $xenial_customizer_defaults['header_social_link_visibility']
	]
);


xenial_divider_field( 
	'header_social_link_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);


xenial_radio_button_group_field(
	'header_social_link_alignment',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => [
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		],
		'default' => $xenial_customizer_defaults['header_social_link_alignment']
	],
	true
);


xenial_divider_field( 
	'header_social_link_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);


xenial_switch_field(
	'header_social_link_display_title',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Display Title', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_display_title']
	]
);


xenial_divider_field( 
	'header_social_link_general_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);





xenial_range_control_field(
	'header_social_link_item_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Item Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_social_link_item_spacing']
	]
);


xenial_divider_field( 
	'header_social_link_style_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);



xenial_info_field(
	'header_social_link_icon',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Social Icon', 'xenial' )
	]
);


xenial_range_control_field(
	'header_social_link_icon_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_social_link_icon_size']
	]
);


xenial_range_control_field(
	'header_social_link_icon_background_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Background Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_social_link_icon_background_spacing']
	]
);


xenial_divider_field( 
	'header_social_link_style_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);


xenial_select_field(
	'header_social_link_icon_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['header_social_link_icon_border_style']
	]
);


xenial_box_dimension_field(
	'header_social_link_icon_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['header_social_link_icon_border_width']
	],
	false
);


xenial_range_control_field(
	'header_social_link_icon_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['header_social_link_icon_border_radius']
	]
);

xenial_divider_field( 
	'header_social_link_style_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);




xenial_info_field(
	'header_social_link_title',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Social Title', 'xenial' )
	]
);


xenial_range_control_field(
	'header_social_link_title_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_social_link_title_font_size']
	]
);


xenial_range_control_field(
	'header_social_link_title_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Line Height (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['header_social_link_title_line_height']
	]
);


xenial_divider_field( 
	'header_social_link_style_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);



xenial_info_field(
	'header_social_link_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Colors', 'xenial' )
	]
);

xenial_radio_button_group_field(
	'header_social_link_icon_color_type',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Icon Color Type', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'custom' => esc_html__( 'Custom', 'xenial' ),
			'official' => esc_html__( 'Official', 'xenial' )
		],
		'default' => $xenial_customizer_defaults['header_social_link_icon_color_type']
	],
	false
);

xenial_divider_field( 
	'header_social_link_style_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);


xenial_info_field(
	'header_social_link_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Default State Colors', 'xenial' )
	]
);


xenial_color_field(
	'header_social_link_icon_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_icon_color']
	],
	false
);


xenial_color_field(
	'header_social_link_title_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Title Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_title_color']
	],
	false
);


xenial_color_field(
	'header_social_link_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_background_color']
	],
	true
);


xenial_color_field(
	'header_social_link_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_border_color']
	],
	true
);


xenial_divider_field( 
	'header_social_link_style_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_social_links', 
	] 
);



xenial_info_field(
	'header_social_link_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Hover State Colors', 'xenial' )
	]
);


xenial_color_field(
	'header_social_link_hover_icon_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_hover_icon_color']
	],
	false
);


xenial_color_field(
	'header_social_link_hover_title_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Title Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_hover_title_color']
	],
	false
);


xenial_color_field(
	'header_social_link_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_hover_background_color']
	],
	true
);


xenial_color_field(
	'header_social_link_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_social_links',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['header_social_link_hover_border_color']
	],
	true
);