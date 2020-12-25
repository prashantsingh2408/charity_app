<?php
// Credentials
//$hostname = "localhost";
//$username = "root";     
//$password = "";
//$database = "fitness_app";

$servername = "sql12.freemysqlhosting.net";
$username = "sql12383810";
$password = "77PaVC32az";
$db = "sql12383810";


//Establish Connection
$link = mysqli_connect($servername, $username, $password, $db);
//$conn = new mysqli($servername, $username, $password, $db);

// UserInput Test
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}