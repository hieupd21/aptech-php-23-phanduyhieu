<?php

$servername = "localhost";
$username = "root";
$password = "Hieudn19@@";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if(!$con) {
    die("Connect failed" . mysqli_connect_error());
}
echo "Connect successfully";