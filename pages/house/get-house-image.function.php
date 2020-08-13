<?php
    include_once("house.class.php");
    $house = new House();
    $houseId = $_POST['houseId'];
    $query = "SELECT * FROM `houseimage` WHERE houseId='$houseId'";
    if($result = $house->getHouseList($query)){
        if(empty($result)){
            echo "There is no data";
        }else{
            $totalResult = count($result);
            $data = "";
            echo '<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">';
            echo'<ol class="carousel-indicators">';
            for($i=0;$i<$totalResult;$i++){
                // echo$i;
                if($i==0){
                    echo'<li data-target="#carousel-example-1z" data-slide-to="'.$i.'" class="active"></li>';
                }else{
                    echo'<li data-target="#carousel-example-1z" data-slide-to="'.$i.'"></li>';
                }
            }
            echo'</ol>';
            echo'<div class="carousel-inner" role="listbox">';
            $index = 0;
            foreach($result as $house){
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
            // echo $data;
            
            // $index = 0;
            // foreach($result as $house){
            //      echo '<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">';
            //     echo '<ol class="carousel-indicators">';
            //     echo '<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>';
            //     echo '<li data-target="#carousel-example-1z" data-slide-to="1"></li>'; 
            //     echo '<li data-target="#carousel-example-1z" data-slide-to="2"></li>';
            //     echo '</ol>';
            //     echo '<div class="carousel-inner" role="listbox">';
            //     echo '<div class="carousel-item active">';
            //     echo '<img class="d-block w-100"
            //     src="../../uploads/'.$house['image'].'"
            //     alt="First slide">';
            //     echo '</div>';
            //     echo '</div>'; 
            //     echo '<a class="carousel-control-prev" href="#carousel-example-1z" role="button"
            //     data-slide="prev">';
            //     echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>
            //     <span class="sr-only">Previous</span></a>';
            //     echo '<a class="carousel-control-next" href="#carousel-example-1z" role="button"
            //             data-slide="next">
            //             <span class="carousel-control-next-icon" aria-hidden="true"></span>
            //             <span class="sr-only">Next</span>
            //         </a>';
            //     echo '</div>';                     
            // }
            
        }
    }else{
        echo "There is no data";
    }



    // echo '<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">';
    //             echo '<ol class="carousel-indicators">';
    //             echo '<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>';
    //             echo '<li data-target="#carousel-example-1z" data-slide-to="1"></li>'; 
    //             echo '<li data-target="#carousel-example-1z" data-slide-to="2"></li>';
    //             echo '</ol>';
    //             echo '<div class="carousel-inner" role="listbox">';
    //             echo '<div class="carousel-item active">';
    //             echo '<img class="d-block w-100"
    //             src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
    //             alt="First slide">';
    //             echo '</div>';
    //             echo '<div class="carousel-item">
    //                     <img class="d-block w-100"
    //                         src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
    //                         alt="Second slide">
    //                     </div>';
    //             echo '<div class="carousel-item">
    //                     <img class="d-block w-100"
    //                     src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
    //                     alt="Third slide">
    //                     </div>';
    //             echo '</div>'; 
    //             echo '<a class="carousel-control-prev" href="#carousel-example-1z" role="button"
    //             data-slide="prev">';
    //             echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    //             <span class="sr-only">Previous</span></a>';
    //             echo '<a class="carousel-control-next" href="#carousel-example-1z" role="button"
    //                     data-slide="next">
    //                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
    //                     <span class="sr-only">Next</span>
    //                 </a>';
    //             echo '</div>';
?>
