<!-- login form -->
<form id="login_form" action="process.php" method="post">
     <div class="log_reg_inputs">
        <label for="username_l">Username:</label><br>
        <input id="username_l" type="text" name="username" placeholder="Enter Username"><br>
    </div>
    <div class="log_reg_inputs">
        <label for="password_l">Password:</label><br>
        <input id="password_l" type="password" name="password" placeholder="Enter Password"><br>
    </div>
	
    <div class="log_reg_btn">
        <input type="submit" name="login" value="log in">
    </div>
    
    <div class="messages">
    <?php if (isset($_GET['msg'])) { ?>
        <i class="msg"><?=$_GET['msg']?></i>
    <?php } ?>
    </div>

    <input type="hidden" name="form_id" value="login">
</form>