<?php
include("db_con.php");
include("functions/functions.php");

if (!isset($_REQUEST["form_id"])) {
    die(header("Location: index.php"));
}

switch ($_REQUEST["form_id"]){

	case "register":
	    //checking if form is submitted
	    if (empty($_POST["username_r"]) || empty($_POST["first_name_r"]) || empty($_POST["last_name_r"]) || empty($_POST["password_r"]) && isset($_POST["register"])) {
	    	die(header("Location: register.php?msg_r=No empty fields allowed"));
	    } else {

	    //securing from injection
	    $username = test_input($_POST["username_r"]);
		$password = test_input($_POST["password_r"]);
		$email = test_input($_POST["email_r"]);
		$first_name = test_input($_POST["first_name_r"]);
		$last_name = test_input($_POST["last_name_r"]);
		$mobile_number = test_input($_POST["mobile_number_r"]);

	    $salt  = ["cost" => 12];

	    //hashed password
		$hashed_password =  password_hash($_POST["password_r"], PASSWORD_DEFAULT, $salt);

	    $sql_username = "SELECT * FROM users WHERE username = '".$username."'";
	    $result_username = mysqli_query($con, $sql_username);
	    $exists = mysqli_num_rows($result_username);

	    if ($exists != 0) {
	        die(header("Location: register.php?msg_r=This username already exists"));
	    }
		
		//password lenght validation
		if (strlen($password) < 6) {
			die(header("Location: register.php?msg_r=Min 6 characters allowed for password"));
		}

	    //image validation
	    $image_org     = $_FILES["image_r"];
	    $image         = $_FILES["image_r"]["name"];
	    $image_error   = $_FILES["image_r"]["error"];
	    $image_tmp     = $_FILES["image_r"]["tmp_name"];
	    $image_type    = $_FILES["image_r"]["type"];
		$image_size    = $_FILES["image_r"]["size"];
	    $image_maxsize = 10485760;

	    $new_image_name = rename_img($image,"user-avatar-");
	    $source = "uploads/user_images/";
	    $target = "uploads/user_images/";


		if (!empty($image)) {

			if ($image_type !== "image/jpeg" && $image_type !== "image/jpg" && $image_type !== "image/png") {
				die(header("Location: register.php?msg_r=Only JPEG,JPG,PNG allowed"));
		    } elseif($image_size > $image_maxsize) {
				die(header("Location: register.php?msg_r=Max image size allowed: 10MB"));
		    } else {
		    	$save_image = move_uploaded_file($image_tmp,"uploads/user_images/".$new_image_name);
		        $croped_resized_img = img_crop_resize(300,300,$source.$new_image_name,$target.$new_image_name);
		    }
	    }
 
		$sql_reg = "INSERT into users(username,password,first_name,last_name,mobile_number,email,avatar,id_role,active) values('".$username."','".$hashed_password."','".$first_name."','".$last_name."','".$mobile_number."','".$email."','".$new_image_name."','2','1')";


		if (mysqli_query($con,$sql_reg)) {
			die(header("Location: register.php?msg_r=Registred Successfully"));
		} else {
			die(header("Location: register.php?msg_r=Something went wrong"));
		}

		header("Location: login.php");
	    }
	break;


    case "login":
		session_start();

		if (isset($_POST['login']) && count($_POST) > 0 && isset($_POST['username']) && isset($_POST['password'])) {

		//securing from injection
		$username = test_input($_POST['username']);
		$password = test_input($_POST['password']);

	    if(isset($_SESSION['usr_id']) != "") {
		    header("Location: index.php");
	    }

	    //check if form is submitted
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		$sql = "SELECT * FROM users WHERE username = '".$username."'";
		$result = mysqli_query($con,$sql);

			if ($row = mysqli_fetch_assoc($result)) {

				if (password_verify($password, $row['password'])){

					$_SESSION['usr_id'] = $row['id'];
					$_SESSION['usr_name'] = $row['username'];
					$_SESSION['usr_role'] = $row['id_role'];

					header("Location: index.php");
				} else {
				    die(header("Location: login.php?msg=Wrong Password"));
			    }

			} else {
				die(header("Location: login.php?msg=Wrong Username"));
			}

		}

	break;

	case "logout":
        session_start();
        if (isset($_SESSION['usr_id'])) {
            session_destroy();
            unset($_SESSION['usr_id']);
            unset($_SESSION['usr_name']);
            header("Location: index.php");
        } else {
        	header("Location: index.php");
        }
    break;


    case "user_add_h":

	    if (empty($_POST["username"]) || empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["password"]) || empty($_POST["email"]) && isset($_POST["user_add"])) {
	    	die(header("Location: admin/dashboard.php?users&msg=Fields labeled with (*) must be filled"));
	    } else {

	    //securing from injection
	    $username = test_input($_POST["username"]);
		$password = $_POST["password"];
		$password_rpt = $_POST["password_rpt"];
		$email = test_input($_POST["email"]);
		$first_name = test_input($_POST["first_name"]);
		$last_name = test_input($_POST["last_name"]);
		$role = $_POST["role"];
		$mobile_number = $_POST["mobile_number"];

	    $salt  = ["cost" => 12];

	    //hashed password
		$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT, $salt);

	    $sql_username = "SELECT * FROM users WHERE username = '".$username."'";
	    $result_username = mysqli_query($con, $sql_username);
	    $exists = mysqli_num_rows($result_username);

	    if ($exists != 0) {
	        die(header("Location: admin/dashboard.php?users&msg=This username already exists"));
	    }

	    if ($password_rpt != $password) {
	    	die(header("Location: admin/dashboard.php?users&msg=Passwords do not match"));
	    }

		//uploading image
		$avatar_org = $_FILES["avatar"];
		$avatar = $_FILES["avatar"]["name"];
		$avatar = preg_replace("#[^a-z.0-9]#i","-",$avatar);
		$avatar_tmp = $_FILES["avatar"]["tmp_name"];
		$avatar_size = $_FILES["avatar"]["size"];
		$avatar_type = pathinfo($avatar,PATHINFO_EXTENSION);
		
		//password lenght validation
		if (strlen($password) < 8) {
			die(header("Location: admin/dashboard.php?users&msg=Min 8 characters allowed for password"));
		}

	    //avatar validation
	    $avatar_maxsize = 1048576;

	    if ($avatar) {
	        if ($avatar_type != "png" && $avatar_type != "jpg" && $avatar_type != "jpeg") {
	            die(header("Location: admin/dashboard.php?users&msg=Allowed image types: JPG,PNG"));
	        }

			if ($avatar_size > $avatar_maxsize) {
				die(header("Location: admin/dashboard.php?users&msg=Max image size allowed: 1MB"));
		    } else {
		    	$save_avatar = move_uploaded_file($avatar_tmp,"uploads/user_images/".$avatar);
		    }
	    } 

		$sql_usr = "INSERT into users(username,password,first_name,last_name,mobile_number,email,avatar,id_role,active) values('".$username."','".$hashed_password."','".$first_name."','".$last_name."','".$mobile_number."','".$email."','".$avatar."','".$role."','1')";


		if (mysqli_query($con,$sql_usr)) {
			die(header("Location: admin/dashboard.php?users&msg=Registred Successfully"));
		} else {
			die(header("Location: admin/dashboard.php?users&msg=Something went wrong"));
		}

		header("Location: admin/dashboard.php");
	    }
	break;


	case "city_add":

	    if (empty($_POST["cities"])) {
	    	die(header("Location: admin/dashboard.php?cities&msg=No empty fields allowed"));
	    } else {

	    //securing from injection
	    $cities = test_input($_POST["cities"]);

		$sql = "INSERT INTO cities(title) values('".$cities."')";

		if (mysqli_query($con,$sql)) {
			die(header("Location: admin/dashboard.php?cities&msg=Added Successfully"));
		} else {
			die(header("Location: admin/dashboard.php?cities&msg=Something went wrong"));
		}

		header("Location: admin/dashboard.php");
	    }
	break;


	case "structure_add":

	    //checking if form is submitted
	    if (empty($_POST["structure"])) {
	    	die(header("Location: admin/dashboard.php?structure&msg=No empty fields allowed"));
	    } else {

	    //securing from injection
	    $structure = test_input($_POST["structure"]);

		$sql = "INSERT INTO structures(title) values('".$structure."')";

		if (mysqli_query($con,$sql)) {
			die(header("Location: admin/dashboard.php?structure&msg=Added Successfully"));
		} else {
			die(header("Location: admin/dashboard.php?structure&msg=Something went wrong"));
		}

		header("Location: admin/dashboard.php");
	    }
	break;
    
    case "equipment_add":

	    if (empty($_POST["equipment"])) {
	    	die(header("Location: admin/dashboard.php?equipment&msg=No empty fields allowed"));
	    } else {

	    //securing from injection
	    $equipment = test_input($_POST["equipment"]);

		$sql = "INSERT INTO equipment(title) values('".$equipment."')";

		if (mysqli_query($con,$sql)) {
			die(header("Location: admin/dashboard.php?equipment&msg=Added Successfully"));
		} else {
			die(header("Location: admin/dashboard.php?equipment&msg=Something went wrong"));
		}

		header("Location: admin/dashboard.php");
	    }
	break;


	case "add_real_estate":

	    session_start();

	    //checking if form is submitted
	    if (empty($_POST["title"]) || empty($_POST["address"]) || empty($_POST["quadrature"]) || empty($_POST["price"]) && isset($_POST["add_real_estate"])) {
	    	die(header("Location: ad.php?msg=No empty fields allowed"));
	    } else {

	    //securing from injection
		$categories = $_POST["categories"];
		$structures = $_POST["structures"];
		$cities = $_POST["cities"];

	    $title = test_input($_POST["title"]);
		$quadrature = $_POST["quadrature"];
		$address = test_input($_POST["address"]);
		$description = $_POST["description"];
		$description_tr = trim_textarea($description);
		$rooms_number = $_POST["rooms_number"];
		$pets_allowed = $_POST["pets_allowed"];
		$parking_lot = $_POST["parking_lot"];
		$heating = $_POST["heating"];
		$availability = $_POST["availability"];
		$equipment = serialize($_POST["equipment"]);
		$price = $_POST["price"];
		$deposit = $_POST["deposit"];
        
        //uploading images
		$images_org = $_FILES["image"];
		$images = $_FILES["image"]["name"];
		$images = preg_replace("#[^a-z.0-9]#i",uniq_id(),$images);
		$images_tmp = $_FILES["image"]["tmp_name"];
		$images_size = $_FILES["image"]["size"];

		$source = "uploads/property_images/";
	    $target = "uploads/property_images/";


	    for ($i = 0; $i < count($images_tmp); $i++) {

            $save_image = move_uploaded_file($images_tmp[$i], "uploads/property_images/".$images[$i]);
            $croped_resized_img = img_crop_resize(1250,800,$source.$images[$i],$target.$images[$i],90);
		}

	    $all_images = implode(",",$images);

        //insert into database query
		$sql2 = "INSERT into ads(id_fake,id_user,id_category,headline,quadrature,id_structure,id_city,address,description,image,rooms_number,id_pets_allowed,id_parking_lot,id_heating,id_availability,equipment,price,deposit) values('".uniq_id()."','".$_SESSION['usr_id']."','".$categories."','".$title."','".$quadrature."','".$structures."','".$cities."','".$address."','".$description_tr."','".$all_images."','".$rooms_number."','".$pets_allowed."','".$parking_lot."','".$heating."','".$availability."','".$equipment."','".$price."','".$deposit."')";


		if (mysqli_query($con,$sql2)) {
			die(header("Location: ad.php?msg=Added_Successfully"));
		} else {
			die(header("Location: ad.php?msg=Something_went_wrong"));
		}

		header("Location: ad.php");
	    }

	break;

	case "contact":
	    if (empty($_POST["name"]) || empty($_POST["email_c"]) && isset($_POST["contact_submit"])) {
	    	die(header("Location: contact.php?msg=Fields labeled with (*) must be filled"));
	    } else {

	    //securing from injection
	    $name = test_input($_POST["name"]);
		$email_c = test_input($_POST["email_c"]);
		$message_c = test_input($_POST["message_c"]);

	        if (filter_var($email_c, FILTER_VALIDATE_EMAIL) === false) {
			    die(header("Location: contact.php?msg=Email is not valid"));
			} else {
				$to = "mladenilic321@googlemail.com";
				$subject = "Contact Form";
				$headers = "From: ".$email_c;

				if (mail($to,$subject,$message_c,$headers)) {
					die(header("Location: contact.php?msg_c=Message Sent"));
				} else {
					die(header("Location: contact.php?msg_c=Message has not been sent"));
				}
			}
	    }
	break;
}

?>