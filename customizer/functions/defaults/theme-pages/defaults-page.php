<?php 


if ( ! function_exists( 'xenial_get_customizer_defaults_page_single_values' ) ) {
    function xenial_get_customizer_defaults_page_single_values() {
        return array(
            'page_single_header_width' => 'container',
            'page_single_title_tag' => 'h1',
            'page_single_display_breadcrumbs' => true,

            'page_single_header_background_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}',
            'page_single_header_title_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}',
            'page_single_header_breadcrumb_text_color' => '{"desktop":{"initial":"","link":"","hover":"","active":""},"tablet":{"initial":"","link":"","hover":"","active":""},"mobile":{"initial":"","link":"","hover":"","active":""}}',

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
        );
    }
}