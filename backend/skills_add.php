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
                        <h5 class="card-title">My Skills,</h5>
                    </div>
                    
                        <div class="card-body">

                            <form action="skill_edit_post.php" method="POST" enctype="multipart/form-data">
                                <div class="example-container">
                                    <div class="example-content">
                                        <label for="exampleInputEmail1" class="form-label">Skills Upload</label><br>
 
                                            <label for="exampleInputEmail1" class="form-label">Skill Name:</label>
                                        <input type="text" class="form-control" 
                                            name="skill_name">
                                            <label for="exampleInputEmail1" class="form-label">Skill Parsenties,</label>
                                        <input type="range" class="form-control slider" 
                                            name="skill_persent" min="1" max="100" value="1" id="myRange">
                                            <p style="margin-top: 5px ;">Value: <span id="demo"></p>
                                            <!-- range script start -->
                                            <script>
                                                  var slider = document.getElementById("myRange");
                                                  var output = document.getElementById("demo");
                                                  output.innerHTML = slider.value;
                                                  
                                                  slider.oninput = function() {
                                                    output.innerHTML = this.value;
                                                  }
                                             </script>
                                             <!-- range script end -->
                                            <label for="exampleInputEmail1" class="form-label mt-4">Skill Status :</label>
                                            
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
           <th>Skill Name</th>
           <th>Skill Persentice</th>    
           <th>Skill status</th>
           <th>Action</th>
       </tr>
    </thead>
    <tbody>
    <?php
         $skill_list_query = "SELECT * FROM my_skills";
         $skill_list_connect_query = mysqli_query($db_connect, $skill_list_query);
         $serial = 1 ;
      ?>
      <?php foreach($skill_list_connect_query as $skill_list): ?>
       <tr>
           <td><?= $serial++ ?></td>
           <td><?= $skill_list['skill_name'] ?></td>
           <td><?= $skill_list['skill_persent'] ?></td>
           <td>
               <?php
                    if( $skill_list['status'] == 'active' ):
                   ?>
                   <badge class="badge badge-success">Actived</badge>
                   <?php else: ?>
                    <badge class="badge badge-danger">Deactived</badge>
                   <?php endif;  ?>
           </td>
           <td>
               <!-- <a href="skill_delete_page.php?id=<?= $skill_list['id'] ?>" class="btn btn-danger">Delete</a> -->
               <button value="skill_delete_page.php?id=<?= $skill_list['id'] ?>" type="submit"
                                    class="btn btn-danger btn_delete">Delete</button>
               <a href="skill_details_edit.php?id=<?= $skill_list['id'] ?>" class="btn btn-primary">Edit</a>
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