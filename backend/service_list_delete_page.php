<?php
require_once "../database_connection/db_connect.php";
?>
<?php
// $db_connect = mysqli_connect("localhost","root","","loginform");

$id = $_GET['id'];

$service_delete_query = "DELETE FROM services_list WHERE id =$id";
mysqli_query($db_connect, $service_delete_query) ;
header("location: service_list.php");
?>