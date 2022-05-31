<?php
require_once "../database_connection/db_connect.php";
?>
<?php
session_start();
// $db_connect = mysqli_connect("localhost","root","","loginform");



$brand_name = $_POST["brand_name"];
$brand_photo = $_POST["image_name"];
$status = $_POST["status"];
// $brand_id = $_POST['brand_id'];

$id = $_GET['id'];
// ==== image delte from folder start code....
$image_folder_delete_query = "SELECT image_name FROM brand_images WHERE id = '$id' ";
$folder_delete_from_db = mysqli_query($db_connect, $image_folder_delete_query);
$folder_image = mysqli_fetch_assoc($folder_delete_from_db)['image_name'];

unlink('upload/brand_img/' . $folder_image);


// ==== image delte from database start code....
$list_edit_delete_query = "DELETE FROM brand_images WHERE id =$id" ;
mysqli_query($db_connect, $list_edit_delete_query);
header("location: brand_partners.php");
// ==== image delte from database end code....
?>

