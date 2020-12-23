  <!-- Main Sidebar Container -->
  <?php
    require 'config.php';
    $sql = "SELECT logo_impact,logo_webixun FROM admin";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();
    ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="change_logo.php" class="brand-link">
          <img src="<?= $rows['logo_impact'] ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Impact</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="<?= $rows['logo_webixun'] ?>" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <?php
                    require "config.php";
                    $_SESSION['id'] = 1;
                    $id = $_SESSION['id']; //SESSION 
                    $sql = "SELECT name FROM admin WHERE id = 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $name = $row['name'];
                    }
                    echo "<a href='change_logo.php' class='d-block'>" . $name . "</a>"
                    ?>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a id='dashboard' href="./dashboard.php" class="nav-link">
                          <i class="nav-icon  fas fa-tachometer-alt"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <!-- Admin -->
                  <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-users-cog"></i>
                          <p>
                              Admin Control
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./user.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-user"></i>
                                  <p>Users</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">

                          <li class="nav-item">
                              <a href="./NGO.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-university"></i>
                                  <p>NGO & Events</p>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./addGoals.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-bullseye"></i>
                                  <p>Add Goals</p>
                              </a>
                          </li>
                          <!-- <li class="nav-item">
                              <a href="./addGoals2.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-trophy"></i>
                                  <p>test</p>
                              </a>
                          </li> -->
                          <li class="nav-item">
                              <a href="./achievement.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-trophy"></i>
                                  <p>Achievement</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./stepRate.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-shoe-prints"></i>
                                  <p>Step Rate</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./team.php" class="nav-link">
                                  &nbsp
                                  <i class="nav-icon fas fa-users"></i>
                                  <p>Team</p>
                              </a>
                          </li>

                          <li class="nav-item">
                              <a href="./league.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-skating nav-icon"></i>
                                  <p>League</p>
                              </a>
                          </li>

                          <!-- <li class="nav-item">
                              <a href="./custom_notification.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-flag-checkered nav-icon"></i>
                                  <p>Custom Notification</p>
                              </a>
                          </li> -->

                          <!-- <li class="nav-item">
                              <a href="./feed.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-rss-square nav-icon"></i>
                                  <p>Feed</p>
                              </a>
                          </li> -->
                      </ul>
                  </li>
                  <!-- /Admin -->

                  <!-- Site Edit -->
                  <li class="nav-item has-treeview menu-open">
                      <a href="#" class="nav-link ">
                          <i class="nav-icon fas fa-edit"></i>
                          <p>
                              Site Edit
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="./preloader.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-spinner nav-icon"></i>
                                  <p>Preloader</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./advertisements.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-ad nav-icon"></i>
                                  <p>Advertisements</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="./change_logo.php" class="nav-link">
                                  &nbsp
                                  <i class="fas fa-images nav-icon"></i>
                                  <p>Change Logo Admin</p>
                              </a>
                          </li>

                          <!-- <li class="nav-item">
                              <a href="./help_center.php" class="nav-link">
                                  <p>Help center content</p>
                              </a>
                          </li> -->

                          <!-- For proving some space after...
                               because it may hide in browser footer
                          -->
                          <li class="nav-item">
                              <a class="nav-link">
                                  <p></p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link">
                                  <p></p>
                              </a>
                          </li>
                          <!-- /For proving some space after...
                               because it may hide in browser footer
                          -->
                      </ul>
                  </li>
                  <!-- /Site Edit -->
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>