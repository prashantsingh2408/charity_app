<!-- Content Wrapper. Contains page content -->
<?php
require 'config.php';
$sql = "SELECT logo_impact,logo_webixun FROM admin";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

  <!-- Change logo_impact -->
  <div class="content-wrapper">
    <div class="card card-primary">
    <!-- card-header -->
    <div class="card-header">
      <h3 class="card-title">Change Impact Logo</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id='form' action='change_logo_save.php' method='post' enctype='multipart/form-data'>
      <div class="card-body">
        <!-- Current Photo -->
        <div class="form-group">
          <label for="exampleInputEmail1">Current Photo</label></br>
          <img src="<?= $row['logo_impact'] ?>" alt="Current pic" width="120" height="120" style="vertical-align:bottom">
        </div>
        <!-- /Current Photo -->

        <!-- Upload file -->
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input name='logo_impact' type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Picture</span>
            </div>
          </div>
        </div>
        <!-- Upload file -->
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button form='form' type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <!-- /form start -->
  </div>


  <!-- Change logo_webixun -->
  <div class="card card-primary">
    <!-- card-header -->
    <div class="card-header">
      <h3 class="card-title">Change Webixun Logo</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form id='form2' action='change_logo_save.php' method='post' enctype='multipart/form-data'>
      <div class="card-body">
        <!-- Current Photo -->
        <div class="form-group">
          <label for="exampleInputEmail1">Current Photo</label></br>
          <img src="<?= $row['logo_webixun'] ?>" alt="Current pic" width="120" height="120" style="vertical-align:bottom">
        </div>
        <!-- /Current Photo -->

        <!-- Upload file -->
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input name='logo_webixun' type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Upload Photo</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Picture</span>
            </div>
          </div>
        </div>
        <!-- /Upload file -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button form='form2' type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    <!-- /form start -->
  </div>
</div>
<!-- /.content-wrapper -->