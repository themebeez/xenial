<?php 

xenial_section_field( 
	'xenial_offcanvas_toggle_button',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Off-Canvas Toggle Button', 'xenial' )
	)
); 

xenial_tab_field(
	'xenial_offcanvas_toogle_button_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_offcanvas_toggle_button_tab_1_controls', 
	        	array(
	        		'offcanvas_toggle_button_icon' => '',
	        		'offcanvas_toggle_button_field_divider_1' => '',
	        		'offcanvas_toggle_button_label' => '',
	        		'offcanvas_toggle_button_field_divider_2' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_offcanvas_toggle_button_tab_2_controls', 
	        	array(	
	        		'offcanvas_toggle_button_font_size' => '',
	        		'offcanvas_toggle_button_field_divider_3' => '',
	        		'offcanvas_toggle_button_padding' => '',
	        		'offcanvas_toggle_button_field_divider_4' => '',
	        		'offcanvas_toggle_button_label_color' => '',
	        		'offcanvas_toggle_button_field_divider_5' => '',
	        		'offcanvas_toggle_button_background_color' => '',
	        		'offcanvas_toggle_button_field_divider_6' => '',
	        		'offcanvas_toggle_button_border' => ''
	        	) 
	        )
		)
	)
);


xenial_radio_button_group_field(
	'offcanvas_toggle_button_icon',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Button Icon', 'xenial' ),
		'item' => 'svg',
		'columns' => 3,
		'choices' => array(
			'button_1' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/></svg>',
			'button_2' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18 18v2H6v-2h12zm3-7v2H3v-2h18zm-3-7v2H6V4h12z"/></svg>',
			'button_3' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 14c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-7c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>'
		),
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_icon')
	),
	false
);


xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_1', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);


xenial_text_field(
	'offcanvas_toggle_button_label',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Button Label', 'xenial' ),
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_label' )
	)
);


xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_2', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);


xenial_range_control_field(
	'offcanvas_toggle_button_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Icon / Label Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_font_size')
	)
);

xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_3', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);


xenial_box_dimension_field(
	'offcanvas_toggle_button_padding',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Padding (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => false
		),
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_padding')
	),
	false
);

xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_4', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);

xenial_color_picker_field(
	'offcanvas_toggle_button_label_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Icon / Label Color Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_label_color' )
	)
);

xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_5', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);

xenial_color_picker_field(
	'offcanvas_toggle_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_background_color' )
	)
);

xenial_divider_field( 
	'offcanvas_toggle_button_field_divider_6', 
	array(
		'priority' => 10,
		'section' => 'xenial_offcanvas_toggle_button', 
	)
);

xenial_box_border_field(
	'offcanvas_toggle_button_border',
	array(
		'section' => 'xenial_offcanvas_toggle_button',
		'label' => esc_html__( 'Button Border', 'xenial' ),
		'is_responsive' => false,
		'allowed_fields' => array(
			'border_widths' => array( 'top', 'right', 'bottom', 'left' ),
			'border_radius' => array( 'top_left', 'top_right', 'bottom_left', 'bottom_right' ),
			'border_colors' => array( 'initial', 'hover' )
		),
		'default' => xenial_get_customize_default( 'offcanvas_toggle_button_border' )
	)
);