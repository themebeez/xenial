<?php 

?>
<div class="xe-header-element is-menu is-secondary">
	<?php
	wp_nav_menu( 
		array(
			'menu' => $args['menu_slug'],
			'depth' => 1,
			'container' => 'nav',
			'container_class' => 'xe-site-navigation'
		) 
	); 
	?>
</div>