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
  <!-- /.card -->
  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">League List</h3>
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
            <th>League State</th>
            <th>
              <div class='row'>
                <div class='d-flex col-2'>
                  Raised Rs
                </div>
                <div class='col d-flex justify-content-end'>
                  <a href='league_add.php'>
                    <button form='league_form' type="button" class="btn btn-primary">Add League</button>
                  </a>
                </div>
              </div>
    </div>
    </th>

    </tr>
    </thead>
    <tbody>

      <?php
      require 'config.php';
      $sql = 'SELECT * FROM league';
      $result = $conn->query($sql);
      while ($rows = $result->fetch_assoc()) {
          $id = $rows['id'];
      ?>
        <tr id="<?= $id; ?>">
          <td> <?= $rows['id'] ?> </td>
          <td> <?= $rows['league'] ?> </td>
          <td> <?= $rows['raised'] ?> </td>
          <td> <button class='btn btn-danger' onclick="trash(<?=$id;?>)"><i class='fas fa-trash'> </i></button> </td>
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