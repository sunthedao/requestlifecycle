<?php

if (!isset($_SESSION)) {
    session_start();
}
// ! Make sure session_start(); is called before any sessions are being called. 
// !So a safe bet would be to put it at the beginning of your page, 
// !immediately after the opening <?php declaration before anything else. 
// !Also ensure there are no whitespaces/tabs before the opening <?php declaration.

require './../request/request.php';
require './../database/connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include('./../view/header.php') ?>

</head>

<body>

    <div class="container-fluid mt-2">
        <?php if (isset($message)) { ?>
            <div class="alert alert-danger text-center" role="alert">
                <?= $message ?>
            </div>
        <?php } ?>
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

                    if (isset($_GET['university'])) {
                        university();
                    }

                    if (isset($_GET['book'])) {
                        book();
                    }

                    if (isset($_GET['sport'])) {
                        sport();
                    }

                    ?>


                </div>
            </div>

        </div>
    </div>












</body>

</html>