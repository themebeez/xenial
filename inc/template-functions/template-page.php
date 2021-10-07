<?php 


if ( ! function_exists( 'xenial_single_page_header_template' ) ) {
	function xenial_single_page_header_template() {

		$templateArgs = array(
			'current_page' => 'page',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false
		);

		$containerWidth = xenial_get_option( 'page_single_header_width' );

		$titleTag = xenial_get_option( 'page_single_title_tag' );

		if ( $titleTag ) {
			$templateArgs['before_title'] = '<' . $titleTag . ' class="xe-title">';
			$templateArgs['after_title'] = '<' . $titleTag . '>';  
		}

		$displayBreadcrumbs = xenial_get_option( 'page_single_display_breadcrumbs' );
		$templateArgs['display_breadcrumbs'] = ( $displayBreadcrumbs == true ) ? true : false;

		get_template_part( 'template-parts/page-header/content', 'header', $templateArgs );	
	}
}