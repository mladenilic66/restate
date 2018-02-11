<?php

// dynamic title tag
function tab_name() {

    $replace = array("-","_");

    $data = basename($_SERVER['PHP_SELF'],".php");
    $data = str_replace($replace, " ", $data);
    $data = ucwords($data);

    if ($data === "Index") {
        $data = "Home";
    }

    return $data . ' | ' . $_SERVER['HTTP_HOST'];
}


// securing inputs from injection
function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = html_entity_decode($data);
    $data = htmlspecialchars($data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

// make url nice
function remove_string($data) {
    $data = str_replace(" ", "-", $data);
    $data = str_replace(",", "", $data);
    $data = strtolower($data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

// secure custom textarea
function trim_textarea($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = html_entity_decode($data);
    if (empty($data)) {
        return false;
    }
    return $data;
}

// generate uniq id
function uniq_id() {
    $random = substr(number_format(time() * rand(),0,'',''),0,8);
    $random = (int) $random;
    return $random;
}

// 
function date_short($data,$format = 'd-m-Y') {
    $data = strtotime($data);
    $data = date($format, $data);
    return $data;
}


// giving new uniq name to file
function rename_img($file_name,$base,$more_entropy = false) {

    if (!empty($file_name)) {
        $path_info = pathinfo($file_name);
        $file_name = uniqid($base,$more_entropy);
        $file_name .= ".".$path_info['extension'];
    } else {
        $file_name = "";
    }

    return $file_name;
}


//resize and crop image by center
function img_crop_resize($max_width, $max_height, $source_file, $new_name, $quality = 100) {
    $imgsize = getimagesize($source_file);
    $width = $imgsize[0];
    $height = $imgsize[1];
    $mime = $imgsize['mime'];
 
    switch($mime) {
 
        case 'image/png':
            $image_create = "imagecreatefrompng";
            $image = "imagepng";
            break;
 
        case 'image/jpeg':
            $image_create = "imagecreatefromjpeg";
            $image = "imagejpeg";
            break;
 
        default:
            return false;
            break;
    }
     
    $dst_img = imagecreatetruecolor($max_width, $max_height);
    $src_img = $image_create($source_file);
     
    $width_new = $height * $max_width / $max_height;
    $height_new = $width * $max_height / $max_width;
    //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
    if($width_new > $width) {
        //cut point by height
        $h_point = (($height - $height_new) / 2);
        //copy image
        imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
    } else {
        //cut point by width
        $w_point = (($width - $width_new) / 2);
        imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
    }

    $image = imagejpeg($dst_img, $new_name, $quality);
}