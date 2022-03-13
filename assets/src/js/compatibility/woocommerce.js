'use strict';

const xebody = document.querySelector('body');

function xeWooCommerceVerticalNavigation() {

    var xeWooNavContainerEle = document.getElementById("xe-woo-vertical-navigation");
    var xeWooNavContainerEleAttribute = xeWooNavContainerEle.getAttribute("xe-woo-navigation-open-behaviour");
    var xeWooDesktopToggleEle = document.getElementById("xe-woo-vertical-menu-toggle");
    var xeWooNavMenuEle = xeWooNavContainerEle.getElementsByTagName("ul")[0];
    var xeWooNavMobileOptions = {

        plus: "ti-plus",
        minus: "ti-minus",
        submenutoggle: "<button class='xe-button xe-false-button xe-toggle-woovertical-submenu'><i class='ti - plus'></button>"
    };


    if (xeWooNavContainerEleAttribute == "click") {

        xeWooDesktopToggleEle.addEventListener("click", function () {

            xeWooNavContainerEle.classList.toggle("visible");
        });
    }
}

function xeWooCommerceMiniCart() {

    var xeWooMiniCartTriggerEle = document.getElementById("xe-woo-minicart-button");
    var xeWooMiniCartCanvasEle = document.getElementById("xe-woo-minicart-canvas");
    var xeWooCommerceMiniCartCloseEle = document.getElementById("xe-woo-minicart-close");
    var xeWooCommerceMiniCartOverlay = document.getElementById("xe-woo-minicart-overlay");

    if ((xeWooMiniCartTriggerEle !== null) || (xeWooMiniCartTriggerEle !== undefined)) {

        xeWooMiniCartTriggerEle.addEventListener("click", function () {

            body.classList.add("xe-woo-minicart-is-open");
            xeWooMiniCartCanvasEle.classList.add("open");
            xeWooMiniCartCanvasEle.classList.remove("close");
            xeWooCommerceMiniCartOverlay.classList.add("visible");
            xeWooCommerceMiniCartOverlay.classList.remove("hidden");
        });

        xeWooCommerceMiniCartCloseEle.addEventListener("click", function () {

            body.classList.remove("xe-woo-minicart-is-open");
            xeWooMiniCartCanvasEle.classList.remove("open");
            xeWooMiniCartCanvasEle.classList.add("close");
            xeWooCommerceMiniCartOverlay.classList.remove("visible");
            xeWooCommerceMiniCartOverlay.classList.add("hidden");
        });

        xeWooCommerceMiniCartOverlay.addEventListener("click", function () {

            body.classList.remove("xe-woo-minicart-is-open");
            xeWooMiniCartCanvasEle.classList.remove("open");
            xeWooMiniCartCanvasEle.classList.add("close");
            xeWooCommerceMiniCartOverlay.classList.remove("visible");
            xeWooCommerceMiniCartOverlay.classList.add("hidden");
        });

    }
}

document.addEventListener("DOMContentLoaded", function () {

    xeWooCommerceVerticalNavigation();
    xeWooCommerceMiniCart();
});