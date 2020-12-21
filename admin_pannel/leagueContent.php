<div class="content-wrapper" style="min-height: 564.331px;">

  <div class="card">

    <div class="card-header">
      <h3 class="card-title">League List</h3>

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
            <th>League State</th>
            <th>Raised Rs</th>
            <th>
              <a href='league_add.php'>
                <button form='league_form' type="button" class="btn btn-primary">Add League</button>
              </a>
            </th>
            </th>
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