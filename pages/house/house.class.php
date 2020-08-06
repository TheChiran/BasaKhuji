<?php 
    include_once('../DB/DBConfig.php');
    class House{
        private $con;
        private $dbConfig;
        public function __construct(){
            $this->dbConfig = new DBConfig();
            $this->con = $this->dbConfig->getConnection();
        }

        public function addHouse($query){
            $result = $this->con->query($query);

            if($result==false){
                return false;
            }
            return true;
        }

        public function getHouseList($query){
            $result = $this->con->query($query);
            if($result==false){
                return false;
            }
            $house_list = array();

            while($house_fetch = $result->fetch_assoc()){
                $house_list[] = $house_fetch;
            }

            return $house_list;
        }

        public function getSingleHouse($query){
            $result = $this->con->query($query);
            if($result==true){
                $userCount = $result->fetch_assoc(); 
                $userCount = $userCount['userCount'];
                if($userCount>0){
                    return $userCount;
                } else{
                    return false;
                }
                
            }else{
                return false;
            }
        }
    }

?>