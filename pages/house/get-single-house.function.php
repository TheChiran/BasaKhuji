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
                    foreach($houseImage as $house){
                        if($index==0){
                            echo'<div class="carousel-item active">';
                        }else{
                            echo'<div class="carousel-item">';
                        }
                        echo'<img class="d-block w-100"
                            src="../../uploads/'.$house['image'].'"
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
                        echo '<h5 class="location mt-5">ka-22/2/A,Kalachandpur</h5>';
                        echo '<div class="icons mt-5">';
                           echo '<div class="form-row">';
                            echo    '<div class="input-group col-md-2">';
                                  echo '<span style="margin-right: 5px;"><i class="fa fa-bed" aria-hidden="true"></i></span> 2 Bed
                                </div>';
                                echo '<div class="input-group col-md-2">
                                    <span style="margin-right: 5px;"><i class="fa fa-bath" aria-hidden="true"></i></span> 2 Baths
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
                                                echo '<p id="apartment">Apartment</p>';
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
                                                echo '<p>BDT 18,000</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Purpose</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Rent</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Bedroom(s)</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>2</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Location</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Ka-22/2/A,Kalachandpur</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="form-row">';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Bath(s)</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>2</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                    echo '<div class="input-group col-md-6">';
                                        
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Area</p>';
                                            echo '</div>';
                                            echo '<div class="input-group col-md-6">';
                                                echo '<p>Baridhara</p>';
                                            echo '</div>';
                                        
                                    echo '</div>';
                                echo '</div>';
                            echo '</form>';
                        echo '</div>';
                        echo '<div class="description mt-5">';
                            echo '<h4>Description</h4>';
                            echo '<p id="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum consequatur perspiciatis minus unde? Consequatur a, 
                                labore perspiciatis totam dignissimos, laudantium repellendus suscipit voluptatum accusamus ad asperiores consequuntur aspernatur, 
                                ipsam nisi.</p>';
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
