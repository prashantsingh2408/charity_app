<?php
require_once 'header.php';
//require_once 'header2.php';
require_once 'session.php';
$user_id = $_SESSION['loggin_data'];
?>
<div class="header header-fixed header-logo-center">
    <a href="index" class="header-title">Profile</a>
    <a href="profile-edit" class="header-icon header-icon-4"><i class="fas fa-pencil-alt fa-lg"></i></a>
    <!-- model -->
    <h2>Modal Example</h2>

    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Open Modal</button>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Some text in the Modal..</p>
        </div>

    </div>

    <!-- /model -->

    <a href="#" class="header-icon header-icon-3"><i class="fas fa-share-alt fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
    <div class="container container-fluid">
        <div class="row mb-0">
            <div class="row container-fluid">
                <div class='col-4 m-0 p-0 pl-2 pr-3 container-fluid'>
                    <div id="imgArea"><img style='border-radius: 50%' ; src="<?= $pic; ?>" width='100%' height='100%'>
                    </div>
                </div>
                <div class="col-6 m-0 p-0 container-fluid">
                    <?php $fullname = $firstname . ' ' . $lastname; ?>
                    <h3><?= $fullname ?> </h3>
                    <h4><?= $title; ?></h4>
                    <p><?= $bio; ?></p>
                </div>
            </div>
        </div>
        <div class="container container-fluid p-4">
            <div class="row mb-0">
                <div class="w-50 text-left">
                    <h1 class="mb-0 text-muted" style="font-size:32px">Rs
                        <?= (($todays_steps * $step_in_m) / 1000) * $rate_per_km; ?></h1>
                </div>
                <div class="w-25 text-center">
                    <h1 class="mb-0 text-muted"><?= $workouts; ?></h1>
                    <p class="mb-0 text-muted" style="font-size:10px">Workouts</p>
                </div>
                <div class="w-25 text-center">
                    <h1 class="mb-0 text-muted"><?= $todays_steps  ?> km </h1>
                    <p class="mb-0 text-muted" style="font-size:10px">Distance</p>
                </div>
            </div>
        </div>
        <div class="divider divider-margins mb-0"></div>
        <div class="container container-fluid p-4" onclick="location.href=' streak'">
            <div class="row mb-0">
                <div class="text-left" style="width:60%">
                    <div class="row mb-0">
                        <div class="w-25">
                            <img src="images/boot.jpg" style="height:10vh">
                        </div>
                        <div class="w-75">
                            <h1 class="mb-0 text-muted"><?= $current_streak  ?></h1>
                            <p class="mb-0 text-muted" style="font-size:10px">Current Streak</p>

                        </div>
                    </div>
                </div>
                <div class="text-left" style="width:40%">
                    <div class="row mb-0">
                        <div class="w-25">
                            <img src="images/boot.jpg" style="height:10vh">
                        </div>
                        <div class="w-75 pl-3">
                            <h1 class="mb-0 text-muted"><?= $max_streak ?></h1>
                            <p class="mb-0 text-muted" style="font-size:10px">Max Streak</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider divider-margins mb-2"></div>
        <div class="container container-fluid">
            <h1>Achievements</h1>
            <div class="row">
                <?php
                if (isset($achievements)) {

                    foreach ($achievements as $a) {
                        if ($total_donation_steps > $a['steps']) {
                ?>
                            <figure>
                                <img src="<?= $a['img'] ?>" style="height:10vh">
                                <figcaption>
                                    <p style="font-size:10px"> <?= $a['name']; ?> </p>
                                </figcaption>
                            </figure>
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>

        <div class="divider divider-margins mb-1"></div>
        <div class="container-fluid">
            <div class="list-group list-custom-small">
                <!--LeaderBoard-->
                <?php
                require 'config.php';
                $stmt = $link->prepare("SELECT * FROM user ORDER BY total_donation_steps");
                $stmt->execute();
                $result = $stmt->get_result();
                $rank = 0;
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    $rank = $rank + 1;
                    if ($row['id'] == $user_id) {
                        break;
                    }
                };
                ?>
                <a href="leaderboard">
                    <span>GLOBAL RANK (#<?= $rank ?>)</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <!--leaderboard-->
            </div>
        </div>
        <div class="container container-fluid p-4">
            <div class="row mb-0">
                <div class="w-50 text-left">
                    <h1 class="mb-0 mt-2" style="font-size:32px">My Stats</h1>
                </div>
                <div class="w-50 text-center">
                    <div class="tab-controls tabs-round tab-animated tabs-medium tabs-rounded shadow-xl" data-tab-items="4" data-tab-active="bg-highlight activated color-white">
                        <a href="#" data-tab-active="" data-tab="tab-1" class="bg-highlight activated color-white" style="width: 33%;">DAY</a>
                        <a href="#" data-tab="tab-2" style="width: 33%;">WEEK</a>
                        <a href="#" data-tab="tab-3" style="width: 33%;">MONTH</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container-fluid p-4">
            <div class="row mb-0">
                <div class="w-50 text-left">
                    <h1 class="mb-0 text-info" style="font-size:32px">Rs
                        <?= (($todays_steps * $step_in_m) / 1000) * $rate_per_km; ?>
                </div>
                <div class="w-25 text-center">
                    <h1 class="mb-0 text-muted"><?= $workouts; ?></h1>
                    <p class="mb-0 text-muted" style="font-size:10px">Workouts</p>
                </div>
                <div class="w-25 text-center">
                    <h1 class="mb-0 text-muted"><?= $todays_steps  ?> km </h1>
                    <p class="mb-0 text-muted" style="font-size:10px">Distance</p>
                </div>
            </div>
        </div>
        <div class="tab-content" id="tab-1" style="display: block;">
            <div class="chart-container" style="width:100%; height:350px;">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <canvas class="chart chartjs-render-monitor" id="vertical-chart" style="display: block; height: 350px; width: 314px;" width="628" height="700"></canvas>
            </div>
        </div>
        <div class="tab-content" id="tab-2">
        </div>
        <div class="tab-content" id="tab-3">
        </div>
    </div>
    <div class="container container-fluid">
        <h1>Charity Overview</h1>

        <div class="row m-1">
            <?php
            $index = 0;
            if (isset($charity_overview)) {

                foreach ($charity_overview as $data) {
                    if (isset($sum)) {
            ?>
                        <div class="w-50">
                            <figure>
                                <img src="<?= $data['img']; ?>" style="height:16vh;">
                                <figcaption><?= $data['name']; ?></figcaption>
                                <figcaption>Rs <?= $sum[$index]['donate'] ?></figcaption>
                            </figure>
                        </div>
            <?php
                        $index = $index + 1;
                    }
                }
            }
            ?>
            <?php
            if (isset($sum)) {

                foreach ($sum as $data) {
            ?>
                    <?= $data['donate'];   ?></p>
            <?php

                }
            }
            ?>
        </div>
    </div>
</div>
<?php

require_once 'footer.php';
require_once 'js-links.php';
?>