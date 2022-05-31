<?php
require_once "../database_connection/db_connect.php";
?>
<?php
$tab_title = "Portfolio - Update Your Profile Data";
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

                            <form action="portfolio_details_post.php" method="POST" enctype="multipart/form-data">
                                <div class="example-container">
                                    <div class="example-content">
                                        <label for="exampleInputEmail1" class="form-label">Portfolio Picture Upload</label><br>
 
                                            <label for="exampleInputEmail1" class="form-label">Portfolio Name:</label>
                                        <input type="text" class="form-control" 
                                            name="portfolio_name">
                                            <label for="exampleInputEmail1" class="form-label">Portfolio Details:</label>
                                        <input type="text" class="form-control" 
                                            name="portfolio_details">
                                        <label for="exampleInputEmail1" class="form-label">Portfolio Image :</label>
                                        <input type="file" class="form-control" 
                                            name="portfolio_image">
                                            <label for="exampleInputEmail1" class="form-label mt-4">Portfolio Status :</label>
                                            
                                            <select name="status" class="form-label">
                                                <option value="active">Active</option>
                                                <option value="deactive">Deactive</option>
                                            </select>

                                            <br>
                                            
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

<div class="card">
    <div class="card-header">
        <div class="card-body">
        <div class="example-content">
<table class="table">
    <thead class="table-dark">
       <tr>
           <th>SL No</th>
           <th>Portfolio Name</th>
           <th>Portfolio Description</th>
           <th>Portfolio Image</th>
           <th>Portfolio status</th>
           <th>Action</th>
       </tr>
    </thead>
    <tbody>
    <?php
         $portfolios_list_query = "SELECT * FROM portfolios_details";
         $portfolios_list_connect_query = mysqli_query($db_connect, $portfolios_list_query);
         $serial = 1 ;
      ?>
      <?php foreach($portfolios_list_connect_query as $portfolio_list): ?>
       <tr>
           <td><?= $serial++ ?></td>
           <td><?= $portfolio_list['portfolio_name'] ?></td>
           <td><?= $portfolio_list['portfolio_descript'] ?></td>
           <td><img src="upload/portfolio_image/<?= $portfolio_list['portfolio_image'] ?>" style="width: 100%; height:50px" alt=""></td>
           
           <td>
               <?php
                    if( $portfolio_list['status'] == 'active' ):
                   ?>
                   <badge class="badge badge-success">Actived</badge>
                   <?php else: ?>
                    <badge class="badge badge-danger">Deactived</badge>
                   <?php endif;  ?>
           </td>
           <td>
               <!-- <a href="portfolio_delete_page.php?id=<?= $portfolio_list['id'] ?>" class="btn btn-danger">Delete</a> -->
               <button value="portfolio_delete_page.php?id=<?= $portfolio_list['id'] ?>" type="submit" class="btn btn-danger btn_delete">Delete</button>
               <a href="portfolio_details_edit.php?id=<?= $portfolio_list['id'] ?>" class="btn btn-primary">Edit</a>
           </td>
       </tr>
       <?php endforeach; ?>
    </tbody>
</table>
</div>
        </div>
    </div>
</div>

<!-- //////photo code//////// -->

<?php
require_once "partisions/lower.php";
?>
<script>
    $(document).ready(function () {

        $('.btn_delete').click(function(){
        // start
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $(this).val();
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
        // end
        });

    });
</script>