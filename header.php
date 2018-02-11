<?php
include_once("db_con.php");
include_once("functions/functions.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Renting or selling real estate? This is the place where you can sell,rent and search property">
    <meta name="keywords" content="real,estate,home,property,rent,sell">
	<title><?=tab_name()?></title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/smoothproducts.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/style_responsive.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header id="header">
	    <div class="wrapper">
	    	
		    <div id="logo">
			    <a href="http://restate.lenuson.com"><img src="images/57.png" alt="logo"></a>
			</div>

			<div class="filter_dropdown">
				<a title="FILTERS" href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a>
			</div>

			<div class="menu_dropdown">
				<ul>
					<li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
				</ul>
			</div>

		    <?php if (!isset($_SESSION['usr_id'])) { ?>

			<div class="header_buttons">
				
				<div class="register_form">
					<a href="register.php" class="buttons_single">Register</a>
				</div>
				
				<div class="log_form">
					<a href="login.php" class="buttons_single">Login</a>
					<div class="login">
						<?php include("forms/form_login.php"); ?>
					</div>
				</div>
				
			</div>

			<?php } else { ?>

            <div class="user_dropdown">
            	<p class="dropbtn"><?=$_SESSION['usr_name']?>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>&nbsp;</p>
				<div class="dropdown_content">

					<?php if ($_SESSION['usr_role'] == 1) { ?>
	                <a href="admin/dashboard.php?home">Dashboard</a>
	                <?php } ?>
					
					<a href="ad.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New Ad</a>

				    <a href="profile.php">Profile</a>

				    <div class="logout_form">
	                    <?php include("forms/form_logout.php"); ?>
			        </div>
				</div>
            </div>

            <?php } ?>
            
			<nav id="nav">
			    <ul>
				    <li><a href="http://restate.lenuson.com">home</a></li>
				    <li><a href="services.php">services</a></li>
				    <li><a href="about.php">about</a></li>
				    <li><a href="contact.php">contact</a></li>
				</ul>
			</nav>
		    
	    </div>
	</header>

	<div class="filters_menu">
		<div id="nav_top">
	        <a class="btn_filters" href="#"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;FILTERS</a>
	        <?php include("forms/form_advanced_search.php"); ?>
	    </div>
    </div>