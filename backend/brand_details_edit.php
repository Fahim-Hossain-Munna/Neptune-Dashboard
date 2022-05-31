<?php
require_once "../database_connection/db_connect.php";
?>
<?php
$tab_title = "Neptune - Update Your Profile Data";
?>
<?php
require_once "partisions/upper.php";
?>
<div class="container">
    <!-- start -->
    <div class="col-md-12">

                                <?php
                                //  $db_connect = mysqli_connect("localhost","root","","loginform");
                                $id = $_GET['id'];
                                $edit_photo_show_query = "SELECT * FROM brand_images WHERE id ='$id'";
                                $edit_photo_show_query_connect = mysqli_query($db_connect, $edit_photo_show_query);

                                $brands = (mysqli_fetch_assoc($edit_photo_show_query_connect));
                                // print_r(mysqli_fetch_assoc($edit_photo_show_query_connect));
                                
                                ?>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Enter Your Services,</h5>
                                    </div>
                                    <div class="card-body">
                                      
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="brand_details_update.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Brand Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" hidden class="form-control" id="inputEmail3" name="brand_id" value="<?= $id ?>">
                                                            <input type="text" class="form-control" id="inputEmail3" name="brand_name" value="<?= $brands['brand_name'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Brand Photo</label>
                                                        <div class="col-sm-10">
                                                            <input readonly type="file" class="form-control" name="image_name" value="<?= $brands ['image_name'] ?>">
                                                   
                                                        </div>
                                                     
                                                    </div>
                                                 
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Brand Status</label>
                                                    <br>

                                                    <input type="radio" id="active" name="status" <?= ($brands['status']) == 'active' ? 'checked' : '' ?> value="active">
                                                      <label   for="active">Actived</label>

                                                      <input type="radio" <?= ($brands['status']) == 'deactive' ? 'checked' : '' ?> id="deactive" name="status" value="deactive">
                                                      <label for="deactive">Deactived</label><br></br>
                                                    
                                                    <button type="submit" class="btn btn-primary">Click</button>
                                                </form>
                                            </div>
                                            
                               
    <!-- end -->
</div>
 



<?php
require_once "partisions/lower.php";
?>
<!-- <script>
  $(document).ready(function(){
    $('.catch_icon').click(function(){
        $('#input_icon_name').val($(this).attr('id'));
    });

  });

</script> -->