<?php 


if ( ! function_exists( 'xenial_archive_page_header_template' ) ) {
	function xenial_archive_page_header_template() {

		$templateArgs = array(
			'current_page' => '',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false
		);

		if ( is_home() ) {
			$templateArgs['current_page'] = 'home';
		}

		if ( is_archive() ) {
			$templateArgs['current_page'] = 'archive';
		}

		if ( is_search() ) {
			$templateArgs['current_page'] = 'search';
		}

		$containerWidth = xenial_get_option( 'archive_page_header_width' );

		$titleTag = xenial_get_option( 'archive_title_tag' );
		if ( $titleTag ) {
			$templateArgs['before_title'] = '<' . $titleTag . ' class="xe-title">';
			$templateArgs['after_title'] = '</' . $titleTag . '>';  
		}

		$displayBreadcrumbs = xenial_get_option( 'archive_page_display_breadcrumbs' );
		$templateArgs['display_breadcrumbs'] = ( $displayBreadcrumbs == true ) ? true : false;

		if ( $displayBreadcrumbs ) {
			$breadcrumbsWidth = xenial_get_option( 'archive_page_header_width' );
			switch ( $breadcrumbsWidth ) {
				case 'wide' :
					$templateArgs['classes'] = 'xe-container-wide';
					break;
				case 'narrow' :
					$templateArgs['classes'] = 'xe-container-narrow';
					break;
				default :
					$templateArgs['classes'] = 'xe-container';
			}
		}

		get_template_part( 'template-parts/page-header/content', 'header', $templateArgs );	
	}
}



if ( ! function_exists( 'xenial_archive_grouped_post_meta_template' ) ) {
	function xenial_archive_grouped_post_meta_template() {
		$postMetas = xenial_get_option( 'archive_post_meta' );
		if ( ! $postMetas ) {
			return;
		}
		?>
		<div class="xe-post-metas xe-entry-metas slanted-seperator">
            <ul class="list-unstyled">
            	<?php
				foreach ( $postMetas as $postMeta ) {
					switch ( $postMeta ) {
						case 'author' :
							?>
							<li class="meta author">
			                    <?php xenial_get_post_author(); ?>
			                </li><!-- .meta.author -->
							<?php
							break;
						case 'date' :
							?>
							<li class="meta date">
			                    <?php xenial_get_posted_date(); ?>
			                </li><!-- .meta.date -->
							<?php
							break;
						case 'comment' :
							?>
							<li class="meta comments">
			                    <?php xenial_get_post_comments(); ?>
			                </li><!-- .meta.comments -->
							<?php
							break;
						case 'categories' :
							?>
							<li class="meta categories">
			                    <?php xenial_get_post_categories(); ?>
			                </li><!-- .meta.categories -->
							<?php
							break;
						case 'read_time' :
							?>
							<li class="meta readtime">
			                    <?php xenial_get_post_read_time(); ?>
			                </li><!-- .meta.readtime -->
							<?php
							break;
						default :
							break;
					}
				}
				?>
			</ul><!-- .list-unstyled -->
		</div><!-- .xe-post-metas.xe-entry-metas -->
		<?php
	}
}


if ( ! function_exists( 'xenial_archive_read_more_template' ) ) {
	function xenial_archive_read_more_template() {
		$readMoreButtonLabel = xenial_get_option( 'archive_read_more_button_title' );
		if ( ! $readMoreButtonLabel ) {
			return;
		}
		?>
		<div class="xe-continue-reading">
	        <a href="<?php the_permalink(); ?>" class="xe-button xe-false-button has-underline xe-post-link"><?php echo esc_html( $readMoreButtonLabel ); ?></a>
	    </div><!-- .xe-continue-reading -->
		<?php
	}
}


if ( ! function_exists( 'xenial_archive_content_container_classes' ) ) {

	function xenial_archive_content_container_classes() {

		$contentContainerClasses = array();

		if ( xenial_has_sidebar() ) {

			$contentContainerClasses[] = 'xe-container';
			$contentContainerClasses[] = 'xe-flex-alt';
		} else {
			$contentContainerWidth = xenial_get_option( 'archive_content_container_width' );

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

		$contentContainerClasses = apply_filters( 'xenial_archive_content_container_classes', $contentContainerClasses );

		echo esc_attr( implode( ' ', $contentContainerClasses ) );
	}
}