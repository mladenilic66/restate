// user dropdown menu
$(document).ready(function() {
    $(".user_dropdown").click(function() {
        $(".dropdown_content").slideToggle();
    });
});

/* ------------------------------------------------- */

// show or hide filters form
$(function () {
    $(".park_wrap a").click(function() {
    	$(".park_wrap a .fa-caret-down").toggleClass("arrow_rotate");
        $(".park_wrap_inner").toggle();
    });

    $(".heat_wrap a").click(function() {
    	$(".heat_wrap a .fa-caret-down").toggleClass("arrow_rotate");
        $(".heat_wrap_inner").toggle();
    });

    $(".price_wrap a").click(function() {
        $(".price_wrap a .fa-caret-down").toggleClass("arrow_rotate");
        $(".price_inner").toggle();
    });

    $(".qu_wrap a").click(function() {
        $(".qu_wrap .fa-caret-down").toggleClass("arrow_rotate");
        $(".qu_inner").toggle();
    });

    // 
    $(".dropbtn").click(function() {
    	$("dropbtn .fa-caret-down").toggleClass("arrow_rotate");
    });
});

/* ------------------------------------------------- */

// stay at the samo position when clicked
$('a[href^="#"]').click(function(e) {
    e.preventDefault();
});

/* ------------------------------------------------- */

// login & register dropdown menu
$(function () {
	//show or hide login form
    $(".log_form").hover(function() {
        $(".login").toggle();
    });
});

/* ------------------------------------------------- */

// show or hide filters menu on click
$(function () {
    $(".filter_dropdown a").click(function() {
        $(".filters_menu").slideToggle();
    });
});

/* ------------------------------------------------- */

// dropdown menu
$(document).ready(function() {
    $(".menu_dropdown").click(function() {
        $("#nav,.user_dropdown,.header_buttons").slideToggle();
    });
});

/* ------------------------------------------------- */

// load more data
$(function () {
    $(".data").slice(0, 12).show();
    $("#load_more").on('click', function (e) {
        e.preventDefault();
        $(".data:hidden").slice(0, 12).slideDown();

        if ($(".data:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        
        $("html,body").animate({
            scrollTop: $(this).offset().top
        }, 2000);
    });
});

/* ------------------------------------------------- */

// show menu (display fix)
$(document).ready(function() {

  var menu = $('.user_dropdown,#nav,#adv_search_form,.header_buttons');
  
    $(window).resize(function() {

        var window_width = $(window).width();

        if(window_width > 768 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});


// show filters menu (display fix)
$(document).ready(function() {

  var menu = $('.filters_menu');
  
    $(window).resize(function() {

        var window_width = $(window).width();

        if(window_width < 1023 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});

/* ------------------------------------------------- */

// show advanced filters
$(document).ready(function() {
    //show or hide login form
    $(".btn_filters").click(function() {
        $("#adv_search_form").slideToggle();
    });
});