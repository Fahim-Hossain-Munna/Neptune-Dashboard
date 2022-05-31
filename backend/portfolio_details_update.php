<?php
require_once "../database_connection/db_connect.php";
?>

<?php
session_start();
// $db_connect = mysqli_connect("localhost","root","","loginform");



$portfolio_name = $_POST["portfolio_name"];
$portfolio_descript =  htmlentities($_POST["portfolio_descript"], ENT_QUOTES);
$status = $_POST["status"];
$portfolio_id = $_POST['portfolio_id'];

if($_FILES['portfolio_image']['name']){

    $portfolio_image = $_POST["portfolio_image"];
// $_POST['brand_id'];
$genarate_pic = date("Y") ."-".time() . rand(1000, 99999);

$select_img = $_FILES['portfolio_image']['name'] ;
$photo_explode = explode(".", $select_img);
$getting_extension = end($photo_explode);
$update_photo_name = $genarate_pic .".". $getting_extension;


$temp_location = $_FILES['portfolio_image']['tmp_name'] ;
$new_location = "upload/portfolio_image/" . $update_photo_name;
move_uploaded_file($temp_location , $new_location);

$list_edit_update_query = "UPDATE portfolios_details SET portfolio_image ='$update_photo_name' WHERE id = '$portfolio_id'" ;
mysqli_query($db_connect, $list_edit_update_query);
header("location: porfolio_add.php");

}
$list_edit_update_query = "UPDATE portfolios_details SET portfolio_name = '$portfolio_name', portfolio_descript = '$portfolio_descript', status= '$status' WHERE id = '$portfolio_id'" ;
mysqli_query($db_connect, $list_edit_update_query);
header("location: porfolio_add.php");

?>