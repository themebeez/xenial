<?php
/**
 * Template part for numeric pagination.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 * @author  Themebeez <themebeez@gmail.com>
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?> 
<nav class="xe-pagination" role="navigation" aria-label="<?php echo esc_html__( 'Posts', 'xenail' ); ?>">
	<?php
	the_posts_pagination( 
		array(
			'prev_text' => '<span class="icon"><i class="ti-angle-left"></i></span>',
			'next_text' => '<span class="icon"><i class="ti-angle-right"></i></span>',
			'mid_size' => 2,
		) 
	);
	?>
</nav>