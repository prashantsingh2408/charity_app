<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">NGO & Event View</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.userTable -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table View</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- <th style="width: 10px">#</th> -->
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $id = $_GET['id'];
                            require 'config.php';
                            $sql = "SELECT * FROM ngos WHERE id =$id";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            ?>
                            <tr>
                                <td>ID</td>
                                <td><?= $row['id'] ?></td>
                            </tr>

                            <tr>
                                <td>Name NGOs</td>
                                <td><?= $row['name_ngos'] ?></td>
                            </tr>

                            <tr>
                                <td>Partner</td>
                                <td><?= $row['partner'] ?></td>
                            </tr>

                            <tr>
                                <td>Current Amount</td>
                                <td><?= $row['current_amount'] ?></td>
                            </tr>

                            <tr>
                                <td>Total Goal</td>
                                <td><?= $row['total_goal'] ?></td>
                            </tr>

                            <tr>
                                <td>No Of Workout</td>
                                <td><?= $row['no_of_workout'] ?></td>
                            </tr>

                            <tr>
                                <td>About</td>
                                <td><?= $row['about'] ?></td>
                            </tr>

                            <tr>
                                <td>Image</td>
                                <td><img src="<?= $row['img'] ?>" alt="<?= $row['img'] ?>" height='60'></td>
                            </tr>

                            <tr>
                                <td>Amount Raised</td>
                                <td><?= $row['amount_raised'] ?></td>
                            </tr>

                            <tr>
                                <td>No of days</td>
                                <td><?= $row['no_of_days'] ?></td>
                            </tr>

                            <tr>
                                <td>Event Name</td>
                                <td><?= $row['events'] ?></td>
                            </tr>

                            <tr>
                                <td>Change Makers</td>
                                <td><?= $row['change_makers'] ?></td>
                            </tr>

                            <tr>
                                <td>Timespent</td>
                                <td><?= $row['timespent'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div><!-- /.container-fluid -->
</section>
</div>
<!-- /.content-wrapper -->