<!-- Edit/Update ngo database  -->
<?php
require 'config.php';
$name_ngos = $_POST['name_ngos'];
$partner = $_POST['partner'];
$current_amount = $_POST['current_amount'];
$total_goal = $_POST['total_goal'];
$no_of_workout = $_POST['no_of_workout'];
$description = $_POST['description'];
$about = $_POST['about'];
$id = $_POST['id'];
$change_makers = $_POST['change_makers'];


$sql = "UPDATE ngos SET name_ngos = '$name_ngos', 
          partner='$partner', 
          current_amount=$current_amount,
          total_goal=$total_goal,
          no_of_workout = $no_of_workout,
          description = '$description',
          about = '$about',
          change_makers='$change_makers'  WHERE id = $id";

echo $sql;
// echo $sql;
$conn -> query($sql);



//// Input file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['pic']['name']);
$uploadOk = 1;
echo $target_file;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (isset($_FILES['pic']['tmp_name'])) {
    //Check if image file is a actual image or
    //fake image
    if (isset($_POST['submit'])) {
        $check = getimagesize($_FILES['pic']['tmp_name']);
        //Check for img or not
        if ($check != false) {
            echo "File is image -" . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not as image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists Replace it
    // if (file_exists($target_file)) {
//    echo "Sorry, file already exists.";
//    $uploadOk = 0;
    // }

    // Check file size
    if ($_FILES['pic']['size'] > 500000) {
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
        if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES['pic']['name'])) . "has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file. ";
        }
    }

    // save location in db
    $sql = "UPDATE ngos SET img = '$target_file' WHERE id = $id";
    echo $sql;
    $conn->query($sql);


    ////END Input file
}

// header("location:NGO.php");