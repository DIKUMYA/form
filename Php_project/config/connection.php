<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', ''); // password here
    define('DB_NAME', 'Tutorial'); //database name here

    $con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if (mysqli_connect_error()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        
    };
