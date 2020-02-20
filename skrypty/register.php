<?php
        require_once('../skrypty/db.php');
        session_start();
    if(isset($_POST['user']) && isset($_POST['password'])){

        $log = $_POST['user'];
        $pass = $_POST['password'];
    }
    $sql = ("INSERT INTO `users` (`ID`,`Login`,`Password`,`Privilege`) values (NULL,?,?,1)");
    $stmt = $conn->prepare($sql);
    $stmt->execute([$log, $pass]);
    header("Location: ../index.php");
?>

