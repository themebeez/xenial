<?php 


if ( ! function_exists( 'xenial_get_customizer_default_button_values' ) ) {
    function xenial_get_customizer_default_button_values() {
        return array(
            'btn_padding' => array(
                'top' => 0,
                'right' => 0,
                'bottom' => 0,
                'left' => 0
            ),
            'btn_txt_color' => '{"initial":"","link":"","hover":"","active":""}',
            'btn_bg_color' => '{"initial":"","link":"","hover":"","active":""}',
            'btn_border' => '{"expanded":false,"border_style":"solid","border_widths":{"unit":"px","top":"","right":"","bottom":"","left":"","locked":true},"border_radius":{"unit":"px","top_left":"","top_right":"","bottom_left":"","bottom_right":"","locked":true},"border_colors":{"top":"","right":"","bottom":"","left":"","initial":"","hover":"","active":""}}',

            'txt_btn_txt_color' => '{"initial":"","link":"","hover":"","active":""}',
            'txt_btn_border_width' => 3,
            'txt_btn_border_color' => '{"initial":"","link":"","hover":"","active":""}'
        );
    }
}