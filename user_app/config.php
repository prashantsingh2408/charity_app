<?php
// Credentials
$hostname = "localhost";
$username = "root";     
$password = "";
$database = "fitness_app";


//Establish Connection
$link = mysqli_connect($hostname, $username, $password, $database);


// UserInput Test
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>