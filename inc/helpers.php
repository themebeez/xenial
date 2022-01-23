<?php

if ( ! function_exists( 'xenial_is_transparent_header_activated' ) ) {

	function xenial_is_transparent_header_activated() {

		if ( ! xenial_get_option( 'enable_transparent_header' ) ) {

			return false;
		}

		$transparent_header_enabled_pages = xenial_get_option( 'enable_transparent_header_on_pages' );

		if ( $transparent_header_enabled_pages ) {

			if ( ! is_array( $transparent_header_enabled_pages ) ) {

				$transparent_header_enabled_pages = explode( ',', $transparent_header_enabled_pages );
			}

			if ( is_array( $transparent_header_enabled_pages ) ) {

				if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {

					if ( is_product() && in_array( 'product_single', $transparent_header_enabled_pages ) ) {
						return true;
					} else {

						return ( in_array( 'product_archive', $transparent_header_enabled_pages ) && ! is_product() ) ? true : false;
					}

				} else {

					if ( is_home() && ! in_array( 'blog_page', $transparent_header_enabled_pages ) ) {

						return false;
					}

					if ( is_archive() && ! in_array( 'archive_page', $transparent_header_enabled_pages ) ) {

						return false;
					}

					if ( is_search() && ! in_array( 'search_page', $transparent_header_enabled_pages ) ) {

						return false;
					}

					if ( is_single() ) {

						if ( ! in_array( 'post_single', $transparent_header_enabled_pages )  ) {

							return false;
						} else {

							$disable_transparent_header = ( get_post_meta( get_the_ID(), 'xenial_post_disable_transparent_header', true ) ) ? true : false;

							if (  $disable_transparent_header == true ) {

								return false;
							}
						}
					}

					if ( is_page() ) {

						if ( ! in_array( 'page_single', $transparent_header_enabled_pages )  ) {

							return false;
						} else {

							$disable_transparent_header = ( get_post_meta( get_the_ID(), 'xenial_post_disable_transparent_header', true ) ) ? true : false;

							if (  $disable_transparent_header == true ) {

								return false;
							}
						}
					}

					if ( is_404() && ! in_array( 'page_404', $transparent_header_enabled_pages ) ) {

						return false;
					}

					return true;
				}
			}
		} else {

			$classes[] = 'xenial-transparent-header-disabled';
		}
	}
}

if ( ! function_exists( 'xenial_is_page_header_activated' ) ) {

	function xenial_is_page_header_activated() {

		if ( ! xenial_get_option( 'enable_page_header' ) ) {

			return false;
		}

		$page_header_enabled_pages = xenial_get_option( 'page_header_display_pages' );

		if ( $page_header_enabled_pages ) {

			if ( ! is_array( $page_header_enabled_pages ) ) {

				$page_header_enabled_pages = explode( ',', $page_header_enabled_pages );
			}

			if ( is_array( $page_header_enabled_pages ) ) {

				if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {

					if ( is_product() && in_array( 'product_single', $page_header_enabled_pages ) ) {
						return true;
					} else {

						return ( in_array( 'product_archive', $page_header_enabled_pages ) && ! is_product() ) ? true : false;
					}

				} else {

					if ( is_home() && ! in_array( 'blog_page', $page_header_enabled_pages ) ) {

						return false;
					}

					if ( is_archive() && ! in_array( 'archive_page', $page_header_enabled_pages ) ) {

						return false;
					}

					if ( is_search() && ! in_array( 'search_page', $page_header_enabled_pages ) ) {

						return false;
					}

					if ( is_single() ) {

						if ( ! in_array( 'post_single', $page_header_enabled_pages )  ) {

							return false;
						} else {

							$disable_page_header = ( get_post_meta( get_the_ID(), 'xenial_post_disable_page_header', true ) ) ? true : false;

							if (  $disable_page_header == true ) {

								return false;
							}
						}
					}

					if ( is_page() ) {

						if ( ! in_array( 'page_single', $page_header_enabled_pages )  ) {

							return false;
						} else {

							$disable_page_header = ( get_post_meta( get_the_ID(), 'xenial_post_disable_page_header', true ) ) ? true : false;

							if (  $disable_page_header == true ) {

								return false;
							}
						}
					}

					if ( is_404() && ! in_array( 'page_404', $page_header_enabled_pages ) ) {

						return false;
					}

					return true;
				}
			}
		} else {

			return false;
		}
	}
}


if ( ! function_exists( 'xenial_is_breadcrumbs_activated' ) ) {

	function xenial_is_breadcrumbs_activated() {

		if ( ! xenial_get_option( 'enable_breadcrumbs' ) ) {

			return false;
		}

		$breadcrumbs_enabled_pages = xenial_get_option( 'breadcrumbs_display_pages' );

		if ( $breadcrumbs_enabled_pages ) {

			if ( ! is_array( $breadcrumbs_enabled_pages ) ) {

				$breadcrumbs_enabled_pages = explode( ',', $breadcrumbs_enabled_pages );
			}

			if ( is_array( $breadcrumbs_enabled_pages ) ) {

				if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {

					if ( is_product() && in_array( 'product_single', $breadcrumbs_enabled_pages ) ) {
						return true;
					} else {
						if ( in_array( 'product_archive', $breadcrumbs_enabled_pages ) && ! is_product() ) {
							return true;
						} else {
							return false;
						}
					}

				} else {

					if ( is_home() && ! in_array( 'blog_page', $breadcrumbs_enabled_pages ) ) {

						return false;
					}

					if ( is_archive() && ! in_array( 'archive_page', $breadcrumbs_enabled_pages ) ) {

						return false;
					}

					if ( is_search() && ! in_array( 'search_page', $breadcrumbs_enabled_pages ) ) {

						return false;
					}

					if ( is_single() ) {

						if ( ! in_array( 'post_single', $breadcrumbs_enabled_pages )  ) {

							return false;
						} else {

							$disable_breadcrumb = ( get_post_meta( get_the_ID(), 'xenial_post_disable_breadcrumb', true ) ) ? true : false;

							if (  $disable_breadcrumb == true ) {

								return false;
							}
						}
					}

					if ( is_page() ) {

						if ( ! in_array( 'page_single', $breadcrumbs_enabled_pages )  ) {

							return false;
						} else {

							$disable_breadcrumb = ( get_post_meta( get_the_ID(), 'xenial_post_disable_breadcrumb', true ) ) ? true : false;

							if (  $disable_breadcrumb == true ) {

								return false;
							}
						}
					}

					if ( is_404() && ! in_array( 'page_404', $breadcrumbs_enabled_pages ) ) {

						return false;
					}
				}

				return true;
			}
		} else {

			return false;
		}
	}
}


if ( ! function_exists( 'xenial_is_banner_activated' ) ) {

	function xenial_is_banner_activated() {

		if ( ! xenial_get_option( 'enable_banner_slider' ) ) {

			return false;
		}

		$banner_enabled_page = xenial_get_option( 'banner_slider_enable_on' );

		return ( ( is_home() && ( $banner_enabled_page == 'blog_page' || $banner_enabled_page == 'blog_and_front' ) ) || ( is_front_page() && ( $banner_enabled_page == 'front_page' || $banner_enabled_page == 'blog_and_front' ) ) ) ? true : false;
	}
}


if ( ! function_exists( 'xenial_is_categories_in_post_structure' ) ) {

	function xenial_is_categories_in_post_structure() {

		if ( is_home() || is_archive() || is_search() ) {

			$post_elements = array();

			$archive_layout = xenial_get_option( 'archive_layout' );

			switch ( $archive_layout ) {				
				case 'horizontal-list' :
					$post_elements = xenial_get_option( 'archive_horizontal_list_post_structure' );
					break;
				default :
					$post_elements = xenial_get_option( 'archive_fullwidth_post_structure' );
					break;
			}

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			return ( is_array( $post_elements ) && in_array( 'category', $post_elements ) ) ? true : false;
		}

		if ( is_single() ) {

			$post_elements = xenial_get_option( 'single_post_elements' );

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			if ( is_array( $post_elements ) && in_array( 'category', $post_elements ) ) {

				return true;
			}
		}
	}
}

if ( ! function_exists( 'xenial_is_meta_in_post_meta' ) ) {

	function xenial_is_meta_in_post_meta( $search_item ) {

		if ( is_home() || is_archive() || is_search() ) {

			$post_elements = xenial_get_option( 'archive_post_meta' );

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			if ( is_array( $post_elements ) && in_array( $search_item, $post_elements ) ) {

				return true;
			}
		}

		if ( is_single() ) {

			$post_elements = xenial_get_option( 'single_post_meta' );

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			if ( is_array( $post_elements ) && in_array( $search_item, $post_elements ) ) {

				return true;
			}
		}
	}
}

if ( ! function_exists( 'xenial_is_post_meta_active' ) ) {

	function xenial_is_post_meta_active() {

		if ( is_home() || is_archive() || is_search() ) {

			$post_elements = xenial_get_option( 'archive_post_meta' );

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			if ( is_array( $post_elements ) ) {

				return true;
			}
		}

		if ( is_single() ) {

			$post_elements = xenial_get_option( 'single_post_meta' );

			if ( ! is_array( $post_elements ) ) {

				$post_elements = explode( ',', $post_elements );
			}

			if ( is_array( $post_elements ) ) {

				return true;
			}
		}
	}
}

if ( ! function_exists( 'xenial_is_post_content_element_enabled' ) ) {

	function xenial_is_post_content_element_enabled( $search_item ) {

		$post_elements = xenial_get_option( 'single_post_elements' );

		if ( ! is_array( $post_elements ) ) {

			$post_elements = explode( ',', $post_elements );
		}

		return ( is_array( $post_elements ) && in_array( $search_item, $post_elements ) ) ? true : false;
	}	
}

if ( ! function_exists( 'xenial_is_meta_icon_enabled' ) ) {

	function xenial_is_meta_icon_enabled() {

		if ( is_archive() || is_home() || is_search() ) {

			if ( xenial_get_option( 'archive_show_icons_in_post_meta' ) ) {
				return true;
			}
		}

		if ( is_single() ) {

			if ( xenial_get_option( 'single_show_icons_in_post_meta' ) ) {
				return true;
			}
		}
	}
}

if ( ! function_exists( 'xenial_is_breadcrumbs_in_separate_container' ) ) {

	function xenial_is_breadcrumbs_in_separate_container() {

		if ( ! xenial_is_breadcrumbs_activated() ) {

			return false;
		}

		if ( xenial_is_page_header_activated() ) {

			return ( xenial_get_option( 'breadcrumbs_position' ) == 'default' ) ? true : false;
		}

		return true;
	}
}


if ( ! function_exists( 'xenial_get_sidebar_position' ) ) {

	function xenial_get_sidebar_position() {

		$default_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		if ( xenial_is_woocommerce_page() ) {

			return xenial_get_woocommerce_sidebar_position();

		} else {

			if ( ! is_active_sidebar( 'sidebar-1' ) ) {
				return 'no-sidebar';
			}

			if ( is_home() || is_search() || is_archive() ) {

				$archive_sidebar_position = xenial_get_option( 'sidebar_archives_and_search_position' );

				return ( $archive_sidebar_position === 'default' ) ? $default_sidebar_position : $archive_sidebar_position;
			}

			if ( is_single() || is_page() ) {

				$single_sidebar_position = ( is_single() ) ? xenial_get_option( 'sidebar_post_single_position' ) : xenial_get_option( 'sidebar_page_single_position' );

				$single_sidebar_position_meta = get_post_meta( get_the_ID(), 'xenial_post_sidebar_position', true );

				if ( $single_sidebar_position === 'default' && ( $single_sidebar_position_meta === 'default' || $single_sidebar_position_meta === '' ) ) {

					return $default_sidebar_position;
				} else {
					if ( $single_sidebar_position !== 'default' && ( $single_sidebar_position_meta === 'default' || $single_sidebar_position_meta === '' ) ) {
						return $single_sidebar_position;
					} else {
						return $sidebar_position_meta;
					}
				}
			}
		}
	}
}

if ( ! function_exists( 'xenial_is_sidebar_active' ) ) {

	function xenial_is_sidebar_active() {

		$sidebar_position = xenial_get_sidebar_position();

		return ( $sidebar_position === 'no-sidebar' ) ? false : true;
	}
}



if ( ! function_exists( 'xenial_is_page_header_background_image_active' ) ) {

	function xenial_is_page_header_background_image_active() {

		if ( xenial_is_page_header_activated() ) {

			$background_type = xenial_get_option( 'page_header_background_type' );

			if ( $background_type === 'image' ) {
				return true;
			} else {
				return false;
			}
		}
	}
}


if ( ! function_exists( 'xenial_is_woocommerce_page' ) ) {

	function xenial_is_woocommerce_page() {

		if ( ! class_exists( 'WooCommerce' ) ) {
			return false;
		}

		return ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ? true : false;
	}
}



if ( ! function_exists( 'xenial_get_woocommerce_sidebar_position' ) ) {

	function xenial_get_woocommerce_sidebar_position() {

		if ( ! is_active_sidebar( 'xenial-woocommerce-sidebar' ) ) {
			return 'no-sidebar';
		}

		$default_sidebar_position = xenial_get_option( 'sidebar_default_position' );

		if ( is_product() ) {

			$product_sidebar_position = xenial_get_option( 'sidebar_woocommerce_product_position' );

			return ( $product_sidebar_position === 'default' ) ? $default_sidebar_position : $product_sidebar_position;
		}

		if ( is_product_category() || is_product_tag() || is_shop() ) {

			$archive_sidebar_position = xenial_get_option( 'sidebar_woocommerce_archive_position' );

			return ( $archive_sidebar_position === 'default' ) ? $default_sidebar_position : $archive_sidebar_position;
		}

		if ( is_cart() || is_checkout() || is_account_page() ) {

			$page_sidebar_position = xenial_get_option( 'sidebar_page_single_position' );

			$page_sidebar_position_meta = get_post_meta( get_the_ID(), 'xenial_post_sidebar_position', true );

			if ( $page_sidebar_position == 'default' && ( $page_sidebar_position_meta == 'default' || $page_sidebar_position_meta == '' ) ) {

				return $default_sidebar_position;
			} else {
				if ( $page_sidebar_position != 'default' && ( $page_sidebar_position_meta == 'default' || $page_sidebar_position_meta == '' ) ) {
					return $page_sidebar_position;
				} else {
					return $page_sidebar_position_meta;
				}
			}
		}

		return 'no-sidebar';
	}
} 


