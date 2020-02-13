<?php

if (isset($_POST['signup-submit'])){

    require "db.php";

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("location: ../login/signup.php");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("location: ../login/signup.php");
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("location: ../login/signup.php");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("location: ../login/signup.php");
        exit();
    }
    elseif ($password !== $passwordRepeat){
        header("location: ../login/signup.php");
        exit();
    }
    
}