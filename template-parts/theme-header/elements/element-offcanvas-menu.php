<?php 

?>
<div class="xe-header-element is-menu is-offcanvas-menu" xe-submenu-style="revealing">
	<!-- // options: default & revealing -->
	<?php
	wp_nav_menu( 
		array(
			'menu' => $args['menu_slug'],
			'container' => 'nav',
			'container_class' => 'xe-offcanvas-navigation',
			'menu_class' => 'xe-offcanvas-menu'
		) 
	); 
	?>
</div>