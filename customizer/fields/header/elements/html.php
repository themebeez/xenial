<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


$wp_customize->add_section( 
	'xenial_header_html', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'HTML', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);