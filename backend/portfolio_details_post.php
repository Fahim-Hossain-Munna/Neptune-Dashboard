<?php
require_once "../database_connection/db_connect.php";
?>
<?php
 session_start();
//  $db_connect = mysqli_connect("localhost", "root", "", "loginform");


// insert database code
    $select_name = $_POST['portfolio_name'] ;
    $select_descript = htmlentities($_POST['portfolio_details'], ENT_QUOTES); 
    $select_status = $_POST['status'] ;
    $select_photo = $_POST['portfolio_image'] ;
    $profile_photo_update_query = "INSERT INTO portfolios_details ( portfolio_descript, portfolio_name, portfolio_image, status) VALUES ('$select_descript','$select_name','$select_photo','$select_status')";
    mysqli_query($db_connect, $profile_photo_update_query);
// insert database code
// insert id
    $id = mysqli_insert_id($db_connect );
    $genarate_pic = date("Y") ."-".time() . rand(1000, 99999);
// insert id

// update query and brand img code
    $select_img = $_FILES['portfolio_image']['name'] ;
    $photo_explode = explode(".", $select_img);
    $getting_extension = end($photo_explode);
    $update_photo_name = $genarate_pic .".". $getting_extension;
 
    
    $temp_location = $_FILES['portfolio_image']['tmp_name'];
    $new_location = "upload/portfolio_image/" . $update_photo_name;
    move_uploaded_file($temp_location , $new_location);
    $img_update = "UPDATE portfolios_details SET portfolio_image = '$update_photo_name' WHERE id ='$id'";
    mysqli_query($db_connect, $img_update);
    header("location: porfolio_add.php");
    
// update query and brand img code
  ?>

