<div class="data">
    <a href="/details.php?id=<?=$id?>&title=<?=$title?>">
	    <div class="data_img_cont">
	    <?php if(!empty($image)) { $image = explode(",", $image); ?>
			<img class="data_img" src="/uploads/property_images/<?=$image[0]?>" alt="p_image">
		<?php } else { ?>
			<img class="data_img" src="/uploads/property_images/property.png" alt="p_image">
		<?php } ?>
		</div>
        <div class="data_content">
		    <p><?=$row['cat']?>&nbsp;/&nbsp;<?=$row['str_name']?></p><br>
		    <h5 class="data_headline"><?=$row['headline']?></h5><br>
		    <p class="data_address"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?=$row['city_name']?></p><br>
		    <div class="data_price">
		        <h6><?=$row['price']?>&nbsp;&euro;</h6>
		    </div>
		    <div class="data_created">
		    	<p title="Created"><?=$date?></p>
		    </div>
	    </div>
	    <div class="data_bottom">
	    	<div class="rooms">
	    		<i class="fa fa-key" aria-hidden="true" title="Rooms"></i><span>&nbsp;<?=$row['rooms_number']?></span>
	    	</div>
	    	<div class="rooms">
	    		<i class="fa fa-arrows-alt" aria-hidden="true" title="Quadrature (m&sup2;)"></i>&nbsp;<span><?=$row['quadrature']?></span>
	    	</div>
	    	<div class="data_id">
	    		<p>ID:&nbsp;<?=$row['id_fake']?></p>
	    	</div>
	    </div>
    </a>
</div>