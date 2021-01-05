<?php
require_once 'header.php';
require 'config.php';
?>
<div class="header header-fixed header-logo-center">
    <a href="#" class="header-title">Create Team</a>
    <a href="javascript:history.back()" class="header-icon header-icon-1"><i class="fa fa-arrow-left fa-lg"></i></a>
</div>
<form id="createteamform" action="teams-view.php" method='POST' enctype="multipart/form-data">
    <div class=" page-content header-clear-small">
        <div class="content">
            <h1 class="text-center mb-5">Enter Team Details</h1>
            <span class="color-highlight input-style-1-inactive">Team Name</span>
            <input class="form-control" type="text" placeholder="Team Name" name="name" id="name" required>
            <span class="color-highlight input-style-1-inactive">State Name</span>
            <input class="form-control" type="text" placeholder="State Name" name="state" id="state" required>
            <span class="color-highlight input-style-1-inactive">Team Leader</span>
            <input class="form-control" type="text" placeholder="Team Leader" name="team_leader" id="team_leader"
                value="">
            <span class="color-highlight input-style-1-inactive">Team Member </span>
            <input class="form-control" type="text" placeholder="Team Member" name="team_members" id="team_members"
                value="">
            <span class="color-highlight input-style-1-inactive">Team Pic</span>
            <input class="form-control" type="file" placeholder="Team Pic" name="pic" id="pic" value="">
        </div>
        <div class="form-group">
            <input type="submit"
                class="btn btn-m btn-center-l bg-highlight text-uppercase font-900 text-uppercase rounded-s shadow-xl mt-4"
                value="CREATE TEAM ">
        </div>
    </div>
</form>
<?php
require_once 'footer.php';
require_once 'js-links.php';
?>