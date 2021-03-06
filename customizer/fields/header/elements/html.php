<?php

xenial_section_field( 
	'xenial_header_html',
	array(
		'priority' => 11,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'HTML', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_header_html_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters(
				'xenial_filter_header_html_tab_1_controls',
				array(
					'header_html_content' => '',
					'header_html_alignment' => '',
					'header_html_visibility' => '',

					'header_html_general_divider_1' => '',
					'header_html_general_divider_2' => '',
					'header_html_general_divider_3' => '',
				)
			),
			'tab_2' => apply_filters(
				'xenial_filter_header_html_tab_2_controls',
				array(	
					'header_html_typo' => '',
		            'header_html_text_font_size' => '',
		            'header_html_text_line_height' => '',
		            'header_html_text_font_weight' => '',
		            'header_html_text_font_style' => '',
		            'header_html_text_text_transform' => '',

		            'header_html_text_color' => '',

					'header_html_style_divider_1' => '',
				)
			)
		)
	)
);


xenial_tinymce_editor_field(
	'header_html_content',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Content', 'xenial' ),
		'input_attrs' => array(
			'toolbar1' => 'formatselect underline strikethrough bullist numlist alignleft aligncenter alignright link unlink',
			'toolbar2' => '',
			'mediaButtons' => false
		),
		'default' => xenial_get_customize_default( 'header_html_content' )
	)
);


xenial_divider_field( 
	'header_html_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	) 
);


xenial_button_checkbox_field(
	'header_html_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Hide on Devices', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'header_html_visibility' )
	)
);


xenial_divider_field( 
	'header_html_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	) 
);


xenial_radio_button_group_field(
	'header_html_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'header_html_alignment' )
	),
	true
);


xenial_divider_field( 
	'header_html_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	) 
);





xenial_info_field(
	'header_html_typo',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Typography', 'xenial' )
	)
);


xenial_range_control_field(
	'header_html_text_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_html_text_font_size' )
	)
);


xenial_range_control_field(
	'header_html_text_line_height',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Line Height', 'xenial' ),
		'input_attrs' => xenial_get_line_height_input_attrs(),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'header_html_text_font_size' )
	)
);


xenial_select_field(
	'header_html_text_font_weight',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Weight', 'xenial' ),
		'choices' => xenial_get_standard_font_weights(),
		'default' => xenial_get_customize_default( 'header_html_text_font_weight' )
	)
);


xenial_radio_button_group_field(
	'header_html_text_font_style',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Font Style', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => array(
			'normal' => 'Aa',
			'italic' => '<i>Aa</i>'
		),
		'default' => xenial_get_customize_default( 'header_html_text_font_style' )
	),
	false
);


xenial_radio_button_group_field(
	'header_html_text_text_transform',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text Transform', 'xenial' ),
		'item' => 'text',
		'columns' => 4,
		'choices' => xenial_get_text_transforms(),
		'default' => xenial_get_customize_default( 'header_html_text_text_transform' )
	),
	false
);


xenial_divider_field( 
	'header_html_style_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_header_html', 
	) 
);

xenial_color_picker_field(
	'header_html_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_header_html',
		'label' => esc_html__( 'Text / Link Color', 'xenial' ),
		'is_responsive' => true,
		'default' => xenial_get_customize_default( 'header_html_text_color' )
	)
);