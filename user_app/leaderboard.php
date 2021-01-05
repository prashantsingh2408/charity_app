<?php
require_once 'header.php';
?>
<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">Leaderboard</a>
    <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
    <!-- <a href="#" class="header-icon header-icon-4"><i class="fa fa-sikgn-out-alt fa-lg"></i></a> -->
</div>
<div class="page-content header-clear-medium">
    <!--    <div class="container container-fluid">
        <div class="row mb-0">
            <div class="w-100 text-center">
                <h1 class="color-highlight mb-0" style="font-size:34px">Rs 9001</h1>
                <p class="mb-0" style="font-size:10px">Total Raised This Month</p>
            </div> -->
    <!-- <div class="w-50 text-left pl-2">
         <h1 class="mb-0">365</h1>
         <p class="mb-0" style="font-size:10px">Workouts</p>
      </div> -->
    <!-- <div class="w-50 text-right pr-2">
                <h1 class="mb-0">74</h1>
                <p class="mb-0" style="font-size:10px">Members</p>
            </div>
        </div>
    </div> -->

    <!-- days selecter -->
    <!-- <form>
        <div class="form-group justify-content-center">
            <label for="exampleFormControlSelect1">Select days</label>
            <select class="form-control " id="exampleFormControlSelect1">
                <option>
                <option>30 days</option>
                <option>All days</option>
            </select>
        </div>
    </form> -->
    <!-- /days selecter -->

    <div class="content card-style">


        <?php
      require 'config.php';
      $stmt = $link->prepare("SELECT * FROM user ORDER BY total_donation_steps");

      // $stmt_a->bind_param('i', $admin_id);
      $stmt->execute();
      $result = $stmt->get_result();
      $index = 0;
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
         $pic_src = '../admin_pannel/' . $row['pic'];
         $index = $index + 1;
      ?>
        <!-- row -->
        <div class='row'>


            <!-- index -->
            <div class='col'>
                <?= $index ?>
                <!-- /index -->
            </div>
            <!-- pic -->
            <div class="col">
                <img src="<?= $pic_src ?>" alt='<?= $pic_src ?>' class="profile-img">
            </div>
            <!-- /pic -->

            <!-- name -->
            <div class="col">
                <?= $row['firstname'] . $row['lastname'] ?>
            </div>
            <!-- /name -->

            <!-- donation -->
            <div class="col">
                <?php
               $total_donation_m = $row['total_donation_steps'] * $step_in_m;
               $total_donation_km = $total_donation_m / 1000;
               $total_donation_rs = $rate_per_km * $total_donation_km;
               ?>
                <span class="float-right"><?= $total_donation_rs ?></span>
            </div>
            <!-- /donation -->
        </div>
        <!-- /row -->

        <?php
      }
      ?>
    </div>
</div>
<?php
require_once 'footer.php';
require_once 'js-links.php';
?>