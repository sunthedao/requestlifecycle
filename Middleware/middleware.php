<?php


    if (isset($_SESSION['user_status'])){
        require (__DIR__ .'/../controller/usercontroller.php');
        require (__DIR__ .'/../controller/bookcontroller.php');
        require (__DIR__ .'/../controller/sportcontroller.php');
        require (__DIR__ .'/../controller/subjectcontroller.php');
        require (__DIR__ .'/../controller/universitycontroller.php');



        
    } else {
        $message = "You have to login first"." "."<a href='/phpOOP/public/login.php' class='text-dark'>".'LogIn Here'."</a>";
    }

    // if ($_SESSION['user_status'] != ''){
    //     require(__DIR__.'/../controller/usercontroller.php');
    // } else {
    //     echo "U shall not pass";
    // }