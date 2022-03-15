<?php 
?>
<div class="xe-header-element is-woo-minicart-icon">
    <div id="xe-woo-minicart-icon">
        <button class="xe-button xe-false-button" id="xe-woo-minicart-button">
                
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>

            <span class="count">
                <?php
                    global $woocommerce;
                    echo $woocommerce->cart->cart_contents_count;
                ?>
            </span>
        </button>
    </div><!-- // xe-woo-minicart-icon -->
</div><!-- // xe-header-element -->

<aside id="xe-woo-minicart-canvas" class="close">
    <div class="xe-woo-minicart-inner">
        <header class="xe-woo-minicart-header">
            <h3 class="xe-woo-minicart-title">Shopping Cart</h3>
            <button class="xe-button xe-false-button" id="xe-woo-minicart-close">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                <g>
                    <path d="M30.2,57.2c-0.7,0-1.4-0.2-2-0.7L3.5,36.7c-1.4-1.1-2.2-2.8-2.2-4.7s0.8-3.5,2.2-4.7L28.2,7.5c1-0.8,2.2-0.9,3.3-0.4
                        c1.1,0.5,1.8,1.6,1.8,2.8v11.1c8.5,1.2,16.2,5,22,10.7c3.9,4,5.9,7.8,7,13.4c0.2,1.3,0.4,3.4,0.4,6.4c0,1.2-0.6,2.3-1.6,2.8
                        c-1,0.6-2.3,0.5-3.2-0.1c-9-5.8-17.4-9.3-24.5-10.2V54c0,1.2-0.7,2.3-1.8,2.8C31.1,57.1,30.7,57.2,30.2,57.2z M29.9,10.7L5.7,30.1
                        c-0.6,0.5-0.9,1.2-0.9,1.9c0,0.8,0.3,1.5,0.9,1.9l24.2,19.4V42.2c0-0.5,0.2-0.9,0.6-1.3c0.4-0.3,0.8-0.5,1.3-0.5
                        c9.9,0.6,20.3,6,27.5,10.6c-0.1-2.4-0.2-4.2-0.4-5.1c-1-5-2.6-8.1-6-11.7c-5.5-5.5-13.2-9-21.4-9.9c-0.9-0.1-1.6-0.8-1.6-1.7V10.7z
                        "/>
                </g>
                </svg>
            </button>
        </header>
        <div id="xe-woo-minicart-entry">
            <?php woocommerce_mini_cart(); ?>
        </div>
    </div><!-- // xe-woo-minicart-inner -->
</aside>
<div id="xe-woo-minicart-overlay" class="hidden"></div>