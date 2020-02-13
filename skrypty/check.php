<?php
    session_start();
    if($_SESSION['login_status']!=10){
        session_destroy();
        Header("Location: ../");
    }