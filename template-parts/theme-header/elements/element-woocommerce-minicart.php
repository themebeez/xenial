<?php 
?>
<div class="xe-header-element is-woo-minicart-icon">
    <div id="xe-woo-minicart-icon">
        <button class="xe-button xe-false-button" id="xe-woo-minicart-button">
            <svg viewBox="0 0 64 64" xml:space="preserve">
                <g>
                    <path d="M40.9,48.2c-3.9,0-7.1,3.3-7.1,7.3c0,4,3.2,7.3,7.1,7.3s7.1-3.3,7.1-7.3C48.1,51.5,44.9,48.2,40.9,48.2z M40.9,59.3
		c-2,0-3.6-1.7-3.6-3.8c0-2.1,1.6-3.8,3.6-3.8s3.6,1.7,3.6,3.8C44.6,57.6,42.9,59.3,40.9,59.3z" />
                    <path d="M18.2,48.2c-3.9,0-7.1,3.3-7.1,7.3c0,4,3.2,7.3,7.1,7.3s7.1-3.3,7.1-7.3C25.4,51.5,22.2,48.2,18.2,48.2z M18.2,59.3
		c-2,0-3.6-1.7-3.6-3.8c0-2.1,1.6-3.8,3.6-3.8s3.6,1.7,3.6,3.8C21.9,57.6,20.2,59.3,18.2,59.3z" />
                    <path d="M57.8,1.3h-6.4c-1.5,0-2.8,1.1-3,2.6l-1.8,13.2H7.3c-0.9,0-1.7,0.4-2.2,1.1c-0.5,0.7-0.7,1.6-0.5,2.4c0,0,0,0.1,0,0.1
		l6.1,18.9c0.3,1.2,1.4,2.1,2.8,2.1h29.5c2.2,0,4-1.6,4.3-3.8l4.6-33.2h6c1,0,1.8-0.8,1.8-1.8S58.8,1.3,57.8,1.3z M43.7,37.4
		c-0.1,0.4-0.4,0.8-0.9,0.8h-29L8.1,20.6h37.9L43.7,37.4z" />
                </g>
            </svg>
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