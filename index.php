<?php
include("skrypty/config.php");
session_start();
if(isset($_SESSION['login_status'])){
    switch($_SESSION['login_status']){
        case 0:
            require_once("skrypty/logowanie.php");
            break;
        case 10:
            header("Location: main.php");
            break;
        default:
            require_once("skrypty/logowanie.php");
            break;
    }
}else{
    require_once("skrypty/logowanie.php");
}