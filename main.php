<?php
require_once 'lib/cloudinary/src/Api.php';
require_once 'lib/cloudinary/src/Cloudinary.php';
require_once 'lib/cloudinary/src/Uploader.php';
include_once 'config.php';

// defining parameters for thumpnail images
$thump_params = array(
    "format" => "png", 
    "height" => "150", 
    "width" => "150", 
    "class" => "thumpnail inline"
);

function ret_err($var)
{
    ob_start();
    var_dump($var);
    return ob_get_clean();
}