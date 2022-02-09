<?php 


if ( ! function_exists( 'xenial_single_header_template' ) ) {

	function xenial_single_header_template() {

		$template_args = array(
			'current_page' => 'single',
			'container_width' => '',
			'before_title' => '',
			'after_title' => '',
			'display_breadcrumbs' => false,
			'classes' => array(),
			'display_title' => false
		);

		$title_tag = 'h1';

		if ( $title_tag ) {
			$template_args['before_title'] = '<' . $title_tag . ' class="xe-title">';
			$template_args['after_title'] = '<' . $title_tag . '>';  
		}

		$display_breadcrumbs = xenial_post_header_has_breadcrumbs_enabled();
		$template_args['display_breadcrumbs'] = ( $display_breadcrumbs == true ) ? true : false;

		$page_header_width = 'container';

		$page_header_width_meta = get_post_meta( get_the_ID(), 'xenial_page_header_width', true );

		if ( $page_header_width_meta == 'default' || empty( $page_header_width_meta ) ) {
			$page_header_width = xenial_get_option( 'post_single_breadcrumbs_width' );
		} else {
			$page_header_width = $page_header_width_meta;
		}

		if ( $page_header_width ) {
			switch ( $page_header_width ) {
				case 'wide' :
					$template_args['classes'][] = 'xe-container-wide';
					break;
				case 'narrow' :
					$template_args['classes'][] = 'xe-container-narrow';
					break;
				default :
					$template_args['classes'][] = 'xe-container';
			}
		}

		get_template_part( 'template-parts/page-header/content', 'header', $template_args );	
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

		$display_author_box = xenial_get_option( 'post_single_display_author_box' );

		if ( ! $display_author_box ) {
			return;
		}

		$args = [];
		get_template_part( 'template-parts/content/content', 'author-box', $args );
	}
}


if ( ! function_exists( 'xenial_post_navigation_template' ) ) {

	function xenial_post_navigation_template() {

		$display_post_navigation = xenial_get_option( 'post_single_display_posts_navigation' );

		if ( ! $display_post_navigation ) {
			return;
		}

		$args = array(
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
		);

		$previous_post_link_title = xenial_get_option( 'post_single_prev_post_link_title_label' );
		$next_post_link_title = xenial_get_option( 'post_single_next_post_link_title_label' );
		$display_image = xenial_get_option( 'post_single_display_post_image_in_post_navigation' );

		if ( $previous_post_link_title ) {
			$args['previousFormat'] = '<div class="nav-previous"><h6 class="nav-title">' . esc_html( $previous_post_link_title ) . '</h6>%link</div>';
		} 

		if ( $next_post_link_title ) {
			$args['nextFormat'] = '<div class="nav-next"><h6 class="nav-title">' . esc_html( $next_post_link_title ) . '</h6>%link</div>';
		}

		if ( $display_image ) {
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

		$display_related_posts = xenial_get_option( 'post_single_display_related_posts' );

		$related_posts_content = xenial_get_option( 'post_single_related_posts_elements' );

		if ( ! $display_related_posts || ! $related_posts_content ) {
			return;
		}

		$post_meta_elements = xenial_get_option( 'post_single_related_posts_meta' );

		$posts_per_page = ( xenial_get_option( 'post_single_related_posts_number' ) ) ? absint( xenial_get_option( 'post_single_related_posts_number' ) ) : 2;

		$content_alignment = xenial_get_option( 'post_single_related_posts_content_alignment' );

		$query_posts_by = xenial_get_option( 'post_single_related_posts_by' );

		$args = array(
			'section-title' => xenial_get_option( 'post_single_related_posts_section_title' ),
			'post-content' => $related_posts_content,
			'desktop-cols' => xenial_get_option( 'post_single_related_posts_number_of_cols_desktop' ),
			'tablet-cols' => xenial_get_option( 'post_single_related_posts_number_of_cols_tablet' ),
			'mobile-cols' => xenial_get_option( 'post_single_related_posts_number_of_cols_mobile' ),
			'content-align-class' => xenial_get_text_align_class( $content_alignment )
		);

		$current_post_id = get_queried_object_id();

		$query_args = array(
			'post_type' => 'post',
			'post__not_in' => array( $current_post_id ),
			'posts_per_page' => $posts_per_page,
			'ignore_sticky_posts' => true
		);

		$tax_query = array();

		if ( $query_posts_by == 'categories' ) {

			$current_post_categories = wp_get_post_categories( $current_post_id );

			if ( $current_post_categories ) {
				$tax_query[] = array(
	                'taxonomy' => 'category',
	                'field'    => 'term_id',
	                'terms'    => $current_post_categories,
	                'operator' => 'IN',
	            );
			}
		} else {

			$current_post_tags = wp_get_post_tags( $current_post_id );
			
			if ( $current_post_tags ) {
				$tag_terms = array();
				foreach( $current_post_tags as $current_post_tag ) {
					$tag_terms[] = $current_post_tag->term_id;
				}
				$tax_query[] = array(
	                'taxonomy' => 'post_tag',
	                'field'    => 'term_id',
	                'terms'    => $tag_terms,
	                'operator' => 'IN',
	            );
			}
		}

		$query_args['tax_query'] = array( 'relation' => 'OR', $tax_query );

		$posts = new WP_Query( $query_args );

		if ( ! $posts->have_posts() ) {
			return;
		}

		$args['posts'] = $posts;

		get_template_part( 'template-parts/content/content', 'related-posts', $args );
	}
}


if ( ! function_exists( 'xenial_single_grouped_post_meta_template' ) ) {

	function xenial_single_grouped_post_meta_template() {

		$post_metas = xenial_get_option( 'post_single_meta_elements' );
		if ( ! $post_metas ) {
			return;
		}
		?>
		<div class="xe-post-metas xe-entry-metas slanted-seperator">
            <ul class="list-unstyled">
            	<?php
				foreach ( $post_metas as $post_meta ) {
					switch ( $post_meta ) {
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

		$content_container_classes = array();

		if ( xenial_has_sidebar() ) {

			$content_container_classes[] = 'xe-container';
			$content_container_classes[] = 'xe-flex-alt';
		} else {
			$post_container_width = 'container';

			$post_container_width_meta = get_post_meta( get_the_ID(), 'xenial_post_content_layout', true );

			if ( $post_container_width_meta == 'default' || empty( $post_container_width_meta ) ) {
				$post_container_width = xenial_get_option( 'post_single_header_width' );
			} else {
				$post_container_width = $post_container_width_meta;
			}

			if ( $post_container_width ) {
				switch ( $post_container_width ) {
					case 'wide' :
						$content_container_classes[] = 'xe-container-wide';
						break;
					case 'narrow' :
						$content_container_classes[] = 'xe-container-narrow';
						break;
					default :
						$content_container_classes[] = 'xe-container';
						$content_container_classes[] = 'xe-flex-alt';
				}
			} else {
				$content_container_classes[] = 'xe-container';
				$content_container_classes[] = 'xe-flex-alt';
			}
		}

		$content_container_classes = apply_filters( 'xenial_post_single_content_container_classes', $content_container_classes );

		echo esc_attr( implode( ' ', $content_container_classes ) );
	}
}