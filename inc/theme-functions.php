<?php
/**
 * Funtion To Get Google Fonts
 */
if ( ! function_exists( 'xenial_google_fonts' ) ) {
    /**
     * Return Font's URL.
     *
     * @since 1.0.0
     * @return string Fonts URL.
     */
    function xenial_google_fonts() {

        $fonts_url = '';
        $fonts = array();
        $subsets = 'latin,latin-ext';

        $body_font_type = xenial_get_option( 'body_font_type' );

        if ( $body_font_type == 'google_font' ) {

            $body_google_font = xenial_get_option( 'body_google_font' );

            $fonts[] = xenial_get_google_font_url( $body_google_font );
        }

        $headings_font_type = xenial_get_option( 'headings_font_type' );

        if ( $headings_font_type == 'google_font' ) {

            $headings_google_font = xenial_get_option( 'headings_google_font' );

            $fonts[] = xenial_get_google_font_url( $headings_google_font );
        }

        $logo_font_type = xenial_get_option( 'site_identity_font_type' );

        if ( $logo_font_type == 'google_font' ) {

            $logo_google_font = xenial_get_option( 'site_identity_google_font' );

            $fonts[] = xenial_get_google_font_url( $logo_google_font );
        }

        $fonts = array_unique( $fonts );

        foreach ( $fonts as $f) {

            $f_family = explode(':', $f);

            $f_family = str_replace('+', ' ', $f_family);

            $font_family = ( !empty( $f_family[1]) ) ? $f_family[1] : '';

            $fonts[] = $f_family[0].':'.$font_family;

        }

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => rawurlencode( implode( '|', $fonts ) ),
                'subset' => rawurlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
    }
}


if ( ! function_exists( 'xenial_get_google_font_url' ) ) {

    function xenial_get_google_font_url( $font ) {

        $font_url = '';

        $googe_font = json_decode( $font, true );

        $font_url = $googe_font['font'];

        if ( $googe_font['regularweight'] ) {

            $font_url .= ':';

            $font_weights = '';

            foreach ( $googe_font['regularweight'] as $font_weight ) {
                
                if ( $font_weights ) {
                    $font_weights .= ',';
                }

                if ( $font_weight === 'italic' ) {
                    $font_weights .= '400i';
                } else if ( $font_weight === 'regular' ) {
                    $font_weights .= '400';
                } else {
                    $font_weights .= str_replace(  'italic', 'i', $font_weight );
                }
            }

            $font_url .= $font_weights;
        }

        return $font_url;
    }
}


/**
 * Fallback callback for primary navigation menu. 
 */
if ( ! function_exists( 'xenial_navigation_fallback' ) ) {

    function xenial_navigation_fallback() {
        ?>
        <ul class="primary-menu">
            <?php 
            wp_list_pages( array( 
                'title_li' => '', 
                'depth' => 1
            ) ); 
            ?>
        </ul><!-- .primary-menu -->
        <?php    
    }
}


/**
 * Filters For Excerpt Length
 */
if( !function_exists( 'xenial_excerpt_length' ) ) :
    /*
     * Excerpt More
     */
    function xenial_excerpt_length( $length ) {

        if( is_admin() ) {

            return $length;
        }

        $excerpt_length = xenial_get_option( 'archive_excerpt_length' );

        if ( absint( $excerpt_length ) > 0 ) {
            
            $excerpt_length = absint( $excerpt_length );
        }

        return $excerpt_length;
    }
endif;
add_filter( 'excerpt_length', 'xenial_excerpt_length' );


/**
 * Filter For Excerpt More
 */
if( !function_exists( 'xenial_excerpt_more' ) ) :

    function xenial_excerpt_more( $more ) {

        if ( xenial_get_option( 'archive_excerpt_more' ) ) {

            return esc_html( xenial_get_option( 'archive_excerpt_more' ) );
        } else {
            return $more;
        }
    }
endif;
add_filter( 'excerpt_more', 'xenial_excerpt_more' );



if ( ! function_exists( 'xenial_nav_description' ) ) {

    function xenial_nav_description( $item_output, $item, $depth, $args ) {

        if ( ! empty( $item->description ) ) {

            $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
        }
     
        return $item_output;
    }
}
add_filter( 'walker_nav_menu_start_el', 'xenial_nav_description', 10, 4 );


if ( ! function_exists( 'xenial_comments_callback' ) ) {

    function xenial_comments_callback( $comment, $args, $depth ) {

        if ( 'div' === $args['style'] ) {

            $tag       = 'div';
            $add_below = 'comment';
        } else {
            $tag       = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>">
        <?php 
        if ( 'div' != $args['style'] ) { 
            ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
            <?php
        } 
        ?>
        <div class="comment-author vcard">
            <div class="comment-author-avatar">
                <?php 
                if ( $args['avatar_size'] != 0 ) {
                    ?>
                    <figure>
                        <img class="avatar" src="<?php echo esc_url( get_avatar_url( $comment->user_id, ['size' => '75'] ) ); ?>" alt="<?php echo esc_attr( get_comment_author() ); ?>" height="75" width="75">
                    </figure>
                    <?php
                } 
                ?>
            </div>
            <div class="comment-author-content">
                <div class="comment-author-info">
                    <?php
                    /* translators: %s: author link */ 
                    printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>', 'xenial' ), wp_kses_post( get_comment_author_link() ) );  ?>
                    <div class="comment-meta commentmetadata">
                        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                            <?php
                            /* translators: 1: date, 2: time */
                            printf( esc_html__( '%1$s at %2$s', 'xenial' ), get_comment_date(),  get_comment_time() 
                            ); ?>
                        </a>
                        <?php edit_comment_link( esc_html__( '(Edit)', 'xenial' ), '', '' ); ?>
                    </div>
                </div>
                <?php 
                if ( $comment->comment_approved == '0' ) { 
                    ?>
                    <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'xenial' ); ?></em><br/>
                    <?php 
                } 
                ?>
                <div class="comment-author-comment">
                    <?php comment_text(); ?>
                </div>
                <div class="reply">
                    <?php 
                    comment_reply_link( 
                        array_merge( 
                            $args, 
                            array( 
                                'add_below' => $add_below, 
                                'depth'     => $depth, 
                                'max_depth' => $args['max_depth'] 
                            ) 
                        ) 
                    ); 
                    ?>
                </div>
            </div>
        </div>
        <?php
        if ( 'div' != $args['style'] ) : 
            ?>
            </div>
            <?php 
        endif;
    }
}


if ( ! function_exists( 'xenial_get_nav_menu_slug' ) ) {

    function xenial_get_nav_menu_slug( $menu_id ) {

        if ( $menu_id ) {

            $menu_obj = wp_get_nav_menu_object( $menu_id );

            return $menu_obj->slug;
        }

    }
}