<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $replace = array("'","<",">");
    $data = str_replace($replace, "", $data);
    $data = htmlspecialchars($data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

function remove_string($data) {
    $data = str_replace(" ", "-", $data);
    $data = str_replace(",", "", $data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

function trim_textarea($data) {
    $replace = array("&amp;","nbsp","<script>","</script>");
    $data = str_replace($replace, "", $data);
    $data = trim($data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

function uniq_id() {
    $random = substr(number_format(time() * rand(),0,'',''),0,8);
    $random = (int) $random;
    return $random;
}

function date_short($data) {
    $data = strtotime($data);
    $data = date('d-m-Y', $data);
    return $data;
}