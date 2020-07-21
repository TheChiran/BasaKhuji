<?php
  class DBConfig{
    private $_host = 'localhost';
    private $_dbuser = 'root';
    private $_dbpass = '';
    private $_dbname = 'basakhuji';

    protected $conn;

    public function __construct(){
      if(empty($this->$conn)){
        $this->$conn = new mysqli($this->$_host,$this->$_dbuser,$this->$_dbpass,$this->$_dbname);
          if($this->$conn){
            return $this->$conn;
          }else{
            echo "Database Not Connected!";
            exit;
          }
        return $this->$conn;
      }
    }
  }
 ?>
