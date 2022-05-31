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
    
<div class="col-md-12">
                    
                               <?php
                                // $db_connect = mysqli_connect("localhost","root","","loginform");
                                $id = $_GET['id'];
                                $skill_edit_query = "SELECT * FROM my_skills WHERE id ='$id'";
                                $skill_edit_query_connect = mysqli_query($db_connect, $skill_edit_query);

                                $skills = mysqli_fetch_assoc($skill_edit_query_connect);
                                                          
                                ?>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">My Skills,</h5>
                    </div>
                    
                        <div class="card-body">

                            <form action="skill_details_edit_update.php" method="POST" enctype="multipart/form-data">
                                <div class="example-container">
                                    <div class="example-content">
                                    <input type="text" hidden class="form-control" id="inputEmail3" name="skill_id" value="<?= $id ?>">
                                        <label for="exampleInputEmail1" class="form-label">Skills Upload</label><br>
 
                                            <label for="exampleInputEmail1" class="form-label">Skill Name:</label>
                                        <input type="text" class="form-control" 
                                            name="skill_name" value=" <?= $skills['skill_name'] ?> ">
                                            <label for="exampleInputEmail1" class="form-label">Skill Parsenties,</label>
                                        <input type="range" class="form-control slider" 
                                            name="skill_persent" value="<?= $skills['skill_persent'] ?>" min="1" max="100" id="myRange"> 
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
                                                <option <?= ($skills['status']) == 'active' ? 'selected' : '' ?> value="active">Active</option>
                                                <option <?= ($skills['status']) == 'deactive' ? 'selected' : '' ?> value="deactive">Deactive</option>
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

<?php
require_once "partisions/lower.php";
?>