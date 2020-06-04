<?php

require './../request/request.php';
require './../database/connect.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('./../view/header.php') ?>

</head>

<body>

    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <?php include('./../view/menu.php') ?>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="container">
                   
                    <?php include('./../view/verticalmenu.php') ?>
                </div>
            </div>

            <div class="col-md-9 text-center">
                <!-- <h1 class="mt-2"> REQUEST LIFECYCLE </h1> -->
                <div class="container">
               
                    <?php
                    if (isset($_GET['td'])) {
                        // if ($_GET['td'] == 'student') {
                        //     require('../controller/controller.php');
                        student($student);
                        // }
                    }

                    if (isset($_GET['data'])) {
                        // require('../controller/controller.php');
                        view($data);
                    }

                    if (isset($_GET['teacher'])) {
                        teacher();
                    }

                    if (isset($_GET['student2'])) {
                        student2();
                    }

                    if (isset($_GET['subject'])) {
                        subject();
                    }

                    if (isset($_GET['university'])){
                        university();
                    }

                    if(isset($_GET['book'])){
                        book();
                    }

                    if(isset($_GET['sport'])){
                        sport();
                    }

                    ?>


                </div>
            </div>

        </div>
    </div>












</body>

</html>