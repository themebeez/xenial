<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_footer_general',
	[
		'priority' => 10,
		'panel' => 'xenial_footer_panel',
		'title' => esc_html__( 'General', 'xenial' )
	]
);


xenial_switch_field(
	'disable_theme_footer',
	[
		'priority' => 10,
		'section' => 'xenial_footer_general',
		'label' => esc_html__( 'Disable Theme Footer', 'xenial' ),
		'default' => $xenial_customizer_defaults['disable_theme_footer']
	]
);