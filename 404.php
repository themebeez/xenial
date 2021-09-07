<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Xenial
 */

get_header();
	?>
	<div class="xenial-container">
		<div class="xenial-row xenial-container-inner">
			<div id="xenial-primary" class="xenial-content-area">
				<main id="xenial-main" class="xenial-site-main">
					<section class="error-404 not-found">
						<div class="page-header">
							<h1 class="page-title"><?php esc_html_e( '404', 'xenial' ); ?></h1>
							<p><?php esc_html_e( 'Oops! page can&rsquo;t be found.', 'xenial' ); ?></p>
						</div><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'We could&rsquo;t find the page you&rsquo;re looking for. Maybe try searching?', 'xenial' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main>
			</div>
		</div>
	</div>
	<?php
get_footer();
