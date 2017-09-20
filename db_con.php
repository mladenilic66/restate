<?php

$con = mysqli_connect("localhost", "root", "", "real_estate");

	if($error = mysqli_connect_errno($con)) {
		die("Database connection error: ".$error);
	}

?>