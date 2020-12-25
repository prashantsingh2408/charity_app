<?php
// Credentials

$servername = "sql12.freemysqlhosting.net";
$username = "sql12383810";
$password = "77PaVC32az";
$db = "sql12383810";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sql12382803"; 

// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "fitness_app";


//Establish Connection
$conn = new mysqli($servername, $username, $password, $db);
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