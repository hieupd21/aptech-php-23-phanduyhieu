<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "aptech_php_23_04";

$con = mysqli_connect($servername, $username, $password, $db_name);

if(!$con) {
    die("Connect Failed" . mysqli_connect_error());
}

$sql = "CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50) UNIQUE
)";

if(mysqli_query($con, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . mysqli_error($con);
}

mysqli_close($con);