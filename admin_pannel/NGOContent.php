<div class="content-wrapper" style="min-height: 564.331px;" <div class="content-wrapper" style="min-height: 564.331px;" <div class="card">
    <div class="card-header">
        <h3 class="card-title">NGOs and Event Records</h3>

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
                    <th>Id</th>
                    <th>Name_ngos</th>
                    <th>Partner</th>
                    <th>Current_amount</th>
                    <th>total_goal</th>
                    <th class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                            <a href="NGOAdd.php" class="btn btn-info"><i class="fas fa-plus"></i></a>
                        </div>
                    </th>

                </tr>
            </thead>
            <tbody>
                <!-- Dynamic Table,Fetch and remove data from table -->
                <?php
                require 'config.php';
                $sql = "SELECT * FROM ngos";
                $result = $conn->query($sql);

                while ($row =  $result->fetch_assoc()) {
                    $id = $row['id'];
                    $name_ngos = $row['name_ngos'];
                    $partner = $row['partner'];
                    $current_amount = $row['current_amount'];
                    $total_goal = $row['total_goal'];

                ?>
                    <tr id="<?= $id; ?>">
                        <td contenteditable="true">
                            <img src="<?= $row['img']; ?>" alt="<?= $row['img']; ?>" height='50'>
                        </td>
                        <td contenteditable="true"><?= $id; ?></td>
                        <td contentedita ble="true"><?= $name_ngos; ?></td>
                        <td contenteditable="true"><?= $partner; ?></td>
                        <td contenteditable="true"><?= $current_amount; ?></td>
                        <td contenteditable="true"><?= $total_goal; ?></td>
                        <td class='text-right py-0 align-middle'>
                            <div class='btn-group btn-group-sm'>


                                <form id='form1' method='get' action="NGO_event_add.php">
                                    <button form='form1' type="submit" name='id' value='<?= $id ?>' class="btn btn-info">Add Event
                                    </button>
                                </form>
                                <form id='form2' method='get' action="NGOEdit.php">
                                    <button form='form2' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-edit"></i>
                                    </button>
                                </form>
                                <form id='form3' method='get' action="NGOView.php">
                                    <button form='form3' type="submit" name='id' value='<?= $id ?>' class="btn btn-info"><i class="fas fa-eye"></i>
                                    </button>
                                </form>
                                <button onclick="remove('<?= $id; ?>')" class='btn btn-danger'><i class='fas fa-trash'></i></button>

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