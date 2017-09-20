<?php include_once("/header.php"); ?>
<?php if (isset($_GET['msg_c'])) { ?>
    <section class="sent">
    	<h1><?=$_GET['msg_c']?></h1>
    </section>
   <?php } else { ?>

    <section class="layer">
	    <section id="secound" class="b-negative">
	        <div class="wrapper">
	            <div class="contact_form_wrap">
	            	<?php include_once("/forms/form_contact.php"); ?>
	            </div>
		    </div>
		</section>
    </section>

   <?php } ?>

<?php include_once("/footer.php"); ?>