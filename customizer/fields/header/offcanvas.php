<?php

xenial_section_field( 
	'xenial_off_canvas',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Off-Canvas', 'xenial' )
	)
); 


xenial_tab_field(
	'xenial_header_off_canvas_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_header_off_canvas_tab_1_controls', 
	        	array(
	        		'offcanvas_layout' => '',
	        		'offcanvas_field_divider_1' => '',
	        		'offcanvas_side_panel_layout_fields_title' => '',
	        		'offcanvas_side_panel_width' => '',
	        		'offcanvas_side_panel_position' => '',
	        		'offcanvas_field_divider_2' => '',
	        		'offcanvas_close_button_icon' => '',
	        		'offcanvas_close_button_label' => '',
	        		'offcanvas_field_divider_3' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_header_off_canvas_tab_2_controls', 
	        	array(	
	        		'offcanvas_margin' => '',
	        		'offcanvas_field_divider_4' => '',
	        		'offcanvas_padding' => '',
	        		'offcanvas_field_divider_5' => '',

	        		'offcanvas_background_fields_title' => '',
	        		'offcanvas_background_type' => '',
	        		'offcanvas_background_color' => '',
	        		'offcanvas_gradient_background_color_1' => '',
	        		'offcanvas_gradient_location_1' => '',
	        		'offcanvas_gradient_background_color_2' => '',
	        		'offcanvas_gradient_location_2' => '',
	        		'offcanvas_gradient_type' => '',
	        		'offcanvas_gradient_linear_angle' => '',
	        		'offcanvas_gradient_radial_position' => '',
	        		'offcanvas_background_image' => '',
	        		'offcanvas_image_background_repeat' => '',
	        		'offcanvas_image_background_size' => '',
	        		'offcanvas_image_background_position' => '',
	        		'offcanvas_image_background_attachment' => '',
	        		'offcanvas_field_divider_6' => '',

	        		'offcanvas_side_panel_border_fields_title' => '',
	        		'offcanvas_border_width' => '',
	        		'offcanvas_border_radius' => '',
	        		'offcanvas_border_color' => '',
	        		'offcanvas_field_divider_7' => '',

	        		'offcanvas_side_panel_overlay_fields_title' => '',
	        		'enable_offcanvas_background_overlay' => '',
	        		'offcanvas_overlay_color' => '',
	        		'offcanvas_field_divider_8' => '',

	        		'offcanvas_close_button_fields_title' => '',
	        		'offcanvas_close_button_font_size' => '',
	        		'offcanvas_close_button_padding' => '',
	        		'offcanvas_close_button_label_color' => '',
	        		'offcanvas_close_button_background_color' => '',
	        		'offcanvas_close_button_border_style' => '',
	        		'offcanvas_close_button_border_width' => '',
	        		'offcanvas_close_button_border_radius' => '',
	        		'offcanvas_close_button_border_color' => ''
	        	) 
	        )
		)
	)
);

xenial_radio_button_group_field(
	'offcanvas_layout',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Layout', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'modal' => esc_html__( 'Modal', 'xenial' ),
			'side_panel' => esc_html__( 'Side Panel', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'offcanvas_layout')
	),
	false
);

xenial_divider_field( 
	'offcanvas_field_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);


xenial_info_field(
	'offcanvas_side_panel_layout_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Side Panel', 'xenial' )
	)
);


xenial_range_control_field(
	'offcanvas_side_panel_width',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Panel Width (%)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1,
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_side_panel_width' )
	)
);


xenial_radio_button_group_field(
	'offcanvas_side_panel_position',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Panel Position', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'left' => esc_html__( 'Left', 'xenial' ),
			'right' => esc_html__( 'Right', 'xenial' )
		),
		'default' => xenial_get_customize_default( 'offcanvas_side_panel_position')
	),
	false
);

xenial_divider_field( 
	'offcanvas_field_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);


xenial_radio_button_group_field(
	'offcanvas_close_button_icon',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Close Button Icon', 'xenial' ),
		'item' => 'svg',
		'columns' => 3,
		'choices' => xenial_get_offcanvas_close_button_icons(),
		'default' => xenial_get_customize_default( 'offcanvas_close_button_icon')
	),
	false
);


xenial_text_field(
	'offcanvas_close_button_label',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Close Button Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'offcanvas_close_button_label' )
	)
);

xenial_divider_field( 
	'offcanvas_field_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);


xenial_box_dimension_field(
	'offcanvas_margin',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Margin (%)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_margin')
	),
	false
);

xenial_divider_field( 
	'offcanvas_field_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);


xenial_box_dimension_field(
	'offcanvas_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_padding')
	),
	false
);

xenial_divider_field( 
	'offcanvas_field_divider_5', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);


xenial_info_field(
	'offcanvas_side_panel_border_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border', 'xenial' )
	)
);

xenial_box_dimension_field(
	'offcanvas_border_width',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'offcanvas_border_width')
	)
);

xenial_range_control_field(
	'offcanvas_border_radius',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_border_radius')
	)
);

xenial_color_picker_field(
	'offcanvas_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_border_color' )
	)
);

xenial_divider_field( 
	'offcanvas_field_divider_6', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);

xenial_info_field(
	'offcanvas_side_panel_overlay_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Overlay', 'xenial' )
	)
);

xenial_switch_field(
	'enable_offcanvas_background_overlay',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Enable Background Overlay', 'xenial' ),
		'default' => xenial_get_customize_default( 'enable_offcanvas_background_overlay')
	)
);

xenial_color_picker_field(
	'offcanvas_overlay_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Overlay Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_overlay_color' )
	)
);

xenial_divider_field( 
	'offcanvas_field_divider_7', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);

xenial_info_field(
	'offcanvas_background_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Overlay', 'xenial' )
	)
);


xenial_select_field(
	'offcanvas_background_type',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Type', 'xenial' ),
		'choices' => xenial_get_background_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_background_type' )
	)
);


xenial_color_picker_field(
	'offcanvas_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_background_color' )
	)
);


xenial_color_picker_field(
	'offcanvas_gradient_background_color_1',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Gradient Color One', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_gradient_background_color_1' )
	)
);


xenial_range_control_field(
	'offcanvas_gradient_location_1',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Color One Location', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_gradient_location_1' )
	)
);

xenial_color_picker_field(
	'offcanvas_gradient_background_color_2',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Gradient Color Two', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_gradient_background_color_2' )
	)
);


xenial_range_control_field(
	'offcanvas_gradient_location_2',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Color Two Location', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_gradient_location_2' )
	)
);


xenial_select_field(
	'offcanvas_gradient_type',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Gradient Type', 'xenial' ),
		'choices' => xenial_get_gradient_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_gradient_type' )
	)
);


xenial_range_control_field(
	'offcanvas_gradient_linear_angle',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Angle', 'xenial' ),
		'input_attrs' => array( 
			'min' => 0, 
			'max' => 360, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_gradient_linear_angle' )
	)
);


xenial_image_upload_field(
	'offcanvas_background_image',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Image', 'xenial' ),
		'default' => xenial_get_customize_default( 'offcanvas_background_image' )
	)
);


xenial_select_field(
	'offcanvas_image_background_repeat',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Repeat', 'xenial' ),
		'choices' => xenial_get_background_repeat_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_image_background_repeat' )
	)
);


xenial_select_field(
	'offcanvas_image_background_size',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Size', 'xenial' ),
		'choices' => xenial_get_background_size_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_image_background_size' )
	)
);


xenial_select_field(
	'offcanvas_image_background_position',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Position', 'xenial' ),
		'choices' => xenial_get_background_position_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_image_background_position' )
	)
);


xenial_select_field(
	'offcanvas_image_background_attachment',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Attachment', 'xenial' ),
		'choices' => xenial_get_background_attachment_choices(),
		'default' => xenial_get_customize_default( 'offcanvas_image_background_attachment' )
	)
);


xenial_divider_field( 
	'offcanvas_field_divider_8', 
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas', 
	)
);

xenial_info_field(
	'offcanvas_close_button_fields_title',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Off-Canvas Close Button', 'xenial' )
	)
);


xenial_range_control_field(
	'offcanvas_close_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Icon / Label Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_close_button_font_size')
	)
);


xenial_box_dimension_field(
	'offcanvas_close_button_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_close_button_padding')
	),
	false
);


xenial_select_field(
	'offcanvas_close_button_border_style',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Style', 'xenial' ),
		'choices' => xenial_get_border_styles(),
		'defaults' => xenial_get_customize_default( 'offcanvas_close_button_border_style')
	)
);


xenial_box_dimension_field(
	'offcanvas_close_button_border_width',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Width (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'defaults' => xenial_get_customize_default( 'offcanvas_close_button_border_width')
	)
);



xenial_range_control_field(
	'offcanvas_close_button_border_radius',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Radius (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 1000, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_close_button_border_radius')
	)
);

xenial_color_picker_field(
	'offcanvas_close_button_label_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Icon / Label Color Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_close_button_label_color' )
	)
);

xenial_color_picker_field(
	'offcanvas_close_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_close_button_background_color' )
	)
);


xenial_color_picker_field(
	'offcanvas_close_button_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_off_canvas',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_default( 'offcanvas_close_button_border_color' )
	)
);