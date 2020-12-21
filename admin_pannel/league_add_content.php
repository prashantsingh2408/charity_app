<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">League</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.userTable -->


  <section class="content">
    <div class="container-fluid">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Add League</h3>
        </div>
        <div class="card-body">
          <form action='./league_add_save.php' method="POST" enctype="multipart/form-data" id='editForm'>
            
            <!-- Laegue State -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-fist-raised"></i>
                  &ensp;League State
                </span>
              </div>
              <input required='true' required='true' name='state' type="text" class="form-control" placeholder="Raised">
            </div>


            <!-- raised -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-rupee-sign"></i>
                  &ensp;Rs Raised
                </span>
              </div>
              <input required='true' required='true' name='raised' type="text" class="form-control" placeholder="Raised">
            </div>

            <!-- Button -->
            <div class="card-footer">
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add
              </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Done</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">League Added</div>
                  <div class="modal-footer">
                    <button form='editForm' type='submit' name='id' value='<?= $id ?>' class="btn btn-secondary">
                      Submit
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- END Model -->
          </form>

        </div>
        <!-- /.card-body -->


      </div>
    </div><!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper -->