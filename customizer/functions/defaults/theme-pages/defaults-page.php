<?php 


if ( ! function_exists( 'xenial_get_customizer_defaults_page_single_values' ) ) {

    function xenial_get_customizer_defaults_page_single_values( $customize_defaults ) {

        $page_single_customize_defaults = apply_filters( 
            'xenial_page_single_customize_defaults', 
            array(
                'page_single_header_width' => 'container',
                'page_single_title_tag' => 'h1',
                'page_single_display_breadcrumbs' => true,

                'page_single_header_background_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'page_single_header_title_color' => '{"desktop":{"initial":""},"tablet":{"initial":""},"mobile":{"initial":""}}',
                'page_single_header_breadcrumb_text_color' => '{"desktop":{"initial":"","hover":""},"tablet":{"initial":"","hover":""},"mobile":{"initial":"","hover":""}}',

                'page_single_title_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
                'page_single_title_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
                'page_single_title_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
                'page_single_title_font_weight' => '400',
                'page_single_title_font_style' => 'normal',
                'page_single_title_text_transform' => 'inherit',


                'page_single_content_width' => 'container',
                'page_single_content_elements' => array( 'image' ),
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $page_single_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_defaults_page_single_values' );
}