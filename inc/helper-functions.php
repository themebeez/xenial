<?php 

if ( ! function_exists( 'xenial_get_attachment_src' ) ) {

	function xenial_get_attachment_src( $url = '', $id = '', $width = '' ) {

		// If both id and url are not present retrun.
		if ( ! $id && ! $url ) {
			return false;
		}

		$attachment_id = null;

		// If id is present, assign it to variable $attachment_id.

		if ( $id ) {
			$attachment_id = absint( $id );
		}

		// If id is not present, get attachment id with attachment url.
		if ( ! $attachment_id ) {
			$attachment_id = attachment_url_to_postid( $url );
		}

		// Return if attachment id is not found.
		if ( ! $attachment_id ) {
			return false;
		}

		// Get actual image data url, width, and height.
		$attachment_src = wp_get_attachment_image_src( $attachment_id );

		if ( $attachment_src ) {
			// If width is present calculate height and get and return new image data using the width and calculated height. Else, return the original image data.
			if ( $width ) {

				$height = absint( ( $attachment_src[1] / $attachment_src[2] ) * absint( $width ) );

				$new_attachment_src = wp_get_attachment_image_src( $attachment_id, array( $width, $height ) );

				return ( $new_attachment_src ) ? $new_attachment_src : false;
			} else {
				return $attachment_src;
			}
		} else {
			return false;
		}
	} 
}

if ( ! function_exists( 'xenial_calculate' ) ) {

	function xenial_calculate( $arg_1, $args_2, $arg_3 ) {

		return absint( ( $arg_1 / $args_2 ) * $arg_3 );
	}
}

if ( ! function_exists( 'xenial_has_post_thumbnail' ) ) {
	function xenial_has_post_thumbnail( $currentPage ) {
		
	}
}


if ( ! function_exists( 'xenial_get_nav_menu_slug' ) ) {

    function xenial_get_nav_menu_slug( $menu_id ) {

        if ( $menu_id ) {

            $menu_obj = wp_get_nav_menu_object( $menu_id );

            return $menu_obj->slug;
        } else {
        	return false;
        }
    }
}

if ( ! function_exists( 'xenial_has_sidebar' ) ) {

	function xenial_has_sidebar() {

		if ( ! is_active_sidebar( 'sidebar-1' ) ) {
			return false;
		}

		$sidebar_position = xenial_get_sidebar_position();

		if ( $sidebar_position == 'no-sidebar' ) {
			return false;
		} else {
			return true;
		}
	}
}




if ( ! function_exists( 'xenial_get_social_networks_title' ) ) {

	function xenial_get_social_networks_title( $social_network ) {

		$social_networks = xenial_get_social_networks();

		return ( isset( $social_networks[$social_network] ) ) ? $social_networks[$social_network] : false;
	}
}


if ( ! function_exists( 'xenial_get_social_networks_icon' ) ) {

	function xenial_get_social_networks_icon( $social_network ) {

		$social_network_icons = apply_filters(
			'xenial_social_network_icons_filter',
			array(
				'behance'		=> '<span class="xe-social-icon behance"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.443 5.35c.639 0 1.23.05 1.77.198a3.83 3.83 0 0 1 1.377.544c.394.247.689.594.885 1.039.197.445.295.99.295 1.583 0 .693-.147 1.286-.491 1.731-.295.446-.787.841-1.377 1.138.836.248 1.475.693 1.868 1.286.394.594.64 1.336.64 2.177 0 .693-.148 1.286-.394 1.781-.246.495-.639.94-1.082 1.237a5.078 5.078 0 0 1-1.573.692c-.59.149-1.18.248-1.77.248H1V5.35h6.443zm-.394 5.54c.541 0 .984-.148 1.328-.395.344-.247.492-.693.492-1.237 0-.297-.05-.594-.148-.791-.098-.198-.246-.347-.442-.495-.197-.099-.394-.198-.64-.247-.246-.05-.491-.05-.787-.05H4v3.216h3.05zm.148 5.838c.295 0 .59-.05.836-.099a1.72 1.72 0 0 0 .688-.297 1.76 1.76 0 0 0 .492-.544c.098-.247.197-.544.197-.89 0-.693-.197-1.188-.59-1.534-.394-.297-.935-.445-1.574-.445H4v3.81h3.197zm9.492-.05c.393.396.983.594 1.77.594.541 0 1.033-.148 1.426-.395.394-.297.64-.594.738-.891h2.41c-.394 1.187-.984 2.028-1.77 2.572-.788.495-1.722.792-2.853.792a5.753 5.753 0 0 1-2.115-.396 3.93 3.93 0 0 1-1.574-1.088 3.93 3.93 0 0 1-.983-1.633c-.246-.643-.345-1.335-.345-2.127 0-.742.099-1.434.345-2.078a5.34 5.34 0 0 1 1.032-1.682c.443-.445.984-.84 1.574-1.088a5.49 5.49 0 0 1 2.066-.396c.836 0 1.574.149 2.213.495.64.346 1.131.742 1.525 1.336a6.01 6.01 0 0 1 .885 1.88c.098.692.147 1.385.098 2.176H16c0 .792.295 1.534.689 1.93zm3.098-5.194c-.344-.346-.885-.544-1.525-.544-.442 0-.787.099-1.082.247-.295.149-.491.347-.688.545a1.322 1.322 0 0 0-.344.692c-.05.248-.099.445-.099.643h4.426c-.098-.742-.344-1.236-.688-1.583zM15.459 6.29h5.508v1.336H15.46V6.29z"/></svg></span>',
				'codepen'		=> '<span class="xe-social-icon codepen"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.202L9.303 12 12 13.798 14.697 12 12 10.202zm4.5.596L19.197 9 13 4.869v3.596l3.5 2.333zm3.5.07L18.303 12 20 13.131V10.87zm-3.5 2.334L13 15.535v3.596L19.197 15 16.5 13.202zM11 8.465V4.869L4.803 9 7.5 10.798 11 8.465zM4.803 15L11 19.131v-3.596l-3.5-2.333L4.803 15zm.894-3L4 10.869v2.262L5.697 12zM2 9a1 1 0 0 1 .445-.832l9-6a1 1 0 0 1 1.11 0l9 6A1 1 0 0 1 22 9v6a1 1 0 0 1-.445.832l-9 6a1 1 0 0 1-1.11 0l-9-6A1 1 0 0 1 2 15V9z"/></svg></span>',
				'discord'		=> '<span class="xe-social-icon discord"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M10.076 11c.6 0 1.086.45 1.075 1 0 .55-.474 1-1.075 1C9.486 13 9 12.55 9 12s.475-1 1.076-1zm3.848 0c.601 0 1.076.45 1.076 1s-.475 1-1.076 1c-.59 0-1.075-.45-1.075-1s.474-1 1.075-1zm4.967-9C20.054 2 21 2.966 21 4.163V23l-2.211-1.995-1.245-1.176-1.317-1.25.546 1.943H5.109C3.946 20.522 3 19.556 3 18.359V4.163C3 2.966 3.946 2 5.109 2H18.89zm-3.97 13.713c2.273-.073 3.148-1.596 3.148-1.596 0-3.381-1.482-6.122-1.482-6.122-1.48-1.133-2.89-1.102-2.89-1.102l-.144.168c1.749.546 2.561 1.334 2.561 1.334a8.263 8.263 0 0 0-3.096-1.008 8.527 8.527 0 0 0-2.077.02c-.062 0-.114.011-.175.021-.36.032-1.235.168-2.335.662-.38.178-.607.305-.607.305s.854-.83 2.705-1.376l-.103-.126s-1.409-.031-2.89 1.103c0 0-1.481 2.74-1.481 6.121 0 0 .864 1.522 3.137 1.596 0 0 .38-.472.69-.871-1.307-.4-1.8-1.24-1.8-1.24s.102.074.287.179c.01.01.02.021.041.031.031.022.062.032.093.053.257.147.514.262.75.357.422.168.926.336 1.513.452a7.06 7.06 0 0 0 2.664.01 6.666 6.666 0 0 0 1.491-.451c.36-.137.761-.337 1.183-.62 0 0-.514.861-1.862 1.25.309.399.68.85.68.85z"/></svg></span>',
				'dribble'		=> '<span class="xe-social-icon dribble"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.989 11.572a7.96 7.96 0 0 0-1.573-4.351 9.749 9.749 0 0 1-.92.87 13.157 13.157 0 0 1-3.313 2.01c.167.35.32.689.455 1.009v.003a9.186 9.186 0 0 1 .11.27c1.514-.17 3.11-.108 4.657.101.206.028.4.058.584.088zm-9.385-7.45a46.164 46.164 0 0 1 2.692 4.27c1.223-.482 2.234-1.09 3.048-1.767a7.88 7.88 0 0 0 .796-.755A7.968 7.968 0 0 0 12 4a8.05 8.05 0 0 0-1.396.121zM4.253 9.997a29.21 29.21 0 0 0 2.04-.123 31.53 31.53 0 0 0 4.862-.822 54.365 54.365 0 0 0-2.7-4.227 8.018 8.018 0 0 0-4.202 5.172zm1.53 7.038c.388-.567.898-1.205 1.575-1.899 1.454-1.49 3.17-2.65 5.156-3.29l.062-.018c-.165-.364-.32-.689-.476-.995-1.836.535-3.77.869-5.697 1.042-.94.085-1.783.122-2.403.128a7.967 7.967 0 0 0 1.784 5.032zm9.222 2.38a35.947 35.947 0 0 0-1.632-5.709c-2.002.727-3.597 1.79-4.83 3.058a9.77 9.77 0 0 0-1.317 1.655A7.964 7.964 0 0 0 12 20a7.977 7.977 0 0 0 3.005-.583zm1.873-1.075a7.998 7.998 0 0 0 2.987-4.87c-.34-.085-.771-.17-1.245-.236a12.023 12.023 0 0 0-3.18-.033 39.368 39.368 0 0 1 1.438 5.14zM12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/></svg></span>',
				'email'			=> '<span class="xe-social-icon email"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.243 6.854L11.49 1.31a1 1 0 0 1 1.029 0l9.238 5.545a.5.5 0 0 1 .243.429V20a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.283a.5.5 0 0 1 .243-.429zm16.103 1.39l-6.285 5.439-6.414-5.445-1.294 1.524 7.72 6.555 7.581-6.56-1.308-1.513z"/></svg></span>',
				'facebook'		=> '<span class="xe-social-icon facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/></svg></span>',
				'flickr'		=> '<span class="xe-social-icon flickr"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.157 12a4.573 4.573 0 1 1-9.147 0 4.573 4.573 0 0 1 9.147 0zm10.833 0a4.573 4.573 0 1 1-9.147 0 4.573 4.573 0 0 1 9.147 0z"></path></svg></span>',
				'foursquare'	=> '<span class="xe-social-icon foursquare"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m17.549 5.557-.403 2.113c-.049.229-.337.47-.605.47h-3.76c-.425 0-.729.296-.729.714v.463c0 .43.307.725.73.725h3.194c.298 0 .591.33.524.646l-.404 2.083c-.037.181-.237.475-.592.475h-2.609c-.477 0-.617.069-.936.454-.316.395-3.175 3.827-3.175 3.827-.026.033-.054.022-.054-.011V5.522c0-.271.234-.588.586-.588h7.756c.283 0 .549.269.477.618v.005zm.341 8.288c.111-.437 1.319-6.63 1.722-8.593m-1.489-2.311H8.457c-1.33 0-1.723 1.002-1.723 1.635v15.353c0 .71.381.975.596 1.062.214.087.807.161 1.163-.247 0 0 4.563-5.296 4.64-5.373.125-.118.125-.118.238-.118h2.954c1.245 0 1.438-.885 1.574-1.405.114-.429 1.325-6.622 1.721-8.595.307-1.496-.079-2.311-1.495-2.311h-.002z"></path></svg></span>',
				'github'		=> '<span class="xe-social-icon github"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.475 2 2 6.475 2 12a9.994 9.994 0 0 0 6.838 9.488c.5.087.687-.213.687-.476 0-.237-.013-1.024-.013-1.862-2.512.463-3.162-.612-3.362-1.175-.113-.288-.6-1.175-1.025-1.413-.35-.187-.85-.65-.013-.662.788-.013 1.35.725 1.538 1.025.9 1.512 2.338 1.087 2.912.825.088-.65.35-1.087.638-1.337-2.225-.25-4.55-1.113-4.55-4.938 0-1.088.387-1.987 1.025-2.688-.1-.25-.45-1.275.1-2.65 0 0 .837-.262 2.75 1.026a9.28 9.28 0 0 1 2.5-.338c.85 0 1.7.112 2.5.337 1.912-1.3 2.75-1.024 2.75-1.024.55 1.375.2 2.4.1 2.65.637.7 1.025 1.587 1.025 2.687 0 3.838-2.337 4.688-4.562 4.938.362.312.675.912.675 1.85 0 1.337-.013 2.412-.013 2.75 0 .262.188.574.688.474A10.016 10.016 0 0 0 22 12c0-5.525-4.475-10-10-10z"/></svg></span>',
				'gitlab'		=> '<span class="xe-social-icon gitlab"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5.868 2.75L8 10h8l2.132-7.25a.4.4 0 0 1 .765-.01l3.495 10.924a.5.5 0 0 1-.173.55L12 22 1.78 14.214a.5.5 0 0 1-.172-.55L5.103 2.74a.4.4 0 0 1 .765.009z"/></svg></span>',
				'instagram'		=> '<span class="xe-social-icon instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/></svg></span>',
				'line'			=> '<span class="xe-social-icon line"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.663 10.84a.526.526 0 0 1-.526.525h-1.462v.938h1.462a.525.525 0 1 1 0 1.049H16.15a.526.526 0 0 1-.522-.524V8.852c0-.287.235-.525.525-.525h1.988a.525.525 0 0 1-.003 1.05h-1.462v.938h1.462c.291 0 .526.237.526.525zm-4.098 2.485a.538.538 0 0 1-.166.025.515.515 0 0 1-.425-.208l-2.036-2.764v2.45a.525.525 0 0 1-1.047 0V8.852a.522.522 0 0 1 .52-.523c.162 0 .312.086.412.211l2.052 2.775V8.852c0-.287.235-.525.525-.525.287 0 .525.238.525.525v3.976a.524.524 0 0 1-.36.497zm-4.95.027a.526.526 0 0 1-.523-.524V8.852c0-.287.236-.525.525-.525.289 0 .524.238.524.525v3.976a.527.527 0 0 1-.526.524zm-1.53 0H6.098a.528.528 0 0 1-.525-.524V8.852a.527.527 0 0 1 1.05 0v3.45h1.464a.525.525 0 0 1 0 1.05zM12 2.572c-5.513 0-10 3.643-10 8.118 0 4.01 3.558 7.369 8.363 8.007.325.068.769.215.881.492.1.25.066.638.032.9l-.137.85c-.037.25-.2.988.874.537 1.076-.449 5.764-3.398 7.864-5.812C21.313 14.089 22 12.477 22 10.69c0-4.475-4.488-8.118-10-8.118z"/></svg></span>',
				'linkedin'		=> '<span class="xe-social-icon linkedin"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M18.335 18.339H15.67v-4.177c0-.996-.02-2.278-1.39-2.278-1.389 0-1.601 1.084-1.601 2.205v4.25h-2.666V9.75h2.56v1.17h.035c.358-.674 1.228-1.387 2.528-1.387 2.7 0 3.2 1.778 3.2 4.091v4.715zM7.003 8.575a1.546 1.546 0 0 1-1.548-1.549 1.548 1.548 0 1 1 1.547 1.549zm1.336 9.764H5.666V9.75H8.34v8.589zM19.67 3H4.329C3.593 3 3 3.58 3 4.297v15.406C3 20.42 3.594 21 4.328 21h15.338C20.4 21 21 20.42 21 19.703V4.297C21 3.58 20.4 3 19.666 3h.003z"/></svg></span>',
				'medium'		=> '<span class="xe-social-icon medium"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 3h16a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm13.3 12.94c-.1-.05-.15-.2-.15-.301V8.006c0-.1.05-.25.15-.351l.955-1.105V6.5H14.84l-2.56 6.478L9.366 6.5H5.852v.05l.903 1.256c.201.2.251.502.251.753v5.523c.05.302 0 .653-.15.954L5.5 16.894v.05h3.616v-.05L7.76 15.087c-.15-.302-.201-.603-.15-.954V9.11c.05.1.1.1.15.301l3.414 7.633h.05L14.54 8.76c-.05.3-.05.652-.05.904v5.925c0 .15-.05.25-.15.351l-1.005.954v.05h4.921v-.05l-.954-.954z"/></svg></span>',
				'odnoklassniki'	=> '<span class="xe-social-icon odnoklassniki"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M11.986 12.341c-2.825 0-5.173-2.346-5.173-5.122C6.813 4.347 9.161 2 11.987 2c2.922 0 5.173 2.346 5.173 5.219a5.142 5.142 0 0 1-5.157 5.123l-.017-.001zm0-7.324c-1.196 0-2.106 1.005-2.106 2.203 0 1.196.91 2.106 2.107 2.106 1.245 0 2.107-.91 2.107-2.106.001-1.199-.862-2.203-2.108-2.203zm2.06 11.586 2.923 2.825c.575.621.575 1.531 0 2.106-.622.621-1.581.621-2.06 0l-2.922-2.873-2.826 2.873c-.287.287-.671.43-1.103.43-.335 0-.718-.144-1.054-.43-.575-.575-.575-1.485 0-2.107l2.97-2.825a13.49 13.49 0 0 1-3.063-1.339c-.719-.383-.862-1.34-.479-2.059.479-.718 1.341-.909 2.108-.43a6.62 6.62 0 0 0 6.897 0c.767-.479 1.676-.288 2.107.43.432.719.239 1.675-.432 2.059-.909.575-1.963 1.006-3.065 1.341l-.001-.001z"></path></svg></span>',
				'patreon'		=> '<span class="xe-social-icon patreon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M15 17a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15zM2 2h4v20H2V2z"/></svg></span>',
				'phone'			=> '<span class="xe-social-icon phone"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 16.42v3.536a1 1 0 0 1-.93.998c-.437.03-.794.046-1.07.046-8.837 0-16-7.163-16-16 0-.276.015-.633.046-1.07A1 1 0 0 1 4.044 3H7.58a.5.5 0 0 1 .498.45c.023.23.044.413.064.552A13.901 13.901 0 0 0 9.35 8.003c.095.2.033.439-.147.567l-2.158 1.542a13.047 13.047 0 0 0 6.844 6.844l1.54-2.154a.462.462 0 0 1 .573-.149 13.901 13.901 0 0 0 4 1.205c.139.02.322.042.55.064a.5.5 0 0 1 .449.498z"/></svg></span>',
				'pinterest'		=> '<span class="xe-social-icon pinterest"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.37 2.094A10.003 10.003 0 0 0 8.002 21.17a7.757 7.757 0 0 1 .163-2.293c.185-.839 1.296-5.463 1.296-5.463a3.739 3.739 0 0 1-.324-1.577c0-1.485.857-2.593 1.923-2.593a1.334 1.334 0 0 1 1.342 1.508c0 .9-.578 2.262-.88 3.54a1.544 1.544 0 0 0 1.575 1.923c1.898 0 3.17-2.431 3.17-5.301 0-2.2-1.457-3.848-4.143-3.848a4.746 4.746 0 0 0-4.93 4.794 2.96 2.96 0 0 0 .648 1.97.48.48 0 0 1 .162.554c-.046.184-.162.623-.208.784a.354.354 0 0 1-.51.254c-1.384-.554-2.036-2.077-2.036-3.816 0-2.847 2.384-6.255 7.154-6.255 3.796 0 6.32 2.777 6.32 5.747 0 3.909-2.177 6.848-5.394 6.848a2.861 2.861 0 0 1-2.454-1.246s-.578 2.316-.692 2.754a8.026 8.026 0 0 1-1.019 2.131c.923.28 1.882.42 2.846.416a9.988 9.988 0 0 0 9.996-10.003 10.002 10.002 0 0 0-8.635-9.903z"/></svg></span>',
				'qq'			=> '<span class="xe-social-icon qq"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M19.913 14.529a31.977 31.977 0 0 0-.675-1.886l-.91-2.246c0-.026.012-.468.012-.696C18.34 5.86 16.507 2 12 2 7.493 2 5.66 5.86 5.66 9.7c0 .229.011.671.012.697l-.91 2.246c-.248.643-.495 1.312-.675 1.886-.86 2.737-.581 3.87-.369 3.895.455.054 1.771-2.06 1.771-2.06 0 1.224.637 2.822 2.016 3.976-.515.157-1.147.399-1.554.695-.365.267-.319.54-.253.65.289.481 4.955.307 6.303.157 1.347.15 6.014.324 6.302-.158.066-.11.112-.382-.253-.649-.407-.296-1.039-.538-1.555-.696 1.379-1.153 2.016-2.751 2.016-3.976 0 0 1.316 2.115 1.771 2.06.212-.025.49-1.157-.37-3.894"/></svg></span>',
				'rss'			=> '<span class="xe-social-icon rss"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3c9.941 0 18 8.059 18 18h-3c0-8.284-6.716-15-15-15V3zm0 7c6.075 0 11 4.925 11 11h-3a8 8 0 0 0-8-8v-3zm0 7a4 4 0 0 1 4 4H3v-4z"/></svg></span>',
				'reddit'		=> '<span class="xe-social-icon reddit"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm6.67-10a1.46 1.46 0 0 0-2.47-1 7.12 7.12 0 0 0-3.85-1.23L13 6.65l2.14.45a1 1 0 1 0 .13-.61L12.82 6a.31.31 0 0 0-.37.24l-.74 3.47a7.14 7.14 0 0 0-3.9 1.23 1.46 1.46 0 1 0-1.61 2.39 2.87 2.87 0 0 0 0 .44c0 2.24 2.61 4.06 5.83 4.06s5.83-1.82 5.83-4.06a2.87 2.87 0 0 0 0-.44 1.46 1.46 0 0 0 .81-1.33zm-10 1a1 1 0 1 1 2 0 1 1 0 0 1-2 0zm5.81 2.75a3.84 3.84 0 0 1-2.47.77 3.84 3.84 0 0 1-2.47-.77.27.27 0 0 1 .38-.38A3.27 3.27 0 0 0 12 16a3.28 3.28 0 0 0 2.09-.61.28.28 0 1 1 .39.4v-.04zm-.18-1.71a1 1 0 1 1 1-1 1 1 0 0 1-1.01 1.04l.01-.04z"/></svg></span>',
				'skype'			=> '<span class="xe-social-icon skype"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.31 20.4a8.5 8.5 0 0 1-9.71-9.71 5.25 5.25 0 0 1 7.09-7.09 8.5 8.5 0 0 1 9.71 9.71 5.25 5.25 0 0 1-7.09 7.09zm-1.258-3.244h-.04c2.872 0 4.303-1.386 4.303-3.243 0-1.198-.551-2.471-2.726-2.958l-1.983-.44c-.755-.172-1.622-.4-1.622-1.115s.62-1.213 1.724-1.213c2.23 0 2.027 1.528 3.131 1.528.576 0 1.093-.342 1.093-.93 0-1.37-2.197-2.4-4.056-2.4-2.021 0-4.173.859-4.173 3.144 0 1.098.394 2.27 2.56 2.813l2.689.671c.816.202 1.018.659 1.018 1.072 0 .687-.684 1.358-1.918 1.358-2.417 0-2.078-1.857-3.374-1.857-.58 0-1.003.398-1.003.971 0 1.114 1.352 2.598 4.377 2.598z"/></svg></span>',
				'slack'			=> '<span class="xe-social-icon slack"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.527 14.514A1.973 1.973 0 0 1 4.56 16.48a1.973 1.973 0 0 1-1.967-1.967c0-1.083.884-1.968 1.967-1.968h1.968v1.968zm.992 0c0-1.083.884-1.968 1.967-1.968 1.083 0 1.968.885 1.968 1.968v4.927a1.973 1.973 0 0 1-1.968 1.967 1.973 1.973 0 0 1-1.967-1.967v-4.927zm1.967-7.987A1.973 1.973 0 0 1 7.52 4.56c0-1.083.884-1.967 1.967-1.967 1.083 0 1.968.884 1.968 1.967v1.968H9.486zm0 .992c1.083 0 1.968.884 1.968 1.967a1.973 1.973 0 0 1-1.968 1.968H4.56a1.973 1.973 0 0 1-1.967-1.968c0-1.083.884-1.967 1.967-1.967h4.927zm7.987 1.967c0-1.083.885-1.967 1.968-1.967s1.967.884 1.967 1.967a1.973 1.973 0 0 1-1.967 1.968h-1.968V9.486zm-.992 0a1.973 1.973 0 0 1-1.967 1.968 1.973 1.973 0 0 1-1.968-1.968V4.56c0-1.083.885-1.967 1.968-1.967s1.967.884 1.967 1.967v4.927zm-1.967 7.987c1.083 0 1.967.885 1.967 1.968a1.973 1.973 0 0 1-1.967 1.967 1.973 1.973 0 0 1-1.968-1.967v-1.968h1.968zm0-.992a1.973 1.973 0 0 1-1.968-1.967c0-1.083.885-1.968 1.968-1.968h4.927c1.083 0 1.967.885 1.967 1.968a1.973 1.973 0 0 1-1.967 1.967h-4.927z"/></svg></span>',
				'snapchat'		=> '<span class="xe-social-icon snapchat"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11.871 21.764c-1.19 0-1.984-.561-2.693-1.056-.503-.357-.976-.696-1.533-.79a4.568 4.568 0 0 0-.803-.066c-.472 0-.847.071-1.114.125-.17.03-.312.058-.424.058-.116 0-.263-.032-.32-.228-.05-.16-.081-.312-.112-.459-.08-.37-.147-.597-.286-.62-1.489-.227-2.38-.57-2.554-.976-.014-.044-.031-.09-.031-.125-.01-.125.08-.227.205-.25 1.181-.196 2.242-.824 3.138-1.858.696-.803 1.035-1.579 1.066-1.663 0-.01.009-.01.009-.01.17-.351.205-.65.102-.895-.191-.46-.825-.656-1.257-.79-.111-.03-.205-.066-.285-.093-.37-.147-.986-.46-.905-.892.058-.312.472-.535.811-.535.094 0 .174.014.24.05.38.173.723.262 1.017.262.366 0 .54-.138.584-.182a24.93 24.93 0 0 0-.035-.593c-.09-1.365-.192-3.059.24-4.03 1.298-2.907 4.053-3.14 4.869-3.14L12.156 3h.05c.815 0 3.57.227 4.868 3.139.437.971.33 2.67.24 4.03l-.008.067c-.01.182-.023.356-.032.535.045.035.205.169.535.173.286-.008.598-.102.954-.263a.804.804 0 0 1 .312-.066c.125 0 .25.03.357.066h.009c.299.112.495.321.495.54.009.205-.152.517-.914.825-.08.03-.174.067-.285.093-.424.13-1.057.335-1.258.79-.111.24-.066.548.103.895 0 .01.009.01.009.01.049.124 1.337 3.049 4.204 3.526a.246.246 0 0 1 .205.25c0 .044-.009.089-.031.129-.174.41-1.057.744-2.555.976-.138.022-.205.25-.285.62a6.831 6.831 0 0 1-.112.459c-.044.147-.138.227-.298.227h-.023c-.102 0-.24-.013-.423-.049a5.285 5.285 0 0 0-1.115-.116c-.263 0-.535.023-.802.067-.553.09-1.03.433-1.534.79-.717.49-1.515 1.051-2.697 1.051h-.254z"/></svg></span>',
				'soundcloud'	=> '<span class="xe-social-icon soundcloud"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M10.464 8.596c.265 0 .48 2.106.48 4.704l-.001.351c-.019 2.434-.226 4.353-.479 4.353-.256 0-.465-1.965-.48-4.44v-.352c.005-2.558.218-4.616.48-4.616zm-1.664.96c.259 0 .47 1.8.48 4.054v.34c-.01 2.254-.221 4.054-.48 4.054-.255 0-.464-1.755-.48-3.97v-.34l.002-.34c.025-2.133.23-3.798.478-3.798zm-1.664 0c.255 0 .464 1.755.48 3.97v.34l-.002.34c-.025 2.133-.23 3.798-.478 3.798-.259 0-.47-1.8-.48-4.054v-.34c.01-2.254.221-4.054.48-4.054zm-1.664.576c.265 0 .48 1.762.48 3.936l-.002.335c-.02 2.017-.227 3.601-.478 3.601-.262 0-.474-1.717-.48-3.852v-.168c.006-2.135.218-3.852.48-3.852zM3.808 11.86c.265 0 .48 1.375.48 3.072v.158c-.013 1.623-.223 2.914-.48 2.914-.265 0-.48-1.375-.48-3.072v-.158c.013-1.623.223-2.914.48-2.914zm10.784-4.8c2.58 0 4.72 1.886 5.118 4.354a3.36 3.36 0 1 1 .993 6.589l-.063.001h-8.16a.768.768 0 0 1-.768-.768V7.933a5.16 5.16 0 0 1 2.88-.873zM2.144 11.668c.265 0 .48 1.332.48 2.976v.156c-.014 1.57-.223 2.82-.48 2.82-.26 0-.473-1.29-.48-2.898v-.078c0-1.644.215-2.976.48-2.976zm-1.664.96c.265 0 .48.946.48 2.112v.131c-.016 1.105-.225 1.981-.48 1.981-.265 0-.48-.946-.48-2.112v-.131c.016-1.105.225-1.981.48-1.981z"/></svg></span>',
				'spotify'		=> '<span class="xe-social-icon sportify"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.55 2 12 2zm3.75 14.65c-2.35-1.45-5.3-1.75-8.8-.95-.35.1-.65-.15-.75-.45-.1-.35.15-.65.45-.75 3.8-.85 7.1-.5 9.7 1.1.35.15.4.55.25.85-.2.3-.55.4-.85.2zm1-2.7c-2.7-1.65-6.8-2.15-9.95-1.15-.4.1-.85-.1-.95-.5-.1-.4.1-.85.5-.95 3.65-1.1 8.15-.55 11.25 1.35.3.15.45.65.2 1s-.7.5-1.05.25zM6.3 9.75c-.5.15-1-.15-1.15-.6-.15-.5.15-1 .6-1.15 3.55-1.05 9.4-.85 13.1 1.35.45.25.6.85.35 1.3-.25.35-.85.5-1.3.25C14.7 9 9.35 8.8 6.3 9.75z"/></svg></span>',
				'telegram'		=> '<span class="xe-social-icon telegram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-3.11-8.83l.013-.007.87 2.87c.112.311.266.367.453.341.188-.025.287-.126.41-.244l1.188-1.148 2.55 1.888c.466.257.801.124.917-.432l1.657-7.822c.183-.728-.137-1.02-.702-.788l-9.733 3.76c-.664.266-.66.638-.12.803l2.497.78z"/></svg></span>',
				'tiktok'		=> '<span class="xe-social-icon tiktok"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg></span>',
				'tripadvisor'	=> '<span class="xe-social-icon tripadvisor"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M8.31 10.28a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zm0 3.8a1.31 1.31 0 1 1 0-2.61 1.31 1.31 0 1 1 0 2.61zm7.38-3.8a2.5 2.5 0 1 0 2.5 2.49 2.5 2.5 0 0 0-2.5-2.49zM17 12.77a1.31 1.31 0 1 1-1.31-1.3 1.31 1.31 0 0 1 1.31 1.3z"></path><path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm7.38 10.77a3.69 3.69 0 0 1-6.2 2.71L12 16.77l-1.18-1.29a3.69 3.69 0 1 1-5-5.44l-1.2-1.3H7.3a8.33 8.33 0 0 1 9.41 0h2.67l-1.2 1.31a3.71 3.71 0 0 1 1.2 2.72z"></path><path d="M14.77 9.05a7.19 7.19 0 0 0-5.54 0A4.06 4.06 0 0 1 12 12.7a4.08 4.08 0 0 1 2.77-3.65z"></path></svg></span>',
				'tumblr'		=> '<span class="xe-social-icon tumblr"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M6.27 7.63A5.76 5.76 0 0 0 10.815 2h3.03v5.152h3.637v3.636h-3.636v5.454c0 .515.197 1.207.909 1.667.474.307 1.484.458 3.03.455V22h-4.242a4.545 4.545 0 0 1-4.546-4.545v-6.667H6.27V7.63z"/></svg></span>',
				'twitch'		=> '<span class="xe-social-icon twitch"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 3v11.74l-4.696 4.695h-3.913l-2.437 2.348H6.913v-2.348H3V6.13L4.227 3H21zm-1.565 1.565H6.13v11.74h3.13v2.347l2.349-2.348h4.695l3.13-3.13V4.565zm-3.13 3.13v4.696h-1.566V7.696h1.565zm-3.914 0v4.696h-1.565V7.696h1.565z"/></svg></span>',
				'twitter'		=> '<span class="xe-social-icon twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/></svg></span>',
				'unsplash'		=> '<span class="xe-social-icon unsplash"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M8.5 11v5h7v-5H21v10H3V11h5.5zm7-8v5h-7V3h7z"/></svg></span>',
				'vk'			=> '<span class="xe-social-icon vk"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21.579 6.855c.14-.465 0-.806-.662-.806h-2.193c-.558 0-.813.295-.953.619 0 0-1.115 2.719-2.695 4.482-.51.513-.743.675-1.021.675-.139 0-.341-.162-.341-.627V6.855c0-.558-.161-.806-.626-.806H9.642c-.348 0-.558.258-.558.504 0 .528.79.65.871 2.138v3.228c0 .707-.127.836-.407.836-.743 0-2.551-2.729-3.624-5.853-.209-.607-.42-.852-.98-.852H2.752c-.627 0-.752.295-.752.619 0 .582.743 3.462 3.461 7.271 1.812 2.601 4.363 4.011 6.687 4.011 1.393 0 1.565-.313 1.565-.853v-1.966c0-.626.133-.752.574-.752.324 0 .882.164 2.183 1.417 1.486 1.486 1.732 2.153 2.567 2.153h2.192c.626 0 .939-.313.759-.931-.197-.615-.907-1.51-1.849-2.569-.512-.604-1.277-1.254-1.51-1.579-.325-.419-.231-.604 0-.976.001.001 2.672-3.761 2.95-5.04z"></path></svg></span>',
				'vimeo'			=> '<span class="xe-social-icon vimeo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M1.173 8.301c-.281-.413-.252-.413.328-.922 1.232-1.082 2.394-2.266 3.736-3.212 1.215-.852 2.826-1.402 3.927-.047 1.014 1.249 1.038 3.142 1.295 4.65.257 1.564.503 3.164 1.051 4.66.152.421.443 1.217.968 1.284.678.093 1.368-1.096 1.683-1.54.817-1.18 1.925-2.769 1.785-4.286-.138-1.612-1.878-1.309-2.966-.924.175-1.809 1.858-3.843 3.48-4.53 1.72-.714 4.276-.702 5.14 1.237.923 2.102.093 4.543-.912 6.448-1.097 2.068-2.509 3.982-4.018 5.77-1.331 1.588-2.906 3.33-4.89 4.089-2.267.864-3.61-.82-4.382-2.77-.843-2.123-1.262-4.506-1.87-6.717-.256-.934-.56-1.997-1.167-2.768-.792-.995-1.692-.06-2.474.477-.269-.267-.491-.607-.714-.899z"/></svg></span>',
				'wechat'		=> '<span class="xe-social-icon wechat"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M5.457 18.185C3.358 16.677 2 14.4 2 11.908 2 7.323 6.475 3.6 12 3.6s10 3.723 10 8.308c0 4.584-4.475 8.307-10 8.307a11.36 11.36 0 0 1-3.272-.461c-.092-.03-.216-.03-.308-.03-.185 0-.37.06-.525.153l-2.191 1.261a.44.44 0 0 1-.185.062.342.342 0 0 1-.34-.338c0-.093.03-.154.062-.247.03-.03.308-1.046.463-1.661 0-.062.03-.154.03-.216 0-.246-.092-.43-.277-.553zm3.21-7.674c.717 0 1.285-.568 1.285-1.285 0-.718-.568-1.286-1.285-1.286-.718 0-1.285.568-1.285 1.286 0 .717.567 1.285 1.285 1.285zm6.666 0c.718 0 1.285-.568 1.285-1.285 0-.718-.567-1.286-1.285-1.286-.717 0-1.285.568-1.285 1.286 0 .717.568 1.285 1.285 1.285z"/></svg></span>',
				'weibo'			=> '<span class="xe-social-icon weibo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17.525 11.378c1.263.392 2.669 1.336 2.669 3.004 0 2.763-3.98 6.239-9.964 6.239-4.565 0-9.23-2.213-9.23-5.852 0-1.902 1.204-4.102 3.277-6.177 2.773-2.77 6.004-4.033 7.219-2.816.537.537.588 1.464.244 2.572-.178.557.525.25.525.25 2.24-.938 4.196-.994 4.909.027.38.543.343 1.306-.008 2.19-.163.407.048.471.36.563zm-7.282 7.939c3.641-.362 6.401-2.592 6.167-4.983-.237-2.391-3.382-4.038-7.023-3.677-3.64.36-6.403 2.59-6.167 4.98.237 2.394 3.382 4.039 7.023 3.68zM6.16 14.438c.754-1.527 2.712-2.39 4.446-1.94 1.793.463 2.707 2.154 1.976 3.8-.744 1.682-2.882 2.578-4.695 1.993-1.752-.566-2.493-2.294-1.727-3.853zm1.446 2.587c.568.257 1.325.013 1.676-.55.346-.568.163-1.217-.407-1.459-.563-.237-1.291.008-1.64.553-.354.547-.189 1.202.371 1.456zm2.206-1.808c.219.092.501-.012.628-.231.123-.22.044-.466-.178-.548-.216-.084-.486.018-.613.232-.123.214-.054.458.163.547zM19.873 9.5a.725.725 0 1 1-1.378-.451 1.38 1.38 0 0 0-.288-1.357 1.395 1.395 0 0 0-1.321-.425.723.723 0 1 1-.303-1.416 2.836 2.836 0 0 1 3.29 3.649zm-3.916-6.575A5.831 5.831 0 0 1 21.5 4.72a5.836 5.836 0 0 1 1.22 5.704.838.838 0 0 1-1.06.54.844.844 0 0 1-.542-1.062 4.143 4.143 0 0 0-4.807-5.327.845.845 0 0 1-.354-1.65z"/></svg></span>',
				'whatsapp'		=> '<span class="xe-social-icon whatsapp"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M2.004 22l1.352-4.968A9.954 9.954 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.954 9.954 0 0 1-5.03-1.355L2.004 22zM8.391 7.308a.961.961 0 0 0-.371.1 1.293 1.293 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.729 2.729 0 0 0 6.9 9.62c.002.49.13.967.33 1.413.409.902 1.082 1.857 1.971 2.742.214.213.423.427.648.626a9.448 9.448 0 0 0 3.84 2.046l.569.087c.185.01.37-.004.556-.013a1.99 1.99 0 0 0 .833-.231c.166-.088.244-.132.383-.22 0 0 .043-.028.125-.09.135-.1.218-.171.33-.288.083-.086.155-.187.21-.302.078-.163.156-.474.188-.733.024-.198.017-.306.014-.373-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.401-.621a.498.498 0 0 0-.177-.041.482.482 0 0 0-.378.127v-.002c-.005 0-.072.057-.795.933a.35.35 0 0 1-.368.13 1.416 1.416 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.109l-.005-.002a6.01 6.01 0 0 1-1.57-1c-.126-.11-.243-.23-.363-.346a6.296 6.296 0 0 1-1.02-1.268l-.059-.095a.923.923 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41a4.38 4.38 0 0 0 .263-.373c.118-.19.155-.385.093-.536-.28-.684-.57-1.365-.868-2.041-.059-.134-.234-.23-.393-.249-.054-.006-.108-.012-.162-.016a3.385 3.385 0 0 0-.403.004z"/></svg></span>',
				'wordpress'		=> '<span class="xe-social-icon wordpress"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.891 7.788a8.966 8.966 0 0 1 1.099 4.313 8.986 8.986 0 0 1-4.47 7.771l2.746-7.939c.513-1.282.684-2.309.684-3.219a7.165 7.165 0 0 0-.059-.926m-6.651.087a14.14 14.14 0 0 0 1.026-.088c.485-.063.428-.775-.056-.749 0 0-1.463.112-2.4.112-.887 0-2.375-.125-2.375-.125-.487-.024-.55.713-.061.738 0 0 .449.052.938.075l1.399 3.838-1.975 5.899-3.274-9.724a17.006 17.006 0 0 0 1.028-.083c.487-.063.43-.775-.055-.747 0 0-1.455.115-2.395.115-.167 0-.365-.007-.575-.013C6.093 4.726 8.862 3.113 12 3.113c2.341 0 4.471.894 6.071 2.36-.038-.002-.076-.008-.117-.008-.883 0-1.51.77-1.51 1.596 0 .741.427 1.369.883 2.108.343.601.742 1.37.742 2.481 0 .763-.295 1.662-.685 2.899l-.896 2.987-3.25-9.675.002.014zM12 21.087a8.983 8.983 0 0 1-2.54-.364l2.697-7.838 2.763 7.572c.021.044.042.085.065.124a9.016 9.016 0 0 1-2.985.508m-8.99-8.988a8.94 8.94 0 0 1 .778-3.658l4.287 11.749a8.993 8.993 0 0 1-5.065-8.091m8.99-10c-5.513 0-10 4.487-10 10s4.487 10 10 10 10-4.487 10-10-4.487-10-10-10"></path></svg></span>',
				'xing'			=> '<span class="xe-social-icon xing"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M20.462 3.23c.153 0 .307.078.384.155a.49.49 0 0 1 0 .461l-6.077 10.77 3.846 7.076a.49.49 0 0 1 0 .462.588.588 0 0 1-.384.154h-2.77c-.384 0-.615-.308-.769-.539l-3.923-7.154C11 14.308 16.923 3.77 16.923 3.77c.154-.307.385-.538.77-.538h2.769zM8.923 7c.385 0 .615.308.77.538l1.922 3.308c-.153.154-3 5.23-3 5.23-.153.232-.384.54-.769.54H5.154a.588.588 0 0 1-.385-.154.49.49 0 0 1 0-.462l2.846-5.154-1.846-3.23a.49.49 0 0 1 0-.462A.588.588 0 0 1 6.154 7h2.77z"/></svg></span>',
				'yelp'			=> '<span class="xe-social-icon yelp"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M18.824 16.675c-.105.726-1.587 2.609-2.269 2.882-.232.093-.457.07-.637-.068-.116-.09-.235-.272-1.833-2.866l-.475-.773c-.183-.277-.148-.642.078-.92.223-.27.549-.37.832-.262.016.008 1.195.397 1.195.397 2.688.883 2.775.917 2.891 1.002.17.139.249.356.214.608h.004zm-5.386-3.946c-.19-.289-.187-.63.01-.865l.746-1.019c1.642-2.235 1.732-2.353 1.843-2.431a.636.636 0 0 1 .652-.024c.651.316 1.966 2.269 2.045 3.019v.025a.623.623 0 0 1-.259.587c-.123.079-.235.125-3.291.866-.483.123-.752.19-.91.247l.021-.023c-.302.091-.64-.055-.831-.357l-.026-.025zm-1.875-1.159c-.146.046-.591.185-1.139-.702 0 0-3.694-5.813-3.78-5.992-.053-.201.011-.429.19-.613.55-.569 3.534-1.405 4.315-1.215.255.066.43.227.491.453.045.25.408 5.646.46 6.854.051 1.034-.392 1.171-.537 1.215zm.487 5.913c-.008 2.827-.015 2.922-.061 3.056-.079.211-.26.352-.51.398-.72.122-2.972-.71-3.441-1.267a.739.739 0 0 1-.157-.37c-.013-.09 0-.18.033-.259.057-.146.135-.259 2.158-2.63l.594-.706c.203-.26.563-.338.899-.204.325.124.528.405.506.708v1.259l-.021.015zm-6.13-1.808c-.222-.006-.42-.14-.535-.358-.083-.162-.142-.428-.18-.752-.102-.974.023-2.444.314-2.911.138-.214.338-.327.559-.319.146 0 .276.046 3.167 1.236l.848.337c.302.111.489.427.472.787-.022.348-.224.616-.521.696l-1.202.382c-2.689.864-2.778.888-2.919.877l-.003.025zm11.22 5.322h-.004l-.003.003.007-.003z"></path></svg></span>',
				'youtube'		=> '<span class="xe-social-icon youtube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/></svg></span>'
			)
		);

		return ( isset( $social_network_icons[$social_network] ) ) ? $social_network_icons[$social_network] : false;
	}
}




