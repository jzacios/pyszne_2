<?php

include("db.php");

$id_zmiany = $_POST['id'];

$sql = ("UPDATE `Zmiany_zmienione` SET archived = 1 WHERE Id_zmiany = ?");
$stmt= $conn->prepare($sql);
$stmt->execute([$id_zmiany]);

header("Location: ../index.php");