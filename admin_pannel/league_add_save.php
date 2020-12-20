<?php
$league = $_POST['league'];
$raised = $_POST['raised'];

require "config.php";

// create new id
$sql = 'SELECT COUNT(id) FROM league';
echo $sql;
$result  = $conn->query($sql);
$rows = $result->fetch_assoc();
$current_id = $rows['COUNT(id)'];
$new_id = $current_id + 1;
// END create new id
echo $new_id;

// Save in db
$sql = "INSERT INTO league(id,league,raised) VALUE($new_id,'$league','$raised')";
echo $sql;
$result =$conn->query($sql);

// Redirect to league page
header("location:league.php");

?>