<?php include_once("/db_con.php"); ?>

<!-- add new real estate form -->

<form id="add_rs_form" action="/process.php" method="post" enctype="multipart/form-data">
    <div class="add_rs_inner">
        <div class="add_rs_top">
            <div class="add_rs_inputs">
                <label for="categories">Property for</label><br>
                <select id="categories" name="categories">
                <?php
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
            <div class="add_rs_inputs">
                <label for="structures">Structure type</label><br>
                <select id="structures" name="structures">
                <?php
                    $sql = "SELECT * FROM structures";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
            <div class="add_rs_inputs">
                <label for="cities">Choose city</label><br>
                <select id="cities" name="cities">
                <?php
                    $sql = "SELECT * FROM cities";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <div class="add_rs_title">
            <div class="add_rs_inputs">
                <label for="title">Title *</label><br>
                <input id="title" class="title" type="text" name="title" placeholder="Enter Title" required><br>
                <span id="title_error" class="form_errors"></span>
            </div>
        </div>
        <div class="add_rs_middle">
            <div class="add_rs_inputs">
                <label for="address">Enter Address *</label><br>
                <input id="address" class="address" type="text" name="address" placeholder="Enter Address" required><br>
                <span id="address_error" class="form_errors"></span>
            </div>
            <div class="add_rs_inputs">
                <label for="quadrature">Quadrature (m&sup2;) *</label><br>
                <input id="quadrature" class="quadrature" type="number" name="quadrature" placeholder="Enter Quadrature" required><br>
                <span id="quadrature_error" class="form_errors"></span>
            </div>
            <div class="add_rs_inputs">
                <label for="rooms_number">Num. of rooms</label><br>
                <select id="rooms_number" name="rooms_number">
                    <?php
                        $sql = "SELECT * FROM rooms_number";
                        $result = mysqli_query($con,$sql);

                        while ($row = mysqli_fetch_assoc($result)) { 
                    ?>

                    <option value="<?=$row["title"]?>"><?=$row["title"]?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="add_rs_description">
            <div class="add_rs_inputs">
                <label for="description">Description</label><br>
                <textarea rows="15" id="description" name="description" placeholder="Enter Description"></textarea><br>
                <span id="description_error" class="form_errors"></span>
            </div>
        </div>
        <div class="add_rs_lower">
            <div class="add_rs_inputs">
                <label for="pets_allowed">Pets Allowed</label><br>
                <select id="pets_allowed" name="pets_allowed">
                <?php
                    $sql = "SELECT * FROM pets_allowed";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
            <div class="add_rs_inputs">
                <label for="parking_lot">Parking Lot</label><br>
                <select id="parking_lot" name="parking_lot">
                <?php
                    $sql = "SELECT * FROM parking_lot";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
            <div class="add_rs_inputs">
                <label for="heating">Heating</label><br>
                <select id="heating" name="heating">
                <?php
                    $sql = "SELECT * FROM heating";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
        </div>
        <div class="add_rs_bottom">
            <div class="add_rs_inputs">
                <label for="availability">Availability</label><br>
                <select id="availability" name="availability">
                <?php
                    $sql = "SELECT * FROM availability";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
                <?php } ?>
                </select>
            </div>
            
            <div class="add_rs_inputs">
                <label for="price">Price *</label><br>
                <input id="price" class="price" type="number" name="price" placeholder="Enter Price" required><br>
                <span id="price_error" class="form_errors"></span>
            </div>
            <div class="add_rs_inputs">
                <label for="deposit">Deposit</label><br>
                <input id="deposit" type="number" name="deposit" placeholder="Enter Deposit"><br>
                <span id="deposit_error" class="form_errors"></span>
            </div>
            <div class="add_rs_inputs">
                <label for="image">Images</label><br>
                <input id="image" class="images" type="file" name="image[]" accept="image/jpg,image/png,image/jpeg" multiple>
            </div>
        </div>
        <div class="add_rs_equipment">
            <div class="add_rs_inputs">
                <label for="">Equipment and Appliances</label><br>
                <?php
                    $sql = "SELECT * FROM equipment";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="add_rs_eq_cont">
                        <label><?=$row["title"]?></label>
                        <input type="checkbox" name="equipment[]" value="<?=$row["title"]?>">
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="add_rs_submit_btn">
            <input type="hidden" name="form_id" value="add_real_estate">
            <input class="add_rs_submit" type="submit" name="add_real_estate" value="+ add real estate">
        </div>
    </div>
</form>