// strip inputs from html tags
function strip_tags(input) {
   var reg_ex = /(<([^>]+)>)/ig;
   return input.replace(reg_ex, "");
}

// add real estate form input validation
$(function() {

    $("#title_error").hide();
    $("#address_error").hide();
    $("#quadrature_error").hide();
    $("#price_error").hide();

    var title_er = false;
    var address_er = false;
    var quadrature_er = false;
    var price_er = false;

    $("#title").focusout(function() {
        valid_title();
    });

    $("#address").focusout(function() {
        valid_address();
    });

    $("#quadrature").focusout(function() {
        valid_quadrature();
    });

    $("#price").focusout(function() {
        valid_price();
    });

    function valid_title() {

        var title = $("#title").val();
        var title = strip_tags(title);
        var title = title.length;

        if(title < 5) {
            $("#title_error").html("Minimum 5 characters");
            $("#title_error").show();
            $(".title").addClass("error_outline");
            title_er = true;
        } else if(title > 50) {
            $("#title_error").html("Maximum 50 characters");
            $("#title_error").show();
            $(".title").addClass("error_outline");
            title_er = true;
        } else {
            $(".title").removeClass("error_outline");
            $("#title_error").hide();
        }
    }

    function valid_address() {
    
        var address = $("#address").val();
        var address = strip_tags(address);
        var address = address.length;
        
        if(address < 5) {
            $("#address_error").html("Minimum 5 characters");
            $("#address_error").show();
            $(".address").addClass("error_outline");
            address_er = true;
        } else if(address > 50) {
            $("#address_error").html("Maximum 50 characters");
            $("#address_error").show();
            $(".address").addClass("error_outline");
            address_er = true;
        } else {
            $(".address").removeClass("error_outline");
            $("#address_error").hide();
        }
    }

    function valid_quadrature() {

        var quadrature = $("#quadrature").val().length;

        if(quadrature < 1) {
            $("#quadrature_error").html("Should not be empty");
            $("#quadrature_error").show();
            $(".quadrature").addClass("error_outline");
            quadrature_er = true;
        } else {
            $(".quadrature").removeClass("error_outline");
            $("#quadrature_error").hide();
        }
    }

    function valid_price() {

        var price = $("#price").val().length;

        if(price < 1) {
            $("#price_error").html("Should not be empty");
            $("#price_error").show();
            $(".price").addClass("error_outline");
            price_er = true;
        } else {
            $(".price").removeClass("error_outline");
            $("#price_error").hide();
        }
    }

    $("#add_rs_form").submit(function() {
                                            
        title_er = false;
        address_er = false;
        quadrature_er = false;              
        price_er = false;
                                            
        valid_title();
        valid_address();
        valid_quadrature();
        valid_price();

        if(title_er == false && address_er == false && quadrature_er == false && price_er == false) {
            return true;
        } else {
            return false;   
        }
        
    });

});

// add user form input validation
$(function() {

    $("#username_error").hide();
    $("#password_error").hide();
    $("#first_name_error").hide();
    $("#last_name_error").hide();
    $("#password_rpt_error").hide();
    $("#email_error").hide();

    var username_er = false;
    var password_er = false;
    var first_name_er = false;
    var last_name_er = false;
    var password_rpt_er = false;
    var email_er = false;

    $("#username").focusout(function() {
        valid_username();
    });

    $("#password").focusout(function() {
        valid_password();
    });

    $("#password_rpt").focusout(function() {
        valid_password_rpt();
    });

    $("#first_name").focusout(function() {
        valid_first_name();
    });

    $("#last_name").focusout(function() {
        valid_last_name();
    });

    $("#email").focusout(function() {
        valid_email();
    });

    

    function valid_username() {

        var username = $("#username").val();
        var username = strip_tags(username);
        var username = username.length;

        if(username < 3) {
            $("#username_error").html("Minimum 3 characters");
            $("#username_error").show();
            $("#username").addClass("error_outline");
            username_er = true;
        } else if(username > 30) {
            $("#username_error").html("Maximum 30 characters");
            $("#username_error").show();
            $("#username").addClass("error_outline");
            username_er = true;
        } else {
            $("#username").removeClass("error_outline");
            $("#username_error").hide();
        }
    }

    function valid_password() {

        var password = $("#password").val();
        var password = password.length;

        if(password < 8) {
            $("#password_error").html("Minimum 8 characters");
            $("#password_error").show();
            $("#password").addClass("error_outline");
            password_er = true;
        } else if(password > 30) {
            $("#password_error").html("Maximum 30 characters");
            $("#password_error").show();
            $("#password").addClass("error_outline");
            password_er = true;
        } else {
            $("#password").removeClass("error_outline");
            $("#password_error").hide();
        }
    }

    function valid_password_rpt() {

        var password_1 = $("#password").val();
        var password_rpt = $("#password_rpt").val();

        if(password_rpt != password_1) {
            $("#password_rpt_error").html("Passwords do not match");
            $("#password_rpt_error").show();
            $("#password_rpt").addClass("error_outline");
            password_rpt_er = true;
        } else {
            $("#password_rpt").removeClass("error_outline");
            $("#password_rpt_error").hide();
        }
    }

    function valid_first_name() {

        var first_name = $("#first_name").val();
        var first_name = strip_tags(first_name);
        var first_name = first_name.length;

        if(first_name < 1) {
            $("#first_name_error").html("Should not be empty");
            $("#first_name_error").show();
            $("#first_name").addClass("error_outline");
            first_name_er = true;
        } else {
            $("#first_name").removeClass("error_outline");
            $("#first_name_error").hide();
        }
    }

    function valid_last_name() {

        var last_name = $("#last_name").val();
        var last_name = strip_tags(last_name);
        var last_name = last_name.length;

        if(last_name < 1) {
            $("#last_name_error").html("Should not be empty");
            $("#last_name_error").show();
            $("#last_name").addClass("error_outline");
            last_name_er = true;
        } else {
            $("#last_name").removeClass("error_outline");
            $("#last_name_error").hide();
        }
    }

    function valid_email() {

        var email = $("#email").val();
        var email_reg_ex = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(email_reg_ex.test(email)) {
            $("#email_error").hide();
            $("#email").removeClass("error_outline");
        } else {
            $("#email_error").html("Invalid email address");
            $("#email_error").show();
            $("#email").addClass("error_outline");
            email_er = true;
        }
    }

    $("#add_user_form").submit(function() {
                                            
        username_er = false;
        password_er = false;
        password_rpt_er = false;
        first_name_er = false;
        last_name_er = false;
        email_er = false;

        valid_title();
        valid_password();
        valid_password_rpt();
        valid_first_name();
        valid_last_name();
        valid_email();
        if(username_er == false && password_er == false && first_name_er == false && last_name_er == false && password_rpt_er == false && email_er == false) {
            return true;

        } else {
            return false;   
        }
    });
});


// criteria forms input validation
$(function() {

    $("#cities_error").hide();
    $("#equipment_error").hide();
    $("#structure_error").hide();

    var cities_er = false;
    var structure_er = false;
    var equipment_er = false;

    $("#cities").focusout(function() {
        valid_cities();
    });

    $("#structure").focusout(function() {
        valid_structure();
    });

    $("#equipment").focusout(function() {
        valid_equipment();
    });

    function valid_structure() {

        var structure = $("#structure").val();
        var structure = strip_tags(structure);
        var structure = structure.length;

        if(structure < 1) {
            $("#structure_error").html("Should not be empty");
            $("#structure_error").show();
            $("#structure").addClass("error_outline");
            structure_er = true;
        } else {
            $("#structure").removeClass("error_outline");
            $("#structure_error").hide();
        }
    }

    function valid_cities() {

        var cities = $("#cities").val();
        var cities = strip_tags(cities);
        var cities = cities.length;

        if(cities < 1) {
            $("#cities_error").html("Should not be empty");
            $("#cities_error").show();
            $("#cities").addClass("error_outline");
            cities_er = true;
        } else {
            $("#cities").removeClass("error_outline");
            $("#cities_error").hide();
        }
    }

    function valid_equipment() {

        var equipment = $("#equipment").val();
        var equipment = strip_tags(equipment);
        var equipment = equipment.length;

        if(equipment < 1) {
            $("#equipment_error").html("Should not be empty");
            $("#equipment_error").show();
            $("#equipment").addClass("error_outline");
            equipment_er = true;
        } else {
            $("#equipment").removeClass("error_outline");
            $("#equipment_error").hide();
        }
    }

    $("#add_city_form").submit(function() {
                                            
        cities_er = false;                               
        valid_cities();

        if(cities_er == false) {
            return true;
        } else {
            return false;   
        }
    });

    $("#add_structure_form").submit(function() {
                                                
        structure_er = false;                               
        valid_structure();

        if(structure_er == false) {
            return true;
        } else {
            return false;   
        }
    });

    $("#add_equipment_form").submit(function() {
                                                
        equipment_er = false;                               
        valid_equipment();

        if(equipment_er == false) {
            return true;
        } else {
            return false;   
        }
    });
});


// login/register forms input validation
$(document).ready(function() {
    
    $("#username_r_error").hide();
    $("#first_name_r_error").hide();
    $("#last_name_r_error").hide();
    $("#password_r_error").hide();
    $("#password_rpt_r_error").hide();
    $("#email_r_error").hide();

    var username_r_er = false;
    var first_name_r_er = false;
    var last_name_r_er = false;
    var password_r_er = false;
    var password_rpt_r_er = false;
    var email_r_er = false;

    $("#username_r").focusout(function() {
        valid_username_r();
    });

    $("#first_name_r").focusout(function() {
        valid_first_name_r();
    });

    $("#last_name_r").focusout(function() {
        valid_last_name_r();
    });

    $("#password_r").focusout(function() {
        valid_password_r();
    });

    $("#password_rpt_r").focusout(function() {
        valid_password_rpt_r();
    });

    $("#email_r").focusout(function() {
        valid_email_r();
    });

    function valid_username_r() {

        var username_r = $("#username_r").val();
        var username_r = strip_tags(username_r);
        var username_r = username_r.length;

        if(username_r < 3) {
            $("#username_r_error").html("Minimum 3 characters");
            $("#username_r_error").show();
            $("#username_r").addClass("error_outline");
            username_r_er = true;
        } else {
            $("#username_r").removeClass("error_outline");
            $("#username_r_error").hide();
        }
    }

    function valid_password_r() {

        var password_r = $("#password_r").val();
        var password_r = password_r.length;

        if(password_r < 8) {
            $("#password_r_error").html("Minimum 8 characters");
            $("#password_r_error").show();
            $("#password_r").addClass("error_outline");
            password_r_er = true;
        } else if(password_r > 30) {
            $("#password_r_error").html("Maximum 30 characters");
            $("#password_r_error").show();
            $("#password_r").addClass("error_outline");
            password_r_er = true;
        } else {
            $("#password_r").removeClass("error_outline");
            $("#password_r_error").hide();
        }
    }
    
    function valid_password_rpt_r() {

        var password_r = $("#password_r").val();
        var password_rpt_r = $("#password_rpt_r").val();

        if(password_rpt_r != password_r) {
            $("#password_rpt_r_error").html("Passwords do not match");
            $("#password_rpt_r_error").show();
            $("#password_rpt_r").addClass("error_outline");
            password_rpt_r_er = true;
        } else {
            $("#password_rpt_r").removeClass("error_outline");
            $("#password_rpt_r_error").hide();
        }
    }

    function valid_first_name_r() {

        var first_name_r = $("#first_name_r").val();
        var first_name_r = strip_tags(first_name_r);
        var first_name_r = first_name_r.length;

        if(first_name_r < 1) {
            $("#first_name_r_error").html("Should not be empty");
            $("#first_name_r_error").show();
            $("#first_name_r").addClass("error_outline");
            first_name_r_er = true;
        } else {
            $("#first_name_r").removeClass("error_outline");
            $("#first_name_r_error").hide();
        }
    }

    function valid_last_name_r() {

        var last_name_r = $("#last_name_r").val();
        var last_name_r = strip_tags(last_name_r);
        var last_name_r = last_name_r.length;

        if(last_name_r < 1) {
            $("#last_name_r_error").html("Should not be empty");
            $("#last_name_r_error").show();
            $("#last_name_r").addClass("error_outline");
            last_name_r_er = true;
        } else {
            $("#last_name_r").removeClass("error_outline");
            $("#last_name_r_error").hide();
        }
    }

    function valid_email_r() {

        var email_r = $("#email_r").val();
        var email_r_reg_ex = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(email_r_reg_ex.test(email_r)) {
            $("#email_r_error").hide();
            $("#email_r").removeClass("error_outline");
        } else {
            $("#email_r_error").html("Invalid email address");
            $("#email_r_error").show();
            $("#email_r").addClass("error_outline");
            email_r_er = true;
        }
    }

    $("#register_form").submit(function() {

        username_r_er = false;
        first_name_r_er = false;
        last_name_r_er = false;
        password_r_er = false;
        password_rpt_r_er = false;
        email_r_er = false;

        valid_username_r();
        valid_first_name_r();
        valid_last_name_r();
        valid_password_r();
        valid_password_rpt_r();
        valid_email_r();

        if(username_r_er == false && first_name_r_er == false && last_name_r_er == false && password_r_er == false && password_rpt_r_er == false && email_r_er == false) {
            return true;
        } else {
            return false;
        }
    });
});

// contact form input validation
$(function() {
    
    $("#name_error").hide();
    $("#email_c_error").hide();

    var name_er = false;
    var email_c_er = false;

    $("#name").focusout(function() {
        valid_name();
    });

    $("#email_c").focusout(function() {
        valid_email_c();
    });

    function valid_name() {

        var name = $("#name").val();
        var name = strip_tags(name);
        var name = name.length;

        if(name < 1) {
            $("#name_error").html("Should not be empty");
            $("#name_error").show();
            $("#name").addClass("error_outline");
            name_er = true;
        } else {
            $("#name").removeClass("error_outline");
            $("#name_error").hide();
        }
    }

    function valid_email_c() {

        var email_c = $("#email_c").val();
        var email_c_reg_ex = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(email_c_reg_ex.test(email_c)) {
            $("#email_c_error").hide();
            $("#email_c").removeClass("error_outline");
        } else {
            $("#email_c_error").html("Invalid email address");
            $("#email_c_error").show();
            $("#email_c").addClass("error_outline");
            email_c_er = true;
        }
    }

    $("#contact_form").submit(function() {

        name_er = false;
        email_c_er = false;
        
        valid_name();
        valid_email_c();

        if(name_er == false && email_c_er == false) {
            return true;
        } else {
            return false;
        }
    });
});