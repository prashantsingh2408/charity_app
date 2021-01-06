<?php
// Credentials

$hostname = "localhost";
$username = "root";
$password = "";
$db = "charity";


//Establish Connection
$link = mysqli_connect($hostname, $username, $password, $db);
//$conn = new mysqli($servername, $username, $password, $db);
//$link = mysqli_connect($hostname, $username, $password, $database);


// UserInput Test
//if ($link === false) {
//die("ERROR: Could not connect. " . mysqli_connect_error());
//}
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";