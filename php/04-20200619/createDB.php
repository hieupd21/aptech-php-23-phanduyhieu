<?php

$servername = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($servername, $username, $password);

if(!$con) {
    die("Connect Failed" . mysqli_connect_error());
}

// Create DB
$sql = "CREATE DATABASE aptech_php_23_04";
if(mysqli_query($con, $sql)) {
    echo "Create database successfully";
} else {
    echo "Error creating database" . mysqli_error($con);
}

mysqli_close($con);