<?php 

if ( ! function_exists( 'xenial_get_customizer_default_breadcrumbs_values' ) ) {
    function xenial_get_customizer_default_breadcrumbs_values() {
        return array(
            'breadcrumbs_source' => 'default',
            'breadcrumbs_separator' => 'default',
            'breadcrumbs_home_item' => 'text',
            'breadcrumbs_home_page_text' => esc_html__( 'Home', 'xenial' ),
            'breadcrumbs_font_size' => array(
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ),
            'breadcrumbs_text_color' => array(
                'initial' => array(
                    'display' => true,
                    'default' => ''
                ),
                'link' => array(
                    'display' => true,
                    'default' => ''
                ),
                'hover' => array(
                    'display' => true,
                    'default' => ''
                ),
            )
        );
    }
}