<?php
error_reporting(0);
session_start();
if (isset($_SESSION["usr_id"])) {
 include_once("header.php"); ?>
    <section class="layer">
        <section class="heading">
            <div class="overlay">
            	<article class="info_head">
            		<h2>This is the place where you can rent or sell real estate</h2>
            	</article>
            </div>
		</section>
	    <section id="secound" class="b-negative">
	        <div class="overlay">
	            <div class="add_rs">
	                <h3 class="headline">Publish Real Estate</h3>
		            <div class="add_rs_cont"><?php include("forms/form_add_real_estate.php"); ?></div>
		            <?php
		            if (isset($_GET['msg'])) {
                            echo "<p class='msg'>".$_GET['msg']."</p>";
                        }
                    ?>
	            </div>
		    </div>
		</section>
    </section>
    <?php include_once("footer.php"); ?>
<?php } else { header("Location: index.php"); } ?>