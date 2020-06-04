<?php


// require '/xampp/htdocs/phpOOP/controller/controller.php';


// require (__DIR__. '/../Middleware/middleware.php');

if (isset($_GET['td'])) {
    if ($_GET['td'] == 'student') {
        
        $student = $_GET['td'];
        require  (__DIR__ .'/../controller/controller.php');
    }

}



if (isset($_GET['data'])) {
    if ($_GET['data']) {
        // echo $_GET['data'];
        $data = $_GET['data'];
        require  (__DIR__ .'/../controller/controller.php');

    }
}

if (isset($_GET['teacher'])){

    // $teacher = $_GET['teacher'];

   
        require (__DIR__ .'/../Middleware/middleware.php');


    // require (__DIR__.'/../controller/usercontroller.php');
    
}

if(isset($_GET['student2'])){

    require (__DIR__. '/../controller/usercontroller.php');
}

if(isset($_GET['subject'])){
    require (__DIR__. '/../controller/subjectcontroller.php');
}

if(isset($_GET['university'])){
    require (__DIR__. '/../controller/universitycontroller.php');
}

if(isset($_GET['book'])){
    require (__DIR__. '/../controller/bookcontroller.php');
}

if(isset($_GET['sport'])){
    require(__DIR__.'/../controller/sportcontroller.php');
}
// if(isset($_GET[]))