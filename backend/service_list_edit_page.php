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
                                $edit_show_query = "SELECT * FROM services_list WHERE id ='$id'";
                                $edit_show_query_connect = mysqli_query($db_connect, $edit_show_query);

                                $service = mysqli_fetch_assoc($edit_show_query_connect);
                                ?>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Enter Your Services,</h5>
                                    </div>
                                    <div class="card-body">
                                      
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="service_list_update_page.php" method="POST">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Service Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" hidden class="form-control" id="inputEmail3" name="service_id" value="<?= $id ?>">
                                                            <input type="text" class="form-control" id="inputEmail3" name="service_name" value="<?= $service['service_name'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Service Description</label>
                                                        <div class="col-sm-10">
                                                            <textarea id="" cols ="100" rows="4" name="service_description" ><?= $service['service_description'] ?>"</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Service Icon</label>
                                                        <div class="col-sm-10">
                                                            <input readonly type="text" class="form-control" id="input_icon_name" name="service_icon" value="<?= $service['service_icon'] ?>">
                                                            <div class="col-sm-10 mt-4">
                                                            
                                                            <div class="card" >
                                                                <div class="card-header">Select Icon in the bellow list,</div>
                                                                <div class="card-body" style="overflow-y: scroll; height: 250px;">
                                                                    <?php  require_once "fonts.php"; ?>
                                                                    <?php foreach($fonts as $font): ?>
                                                                    <span class="badge badge-dark m-1 catch_icon" id="<?= $font ?>"> <i class="fa-2x <?= $font ?>"></i> </span>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        </div>
                                                     
                                                    </div>
                                                 
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Service Status</label>
                                                    <br>

                                                    <input type="radio" id="active" name="status" <?= ($service['status']) == 'Actived' ? 'checked' : '' ?> value="Actived">
                                                      <label   for="active">Actived</label>

                                                      <input type="radio" <?= ($service['status']) == 'Deactived' ? 'checked' : '' ?> id="deactive" name="status" value="Deactived">
                                                      <label for="deactive">Deactived</label><br></br>
                                                    
                                                    <button type="submit" class="btn btn-primary">Click</button>
                                                </form>
                                            </div>
                                            
                               
    <!-- end -->
</div>
 



<?php
require_once "partisions/lower.php";
?>
<script>
  $(document).ready(function(){
    $('.catch_icon').click(function(){
        $('#input_icon_name').val($(this).attr('id'));
    });

  });

</script>