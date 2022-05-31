<?php
require_once "../database_connection/db_connect.php";
?>
<?php
$tab_title = "Neptune - Update Your Profile Data";
?>
<?php
require_once "partisions/upper.php";
?>

<!-- //////photo code//////// -->
<div class="container">
    
<div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Update Profile Picture</h5>
                    </div>
                    
                        <div class="card-body">
                        <?php
                                //  $db_connect = mysqli_connect("localhost","root","","loginform");
                                $value_show_query = "SELECT * FROM web_profile_settings " ;
                                $value_show_query_connect = mysqli_query($db_connect, $value_show_query);

                                
                                ?>

                            <form action="web_profile_update_post.php" method="POST" enctype="multipart/form-data">
                                <div class="example-container">
                                    <div class="example-content">
                                        <label for="exampleInputEmail1" class="form-label">Update Profile Details</label> <br>
                                        <?php foreach($value_show_query_connect as $value): ?>
                                            <label for="exampleInputEmail1" class="form-label"><?= htmlspecialchars(ucwords(str_replace("_", " " , $value['profile_name']))) ?></label>
                                        <input type="text" class="form-control" 
                                            name="<?= $value['profile_name'] ?>" value="<?= $value['profile_value'] ?>" ><br>
                                            <?php endforeach; ?>
                                        <br>
                                        <button type="submit" class="btn btn-success m-b-xs m-r-xs" >Submit</button>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
</div>



<?php
require_once "partisions/lower.php";
?>