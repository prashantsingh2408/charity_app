<?php
require 'config.php';
$id = $_POST['id'];
$sql = "DELETE FROM advertisements WHERE id=$id";
$result= $conn->query($sql);

?>