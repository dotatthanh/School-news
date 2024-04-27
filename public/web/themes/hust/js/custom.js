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
var timercheckMenuStickys;
function checkMenuStickys() {
    var scrolls = $(window).scrollTop();
    if (scrolls> $('.menu-top-scroll').height()) {
        $(".menu-top-scroll").addClass("sticky");
    } else {
        $(".menu-top-scroll").removeClass("sticky");
    }
}

$(window).on('resize', function(e) {
    if (timercheckMenuStickys) {
        clearTimeout(timercheckMenuStickys);
    }
    timercheckMenuStickys = setTimeout(function() {
        checkMenuStickys();
    }, 100);
});

$(window).on('scroll', function(e) {
    checkMenuStickys();
});

$(document).ready(function() {
    // Tự động reponsive bảng ở tin tức
    $('#news-bodyhtml table').each(function() {
        if (!$(this).parent().is('.table-responsive')) {
            $(this).wrap('<div class="table-responsive table-responsive-all"></div>');
        }
    });

    // Tự động reponsive bảng ở page
    $('#page-bodyhtml table').each(function() {
        if (!$(this).parent().is('.table-responsive')) {
            $(this).wrap('<div class="table-responsive table-responsive-all"></div>');
        }
    });
});
