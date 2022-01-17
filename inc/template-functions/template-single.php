<?php 


if ( ! function_exists( 'xenial_single_header_template' ) ) {
	function xenial_single_header_template() {

		$templateArgs = array(
			'current_page' => 'single',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false,
			'classes' => 'xe-container',
			'display_title' => false
		);

		$containerWidth = xenial_get_option( 'post_single_breadcrumbs_width' );

		$titleTag = 'h1';

		if ( $titleTag ) {
			$templateArgs['before_title'] = '<' . $titleTag . ' class="xe-title">';
			$templateArgs['after_title'] = '<' . $titleTag . '>';  
		}

		$displayBreadcrumbs = xenial_get_option( 'post_single_display_breadcrumbs' );
		$templateArgs['display_breadcrumbs'] = ( $displayBreadcrumbs == true ) ? true : false;

		if ( $displayBreadcrumbs ) {
			$breadcrumbsWidth = xenial_get_option( 'post_single_breadcrumbs_width' );
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


if ( ! function_exists( 'xenial_single_content_footer_template' ) ) {
	function xenial_single_content_footer_template() {
		$contents = xenial_get_option( 'post_single_content_elements' );
		?>
		<section class="xe-post-tags">
			<?php 
			if ( in_array( 'tags', $contents ) ) {
				?>
				<div class="post-tags">
		            <?php xenial_get_post_tags(); ?>
		        </div><!-- .post-tags -->
				<?php
			} 

			if ( in_array( 'updated_date', $contents ) && get_post_type() == 'post' ) {
				?>
				<div class="xe-lastupdated-info">
		            <p class="no-margin">
		                <span class="icon"><i class="ti-pencil"></i></span> 
		                <?php
		                printf(
		                	/* translators: %s: post updated date. */
		                	esc_html__( 'Last updated on %s', 'xenial' ),
		                	xenial_get_post_updated_date()
		                );
		                ?>
		            </p><!-- .no-margin -->
		        </div><!-- .xe-lastupdated-info -->
				<?php
			}
			?>
		</section><!-- .xe-post-tags -->
		<?php
	}
}


if ( ! function_exists( 'xenial_author_box_template' ) ) {
	function xenial_author_box_template() {
		$displayAuthorBox = xenial_get_option( 'post_single_display_author_box' );
		if ( ! $displayAuthorBox ) {
			return;
		}
		$args = [];
		get_template_part( 'template-parts/content/content', 'author-box', $args );
	}
}


if ( ! function_exists( 'xenial_post_navigation_template' ) ) {
	function xenial_post_navigation_template() {
		$displayPostNavigation = xenial_get_option( 'post_single_display_posts_navigation' );
		if ( ! $displayPostNavigation ) {
			return;
		}

		$args = [
			'previousFormat' => '<div class="nav-previous">%link</div>',
			'previousLink' => sprintf(
	            '<div class="nav-content"><span>%s</span></div>',
	            '%title'
	        ),
			'nextFormat' => '<div class="nav-next">%link</div>',
			'nextLink' => sprintf(
	            '<div class="nav-content"><span>%s</span></div>',
	            '%title'
	        )
		];

		$previousPostLinkTitle = xenial_get_option( 'post_single_prev_post_link_title_label' );
		$nextPostLinkTitle = xenial_get_option( 'post_single_next_post_link_title_label' );
		$displayImage = xenial_get_option( 'post_single_display_post_image_in_post_navigation' );

		if ( $previousPostLinkTitle ) {
			$args['previousFormat'] = '<div class="nav-previous"><h6 class="nav-title">' . esc_html( $previousPostLinkTitle ) . '</h6>%link</div>';
		} 

		if ( $nextPostLinkTitle ) {
			$args['nextFormat'] = '<div class="nav-next"><h6 class="nav-title">' . esc_html( $nextPostLinkTitle ) . '</h6>%link</div>';
		}

		if ( $displayImage ) {
			$args['previousLink'] = sprintf(
	            '<div class="nav-content">%1$s <span>%2$s</span></div>',
	            get_the_post_thumbnail( get_previous_post(), array( 75, 75 ) ),
	            '%title'
	        );

	        $args['nextLink'] = sprintf(
	            '<div class="nav-content"><span>%2$s</span> %1$s</div>',
	            get_the_post_thumbnail( get_next_post(), array( 75, 75 ) ),
	            '%title'
	        );
		}  

		get_template_part( 'template-parts/content/content', 'post-navigation', $args );
	}
}



if ( ! function_exists( 'xenial_related_posts_template' ) ) {
	function xenial_related_posts_template() {

		$displayRelatedPosts = xenial_get_option( 'post_single_display_related_posts' );

		if ( ! $displayRelatedPosts ) {
			return;
		}

		$postCardElements = xenial_get_option( 'post_single_related_posts_elements' );
		$postMetaElements = xenial_get_option( 'post_single_related_posts_meta' );
		$postsPerPage = ( xenial_get_option( 'post_single_related_posts_number' ) ) ? absint( xenial_get_option( 'post_single_related_posts_number' ) ) : 2;
		$queryPostsBy = xenial_get_option( 'post_single_related_posts_by' );

		$args = [];

		$currentPostID = get_queried_object_id();

		

		$queryArgs = [
			'post_type' => 'post',
			'post__not_in' => [ $currentPostID ],
			'posts_per_page' => $postsPerPage,
			'ignore_sticky_posts' => true
		];

		$taxQuery = [];

		if ( $queryPostsBy == 'categories' ) {

			$currentPostCategories = wp_get_post_categories( $currentPostID );

			if ( $currentPostCategories ) {
				$taxQuery[] = [
	                'taxonomy' => 'category',
	                'field'    => 'term_id',
	                'terms'    => $currentPostCategories,
	                'operator' => 'IN',
	            ];
			}
		} else {

			$currentPostTags = wp_get_post_tags( $currentPostID );
			
			if ( $currentPostTags ) {
				$tagTerms = [];
				foreach( $currentPostTags as $currentPostTag ) {
					$tagTerms[] = $currentPostTag->term_id;
				}
				$taxQuery[] = [
	                'taxonomy' => 'post_tag',
	                'field'    => 'term_id',
	                'terms'    => $tagTerms,
	                'operator' => 'IN',
	            ];
			}
		}

		$queryArgs['tax_query'] = [ 'relation' => 'OR', $taxQuery ];

		$posts = new WP_Query( $queryArgs );
		$args['posts'] = $posts;

		get_template_part( 'template-parts/content/content', 'related-posts', $args );
	}
}


if ( ! function_exists( 'xenial_single_grouped_post_meta_template' ) ) {
	function xenial_single_grouped_post_meta_template() {
		$postMetas = xenial_get_option( 'post_single_meta_elements' );
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
			                    <?php xenial_get_post_categories( ); ?>
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


if ( ! function_exists( 'xenial_post_single_content_container_classes' ) ) {

	function xenial_post_single_content_container_classes() {

		$contentContainerClasses = array();

		if ( xenial_has_sidebar() ) {

			$contentContainerClasses[] = 'xe-container';
			$contentContainerClasses[] = 'xe-flex-alt';
		} else {
			$contentContainerWidth = xenial_get_option( 'post_single_content_width' );

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

		$contentContainerClasses = apply_filters( 'xenial_post_single_content_container_classes', $contentContainerClasses );

		echo esc_attr( implode( ' ', $contentContainerClasses ) );
	}
}