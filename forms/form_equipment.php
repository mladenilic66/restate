<!-- equipment form -->
<form id="add_equipment_form" action="/process.php" method="post">
    <div class="structure_inputs">
        <label for="equipment">Equipment</label><br>
        <input id="equipment" class="inputs_admin" type="text" name="equipment">

        <div class="btn_admin">
            <input type="submit" name="equipment_add" value="+ add">
        </div><br>
        <span id="equipment_error" class="form_errors"></span>
    </div>
    <input type="hidden" name="form_id" value="equipment_add">
</form>