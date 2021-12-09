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

			<header id="xe-mastheader" class="xe-desktop-header">
				<div class="xe-top-header">
					<div class="xe-container">
						<div class="xe-header-inner">
							<div class="xe-flex xe-flex-center xe-justify-space-between">
								<div class="xe-column">
									<div class="xe-header-element is-html">
										<span style="font-size: 13px;">Store opening time: 6:00AM - 10:00PM. Sunday - Friday!</span>
									</div><!-- // xe-header-element -->
								</div><!-- // xe-column -->
								<div class="xe-column xe-flex-alt xe-justify-end">
									<div class="xe-header-elements xe-flex-center">
										<div class="xe-header-element is-social">
											<ul class="xe-header-element-social">
												<li>
													<a href="#"><span class="xe-social-icon dribble"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.989 11.572a7.96 7.96 0 0 0-1.573-4.351 9.749 9.749 0 0 1-.92.87 13.157 13.157 0 0 1-3.313 2.01c.167.35.32.689.455 1.009v.003a9.186 9.186 0 0 1 .11.27c1.514-.17 3.11-.108 4.657.101.206.028.4.058.584.088zm-9.385-7.45a46.164 46.164 0 0 1 2.692 4.27c1.223-.482 2.234-1.09 3.048-1.767a7.88 7.88 0 0 0 .796-.755A7.968 7.968 0 0 0 12 4a8.05 8.05 0 0 0-1.396.121zM4.253 9.997a29.21 29.21 0 0 0 2.04-.123 31.53 31.53 0 0 0 4.862-.822 54.365 54.365 0 0 0-2.7-4.227 8.018 8.018 0 0 0-4.202 5.172zm1.53 7.038c.388-.567.898-1.205 1.575-1.899 1.454-1.49 3.17-2.65 5.156-3.29l.062-.018c-.165-.364-.32-.689-.476-.995-1.836.535-3.77.869-5.697 1.042-.94.085-1.783.122-2.403.128a7.967 7.967 0 0 0 1.784 5.032zm9.222 2.38a35.947 35.947 0 0 0-1.632-5.709c-2.002.727-3.597 1.79-4.83 3.058a9.77 9.77 0 0 0-1.317 1.655A7.964 7.964 0 0 0 12 20a7.977 7.977 0 0 0 3.005-.583zm1.873-1.075a7.998 7.998 0 0 0 2.987-4.87c-.34-.085-.771-.17-1.245-.236a12.023 12.023 0 0 0-3.18-.033 39.368 39.368 0 0 1 1.438 5.14zM12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></span></a>
												</li>
												<li>
													<a href="#"><span class="xe-social-icon phone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z"/></svg></span></a>
												</li>
												<li>
													<a href="#"><span class="xe-social-icon behance"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.443 5.35c.639 0 1.23.05 1.77.198a3.83 3.83 0 0 1 1.377.544c.394.247.689.594.885 1.039.197.445.295.99.295 1.583 0 .693-.147 1.286-.491 1.731-.295.446-.787.841-1.377 1.138.836.248 1.475.693 1.868 1.286.394.594.64 1.336.64 2.177 0 .693-.148 1.286-.394 1.781-.246.495-.639.94-1.082 1.237a5.078 5.078 0 0 1-1.573.692c-.59.149-1.18.248-1.77.248H1V5.35h6.443zm-.394 5.54c.541 0 .984-.148 1.328-.395.344-.247.492-.693.492-1.237 0-.297-.05-.594-.148-.791-.098-.198-.246-.347-.442-.495-.197-.099-.394-.198-.64-.247-.246-.05-.491-.05-.787-.05H4v3.216h3.05zm.148 5.838c.295 0 .59-.05.836-.099a1.72 1.72 0 0 0 .688-.297 1.76 1.76 0 0 0 .492-.544c.098-.247.197-.544.197-.89 0-.693-.197-1.188-.59-1.534-.394-.297-.935-.445-1.574-.445H4v3.81h3.197zm9.492-.05c.393.396.983.594 1.77.594.541 0 1.033-.148 1.426-.395.394-.297.64-.594.738-.891h2.41c-.394 1.187-.984 2.028-1.77 2.572-.788.495-1.722.792-2.853.792a5.753 5.753 0 0 1-2.115-.396 3.93 3.93 0 0 1-1.574-1.088 3.93 3.93 0 0 1-.983-1.633c-.246-.643-.345-1.335-.345-2.127 0-.742.099-1.434.345-2.078a5.34 5.34 0 0 1 1.032-1.682c.443-.445.984-.84 1.574-1.088a5.49 5.49 0 0 1 2.066-.396c.836 0 1.574.149 2.213.495.64.346 1.131.742 1.525 1.336a6.01 6.01 0 0 1 .885 1.88c.098.692.147 1.385.098 2.176H16c0 .792.295 1.534.689 1.93zm3.098-5.194c-.344-.346-.885-.544-1.525-.544-.442 0-.787.099-1.082.247-.295.149-.491.347-.688.545a1.322 1.322 0 0 0-.344.692c-.05.248-.099.445-.099.643h4.426c-.098-.742-.344-1.236-.688-1.583zM15.459 6.29h5.508v1.336H15.46V6.29z"/></svg></span></a>
												</li>
											</ul>
										</div><!-- // xe-header-element -->
									</div>
								</div><!-- // col -->
							</div><!-- // xe-flex -->
						</div><!-- // xe-header-inner -->
					</div><!-- // xe-container -->
				</div><!-- // xe-top-header -->

				<div class="xe-middle-header">
					<div class="xe-container">
						<div class="xe-header-inner">
							<div class="xe-flex xe-flex-center xe-justify-space-between">
								<div class="xe-column xe-flex-alt xe-justify-start">
									<div class="xe-header-element is-site-title-logo">
										<div class="xe-site-branding" xe-logo-position="bottom">
											<a class="custom-logo-block" href="index.html">
												<img class="custom-logo" src="http://xenial.local/wp-content/uploads/2021/12/cc-logo-dark.png" alt="custom-logo">
											</a>
											<div class="site-title-block">
												<span class="site-title"><a href="#">Xenial</a></span>
												<p class="site-description">Local Xenial dev instance.</p>
											</div><!-- // site-title-block -->
										</div><!-- // xe-site-branding -->
									</div><!-- // xe-header-element -->
								</div><!-- // col -->
								<div class="xe-column xe-flex-alt xe-flex-center xe-justify-end xe-flex-grow-1">
									<div class="xe-header-element is-menu is-primary">
										<nav class="xe-site-navigation" xe-dropdown-animation="FadeInDown">
											<!-- // Available options: None, FadeIn, FadeInUp & FadeInDown -->											
											<ul class="menu">
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
								<div class="xe-column xe-flex-alt xe-flex-center xe-justify-end">
									<div class="xe-header-elements xe-flex-center">
										<div class="xe-header-element is-search">
											<button class="xe-button xe-false-button xe-header-element-search" id="xe-header-element-search-button">
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z" /><path d="M11 2c4.968 0 9 4.032 9 9s-4.032 9-9 9-9-4.032-9-9 4.032-9 9-9zm0 16c3.867 0 7-3.133 7-7 0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7zm8.485.071l2.829 2.828-1.415 1.415-2.828-2.829 1.414-1.414z" /></svg>
											</button>
										</div><!-- // xe-header-element -->
										<div class="xe-header-element is-button">
											<a class="xe-button xe-header-element-button" href="#">Account</a>
										</div><!-- // xe-header-element -->
										<div class="xe-header-element is-canvas-button">
											<button id="xe-mobile-canvas-trigger-button" class="xe-button xe-false-button">
												<span class="menu-bar"></span>
												<span class="menu-bar"></span>
												<span class="menu-bar"></span>
											</button>
										</div><!-- // xe-header-element -->
									</div><!-- // xe-header-elements -->
								</div><!-- // col -->
							</div><!-- // xe-flex -->
						</div><!-- // xe-header-inner -->
					</div><!-- // xe-container -->
				</div><!-- // xe-middle-header -->

				<div class="xe-bottom-header">
					<div class="xe-container">
						<div class="xe-header-inner">

						</div><!-- // xe-header-inner -->
					</div><!-- // xe-container -->
				</div><!-- // xe-bottom-header -->
			</header><!-- // # mastheader -->

			<aside id="xe-mobile-canvas" xe-canvas-position="left">
				<div class="canvas-header">
					<button class="xe-button xe-false-button" id="xe-mobile-canvas-close-button">
						<span class="label">Close</span>
							<svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"y="0px" viewBox="0 0 64 64" xml:space="preserve">
								<path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z"/>
							</svg>
					</button>
				</div><!-- // canvas-header -->
				<div class="canvas-inner">
					<!-- // @content here -->
				</div><!-- // canvas-inner -->
			</aside><!-- // #mobile-canvas -->
			<aside id="xe-mobile-canvas-mask"></aside>

			<aside id="xe-search-form">
				<div class="xe-search-entry">
					<div class="search-box-header">
						<button id="xe-close-search-box" class="xe-button xe-false-button">
							<span class="label">Close</span>
							<svg width="22" height="22" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"y="0px" viewBox="0 0 64 64" xml:space="preserve">
								<path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z"/>
							</svg>
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

				let searchButton = document.getElementById('xe-header-element-search-button');
				let closeSearchBoxButton = document.getElementById('xe-close-search-box');

				function showSearchBox() {

					if ( searchButton && closeSearchBoxButton !== undefined || searchButton && closeSearchBoxButton !== null) {

						searchButton.addEventListener('click', function() {
							body.classList.add('xe-visible-search-form');
						});
						closeSearchBoxButton.addEventListener('click', function() {
							body.classList.remove('xe-visible-search-form');
						});
					}
				}

				let mobileCanavsTriggerButton = document.getElementById('xe-mobile-canvas-trigger-button');
				let mobileCanvasCloseButton = document.getElementById('xe-mobile-canvas-close-button');
				let mobileCanavs = document.getElementById('xe-mobile-canvas');
				let mobileCanavsMask = document.getElementById('xe-mobile-canvas-mask');

				function mobileCanvas() {

					if( mobileCanavsTriggerButton !== null && mobileCanavs !== null) {

						mobileCanavsTriggerButton.addEventListener('click', function() {

							body.classList.add('xe-visible-mobile-canvas');
						});
						mobileCanavsMask.addEventListener('click', function() {

							body.classList.remove('xe-visible-mobile-canvas');
						});
					}

					if( mobileCanvasCloseButton !== null ) {

						mobileCanvasCloseButton.addEventListener('click', function() {

							body.classList.remove('xe-visible-mobile-canvas');
						});
					}
				}

				showSearchBox();
				mobileCanvas();
			</script>