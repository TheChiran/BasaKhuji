<?php
    include_once("house.class.php");
    $house = new House();
    $target_dir = "../../uploads/";
    $extension = strtolower(pathinfo($_FILES["house_image"]["name"],PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['house_image']['tmp_name']);
    $filename = uniqid() . "-" . time();
    $newfilename = $filename . "." . $extension;
    $target_file = $target_dir . $newfilename ;
    $house_id = $_POST['house_id'];
    if($check !==false){
      if($extension != "jpg" && $extension != "png" && $extension != "jpeg"
        && $extension != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      }else{
        if (move_uploaded_file($_FILES["house_image"]["tmp_name"], $target_file)) {
          $query = "INSERT INTO houseimage(image,houseId) VALUES('$newfilename','$house_id')";
          if($house->addHouseImage($query)){
            echo true;
          }else{
            echo false;
          }
      } else {
          echo 'Internal server error or your file is too large then 2mb!';
      }
      }
      
    }else{
      echo 'Only image is allowed!';
    }
    
    
    
?>