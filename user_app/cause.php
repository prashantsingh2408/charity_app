<?php
require_once 'header.php';
require_once 'config.php';


$231475555r543643r23e2q at_id = $_GET['token'];
$stmt = $link->prepare("SELECT * FROM ngos WHERE id=?");
$stmt->bind_param('i', $t_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array(MYSQLI_ASSOC);


$_SESSION['ngo_id'] = $t_id;
$stmt_p = $link->prepare("SELECT * FROM user WHERE id IN (select distinct user_id from ngo_count where ngo_id=?)");
$stmt_p->bind_param('i', $t_id);
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
$stmt->bind_param('i', $t_id);
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
        <div class="card rounded-m shadow-l">
            <div class="container container-fluid px-4 py-2">
                <div class="row mb-0">
                    <div class="w-25 text-left">
                        <h1 class=""><i class="fa fa-laptop fa-2x"></i></h1>
                    </div>
                    <div class="w-75">
                        <h3 class="mb-0">10000 Children</h3>
                        <p class="mb-0" style="font-size:10px">to be taught with advanced digital teaching</p>
                    </div>
                </div>
            </div>
        </div>
        <p style="font-size:16px">Raised Rs <?= $rows_u['amount_raised']; ?> in <?= $rows_u['no_of_days']; ?> days</p>
        <div class="progress my-progress-2">
            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
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
                    <h3 class="mb-0">Rs<?= $rows_u['raised']; ?></h3>
                    <p class="mb-0" style="font-size:10px">Raised</p>
                </div>
                <div class="w-25 text-center">
                    <h3 class="mb-0">0<?= $rows_u['workouts']; ?></h3>
                    <p class="mb-0" style="font-size:10px">Workouts</p>
                </div>
                <div class="w-25 text-center">


                    <h3 class="mb-0"><?= ($todays_steps * $step_in_m) / 1000; ?>km</h3>
                    <p class="mb-0" style="font-5gt size:10px">Distance</p>
                </div>
                <div class="w-25 text-center">
                    <?php
                    $array = explode('.', $rows_u['time_spent']);
                    $h = $array[0];
                    $m = $array[0];
                    ?>
                    <h3 class="mb-0"><?= $h ?> hr <?= $m ?> min</h3>
                    <p class="mb-0" style="font-size:10px">Time Spent</p>
                </div>
            </div>
            <div class="row mt-3 mb-0">
                <h4>Hall Of Fame</h4>
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
                </div>
            </div>
            <div class="row mt-3 mb-0">
                <h4>About <?= $rows_u['partner'] ?></h4>
                <p class="mb-2"><?= $rows_u['about']; ?></p>
            </div>
        </div>
    </div>
    <span class="p-3 bg-white d-flex fixed-bottom">
        <a href="workout" class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl w-100">OUTDOOR
            WORKOUT <i class="fa fa-walking"></i></a>
    </span>
</div>
<?php
require_once 'js-links.php';
?>