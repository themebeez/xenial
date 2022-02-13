<?php 
xenial_section_field( 
	'xenial_breadcrumbs',
	array(
		'priority' => 10,
		'panel' => 'xenial_general_panel',
		'title' => esc_html__( 'Breadcrumbs', 'xenial' )
	)
);


xenial_tab_field(
	'breadcrumbs_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'breadcrumbs_tab_1_controls', 
	        	array(
	        		'breadcrumbs_source' => '',
	        		'breadcrumbs_general_divider_1' => '',
	        		'breadcrumbs_home_item' => '',
	        		'breadcrumbs_home_page_text' => '',
	        		'breadcrumbs_general_divider_2' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'breadcrumbs_tab_2_controls', 
	        	array(
	        		'breadcrumbs_font_size' => '',
	        		'breadcrumbs_style_divider_1' => '',
	        		'breadcrumbs_text_color' => '',
	        		'breadcrumbs_style_divider_2' => ''
	        	) 
	        )
		)
	)
);


xenial_select_field(
	'breadcrumbs_source',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Source', 'xenial' ),
		'description' => sprintf( esc_html__( 'You can use theme&rsquo;s default breadcrumb or use any one of the plugin for breadcrumb, %sBreadcrumb NavXT%s or %sYoast SEO%s or %sRank Math%s', 'xenial' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">', '</a>', '<a href="https://wordpress.org/plugins/seo-by-rank-math/" target="_blank">', '</a>' ),
		'choices' => xenial_breadcrumb_sources(),
		'default' => xenial_get_customize_default( 'breadcrumbs_source' )
	)
);


xenial_divider_field( 
	'breadcrumbs_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	) 
);


xenial_radio_button_group_field(
	'breadcrumbs_home_item',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Home Item', 'xenial' ),
		'item' => 'text',
		'columns' => 2,
		'choices' => apply_filters( 'xenial_filter_breadcrumbs_home_items', 
			array(
				'text' => esc_html__( 'Text', 'xenial' ),
				'icon' => esc_html__( 'Icon', 'xenial' )
			) 
		),
		'default' => xenial_get_customize_default( 'breadcrumbs_home_item' )
	),
	false
);


xenial_text_field(
	'breadcrumbs_home_page_text',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Home Text', 'xenial' ),
		'default' => xenial_get_customize_default( 'breadcrumbs_home_page_text' )
	)
);


xenial_divider_field( 
	'breadcrumbs_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	) 
);



xenial_range_control_field(
	'breadcrumbs_font_size',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Font Size (px)', 'xenial' ),
		'input_attrs' => xenial_get_font_size_input_attrs(),
		'responsive' => true,
		'defaults' => xenial_get_customize_default( 'breadcrumbs_font_size' )
	)
);


xenial_divider_field( 
	'breadcrumbs_style_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	) 
);

xenial_color_picker_field(
	'breadcrumbs_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_breadcrumbs',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'is_responsive' => false,
		'default' => xenial_get_customize_default( 'breadcrumbs_text_color' )
	)
);

xenial_divider_field( 
	'breadcrumbs_style_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_breadcrumbs', 
	) 
);