<?php

$wp_customize->add_panel(
	'xenial_general_panel',
	array(
		'title' => esc_html__( 'General', 'xenial' ),
		'priority' => 10,
	)
);

$wp_customize->add_panel( 
	'xenial_site_header_panel', 
	array(
		'title'			=> esc_html__( 'Header', 'xenial' ),
		'priority'		=> 11,
	) 
);

$wp_customize->add_panel(
	'xenial_footer_panel',
	array(
		'title' => esc_html__( 'Footer', 'xenial' ),
		'priority' => 12,
	)
);


$wp_customize->add_panel(
	'xenial_site_pages',
	array(
		'title' => esc_html__( 'Pages', 'xenial' ),
		'priority' => 12,
	)
);