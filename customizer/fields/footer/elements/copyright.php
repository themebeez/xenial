<?php 

xenial_section_field( 
	'xenial_footer_copyright',
	array(
		'priority' => 10,
		'panel' => 'xenial_theme_footer_panel',
		'title' => esc_html__( 'Copyright', 'xenial' )
	)
);


xenial_tinymce_editor_field(
	'copyright_text',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Copyright Text', 'xenial' ),
		'input_attrs' => array(
			'toolbar1' => 'bold italic underline strikethrough link unlink',
			'toolbar2' => '',
			'mediaButtons' => false
		),
		'default' => xenial_get_customize_default( 'copyright_text' )
	)
);

xenial_radio_button_group_field(
	'copyright_alignment',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Alignment', 'xenial' ),
		'item' => 'icon',
		'columns' => 3,
		'choices' => array(
			'left' => 'dashicons-align-left',
			'center' => 'dashicons-align-center',
			'right' => 'dashicons-align-right'
		),
		'default' => xenial_get_customize_default( 'copyright_alignment' )
	),
	true
);


xenial_button_checkbox_field(
	'copyright_visibility',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Device Visibility', 'xenial' ),
		'item' => 'icon',
		'choices' => array(
			'desktop' => 'dashicons-desktop',
			'tablet' => 'dashicons-tablet',
			'mobile' => 'dashicons-smartphone'
		),
		'default' => xenial_get_customize_default( 'copyright_visibility' )
	)
);

xenial_color_field(
	'copyright_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Text Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'copyright_text_color' )
	),
	false
);

xenial_color_field(
	'copyright_link_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'copyright_link_color' )
	),
	false
);

xenial_color_field(
	'copyright_link_hover_color',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => xenial_get_customize_default( 'copyright_link_hover_color' )
	),
	false
);


xenial_range_control_field(
	'copyright_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_footer_copyright',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => array(
			'min' => 0, 
			'max' => 100, 
			'step' => 1, 
			'responsive' => true
		),
		'defaults' => xenial_get_customize_default( 'copyright_font_size' )
	)
);