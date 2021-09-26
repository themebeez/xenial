<?php
/**
 * Template part for displaying page header.
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
<header class="xe-pageheader">
    <div class="xe-container">
		<aside class="xe-pagetitle-holder">
			<div class="xe-post-title xe-entry-title">
	            <h1 class="xe-title"><?php the_title(); ?></h1><!-- .xe-title -->
	        </div><!-- .xe-post-title -->
		</aside><!-- .xe-pagetitle-holder -->
        <nav class="xe-breadcrumb" role="navigation">
            <ul class="trail-items">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item"><a href="archive.html"><span>eCommerce</span></a></li>
                <li class="trail-item trail-end"><a href="single.html"><span>These Are the Handpicked April Top selling brands.</a></li>
            </ul>
        </nav><!-- // xe-breadcrumb -->
    </div><!-- .xe-container -->
</header><!-- .xe-pageheader -->