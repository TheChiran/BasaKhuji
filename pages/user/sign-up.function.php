<?php
    include_once("user.class.php");
    include_once("../Utilities/salt.php");
    $user = new User();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $saltObj = new PasswordSalt();
    // $password = hash('sha256',$_POST['password']);
    $salt = $saltObj->getSalt();
    $hashed= hash('sha256',$salt.$password);
    // $password = md5($password);
    
    $role = $_POST['role'];

    $query = "INSERT INTO user_table(username,email,password,role) VALUES('$username','$email','$hashed','$role')";
    if($user->signUp($query)){
        echo true;
    }else{
        echo false;
    }
?>