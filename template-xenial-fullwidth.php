<?php
/**
 * Template Name: Xenial Fullwidth
 *
 * 100% wide page template without vertical spacing.
 *
 * @package     Xenial
 * @author      Themebeez <themebeez@gmail.com>
 * @since       1.0.0
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content', 'xenial-fullwidth' );
	endwhile;
endif;
get_footer();
