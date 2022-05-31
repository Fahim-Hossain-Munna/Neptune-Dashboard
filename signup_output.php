<?php
require_once "database_connection/db_connect.php";
?>
<?php
session_start();

$flag = false;
$username = $_POST["username"];
$mail_address = $_POST["email"];
$password = $_POST["password"];
$c_password = $_POST["c_password"];
$pass_num_match = preg_match("@[0-9]@", $password) ;
$pass_uppercase_match = preg_match("@[A-Z]@", $password) ;
$pass_lowercase_match = preg_match("@[a-z]@", $password) ;
$pass_specialchar_match = preg_match("@[^\w]@", $password) ;

/* ==============================
        alart code Connect
 ================================*/

 $_SESSION["login_status"]=" Good Job Sir, $username";
 header("location: signin.php");



/* ==============================
        alart code Connect
 ================================*/

/* ==============================
         username code
 ================================*/

if($username){
    if(ctype_alpha($username)){
        $_SESSION["user_old"] = $username;
        echo "$username is valid";
}else{
    $flag = true ;
    $_SESSION["user_error"] = "your username should be a alphabatic";
    header("location: signup.php");
}
}else{
    $flag = true ;
    $_SESSION["user_error"] = "username required!";
    header("location: signup.php");
}

/* ==============================
         username code
 ================================*/

/* ==============================
         email address code
 ================================*/
if(filter_var($mail_address, FILTER_VALIDATE_EMAIL )){
    $_SESSION["email_old"] = $mail_address;
    echo "$mail_address is valid";
}else{
    $flag = true ;
    $_SESSION["email_error"] = "valid e-mail required!";
    header("location: signup.php");
}

/* ==============================
         email address code
 ================================*/

/* ==============================
         password code
 ================================*/
if($password){
    if(strlen($password) >= 8){
        if($pass_num_match ){
            if($pass_uppercase_match ){
                if($pass_lowercase_match ){
                    if($pass_specialchar_match ){
                        $_SESSION["pass_old"] = $password;
                        echo "$password is valid";
                    }else{
                        $flag = true ;
                        $_SESSION["pass_error"] = "Password must be a one special charecter!";
                        header("location: signup.php");
                    }
                }else{
                    $flag = true ;
                    $_SESSION["pass_error"] = "Password must be a one lowercase";
                    header("location: signup.php");
                }
            }else{
                $flag = true ;
                $_SESSION["pass_error"] = "Password must be a one uppercase";
                header("location: signup.php");
            }
        }else{
            $flag = true ;
            $_SESSION["pass_error"] = "Password must be a one number";
            header("location: signup.php");
        }
    }else{
        $flag = true ;
        $_SESSION["pass_error"] = "Password must be minimum 8 characters length*";
        header("location: signup.php");
    }
}else{
    $flag = true ;
    $_SESSION["pass_error"] = "password required!";
    header("location: signup.php");
}
 /* ==============================
         password code
 ================================*/

  /* ==============================
        confirm password code
 ================================*/
if($c_password){
    if($password == $c_password){
        echo "$c_password is valid";
    }else{
        $flag = true ;
        $_SESSION["c_pass_error"] = "password can't match!!";
        header("location: signup.php");
    }
}else{
    $flag = true ;
    $_SESSION["c_pass_error"] = "confirm password required";
        header("location: signup.php");
}

 /* ==============================
        confirm password code
 ================================*/

/* ==============================
        Database code Connect
 ================================*/

 if($flag){
    header("location: signup.php");
 }else{
    // $db_connect = mysqli_connect("localhost","root","","loginform");
    $password = md5($password);
    $c_password = md5($c_password);
        $duplicatemail_query = "SELECT COUNT(*) AS validity FROM singup_page WHERE email_address = '$mail_address'";
        $duplicatemail_query_connect = mysqli_query($db_connect, $duplicatemail_query);

          if(mysqli_fetch_assoc($duplicatemail_query_connect)["validity"] == 1){
            header("location: signup.php");
            $_SESSION["duplicatemail_error_msg"] = "Sir, Your E-mail address already EXIST";
            
          }else{
            $insert_db = "INSERT INTO singup_page (name , email_address , password , confirm_password) VALUE ('$username','$mail_address','$password','$c_password')";
            $db_quary = mysqli_query($db_connect, $insert_db);
          }
 }

/* ==============================
        Database code Connect
 ================================*/
    



?>