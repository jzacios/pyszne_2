<?php
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    if(isset($_POST['user']) && isset($_POST['pass'])){
        require_once("db.php");
        session_start();
        $_SESSION['login'] = $_POST['user'];
        $_SESSION['password'] = $_POST['pass'];
    }
    $user = $conn->query("INSERT INTO users values ("",'".$_SESSION['login']."','".$_SESSION['password']."',""")->fetch();
?>

