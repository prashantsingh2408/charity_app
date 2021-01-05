<?php
require_once 'header.php';

?>
<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">League</a>
    <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-small">
    <img src="images/running-3.jpg" class="card-img">
    <div class="content">
        <h1>November Walkathon</h1>
        <p class="text-muted mb-0">Powered By Fitness</p>
        <h6 class="my-3 text-center">Select Your Team</h6>
        <div class="" onclick="location.href='league-list'">
            <div class="content">
                <?php
                //test
                $is_league = 'Y';
                $stmt = $link->prepare("SELECT * FROM teams WHERE is_league=?");
                $stmt->bind_param('s', $is_league);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $name = $row['name'];
                //var_dump($row);

                //var_dump($result->fetch_array(MYSQLI_ASSOC));
                while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    // COUNT no  of state
                    $team_name = $row['name'];
                    $stmt = $link->prepare("SELECT COUNT(DISTINCT state) FROM user WHERE team=?");
                    $stmt->bind_param('s', $team_name);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    $state_count = $row['COUNT(DISTINCT state)'];
                ?>

                <!-- row -->
                <div class='row card-style'>
                    <!-- team name -->
                    <div class="col-9">
                        <?= $name ?>
                    </div>
                    <!-- /team name -->

                    <!-- states no -->
                    <div class="col-3 justify-content-right">
                        <i class="fas fa-users"></i>
                        <?= $state_count ?>
                    </div>
                    <!-- /states no -->
                </div>
                <!-- /row -->
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    require_once 'footer.php';
    require_once 'js-links.php';
    ?>