<?php
    include_once("house.class.php");
    $house = new House();
    $id = $_POST['id'];

    $query = "DELETE FROM house WHERE id ='$id'";
    if($house->deleteHouse($query)){
        echo true;
    }else{
        echo false;
    }
?>