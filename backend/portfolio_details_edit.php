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
                                $portfolio_photo_show_query = "SELECT * FROM portfolios_details WHERE id ='$id'";
                                $edit_portfolio_photo_show_query_connect = mysqli_query($db_connect, $portfolio_photo_show_query);

                                $portfolios = mysqli_fetch_assoc($edit_portfolio_photo_show_query_connect);
                               
                                
                                ?>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Enter Your Portfolios,</h5>
                                    </div>
                                    <div class="card-body">
                                      
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="portfolio_details_update.php" method="POST" enctype="multipart/form-data">
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Portfolio Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" hidden class="form-control" id="inputEmail3" name="portfolio_id" value="<?= $id ?>">
                                                            <input type="text" class="form-control" id="inputEmail3" name="portfolio_name" value="<?= $portfolios['portfolio_name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="inputEmail3" class="col-sm-2 col-form-label" >Portfolio Description</label>
                                                        <div class="col-sm-10">
                                                            <!-- <input type="text" hidden class="form-control" id="inputEmail3" name="brand_id" value="<?= $id ?>"> -->
                                                            <input type="text" class="form-control" id="inputEmail3" name="portfolio_descript" value="<?= $portfolios['portfolio_descript'] ?>">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="inputPassword3" class="col-sm-2 col-form-label" >Portfolio Photo</label>
                                                        <div class="col-sm-10">
                                                            <input readonly type="file" class="form-control" name="portfolio_image" value="<?= $portfolios ['portfolio_image'] ?>">
                                                   
                                                        </div>
                                                     
                                                    </div>
                                                 
                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Portfolio Status</label>
                                                    <br>

                                                    <input type="radio" id="active" name="status" <?= ($portfolios['status']) == 'active' ? 'checked' : '' ?> value="active">
                                                      <label   for="active">Actived</label>

                                                      <input type="radio" <?= ($portfolios['status']) == 'deactive' ? 'checked' : '' ?> id="deactive" name="status" value="deactive">
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