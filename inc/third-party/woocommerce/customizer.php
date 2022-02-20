<?php 
/**
 * Define default values for WooCommerce customizer settings.
 * 
 * @param   array
 * @return  array
 */ 
if ( ! function_exists( 'xenial_get_woocommerce_customize_defaults' ) ) {

    function xenial_get_woocommerce_customize_defaults( $customize_defaults ) {
        
        $woocommerce_customize_defaults = apply_filters(
            'xenial_woocommerce_customize_defaults_filter',
            array(
                'main_header_display_cart_items_no' => false,
                'main_header_cart_visibility' => 'default',
                'sidebar_woocommerce_archive_position' => 'default',
                'sidebar_woocommerce_product_position' => 'default',
                'related_products_heading' => esc_html__( 'Related products', 'xenial' ),
                'related_products_columns_per_row' => 3,
                'related_products_per_page' => 3,
                'upsell_products_heading' => esc_html__( 'You may also like…', 'xenial' ),
                'upsell_products_columns_per_row' => 3,
                'upsell_products_per_page' => 3,
                'cross_sell_products_heading' => esc_html__( 'You may be interested in…', 'xenial' ),
                'cross_sell_products_columns_per_row' => 3,
                'cross_sell_products_per_page' => 3,
                'woo_onsale_display' => 'default',
                'woo_onsale_text' => esc_html__( 'On Sale', 'xenial' ),
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $woocommerce_customize_defaults );

        return $customize_defaults;
    }
    /**
     * Adds default values for WooCommerce custommizer settings.
     * 
     * Hooked - xenial_get_woocommerce_customize_defaults
     */ 
    add_filter( 'xenial_customize_defaults', 'xenial_get_woocommerce_customize_defaults' );
}


/**
 * Register customize settings for WooCommerce.
 * 
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */ 
if ( ! function_exists( 'xenial_woocommerce_customize_register' ) ) {

    function xenial_woocommerce_customize_register( $wp_customize ) {

        $wp_customize->get_panel( 'woocommerce' )->priority = 13;

        xenial_divider_field( 
            'woo_related_products_divider', 
            array( 
                'priority' => 10,
                'section' => 'woocommerce_product_catalog', 
            ) 
        );

        xenial_info_field(
            'woo_related_products_info',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Related Products', 'xenial' )
            )
        );

        xenial_text_field(
            'related_products_heading',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Related Products Heading', 'xenial' ),
                'default' => xenial_get_customize_default( 'related_products_heading' )
            )
        );

        xenial_range_control_field(
            'related_products_columns_per_row',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per row', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 6,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'related_products_columns_per_row' )
            )
        );

        xenial_range_control_field(
            'related_products_per_page',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per page', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 30,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'related_products_per_page' )
            )
        );


        xenial_divider_field( 
            'woo_upsell_products_divider', 
            array( 
                'priority' => 10,
                'section' => 'woocommerce_product_catalog', 
            ) 
        );

        xenial_info_field(
            'woo_upsell_products_info',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Upsell Products', 'xenial' )
            )
        );

        xenial_text_field(
            'upsell_products_heading',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Upsell Products Heading', 'xenial' ),
                'default' => xenial_get_customize_default( 'upsell_products_heading' )
            )
        );

        xenial_range_control_field(
            'upsell_products_columns_per_row',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per row', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 5,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'upsell_products_columns_per_row' )
            )
        );

        xenial_range_control_field(
            'upsell_products_per_page',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per page', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 30,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'upsell_products_per_page' )
            )
        );



        xenial_divider_field( 
            'woo_crosssell_products_divider', 
            array( 
                'priority' => 10,
                'section' => 'woocommerce_product_catalog', 
            ) 
        );

        xenial_info_field(
            'woo_cross_sell_products_info',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Cross Sell Products', 'xenial' )
            )
        );

        xenial_text_field(
            'cross_sell_products_heading',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Cross Sell Products Heading', 'xenial' ),
                'default' => xenial_get_customize_default( 'cross_sell_products_heading' )
            )
        );

        xenial_range_control_field(
            'cross_sell_products_columns_per_row',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per row', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 5,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'cross_sell_products_columns_per_row' )
            )
        );

        xenial_range_control_field(
            'cross_sell_products_per_page',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Products per page', 'xenial' ),
                'input_attrs' => array(
                    'min'       => 1,
                    'max'       => 30,
                    'step'      => 1,
                ),
                'responsive' => false,
                'defaults' => xenial_get_customize_default( 'cross_sell_products_per_page' )
            )
        );



        xenial_divider_field( 
            'woo_onsale_products_divider', 
            array( 
                'priority' => 10,
                'section' => 'woocommerce_product_catalog', 
            ) 
        );

        xenial_select_field(
            'woo_onsale_display',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Onsale As', 'xenial' ),
                'choices' => array(
                    'percent' => esc_html__( 'Discount Percentage', 'xenial' ),
                    'default' => esc_html__( 'Text', 'xenial' )
                ),
                'default' => xenial_get_customize_default( 'woo_onsale_display' )
            )
        );

        xenial_text_field(
            'woo_onsale_text',
            array(
                'priority' => 10,
                'section' => 'woocommerce_product_catalog',
                'label' => esc_html__( 'Onsale Text', 'xenial' ),
                'default' => xenial_get_customize_default( 'woo_onsale_text' )
            )
        );
    }

    /**
     * Register WooCommerce custommizer settings.
     * 
     * Hooked - xenial_woocommerce_customize_register
     */ 
    add_action( 'customize_register', 'xenial_woocommerce_customize_register' );
}