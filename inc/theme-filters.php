<?php


/**
* Filter for default archive links in archive widget.
*/
if ( ! function_exists( 'xenial_archive_widget_archive_links' ) ) {

	function xenial_archive_widget_archive_links( $links ) {

	    $links = str_replace('</a>&nbsp;(', '</a> <span class="count">(', $links);
	    $links = str_replace(')', ')</span>', $links);
	    return $links;
	}

	add_filter( 'get_archives_link', 'xenial_archive_widget_archive_links' );
}


/**
 * Filter the default categories widget
 */
if ( ! function_exists( 'xenial_category_count_span' ) ) {

	function xenial_category_count_span( $links ) {

	    $links = str_replace( '</a> (', '</a><span class="count">(', $links );
	    $links = str_replace( ')', ')</span>', $links );
	    return $links;
	}
	
	add_filter( 'wp_list_categories', 'xenial_category_count_span' );
}