<?php
    include_once("house.class.php");
    $house = new House();
    $id = $_POST['id'];

    $query = "SELECT * FROM house WHERE id ='$id'";
    if($result = $house->getHouse($query)){
        if(empty($result)){
            echo false;
        }else{
            echo json_encode($result);
        }
    }else{
        echo false;
    }
?>