'use strict';

/*
====================================================================
= 
= Since: 1.0.0
= Function: DOMContentLoaded. Only load functions once DOM is loaded.
= 
===============================================================================================
*/

let body = document.body;

/**
 * 
 * Tooltip function.
 * 
*/

function xeToolTip() {

    tippy(".xe-tippy", {
        content: "",
        allowHTML: false,
        arrow: true,
        delay: 10,
        duration: 350,
        maxWidth: 350,
        placement: "left",
        animation: "scale",
        onTrigger: function (instance) {

            // Support for Addonify wishlist.

            if (instance.reference.classList.contains('added-to-wishlist')) {

                // get the 'data-tippy-content' attribute of the element.
                var tooltipContent = instance.reference.getAttribute('data-tippy-content');
                // change the tooltip content.
                instance.setContent(tooltipContent);
            }
        },
    });
}


/**
 * 
 * Comment function.
 * 
*/

function xeToggleComment() {

    var commentToggleBtn = document.getElementById("xe-comment-toggle-btn");

    if (commentToggleBtn) {

        commentToggleBtn.addEventListener('click', function () {

            body.classList.toggle("xe-visible-comments");
        });
    }
}


/**
 * 
 * Back to top button.
 * 
*/

function xeBackToTopButton() {

    var backToTopBtn = document.getElementById("xe-backtotop-button");

    window.addEventListener('scroll', function () {

        var yAxisHeight = window.pageYOffset;

        if (backToTopBtn) {

            if (yAxisHeight > 600) {

                backToTopBtn.classList.add("visible");

            } else {

                backToTopBtn.classList.remove("visible");
            }

            backToTopBtn.addEventListener('click', function () {

                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
}


/**
 * 
 * Header Search.
 * 
*/

function xeSearch() {

    var searchButton = document.querySelectorAll('.xe-header-element-search-button');
    var closeSearchBoxButton = document.getElementById('xe-close-search-box');

    if (searchButton.length > 0) {

        searchButton.forEach(function (searchModalTriggerBtn) {

            searchModalTriggerBtn.addEventListener('click', function () {

                body.classList.add('xe-visible-search-form');
            });
        });
    }

    if (closeSearchBoxButton) {

        closeSearchBoxButton.addEventListener('click', function () {

            body.classList.remove('xe-visible-search-form');
        });
    }
}


/**
 * 
 * Canvas navigation.
 * 
*/

function xeMobileCanvasNavigation() {

    var mobileCanvas = document.getElementById("xe-mobile-canvas");
    var mobileCanavsMask = document.getElementById('xe-mobile-canvas-mask');
    var mobileCanavsTriggerButton = document.querySelectorAll('.xe-mobile-canvas-trigger-button');
    var mobileCanvasCloseButton = document.getElementById('xe-mobile-canvas-close-button');

    var mobileCanvasNavChildren = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation li.menu-item-has-children");
    var subMenuTooglePlusIconClass = "ti-plus";
    var subMenuToogleMinusIconClass = "ti-minus";
    var appendSubMenuToggleBtn = '<button class="xe-button xe-false-button xe-toggle-canvassubmenu"><i class="ti-plus"></button>';

    if (mobileCanavsTriggerButton.length > 0) {

        mobileCanavsTriggerButton.forEach(function (ele) {

            ele.addEventListener('click', function () {

                body.classList.add('xe-visible-mobile-canvas');
            });
        });
    }

    if (mobileCanavsMask) {

        mobileCanavsMask.addEventListener('click', function () {

            body.classList.remove('xe-visible-mobile-canvas');
        });
    }

    if (mobileCanvasCloseButton) {

        mobileCanvasCloseButton.addEventListener('click', function () {

            body.classList.remove('xe-visible-mobile-canvas');
        });
    }

    if (mobileCanvas) {

        if (mobileCanvasNavChildren) {

            mobileCanvasNavChildren.forEach(function (child) {

                child.insertAdjacentHTML('beforeend', appendSubMenuToggleBtn);
            });
        }
    }

    // Attribute xe-submenu-style="" | options = default | revealing
    var mobileCanvasSubMenuStyleEle = document.querySelector("#xe-mobile-canvas .is-offcanvas-menu");

    if (mobileCanvasSubMenuStyleEle) {

        var mobileCanvasSubMenuStyleEleAttribute = mobileCanvasSubMenuStyleEle.getAttribute('xe-submenu-style');

        if (mobileCanvasSubMenuStyleEleAttribute == "revealing") {

            var mobileCanvasSubMenuBackButton = '<li class="goback"><button class="xe-button xe-false-button xe-canvassubmenu-goback-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 13v7l-8-8 8-8v7h8v2z" fill="rgba(105,105,105,1)"/></svg> <span class="text">Go Back</span></button></li>';
            var mobileCanvasSubMenuEle = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .sub-menu");

            if (mobileCanvasSubMenuEle) {

                mobileCanvasSubMenuEle.forEach(function (childEle) {

                    childEle.insertAdjacentHTML('afterbegin', mobileCanvasSubMenuBackButton);
                });
            }

            var mobileCanvasSubMenuBackButtonEle = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .sub-menu .xe-canvassubmenu-goback-button");

            if (mobileCanvasSubMenuBackButtonEle) {

                mobileCanvasSubMenuBackButtonEle.forEach(function (backBtn) {

                    backBtn.addEventListener('click', function () {

                        this.parentElement.parentElement.parentElement.classList.remove("xe-submenu-open");
                    });
                });
            }
        }
    }

    // Canvas submenu toggle button
    var mobileCanvasSubMenuToggleBtn = document.querySelectorAll("#xe-mobile-canvas .xe-offcanvas-navigation .menu-item-has-children .xe-toggle-canvassubmenu");

    if (mobileCanvasSubMenuToggleBtn) {

        mobileCanvasSubMenuToggleBtn.forEach(function (toggleBtn) {

            toggleBtn.addEventListener('click', function () {

                this.classList.toggle("active");
                this.parentElement.classList.toggle("xe-submenu-open");

                if (mobileCanvasSubMenuStyleEleAttribute !== "revealing") {

                    // Toggle plus/minus icon.
                    if (this.classList.contains("active")) {

                        this.querySelector("i").classList.remove(subMenuTooglePlusIconClass);
                        this.querySelector("i").classList.add(subMenuToogleMinusIconClass);

                    } else {

                        this.querySelector("i").classList.remove(subMenuToogleMinusIconClass);
                        this.querySelector("i").classList.add(subMenuTooglePlusIconClass);
                    }
                }
            });
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {

    xeToolTip();
    xeToggleComment();
    xeBackToTopButton();
    xeSearch();
    xeMobileCanvasNavigation();
});