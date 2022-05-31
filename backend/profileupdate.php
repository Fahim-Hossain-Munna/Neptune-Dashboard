<?php
require_once "../database_connection/db_connect.php";
?>
 <?php
 session_start();
//  $db_connect=mysqli_connect("localhost", "root", "", "loginform");
// name Change Code
if(isset($_POST['name_change'])){
    $name = $_POST['user'];
    $id = $_SESSION["s_id"] ;
    $name_update_query = "UPDATE singup_page SET name ='$name' WHERE id = '$id'";
    mysqli_query($db_connect, $name_update_query);
    $_SESSION["s_name"] = $name ;
    $_SESSION["current_name_success"] = "Update name Successfully Done";
    header("location: profile.php");

}
// Mail Change Code
if(isset($_POST['mail_change'])){
    $mail = $_POST['mail'];
    $eid = $_SESSION["s_id"] ;
    $email_update_query = "UPDATE singup_page SET email_address ='$mail' WHERE id = '$eid'";
    mysqli_query($db_connect, $email_update_query);
    $_SESSION["current_mail_success"] = "Update E-mail Successfully Done";
    $_SESSION["s_mail"] = $mail ;
    header("location: profile.php");

}

 // Phone Change Code
 if(isset($_POST['number_change'])){
    $number = $_POST["change_num"];
    $id = $_SESSION["s_id"] ;
    $number_update_query = "UPDATE singup_page SET phone_numbers = $number WHERE id = '$id'";
    mysqli_query($db_connect, $number_update_query);
    $_SESSION["current_num_success"] = "Update Phone Number Successfully Done";
    $_SESSION["s_num"] = $number ;
    header("location: profile.php");
 }
// Password Change Code
// $encurrupt_new_pass = md5($_POST['new_password']);
// $pass_num_match = preg_match("@[0-9]@", $password) ;
// $pass_uppercase_match = preg_match("@[A-Z]@", $encurrupt_new_pass) ;
// $pass_lowercase_match = preg_match("@[a-z]@", $encurrupt_new_pass) ;
// $pass_specialchar_match = preg_match("@[^\w]@", $encurrupt_new_pass) ;
//     /* ==============================
//          password code
//  ================================*/
//  if($encurrupt_new_pass){
//     if(strlen($encurrupt_new_pass) >= 8){
//         if($pass_num_match ){
//             if($pass_uppercase_match ){
//                 if($pass_lowercase_match ){
//                     if($pass_specialchar_match ){
                       
//                     }else{
//                         $flag = true ;
//                         $_SESSION["pass_error"] = "Password must be a one special charecter!";
//                         header("location: profile.php");
//                     }
//                 }else{
//                     $flag = true ;
//                     $_SESSION["pass_error"] = "Password must be a one lowercase";
//                     header("location: profile.php");
//                 }
//             }else{
//                 $flag = true ;
//                 $_SESSION["pass_error"] = "Password must be a one uppercase";
//                 header("location: profile.php");
//             }
//         }else{
//             $flag = true ;
//             $_SESSION["pass_error"] = "Password must be a one number";
//             header("location: profile.php");
//         }
//     }else{
//         $flag = true ;
//         $_SESSION["pass_error"] = "Password must be minimum 8 characters length*";
//         header("location: profile.php");
//     }
// }else{
//     $flag = true ;
//     $_SESSION["pass_error"] = "password required!";
//     header("location: profile.php");
// }
 /* ==============================
         password code
 ================================*/
if(isset($_POST['pass_change'])){
 
    $id = $_SESSION["s_id"] ;
    $encurrupt_current_pass = md5($_POST["current_password"]);
    $encurrupt_new_pass = md5($_POST['new_password']);
    $encurrupt_cf_pass = md5($_POST['cf_password']);
    if($encurrupt_new_pass == $encurrupt_cf_pass){
        $password_query = "SELECT COUNT(*) AS password_value FROM singup_page WHERE id = '$id' AND password ='$encurrupt_current_pass'";
        $connent_pass = mysqli_query($db_connect, $password_query);
        
        if(mysqli_fetch_assoc($connent_pass)["password_value"] == 1 && $encurrupt_new_pass == $encurrupt_cf_pass){
            $encurrupt_new_pass = md5($_POST['new_password']);
            $pass_update_query = "UPDATE singup_page SET password ='$encurrupt_new_pass', confirm_password = '$encurrupt_new_pass' WHERE id = '$id'" ;
            mysqli_query($db_connect, $pass_update_query);
           $_SESSION["s_password"] = $pass ;
           $_SESSION["current_password_success"] = "Update password Successfully Done";
           header("location: profile.php");
        }else{
            $_SESSION["current_password_error"] = "please Check Your password";
            header("location: profile.php");
        }
    }

}
 // Profile photo Change Code

if(isset($_POST["photo_change"])){
    
   $select_photo = $_FILES['profile_pic']['name'] ;
   $photo_explode = explode(".", $select_photo);
   $getting_extension = end($photo_explode);
   $id = $_SESSION["s_id"] ;
   $update_photo_name = ($id .".". $getting_extension);

   
   $temp_location = $_FILES['profile_pic']['tmp_name'];
   $new_location = "upload/profile_photos/" . $update_photo_name;
   move_uploaded_file($temp_location , $new_location);
   $profile_photo_update_query = "UPDATE singup_page SET default_photo_name ='$update_photo_name' WHERE id = '$id'" ;
   mysqli_query($db_connect, $profile_photo_update_query);
   $_SESSION["photo_success_msg"] = "Update Photo Successfully Done";
   header("location: profile.php");
}

 ?>
 

