<?php
    include_once("house.class.php");
    $houseObj = new House();
    $type = $_POST['type'];
    $area = $_POST['area'];
    $max = $_POST['max'];
    $min = $_POST['min'];
    $room = $_POST['room'];
    $query = "SELECT * FROM house 
    WHERE area='$area' 
    OR 
    amount BETWEEN '$min' AND '$max' 
    OR
    type ='$type'
    OR
    bedroom = '$room'";
    if($result = $houseObj->getHouse($query)){
        if(empty($result)){
            echo false;
        }else{
            foreach($result as $house){
                $houseId = $house['id'];
                $query = "SELECT image FROM houseimage WHERE houseId = '$houseId' LIMIT 1";
                if($imageResult = $houseObj->getHouse($query)){
                    if(!empty($imageResult)){
                        foreach($imageResult as $image){
                            echo '<div class="col-md-5 card home-section mt-5">';
                            echo '<div class="home-image mt-3">';
                            echo '<a href="">
                                    <img src="../../uploads/'.$image['image'].'" alt="">
                                </a>';
                            echo '</div>';
                            echo '<div class="home-contents mt-5">';
                            echo '<div class="container">';
                            echo '<div class="row">';
                            echo '<div class="col-md-6 home-person">';
                            echo '<span class="card-icon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                            <h5>Tonmoy Chiran</h5>';
                            echo '</div>';
                            echo '<div class="col-md-6 home-person">
                                    <span class="card-icon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                    <h5>July 25,2020</h5>
                                </div>';
                            echo '</div>';
                            echo '<div class="row mt-3">';
                            echo '<div class="col-md-6 home-person">
                                    <span class="card-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                    <h5>'.$house['area'].'</h5>
                                </div>';
                            echo '<div class="col-md-6 home-person">
                                    <span class="card-icon"><i class="fa fa-long-arrow-right"
                                    aria-hidden="true"></i></span>
                                    <h5><button  class="btn btn-sm btn-success "onclick="getSingleHouse('.$house['id'].')">See Details</button></h5>
                                </div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-md-1"></div>';
                            
                        }
                    }
                }
            }
        }
    }else{
        echo false;
    }
?>
                            
                                
                                
                            
                            
                    