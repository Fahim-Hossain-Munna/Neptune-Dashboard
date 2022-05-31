<?php
require_once "../database_connection/db_connect.php";
?>
<?php
//  $db_connect = mysqli_connect("localhost","root","","loginform");

$service_name = $_POST["service_name"];
$service_description = htmlentities($_POST["service_description"], ENT_QUOTES);
$service_icon = $_POST["service_icon"];
$status = $_POST["status"];

 $insert_db = "INSERT INTO services_list (service_name , service_description , service_icon , status) VALUE ('$service_name','$service_description','$service_icon','$status')";
 $db_connect_quary = mysqli_query($db_connect, $insert_db);
  header("location: service_list.php");
?>