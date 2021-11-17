<?php 

/**
 * Prints HTML with breadcrumbs.
 */
if ( ! function_exists( 'xenial_breadcrumbs_template' ) ) {

	function xenial_breadcrumbs_template() {

		$templateArgs = [
			'source' => 'default'
		];

		$templateArgs['source'] = xenial_get_option( 'breadcrumbs_source' );

		get_template_part( 'template-parts/content/content', 'breadcrumbs', $templateArgs );	
	}
}


/**
 * Prints HTML with numeric pagination.
 */
if ( ! function_exists( 'xenial_pagination_template' ) ) {

	function xenial_pagination_template() {

		$args = [];
		get_template_part( 'template-parts/content/content', 'pagination', $args );	
	}
}



/**
 * Prints HTML with archive default navigation.
 */
if ( ! function_exists( 'xenial_archive_navigation_template' ) ) {

	function xenial_archive_navigation_template() {

		$args = [];

		get_template_part( 'template-parts/content/content', 'pagination', $args );
	}
}