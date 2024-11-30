<?php
// Render upload form
if (!isset($_POST['submit'])) {
  require 'form.html.php';
} else {
  //set upload parameters
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $result = "";

  // Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if ($check !== false) {
    $result = "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

  // Check if file already exists
  if (file_exists($target_file)) {
    $result =  "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size (in bytes)
  if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    $result =  "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if (
    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
  ) {
    $result =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    $result =  "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $result =  "The image file has been uploaded succeed !";
    } else {
      $result =  "Sorry, there was an error uploading your file.";
    }
  }
  require 'result.html.php';
}
?>
