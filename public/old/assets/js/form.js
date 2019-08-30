$(function () {
    "use strict";

    // PRELOADER PART
    $(window).on('load', function () {
        $(".preloader").delay(2500).fadeOut(1000);
    });
    
    
    //backtop button

    var backtop = $('.backtop');

    $(window).on("scroll", function () {

        var scroLL = $(window).scrollTop();
        if (scroLL > 200) {
            backtop.fadeIn(1000);
        } else {
            backtop.fadeOut(1000);
        }
    });

    backtop.on('click', function () {

        $('html,body').animate({
            scrollTop: 0
        }, 500);
    });

});
