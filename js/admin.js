$(document).ready(function(){
    $('.user_dropdown').click(function(){
        $(".dropdown_content").toggle();
    });

    //show or hide user dropdown on click
    $(".dropbtn").click(function(){
    	$(".fa-caret-down").toggleClass("arrow_rotate");
    });

    $(".btn_delete").click(function() {
	   return confirm("Are you sure you want to delete this?");
	});
});

$(document).ready(function() {
	$(".sidebar_content ul li").click(function() {
	    $(".sidebar_content ul li").removeClass("sidebar_active");

	    $(this).addClass("sidebar_active");
	});
});