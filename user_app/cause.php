<?php
require_once 'header.php';
require_once 'config.php';


$id_ngo = $_GET['token'];
$stmt = $link->prepare("SELECT * FROM ngos WHERE id=?");
$stmt->bind_param('i', $id_ngo);
$stmt->execute();
$result = $stmt->get_result();
$row_ngos = $result->fetch_array(MYSQLI_ASSOC);


$_SESSION['ngo_id'] = $id_ngo;
$stmt_p = $link->prepare("SELECT * FROM user WHERE id IN (select distinct user_id from ngo_count where ngo_id=?)");
$stmt_p->bind_param('i', $id_ngo);
$stmt_p->execute();
$result_p = $stmt_p->get_result();
if ($result_p->num_rows > 0) {
    while ($row_p = $result_p->fetch_assoc()) {
        $pics[] = $row_p;
    }
}
if ($result_p->num_rows > 0) {
    $changemakers = count($pics);
} else {
    $changemakers = 0;
}



//Fetch user
$stmt = $link->prepare("SELECT * FROM user WHERE id=?");
$stmt->bind_param('i', $id_ngo);
$stmt->execute();
$result = $stmt->get_result();
$rows_u = $result->fetch_array(MYSQLI_ASSOC);
?>

<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">Cause OverView</a>
    <a href="javascript:history.back()A" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
    <img src='' class="card-img">
    <div class="content">
        <div style="margin-bottom:4vh;margin-top:-12vh;color:white;">
            <span style="font-size:16px">Walk For Education</span><br>
            <span>With Ved Foundation</span>
        </div>
        <p><?= $rows_u['description'] ?></p>
        <?php
        $img_ngos = '../admin_pannel/' . $row_ngos['img'];
        ?>
        <div class="row">
            <img class="img-responsive" src="<?= $img_ngos; ?>" alt="<?= $img_ngos; ?>" height="50%" width="100%">
        </div>
        <div class="card rounded-m shadow-l">
            <div class="container container-fluid px-4 py-2">
                <div class="row mb-0">

                    <div class="w-25 text-left">
                        <h1 class=""><i class="fa fa-laptop fa-2x"></i></h1>
                    </div>

                    <div class="w-75">

                        <h3 class="mb-0"><?= $row_ngos['ngo_unique'] ?> Children</h3>
                        <p class="mb-0" style="font-size:10px">to be taught with advanced digital teaching</p>
                    </div>
                </div>
            </div>
        </div>


        <?php
        //  require 'user_define_fun.php'; 
        // $ngos_raised = ngos_$ngos_total_raised($id_ngo);
        // NOT WORK LOAD PROBLEM

        $stmt = $link->prepare("SELECT raised FROM ngos_user WHERE id_ngos=?");
        $stmt->bind_param('i', $id_ngo);
        $stmt->execute();
        $result = $stmt->get_result();

        //Sum raised of all user belong to this ngos
        $ngos_total_raised = 0;
        while ($rows = $result->fetch_array(MYSQLI_ASSOC)) {
            if ($rows['raised'] == null) {
                $ngos_total_raised = $ngos_total_raised + 0;
            } else {
                $ngos_total_raised = $ngos_total_raised + $row['raised'];
            }
        }
        ?>
        <p style="font-size:16px">Raised Rs <?= $ngos_total_raised ?> in <?= $rows_u['no_of_days']; ?> days</p>
        <div class="progress my-progress-2">
            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                <span class="sr-only">70% Complete</span>
            </div>
        </div>
        <div class="container container-fluid py-2">
            <div class="row mb-0">
                <div class="w-50 text-left">
                    <h1 class="mb-0"><?= $rows_u['no_of_workout'] ?></h1>
                    <p class="mb-0" style="font-size:10px">Workouts</p>
                </div>
                <div class="w-50 text-right">
                    <h1 class="mb-0"><?= $rows_u['changemakers']; ?></h1>
                    <p class="mb-0" style="font-size:10px">Changemakers</p>
                </div>
            </div>
        </div>
        <h4>Your Activity</h4>
        <div class="container container-fluid px-4 py-2">
            <div class="row mb-0">
                <div class="w-25 text-left">
                    <h1 class=""><i class="fa fa-star fa-2x color-yellow1-dark"></i></h1>
                </div>
                <div class="w-75">
                    <p style="font-size:16px" class="my-2">Be a Education Hero in
                        <?= ($todays_steps * $step_in_m) / 1000; ?> km</p>

                </div>
            </div>
            <div class="row mt-3 mb-0">
                <div class="w-25 text-center">
                    <?php
                    //User  donations to this ngo
                    $stmt = $link->prepare("SELECT raised,workouts,distance,time_spent FROM ngos_user WHERE id_users = ? and id_ngos = ?");
                    $stmt->bind_param('ii', $id, $id_ngo);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $rows = $result->fetch_array(MYSQLI_ASSOC);
                    if ($rows['raised'] == null) {
                        $usr_raised = 0;
                    } else {
                        $usr_raised = $rows['raised'];
                    }
                    if ($rows['workouts'] == null) {
                        $usr_wrkouts = 0;
                    } else {
                        $usr_wrkouts = $rows['workouts'];
                    }
                    if ($rows['distance'] == null) {
                        $usr_distance = 0;
                    } else {
                        $usr_distance = $rows['distance'];
                    }

                    if ($rows['time_spent'] == null) {
                        $usr_time_spent = 0;
                    } else {
                        $usr_time_spent = $rows['time_spent'];
                    }
                    ?>
                    <h3 class="mb-0">Rs <?= $usr_raised ?></h3>
                    <p class="mb-0" style="font-size:10px">Raised</p>
                </div>
                <div class="w-25 text-center">
                    <h3 class="mb-0">0<?= $usr_wrkouts ?></h3>
                    <p class="mb-0" style="font-size:10px">Workouts</p>
                </div>
                <div class="w-25 text-center">

                    <!-- To be update -->
                    <h3 class="mb-0"><?= ($todays_steps * $step_in_m) / 1000; ?>km</h3>
                    <p class="mb-0" style="font-5gt size:10px">Distance</p>
                </div>
                <div class="w-25 text-center">
                    <?php
                    $array = explode('.', $usr_time_spent);
                    $h = $array[0];
                    $m = $array[0];
                    ?>
                    <h3 class="mb-0"><?= $h ?> hr <?= $m ?> min</h3>
                    <p class="mb-0" style="font-size:10px">Time Spent</p>
                </div>
            </div>
            <div class="row mt-3 mb-0">
                <?php

                //Select 10 use of this ngo
                // $stmt = $link->prepare("SELECT id_user FROM ngos_user WHERE id_ngos = ? ORDER BY raised");
                // $stmt->bind_param('i', $id_ngo);
                // $stmt->execute();
                // $result = $stmt->get_result();
                // $rows = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <!-- <h4>Hall Of Fame</h4>
                <div class="owl-carousel owl-carousel-2 owl-theme">
                    <?php
                    if (isset($pics)) {
                        foreach ($pics as $pic) {
                    ?>
                    <div class="item">
                        <img src="<?= $pic['pic']; ?>" class="profile-img">
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div> -->
                <!-- Hall of fame -->
                <!-- Base on total_donation_steps -->
                <!-- Fetch hall of fame -->
                <?php
                require "config.php";
                $stmt = $link->prepare("SELECT total_donation_steps,id,firstname,lastname,pic FROM user ORDER BY total_donation_steps DESC");
                $stmt->execute();
                $result = $stmt->get_result();
                // $rows = $result->fetch_array(MYSQLI_ASSOC);
                // var_dump($rows);
                $total_users = $result->num_rows;
                ?>
                <!-- USERS LIST -->
                <div class="container">
                    <div class="row">
                        <h3>Hall of fame</h3>
                    </div>
                    <div class="row">

                        <?php
                        $i = 0;
                        while ($rows = $result->fetch_assoc()) { //iterate over each row
                            $i = $i + 1; // count no of user printed
                        ?>
                            <div class="col-3">
                                <img class='img-responsive' style='border-radius:50%;' height=50px; src="<?= $rows['pic'] ?>">
                            </div>
                        <?php

                            if ($i > 7) {
                                break; // only top 10 user print then loop break;
                            }
                        }
                        ?>
                    </div>
                </div> <!-- Hall of fame -->
                <!--About-->
                <div class="row mt-3 mb-0">
                    <h4>About <?= $row_ngos['partner'] ?></h4>
                    <p class="mb-2"><?= $row_ngos['about']; ?></p>
                </div>
                <!--About-->
                <!-- <span class="p-3 bg-white d-flex fixed-bottom">
                    <a href="workout"
                        class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl w-100">OUTDOOR
                        WORKOUT <i class="fa fa-walking"></i></a>
                </span> -->
            </div>
            <?php
            require_once 'js-links.php';
            ?>