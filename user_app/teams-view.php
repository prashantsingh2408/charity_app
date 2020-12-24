<?php
require 'config2.php';
require_once 'header-view.php';
// Redirect if use refresh
if (!isset($_POST['name'])) {
    if (!isset($_POST['ushi_per_rho'])) {
        header("location:teams-create.php");
    }
}
// END Redirect if use refresh

// Fetch post


if (!isset($_POST['ushi_per_rho'])) {
    $state = $_POST['state'];
    $name = $_POST['name'];
    $team_leader = $_POST['team_leader'];
    $team_members = $_POST['team_members'];
}
// create id
$sql = 'SELECT MAX(id) FROM teams';
$result = $conn->query($sql);
$rows = $result->fetch_assoc();
$id_new = $rows['MAX(id)'] + 1;
// echo $id_new;
//END create id

// //// Input file
$target_dir = "uploades/";
if (!isset($_POST['ushi_per_rho'])) {
    $target_file = $target_dir . basename($_FILES['pic']['name']);
    $uploadOk = 1;
    // echo $target_file;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    //Check if image file is a actual image or
    //fake image
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['pic']['tmp_name']);
        //Check for img or not
        if ($check != false) {
            echo "File is image -" . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not as image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES['pic']['size'] > 500000) {
        // echo "Sorry, your file is too large.";
        $uploadOK = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
        && $imageFileType != 'gif'
    ) {
        echo "Sorry, only JPG, JPEG, PNG, GIF file are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error message
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES['pic']['name'])) . "has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file. ";
        }
    }

    //save location in db
    if (isset($_POST['name'])) {
        $sql = "INSERT INTO teams(id,state,name,team_leader,team_members,pic) VALUES($id_new,'$state','$name', '$team_leader', '$team_members','$target_file')";
        //echo $sql;
        $conn->query($sql);
    }
}
unset($_POST);
$_POST = array();

// Delete useless data from db
// Delete uploades/
$sql = "SELECT id FROM teams WHERE pic = 'uploades/'";
//echo $sql;
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    //Decrement next id
    $next_id = $row['id'] + 1;
    $current_id = $row['id'];
    $conn->query("DELETE FROM teams WHERE id = $current_id");
    $conn->query("UPDATE teams SET id = $current_id WHERE id=$next_id");
}
// $sql_update = "UPDATE teams SET pic = '$target_file' WHERE id = $id_new";
// $conn->query($sql_update);
////END Input file
?>


<body class="sidebar-mini sidebar-closed sidebar-collapse" style="height: auto;">
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="min-height: 1325.2px;">
            <div class='row'>
                <div class="header header-fixed header-logo-center">
                    <a href="#" class="header-title">View Team</a>
                    <a href="teams-add.php" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- 
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>State</th>
                                    <th>Team Name</th>
                                    <th>Team Leader</th>
                                    <th>Team Members</th>
                                    <th>Image</th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM teams";
                                $result = $conn->query($sql);
                                while ($rows = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $rows['id'] ?></td>
                                        <td><?= $rows['state'] ?></td>
                                        <td><?= $rows['name'] ?></td>
                                        <td><?= $rows['team_leader'] ?></td>
                                        <td><?= $rows['team_members'] ?></td>
                                        <td><img src='<?= $rows['pic'] ?>' height='60'> </td>
                                        <th>
                                            <button class='btn btn-success '> <i class='fas fa-user-plus'></i> </button>
                                        </th>
                                    </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="\plugins\jquery\jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>

    <!-- For View Team header -->


    <!-- jQuery -->
    <script src="\plugins\jquery\jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>



</body>