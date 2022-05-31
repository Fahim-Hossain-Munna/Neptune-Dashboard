<?php
require_once "../database_connection/db_connect.php";
?>
<?php

// $db_connect = mysqli_connect("localhost","root","","loginform");

$service_name = $_POST["service_name"];
$service_description = htmlentities($_POST["service_description"], ENT_QUOTES) ;
$service_icon = $_POST["service_icon"];
$status = $_POST["status"];
$service_id = $_POST['service_id'];

$list_edit_update_query = "UPDATE services_list SET service_name = '$service_name', service_description ='$service_description' ,service_icon= '$service_icon', status= '$status' WHERE id = '$service_id'" ;
mysqli_query($db_connect, $list_edit_update_query);
header("location: service_list.php");
?>