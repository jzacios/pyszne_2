<?php
include("skrypty/config.php");
session_start();
if(isset($_SESSION['login_status'])){
    switch($_SESSION['login_status']){
        case 0:
            require_once("skrypty/logowanie.php");
            break;
        case 10:
            if($_SESSION['privilege'] == 2){
                header("Location: main_k.php");
            }else{
                header("Location: main.php");
            }
            break;
        default:
            require_once("skrypty/logowanie.php");
            break;
    }
}else{
    require_once("skrypty/logowanie.php");
}