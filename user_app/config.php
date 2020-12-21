<?php
// Credentials

$servername = "sql12.freemysqlhosting.net";
$username = "sql12382803";
$password = "AIgKGzqz36";
$db = "sql12382803";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "sql12382803";

// $hostname = "localhost";
// $username = "root";
// $password = "";
// $database = "fitness_app";


//Establish Connection
$link = mysqli_connect($servername, $username, $password, $db);


// UserInput Test
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
