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
if ( ! function_exists( 'xenial_linked_post_thumbnail_template' ) ) {

	function xenial_linked_post_thumbnail_template( $args ) {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		$thumbnailSize = ( isset( $args['thumbnail_size'] ) && $args['thumbnail_size'] ) ? $args['thumbnail_size'] : 'full';
		?>
		<div class="post-thumbnail">
	        <figure class="xe-thumb">
	        	<a href="<?php the_permalink() ?>" class="xe-link xe-thumb-link" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( $thumbnailSize ); ?></a>
	        </figure><!-- .xe-thumb -->
	    </div><!-- .post-thumbnail -->
		<?php
	}
}


if ( ! function_exists( 'xenial_single_thumbnail_template' ) ) {

	function xenial_single_thumbnail_template( $args = array() ) {

		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		$thumbnailSize = ( isset( $args['thumbnail_size'] ) && $args['thumbnail_size'] ) ? $args['thumbnail_size'] : 'full';

		$thumbnailCaption = wp_get_attachment_caption( get_post_thumbnail_id( get_the_ID() ) ); 
		?>
		<div class="post-thumbnail xe-entry-thumbnail">
	        <figure class="xe-thumb">
	        	<?php
        		the_post_thumbnail( $thumbnailSize );

        		if ( $thumbnailCaption ) {
	        		?>
	        		<figcaption><?php echo wp_kses_post( $thumbnailCaption ); ?></figcaption>
	        		<?php
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
            <?php xenial_get_post_categories(); ?>
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
                    <?php xenial_get_post_categories(); ?>
                </li><!-- .meta.categories -->
                <li class="meta readtime">
                    <?php xenial_get_post_read_time(); ?>
                </li><!-- .meta.readtime -->
            </ul>
        </div><!-- .xe-post-metas.xe-entry-metas -->
		<?php
	}
}





if ( ! function_exists( 'xenial_post_comments_template' ) ) {
	function xenial_post_comments_template() {
		$enableComments = xenial_get_option( 'post_single_display_comments' );
		if ( ! $enableComments ) {
			return;
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {

			// Get customizer options values for comments toggle button.
			$enableCommentsToggleButton = xenial_get_option( 'post_single_show_toggle_comments_btn' );
			$initalButtonLabel = xenial_get_option( 'post_single_comment_toggle_btn_title' );
			$toggledStateButtonLabel = xenial_get_option( 'post_single_comment_toggled_state_toggle_btn_title' );

			// Assign customizer options values for template arguments array elements.
			$templateArgs = array(
				'enableCommentsToggleButton' => ( $enableCommentsToggleButton == true ) ? true : false,
				'initialButtonLabel' => $initalButtonLabel,
				'toggledStateButtonLabel' => $toggledStateButtonLabel,
			);

			get_template_part( 'template-parts/content/content', 'comments', $templateArgs );
		}
	}
}


