<?php 


if ( ! function_exists( 'xenial_get_customizer_default_button_values' ) ) {

    function xenial_get_customizer_default_button_values( $customize_defaults ) {

        $theme_buttons_customize_defaults = apply_filters(
            'xenial_default_buttons_customize_defaults',
            array(
                'btn_padding' => array(
                    'top' => 0,
                    'right' => 0,
                    'bottom' => 0,
                    'left' => 0
                ),
                'btn_txt_color' => '{"initial":"","hover":""}',
                'btn_bg_color' => '{"initial":"","hover":""}',
                'btn_border' => '{"expanded":false,"border_style":"solid","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',

                'txt_btn_txt_color' => '{"initial":"","hover":""}',
                'txt_btn_border_width' => 3,
                'txt_btn_border_color' => '{"initial":"","hover":""}'
            )
        );
        

        $customize_defaults = array_merge( $customize_defaults, $theme_buttons_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_button_values' );
}