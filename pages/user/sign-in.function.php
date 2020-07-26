<?php
    include_once("user.class.php");
    $user = new User();
    $username = $_POST['username'];
    $password = hash('sha256',$_POST['password']);
    $userCount;

    $query = "SELECT COUNT(username) AS userCount FROM user_table WHERE username='$username'";
    if($userResult = $user->checkUser($query)){
        if($userResult>0){
            $query = "SELECT COUNT(username) AS userCount FROM user_table WHERE username='$username'";
        }else{
            echo 0;
        }
    }else{
        echo false;
    }

?>