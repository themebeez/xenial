'use strict';

/**
 * 
 * WooCommerce vertical navigation.
 * 
*/

function xeWooCommerceVerticalNavigation() {

    var xeWooNavContainerEle = document.querySelectorAll(".xe-woo-vertical-navigation");
    var xeWooDesktopToggleEle = document.querySelectorAll(".xe-woo-vertical-menu-toggle");

    var xeWooNavMobileOptions = {

        plus: "ti-plus",
        minus: "ti-minus",
        revealing: true,
        submenutoggle: "<button class='xe-button xe-false-button xe-toggle-woovertical-submenu'><i class='ti - plus'></button>",
    };

    if (xeWooNavContainerEle) {

        xeWooNavContainerEle.forEach(function (containerEle) {

            var xeWooNavContainerEleAttribute = containerEle.getAttribute("xe-woo-navigation-open-behaviour");
            var xeWooNavMenuEle = containerEle.getElementsByTagName("ul")[0];

            if ((xeWooNavContainerEleAttribute == "click")) {

                if (xeWooDesktopToggleEle) {

                    xeWooDesktopToggleEle.forEach(function (toggleEle) {

                        toggleEle.addEventListener("click", function () {

                            containerEle.classList.toggle("visible");
                        });
                    });
                }
            }
        });
    }
}


/**
 * 
 * WooCommerce Mini Cart.
 * 
*/

function xeWooCommerceMiniCart() {

    var xeWooMiniCartTriggerEle = document.querySelectorAll(".xe-woo-minicart-button");
    var xeWooMiniCartCanvasEle = document.getElementById("xe-woo-minicart-canvas");
    var xeWooCommerceMiniCartCloseEle = document.getElementById("xe-woo-minicart-close");
    var xeWooCommerceMiniCartOverlay = document.getElementById("xe-woo-minicart-overlay");

    if (xeWooMiniCartTriggerEle.length > 0) {

        xeWooMiniCartTriggerEle.forEach(function (element) {

            element.addEventListener("click", function () {

                body.classList.add("xe-woo-minicart-is-open");
                xeWooMiniCartCanvasEle.classList.add("open");
                xeWooMiniCartCanvasEle.classList.remove("close");
                xeWooCommerceMiniCartOverlay.classList.add("visible");
                xeWooCommerceMiniCartOverlay.classList.remove("hidden");
            });
        });
    }

    if (xeWooCommerceMiniCartCloseEle) {

        xeWooCommerceMiniCartCloseEle.addEventListener("click", function () {

            body.classList.remove("xe-woo-minicart-is-open");
            xeWooMiniCartCanvasEle.classList.remove("open");
            xeWooMiniCartCanvasEle.classList.add("close");
            xeWooCommerceMiniCartOverlay.classList.remove("visible");
            xeWooCommerceMiniCartOverlay.classList.add("hidden");
        });
    }

    if (xeWooCommerceMiniCartOverlay) {

        xeWooCommerceMiniCartOverlay.addEventListener("click", function () {

            body.classList.remove("xe-woo-minicart-is-open");
            xeWooMiniCartCanvasEle.classList.remove("open");
            xeWooMiniCartCanvasEle.classList.add("close");
            xeWooCommerceMiniCartOverlay.classList.remove("visible");
            xeWooCommerceMiniCartOverlay.classList.add("hidden");
        });
    }
}


/**
 * 
 * WooCommmerce mini cart scroll bar.
 * 
*/

function xeMiniCartScrollBar() {

    var xeMiniCartScrollBarContainer = document.getElementById('xe-woo-minicart-scroll');

    if (xeMiniCartScrollBarContainer) {

        new PerfectScrollbar(xeMiniCartScrollBarContainer, {

            wheelSpeed: 10,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    }
}


document.addEventListener("DOMContentLoaded", function () {

    xeWooCommerceVerticalNavigation();
    xeWooCommerceMiniCart();
    xeMiniCartScrollBar();
});
