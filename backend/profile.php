<?php
require_once "../database_connection/db_connect.php";
?>
<?php
$tab_title = "Neptune - Update Your Profile Data";
?>
<?php
require_once "partisions/upper.php";
?>
<div class="row">
    <div class="container">


<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-description">
                <h1>Dashboard</h1>
                <h2>Hello <?= $_SESSION["s_name"] ?>, (<?= $_SESSION["s_mail"] ?>)</h2>
                <h3>Your ID : <?= $_SESSION["s_id"] ?> </h3>
            </div>
        </div>
    </div>
</div>


<!-- //////username code////// -->
<!-- =======================================
          alart massege username success
=============================================-->
<div class="one text-center">
    <?php
if(isset($_SESSION["current_name_success"])){
?>
    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
        <div class="alert-content">
            <span class="alert-title">Successfull,!</span>
            <span
                class="alert-text"><?php if(isset($_SESSION["current_name_success"])) { echo $_SESSION["current_name_success"]; }?></span>
        </div>
        <?php   
       } unset($_SESSION["current_name_success"]);
       ?>
    </div>
</div>
<!-- =======================================
          alart massege username success
=============================================-->
<!-- =======================================
          alart massege e-mail success
=============================================-->
<div class="two text-center">
    <?php
if(isset($_SESSION["current_mail_success"])){
?>
    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
        <div class="alert-content">
            <span class="alert-title">Successfull,!</span>
            <span
                class="alert-text"><?php if(isset($_SESSION["current_mail_success"])) { echo $_SESSION["current_mail_success"]; }?></span>
        </div>
        <?php   
       } unset($_SESSION["current_mail_success"]);
       ?>
    </div>
</div>
<!-- =======================================
          alart massege e-mail success
=============================================-->
<!-- =======================================
          alart massege phone success
=============================================-->
<div class="three text-center">
    <?php
if(isset($_SESSION["current_num_success"])){
?>
    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
        <div class="alert-content">
            <span class="alert-title">Successfull,!</span>
            <span
                class="alert-text"><?php if(isset($_SESSION["current_num_success"])) { echo $_SESSION["current_num_success"]; }?></span>
        </div>
        <?php   
       } unset($_SESSION["current_num_success"]);
       ?>
    </div>
</div>
<!-- =======================================
          alart massege phone success
============================================= -->
<!-- =======================================
          alart massege image success
=============================================-->
<div class="three text-center">
    <?php
if(isset($_SESSION["photo_success_msg"])){
?>
    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
        <div class="alert-content">
            <span class="alert-title">Successfull,!</span>
            <span
                class="alert-text"><?php if(isset($_SESSION["photo_success_msg"])) { echo $_SESSION["photo_success_msg"]; }?></span>
        </div>
        <?php   
       } unset($_SESSION["photo_success_msg"]);
       ?>
    </div>
</div>
<!-- =======================================
          alart massege image success
=============================================-->
<!-- =======================================
          alart massege password success
=============================================-->
<div class="four text-center">
    <?php
if(isset($_SESSION["current_password_success"])){
?>
    <div class="alert alert-custom alert-indicator-top indicator-success" role="alert">
        <div class="alert-content">
            <span class="alert-title">Successfull,!</span>
            <span
                class="alert-text"><?php if(isset($_SESSION["current_password_success"])) { echo $_SESSION["current_password_success"]; }?></span>
        </div>
        <?php   
       } unset($_SESSION["current_password_success"]);
       ?>
    </div>
</div>
<!-- =======================================
          alart massege password success
=============================================-->
<!-- //////username code////// -->

<div class="container" style="margin-bottom: 20px;">
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update Username</h5>
            </div>
            <div class="card-body">
                <form action="profileupdate.php" method="POST">
                    <div class="example-container">
                        <div class="example-content">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" value="<?= $_SESSION["s_name"] ?>" name="user">
                            <br>
                            <button type="submit" name="name_change"
                                class="btn btn-success m-b-xs m-r-xs">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<!-- //////username code////// -->
<br>
<!-- //////phone code////// -->
<div class="container" style="margin-bottom: 20px;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update Phone Number</h5>
            </div>
            <div class="card-body">

                <form action="profileupdate.php" method="POST">
                    <div class="example-container">
                        <div class="example-content">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="change_num"
                                value="<?php if(isset($_SESSION["s_num"])) echo $_SESSION["s_num"] ;?>">
                            <br>
                            <button type="submit" class="btn btn-success m-b-xs m-r-xs"
                                name="number_change">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- //////phone code////// -->

<br>
<!-- //////email code////// -->
<div class="container" style="margin-bottom: 20px ;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update E-mail</h5>
            </div>
            <div class="card-body">

                <form action="profileupdate.php" method="POST">
                    <div class="example-container">
                        <div class="example-content">
                            <label for="exampleInputEmail1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" value="<?= $_SESSION["s_mail"] ?>" name="mail">
                            <br>
                            <button type="submit" class="btn btn-success m-b-xs m-r-xs"
                                name="mail_change">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- //////email code////// -->
<br>
<!-- //////photo code//////// -->
<div class="container" style="margin-bottom: 20px ;">

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update Profile Picture</h5>
            </div>

            <div class="card-body">

                <form action="profileupdate.php" method="POST" enctype="multipart/form-data">
                    <div class="example-container">
                        <div class="example-content">
                            <label for="exampleInputEmail1" class="form-label">Profile Picture</label>
                            <input type="file" class="form-control" name="profile_pic">
                            <br>
                            <button type="submit" class="btn btn-success m-b-xs m-r-xs"
                                name="photo_change">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<br>

<!-- //////photo code//////// -->

<!-- //////password code//////// -->
<div class="container" style="margin-bottom: 20px ;">
    <!-- start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Update password</h5>
            </div>
            <div class="card-body">

                <form action="profileupdate.php" method="POST">
                    <div class="example-container">
                        <div class="example-content">
                            <label for="exampleInputEmail1" class="form-label">Current Password</label>
                            <input type="password"
                                class="form-control <?php if(isset($_SESSION["current_password_error"])) { echo "is-invalid" ; } ?>"
                                name="current_password" id="signUpPassword"><br>
                            <?php
                                                     if(isset($_SESSION["current_password_error"])):
                                                    ?>
                            <div id="emailHelp" class="form-text m-b-md text-danger">
                                <?php if(isset($_SESSION["current_password_error"])) { echo $_SESSION["current_password_error"] ; } ?>
                            </div>
                            <?php
                                                     endif; unset($_SESSION["current_password_error"]);
                                                    ?>
                            <label for="pass"><input type="checkbox" id="pass" onclick="myFunction()"> Show
                                Password</label> <br></br>
                            <script>
                                function myFunction() {
                                    var x = document.getElementById("signUpPassword");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                    }
                                }
                            </script>
                            <label for="exampleInputEmail1" class="form-label">New Password</label>

                            <input type="password"
                                class="form-control <?php if(isset($_SESSION["pass_error"])) { echo "is-invalid" ; } ?>"
                                name="new_password"><br>
                            <?php
                                                     if(isset($_SESSION["pass_error"])):
                                                    ?>
                            <div id="emailHelp" class="form-text m-b-md text-danger">
                                <?php if(isset($_SESSION["pass_error"])) { echo $_SESSION["pass_error"] ; } ?>
                            </div>
                            <?php
                                                     endif; unset($_SESSION["pass_error"]);
                                                    ?>

                            <label for="exampleInputEmail1" class="form-label">confirm Password</label>

                            <input type="password"
                                class="form-control <?php if(isset($_SESSION["pass_error"])) { echo "is-invalid" ; } ?>"
                                name="cf_password"><br>
                            <?php
                                                           if(isset($_SESSION["pass_error"])):
                                                          ?>
                            <div id="emailHelp" class="form-text m-b-md text-danger">
                                <?php if(isset($_SESSION["pass_error"])) { echo $_SESSION["pass_error"] ; } ?>
                            </div>
                            <?php
                                                           endif; unset($_SESSION["pass_error"]);
                                                          ?>
                            <br>
                            <button type="submit" class="btn btn-success m-b-xs m-r-xs"
                                name="pass_change">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- end -->
</div>


<!-- //////password code//////// -->


</div>
</div>
<?php
require_once "partisions/lower.php";
?>