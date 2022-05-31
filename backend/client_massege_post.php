<?php
require_once "../database_connection/db_connect.php";
?>
<?php
session_start();



    $client_username = $_POST['client_username'];
    $client_email = $_POST['client_email'];
    $client_massege = $_POST['client_massege'];
    $id = $_SESSION["s_id"] ;

    $insert_db = "INSERT INTO client_massages (client_username , client_email , client_massege ) VALUE ('$client_username','$client_email','$client_massege')";
    $db_connect_quary = mysqli_query($db_connect, $insert_db);
    header("location: ../index.php");

?>