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

/** 
 * Remove classifier form the archive title.
 * 
 * @param string $title The archive title.
 * @return string The archive title.
 */
if ( ! function_exists( 'xenial_the_archive_title' ) ) {

	function xenial_the_archive_title( $title ) {

		if ( is_category() ) {    
			$title = single_cat_title( '', false );    
		} elseif ( is_tag() ) {    
			$title = single_tag_title( '', false );    
		} elseif ( is_author() ) {    
			$title = get_the_author();    
		} elseif ( is_tax() ) { //for custom post types
			$title = single_term_title( '', false );
		} elseif (is_post_type_archive()) {
			$title = post_type_archive_title( '', false );
		}

		return $title;    
	}

	add_filter( 'get_the_archive_title', 'xenial_the_archive_title' );
}