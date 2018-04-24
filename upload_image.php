<?php
require_once "main.php";
class Uploader
{
    function __construct(){

    }

    public static function upload($file_name, $name)
    {
        $result = \Cloudinary\Uploader::upload($file_name, array(
            "tags" => "My Image",
            "public_id" => "$name",
        ));

        unlink($file_name);
        echo "Upload result: " .ret_err($result);
        return $result;

        // save name public_id to database
    }
}
