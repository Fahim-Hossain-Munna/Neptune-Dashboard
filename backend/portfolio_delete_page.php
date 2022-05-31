<?php
require_once "../database_connection/db_connect.php";
?>
<?php
session_start();
// $db_connect = mysqli_connect("localhost","root","","loginform");



// $brand_name = $_POST["brand_name"];
// $brand_photo = $_POST["image_name"];
// $status = $_POST["status"];
// // $brand_id = $_POST['brand_id'];

$id = $_GET['id'];
// ==== image delte from folder start code....
$image_folder_delete_query = "SELECT portfolio_image FROM portfolios_details WHERE id = '$id' ";
$folder_delete_from_db = mysqli_query($db_connect, $image_folder_delete_query);
$folder_image = mysqli_fetch_assoc($folder_delete_from_db)['portfolio_image'];

unlink('upload/brand_img/' . $folder_image);


// ==== image delte from database start code....
$list_edit_delete_query = "DELETE FROM portfolios_details WHERE id =$id" ;
mysqli_query($db_connect, $list_edit_delete_query);
header("location: porfolio_add.php");
?>