<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12383810";
$password = "77PaVC32az";
$db = "sql12383810";

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