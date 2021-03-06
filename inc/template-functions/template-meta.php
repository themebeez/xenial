<?php 

/**
 * Prints HTML with meta information for the current author.
 */
if ( ! function_exists( 'xenial_get_post_author' ) ) {

	function xenial_get_post_author() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		$avatar = get_avatar( 
			get_the_author_meta( 'ID' ), 
			30, 
			'', 
			get_the_author_meta( 'display_name' ), 
			array( 'class' => 'xe-avatar', 'force_display' => false ) 
		);

		if ( $avatar ) {
			?>
			<span class="xe-authorthumb"><?php echo $avatar; ?></span>
			<?php
		} 
		?>
		<span><?php echo esc_html__( 'Author:' ); ?></span>
		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" class="author"><?php echo esc_html( get_the_author() ); ?></a>
		<?php
	}
}


/**
 * Prints HTML with meta information for the published post-date/time.
 */
if ( ! function_exists( 'xenial_get_posted_date' ) ) {

	function xenial_get_posted_date() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}
		?>
		<span><?php echo esc_html( get_the_date() ); ?></span>
		<?php
	}
}


/**
 * Prints HTML with meta information for the updated post-date/time.
 */
if ( ! function_exists( 'xenial_get_post_updated_date' ) ) {

	function xenial_get_post_updated_date() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		return get_the_modified_date(); 
	}
}


/**
 * Prints HTML with meta information for the comments.
 */
if ( ! function_exists( 'xenial_get_post_comments' ) ) {

	function xenial_get_post_comments() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		if ( post_password_required() && ! ( comments_open() || get_comments_number() ) ) {
			return;
		}

		$comments_count = get_comments_number();
		?>
		<a class="xe-link" href="<?php echo esc_url( get_permalink() ) . '#comments' ; ?>">
			<?php
			if ( $comments_count != '0' ) {
				printf( // phpcs:ignore.
					/* translators: 1: comment count number */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', $comments_count, 'xenial' ) ),
					number_format_i18n( $comments_count )
				);
			} else {
				echo esc_html__( 'No Comments', 'xenial' );
			}
			?>
		</a>
		<?php
	}
}


/**
 * Prints HTML with meta information for the categories.
 */
if ( ! function_exists( 'xenial_get_post_categories' ) ) {

	function xenial_get_post_categories() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		$categories_list = get_the_category_list(); 

		if ( $categories_list ) {
			echo $categories_list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
}


/**
 * Prints HTML with meta information for the tags.
 */
if ( ! function_exists( 'xenial_get_post_tags' ) ) {

	function xenial_get_post_tags() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		$tags_list = get_the_tag_list();

		if ( $tags_list ) {
			echo $tags_list; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		}
	}
}


/**
 * Prints HTML with meta information for the read time.
 */
if ( ! function_exists( 'xenial_get_post_read_time' ) ) {

	function xenial_get_post_read_time() {

		if ( get_post_type( get_the_ID() ) != 'post' ) {
			return;
		}

		$content = get_the_content();

		if ( $content ) {
			$words_count = str_word_count( strip_tags( $content ) );
			$avg_words_read_count = apply_filters( 'xenial_filter_avg_words_per_min_read_count', 200 );
			$minutes = floor( $words_count / $avg_words_read_count );
			$seconds = floor( $words_count % $avg_words_read_count / ( $avg_words_read_count / 60 ) );
			?>
			<span>
				<span class="label"><?php echo esc_html__( 'Read Time:' ) ?></span>
				<?php
				
				if ( $minutes != 0 ) {
					printf(
						// phpcs:ignore.
						/* translators: 1: time in minute */
						esc_html( _nx( '%1$s minute', '%1$s minutes', $minutes, 'xenial' ) ),
						number_format_i18n( $minutes )
					); 
				} else {
					 printf(
						// phpcs:ignore.
						/* translators: 1: time in second */
						esc_html( _nx( '%1$s second', '%1$s seconds', $seconds, 'xenial' ) ),
						number_format_i18n( $seconds )
					);
				}
				?>
			</span>
			<?php
		}
	}
}