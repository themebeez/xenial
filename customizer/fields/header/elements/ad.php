<?php 

$xenial_customizer_defaults = xenial_get_customizer_defaults();


$wp_customize->add_section( 
	'xenial_header_ad', 
	array(
		'priority'		=> 11,
		'title'			=> esc_html__( 'Ad Banner', 'xenial' ),
		'panel'			=> 'xenial_site_header_panel'
	) 
);


