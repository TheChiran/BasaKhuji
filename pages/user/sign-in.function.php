<?php
    include_once("user.class.php");
    include_once("../Utilities/salt.php");
    $user = new User();
    $saltObj = new PasswordSalt();
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $password = md5($password);
    $salt = $saltObj->getSalt();
    $hashed = hash('sha256',$salt.$password);

    // $query = "SELECT COUNT(username) AS userCount FROM user_table WHERE username='$username' AND password='$hashed'";
    $query = "SELECT * FROM user_table WHERE username='$username' AND password='$hashed'";
    
    if($userResult = $user->signIn($query)){
        if(!empty($userResult)){
            foreach($userResult as $user){
                $userObj = array('id'=>$user['id'],'access_token'=>md5(uniqid(rand(),true)));
                $userAccess = json_encode($userObj);
                echo $userAccess;
            }
            // session_start();
            // $_SESSION['access'] = md5(uniqid(rand(),true));
            // echo $_SESSION['access'];
            // $query = "SELECT password FROM user_table WHERE username='$username'";
            // if($userPassword = $user->signIn($query)){
            //     echo $password;
            //     // if($password==$userPassword){
            //     //     echo true;
            //     // }else{
            //     //     echo false;
            //     // }
            // }
        }else{
            echo false;
        }
    }else{
        echo false;
    }
    

?>