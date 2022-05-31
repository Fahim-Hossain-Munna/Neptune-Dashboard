<?php
require_once "../database_connection/db_connect.php";
?>
<?php
// $db_connect = mysqli_connect("localhost","root","","loginform");

$id = $_GET['id'];

$skill_delete_query = "DELETE FROM my_skills WHERE id =$id";
mysqli_query($db_connect, $skill_delete_query) ;
header("location: skills_add.php");
?>