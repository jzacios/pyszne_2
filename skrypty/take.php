<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("db.php");

$id_zmiany = $_POST['id'];

$sql = ("SELECT User_ID FROM hours where Shift_id = ?");
$stmt = $conn->premare($sql);
$id_oddaje = $stmt->execute([$id_zmiany])->fetch();

session_start();
$id_zabieram = $_SESSION['user_id'];
$id_oddaje;

$sql = ("INSERT INTO `Zmiany_zmienione` (`Id_zmiany`, `Id_zabiera`, `Id_oddaje`)
VALUES (?,?,3)");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany, $id_zabieram]);