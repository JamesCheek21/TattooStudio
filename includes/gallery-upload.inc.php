<?php

if(isset($_POST['submit'])){

  $artist = $_POST['artist'];

  $total = count($_FILES['file']['name']);

  for ($i=0; $i < $total ; $i++) {
    $fileName = $_FILES['file']['name'][$i];
    $fileType = $_FILES['file']['type'][$i];
    $fileTempName = $_FILES['file']['tmp_name'][$i];
    $fileError = $_FILES['file']['error'][$i];
    $fileSize = $_FILES['file']['size'][$i];

    $fileExt = explode(".", $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "jpeg", "png", "heic");

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0 ) {
        if ($fileSize < 2000000) {
          $fileDestination = "../assets/" . $fileName;

          include_once "dbconnect.php";
          $sql = "SELECT * FROM pictures;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed";
          } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            $sql = "INSERT INTO pictures (filename, artistID) VALUES (?, ?);";
            if (!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL statement failed";
            } else {
              mysqli_stmt_bind_param($stmt, "ss", $fileName, $artist);
              mysqli_stmt_execute($stmt);

              move_uploaded_file($fileTempName, $fileDestination);
            }
          }
        } else {
          echo "file too big";
          exit();
        }
      } else {
        echo "you had an error";
        exit();
      }
    } else{
      echo "you need to upload to a proper file type";
      exit();
    }
  }
  header("Location: ../index.php?uploadsuccess");
}
