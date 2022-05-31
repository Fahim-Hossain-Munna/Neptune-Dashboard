<?php
require_once "../database_connection/db_connect.php";
?>
<?php
session_start();
// $db_connect = mysqli_connect("localhost","root","","loginform");



$skill_name = $_POST["skill_name"];
$skill_persent = $_POST["skill_persent"];
$status = $_POST["status"];
$skill_id = $_POST['skill_id'];

// // $_POST['brand_id'];
// $genarate_pic = date("Y") ."-".time() . rand(1000, 99999);

// $select_img = $_FILES['portfolio_image']['name'] ;
// $photo_explode = explode(".", $select_img);
// $getting_extension = end($photo_explode);
// $update_photo_name = $genarate_pic .".". $getting_extension;


// $temp_location = $_FILES['portfolio_image']['tmp_name'] ;
// $new_location = "upload/portfolio_image/" . $update_photo_name;
// move_uploaded_file($temp_location , $new_location);

$list_edit_update_query = "UPDATE my_skills SET skill_name = '$skill_name', skill_persent = '$skill_persent', status ='$status' WHERE id = '$skill_id'" ;
mysqli_query($db_connect, $list_edit_update_query);
header("location: skills_add.php");
?>