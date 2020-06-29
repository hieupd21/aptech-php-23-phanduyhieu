<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aptech_php_23_04";

$name = $_POST["name"];
$email = $_POST["email"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO $dbname.users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>