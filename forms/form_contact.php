<!-- contact form -->

<form id="contact_form" action="/process.php" method="post">
    <div class="contact_inner">
        <div class="contact_inputs">
            <label for="name">Name *</label><br>
            <input class="contact_input" id="name" type="text" name="name"><br>
            <span id="name_error" class="form_errors"></span>
        </div>
        <div class="contact_inputs">
            <label for="email_c">E-mail *</label><br>
            <input class="contact_input" id="email_c" type="text" name="email_c"><br>
            <span id="email_c_error" class="form_errors"></span>
        </div>
        <div class="contact_inputs">
            <label for="message_c">Message</label><br>
            <textarea class="contact_input" rows="15" id="message_c" name="message_c" placeholder="Enter Message"></textarea><br>
            <span id="message_c_error" class="form_errors"></span>
        </div>
        <input type="hidden" name="form_id" value="contact">
    </div>
    <div class="btn">
        <input class="add_rs_submit" type="submit" name="contact_submit" value="submit">
    </div>
    <div class="messages">
    <?php if (isset($_GET['msg'])) { ?>
        <i class="msg"><?=$_GET['msg']?></i>
    <?php } ?>
    </div>
</form>