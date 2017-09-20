// user dropdown menu
$(document).ready(function() {
    $(".user_dropdown").click(function() {
        $(".dropdown_content").toggle();
    });
});

// show or hide filters form
$(document).ready(function() {

    $(".f_btn_1").click(function() {
    	$(".f_btn_1 .fa-angle-down").toggleClass("arrow_rotate");
        $(".f_cnt_1").toggle();
        $(this).toggleClass("f_btn_color");
        $(".f_cnt_1 .f_cnt_2").hide();
    });

    $(".f_btn_2").click(function() {
    	$(".f_btn_2 .fa-angle-down").toggleClass("arrow_rotate");
        $(".f_cnt_2").toggle();
        $(this).toggleClass("f_btn_color");
        $(".f_cnt_1 .f_cnt_2").hide();
    });

    //show or hide user dropdown on click
    $(".dropbtn").click(function() {
    	$(".fa-caret-down").toggleClass("arrow_rotate");
    });
});


// login & register dropdown menu
$(document).ready(function() {

	//show or hide login form
    $(".log_form").hover(function() {
        $(".login").toggle();
    });

	//show or hide register form
    $(".register_form").hover(function() {
        $(".register").toggle();
    });
});



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