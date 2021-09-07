<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php xenial_get_active_theme_skin_data_attr(); ?>>
	<?php 
	if( function_exists( 'wp_body_open' ) ) { 

		wp_body_open(); 
	} 
	?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xenial' ); ?></a>

		<?php do_action( 'xenial_header' ); ?>

		<?php

		/**
		* Hook - xenial_page_header.
		*
		* @hooked xenial_page_header_template - 10
		*/
		do_action( 'xenial_page_header' );

		if ( xenial_is_breadcrumbs_in_separate_container() ) {
			
			/**
			* Hook - xenial_breadcrumbs.
			*
			* @hooked xenial_breadcrumbs_template - 10
			*/
			do_action( 'xenial_breadcrumbs' );
		}

		/**
		* Hook - xenial_banner.
		*
		* @hooked xenial_banner_template - 10
		*/
		do_action( 'xenial_banner' );
		?>

		<div id="content" class="site-content">