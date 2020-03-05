<?php

include("db.php");

$id_zmiany = $_POST['id'];

$sql = ("UPDATE `hours` SET oddana = 0 WHERE Id_zmiany = ?");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany]);

$sql = ("DELETE FROM `Zmiany_zmienione` WHERE Id_zmiany = ?");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany]);

header("Location: ../index.php");