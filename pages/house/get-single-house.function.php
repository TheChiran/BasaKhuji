<?php
    include_once("house.class.php");
    $houseObj = new House();
    $id = $_POST['id'];

    $query = "SELECT * FROM house WHERE id ='$id'";
    if($result = $houseObj->getHouse($query)){
        if(empty($result)){
            echo 'There is no data';
        }else{
            foreach($result as $house){
                echo '<button class="btn btn-sm btn-outline-default" onclick="getHouseList()"><span><i class="fa fa-long-arrow-left"
                aria-hidden="true" style="font-size:25px" ></i></span></button>';
                $houseId = $house['id'];
                $query = "SELECT image FROM houseimage WHERE houseId = '$houseId'";
                if($houseImage = $houseObj->getHouse($query)){
                    $totalImage = count($houseImage);
                    echo '<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">';
                    echo'<ol class="carousel-indicators">';
                    for($i=0;$i<$totalImage;$i++){
                    if($i==0){
                        echo'<li data-target="#carousel-example-1z" data-slide-to="'.$i.'" class="active"></li>';
                    }else{
                        echo'<li data-target="#carousel-example-1z" data-slide-to="'.$i.'"></li>';
                    }
                 }
                    echo'</ol>';
                    echo'<div class="carousel-inner" role="listbox">';
                    $index = 0;
                    foreach($houseImage as $houseImage){
                        if($index==0){
                            echo'<div class="carousel-item active">';
                        }else{
                            echo'<div class="carousel-item">';
                        }
                        echo'<img class="d-block w-100"
                            src="../../uploads/'.$houseImage['image'].'"
                            alt="First slide" style="height: 350px">';
                        echo'</div>';
                        $index++;
                    }
                    echo'</div>';
                    echo'<a class="carousel-control-prev" href="#carousel-example-1z" role="button"
                        data-slide="prev">';
                    echo'<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span></a>';
                    echo'<a class="carousel-control-next" href="#carousel-example-1z" role="button"
                                 data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>';
                    echo'</div>';
                }
                echo '<div class="row mt-5">';
                echo '<div class="col-md-12">';
                echo '<div class="house-contents">';
                echo  '<h5 class="amount">BDT 18,000</h5>';
                        echo '<h5 class="location mt-5">'.$house['address'].'</h5>';
                        echo '<div class="icons mt-5">';
                           echo '<div class="form-row">';
                            echo    '<div class="input-group col-md-2">';
                                  echo '<span style="margin-right: 5px;"><i class="fa fa-bed" aria-hidden="true"></i></span> '.$house['bedroom'].' Bed
                                </div>';
                                echo '<div class="input-group col-md-2">
                                    <span style="margin-right: 5px;"><i class="fa fa-bath" aria-hidden="true"></i></span> '.$house['bathroom'].' Baths
                                </div>';
                                echo '<div class="input-group col-md-2">
                                    <span style="margin-right: 5px;"><i class="fa fa-th-large" aria-hidden="true"></i></span> 750sqft
                                </div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="overview mt-5">';
                            echo '<h4>Overview</h4>';
                            echo '<form action="">';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6" >';
                                            echo '<div class="input-group col-md-6" >';
                                                echo '<p>Type</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6" >';
                                                echo '<p id="apartment">'.$house['type'].'</p>';
                                            echo '</div>';
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Square Feet</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>750sqft</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Price</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['amount'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Purpose</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['type'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Bedroom(s)</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['bedroom'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Location</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['address'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Bath(s)</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['bathroom'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Area</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>'.$house['area'].'</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                            echo '</form>';
                        echo '</div>';
                        echo '<div class="description mt-5">';
                            echo '<h4>Description</h4>';
                            echo '<p id="description">'.$house['description'].'</p>';
                        echo '</div>';
                        echo '<div class="similar-houses">';
                            
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
                

            }
        }
    }else{
        echo false;
    }
?>
