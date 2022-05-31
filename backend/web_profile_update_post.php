<?php
require_once "../database_connection/db_connect.php";
?>
<?php
// $db_connect = mysqli_connect("localhost","root","","loginform");

    foreach ($_POST as $profile_name => $profile_value) {

        $web_profile_update_query = "UPDATE web_profile_settings SET profile_value = '$profile_value' WHERE profile_name = '$profile_name'";
        mysqli_query($db_connect , $web_profile_update_query );
        
    }
    header("location: web_profile_info.php");
?>