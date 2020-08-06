<?php 
    class PasswordSalt{
        private $salt;

        public function __construct(){
            $this->salt = "BasaKhujiProject";
        }

        public function getSalt(){
            return $this->salt;
        }
    }

?>