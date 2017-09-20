<?php
include_once("/db_con.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#">
	<title>Real Estate</title>
	<script src="/js/jquery-3.2.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
	<link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/smoothproducts.css" rel="stylesheet" type="text/css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
	<script type="text/javascript" src="/js/main.js"></script>
	<script type="text/javascript" src="/js/forms_validation.js"></script>
	<script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script> <!-- custom textarea -->
    <script>tinymce.init({ selector:'textarea' });</script> <!-- custom textarea -->
</head>

<body>
	<header id="header">
	    <div class="wrapper">
		    <div id="logo">
			    <a href="/index.php"><img src="images/57.png" alt="logo"></a>
			</div>
		    <?php if (!isset($_SESSION['usr_id'])) { ?>
			<div class="header_buttons">
				
				<div class="register_form">
					<a href="register.php" class="buttons_single">Register</a>
					<div class="register">
						<?php include("/forms/form_register.php"); ?>
					</div>
				</div>
				
				<div class="log_form">
					<a href="login.php" class="buttons_single">Login</a>
					<div class="login">
						<?php include("/forms/form_login.php"); ?>
					</div>
				</div>
				
			</div>
			<?php } ?>
			
            <?php if (isset($_SESSION['usr_id'])){ ?>
                <div class="user_dropdown">
                	<p class="dropbtn"><?=$_SESSION['usr_name']?>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>&nbsp;</p>
					<div class="dropdown_content">
					    <a href="/profile.php">Profile</a>
					    <div class="logout_form">
		                    <?php include("/forms/form_logout.php"); ?>
				        </div>
					</div>
                </div>

                <div class="add_new_rs user_info">
	                <a href="/ad.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;New Real Estate</a>
	            </div>

                <?php if (isset($_SESSION['usr_id']) && $_SESSION['usr_role'] == 1) { ?>
                <div class="user_info">
                	<a href="/admin/dashboard.php?home">Dashboard</a>
                </div>
            <?php } } ?>
            
			<nav id="nav">
			    <ul>
				    <li><a href="/index.php">home</a></li>
				    <li><a href="/services.php">services</a></li>
				    <li><a href="/about.php">about</a></li>
				    <li><a href="/contact.php">contact</a></li>
				</ul>
			</nav>
	    </div>
	</header>