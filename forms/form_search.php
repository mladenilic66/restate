<?php include_once("/db_con.php"); ?>

<!-- search form -->

<form class="form_search" action="/search.php" method="get">

    <div class="search_wrap">
        <select id="categories" class="inputs_search" name="categories">
        <?php
            $sql = "SELECT * FROM categories";
            $result = mysqli_query($con,$sql);

            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
        <?php } ?>
        </select>
    </div>

    <div class="search_wrap">
        <select id="structures" class="inputs_search" name="structures">
            <option value="0" selected="selected">Structure</option>

            <?php
                $sql = "SELECT * FROM structures ORDER BY title asc";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) { 
            ?>

            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
            <?php } ?>
        </select>
    </div>

    <div class="search_wrap">
        <select id="cities" class="inputs_search" name="cities">
            <option value="0" selected="selected">City</option>

            <?php
                $sql = "SELECT * FROM cities ORDER BY title asc";
                $result = mysqli_query($con,$sql);

                while ($row = mysqli_fetch_assoc($result)) { 
            ?>

            <option value="<?=$row["id"]?>"><?=$row["title"]?></option>
            <?php } ?>
        </select>
    </div>

    <div class="search_wrap">
        <input class="inputs_search" id="search_box" name="id" type="number" placeholder="Search by ID">
    </div>

    <div class="search_wrap">
        <input class="inputs_search" id="p_min_search" name="p_min" type="number" placeholder="Min price">
    </div>

    <div class="search_wrap">
        <input class="inputs_search" id="p_max_search" name="p_max" type="number" placeholder="Max price">
    </div>
    
    <div class="search_wrap">
        <button class="button_search" type="submit" value="ok" name="submit_search"><i class="fa fa-search" aria-hidden="true"></i>&nbsp;Search</button>
        <button class="button_reset" type="reset" value=""><i class="fa fa-refresh" aria-hidden="true"></i></button>
    </div>
</form>