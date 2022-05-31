<?php
require_once "../database_connection/db_connect.php";
?>
<?php
$tab_title = "Neptune - Update Your Profile Data";
?>
<?php
require_once "partisions/upper.php";
?>




<div class="card">
    <div class="card-header">
        <div class="card-body">
        <div class="example-content">
<table class="table">
    <thead class="table-dark">
       <tr>
           <th>SL No</th>
           <th>Service Name</th>
           <th>Service Description</th>
           <th>Service Icon</th>
           <th>Service status</th>
           <th>Action</th>
       </tr>
    </thead>
    <tbody>
    <?php
         $service_list_query = "SELECT * FROM services_list";
         $service_list_connect_query = mysqli_query($db_connect, $service_list_query);
         $serial = 1 ;
      ?>
      <?php foreach($service_list_connect_query as $service_list): ?>
       <tr>
           <td><?= $serial++ ?></td>
           <td><?= $service_list['service_name'] ?></td>
           <td><?= $service_list['service_description'] ?></td>
           <td>
                <i class="fa-2x <?= $service_list['service_icon'] ?>"></i>
        </td>
           <td>
               <?php
                    if( $service_list['status'] == 'Actived' ):
                   ?>
                   <badge class="badge badge-success">Actived</badge>
                   <?php else: ?>
                    <badge class="badge badge-danger">Deactived</badge>
                   <?php endif;  ?>
           </td>
           <td>
               <!-- <a href="service_list_delete_page.php?id=<?= $service_list['id'] ?>" class="btn btn-danger">Delete</a> -->
               <button value="service_list_delete_page.php?id=<?= $service_list['id'] ?>" type="submit"
                                    class="btn btn-danger btn_delete">Delete</button>
               <a href="service_list_edit_page.php?id=<?= $service_list['id'] ?>" class="btn btn-primary">Edit</a>
           </td>
       </tr>
       <?php endforeach; ?>
    </tbody>
</table>
</div>
        </div>
    </div>
</div>

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

