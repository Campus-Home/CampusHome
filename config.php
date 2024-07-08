<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "realestatephp";
    $port = 3307;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(!$con) {
        die("Failed to connect to the database.");
    }