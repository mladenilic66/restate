<!-- structure form -->
<form  id="add_structure_form" action="/process.php" method="post">
    <div class="structure_inputs">
        <label for="structure">Structure</label><br>
        <input id="structure" class="inputs_admin" type="text" name="structure">

        <div class="btn_admin">
            <input type="submit" name="structure_add" value="+ add">
        </div><br>
        <span id="structure_error" class="form_errors"></span>
    </div>
    <input type="hidden" name="form_id" value="structure_add">
</form>