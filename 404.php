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
<header class="xe-pageheader">
    <div class="xe-container">
        <aside class="xe-pagetitle-holder">
            <h1 class="xe-title"><?php echo esc_html__( '404', 'xenial' ); ?></h1>
        </aside><!-- .xe-pagetitle-holder -->
        <?php do_action( 'xenial_breadcrumbs' ); ?>
    </div><!-- .xe-container -->
</header><!-- .xe-pageheader -->
<div class="xe-container xe-flex-alt">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
            <article class="content-is-404">
                <div class="animation">
                </div>
                <h2 class="xe-title"><?php echo esc_html__( '404', 'xenial' ); ?></h2>
                <h3 class="xe-subtitle"><?php echo esc_html__( 'Oops! the page couldn&rsquo;t be found.', 'xenial' ); ?></h3>
                <p class="xe-excerpt"><?php echo esc_html__( 'The page that you are trying to access either has been moved or doesn&rsquo;t exist.', 'xenial' ); ?></p>
                <p class="xe-gohome">
                    <a href="<?php echo esc_url( home_url() ); ?>" class="xe-button"><?php echo esc_html__( 'Go back to homepage', 'xenial' ); ?> <span class="icon"><i class="ti-shift-right"></i></span></a>
                </p>
            </article>
        </main> <!-- #site-main -->
    </div><!-- #primary -->
</div><!-- .xe-container -->
<?php
get_footer();
