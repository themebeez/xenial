<?php

$xenial_customizer_defaults = xenial_get_customizer_defaults();

$wp_customize->get_panel( 'woocommerce' )->priority = 13;


$wp_customize->add_setting(
	'woo_related_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'woo_related_products_info',
		array(
			'label' => esc_html__( 'Related Products', 'xenial' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);


$wp_customize->add_setting( 
	'related_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['related_products_heading'],
	) 
);

$wp_customize->add_control( 
	'related_products_heading', 
	array(
		'label' => esc_html__( 'Related Products Heading', 'xenial' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_1',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_1',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'related_products_columns_per_row', 
	array(
		'default' => $xenial_customizer_defaults['related_products_columns_per_row'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'related_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 5,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_2',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_2',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);


$wp_customize->add_setting( 
	'related_products_per_page', 
	array(
		'default' => $xenial_customizer_defaults['related_products_per_page'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'related_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_upsell_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'woo_upsell_products_info',
		array(
			'label' => esc_html__( 'Upsell Products', 'xenial' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['upsell_products_heading'],
	) 
);

$wp_customize->add_control( 
	'upsell_products_heading', 
	array(
		'label' => esc_html__( 'Upsell Products Heading', 'xenial' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_3',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_3',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_columns_per_row', 
	array(
		'default' => $xenial_customizer_defaults['upsell_products_columns_per_row'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'upsell_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 6,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_product_catalog_separator_4',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_4',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'upsell_products_per_page', 
	array(
		'default' => $xenial_customizer_defaults['upsell_products_per_page'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'upsell_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);


$wp_customize->add_setting(
	'woo_cross_sell_products_info',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => ''
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Info_Control(
		$wp_customize,
		'woo_cross_sell_products_info',
		array(
			'label' => esc_html__( 'Cross Sell Products', 'xenial' ),
			'section' => 'woocommerce_product_catalog',
			'priority' => 10
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_heading', 
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => $xenial_customizer_defaults['cross_sell_products_heading'],
	) 
);

$wp_customize->add_control( 
	'cross_sell_products_heading', 
	array(
		'label' => esc_html__( 'Cross Sell Products Heading', 'xenial' ),
		'section' => 'woocommerce_product_catalog',
		'type' => 'text'
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_5',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_5',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_columns_per_row', 
	array(
		'default' => $xenial_customizer_defaults['cross_sell_products_columns_per_row'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'cross_sell_products_columns_per_row', 
		array(
			'label' 			=> esc_html__( 'Products per row', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 6,
                'step' 		=> 1,
            )
		) 
	) 
);

$wp_customize->add_setting(
	'woo_product_catalog_separator_6',
	array(
		'sanitize_callback' => 'esc_html',
		'default' => '',
	)
);

$wp_customize->add_control(
	new Xenial_Customize_Divider_Control(
		$wp_customize,
		'woo_product_catalog_separator_6',
		array(
			'section' => 'woocommerce_product_catalog'
		)
	)
);

$wp_customize->add_setting( 
	'cross_sell_products_per_page', 
	array(
		'default' => $xenial_customizer_defaults['cross_sell_products_per_page'],
		'sanitize_callback' 	=> 'xenial_sanitize_range',
	) 
);

$wp_customize->add_control( 
	new Xenial_Customize_Range_Control( 
		$wp_customize, 
		'cross_sell_products_per_page', 
		array(
			'label' 			=> esc_html__( 'Products per page', 'xenial' ),
			'section'  			=> 'woocommerce_product_catalog',
            'input_attrs' 		=> array(
                'min'		=> 1,
                'max' 		=> 30,
                'step' 		=> 1,
            )
		) 
	) 
);