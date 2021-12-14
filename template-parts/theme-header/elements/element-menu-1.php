<?php


?>
<div class="xe-header-element is-menu is-primary">
	<?php
	wp_nav_menu( 
		array(
			'menu' => $args['menu_slug'],
			'container' => '',
			'menu_class' => 'menu',
			'items_wrap' => xenial_primary_menu_items_wrap()
		) 
	); 
	?>
</div>