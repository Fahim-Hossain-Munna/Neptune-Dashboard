<?php
require_once "../database_connection/db_connect.php";
?>
<?php
 session_start();
//  $db_connect = mysqli_connect("localhost", "root", "", "loginform");


// insert database code
    $skill_name = $_POST['skill_name'] ;
    $skill_persent = $_POST['skill_persent'] ;
    $status = $_POST['status'] ;
    $skill_update_query = "INSERT INTO my_skills( skill_name, skill_persent, status) VALUES ('$skill_name','$skill_persent','$status')";
    mysqli_query($db_connect, $skill_update_query);
// insert database code
// // insert id
//     $id = mysqli_insert_id($db_connect );
//     $genarate_pic = date("Y") ."-".time() . rand(1000, 99999);
// // insert id

// // update query and brand img code
//     $select_img = $_FILES['brand_pic']['name'] ;
//     $photo_explode = explode(".", $select_img);
//     $getting_extension = end($photo_explode);
//     $update_photo_name = $genarate_pic .".". $getting_extension;
 
    
//     $temp_location = $_FILES['brand_pic']['tmp_name'] ;
//     $new_location = "upload/brand_img/" . $update_photo_name;
//     move_uploaded_file($temp_location , $new_location);
//     $img_update = "UPDATE brand_images SET image_name = '$update_photo_name' WHERE id ='$id'";
//     mysqli_query($db_connect, $img_update);
    header("location: skills_add.php");
    
// update query and brand img code
  ?>