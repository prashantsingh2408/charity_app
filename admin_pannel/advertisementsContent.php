<div class="content-wrapper" style="min-height: 564.331px;">

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Advertisement List</h3>

      <!-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
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
              <th> <?= $rows['id'] ?> </th>
              <td> <img src="<?= $rows['img'] ?>" alt="<?= $rows['img'] ?>" height='60'> </td>
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
        </div>