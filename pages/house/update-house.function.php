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
    $id = $_POST['id'];

    $query = "UPDATE house SET address = '$address',area = '$area',
    status='$status',type = '$type',amount='$amount',
    description='$description', bedroom='$bed', bathroom='$bath'
    WHERE id ='$id'";
    if($house->updateHouse($query)){
        echo true;
    }else{
        echo false;
    }
?>