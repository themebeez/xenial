<?php 

$woo_dropdown_element_classes = array( 'xe-header-element', 'is-menu is-vertical-menu' );
$woo_dropdown_device_visibilities = xenial_get_option( 'header_ele_woo_dropdown_visibility' );

if ( $woo_dropdown_device_visibilities ) {
    $woo_dropdown_device_visibilities = explode( ',', $woo_dropdown_device_visibilities );
    foreach ( $woo_dropdown_device_visibilities as $woo_dropdown_device_visibility ) {
        $woo_dropdown_element_classes[] = xenial_get_device_visibility_class( $woo_dropdown_device_visibility );
    }
} 

$woo_dropdown_toggle_on = xenial_get_option( 'header_ele_woo_dropdown_toggle_on' );
?>
<div class="<?php echo esc_attr( implode( ' ', $woo_dropdown_element_classes ) ); ?>">
    <nav id="xe-woo-vertical-navigation" xe-woo-navigation-open-behaviour="<?php echo esc_attr( $woo_dropdown_toggle_on ); ?>">
        <?php 
        $woo_dropdown_toggle_btn_label = xenial_get_option( 'header_ele_woo_dropdown_btn_label' );
        if ( $woo_dropdown_toggle_btn_label ) {
            ?>
            <button id="xe-woo-vertical-menu-toggle">
                <span class="label"><?php echo esc_html( $woo_dropdown_toggle_btn_label ); ?></span>
                <span class="icon">
                    <svg x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                        <g>
                            <path d="M3,7.5h42.2c1,0,1.8-0.8,1.8-1.8S46.1,4,45.2,4H3C2,4,1.3,4.8,1.3,5.7S2,7.5,3,7.5z" />
                            <path d="M3,25h50.1c1,0,1.8-0.8,1.8-1.8s-0.8-1.8-1.8-1.8H3c-1,0-1.8,0.8-1.8,1.8S2,25,3,25z" />
                            <path d="M3,42.5h34.3c1,0,1.8-0.8,1.8-1.8S38.2,39,37.3,39H3c-1,0-1.8,0.8-1.8,1.8S2,42.5,3,42.5z" />
                            <path d="M61,56.5H3c-1,0-1.8,0.8-1.8,1.8S2,60,3,60h58c1,0,1.8-0.8,1.8-1.8S62,56.5,61,56.5z" />
                        </g>
                    </svg>
                </span>
                <span class="menu-bar mobile"></span>
            </button>
            <?php 
        }

        $woo_dropdown_menu = xenial_get_option( 'header_ele_woo_dropdown_menu' );
        if ( $woo_dropdown_menu ) {
            wp_nav_menu( array(
                'menu' => xenial_get_nav_menu_slug( $woo_dropdown_menu ),
                'container' => '',
                'items_wrap' => xenial_woo_dropdown_menu_items_wrap()
            ) );
        }
        ?>
    </nav><!-- // xe-woo-vertical-navigation -->
</div><!-- // xe-header-element -->