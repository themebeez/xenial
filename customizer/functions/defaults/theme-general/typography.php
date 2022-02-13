<?php 


if ( ! function_exists( 'xenial_get_customizer_default_typography_values' ) ) {

    function xenial_get_customizer_default_typography_values( $customize_defaults ) {

        $theme_typography_customize_defaults = apply_filters( 
            'xenial_theme_typography_customize_defaults', 
            array(
                'body_font_type' => 'system_font',
                'body_system_font_family' => 'arial',
                'body_system_font_weight' => '400',
                'body_google_font' => json_encode(
                    array(
                        'font' => 'Inter',
                        'regularweight' => array( 'regular' ),
                        'boldweight' => array( '400' ),
                        'category' => 'sans-serif'
                    )
                ),
                'body_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'body_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'body_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'headings_font_type' => 'system_font',
                'headings_system_font_family' => 'helvetica',
                'headings_system_font_weight' => '600',
                'headings_google_font' => json_encode(
                    array(
                        'font' => 'Inter',
                        'regularweight' => array( 'regular' ),
                        'boldweight' => array( '600' ),
                        'category' => 'sans-serif'
                    )
                ),
                'h1_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h1_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h1_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h2_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h2_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h2_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h3_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h3_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h3_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h4_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h4_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h4_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h5_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h5_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h5_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h6_font_size' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h6_line_height' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
                'h6_letter_spacing' => array(
                    'desktop' => '',
                    'tablet' => '',
                    'mobile' => ''
                ),
            )
        );

        $customize_defaults = array_merge( $customize_defaults, $theme_typography_customize_defaults );

        return $customize_defaults;
    }

    add_filter( 'xenial_customize_defaults', 'xenial_get_customizer_default_typography_values' );
}