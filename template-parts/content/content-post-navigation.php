<?php 
/**
 * Template part for displaying posts navigation.
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
<section class="xe-post-navigation">
    <?php
    // Previous post link.
    previous_post_link( $args['previousFormat'], $args['previousLink'] );

    // Next post link.
    next_post_link( $args['nextFormat'], $args['nextLink'] );
    ?>
</section><!-- .xe-post-navigation -->