<?php
$username="";
$email="";
$errors=array();
    //connect to the db
    $db =mysqli_connect('localhost','root','','user_managemen');

    //if the registration button click

    if(isset($_POST['register'])){
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $email=mysqli_real_escape_string($db,$_POST['email']);
        $password_1=mysqli_real_escape_string($db,$_POST['password_1']);
        $password_2=mysqli_real_escape_string($db,$_POST['password_2']);

        if(empty($username)){
            array_push($errors,"User name is required");

        }
        if(empty($email))
        {
            array_push($errors,"Email is rrequired");
        }
        if(empty($password_1)){
            array_push($errors,"Password is required");
        }
       // if(empty($password_2)){
          //  array_push($errors,"Password is required");
        //}
        if($password_1 != $password_2){
            array_push($errors,"The passwords do not match");
        }
        //if the no eerors,save user in the db
        if(count($errors)==0)
        {
            $password=md5($password_1);//Encryption of password
            $sql = "INSERT INTO user (user_type_id,user_name,email,password)
             VALUES (2,'$username','$email','$password')";

             mysqli_query($db,$sql);
             $_SESSION['username']=$username;
             $_SESSION['success']="You are now logged in";
             header('location: index.php');//rederect to home page
        }

        //logout
        if(isset($_GET['logout'])){
            session_destroy();
            unset($_SESSION['username']);
            header('location: index.php');
        }
    }

?>