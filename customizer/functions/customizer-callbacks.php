<?php
if ( ! function_exists( 'xenial_get_option' ) ) {

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function xenial_get_option( $key ) {

        if ( empty( $key ) ) {

            return;
        }

        $default_keys_values = xenial_get_customizer_defaults();

        if ( array_key_exists( $key, $default_keys_values ) ) {

            // Get default key value.
            $default_key_value = $default_keys_values[ $key ];

            // Get and return customizer option set value using default value.
            return get_theme_mod( $key, $default_key_value );
        } else {

            // Return customizer option set value without using default value.
            return get_theme_mod( $key );
        }
    }
}



if ( ! function_exists( 'xenial_get_customize_default' ) ) {

    function xenial_get_customize_default( $customize_id ) {

        $customize_defaults = xenial_get_customizer_defaults();

        return ( isset( $customize_defaults[ $customize_id ] ) ) ? $customize_defaults[ $customize_id ] : '';
    }
}




if ( ! function_exists( 'xenial_get_customizer_defaults' ) ) {

    function xenial_get_customizer_defaults() {

        $defaults = array(
            'sidebar_default_position' => 'no-sidebar',
            'sidebar_post_single_position' => 'default',
            'sidebar_page_single_position' => 'default',
            'sidebar_archive_position' => 'default',
            'sidebar_width' => 30,
            'sidebar_widget_style' => 'default',
            'enable_sticky_sidebar' => false,
            'sidebar_responsive_position' => 'hide'
        );      

        $defaults = apply_filters( 'xenial_customize_defaults', $defaults );

        return $defaults;
    }
}





























