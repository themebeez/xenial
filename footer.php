<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 */

?>  
    <?php 
    dynamic_sidebar('footer_widget_area_1');
    dynamic_sidebar('footer_widget_area_2');
    dynamic_sidebar('footer_widget_area_3');
    dynamic_sidebar('footer_widget_area_4');
    dynamic_sidebar('footer_widget_area_5');
    dynamic_sidebar('footer_widget_area_6');
    ?>
	</div><!-- #content -->

    <?php do_action( 'xenial_scroll_top' ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
