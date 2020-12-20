<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Advertisements</h1>
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
      <h3 class="card-title">Advertisements List</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fas fa-minus"></i></button>
      </div>
    </div>

    <div class="card-body p-0">
      <table class="table">
        <thead>
          <tr>
            <!-- <th>Photo</th> -->
            <th> ID </th>
            <th>Image</th>
            <th> Linked </th>
            <th>
              <div class='row'>
                <div class='d-flex col-2'>
                  Action
                </div>
                <div class='col d-flex justify-content-end'>
                  <a href='advertisements_add.php'>
                    <button type="button" class="btn btn-primary">Add Advertisements</button>
                  </a>
                </div>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          require 'config.php';
          $sql = "SELECT * FROM advertisements";
          $result = $conn->query($sql);
          while ($rows = $result->fetch_assoc()) {
          ?>
            <tr id="<?= $rows['id']; ?>">
              <th> <?=   $rows['id'] ?> </th>
              <td> <img src="<?= $rows['img'] ?>" alt="<?=  $rows['img'] ?>" height='60'> </td>
              <td> <?= $rows['link'] ?> </td>
              <td> <button class='btn btn-danger' onclick="trash(<?= $id; ?>)"><i class='fas fa-trash'> </i></button> </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.content-wrapper -->