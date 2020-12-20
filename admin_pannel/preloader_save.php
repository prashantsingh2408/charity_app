<?php
require 'config.php';


//// Input file
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['preloader']['name']);
$uploadOk = 1;
echo $target_file;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//Check if image file is a actual image or
//fake image
if(isset($_POST['submit'])){
$check=getimagesize($_FILES['preloader']['tmp_name']);
//Check for img or not
if($check != false){
echo "File is image -" . $check["mime"].".";
$uploadOk= 1;
}else{
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
if ($_FILES['preloader']['size'] > 500000) {
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
if (move_uploaded_file($_FILES['preloader']['tmp_name'], $target_file)) {
echo "The file " . htmlspecialchars(basename($_FILES['preloader']['name'])) . "has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file. ";
}
}

// save location in db
$sql = "UPDATE admin SET preloader = '$target_file'";
$conn->query($sql);

////END Input file