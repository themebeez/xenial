<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Xenial
 */

get_header();
?>
<header class="xe-pageheader">
    <div class="xe-container">
        <nav class="xe-breadcrumb" role="navigation">
            <ul class="trail-items">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item"><a href="archive.html"><span>eCommerce</span></a></li>
                <li class="trail-item trail-end"><a href="single.html"><span>These Are the Handpicked April Top selling brands.</a></li>
            </ul>
        </nav><!-- // xe-breadcrumb -->
    </div><!-- // xe-container -->
</header><!-- // xe-pageheader -->
<div class="xe-container xe-flex-alt">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
        	<?php 

        	while( have_posts() ) :
        		the_post();
        		?>
        		<article class="hentry xe-article">
	                <div class="xe-categories xe-entry-categories">
	                    <a href="#">New</a>
	                    <a href="#">Clothing</a>
	                    <a href="#">Men</a>
	                </div><!-- // xe-categories -->
	                <div class="xe-post-title xe-entry-title">
	                    <h1 class="xe-title">These Are the Handpicked April Top <em>selling</em> Brands.</h1>
	                </div><!-- // xe-post-title -->
	                <div class="xe-post-metas xe-entry-metas slanted-seperator">
	                    <ul class="list-unstyled">
	                        <li class="meta author">
	                            <span class="xe-authorthumb">
	                                <img class="xe-avatar" src="https://secure.gravatar.com/avatar/dc32d7ea3062418bf8bf62694457b563?s=30" alt="...">
	                            </span>
	                            <span>Author: </span>
	                            <a href="archive.html" class="author">Benjamin Yahoo</a>
	                        </li>
	                        <li class="meta date">
	                            <span>22 May 2021</span>
	                        </li>
	                        <li class="meta comments">
	                            <a href="#xe-comment-toggle-btn" class="xe-link"> No Comment</a>
	                        </li>
	                        <li class="meta readtime">
	                            <span><span class="label">Read time:</span> 4 min</span>
	                        </li>
	                    </ul>
	                </div><!-- // xe-post-metas -->
	                <?php 
	                if ( has_post_thumbnail() ) :
	                	?>
		                <div class="post-thumbnail xe-entry-thumbnail">
		                    <figure class="xe-thumb">
		                        <?php the_post_thumbnail(); ?>
		                    </figure><!-- // xe-thumb -->
		                    <figcaption>Photo Credits: www.pexels.com</figcaption>
		                </div><!-- // post-thumbnail -->
		                <?php 
		            endif;
	                if ( get_the_excerpt() ) :
	                	?>
		                <div class="xe-entry-excerpt">
		                    <?php the_excerpt(); ?>
		                </div><!-- // xe-entry-excerpt -->
		                <?php
		            endif;

		            ?>
	                <div class="xe-entry-content">
	                    <?php 

	                    the_content(); 

	                    wp_link_pages(
							[
								'before' => '<div class="page-links"><em>' . esc_html__( 'Pages:', 'xenial' ) . '</em>',
								'after'  => '</div>',
							]
						);
	                    ?>
	                </div><!-- // xe-entry-content -->
	                <section class="xe-post-tags">
	                    <div class="post-tags">
	                        <a href="#" rel="tag">Sale</a>
	                        <a href="#" rel="tag">Collection</a>
	                        <a href="#" rel="tag">Handpicked</a>
	                    </div><!-- // post-tags -->
	                    <div class="xe-lastupdated-info">
	                        <p class="no-margin">
	                            <span class="icon"><i class="ti-pencil"></i></span> Last updated on 23 May 2021
	                        </p>
	                    </div><!-- // updated-info -->
	                </section><!-- // xe-post-tags -->
	                <section class="xe-author-box">
	                    <div class="author-avatar">
	                        <img src="https://secure.gravatar.com/avatar/dc32d7ea3062418bf8bf62694457b563?s=75" alt="...">
	                    </div><!-- // author-avatar -->
	                    <div class="author-meta-data">
	                        <div class="name">
	                            <h4 class="author-display-name">Jecob Vascus</h4>
	                        </div>
	                        <div class="bio">
	                            <p>You haven’t entered your Biographical Information yet. <a href="#">Edit your Profile now.</a></p>
	                        </div>
	                        <div class="author-archive">
	                            <a href="archive.html" class="xe-link xe-button xe-false-button has-underline">View all posts</a>
	                        </div>
	                    </div><!-- // author-meta-data -->
	                </section><!-- // xe-author-box -->
	                <section class="xe-post-navigation">
	                    <div class="nav-previous">
	                        <h6 class="nav-title">Previous post</h6>
	                        <a href="#" rel="prev">
	                            <div class="nav-content">
	                                <img width="75" height="75" src="./assets/build/img/blog/thumb/75x75.jpg" alt="...">
	                                <span>These Are the Handpicked April Top <em>selling</em> Brands.</span>
	                            </div>
	                        </a>
	                    </div>
	                    <div class="nav-next">
	                        <h6 class="nav-title">Next post</h6>
	                        <a href="#" rel="next">
	                            <div class="nav-content">
	                                <img width="75" height="75" src="./assets/build/img/blog/thumb/75x75.jpg" alt="...">
	                                <span>Balancing a Work Lifestyle is really a Challaging Stuff to do. Loreal will help you Heal your Skin</span>
	                            </div>
	                        </a>
	                    </div>
	                </section><!-- // xe-post-navigation -->
	            </article>
	            <button id="xe-comment-toggle-btn" class="xe-button">
                    <span id="xe-show-comment-text">Leave a Comment <span class="icon"><i class="ti-comment-alt"></i></span></span>
                    <span id="xe-hide-comment-text">Hide Comments <span class="icon"><i class="ti-comments"></i></span></span>
                </button>
                <section id="comments" class="comments-area">
                    <p>Hi, Comment loop goes here...</p>
                </section><!-- // #comments -->
                <section class="xe-related-posts">
                    <div class="xe-block-title">
                        <h3 class="xe-title">Related posts</h3>
                    </div>
                    <div class="xe-flex">
                        <div class="xe-col-xl-6 xe-col-lg-6 xe-col-md-12 xe-col-sm-12 xe-col-xs-12">
                            <article class="hentry">
                                <div class="post-thumbnail">
                                    <figure class="xe-thumb">
                                        <a href="#" class="xe-link xe-thumb-link"><img src="./assets/build/img/blog/1.jpg" alt="..."></a>
                                    </figure>
                                </div><!-- // post-thumbnail -->
                                <div class="post-content">
                                    <div class="xe-post-title">
                                        <h4 class="xe-title"><a href="#" class="xe-link xe-post-link">These Are the Handpicked April Top <em>selling</em> Brands.</a></h4>
                                    </div><!-- // xe-post-title -->
                                    <div class="xe-continue-reading">
                                        <a href="single.html" class="xe-button xe-false-button has-underline xe-post-link">Continue reading</a>
                                    </div><!-- // xe-continue-reading -->
                                </div><!-- // post-content -->
                            </article>
                        </div><!-- // xe-col -->
                        <div class="xe-col-xl-6 xe-col-lg-6 xe-col-md-12 xe-col-sm-12 xe-col-xs-12">
                            <article class="hentry">
                                <div class="post-thumbnail">
                                    <figure class="xe-thumb">
                                        <a href="#" class="xe-link xe-thumb-link"><img src="./assets/build/img/blog/2.jpg" alt="..."></a>
                                    </figure>
                                </div><!-- // post-thumbnail -->
                                <div class="post-content">
                                    <div class="xe-post-title">
                                        <h4 class="xe-title"><a href="#" class="xe-link xe-post-link">Love New City Style? Here's the Latest Trends to Explore.</a></h4>
                                    </div><!-- // xe-post-title -->
                                    <div class="xe-continue-reading">
                                        <a href="single.html" class="xe-button xe-false-button has-underline xe-post-link">Continue reading</a>
                                    </div><!-- // xe-continue-reading -->
                                </div><!-- // post-content -->
                            </article>
                        </div><!-- // xe-col -->
                    </div><!-- // xe-flex -->
                </section><!-- // xe-related-posts -->
        		<?php
        	endwhile;
        	?>
        </main> <!-- // #site-main -->
    </div><!-- // #primary -->
</div><!-- // xe-container -->
<?php    
get_footer();
