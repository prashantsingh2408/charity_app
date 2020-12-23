    <div class="content-wrapper" style="min-height: 564.331px;" <div class="card">
        <div class="card-header">
            <h3 class="card-title">User Records</h3>

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
                        <th>Photo</th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                        <th class="float-right">
                            <form id='userAddForm' method="get" action='userAdd.php'>
                                <button form='userAddForm' type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
                                    <i class="icon-user icon-white"></i> Add
                                </button>
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>




                    <!-- Dynamic Table,Fetch and remove data from table -->
                    <?php
                    require 'config.php';
                    $sql = "SELECT pic,id,firstname,lastname,phone,email,gender FROM user";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $gender = $row['gender'];
                        $pic_src = $row['pic']

                    ?>

                        <tr id="<?= 'row' . $id; ?>">
                            <td><img src='<?= $pic_src ?>' height='60' alt='<?= $pic_src ?> not found'></td>
                            <td><?= $id ?></td>
                            <td><?= $firstname; ?></td>
                            <td><?= $lastname; ?></td>
                            <td><?= $phone; ?></td>
                            <td><?= $email; ?></td>
                            <td><?= $gender; ?></td>
                            <td class='text-right py-0 align-middle'>
                                <div class='btn-group btn-group-sm'>
                                    <form action='userEdit.php' method='get'>
                                        <button type="submit" name="id" value="<?= $id ?>" class="btn btn-primary">
                                            <i class="icon-user icon-white"></i> Edit
                                        </button>
                                    </form>
                                    <form method='get' action='userView.php'>
                                        <button type="submit" name="id" value="<?= $id ?>" class='btn btn-info'><i class='fas fa-eye'></i></button>
                                    </form>
                                    <a onclick='removeUser(<?= $id; ?>)' class='btn btn-danger'><i class='fas fa-trash'></i></a>
                                </div>
                            </td>

                        </tr>
                    <?php
                    } // end while
                    ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
                </div>