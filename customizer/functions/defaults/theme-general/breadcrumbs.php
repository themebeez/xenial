<?php 

if ( ! function_exists( 'xenial_get_customizer_default_breadcrumbs_values' ) ) {
    function xenial_get_customizer_default_breadcrumbs_values() {
        return array(
            'breadcrumbs_source' => 'default',
            'breadcrumbs_separator' => 'default',
            'breadcrumbs_home_item' => 'text',
            'breadcrumbs_home_page_text' => esc_html__( 'Home', 'xenial' ),
            'breadcrumbs_font_size' => [
                'desktop' => '',
                'tablet' => '',
                'mobile' => '',
            ],
            'breadcrumbs_text_color' => '',
            'breadcrumbs_link_hover_color' => ''
        );
    }
}