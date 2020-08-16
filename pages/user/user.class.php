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

        // public function signIn($query){
        //     $result = $this->con->query($query);
        //     if($result==false){
        //         return false;
        //     }
        //     return true;
        //     // if($result==true){
        //     //     $userpassword = $result->fetch_assoc(); 
        //     //     $userpassword = $userpassword['password'];
        //     //     return $userpassword;
        //     // }else{
        //     //     return false;
        //     // }
        // }

        public function checkUser($query){
            $result = $this->con->query($query);
            if($result==true){
                return true;
                // $userCount = $result->fetch_assoc(); 
                // $userCount = $userCount['userCount'];
                // if($userCount>0){
                //     return $userCount;
                // } else{
                //     return false;
                // }
                
            }else{
                return false;
            }
        }

        function signIn($query){
            $result = $this->con->query($query);
            if($result==false){
                return false;
            }
            $user_data = array();

            while($user_fetch = $result->fetch_assoc()){
                $user_data[] = $user_fetch;
            }

            return $user_data;
        }
    }

?>