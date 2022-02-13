<?php 


if ( ! function_exists( 'xenial_get_customizer_default_color_values' ) ) {

    function xenial_get_customizer_default_color_values( $customize_defaults ) {

        $theme_colors_customize_defaults = apply_filters(
            'xenial_theme_colors_customize_defaults_filter', 
            array(
                'primary_color' => '{"initial":""}',
                'secondary_color' => '{"initial":""}',
                'text_color' => '{"initial":""}',
                'headings_color' => '{"initial":""}',
                'link_color' => '{"initial":"","hover":""}',
                'border_color' => '{"initial":""}',
                'input_fields_border_color' => '{"initial":""}'
            )
        );        

        $customize_defaults = array_merge( $customize_defaults, $theme_colors_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_color_values' );
}