<?php 
$xenial_customizer_defaults = xenial_get_customizer_defaults();


xenial_section_field( 
	'xenial_breadcrumbs',
	[
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Breadcrumbs', 'xenial' )
	]
);


xenial_tab_field(
	'breadcrumbs_tab',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => [
			'tab_1' => apply_filters( 
	        	'breadcrumbs_tab_1_controls', 
	        	[
	        		'breadcrumbs_source' => '',
	        		'breadcrumbs_general_divider_1' => '',
	        		'breadcrumbs_home_item' => '',
	        		'breadcrumbs_home_page_text' => '',
	        		'breadcrumbs_general_divider_2' => ''
	        	] 
	        ),
	        'tab_2' => apply_filters( 
	        	'breadcrumbs_tab_2_controls', 
	        	[
	        		'breadcrumbs_font_size' => '',
	        		'breadcrumbs_style_divider_1' => '',
	        		'breadcrumbs_text_color' => '',
	        		'breadcrumbs_link_hover_color' => '',
	        		'breadcrumbs_style_divider_2' => ''
	        	] 
	        )
		]
	]
);


xenial_select_field(
	'breadcrumbs_source',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Source', 'xenial' ),
		'description' => sprintf( esc_html__( 'You can use theme&rsquo;s default breadcrumb or use any one of the plugin for breadcrumb, %sBreadcrumb NavXT%s or %sYoast SEO%s or %sRank Math%s', 'xenial' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/seo-by-rank-math/" target="_blank">', '</a>' ),
		'choices' => xenial_breadcrumb_sources(),
		'default' => $xenial_customizer_defaults['breadcrumbs_source']
	]
);


xenial_divider_field( 
	'breadcrumbs_general_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	] 
);


xenial_radio_button_group_field(
	'breadcrumbs_home_item',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Home Item', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => apply_filters( 'xenial_filter_breadcrumbs_home_items', 
			[
				'text' => esc_html__( 'Text', 'xenial' ),
				'icon' => esc_html__( 'Icon', 'xenial' )
			] 
		),
		'default' => $xenial_customizer_defaults['breadcrumbs_home_item']
	],
	false
);


xenial_text_field(
	'breadcrumbs_home_page_text',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Home Text', 'xenial' ),
		'default' => $xenial_customizer_defaults['breadcrumbs_home_page_text']
	]
);


xenial_divider_field( 
	'breadcrumbs_general_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	] 
);



xenial_range_control_field(
	'breadcrumbs_font_size',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => ['min' => 0, 'max' => 100, 'step' => 1, 'responsive' => true],
		'defaults' => $xenial_customizer_defaults['breadcrumbs_font_size']
	]
);


xenial_divider_field( 
	'breadcrumbs_style_divider_1', 
	[ 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	] 
);


xenial_color_field(
	'breadcrumbs_text_color',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Text / Link Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['breadcrumbs_text_color']
	],
	false
);


xenial_color_field(
	'breadcrumbs_link_hover_color',
	[
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Link Hover Color', 'xenial' ),
		'default' => $xenial_customizer_defaults['breadcrumbs_link_hover_color']
	],
	false
);

xenial_divider_field( 
	'breadcrumbs_style_divider_2', 
	[ 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	] 
);