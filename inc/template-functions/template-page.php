<?php 


if ( ! function_exists( 'xenial_single_page_header_template' ) ) {

	function xenial_single_page_header_template() {

		$template_args = array(
			'display_title' => true,
			'current_page' => 'page',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false,
			'classes' => ''
		);

		if ( xenial_page_has_header_enabled() == false ) {
			return;
		}

		$page_header_width = '';

		$page_header_width_meta = get_post_meta( get_the_ID(), 'xenial_page_header_width', true );

		if ( $page_header_width_meta == 'default' || empty( $page_header_width_meta ) ) {
			$page_header_width = xenial_get_option( 'page_single_header_width' );
		} else {
			$page_header_width = $page_header_width_meta;
		}

		if ( $page_header_width ) {
			switch ( $page_header_width ) {
				case 'wide' :
					$template_args['classes'] = 'xe-container-wide';
					break;
				case 'narrow' :
					$template_args['classes'] = 'xe-container-narrow';
					break;
				default :
					$template_args['classes'] = 'xe-container';
			}
		}

		$disable_page_title_meta = get_post_meta( get_the_ID(), 'xenial_post_disable_page_title', true );

		if ( $disable_page_title_meta == false ) {
			$template_args['display_title'] = true;
			$titleTag = xenial_get_option( 'page_single_title_tag' );		
			if ( $titleTag ) {
				$template_args['before_title'] = '<' . $titleTag . ' class="xe-title">';
				$template_args['after_title'] = '</' . $titleTag . '>';  
			}
		} else {
			$template_args['display_title'] = false;
		}

		$template_args['display_breadcrumbs'] = ( xenial_page_header_has_breadcrumbs_enabled() ) ? true : false;		

		$template_args = apply_filters( 'xenial_filter_page_header_template_arguments', $template_args );		

		get_template_part( 'template-parts/page-header/content', 'header', $template_args );	
	}
}


if ( ! function_exists( 'xenial_page_single_content_container_classes' ) ) {

	function xenial_page_single_content_container_classes() {

		$contentContainerClasses = array();

		if ( xenial_has_sidebar() ) {

			$contentContainerClasses[] = 'xe-container';
			$contentContainerClasses[] = 'xe-flex-alt';
		} else {

			$content_width = '';

			$page_meta_content_width = get_post_meta( get_the_ID(), 'xenial_post_content_layout' , true );

			if ( $page_meta_content_width == 'default' || empty( $page_meta_content_width ) ) {
				$content_width = xenial_get_option( 'page_single_content_width' );
			} else {
				$content_width = $page_meta_content_width;
			}

			if ( $content_width ) {

				switch ( $content_width ) {
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