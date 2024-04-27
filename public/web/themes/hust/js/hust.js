/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

/* Các tùy chỉnh JS của giao diện nên để vào đây */

//sticky menu when scroll
var timercheckMenuSticky;
function checkMenuSticky() {
    var scroll = $(window).scrollTop();
    if (scroll> $('.menu-fixed').outerHeight()) {
        $(".menu-fixed").addClass("sticky");
        // $(".bg-menu-mobile").addClass("sticky");
        // $(".section-body").css({
        //     "padding-top": $(".menu-fixed").outerHeight() + "px"
        // });
    } else {
        $(".menu-fixed").removeClass("sticky");
        // $(".bg-menu-mobile").removeClass("sticky");
        // $(".section-body").css({
        //     "padding-top": "0px"
        // });
    }
}

$(window).on('resize', function(e) {
    if (timercheckMenuSticky) {
        clearTimeout(timercheckMenuSticky);
    }
    timercheckMenuSticky = setTimeout(function() {
        checkMenuSticky();
    }, 100);
});

$(window).on('scroll', function(e) {
    checkMenuSticky();
});

$(document).ready(function() {
    $('.searchbtn').on('click', function (){
        $('.header-bar-search').slideToggle();
    });

    $('.btn-toggle-mobile-menu').on('click', function (){
        if ( $('.mobile-menu-items').hasClass('active')) {
            $('.mobile-menu-items').removeClass('active');
        } else {
            $('.mobile-menu-items').addClass('active');
            $('.mobile-menu-items').find('.slimmenu').removeAttr('style');
        }
    });

    $('.custom-fa').on('click', function (){
        if ($(this).hasClass('fa-angle-down')) {
            $(this).removeClass('fa-angle-down').addClass('fa-angle-up');
        } else {
            $(this).removeClass('fa-angle-up').addClass('fa-angle-down');
        }
        $(this).parent().parent().addClass('active');
        $(this).parent().parent().siblings().removeClass('active');
        $(this).parent().parent().siblings().find('ul').slideUp('1000');
        $(this).parent().parent().siblings().find('.custom-fa').removeClass('fa-angle-up').addClass('fa-angle-down');
        $(this).parent().next('ul').slideToggle();
    });

    /* Tuỳ chỉnh căn đều mũi tên dropdown cho menu khi tiêu đề quá dài  */
    $('.metismenu ul>li').each(function (index, element) {
        var this_e = $(this).find('.arrow');
        var a_length = $(this).find('a:first').text().length;
        if (a_length >= 25 && a_length <= 50) {
            this_e.css('margin-top', '-52px');
        } else if (a_length >= 50) {
            this_e.css('margin-top', '-60px');
        } else {
            this_e.css('margin-top', '-36px');
        }
    });

    $('.metismenu ul>li>.arrow').on('click', function(){
        var a_length = $(this).prev().text().length;
        if (a_length >= 25 && a_length <= 50) {
            $(this).css('margin-top', '-52px');
        } else if (a_length > 50) {
            $(this).css('margin-top', '-60px');
        } else {
            $(this).css('margin-top', '-36px');
        }
    });
});