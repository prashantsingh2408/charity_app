<?php
$league = $_POST['state'];
$raised = $_POST['raised'];

require "config.php";
require "general_fun().php";

$id_new = create_id('league');

// Save in db
$sql = "UPDATE league set league='$league', raised='$raised' WHERE id='$id_new'";
echo $sql;
echo $sql;
$result =$conn->query($sql);

// Redirect to league page
// header("location:league.php");

?>