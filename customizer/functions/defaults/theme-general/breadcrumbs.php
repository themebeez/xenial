<?php 

if ( ! function_exists( 'xenial_get_customizer_default_breadcrumbs_values' ) ) {

    function xenial_get_customizer_default_breadcrumbs_values( $customize_defaults ) {

        $theme_breadcrumbs_customize_defaults = apply_filters(
            'xenial_theme_breadrumbs_customize_defaults_filter',
            array(
                'breadcrumbs_source' => 'default',
                'breadcrumbs_separator' => 'default',
                'breadcrumbs_home_item' => 'text',
                'breadcrumbs_home_page_text' => esc_html__( 'Home', 'xenial' ),
                'breadcrumbs_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => '',
                ),
                'breadcrumbs_text_color' => '{"initial":"","hover":""}'
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $theme_breadcrumbs_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_breadcrumbs_values' );
}