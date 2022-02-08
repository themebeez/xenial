<?php 

add_action( 'wp_enqueue_scripts', 'xenial_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'xenial_enqueue_styles' );





add_action( 'wp_footer', 'xenial_scroll_top_template' );