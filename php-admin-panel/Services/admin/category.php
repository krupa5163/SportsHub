<?php
// session_start();
include('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>


<!--Category Modal -->
<div class="modal fade" id="CategoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Gift Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description"  class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="">Trending</label>
            <input type="checkbox" name="trending">Trending
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <input type="checkbox" name="status" >Status
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content" mt-4>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Gift Category
                            <a href="#" data-toggle="modal" data-target="#CategoryModal" class="btn btn-primary float-right">Add</a>
                        </h4>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


</div>




<?php include('includes/script.php'); ?>

<?php include('includes/footer.php'); ?>