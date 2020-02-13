<?php
    
    if(isset($_POST['login']) && isset($_POST['password'])){
        require_once("db.php");
        session_start();
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
    }
    $user = $conn->query("SELECT ID, Password FROM users WHERE Login = '".$_SESSION['login']."'")->fetch();
    if($user['Password'] == $_SESSION['password']){
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['login_status'] = 10;
        echo($user['Password']);
        echo($_SESSION['password']);
        header("Location: ../index.php");

    }else{
        $_SESSION['login_status'] = 0;
        echo($user['Password']);
        echo($_SESSION['password']);
        header("Location: ../index.php");
    }
?>