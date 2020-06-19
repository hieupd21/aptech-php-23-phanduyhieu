<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = new mysqli($servername, $username, $password);

// Check connection
if(!$con) {
    die("Connect failed" . mysqli_connect_error());
}
echo "Connect successfully";