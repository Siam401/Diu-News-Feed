$(function () {
    "use strict";

    // PRELOADER PART
    $(window).on('load', function () {
        $(".preloader").delay(2500).fadeOut(1000);
    });

    //SLICK PART
    $('.banner_part').slick({
        fade: true,
        Speed: 800,
        autoplaySpeed: 2000,
        dots: true,
        autoplay: true,
        arrows: true,
        nextArrow: '<i class="fas fa-arrow-circle-right"></i>',
        prevArrow: '<i class="fas fa-arrow-circle-left"></i>',
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    //SLICK PART
    $('.newsletter_text').slick({
        fade: true,
        cssEase: 'linear',
        Speed: 800,
        arrows: false,
        autoplaySpeed: 4000,
        autoplay: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
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
