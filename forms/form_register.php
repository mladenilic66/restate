<!-- register form -->
<form  id="register_form" action="./process.php" method="post" enctype="multipart/form-data">
    <div class="log_reg_inputs">
        <label for="username_r">Username *</label><br>
        <input id="username_r" type="text" name="username_r" placeholder="Username"><br>
        <span id="username_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="first_name_r">First Name *</label><br>
        <input id="first_name_r" type="text" name="first_name_r" placeholder="First Name"><br>
        <span id="first_name_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="last_name_r">Last Name *</label><br>
        <input id="last_name_r" type="text" name="last_name_r" placeholder="Last Name"><br>
        <span id="last_name_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="password_r">Password *</label><br>
        <input id="password_r" type="password" name="password_r" placeholder="Enter Password"><br>
        <span id="password_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="password_rpt_r">Repeat Password *</label><br>
        <input id="password_rpt_r" type="password" name="password_rpt_r" placeholder="Enter Password"><br>
        <span id="password_rpt_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="email_r">E-mail *</label><br>
        <input id="email_r" type="text" name="email_r" placeholder="Enter E-mail"><br>
        <span id="email_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="mobile_number_r">Mobile Number</label><br>
        <input id="mobile_number_r" type="number" name="mobile_number_r" placeholder="Enter Mobile Number"><br>
        <span id="mobile_number_r_error" class="form_errors"></span>
    </div>
    <div class="log_reg_inputs">
        <label for="image_r">Avatar</label>
        <input id="image_r" class="image" type="file" name="image_r" accept="image/jpg,image/png,image/jpeg">
    </div>

    <input type="hidden" name="form_id" value="register">

    <div class="log_reg_btn">
        <input type="submit" name="register" value="register">
    </div>

    <div class="messages">
    <?php if (isset($_GET['msg_r'])) { ?>
        <i class="msg"><?=$_GET['msg_r']?></i>
    <?php } ?>
    </div>
    
</form>