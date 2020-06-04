<?php
// session_start();

    if (isset($_SESSION['user_status'])){
        require (__DIR__ .'/../controller/usercontroller.php');
    } else {
        echo "U SHALL NOT PASS";
    }