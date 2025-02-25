<?php
include('authentication.php');
include('config/dbcon.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content" mt-4>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php
              include('message.php');
              ?>
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Products
                            <a href="prod-add.php"  class="btn btn-primary float-right">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Created At</th>
                                <th>Edit</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              
                              $query = "SELECT * FROM products";
                              $run = mysqli_query($con, $query);

                              if(mysqli_num_rows($run) > 0){
                                foreach($run as $prod_item){
                                  
                                  ?>
                                    <tr>
                                <td><?= $prod_item['id']; ?></td>
                                <td><?= $prod_item['name']; ?></td>
                                <td><?= $prod_item['price']; ?></td>
                                <td>
                                <input type="checkbox" <?= $prod_item['status'] == '1' ? 'checked':''; ?>  readonly  />
                                </td>
                                <td><?= $prod_item['created_at']; ?></td>
                                <td>
                                  <a href="prod-edit.php?prod_id=<?= $prod_item['id'] ?>" class="btn btn-success">Edit</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </td>
                              </tr>
                                    

                                  <?php
                                }

                              }
                              else{
                                echo "no record found";
                              }
                              
                              ?>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


</div>




<?php include('includes/script.php'); ?>

<?php include('includes/footer.php'); ?>