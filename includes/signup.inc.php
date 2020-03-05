<?php

if (isset($_POST['signup-submit'])){

    require "../db.php";

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    $connect = connect();

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        alert("empty fields");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        alert("invalid email & username");
    }

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        alert("invalid email");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
       alert("invalid password");
        exit();
    }
    elseif ($password !== $passwordRepeat){
       alert("check password");
        exit();
    }
    else{
       $sql = "select usernames from users where usernames=?";
       $stmt = mysqli_stmt_init($connect);
       var_dump($connect);
       if(!mysqli_stmt_init($stmt, $sql)){
           alert("sql error");
           exit();
       }
       else{
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0){
            alert("user taken");
            exit();
        }
        else{
        $sql = "INSERT INTO users (usernames, email, paswords) values(?,?,?)";
            $stmt = mysqli_stmt_init($connect);
            if(!mysqli_stmt_init($stmt, $sql)){
                alert("sql error");
                exit();
            }
            else{
                $hashPwd = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashPwd);
                mysqli_stmt_execute($stmt);
                alert("success");
                exit();
            }
        }
       }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($connect);
}
else{
    header("location: ../signup.php");
}