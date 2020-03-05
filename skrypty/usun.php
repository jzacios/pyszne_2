<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("db.php");

$id_zmiany = $_POST['id'];

$sql = ("UPDATE `hours` SET oddana = 0 WHERE Shift_id = ?");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany]);

$sql = ("DELETE FROM `Zmiany_zmienione` WHERE Id_zmiany = ?");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany]);

header("Location: ../index.php");