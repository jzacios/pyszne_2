<?php
    require_once('../skrypty/db.php');
    session_start();
    $sql = ("INSERT INTO `hours` (`Shift_id`, `Date`, `Start_Time`, `End_Time`,`User_Id`)
    VALUES (NULL,?,?,?,?)");

$date = $_POST['date'];
$st = $_POST['times'];
$et = $_POST['timee'];
$user_id = $_SESSION['user_id'];

$stmt= $conn->prepare($sql);
$stmt->execute([$date, $st, $et, $user_id]);

if($stmt){
    $_SESSION['add_status'] = true;
    header("Location: ../main.php");
}else{
    $_SESSION['add_status'] = false;
    header("Location: ../main.php");
 }