<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$id_zabieram = $_SESSION['user_id'];
$id_zmiany = $_POST['id'];
$id_oddaje;

include("db.php");

$sql = ("INSERT INTO `Zmiany_zmienione` (`Id_zmiany`, `Id_zabiera`, `Id_oddaje`)
VALUES (?,?,3)");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany, $id_zabieram]);