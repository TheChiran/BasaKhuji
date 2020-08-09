<?php
    include_once("house.class.php");
    $house = new House();

    $query = "SELECT * FROM `house`";
    if($result = $house->getHouseList($query)){
        if(empty($result)){
            echo "There is no data";
        }else{
            echo "<table class='table table-striped'>";
            echo "<tr>";
            echo "<th>Address</th>";
            echo "<th>Area</th>";
            echo "<th>Bedroom</th>";
            echo "<th>Bathroom</th>";
            echo "<th>Description</th>";
            echo "<th>Amount</th>";
            echo "<th>Status</th>";
            echo "<th>Type</th>";
            echo "<th>Image</th>";
            echo "<th></th>";
            echo "<th></th>";
            echo "</tr>";
            foreach($result as $house){
                echo "<tr>";
                echo "<td>".$house['address']."</td>";
                echo "<td>".$house['area']."</td>";
                echo "<td>".$house['bedroom']."</td>";
                echo "<td>".$house['bathroom']."</td>";
                echo "<td>".$house['description']."</td>";
                echo "<td>".$house['amount']."</td>";
                echo "<td>".$house['status']."</td>";
                echo "<td>".$house['type']."</td>";
                echo "<td>
                    <button class='btn btn-sm btn-outline-success' 
                    data-toggle='modal' data-target='#houseImageModal'>See Images</button>
                </td>";
                echo "<td>
                        <button class='btn btn-sm btn-warning' onclick='getHouse(".$house['id'].")'>Edit</button>
                    </td>";
                echo "<td>
                        <button class='btn btn-sm btn-danger' onclick='deleteHouse(".$house['id'].")'>Delete</button>
                    </td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    }else{
        echo false;
    }
?>