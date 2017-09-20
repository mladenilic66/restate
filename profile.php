<?php
error_reporting(0);
session_start(); 
if (isset($_SESSION['usr_id'])) { ?>
<?php include_once("/header.php"); ?>
    <section class="profile_main">
        <div class="profile_container">
        <?php
            $user_id = $_SESSION["usr_id"];

            $sql = "SELECT * FROM users where id=".$user_id;
            $result = mysqli_query($con, $sql);

            while($row = mysqli_fetch_assoc($result)) {
            	$image = $row['avatar'];
            ?>
            
            <div class="profile_img_cont">
                <div class="profile_img">
            	    <!-- swich image -->
                    <?php if(!empty($image)) { ?>
					    <img src="/uploads/user_images/<?=$image?>" alt="profile_image">
					<?php } else { ?>
					    <img src="/uploads/user_images/user.png" alt="profile_image">
					<?php } ?>
                </div>
            </div>
            <div class="profile_info">
                <table id="profile_table">
                	<tr>
                		<th colspan="2"><h1><?=$row['username']?></h1></th>
                	</tr>
                	<tr>
                		<td><h6>First Name:</h6></td>
                		<td><?=$row['first_name']?></td>
                	</tr>
                	<tr>
                		<td><h6>Last Name:</h6></td>
                		<td><?=$row['last_name']?></td>
                	</tr>
                	<tr>
                		<td><h6>E-mail:</h6></td>
                		<td><?=$row['email']?></td>
                	</tr>
                	<tr>
                		<td><h6>Mobile Number:</h6></td>
                		<td><?=$row['mobile_number']?></td>
                	</tr>
                </table>
            </div>
            <?php } ?>
	    </div>
	</section>
<?php include_once("/footer.php"); ?>
<?php } else { header("Location: /index.php"); } ?>