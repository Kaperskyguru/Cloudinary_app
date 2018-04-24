<?php
require_once "main.php";


class Image
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
    // array_merge($thumbs_params, array( "crop" => "fill" ))
    public static function display($public_id, $options)
    {
      echo cl_image_tag($public_id, $options);
    }

}
