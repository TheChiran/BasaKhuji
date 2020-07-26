<?php
    include_once("user.class.php");
    $user = new User();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = hash('sha256',$_POST['password']);
    $role = $_POST['role'];

    $query = "INSERT INTO user_table(username,email,password,role) VALUES('$username','$email','$password','$role')";
    if($user->signUp($query)){
        echo true;
    }else{
        echo false;
    }

?>