<?php
require_once "../database_connection/db_connect.php";
?>
<?php
session_start();
// $db_connect = mysqli_connect("localhost","root","","loginform");

$brand_id = $_POST['brand_id'];
$status = $_POST["status"];
$brand_name = $_POST["brand_name"];
if($_FILES['image_name']['name']){
    $brand_photo = $_POST["image_name"];
    // $_POST['brand_id'];
    $genarate_pic = date("Y") ."-".time() . rand(1000, 99999);
    
    $select_img = $_FILES['image_name']['name'] ;
    $photo_explode = explode(".", $select_img);
    $getting_extension = end($photo_explode);
    $update_photo_name = $genarate_pic .".". $getting_extension;
    
    
    $temp_location = $_FILES['image_name']['tmp_name'] ;
    $new_location = "upload/brand_img/" . $update_photo_name;
    move_uploaded_file($temp_location , $new_location);
    
    $list_edit_update_query = "UPDATE brand_images SET image_name ='$update_photo_name' WHERE id = '$brand_id'" ;
    mysqli_query($db_connect, $list_edit_update_query);
    header("location: brand_partners.php");
}

    $list_edit_status_update_query = "UPDATE brand_images SET brand_name = '$brand_name', status= '$status' WHERE id = '$brand_id'" ;
    mysqli_query($db_connect, $list_edit_status_update_query);
    header("location: brand_partners.php");
?>