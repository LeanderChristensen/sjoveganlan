<?php
ob_start();
session_start();
require_once 'dbconnect.php';
$target_dir = "userImg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "Filen er et bilde - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "The file is not an image.<br>";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Something went wrong, try again later or contact support ...<br>";
// if everything is ok, try to upload file
} else {
    $fileName = $_SESSION["user"] . "." . $imageFileType;
    $target_file = $target_dir . $_SESSION["user"] . "." . $imageFileType;
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $query = "UPDATE users SET userImg='" . $fileName . "' WHERE userId='" . $_SESSION["user"] . "'";
        $res = mysql_query($query);
        if ($res) {
          header( 'Location: http://sjovegan-ikt.no/index_en.php#minside2' ) ;
        } else {
          echo "Something went wrong, try again later or contact support ...<br>";
        }
    } else {
        echo "Something went wrong, try again later or contact support ...<br>";
    }
}
?>

<button class="btn btn-block btn-danger" onclick="goBack()">Go Back</button>
