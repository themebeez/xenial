<?php 
?>
<div class="xe-header-element is-woo-wishlist-icon">
    <div id="xe-woo-wishlist-icon">
        <a href="#" id="xe-wishlist-link">       
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            <span class="count">
                <?php
                    if ( function_exists( 'addonify_wishlist_get_total_items' ) ) {

                        echo addonify_wishlist_get_total_items();
                    }
                ?>
            </span>
        </a>
    </div><!-- // xe-woo-wishlist-icon -->
</div><!-- // xe-header-element -->