<?php
        //start sessions
        session_start();
        define('LOCALHOST','db');
        define('DB_USERNAME','admin');
        define('DB_PASSWORD','uit');
        define('DB_NAME','food-order');
        define('DB_PORT', "3306");

        // create constants to store non repeating values
        $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die (mysqli_error()); // Database connection
        $db_select = mysqli_select_db($conn,DB_NAME) or die (mysqli_error()); // Database selection
?>