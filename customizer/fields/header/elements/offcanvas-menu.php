<?php 


xenial_section_field( 
	'xenial_offcanvas_menu',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Off-Canvas Menu', 'xenial' )
	)
); 

xenial_tab_field(
	'xenial_offcanvas_menu_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_offcanvas_menu_tab_1_controls', 
	        	array(
	        		'offcanvas_menu' => '',
	        		'offcanvas_menu_field_divider_1' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_offcanvas_menu_tab_2_controls', 
	        	array(	
	        		'offcanvas_menu_item_padding' => '',
	        		'offcanvas_menu_field_divider_2' => '',
	        		'offcanvas_menu_item_color' => '',
	        		'offcanvas_menu_field_divider_3' => '',
	        		'offcanvas_menu_item_divider_fields' => '',
	        		'display_offcanvas_menu_item_divider' => '',
	        		'offcanvas_menu_item_divider_width' => '',
	        		'offcanvas_menu_item_divider_color' => '',
	        		'offcanvas_menu_field_divider_4' => '',
	        		'offcanvas_menu_item_typo_fields' => '',
	        		'offcanvas_menu_item_font_size' => '',
	        		'offcanvas_menu_item_line_height' => '',
	        		'offcanvas_menu_item_font_weight' => '',
	        		'offcanvas_menu_item_font_style' => '',
	        		'offcanvas_menu_item_text_transform' => '',
	        		'offcanvas_menu_field_divider_5' => '',
	        		'offcanvas_menu_item_submenu_toggle_button_fields' => '',
	        		'offcanvas_menu_submenu_toggle_button_background_color' => '',
		            'offcanvas_menu_submenu_toggle_button_label_color' => '',
		            'offcanvas_menu_submenu_toggle_button_top_offset' => '',
		            'offcanvas_menu_submenu_toggle_button_border' => ''
	        	) 
	        )
		)
	)
);


xenial_select_field(
	'offcanvas_menu',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Select Menu', 'xenial' ),
		'choices' => xenial_get_nav_menus(),
		'default' => xenial_get_customize_default('header_secondary_menu' )
	)
);


xenial_divider_field( 
	'offcanvas_menu_field_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu', 
	)
);


xenial_box_dimension_field(
	'offcanvas_menu_item_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Menu Items Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'header_button_padding' )
	),
	false
);


xenial_divider_field( 
	'offcanvas_menu_field_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu', 
	)
);

xenial_color_picker_field(
	'offcanvas_menu_item_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Menu Item Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_color' )
	)
);

xenial_divider_field( 
	'offcanvas_menu_field_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu', 
	)
);


xenial_info_field(
	'offcanvas_menu_item_divider_fields',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Menu Item Divider', 'xenial' )
	)
);


xenial_switch_field(
	'display_offcanvas_menu_item_divider',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Display Divider', 'xenial' ),
		'default' => xenial_get_customize_default( 'display_offcanvas_menu_item_divider' )
	)
);


xenial_range_control_field(
	'offcanvas_menu_item_divider_width',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Divider Width (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1,
		),
		'defaults' => xenial_get_customize_default( 'offcanvas_menu_item_divider_width' )
	)
);


xenial_color_picker_field(
	'offcanvas_menu_item_divider_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Divider Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_divider_color' )
	)
);


xenial_divider_field( 
	'offcanvas_menu_field_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu', 
	)
);


xenial_info_field(
	'offcanvas_menu_item_typo_fields',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Menu Item Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'offcanvas_menu_item_font_size',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Menu Item Font Size (px)', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_font_size' )
	)
);

xenial_range_control_field(
	'offcanvas_menu_item_line_height',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => array( 
			'min' => 1, 
			'max' => 10, 
			'step' => 0.01, 
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_line_height' )
	)
);


xenial_select_field(
	'offcanvas_menu_item_font_weight',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_font_weight' )
	)
);


xenial_radio_button_group_field(
	'offcanvas_menu_item_font_style',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array( 
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'offcanvas_menu_item_text_transform',
	array( 
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => array( 
			'inherit' => '-',
			'uppercase' => 'AA',
			'lowercase' => 'aa',
			'capitalize' => 'Aa'
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_item_text_transform' )
	),
	false
);




xenial_divider_field( 
	'offcanvas_menu_field_divider_5', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu', 
	)
);


xenial_info_field(
	'offcanvas_menu_item_submenu_toggle_button_fields',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Submenu Toggle Button', 'xenial' )
	)
);


xenial_color_picker_field(
	'offcanvas_menu_submenu_toggle_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_menu_submenu_toggle_button_background_color' )
	)
);


xenial_color_picker_field(
	'offcanvas_menu_submenu_toggle_button_label_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_menu_submenu_toggle_button_label_color' )
	)
);


xenial_range_control_field(
	'offcanvas_menu_submenu_toggle_button_top_offset',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Top Offset (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 30, 
			'step' => 1, 
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_submenu_toggle_button_top_offset' )
	)
);


xenial_box_border_field(
	'offcanvas_menu_submenu_toggle_button_border',
	array(
		'section' => 'xenial_offcanvas_menu',
		'label' => esc_html__( 'Border', 'xenial' ),
		'is_responsive' => false,
		'allowed_fields' => array(
			'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
			'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			'border_colors' => array( 'initial', 'hover' )
		),
		'default' => xenial_get_customize_default( 'offcanvas_menu_submenu_toggle_button_border' )
	)
);