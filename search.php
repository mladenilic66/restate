<?php
include_once("/db_con.php");
include_once("/functions/functions.php");
include_once("/header.php");
?>
<div class="page">
<div class="rr">
    <div id="nav_top">
        <?php include("/forms/form_advanced_search.php"); ?>
    </div>
<?php

    if (isset($_REQUEST["submit_search"])) {

        $where_clauses = array();

        $categories = $_GET["categories"];
        $structures = $_GET["structures"];
        $cities = $_GET["cities"];
        $price_min = $_GET["p_min"];
        $price_max = $_GET["p_max"];

    if (!empty($_GET["categories"])) {
        $where_clauses[] = "id_category=".$categories;
    }
    if (!empty($structures)) {
        $where_clauses[] = "id_structure=".$structures;
    }
    if (!empty($_GET["id"])) {
        $search_box = $_GET["id"]; 
        $where_clauses[] = "id_fake=".$search_box;
    }
    if (!empty($price_min)) {  
        $where_clauses[] = "price >= ".$price_min;
    }
    if (!empty($price_max)) {
       $where_clauses[] = "price <= ".$price_max;
    }
    if (!empty($cities)) {
       $where_clauses[] = "id_city=".$cities;
    }
    
        $where = ""; 

    if (count($where_clauses) > 0) {
        $where = " WHERE ".implode(" AND ",$where_clauses);
    }
        $sql = "SELECT ads.id, ads.id_fake, ads.headline, ads.address, ads.price, ads.quadrature, ads.rooms_number, ads.created, ads.image, categories.title AS cat, cities.title AS city_name, structures.title AS str_name FROM ads INNER JOIN cities ON ads.id_city=cities.id INNER JOIN structures ON ads.id_structure=structures.id INNER JOIN categories ON ads.id_category=categories.id".$where;

        $result = mysqli_query($con,$sql);
        $match = mysqli_num_rows($result);
    }


    if (isset($_REQUEST["submit_adv_search"])) {

        $where_clauses = array();

        $categories = $_GET["categories"];
        $structures = $_GET["structures"];
        $rooms = $_GET["rooms"];
        $cities = $_GET["cities"];
        $price_min = $_GET["p_min"];
        $price_max = $_GET["p_max"];
        $quadrature_min = $_GET["qu_min"];
        $quadrature_max = $_GET["qu_max"];

    if (!empty($categories)) {
        $where_clauses[] = "id_category=".$categories;
    }
    if (!empty($structures)) {
        $where_clauses[] = "id_structure=".$structures;
    }
    if (!empty($rooms)) {
        $where_clauses[] = "rooms_number=".$rooms;
    }
    if (isset($_GET["p"])) {

        $parking_lot = $_GET["p"];
        $parking_lot_2 = implode(",", $parking_lot);
        $where_clauses[] = "id_parking_lot IN (".$parking_lot_2.")";
    }
    if (isset($_GET["heating"])) {

        $heating = $_GET["heating"];
        $heating_2 = implode(",", $heating);
        $where_clauses[] = "id_heating IN (".$heating_2.")";
    }

    if (!empty($price_min)) {
        $where_clauses[] = "price >= ".$price_min;
    }
    if (!empty($price_max)) {
       $where_clauses[] = "price <= ".$price_max;
    }
    if (!empty($quadrature_min)) {
        $where_clauses[] = "quadrature >= ".$quadrature_min;
    }
    if (!empty($quadrature_max)) {
       $where_clauses[] = "quadrature <= ".$quadrature_max;
    }
    if (!empty($cities)) {
       $where_clauses[] = "id_city=".$cities;
    }

        $where = "";

    if (count($where_clauses) > 0) {
        $where = " WHERE ".implode(" AND ",$where_clauses);
    }

        $sql = "SELECT ads.id, ads.id_fake, ads.headline, ads.address, ads.price, ads.quadrature, ads.rooms_number, ads.created, ads.image, categories.title AS cat, cities.title AS city_name, structures.title AS str_name FROM ads INNER JOIN cities ON ads.id_city=cities.id INNER JOIN structures ON ads.id_structure=structures.id INNER JOIN categories ON ads.id_category=categories.id".$where;

        $result = mysqli_query($con,$sql);
        $match = mysqli_num_rows($result);
    }


    ?>
        <div class="result_header">
            <p>Results: <strong><?=$match?></strong></p>
        </div>

        <div class="result">
        <?php

            if ($match > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    
                    $title = remove_string($row['headline']);
                    $image = $row['image'];
                    $id = $row['id_fake'];
                    $date = date_short($row['created']);
                    
                    include("/data.php");
                } 

                if ($match > 12) { ?>
                    <div id="load_more">
                        <a href="#" id="load_more_a">Load More</a>
                    </div>
                <?php }

            } else { ?>
                <div class="no_results">
                    <h4><i class="fa fa-frown-o fa-lg" aria-hidden="true"></i>&nbsp;No results found</h4>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
mysqli_close($con);
include_once("/footer.php");
?>