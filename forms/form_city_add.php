<!-- city add form -->
<form id="add_city_form" action="/process.php" method="post">
    <div class="cities_inputs">
        <label for="cities">City</label><br>
        <input id="cities" class="inputs_admin" type="text" name="cities">

        <div class="btn_admin">
            <input type="submit" name="city_add" value="+ add">
        </div><br>
        <span id="cities_error" class="form_errors"></span>
    </div>
    <input class="inputs_admin" type="hidden" name="form_id" value="city_add">
</form>