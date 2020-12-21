<?php
$name = $_POST['name'];
echo $name;
require "config.php";
$sql = "DELETE FROM goals WHERE goal_name = '$name'";
$conn->query($sql);

