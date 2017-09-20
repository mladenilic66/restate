<?php
include_once("/header.php");
include_once("/functions/functions.php");
?>
    <section class="layer">
	    <section id="secound" class="b-negative">
	        <?php

	        $id = $_GET['id'];
	        $id = preg_replace("#[a-z]#i", 0, $id);

		    $sql = "SELECT ads.*, cities.title AS city_name, structures.title AS str_name, pets_allowed.title AS pets, heating.title AS heating, availability.title AS availability, users.first_name, users.avatar, users.mobile_number FROM ads INNER JOIN cities ON ads.id_city=cities.id INNER JOIN structures ON ads.id_structure=structures.id INNER JOIN pets_allowed ON ads.id_pets_allowed=pets_allowed.id INNER JOIN heating ON ads.id_heating=heating.id INNER JOIN users ON ads.id_user=users.id INNER JOIN availability ON ads.id_availability=availability.id WHERE ads.id_fake=".$id;

	        $result = mysqli_query($con,$sql);
	        $match = mysqli_num_rows($result);

	        if ($match > 0) {

	        ?>
	        <div class="inner_data">
                <div class="wrap">
		    	    <div class="sp-loading">
		    	        <img src="/images/loading.gif" alt="loading_img"><br>LOADING IMAGES
		    	    </div>

					<div class="sp-wrap">
					<?php
				    
		                while ($row = mysqli_fetch_assoc($result)) {

		                	$city = $row['city_name'];
		                	$id_fake = $row['id_fake'];
		                    $image = $row['image'];
		                    $title = $row['headline'];
		                    $price = $row['price'];
		                    $created = $row['created'];
		                    $pets = $row['pets'];
		                    $heating = $row['heating'];
		                    $equipment = $row['equipment'];
		                    $availability = $row['availability'];

		                    $mobile = $row['mobile_number'];
		                    $first_name = $row['first_name'];
		                    $avatar = $row['avatar'];

		                    $address = $row['address'];
		                    $str_name = $row['str_name'];
		                    $quad = $row['quadrature'];
		                    $deposit = $row['deposit'];
		                    $description = $row['description'];
		                    $rooms = $row['rooms_number'];
		                    $images = explode(",",$image);

				            foreach($images as $img) {
		            
		                if(!empty($image)) { ?>
						    <a href="/uploads/property_images/<?=$img?>"><img src="/uploads/property_images/<?=$img?>" alt="property_image"></a>
						<?php } else { ?>
						    <img class="default_image" src="/uploads/property_images/property.png" alt="property_image">
						<?php } } } ?>
					</div>
					<div class="property_content">
				        <table id="property_table">
				            <tr>
				        		<td colspan="4">
				        			<div class="property_cont_title">
								    	<h4><?=$title?></h4>
								    </div>
				        		</td>
				        	</tr>
				        	<tr>
				        		<td colspan="4">
				        			<div class="property_cont_address">
								    	<h5><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?=$address?></h5>
								    </div>
				        		</td>
				        	</tr>
				        	<tr>
				        		<th>City</th>
				        		<td><?=$city?></td>
				        		<th>Structure</th>
				        		<td><?=$str_name?></td>
				        	</tr>
				        	<tr>
				        		<th>Rooms</th>
				        		<td><?=$rooms?></td>
				        		<th>Quadrature (m&sup2;)</th>
				        		<td><?=$quad?></td>
				        	</tr>
				        	<tr>
				        		<th>ID</th>
				        		<td><?=$id_fake?></td>
				        		<th>Deposit</th>
				        		<td><?=$deposit?></td>
				        	</tr>
				        	<tr>
				        		<th>Posted</th>
				        		<td><?=date_short($created)?></td>
				        		<th>Heating</th>
				        		<td><?=$heating?></td>
				        	</tr>
				        	<tr>
				        		<th>Pets Allowed</th>
				        		<td><?=$pets?></td>
				        		<th>Availability</th>
				        		<td><?=$availability?></td>
				        	</tr>
				        	<tr>
				        		<td class="property_cont_desc" colspan="4"><?=$description?></td>
				        	</tr>
				        </table>
					</div>
                    
                    <div class="property_equip">
                        <h6>Equipment</h6>
                        <div class="property_equip_all">
                        	<?php

                        	    $equipment_uns = unserialize($equipment);
                        	  	$equipment_imploded = implode("&nbsp;&nbsp;", $equipment_uns); ?>
                        	<p><?=$equipment_imploded?></p>
                        </div>
                    </div>

					<div class="property_user">
					    <h6>Posted by</h6>
	            	    <h4><?=$first_name?></h4>
	            	    <div class="property_user_img">
	            	    	<!--switch avatar-->
							<?php if(!empty($avatar)) { ?>
								<img src="/uploads/user_images/<?=$avatar?>" alt="user_img">
							<?php } else { ?>
								<img src="/uploads/user_images/user.png" alt="user_img">
							<?php } ?>
	            	    </div>
	            	    <p><?=$mobile?></p>
	                </div>
				</div>
            </div>
	            
            <div class="property_top">
                <div class="wrap">
                    <div class="property_title">
                    	<h4><?=$title?></h4>
                    </div>
                    <div class="property_price">
                    	<h4><?=$price?>&nbsp;&euro;</h4>
                    </div>
                </div>
	        </div>
	        <?php } else { ?>
	        <div class="data_no">
	        	<h4>No property found!</h4>
	        </div>
	        <?php } ?>
		</section>
	</section>
	<?php include_once("/footer.php"); ?>

	<!-- JS ======================================================= -->
	<script type="text/javascript" src="/js/jquery-2.1.3.min.js"></script>
    <!-- <script type="text/javascript" src="/js/smoothproducts.min.js"></script> -->
    <script type="text/javascript" src="/js/smoothproducts.js"></script>
	<script type="text/javascript">
		/* wait for images to load */
		$(window).load(function() {
			$('.sp-wrap').smoothproducts();
		});
	</script>
