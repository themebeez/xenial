<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Xenial
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php 
	if( function_exists( 'wp_body_open' ) ) { 

		wp_body_open(); 
	} 
	?>
	<div class="xe-page" id="xe-page">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'xenial' ); ?></a>
		<div id="content" class="site-content">

			<?php 

			do_action( 'xenail_display_header_builder' );

			?>

			<div id="xe-mastheader" class="xe-desktop-header">
				<div class="xe-top-header">
					<div class="xe-container">
						<div class="xe-flex xe-flex-center">
							<div class="xe-col-lg-6">
								<div class="xe-header-element is-menu">
									<nav class="xe-header-element-menu xe-site-navigation">
										<ul class="secondary-menu">
											<li class="menu-item"><a href="#">Home</a></li>
											<li class="menu-item menu-item-has-children">
												<a href="#">About</a>
												<button class="submenu-item-toggle"><i class="ti-angle-down"></i></button>
												<ul class="sub-menu">
													<li class="menu-item"><a href="#">Mission</a></li>
													<li class="menu-item"><a href="#">Vision</a></li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Message</a>
														<button class="submenu-item-toggle"><i class="ti-angle-down"></i></button>
														<ul class="sub-menu">
															<li class="menu-item"><a href="#">CEO Message</a></li>
															<li class="menu-item menu-item-has-children">
																<a href="#">MD Voice</a>
																<button class="submenu-item-toggle"><i class="ti-angle-down"></i></button>
																<ul class="sub-menu">
																	<li class="menu-item"><a href="#">Directory Office</a></li>
																	<li class="menu-item"><a href="#">Dean Office</a></li>
																	<li class="menu-item"><a href="#">Director Contact</a></li>
																</ul>
															</li>
															<li class="menu-item"><a href="#">CFO Sandesh</a></li>
															<li class="menu-item"><a href="#">CO-Founders</a></li>
															<li class="menu-item"><a href="#">CO-Workers</a></li>
														</ul>
													</li>
													<li class="menu-item"><a href="#">Blog</a></li>
													<li class="menu-item"><a href="#">Privacy</a></li>
													<li class="menu-item"><a href="#">Policy</a></li>
												</ul>
											</li>
											<li class="menu-item"><a href="#">Press</a></li>
											<li class="menu-item"><a href="#">Company</a></li>
											<li class="menu-item"><a href="#">Legal</a></li>
											<li class="menu-item"><a href="#">Carreer</a></li>
											<li class="menu-item"><a href="#">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div><!-- // xe-column -->
							<div class="xe-col-lg-6">
								<div class="xe-header-elements xe-flex xe-flex-center xe-justify-end">
									<div class="xe-header-element is-search">
										<button class="xe-button xe-false-button xe-header-element-search" id="xe-header-element-search-button">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z" /><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z" /></svg>
										</button>
									</div><!-- // xe-header-element -->
									<div class="xe-header-element is-button">
										<a class="xe-button xe-header-element-button" href="#">Account</a>
									</div><!-- // xe-header-element -->
								</div>
							</div>
						</div><!-- // xe-flex -->
					</div><!-- // xe-container -->
				</div><!-- // xe-top-header -->

				<div class="xe-mid-header">
					<div class="xe-container">
						<div class="xe-flex">

						</div><!-- // xe-flex -->
					</div><!-- // xe-container -->
				</div><!-- // xe-mid-header -->

				<div class="xe-bottom-header">
					<div class="xe-container">
						<div class="xe-flex">

						</div><!-- // xe-flex -->
					</div><!-- // xe-container -->
				</div><!-- // xe-bottom-header -->
			</div><!-- // mastheader -->

			<aside id="xe-search-form">
				<div class="xe-search-entry">
					<div class="search-box-header">
						<button id="xe-close-search-box" class="xe-button xe-false-button">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z" /><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" /></svg>
						</button>
					</div><!-- // search-box-header -->
					<form action="#" method="get">
						<input type="text" name="s" placeholder="Search...">
						<button class ="xe-button xe-false-button" type ="submit">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z"/></svg>
						</button>
					</form>
				</div>
			</aside>
			<script>

				//let body = document.body;
				let searchButton = document.getElementById('xe-header-element-search-button');
				let closeSearchBoxButton = document.getElementById('xe-close-search-box');

				function showSearchBox() {

					if ( searchButton &&  closeSearchBoxButton !== undefined ) {

						searchButton.addEventListener('click', function() {
							body.classList.add('xe-visible-search-form');
						});
						closeSearchBoxButton.addEventListener('click', function() {
							body.classList.remove('xe-visible-search-form');
						});
					}
				}

				showSearchBox();
			</script>