<?php
require 'config.php';
$id = $_POST['id'];
$sql = "DELETE FROM league WHERE id=$id";
$result= $conn->query($sql);
