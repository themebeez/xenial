<?php 


if ( ! function_exists( 'xenial_get_customizer_default_layout_values' ) ) {

    function xenial_get_customizer_default_layout_values( $customize_defaults ) {

        $layout_defaults = apply_filters( 
            'xenial_layout_customizer_defaults_filter', 
            array(
                'site_layout' => 'default',
                'site_container_width' => 1200,
                'container_width' => 1200,
                'narrow_container_width' => 750,
                'wide_container_side_spacings' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                )
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $layout_defaults );

        return $customize_defaults;
    }
}
add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_layout_values' );