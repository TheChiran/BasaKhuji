<?php 
    include_once('../DB/DBConfig.php');
    class User{
        private $con;
        private $dbConfig;
        public function __construct(){
            $this->dbConfig = new DBConfig();
            $this->con = $this->dbConfig->getConnection();
        }

        public function signUp($query){
            $result = $this->con->query($query);

            if($result==false){
                return false;
            }
            return true;
        }

        public function signIn(){
            
        }

        public function checkUser($query){
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
                return 0;
            }
        }
    }

?>