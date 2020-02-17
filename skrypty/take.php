<?php

include("../skrypty/db.php");
session_start();
$id_zabieram = $_SESSION['user_id'];
$id_zmiany = $_POST['id'];
$id_oddaje;

$sql = ("INSERT INTO `Zmiany_Zmienione` (`Id_zmiany`, `Id_zabiera`, `Id_oddaje`)
VALUES (?,?,3)");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany, $id_zabieram]);