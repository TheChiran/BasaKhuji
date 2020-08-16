<?php
    include_once("house.class.php");
    $houseObj = new House();
    $id = $_POST['id'];

    $query = "SELECT * FROM house WHERE id ='$id'";
    if($result = $houseObj->getHouse($query)){
        if(empty($result)){
            echo 'There is no data';
        }else{
            $resultObj = json_encode($result);
            echo $resultObj;
        }
    }else{
        echo false;
    }
?>
