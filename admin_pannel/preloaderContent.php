<!-- Content Wrapper. Contains page content -->
<?php
require 'config.php';
$sql = "SELECT preloader FROM admin";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2 class="m-0 text-dark">Preloader</h2>
        </div><!-- /.col -->
        <div class="col-sm-6">
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.userTable -->
  <!-- /.card -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Preloader</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>
    <h2>Select a preloader</h2>

    <!-- Pic show and upload -->
    <div class='row col-4'>
        <!-- Current pic display -->
        <span> <b>Current photo<b> </span></br>
        <img src="<?= $row['preloader'] ?>" alt="Current pic" width="120" height="120" style="vertical-align:bottom">
      <!-- Upload Pic -->
        <div class="input-group">
          <div class="custom-file">
            <input name='pic' type="file" class="custom-file-input" id="exampleInputFile">
            <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text" id="">Picture</span>
          </div>
        </div>
    </div>
    <!-- /Pic show and upload -->
  </div>
  <!-- /.card -->
</div>
<!-- /.content-wrapper -->