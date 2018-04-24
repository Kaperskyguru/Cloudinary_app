<?php
require_once 'upload_image.php';

    if(isset($_POST['submit']) && !empty($_FILES['files'])){
        echo 'hi';
    $files = $_FILES["files"];
    $files = is_array($files) ? $files : array( $files );
    $files_data = array();
    foreach ($files["tmp_name"] as $index => $value) {
        array_push($files_data, Image::upload($value, $files["name"][$index]));
    }

}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cloudinary App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files[]" />
        <input type="submit" id="submit" name="submit" value="Submit"/>
    </form>
    <br/>
    <br/>
    <div>
        <?php 
        $thump_params = array(
            "format" => "png", 
            "height" => "150", 
            "width" => "150", 
            "class" => "thumpnail inline"
        );
        // public id from database
        // $options = ;
        Image::display("Abia Poly.png", array_merge($thump_params, array( "crop" => "fill" )));?>
    </div>
</body>
</html>