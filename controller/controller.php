<?php

// require __DIR__.'./../view/home.php';

// $data = ([
//     1 => 'test'
// ]);

if (!function_exists('student')) {

    function student($student)
    {
        require(__DIR__ . '/../view/student.php');
    }
}

if (!function_exists('view')) {
    function view($data)
    {
        require(__DIR__ . '/../view/home.php');
    }
}




// if(isset($_GET['id'])){
//     if($_GET['id']){
//        $id = $_GET['id'];

//        header('location:view/home.php');
//     }

// }
