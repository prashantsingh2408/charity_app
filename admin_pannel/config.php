<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12382803";
$password = "AIgKGzqz36";
$db = "sql12382803";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sql12382803";


// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sql12382803";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "fitness_app";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>