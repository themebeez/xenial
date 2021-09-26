<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_header_primary_menu',
	[
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Primary Menu', 'xenial' )
	]
);


xenial_tab_field(
	'xenial_header_primary_menu_tab',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'xenial_header_primary_menu_tab_1_controls', 
	        	[
	        		'primary_menu_display' => '',
	        		
	        		'primary_desktop_menu' => '',
	        		'header_desktop_top_level_menu' => '',
	        		'primary_desktop_top_level_menu_item_spacing' => '',

	        		'primary_menu_general_divider_1' => '',
	        		'header_desktop_dropdown_menu' => '',
	        		'primary_menu_dropdown_items_wrapper' => '',
	        		'primary_menu_dropdown_items_divider_width' => '',
	        		'primary_menu_dropdown_width' => '',

	        		'mobile_menu' => '',
	        		'offcanvas_menu_toggle_button' => '',
	        		'offcanvas_menu_toggle_button_breakpoint' => '',
	        		'offcanvas_menu_toggle_button_label' => '',
	        		'primary_menu_general_divider_2' => '',

	        		'offcanvas_menu' => '',
	        		'offcanvas_menu_position' => '',
        			'enable_offcanvas_menu_overlay' => '',
        			'close_offcanvas_menu_on_click_on_overlay' => '',
        			'primary_menu_general_divider_3' => '',

        			'offcanvas_menu_items_divider_width' => '',
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_primary_menu_tab_2_controls', 
	        	[	
	        		'primary_desktop_menu_styles' => '',

	        		'primary_desktop_top_level_menu_styles' => '',
	        		'primary_menu_top_level_items_padding' => '',
	        		'primary_menu_top_level_divider_1' => '',

	        		'primary_desktop_top_level_menu_typo' => '',
	        		'primary_menu_top_level_items_font_size' => '',
		            'primary_menu_top_level_items_font_weight' => '',
		            'primary_menu_top_level_items_line_height' => '',
		            'primary_menu_top_level_items_font_style' => '',
		            'primary_menu_top_level_items_text_transform' => '',
		            'primary_menu_top_level_divider_2' => '',

		            'primary_desktop_top_level_menu_border' => '',
		            'primary_menu_top_level_items_border_style' => '',
		            'primary_menu_top_level_items_border_width' => '',
		            'primary_menu_top_level_items_border_radius' => '',
		            'primary_menu_top_level_divider_3' => '',

		            'primary_desktop_top_level_menu_default_state_color' => '',
		            'primary_menu_top_level_items_color' => '',
		            'primary_menu_top_level_items_background_color' => '',
		            'primary_menu_top_level_items_border_color' => '',
		            'primary_menu_top_level_divider_4' => '',

		            'primary_desktop_top_level_menu_hover_state_color' => '',
		            'primary_menu_top_level_items_hover_color' => '',
		            'primary_menu_top_level_items_hover_background_color' => '',
		            'primary_menu_top_level_items_hover_border_color' => '',
		            'primary_menu_top_level_divider_5' => '',

		            'primary_desktop_top_level_menu_active_state_color' => '',
		            'primary_menu_top_level_items_active_color' => '',
		            'primary_menu_top_level_items_active_background_color' => '',
		            'primary_menu_top_level_items_active_border_color' => '',


		            'primary_menu_dropdown_styles' => '',
		            'primary_menu_dropdown_top_offset' => '',
		            'primary_menu_dropdown_divider_1' => '',


		            'primary_menu_dropdown_padding' => '',
		            'primary_menu_dropdown_divider_2' => '',

		            'primary_menu_dropdown_border' => '',
		            'primary_menu_dropdown_border_style' => '',
		            'primary_menu_dropdown_border_width' => '',
		            'primary_menu_dropdown_border_radius' => '',
		            'primary_menu_dropdown_border_color' => '',
		            'primary_menu_dropdown_divider_3' => '',


		            'primary_menu_dropdown_items_padding' => '',
		            'primary_menu_dropdown_divider_4' => '',


		            'primary_menu_dropdown_items_typo' => '',
		            'primary_menu_dropdown_items_font_size' => '',
		            'primary_menu_dropdown_items_font_weight' => '',
		            'primary_menu_dropdown_items_line_height' => '',
		            'primary_menu_dropdown_items_font_style' => '',
		            'primary_menu_dropdown_items_text_transform' => '',
		            'primary_menu_dropdown_divider_5' => '',

		            'primary_menu_dropdown_items_default_state_color' => '',
		            'primary_menu_dropdown_items_divider_color' => '', 
		            'primary_menu_dropdown_items_color' => '',
		            'primary_menu_dropdown_items_background_color' => '',
		            'primary_menu_dropdown_divider_6' => '',

		            'primary_menu_dropdown_items_hover_state_color' => '',
		            'primary_menu_dropdown_items_hover_color' => '',
		            'primary_menu_dropdown_items_hover_background_color' => '',
		            'primary_menu_dropdown_divider_7' => '',

		            'primary_menu_dropdown_items_active_state_color' => '',
		            'primary_menu_dropdown_items_active_color' => '',
		            'primary_menu_dropdown_items_active_background_color' => '',
		            
		            
		            'mobile_menu_styles' => '',

		            'mobile_offcanvas_menu_padding' => '',
		            'mobile_offcanvas_menu_margin' => '',
		            'mobile_offcanvas_menu_style_divider_1' => '',
		            
		            'mobile_offcanvas_menu_border_width' => '',
		            'mobile_offcanvas_menu_border_radius' => '',
		            'mobile_offcanvas_menu_border_color' => '',
		            'mobile_offcanvas_menu_style_divider_2' => '',

		            'mobile_offcanvas_menu_background' => '',		            
		            'mobile_menu_offcanvas_overlay_color' => '',


		            'mobile_menu_toggle_button_styles' => '',

		            'mobile_menu_toggle_button_spacing' => '',
		            'mobile_offcanvas_menu_style_divider_3' => '',

		            'mobile_menu_toggle_button_font_size' => '',
		            'mobile_offcanvas_menu_style_divider_4' => '',

		            'mobile_menu_toggle_button_border' => '',
		            'mobile_menu_toggle_button_border_style' => '',
		            'mobile_menu_toggle_button_border_width' => '',
		            'mobile_menu_toggle_button_border_radius' => '',
		            'mobile_offcanvas_menu_style_divider_5' => '',

		            'mobile_menu_toggle_button_default_state_color' => '',
		            'mobile_menu_toggle_button_label_color' => '',
		            'mobile_menu_toggle_button_background_color' => '',
		            'mobile_menu_toggle_button_border_color' => '',
		            'mobile_offcanvas_menu_style_divider_6' => '',
		            
		            'mobile_menu_toggle_button_hover_state_color' => '',
		            'mobile_menu_toggle_button_hover_label_color' => '',		            
		            'mobile_menu_toggle_button_hover_background_color' => '',
		            'mobile_menu_toggle_button_hover_border_color' => '',
		            
		            'mobile_menu_items_styles' => '',
		            'mobile_offcanvas_menu_item_padding' => '',
		            'mobile_offcanvas_menu_style_divider_7' => '',

		            'mobile_menu_items_typography' => '',
		            'mobile_menu_items_font_size' => '',
		            'mobile_menu_items_font_weight' => '',
		            'mobile_menu_items_line_height' => '',
		            'mobile_menu_items_font_style' => '',
		            'mobile_menu_items_text_transform' => '',
		            'mobile_offcanvas_menu_style_divider_8' => '',

		            'mobile_menu_items_color' => '',
		            'mobile_offcanvas_menu_item_divider_color' => '',
		            'mobile_offcanvas_menu_item_color' => '',
		            'mobile_offcanvas_menu_item_hover_color' => '',
		            'mobile_offcanvas_menu_active_item_color' => '',
		            

		            'mobile_menu_close_button_styles' => '',
		            'mobile_menu_close_button_font_size' => '',
		            'mobile_offcanvas_menu_style_divider_9' => '',

		            'mobile_menu_close_button_spacing' => '',
		            'mobile_offcanvas_menu_style_divider_10' => '',

		            'mobile_menu_close_button_border' => '',
		            'mobile_menu_close_button_border_radius' => '',
		            'mobile_menu_close_button_border_style' => '',
		            'mobile_menu_close_button_border_width' => '',
		            'mobile_offcanvas_menu_style_divider_11' => '',

		            'mobile_menu_close_button_default_state_color' => '',
		            'mobile_menu_close_button_label_color' => '',
		            'mobile_menu_close_button_background_color' => '',
		            'mobile_menu_close_button_border_color' => '',
		            'mobile_offcanvas_menu_style_divider_12' => '',

		            'mobile_menu_close_button_hover_state_color' => '',
		            'mobile_menu_close_button_hover_label_color' => '',		            
		            'mobile_menu_close_button_hover_background_color' => '',
		            'mobile_menu_close_button_hover_border_color' => '',
	        	] 
	        )
		]
	]
);

xenial_radio_button_group_field(
	'primary_menu_display',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Display Option', 'xenial' ),
		'choices' => [
			'default' => [
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-1.png',
				'name' => esc_html__( 'Search Bar', 'xenial' )
			],
			'toggle' => [
				'image' => XENIAL_THEME_URI . '/customizer/assets/images/copyright-2.png',
				'name' => esc_html__( 'Search Modal', 'xenial' )
			]
		],
		'item' => 'image',
		'columns' => 2,
		'default' => $xenial_customizer_defaults['primary_menu_display']
	],
	false
);

xenial_controls_wrapper_field(
	'primary_desktop_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Desktop Menu', 'xenial' )
	],
	false
);


xenial_info_field(
	'header_desktop_top_level_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Top Level Menu', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_desktop_top_level_menu_item_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Items Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_desktop_top_level_menu_item_spacing']
	]
);


xenial_divider_field( 
	'primary_menu_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_info_field(
	'header_desktop_dropdown_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Menu', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_menu_dropdown_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 400, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_width']
	]
);


xenial_range_control_field(
	'primary_menu_dropdown_items_divider_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Items Divider Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 5, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_divider_width']
	]
);


xenial_controls_wrapper_field(
	'mobile_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Mobile / Offcanvas Menu', 'xenial' )
	],
	false
);


xenial_info_field(
	'offcanvas_menu_toggle_button',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Offcanvas Menu Toggle Button', 'xenial' )
	]
);


xenial_range_control_field(
	'offcanvas_menu_toggle_button_breakpoint',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Display Breakpoint (px)', 'xenial' ),
		'input_attrs' => ['min' => 320, 'max' => 1920, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['offcanvas_menu_toggle_button_breakpoint']
	]
);


xenial_text_field(
	'offcanvas_menu_toggle_button_label',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Label', 'xenial' ),
		'default' => $xenial_customizer_defaults['offcanvas_menu_toggle_button_label']
	]
);


xenial_divider_field( 
	'primary_menu_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'offcanvas_menu',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Offcanvas Menu', 'xenial' )
	]
);


xenial_radio_button_group_field(
	'offcanvas_menu_position',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Position', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'left' => esc_html__( 'Left', 'xenial' ),
			'right' => esc_html__( 'Right', 'xenial' )
		],
		'default' => $xenial_customizer_defaults['offcanvas_menu_position']
	],
	false
);


xenial_switch_field(
	'enable_offcanvas_menu_overlay',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Enable Background Overlay', 'xenial' ),
		'default' => $xenial_customizer_defaults['enable_offcanvas_menu_overlay']
	]
);


xenial_switch_field(
	'close_offcanvas_menu_on_click_on_overlay',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Close on Click on Overlay', 'xenial' ),
		'default' => $xenial_customizer_defaults['close_offcanvas_menu_on_click_on_overlay']
	]
);


xenial_divider_field( 
	'primary_menu_general_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_range_control_field(
	'offcanvas_menu_items_divider_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Menu Items Divider Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 5, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['offcanvas_menu_items_divider_width']
	]
);




xenial_controls_wrapper_field(
	'primary_desktop_menu_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Desktop Menu', 'xenial' )
	],
	false
);


xenial_controls_wrapper_field(
	'primary_desktop_top_level_menu_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Top Level Menu', 'xenial' ),
		'class' => 'no-margin'
	],
	false
);


xenial_box_dimension_field(
	'primary_menu_top_level_items_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_top_level_items_padding']
	],
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_typo',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_menu_top_level_items_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_size']
	]
);

xenial_range_control_field(
	'primary_menu_top_level_items_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_line_height']
	]
);


xenial_select_field(
	'primary_menu_top_level_items_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_weight']
	]
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'primary_menu_top_level_items_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_text_transform']
	],
	false
);


xenial_divider_field( 
	'primary_menu_top_level_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_border',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'primary_menu_top_level_items_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_style']
	]
);


xenial_box_dimension_field(
	'primary_menu_top_level_items_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_top_level_items_border_width']
	],
	false
);


xenial_range_control_field(
	'primary_menu_top_level_items_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_radius']
	]
);


xenial_divider_field( 
	'primary_menu_top_level_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_border_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_top_level_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_desktop_top_level_menu_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_hover_border_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_top_level_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_info_field(
	'primary_desktop_top_level_menu_active_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Active State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_top_level_items_active_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_color']
	],
	false
);

xenial_color_field(
	'primary_menu_top_level_items_active_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_background_color']
	],
	true
);


xenial_color_field(
	'primary_menu_top_level_items_active_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_top_level_items_active_border_color']
	],
	true
);






xenial_controls_wrapper_field(
	'primary_menu_dropdown_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Menu', 'xenial' )
	],
	false
);

xenial_range_control_field(
	'primary_menu_dropdown_top_offset',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Top Offset (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_top_offset']
	]
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_box_dimension_field(
	'primary_menu_dropdown_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_dropdown_padding']
	],
	false
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_select_field(
	'primary_menu_dropdown_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_border_style']
	]
);


xenial_box_dimension_field(
	'primary_menu_dropdown_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 10, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_dropdown_border_width']
	],
	false
);


xenial_range_control_field(
	'primary_menu_dropdown_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_border_radius']
	]
);

xenial_color_field(
	'primary_menu_dropdown_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_border_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_dropdown_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_box_dimension_field(
	'primary_menu_dropdown_items_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Dropdown Menu Items Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['primary_menu_dropdown_items_padding']
	],
	false
);


xenial_divider_field( 
	'primary_menu_dropdown_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_info_field(
	'primary_menu_dropdown_items_typo',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'primary_menu_dropdown_items_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_size']
	]
);

xenial_range_control_field(
	'primary_menu_dropdown_items_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => false],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_line_height']
	]
);


xenial_select_field(
	'primary_menu_dropdown_items_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_weight']
	]
);


xenial_radio_button_group_field(
	'primary_menu_dropdown_items_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'primary_menu_dropdown_items_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_text_transform']
	],
	false
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_info_field(
	'primary_menu_dropdown_items_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_dropdown_items_divider_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Divider Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_divider_color']
	],
	true
);


xenial_color_field(
	'primary_menu_dropdown_items_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_color']
	],
	false
);


xenial_color_field(
	'primary_menu_dropdown_items_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_background_color']
	],
	true
);

xenial_divider_field( 
	'primary_menu_dropdown_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);

xenial_info_field(
	'primary_menu_dropdown_items_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_dropdown_items_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_hover_color']
	],
	false
);


xenial_color_field(
	'primary_menu_dropdown_items_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_hover_background_color']
	],
	true
);


xenial_divider_field( 
	'primary_menu_dropdown_divider_7', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'primary_menu_dropdown_items_active_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Active State Color', 'xenial' )
	]
);


xenial_color_field(
	'primary_menu_dropdown_items_active_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_active_color']
	],
	false
);


xenial_color_field(
	'primary_menu_dropdown_items_active_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['primary_menu_dropdown_items_active_background_color']
	],
	true
);





xenial_controls_wrapper_field(
	'mobile_menu_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Mobile / Offcanvas Menu', 'xenial' )
	],
	false
);


xenial_box_dimension_field(
	'mobile_offcanvas_menu_margin',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Margin (%)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_offcanvas_menu_margin']
	],
	true
);


xenial_box_dimension_field(
	'mobile_offcanvas_menu_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_offcanvas_menu_padding']
	],
	true
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_box_dimension_field(
	'mobile_offcanvas_menu_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['mobile_offcanvas_menu_border_width']
	]
);

xenial_range_control_field(
	'mobile_offcanvas_menu_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_border_radius']
	]
);

xenial_color_field(
	'mobile_offcanvas_menu_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_border_color']
	],
	true
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_color_field(
	'mobile_offcanvas_menu_background',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_background']
	],
	true
);


xenial_color_field(
	'mobile_menu_offcanvas_overlay_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Overlay Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_offcanvas_overlay_color']
	],
	true
);



xenial_controls_wrapper_field(
	'mobile_menu_toggle_button_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Offcanvas Menu Toggle Button', 'xenial' )
	],
	false
);

xenial_range_control_field(
	'mobile_menu_toggle_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon / Label Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_toggle_button_font_size']
	]
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_3', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_range_control_field(
	'mobile_menu_toggle_button_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_toggle_button_spacing']
	]
);



xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_4', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'mobile_menu_toggle_button_border',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'mobile_menu_toggle_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'defaults' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_style']
	]
);


xenial_box_dimension_field(
	'mobile_menu_toggle_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_width']
	]
);



xenial_range_control_field(
	'mobile_menu_toggle_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_radius']
	]
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_5', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_info_field(
	'mobile_menu_toggle_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'mobile_menu_toggle_button_label_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon / Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_label_color']
	],
	false
);



xenial_color_field(
	'mobile_menu_toggle_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_background_color']
	],
	true
);


xenial_color_field(
	'mobile_menu_toggle_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_border_color']
	],
	true
);



xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_6', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_info_field(
	'mobile_menu_toggle_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'mobile_menu_toggle_button_hover_label_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon / Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_label_color']
	],
	false
);



xenial_color_field(
	'mobile_menu_toggle_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'mobile_menu_toggle_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_toggle_button_hover_border_color']
	],
	true
);






xenial_controls_wrapper_field(
	'mobile_menu_items_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Menu Items', 'xenial' )
	],
	false
);



xenial_box_dimension_field(
	'mobile_offcanvas_menu_item_padding',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_padding']
	],
	true
);



xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_7', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'mobile_menu_items_typography',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Typography', 'xenial' )
	]
);


xenial_range_control_field(
	'mobile_menu_items_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_items_font_size']
	]
);

xenial_range_control_field(
	'mobile_menu_items_line_height',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => ['min' => 1, 'max' => 10, 'step' => 0.01, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_items_line_height']
	]
);


xenial_select_field(
	'mobile_menu_items_font_weight',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => $xenial_customizer_defaults['mobile_menu_items_font_weight']
	]
);


xenial_radio_button_group_field(
	'mobile_menu_items_font_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => [
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		],
		'default' => $xenial_customizer_defaults['mobile_menu_items_font_style']
	],
	false
);


xenial_radio_button_group_field(
	'mobile_menu_items_text_transform',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => [
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		],
		'default' => $xenial_customizer_defaults['mobile_menu_items_text_transform']
	],
	false
);

xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_8', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'mobile_menu_items_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Color', 'xenial' )
	]
);


xenial_color_field(
	'mobile_offcanvas_menu_item_divider_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Divider Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_divider_color']
	],
	true
);


xenial_color_field(
	'mobile_offcanvas_menu_item_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_color']
	],
	false
);


xenial_color_field(
	'mobile_offcanvas_menu_item_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_item_hover_color']
	],
	false
);


xenial_color_field(
	'mobile_offcanvas_menu_active_item_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Active Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_offcanvas_menu_active_item_color']
	],
	false
);




xenial_controls_wrapper_field(
	'mobile_menu_close_button_styles',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Offcanvas Menu Close Button', 'xenial' )
	],
	false
);


xenial_range_control_field(
	'mobile_menu_close_button_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_close_button_font_size']
	]
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_9', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_range_control_field(
	'mobile_menu_close_button_spacing',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Spacing (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['mobile_menu_close_button_spacing']
	]
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_10', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);



xenial_info_field(
	'mobile_menu_close_button_border',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border', 'xenial' )
	]
);


xenial_select_field(
	'mobile_menu_close_button_border_style',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'defaults' => $xenial_customizer_defaults['mobile_menu_close_button_border_style']
	]
);


xenial_box_dimension_field(
	'mobile_menu_close_button_border_width',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => false],
		'defaults' => $xenial_customizer_defaults['mobile_menu_close_button_border_width']
	]
);



xenial_range_control_field(
	'mobile_menu_close_button_border_radius',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 1000, 'step' => 1, 'responsive' => false],
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_border_radius']
	]
);


xenial_divider_field( 
	'mobile_offcanvas_menu_style_divider_11', 
	[ 
		'priority' => 10,
		'section' => 'xenial_header_primary_menu', 
	] 
);


xenial_info_field(
	'mobile_menu_close_button_default_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Default State Color', 'xenial' )
	]
);


xenial_color_field(
	'mobile_menu_close_button_label_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon / Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_label_color']
	],
	false
);



xenial_color_field(
	'mobile_menu_close_button_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_background_color']
	],
	true
);


xenial_color_field(
	'mobile_menu_close_button_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_border_color']
	],
	true
);



xenial_info_field(
	'mobile_menu_close_button_hover_state_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Hover State Color', 'xenial' )
	]
);


xenial_color_field(
	'mobile_menu_close_button_hover_label_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Icon / Label Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_hover_label_color']
	],
	false
);



xenial_color_field(
	'mobile_menu_close_button_hover_background_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_hover_background_color']
	],
	true
);


xenial_color_field(
	'mobile_menu_close_button_hover_border_color',
	[
		'priority' => 10,
		'section' => 'xenial_header_primary_menu',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['mobile_menu_close_button_hover_border_color']
	],
	true
);