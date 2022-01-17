<?php 


if ( ! function_exists( 'xenial_single_page_header_template' ) ) {

	function xenial_single_page_header_template() {

		$templateArgs = array(
			'display_title' => true,
			'current_page' => 'page',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false,
			'classes' => ''
		);

		$containerWidth = xenial_get_option( 'page_single_header_width' );

		$titleTag = xenial_get_option( 'page_single_title_tag' );
		
		if ( $titleTag ) {
			$templateArgs['before_title'] = '<' . $titleTag . ' class="xe-title">';
			$templateArgs['after_title'] = '</' . $titleTag . '>';  
		}

		$displayBreadcrumbs = xenial_get_option( 'page_single_display_breadcrumbs' );
		$templateArgs['display_breadcrumbs'] = ( $displayBreadcrumbs == true ) ? true : false;

		
		$page_header_width = xenial_get_option( 'page_single_header_width' );
		switch ( $page_header_width ) {
			case 'wide' :
				$templateArgs['classes'] = 'xe-container-wide';
				break;
			case 'narrow' :
				$templateArgs['classes'] = 'xe-container-narrow';
				break;
			default :
				$templateArgs['classes'] = 'xe-container';
		}

		get_template_part( 'template-parts/page-header/content', 'header', $templateArgs );	
	}
}


if ( ! function_exists( 'xenial_page_single_content_container_classes' ) ) {

	function xenial_page_single_content_container_classes() {

		$contentContainerClasses = array();

		if ( xenial_has_sidebar() ) {

			$contentContainerClasses[] = 'xe-container';
			$contentContainerClasses[] = 'xe-flex-alt';
		} else {
			$contentContainerWidth = xenial_get_option( 'page_single_content_width' );

			if ( $contentContainerWidth ) {

				switch ( $contentContainerWidth ) {
					case 'wide' :
						$contentContainerClasses[] = 'xe-container-wide';
						break;
					case 'narrow' :
						$contentContainerClasses[] = 'xe-container-narrow';
						break;
					default :
						$contentContainerClasses[] = 'xe-container';
						$contentContainerClasses[] = 'xe-flex-alt';
				}
			} else {
				$contentContainerClasses[] = 'xe-container';
				$contentContainerClasses[] = 'xe-flex-alt';
			}
		}

		$contentContainerClasses = apply_filters( 'xenial_page_single_content_container_classes', $contentContainerClasses );

		echo esc_attr( implode( ' ', $contentContainerClasses ) );
	}
}



if ( ! function_exists( 'xenial_page_title_template' ) ) {

	function xenial_page_title_template() {

		$page_title_tag = xenial_get_option( 'page_single_title_tag' );

		$page_title_tag = ( $page_title_tag ) ? $page_title_tag : 'h1';  
		?>
		<div class="xe-post-title xe-entry-title">
			<?php 
			printf( 
				/* translators: 1: Heading Tag, 2: Page title. */
				__( '<%1$s class="xe-title">%2$s</%1$s>', 'xenial' ), 
				$page_title_tag, 
				wp_kses_post( get_the_title() ) 
			);
			?>
	    </div>
		<?php
	}
}