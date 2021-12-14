<?php 

?>
<div class="xe-header-element is-menu is-offcanvas-menu">
	<?php
	wp_nav_menu( 
		array(
			'menu' => $args['menu_slug'],
			'container' => 'nav',
			'container_class' => 'xe-site-navigation',
			'menu_class' => 'offcanvas-menu'
		) 
	); 
	?>
</div>