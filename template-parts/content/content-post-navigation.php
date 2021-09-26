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
    previous_post_link(
        '<div class="nav-previous"><h6 class="nav-title">' . esc_html__( 'Previous Post', 'xenial' ) . '</h6>%link</div>',
        sprintf(
            '<div class="nav-content">%1$s <span>%2$s</span></div>',
            get_the_post_thumbnail( get_previous_post(), array( 75, 75 ) ),
            '%title'
        )
    );

    // Next post link.
    next_post_link(
        '<div class="nav-next"><h6 class="nav-title">' . esc_html__( 'Next Post', 'xenial' ) . '</h6>%link</div>',
        sprintf(
            '<div class="nav-content"><span>%2$s</span> %1$s</div>',
            get_the_post_thumbnail( get_next_post(), array( 75, 75 ) ),
            '%title'
        )
    );
    ?>
</section><!-- .xe-post-navigation -->