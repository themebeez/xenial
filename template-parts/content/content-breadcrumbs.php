<?php 
/**
 * Template part for displaying breadcrumbs.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

switch ( $args['source'] ) {
    case 'yoast' :        
        if ( function_exists( 'yoast_breadcrumb' ) ) {
            yoast_breadcrumb();
        } else {
            xenial_get_default_breadcrumbs();
        }              
        break;
    case 'rank-math' :
        if ( function_exists('rank_math_the_breadcrumbs') ) { 
            rank_math_the_breadcrumbs();
        } else {
            xenial_get_default_breadcrumbs();
        }              
        break;
    case 'bcn' :
        if ( function_exists( 'bcn_display' ) ) {
            bcn_display();
        } else {
            xenial_get_default_breadcrumbs();
        }              
        break;
    default : 
        xenial_get_default_breadcrumbs();          
}