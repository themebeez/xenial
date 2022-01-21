<?php

xenial_section_link_field(
	'enable_transparent_header',
	array(
		'priority' => 10,
		'section' => 'xenial_header_general',
		'section_link' => 'xenial_transparent_header',
		'button_label' => esc_html__( 'Transparent Header', 'xenial' ),
		'enable_switch' => true,
		'default' => xenial_get_customize_default( 'enable_transparent_header' )
	)
);

xenial_section_field( 
	'xenial_transparent_header',
	array(
		'priority' => 10,
		'panel' => 'xenial_site_header_panel',
		'title' => esc_html__( 'Transparent Header', 'xenial' )
	)
);

xenial_tab_field(
	'xenial_transparent_header_tab',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'tabs' => xenial_get_tab_control_2_labels(),
		'controls' => array(
			'tab_1' => apply_filters( 
	        	'xenial_transparent_header_tab_1_controls', 
	        	array(
	        		'transparent_header_back_top_header_general' => '',
	        		'transparent_header_general_divider_1' => '',
	        		'enable_transparent_header_on_pages' => '',
	        		'transparent_header_general_divider_2' => '',
	        		'enable_transparent_header_logo' => '',
	        		'transparent_desktop_header_logo' => '',
	        		'transparent_mobile_header_logo' => '',
	        		'transparent_header_general_divider_3' => ''
	        	) 
	        ),
	        'tab_2' => apply_filters( 
	        	'xenial_transparent_header_tab_2_controls', 
	        	array(
	        		'transparent_header_border_color' => '',

	        		'transparent_header_site_identity_wrapper' => '',
	        		'transparent_header_site_title_color' => '',
	        		'transparent_header_description_color' => '',

	        		'transparent_header_element_button_wrapper' => '',
	        		'transparent_header_button_font_color' => '',
	        		'transparent_header_button_background_color' => '',
	        		'transparent_header_button_border_color' => '',

	        		'transparent_header_element_html_wrapper' => '',
	        		'transparent_header_html_text_color' => '',

	        		'transparent_header_element_offcanvas_toggle_button_wrapper' => '',
	        		'transparent_header_offcanvas_toggle_button_label_color' => '',
	        		'transparent_header_offcanvas_toggle_button_background_color' => '',
	        		'transparent_header_offcanvas_toggle_button_border_color' => '',

	        		'transparent_header_element_search_wrapper' => '',
	        		'transparent_header_element_search_modal_toggle_button_title' => '',
	        		'transparent_header_search_modal_toggle_button_text_color' => '',
	        		'transparent_header_search_modal_toggle_button_background_color' => '',
	        		'transparent_header_search_modal_toggle_button_border_color' => '',
	        		'transparent_header_style_divider_1' => '',
	        		'transparent_header_element_search_bar_title' => '',
	        		'transparent_header_search_bar_background_color' => '',
	        		'transparent_header_search_bar_text_color' => '',
	        		'transparent_header_search_bar_border_color' => '',

	        		'transparent_header_element_social_links_wrapper' => '',
	        		'transparent_header_social_link_icon_color' => '',
	        		'transparent_header_social_link_title_color' => '',
	        		'transparent_header_social_link_background_color' => '',
	        		'transparent_header_social_link_border_color' => '',

	        		'transparent_header_element_secondary_menu_wrapper' => '',
	        		'transparent_header_secondary_menu_link_color' => '',

	        		'transparent_header_element_primary_menu_wrapper' => '',
	        		'transparent_header_primary_menu_top_level_items_color' => '',
	        		'transparent_header_primary_menu_top_level_items_background_color' => '',
	        		'transparent_header_primary_menu_top_level_items_border_color' => '',
	        	) 
	        )
		)
	)
);

xenial_section_link_field(
	'transparent_header_back_top_header_general',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'section_link' => 'xenial_header_general',
		'button_label' => esc_html__( 'Go back to Header > General', 'xenial' ),
		'enable_switch' => false,
		'default' => ''
	)
);

xenial_divider_field( 
	'transparent_header_general_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_transparent_header', 
	) 
);


xenial_sortable_checkbox_field(
	'enable_transparent_header_on_pages',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Enable On Templates', 'xenial' ),
		'choices' => xenial_get_general_pages(),
		'input_attrs' => array( 'sortable' => false, 'fullwidth' => true )
	)
);


xenial_divider_field( 
	'transparent_header_general_divider_2', 
	array( 
		'priority' => 10,
		'section' => 'xenial_transparent_header', 
	) 
);

xenial_switch_field(
	'enable_transparent_header_logo',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Different Logo For Transparent Header?', 'xenial' ),
		'default' => xenial_get_customize_default( 'enable_transparent_header_logo' )
	)
);

xenial_image_upload_field(
	'transparent_desktop_header_logo',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Desktop Logo', 'xenial' ),
		'default' => xenial_get_customize_default( 'transparent_desktop_header_logo' )
	)
);


xenial_image_upload_field(
	'transparent_mobile_header_logo',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Mobile Logo', 'xenial' ),
		'default' => xenial_get_customize_default( 'transparent_mobile_header_logo' )
	)
);

xenial_divider_field( 
	'transparent_header_general_divider_3', 
	array( 
		'priority' => 10,
		'section' => 'xenial_transparent_header', 
	) 
);







xenial_color_picker_field(
	'transparent_header_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_border_color' )
	)
);


xenial_controls_wrapper_field(
	'transparent_header_site_identity_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Site Identity', 'xenial' )
	),
	false
);


xenial_color_picker_field(
	'transparent_header_site_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Site Title Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_site_title_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_site_title_color' )
	)
);

xenial_color_picker_field(
	'transparent_header_description_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Site Description Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_description_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_description_color' )
	)
);


xenial_controls_wrapper_field(
	'transparent_header_element_button_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Button', 'xenial' )
	),
	false
);

xenial_color_picker_field(
	'transparent_header_button_font_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Label Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_button_font_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_button_font_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_button_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_button_background_color' )
	)
);

xenial_color_picker_field(
	'transparent_header_button_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_button_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_button_border_color' )
	)
);



xenial_controls_wrapper_field(
	'transparent_header_element_html_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'HTML/Text', 'xenial' )
	),
	false
);

xenial_color_picker_field(
	'transparent_header_html_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_html_text_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_html_text_color' )
	)
);


xenial_controls_wrapper_field(
	'transparent_header_element_offcanvas_toggle_button_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Off-Canvas Toggle Button', 'xenial' )
	),
	false
);


xenial_color_picker_field(
	'transparent_header_offcanvas_toggle_button_label_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Icon / Label Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_offcanvas_toggle_button_label_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_offcanvas_toggle_button_label_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_offcanvas_toggle_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_offcanvas_toggle_button_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_offcanvas_toggle_button_background_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_offcanvas_toggle_button_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_offcanvas_toggle_button_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_offcanvas_toggle_button_border_color' )
	)
);



xenial_controls_wrapper_field(
	'transparent_header_element_search_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Search', 'xenial' )
	),
	false
);


xenial_info_field(
	'transparent_header_element_search_modal_toggle_button_title',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Search Modal Toggle Button', 'xenial' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_modal_toggle_button_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_modal_toggle_button_text_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_modal_toggle_button_text_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_modal_toggle_button_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_modal_toggle_button_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_modal_toggle_button_background_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_modal_toggle_button_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_modal_toggle_button_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_modal_toggle_button_border_color' )
	)
);


xenial_divider_field( 
	'transparent_header_style_divider_1', 
	array( 
		'priority' => 10,
		'section' => 'xenial_transparent_header', 
	) 
);

xenial_info_field(
	'transparent_header_element_search_bar_title',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Search Bar', 'xenial' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_bar_text_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Font Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_bar_text_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_bar_text_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_bar_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_bar_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_bar_background_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_search_bar_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_search_bar_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_search_bar_border_color' )
	)
);



xenial_controls_wrapper_field(
	'transparent_header_element_social_links_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Social Links', 'xenial' )
	),
	false
);

xenial_color_picker_field(
	'transparent_header_social_link_icon_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Icon Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_social_link_icon_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_social_link_icon_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_social_link_title_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Title Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_social_link_title_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_social_link_title_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_social_link_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_social_link_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_social_link_background_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_social_link_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_social_link_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_social_link_border_color' )
	)
);



xenial_controls_wrapper_field(
	'transparent_header_element_secondary_menu_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Secondary Menu', 'xenial' )
	),
	false
);

xenial_color_picker_field(
	'transparent_header_secondary_menu_link_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'is_responsive' => true,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_secondary_menu_link_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_secondary_menu_link_color' )
	)
);

xenial_controls_wrapper_field(
	'transparent_header_element_primary_menu_wrapper',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Primary Menu', 'xenial' )
	),
	false
);

xenial_color_picker_field(
	'transparent_header_primary_menu_top_level_items_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Link Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_primary_menu_top_level_items_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_primary_menu_top_level_items_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_primary_menu_top_level_items_background_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Background Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_primary_menu_top_level_items_background_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_primary_menu_top_level_items_background_color' )
	)
);


xenial_color_picker_field(
	'transparent_header_primary_menu_top_level_items_border_color',
	array(
		'priority' => 10,
		'section' => 'xenial_transparent_header',
		'label' => esc_html__( 'Border Color', 'xenial' ),
		'is_responsive' => false,
		'colors' => xenial_get_customize_allowed_fields( 'transparent_header_primary_menu_top_level_items_border_color' ),
		'default' => xenial_get_customize_default( 'transparent_header_primary_menu_top_level_items_border_color' )
	)
);


