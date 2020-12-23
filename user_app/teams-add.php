<?php
require_once 'header.php';
?>
<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">Teams</a>
    <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<div class="page-content header-clear-medium">
    <div class="content text-center">
        <img src="images/teams.jpg" class="card-img">
        <h1>LETS WORK TOGETHER</h1>
        <p class="mb-0">Why walk alone when you can walk together?</p>
        <!-- <a href="teams-join"
            class="btn btn-m btn-center-l bg-white text-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4"> -->
        <form id='form' action='teams-view.php' method='post'>
            <input type='submit' name='ushi_per_rho' value='JOIN & VIEW'
                class="btn btn-m btn-center-l bg-white text-dark text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4">

            </input>
        </form>
        <!-- </form>
        </a> -->
        <a href="teams-create"
            class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4">
            CREATE TEAM <i class="fa fa-lock"></i>
        </a>
    </div>
</div>
<?php
require_once 'footer.php';
require_once 'js-links.php';
?>