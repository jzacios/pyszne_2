<?php

$servername = "54.38.189.178";
$username = "pyszne_log";
$password = "69m02b1C";

try {
    $conn = new PDO("mysql:host=$servername;dbname=bazunia;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>