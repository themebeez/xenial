<?php

/**
 * Sanitization callback function for number field with value in range.
 */
if ( ! function_exists( 'xenial_sanitize_range' ) ) {

    function xenial_sanitize_range( $input, $setting ) {

        if(  $input <= $setting->manager->get_control( $setting->id )->input_attrs['max'] ) {

            if( $input >= $setting->manager->get_control( $setting->id )->input_attrs['min'] ) {

                return (int) $input;
            }
        }
    }
}


/**
 * Sanitization callback function for number field and returns integer value.
 */
if ( ! function_exists( 'xenial_sanitize_integer_number' ) ) {

    function xenial_sanitize_integer_number( $input, $setting ) {

        return ( is_int( (int) $input ) ) ? (int) $input : $setting->default;
    }
}


/**
 * Sanitization callback function for number field and returns float value.
 */
if ( ! function_exists( 'xenial_sanitize_float_number' ) ) {

    function xenial_sanitize_float_number( $input, $setting ) {

        return ( is_float( (float) $input ) ) ? (float) $input : $setting->default;
    }
}


/**
 * Sanitization callback function for select field.
 */
if ( !function_exists('xenial_sanitize_select') ) {

    function xenial_sanitize_select( $input, $setting ) {
        
        $choices = $setting->manager->get_control( $setting->id )->choices;
        
        return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
    }
}

if ( ! function_exists( 'xenial_sanitize_multi_select' ) ) {

    function xenial_sanitize_multi_select( $input, $setting ) {

        $choices = $setting->manager->get_control( $setting->id )->choices;

        foreach ( $input as $index ) {
            if ( ! array_key_exists( $index, $choices ) ) {
                return $setting->default;
            }
        }

        return $input;
    }
}



if ( ! function_exists( 'xenial_sanitize_multi_checkboxes_value' ) ) {

    function xenial_sanitize_multi_checkboxes_value( $values ) {

        $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

        return ! empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
    }
}