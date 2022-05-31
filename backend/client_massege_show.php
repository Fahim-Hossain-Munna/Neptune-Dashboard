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
    <div class="col-xl-12">
        <?php
            $select_msg_count_query = "SELECT COUNT(*) as total_user FROM client_massages";
            $connect_db = mysqli_query($db_connect, $select_msg_count_query);
            $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
        ?>
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Client Masseges,<span class="badge badge-info badge-style-light"> <?= $total_client ?> Recent Messages</span></h5>
                                    </div>
                                    <div class="card-body bg-dark mt-3">
                                    <?php
                                      $client_massege_query = "SELECT * FROM client_massages";
                                      $client_massege_connect_query = mysqli_query($db_connect, $client_massege_query);
                                      $serial = 1 ;
                                   ?>
                                        <!-- ====start===== -->
                                        <?php foreach($client_massege_connect_query as $massege_list): ?>
                                            <div class="col-xl-6 mt-5">
                              <div class="card widget widget-popular-product">
                                    <div class="card-body">
                                        <div class="widget-popular-product-container">
                                            <div class="widget-popular-product-image">
                                                <img src="../assets/images/widgets/popular-product.jpeg" alt="">
                                            </div>
                                            <div class="widget-popular-product-tags">
                                                <span class="badge rounded-pill badge-secondary badge-style-light"><?= $massege_list["client_email"] ?></span>
                                               
                                            </div>
                                            <div class="widget-popular-product-content">
                                                <a href="#" class="widget-popular-product-title"> <?= $massege_list["client_username"] ?></a>
                                                <p class="widget-popular-product-text m-b-md"> <?= $massege_list["client_massege"] ?></p>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      </div>
                                                <?php endforeach; ?>
                                                <!-- ====end===== -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
    </div>
</div>




<?php
require_once "partisions/lower.php";
?>

