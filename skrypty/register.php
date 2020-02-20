<?php
        require_once('../skrypty/db.php');
        session_start();
    if(isset($_POST['user']) && isset($_POST['password'])){

        $log = $_POST['user'];
        $pass = $_POST['password'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
    }
    $sql = ("INSERT INTO `users` (`ID`,`Login`,`Password`,`Privilege`) values (NULL,?,?,1)");
    $stmt = $conn->prepare($sql);
    $stmt->execute([$log, $pass]);
    
    $id = $conn->query("SELECT `ID` from `users` where Login ='".$log."'")->fetch();
    
    $sql = ("INSERT INTO `workers` (`ID`,`Name`,`Surname`) values (?,?,?)");
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id['ID'], $name, $surname]);
    header("Location: ../index.php");
?>

