<?php 
/**
 * Template part for displaying scroll top button.
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
?>
<button class="xe-button circle <?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>" id="xe-backtotop-button"><i class="ti-angle-up"></i></button><!-- .xe-button -->