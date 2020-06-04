<?php

    function DB() {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'lifecycle';

       $condb =  mysqli_connect($servername,$username,$password,$dbname);

      

       return $condb;

    
    }

    // $test = DB();