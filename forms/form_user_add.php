<?php include_once("../db_con.php"); ?>

<!-- add user form -->

<form id="add_user_form" action="/process.php" method="post" enctype="multipart/form-data">
    <div class="users_inner">
        <div class="users_inputs">
            <label for="username">Username *</label><br>
            <input class="inputs_admin" id="username" type="text" name="username" required><br>
            <span id="username_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="first_name">First Name *</label><br>
            <input class="inputs_admin" id="first_name" type="text" name="first_name" required><br>
            <span id="first_name_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="last_name">Last Name *</label><br>
            <input class="inputs_admin" id="last_name" type="text" name="last_name" required><br>
            <span id="last_name_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="password">Password *</label><br>
            <input class="inputs_admin" id="password" type="password" name="password" required><br>
            <span id="password_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="password_rpt">Repeat Password *</label><br>
            <input class="inputs_admin" id="password_rpt" type="password" name="password_rpt" required><br>
            <span id="password_rpt_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="email">E-mail *</label><br>
            <input class="inputs_admin" id="email" type="text" name="email" required><br>
            <span id="email_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="mobile_number">Mobile Number</label><br>
            <input class="inputs_admin" id="mobile_number" type="number" name="mobile_number"><br>
            <span id="mobile_number_error" class="form_errors"></span>
        </div>
        <div class="users_inputs">
            <label for="role">Choose Users Role</label><br>
            <select id="role" class="users_select" name="role">
                <?php
                    $sql = "SELECT * FROM roles";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["name"]?></option>
                <?php } ?>
            </select>
        </div>
        <div class="users_inputs">
            <label for="image">Avatar:</label><br>
            <input class="image" id="image" type="file" name="avatar" accept="image/jpg,image/png,image/jpeg">
        </div>

        <input type="hidden" name="form_id" value="user_add_h">
    </div>
    <div class="btn_admin">
        <input type="submit" name="user_add" value="+ add user">
    </div>
</form>