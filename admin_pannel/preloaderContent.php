<!-- Content Wrapper. Contains page content -->
<?php
require 'config.php';
$sql = "SELECT preloader FROM admin";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>
<div class="content-wrapper">
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Select A preloader</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id='form' action='preloader_save.php' method='post' enctype='multipart/form-data'>
      <div class="card-body">
        <!-- Current Photo -->
        <div class="form-group">
          <label for="exampleInputEmail1">Current Photo</label></br>
          <img src="<?= $row['preloader'] ?>" alt="Current pic" width="120" height="120" style="vertical-align:bottom">
        </div>
        <!-- /Current Photo -->

        <!-- Upload file -->
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input name='preloader' type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Picture</span>
            </div>
          </div>
        </div>  
      </div>
  </div>
  <!-- /Upload file -->
  <!-- /.card-body -->

  <div class="card-footer">
    <button form='form' type="submit" class="btn btn-primary">Submit</button>
  </div>
  </form>
</div>
</div>
<!-- /.content-wrapper -->