<?php
    $house_image = $_FILES['house_image'];
    $target_dir = "../../uploads/";
    $target_file = $target_dir . basename($_FILES["house_image"]["name"]);
    if (move_uploaded_file($_FILES["house_image"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
?>