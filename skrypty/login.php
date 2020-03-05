<?php
    
    if(isset($_POST['login']) && isset($_POST['password'])){
        require_once("db.php");
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
    }
    $user = $conn->query("SELECT ID, Password, Privilege FROM users WHERE Login = '".$_SESSION['login']."'")->fetch();
    if(empty(trim($_POST['login']))){
        echo "upsi";
    }
    else if(empty(trim($_POST['password']))){
        echo "upsi";
    }
    else{
        if($user['Password'] == $_SESSION['password']){
            $_SESSION['user_id'] = $user['ID'];
            $_SESSION['login_status'] = 10;
            $_SESSION['privilege'] = 2;
            header("Location: ../index.php");

        }else if($user['Password'] != $_SESSION['password']){
            $_SESSION['login_status'] = 0;
            header("Location: ../index.php");
        }
        else{
            $_SESSION['login_status'] = 0;
            header("Location: ../index.php");
        }
    }
?>