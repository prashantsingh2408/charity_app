<?php
require_once 'header.php';


?>
<div class="header header-fixed header-logo-center"
    style='background-color:#FFCE54;border-bottom: 0 !important;box-shadow: 0 0 0 0 rgba(0,0,0,1);">'>
    <a href="#" class="header-title text-white">Feed</a>
    <a href="index1.php" class="header-icon header-icon-1 text-white"><i class="fa fa-arrow-left fa-lg"></i></a>
    <a href="passive-info" class="header-icon header-icon-3 text-white"><i class="fa fa-info-circle fa-lg"></i></a>
    <a href="edit-goal" class="header-icon header-icon-4 text-white"><i class="fa fa-pencil-alt fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
    <div class="container-fluid bg-yellow1-light pt-5">
        <div class="d-flex parent">
            <div id="circle">

            </div>
        </div>
        <p class="text-center text-white d-block">Only <snap style='color:black'>
                <?= (($target - $todays_steps) * $step_in_m) / 1000; ?></snap> km to
            maintain streak.
            </br>
            Active goals <snap style='color:black'><?= $goal_name ?></snap>
        </p>

    </div>




    <div class="content">
        <div class="container-fluid">
            <div class="row mb-4 ">
                <div class="col-4">
                    <div class="rounded-s shadow-l text-center p-2">
                        <i class="fa fa-map-marker-alt fa-lg"></i>
                        <h1><?= ($todays_steps * $step_in_m) / 1000; ?></h1>
                        <p>Distance (Km)</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="rounded-s shadow-l text-center p-2">
                        <i class="fa fa-shoe-prints fa-lg"
                            style="-webkit-transform: rotate(-90deg);-moz-transform: rotate(-90deg);-ms-transform: rotate(-90deg);-o-transform: rotate(-90deg);transform: rotate(-90deg);"></i>
                        <h1><?= $todays_steps ?></h1>
                        <p>Steps Taken</p>
                    </div>
                </div>
                <div class=" col-4">
                    <div class="rounded-s shadow-l text-center p-2">
                        <i class="fa fa-walking fa-lg"></i>
                        <h1><?= $max_streak ?></h1>
                        <p>Longest Streak</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid rounded-s shadow-l p-2 mb-3">
                <div class="row mb-0">
                    <div class="col-2">
                        <i class="fa fa-walking fa-3x color-highlight"></i>
                    </div>
                    <div class="col-10">
                        <h4 class="color-highlight mb-0">Active</h4>
                        <p>0 Km <span class="float-right"><?= $step_active ?> Steps</span></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid  rounded-s shadow-l p-2 mb-3">
                <div class="row mb-0">
                    <div class="col-2">
                        <i class="fa fa-walking fa-3x color-yellow1-light"></i>
                    </div>
                    <div class="col-10">
                        <h4 class="color-yellow1-light mb-0">Passive</h4>
                        <p>0 Km <span class="float-right"><?= $step_passive ?> Steps</span></p>
                    </div>
                </div>
            </div>
            <div class="container-fluid rounded-s shadow-l p-2 mb-0">
                <div class="row mb-0">
                    <div class="col-3">
                        <h1><?= $current ?></h1>
                    </div>
                    <div class="col-9 pl-0">
                        <!-- user donate -->
                        <?php if (($current) > 500) {
                        ?>
                        <p class="mt-1">Steps available <span class="ml-1 float-right">
                                <a href="donate_ngo.php"
                                    class="btn btn-s btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl d-inline">Donate
                                    Steps</a></span></p>
                        <?php
                        }
                        // if user have not enough step to donate (diable button)
                        else {
                        ?>
                        <p class="mt-1">Not enough steps to donate <span class="ml-1 float-right">

                                <button href="donate_ngo.php"
                                    class="btn btn-s btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl d-inline"
                                    disabled>Donate
                                    Steps</button></span></p>

                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once 'js-links.php';
require_once 'footer.php';
?>