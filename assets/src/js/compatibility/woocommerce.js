'use strict';

var xeWooNavContainerEle = document.getElementById("xe-woo-vertical-navigation");
var xeWooNavContainerEleAttribute = xeWooNavContainerEle.getAttribute("xe-woo-navigation-open-behaviour");
var xeWooDesktopToggleEle = document.getElementById("xe-woo-vertical-menu-toggle");
var xeWooNavMenuEle = xeWooNavContainerEle.getElementsByTagName("ul")[0];
var xeWooNavMobileOptions = {

    plus: "ti-plus",
    minus: "ti-minus",
    submenutoggle: "<button class='xe-button xe-false-button xe-toggle-woovertical-submenu'><i class='ti - plus'></button>"
};

function xeWooCommerceVerticalNavigation() {

    //console.log(xeWooNavMenuEle);

    if (xeWooNavContainerEleAttribute == "click") {

        xeWooDesktopToggleEle.addEventListener("click", function () {

            xeWooNavContainerEle.classList.toggle("visible");
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {

    xeWooCommerceVerticalNavigation();
});