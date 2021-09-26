<?php


/**
 * Display the post title.
 * 
 */ 
if ( ! function_exists( 'xenial_post_title_template' ) ) {
	function xenial_post_title_template( $args ) {
		$enableLink = ( isset( $args['enableLink'] ) && $args['enableLink'] === true ) ? true : false;
		$titleTag = ( isset( $args['titleTag'] ) && $args['titleTag'] ) ? $args['titleTag'] : 'h2'; 
		$linkHTML = ( $enableLink ) ? '<a href="' . esc_url( get_permalink() ) . '">' . get_the_title() . '</a>' : get_the_title(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		$cssClass = [ 'xe-post-title' ];
		if ( isset( $args['cssClass'] ) && $args['cssClass'] ) {
			$cssClass = array_merge( $cssClass, $args['cssClass'] );
		}
 		?>
		<div class="<?php echo esc_attr( implode( ' ', $cssClass ) ); ?>">
			<?php echo '<' . $titleTag . ' class="xe-title">' . $linkHTML . '</' . $titleTag . '>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		</div><!-- .xe-post-title -->
		<?php
	}
}




/**
 * Display the post thumbnail.
 * 
 */ 
if ( ! function_exists( 'xenial_post_thumbnail_template' ) ) {
	function xenial_post_thumbnail_template( $args ) {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		$enablePostThumb = false;


		$currentPage = ( isset( $args['currentPage'] ) ) ? $args['currentPage'] : '';
		$thumbSize = ( isset( $args['thumbSize'] ) ) ? $args['thumbSize'] : 'thumbnail';
		$thumbnailCaption = wp_get_attachment_caption( get_post_thumbnail_id( get_the_ID() ) );
		$cssClass = [ 'post-thumbnail' ];
		if ( $currentPage === 'single' ) {
			$cssClass[] = 'xe-entry-thumbnail';
		}
		?>
		<div class="<?php echo esc_attr( implode( ' ', $cssClass ) ); ?>">
	        <figure class="xe-thumb">
	        	<?php
	        	if ( $currentPage != 'single' ) {
	        		?>
	        		<a href="<?php the_permalink() ?>" class="xe-link xe-thumb-link"><?php the_post_thumbnail( $thumbSize ); ?></a>
	        		<?php
	        	} else {
	        		the_post_thumbnail();

	        		if ( $thumbnailCaption ) {
		        		?>
		        		<figcaption><?php echo wp_kses_post( $thumbnailCaption ); ?></figcaption>
		        		<?php
		        	}
	        	}	        	
	        	?>
	        </figure><!-- .xe-thumb -->
	    </div><!-- .post-thumbnail -->
		<?php
	}
}

/**
 * Display the post excerpt.
 * 
 */ 
if ( ! function_exists( 'xenial_post_excerpt_template' ) ) {
	function xenial_post_excerpt_template() {
		if( get_the_excerpt() ) { 
			?>
		    <div class="xe-post-excerpt">
		        <?php the_excerpt(); ?>
		    </div><!-- .xe-post-excerpt -->
			<?php 
		}  
	}
}


/**
 * Display the post read more.
 * 
 */
if ( ! function_exists( 'xenial_post_read_more_template' ) ) {
	function xenial_post_read_more_template() {
		?>
		<div class="xe-continue-reading">
	        <a href="<?php the_permalink(); ?>" class="xe-button xe-false-button has-underline xe-post-link"><?php echo esc_html__( 'Continue reading', 'xenial' ); ?></a>
	    </div><!-- .xe-continue-reading -->
		<?php
	}
}


if ( ! function_exists( 'xenial_post_content_wrapper_before_template' ) ) {
	function xenial_post_content_wrapper_before_template() {
		?>
		<div class="entry-content">
		<?php
	}
}


if ( ! function_exists( 'xenial_post_content_wrapper_after_template' ) ) {
	function xenial_post_content_wrapper_after_template() {
		?>
		</div><!-- .entry-content -->
		<?php
	}
}

/**
 * Display the post content.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'xenial_post_content_template' ) ) {
	function xenial_post_content_template() {
		the_content();
	}
}


/**
 * Display the page links.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'xenial_post_wp_page_links_template' ) ) {
	function xenial_post_wp_page_links_template() {
		wp_link_pages( 
			[
				'before' => '<div class="page-links">',
				'after'  => '</div>',
			] 
		);
	}
}


/**
 * Display the edit post link.
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'xenial_edit_post_link_template' ) ) {
	function xenial_edit_post_link_template() {
		if ( ! get_edit_post_link() ) {
			return;
		}
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'xenial' ),
					[
						'span' => [
							'class' => [],
						],
						'i' => [
							'class' => [],
						],
					]
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
}


if ( ! function_exists( 'xenial_post_categories_meta_template' ) ) {
	function xenial_post_categories_meta_template() {
		?>
		<div class="xe-categories xe-entry-categories">
            <?php xenial_get_post_categories( true ); ?>
        </div><!-- .xe-categories -->
		<?php
	}
}



if ( ! function_exists( 'xenial_grouped_post_metas_template' ) ) {
	function xenial_grouped_post_metas_template() {
		?>
		<div class="xe-post-metas xe-entry-metas slanted-seperator">
            <ul class="list-unstyled">
                <li class="meta author">
                    <?php xenial_get_post_author(); ?>
                </li><!-- .meta.author -->
                <li class="meta date">
                    <?php xenial_get_posted_date(); ?>
                </li><!-- .meta.date -->
                <li class="meta comments">
                    <?php xenial_get_post_comments(); ?>
                </li><!-- .meta.comments -->
                <li class="meta categories">
                    <?php xenial_get_post_categories( true ); ?>
                </li><!-- .meta.categories -->
                <li class="meta readtime">
                    <?php xenial_get_post_read_time(); ?>
                </li><!-- .meta.readtime -->
            </ul>
        </div><!-- .xe-post-metas.xe-entry-metas -->
		<?php
	}
}


if ( ! function_exists( 'xenial_post_content_footer_before_template' ) ) {
	function xenial_post_content_footer_before_template() {
		?>
		<section class="xe-post-tags">
		<?php
	}
}


if ( ! function_exists( 'xenial_post_content_footer_after_template' ) ) {
	function xenial_post_content_footer_after_template() {
		?>
		</section><!-- .xe-post-tags -->
		<?php
	}
}



if ( ! function_exists( 'xenial_post_tags_meta_template' ) ) {
	function xenial_post_tags_meta_template() {
		?>
		<div class="post-tags">
            <?php xenial_get_post_tags(); ?>
        </div><!-- .post-tags -->
		<?php
	}
}


if ( ! function_exists( 'xenial_post_updated_date_meta_template' ) ) {
	function xenial_post_updated_date_meta_template() {
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
}



if ( ! function_exists( 'xenial_author_box_template' ) ) {
	function xenial_author_box_template() {
		$args = [];
		get_template_part( 'template-parts/content/content', 'author-box', $args );
	}
}


if ( ! function_exists( 'xenial_post_navigation_template' ) ) {
	function xenial_post_navigation_template() {
		$args = [];
		get_template_part( 'template-parts/content/content', 'post-navigation', $args );
	}
}

if ( ! function_exists( 'xenial_post_comments_template' ) ) {
	function xenial_post_comments_template() {
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			$args = [];
			get_template_part( 'template-parts/content/content', 'comments', $args );
		}
	}
}


if ( ! function_exists( 'xenial_related_posts_template' ) ) {
	function xenial_related_posts_template() {
		$args = [];

		$currentPostID = get_queried_object_id();

		$queryArgs = [
			'post_type' => 'post',
			'post__not_in' => [ $currentPostID ],
			'posts_per_page' => 2,
			'ignore_sticky_posts' => true
		];

		$taxQuery = [];

		$currentPostCategories = wp_get_post_categories( $currentPostID );

		if ( $currentPostCategories ) {
			$taxQuery[] = [
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $currentPostCategories,
                'operator' => 'IN',
            ];
		}

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

		$queryArgs['tax_query'] = [ 'relation' => 'OR', $taxQuery ];

		$posts = new WP_Query( $queryArgs );
		$args['posts'] = $posts;
		get_template_part( 'template-parts/content/content', 'related-posts', $args );
	}
}