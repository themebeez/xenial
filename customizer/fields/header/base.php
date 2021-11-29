<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_header_general',
	[
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'General', 'xenial' )
	]
);


xenial_switch_field(
	'disable_theme_header',
	[
		'priority' => 10,
		'section' => 'xenial_header_general',
		'label' => esc_html__( 'Disable Theme Header', 'xenial' ),
		'default' => $xenial_customizer_defaults['disable_theme_header']
	]
);


xenial_text_field(
	'theme_header_elements',
	[
		'priority' => 10,
		'section' => 'xenial_header_general',
		'label' => esc_html__( 'Header Elements', 'xenial' ),
		'default' => ''
	]
);