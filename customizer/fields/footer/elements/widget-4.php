<?php 

xenial_section_field( 
	'xenial_footer_widget_4',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'Widget 4', 'xenial' )
	)
);


xenial_tab_field(
	'xenial_footer_widget_4_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_footer_widget_4_tab_1_filter', 
	        	array(
	        		'footer_widget_area_4_section_link_notice' => '',
	        		'footer_widget_4_field_divider_1' => '',
	        		'footer_widget_area_4_content_alignment' => '',
	        		'footer_widget_4_field_divider_2' => '',
					'footer_widget_area_4_visibility'	=> '',
					'footer_widget_4_field_divider_3' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_footer_widget_4_tab_2_filter', 
	        	array(
	        		'footer_widget_area_4_text_color'	=> '',
	        		'footer_widget_4_field_divider_4'	=> '',
					'footer_widget_area_4_link_color'	=> '',
					'footer_widget_4_field_divider_5'	=> '',
					'footer_widget_area_4_link_hover_color'	=> '',
					'footer_widget_4_field_divider_6'	=> ''
	        	) 
	        )
		)
	)
);

xenial_simple_notice_field(
	'footer_widget_area_4_section_link_notice',
	array(
		'priority'	=> 10,
		'section'	=> 'xenial_footer_widget_4',
		'label'		=> esc_html__( 'Note:', 'xenial' ),
		'description'	=> sprintf( __( 'Configure Widget 4 via Widgets / %1$sFooter Widget Area 4%2$s.', 'xenial' ), '<a href="#" class="customize-section-link" data-attr="footer_widget_area_4">', '</a>' ), 
	)
);

xenial_divider_field( 
	'footer_widget_4_field_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);


xenial_radio_button_group_field(
	'footer_widget_area_4_content_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'footer_widget_area_4_content_alignment' )
	),
	true
);


xenial_divider_field( 
	'footer_widget_4_field_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);


xenial_button_checkbox_field(
	'footer_widget_area_4_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'footer_widget_area_4_visibility' )
	)
);


xenial_divider_field( 
	'footer_widget_4_field_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);

xenial_color_field(
	'footer_widget_area_4_text_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_widget_area_4_text_color' )
	),
	false
);

xenial_divider_field( 
	'footer_widget_4_field_divider_4', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);


xenial_color_field(
	'footer_widget_area_4_link_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_widget_area_4_link_color' )
	),
	false
);

xenial_divider_field( 
	'footer_widget_4_field_divider_5', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);



xenial_color_field(
	'footer_widget_area_4_link_hover_color',
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'footer_widget_area_4_link_hover_color' )
	),
	false
);

xenial_divider_field( 
	'footer_widget_4_field_divider_6', 
	array( 
		'priority' => 10,
		'section' => 'xenial_footer_widget_4', 
	) 
);