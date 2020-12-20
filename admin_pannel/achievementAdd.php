<?php

//insert.php

// $connect = new PDO("mysql:host=localhost;dbname=fitness_app", "root", "");
require 'config.php';

$steps = $_POST['steps'];
$name = $_POST['name'];
// $img = $_POST['img'];
// echo $steps;
$sql = "INSERT INTO achievements (steps, name) VALUES ($steps,'$name')";
$result = $conn->query($sql);



//// Input file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['img']['name']);
$uploadOk = 1;
echo $target_file;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//Check if image file is a actual image or
//fake image
if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES['img']['tmp_name']);
    //Check for img or not
    if ($check != false) {
        echo "File is image -" . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not as image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES['img']['size'] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOK = 0;
}

// Allow certain file formats
if (
    $imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
    && $imageFileType != 'gif'
) {
    echo "Sorry, only JPG, JPEG, PNG, GIF file are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error message
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES['img']['name'])) . "has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file. ";
    }
}

// save location in db
$sql = "UPDATE achievements SET img = '$target_file' WHERE name = '$name'";
// echo $sql;
$conn->query($sql);

////END Input file
// $data = array(
//     'steps'  => $steps,
//     'name'  => $name,
// );

// echo $data;
header("location:achievement.php");
