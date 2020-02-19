<?php
    
    if(isset($_POST['user']) && isset($_POST['pass'])){
        require_once("db.php");
        session_start();
        $_SESSION['login'] = $_POST['user'];
        $_SESSION['password'] = $_POST['pass'];
    }
    $user = $conn->query("INSERT INTO users values ("",'".$_SESSION['login']."','".$_SESSION['password']."',""")->fetch();
?>

