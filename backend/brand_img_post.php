<?php
require_once "../database_connection/db_connect.php";
?>
<?php
 session_start();
//  $db_connect = mysqli_connect("localhost", "root", "", "loginform");


// insert database code
    $select_name = $_POST['brand_name'] ;
    $select_status = $_POST['status'] ;
    $select_photo = $_POST['brand_pic'] ;
    $profile_photo_update_query = "INSERT INTO brand_images( brand_name, image_name, status) VALUES ('$select_name','$select_photo','$select_status')";
    mysqli_query($db_connect, $profile_photo_update_query);
// insert database code
// insert id
    $id = mysqli_insert_id($db_connect );
    $genarate_pic = date("Y") ."-".time() . rand(1000, 99999);
// insert id

// update query and brand img code
    $select_img = $_FILES['brand_pic']['name'] ;
    $photo_explode = explode(".", $select_img);
    $getting_extension = end($photo_explode);
    $update_photo_name = $genarate_pic .".". $getting_extension;
 
    
    $temp_location = $_FILES['brand_pic']['tmp_name'] ;
    $new_location = "upload/brand_img/" . $update_photo_name;
    move_uploaded_file($temp_location , $new_location);
    $img_update = "UPDATE brand_images SET image_name = '$update_photo_name' WHERE id ='$id'";
    mysqli_query($db_connect, $img_update);
    header("location: brand_partners.php");
    
// update query and brand img code
  ?>

