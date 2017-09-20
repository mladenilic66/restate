<?php include_once("/db_con.php"); ?>

<!-- advanced search form -->

<form action="/search.php" method="get">
    <div class="content">
        <select id="categories" name="categories">
        <?php
            $sql = "SELECT * FROM categories ORDER BY title asc";
            $result = mysqli_query($con,$sql);

            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
        <?php } ?>
        </select>

        <select id="structures" name="structures">
            <option value="0" selected="selected">Structure</option>

            <?php
                $sql = "SELECT * FROM structures ORDER BY title asc";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) { 
            ?>

            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
            <?php } ?>
        </select>

        <select id="cities" name="cities">
            <option value="0" selected="selected">City</option>

            <?php
                $sql = "SELECT * FROM cities ORDER BY title asc";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) { 
            ?>

            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
            <?php } ?>
        </select>

        <label for="rooms">Rooms:</label>
        <select id="rooms" name="rooms">
        <?php
            $sql = "SELECT * FROM rooms_number";
            $result = mysqli_query($con,$sql);

            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <option value="<?=$row["title"]?>"><?=$row["title"]?></option>
        <?php } ?>
        </select>

        <input id="p_min" name="p_min" type="number" placeholder="Min price">
        <input id="p_max" name="p_max" type="number" placeholder="Max price">

        <input id="qu_min" name="qu_min" type="number" placeholder="Min Quadrature">
        <input id="qu_max" name="qu_max" type="number" placeholder="Max Quadrature">
    </div>
        <div class="inner">
            <div class="filter_btn f_btn_1">
                <p>Parking Lot&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></p>
            </div>
            <div class="filter_content f_cnt_1">
                <?php
                    $sql = "SELECT * FROM parking_lot";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>  <div class="filter_checkbox">
                        <input type="checkbox" name="p[]" value="<?=$row["id"]?>">
                        <label><?=$row["title"]?></label>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="inner">
            <div class="filter_btn f_btn_2">
                <p>Heating &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></p>
            </div>
            <div class="filter_content f_cnt_2">
                <?php
                    $sql = "SELECT * FROM heating";
                    $result = mysqli_query($con,$sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                ?>  <div class="filter_checkbox">
                        <input type="checkbox" name="heating[]" value="<?=$row["id"]?>">
                        <label><?=$row["title"]?></label>
                    </div>
                <?php } ?>
            </div>
        </div>
    
    <button class="button_search" type="submit" value="ok" name="submit_adv_search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
</form>