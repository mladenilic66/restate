<?php include_once("../db_con.php");
session_start();

if (isset($_SESSION["usr_id"]) && $_SESSION["usr_role"] == 1 ) {
?>
<?php include_once("/header.php");?>

	<div class="sidebar">
		<div class="sidebar_header">
			<h3>Dashboard</h3>
		</div>
		<div class="sidebar_content">
			<ul>
			    <li><a href="/admin/dashboard.php?home"><i class="fa fa-th" aria-hidden="true"></i>&nbsp; Dashboard</a></li>
				<li><a href="/admin/dashboard.php?users"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp; Users</a></li>
				<li><a href="/admin/dashboard.php?cities"><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp; Add City</a></li>
				<li><a href="/admin/dashboard.php?structure"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp; Add Structure</a></li>
				<li><a href="/admin/dashboard.php?equipment"><i class="fa fa-television" aria-hidden="true"></i>&nbsp; Add Equipment</a></li>
			</ul>
		</div>
	</div>
	<div class="header">
        <div class="header_content">
	        <div class="user_nav">
                <a href="/index.php"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
            </div>
            <div class="user_nav">
                <a href="/ad.php">&nbsp;+ add real estate</a>
            </div>
            <?php if (isset($_SESSION['usr_id'])) { ?>
		        <div class="user_dropdown">
                	<p class="dropbtn"><?=$_SESSION['usr_name']?>&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i></p>
					<div class="dropdown_content">
					    <a href="/profile.php">Profile</a>
					    <div class="logout_form">
		                    <?php include("../forms/form_logout.php"); ?>
				        </div>
					</div>
                </div>
		    <?php } ?>
		</div>
	</div>
	<div class="main">
	    <div class="content">
		<?php if (isset($_GET["home"])) { ?>
			<h3>Welcome back <span><?=$_SESSION['usr_name']?></span></h3>
		<?php } ?>
		<?php if (isset($_GET["users"])) { ?>
			<div class="content_header">
				<h3>Add Users</h3>
			</div>
			<div class="users_form">
				<?php include("../forms/form_user_add.php"); ?>
			</div>

			<div class="messages">
				<?php if (isset($_GET['msg'])) { ?>
                    <i class="msg"><?=$_GET['msg']?></i>
                <?php } ?>
			</div>
			
            <div class="users">
				<div class="content_header">
				    <h3>All Users</h3>
			    </div>
				<table>
					<tr>
						<th>Avatar</th>
						<th>Username</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>E-mail</th>
						<th>Contact</th>
					</tr>
					<?php

	                    //user pagination
	                    $per_page = 10;
	                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
	                    $start = ($page > 1) ? ($page * $per_page) - $per_page : 0;

	                    $limit = "LIMIT ".$start.",".$per_page;
	                    $num_sql = "SELECT id FROM users";
	                    $num_res = mysqli_query($con,$num_sql);
	                    $num_row = mysqli_num_rows($num_res);
	                    $pages = ceil($num_row/$per_page);
					    //end pagination

						$sql = "SELECT * FROM users ".$limit;
						$result = mysqli_query($con,$sql);

					    while ($row = mysqli_fetch_assoc($result)) { 
					        $avatar = $row['avatar'];
					?>
					<tr>
						<td>
						<!--switch avatar-->
						<?php if(!empty($avatar)) { ?>
							<img class="thumbnail_img" src="../uploads/user_images/<?=$avatar?>" alt="user_img">
						<?php } else { ?>
							<img class="thumbnail_img" src="../uploads/user_images/user.png" alt="user_img">
						<?php } ?>
						</td>
						<td><?=$row['username']?></td>
						<td><?=$row['first_name']?></td>
						<td><?=$row['last_name']?></td>
						<td><?=$row['email']?></td>
						<td><?=$row['mobile_number']?></td>
					</tr>
                    <?php } ?>
                    <tr>
					    <th colspan="6">
						    <div class="pagination_cont">
						    	<div class="pagination_inner">
							    	<p>Users: <?=$num_row?></p>
						    	    <?php for($i=1; $i<=$pages; $i++) { ?>
	                                    <a href="/admin/dashboard.php?users&page=<?=$i?>"<?php if ($page==$i) { echo "class='selected_page'"; echo "onclick='return false;'"; }?>><?=$i?></a>
	                                <?php } ?>
					            </div>
						    </div>
					    </th>
					</tr>
				</table>
	    	</div>
	    	<?php } ?>

	    	<?php if (isset($_GET["cities"])) { ?>
                <div class="content_header">
				    <h3>Add City</h3>
			    </div>
	    	 
		    	<div class="cities_form">
					<?php include("../forms/form_city_add.php"); ?>
				</div>

				<div class="messages">
				<?php if (isset($_GET['msg'])) { ?>
                    <i class="msg"><?=$_GET['msg']?></i>
                <?php } ?>
			    </div>

				<div class="cities">
				    <div class="content_header">
				        <h3>All Cities</h3>
			        </div>
				    <table>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Delete</th>
						</tr>
						<?php

						$sql = "SELECT * FROM cities ORDER BY title ASC";
						$result = mysqli_query($con,$sql);
						$counter = 0;

						while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?=++$counter?></td>
							<td><?=$row['title']?></td>
							<td><a href="/admin/dashboard.php?cities&del=<?=$row['id']?>" class="btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
							<?php
							    // deleting data
                                if(isset($_GET['del'])){
							        $del_id = $_REQUEST['del'];
							        $sql2 = "DELETE FROM cities WHERE id=".$del_id;
							        $result2 = mysqli_query($con, $sql2);
							            header("Location: /admin/dashboard.php?cities");
						        }
							?>
						</tr>
                    <?php } ?>
				    </table>
	    	    </div>
		        <?php } ?>

		    	<?php if (isset($_GET["structure"])) { ?>
		    		<div class="content_header">
					    <h3>Add Structure</h3>
				    </div>
		    	 
			    	<div class="structure_form">
						<?php include("../forms/form_structure_add.php"); ?>
					</div>

					<div class="messages">
					<?php if (isset($_GET['msg'])) { ?>
	                    <i class="msg"><?=$_GET['msg']?></i>
	                <?php } ?>
				    </div>

					<div class="structure">
					    <div class="content_header">
					        <h3>All Structures</h3>
				        </div>
					    <table>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Delete</th>
							</tr>
							<?php

							$sql = "SELECT * FROM structures ORDER BY title asc";
							$result = mysqli_query($con,$sql);
							$counter = 0;
							while ($row = mysqli_fetch_assoc($result)) {
							?>
							<tr>
								<td><?=++$counter?></td>
								<td><?=$row['title']?></td>
								<td><a href="/admin/dashboard.php?structure&del=<?=$row['id']?>" class="btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
								<?php
								    // deleting data
	                                if(isset($_GET['del'])){
								        $del_id = $_GET['del'];
								        $sql2 = "DELETE FROM structures WHERE id=".$del_id;
								        $result2 = mysqli_query($con, $sql2);
								            header("Location: /admin/dashboard.php?structure");
							        }
								?>
							</tr>
	                    <?php } ?>
					    </table>
	    	        </div>
		        <?php } ?>

		        <?php if (isset($_GET["equipment"])) { ?>
		    		<div class="content_header">
					    <h3>Add Equipment</h3>
				    </div>
		    	 
			    	<div class="structure_form">
						<?php include("../forms/form_equipment.php"); ?>
					</div>

					<div class="messages">
					<?php if (isset($_GET['msg'])) { ?>
	                    <i class="msg"><?=$_GET['msg']?></i>
	                <?php } ?>
				    </div>

					<div class="structure">
					    <div class="content_header">
					        <h3>All Equipment</h3>
				        </div>
					    <table>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Delete</th>
							</tr>
							<?php

							$sql = "SELECT * FROM equipment ORDER BY title asc";
							$result = mysqli_query($con,$sql);
							$counter = 0;
							while ($row = mysqli_fetch_assoc($result)) {
							?>
							<tr>
								<td><?=++$counter?></td>
								<td><?=$row['title']?></td>
								<td><a href="/admin/dashboard.php?equipment&del=<?=$row['id']?>" class="btn_delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
								<?php
								    // deleting data
	                                if(isset($_GET['del'])){
								        $del_id = $_GET['del'];
								        $sql2 = "DELETE FROM equipment WHERE id=".$del_id;
								        $result2 = mysqli_query($con, $sql2);
								            header("Location: /admin/dashboard.php?equipment");
							        }
								?>
							</tr>
	                    <?php } ?>
					    </table>
	    	        </div>
		        <?php } ?>
	    </div>
	</div>

    <footer id="footer">
    	
    </footer>
</body>
</html>
<?php } else { header("Location: ../index.php"); } ?>