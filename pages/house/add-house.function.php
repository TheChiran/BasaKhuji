<?php
    include_once("house.class.php");
    $house = new House();
    $address = $_POST['address'];
    $area = $_POST['area'];
    $bath = $_POST['bath'];
    $bed = $_POST['bed'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $status = "Available";
    $userId = $_POST['userId'];
    $query = "INSERT INTO house(address,area,amount,bedroom,bathroom,type,description,status,userId) 
    VALUES ('$address','$area','$amount','$bed','$bath','$type','$description','$status','$userId')";
    if($house->addHouse($query)){
        echo true;
    }else{
        echo false;
    }
?>