'use strict';

/*
====================================================================
= 
= Since: 1.0.0
= Function: window.onscroll. Only load functions once window is scrolled.
= 
===============================================================================================
*/

// define variables & constants

const body = document.body;
const stickyHeaderTop = body.offsetTop;
const windowYoffset = window.pageYOffset;
var xePrimaryHeader = document.getElementById("xe-mastheader");

// function: window.scroll 

window.onscroll = function () {

    // init 
    var xeInitAll = function () {

        xeStickyHeader();
    };

    xeInitAll();

    // function: sticky header

    function xeStickyHeader() {

        if (windowYoffset > stickyHeaderTop && xePrimaryHeader !== null) {

            body.classList.add('xe-sticky-header');
            console.log("Sticky header class added to body.");

        } else {

            body.classList.remove('xe-sticky-header');
        }
    }

};









