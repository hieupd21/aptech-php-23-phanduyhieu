<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "Hieudn19@@";
$dbname = "crud_php";

$name = "";
$location = "";
$update = false;

//create connection 
$conn = new mysqli($servername, $username, $password, $dbname);

////////////////////////////////////////////////////////////////////

// insert data
if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $location = $_POST['location'];

    $insertsql = "INSERT INTO $dbname.datatable (name, location) VALUES ('$name', '$location')";

    $conn->query($insertsql);
    $conn->close();

    $_SESSION['msg'] = "New record created successfully";
    $_SESSION['msg_type'] = "success";

    header('location: index.php');
}

// show data
$showsql = "SELECT * FROM $dbname.datatable";
$result = $conn->query($showsql);

// delete data
if (isset($_GET['del'])) {
    $id = $_GET['del'];

    $deletesql = "DELETE FROM $dbname.datatable WHERE id=$id";

    $conn->query($deletesql);
    $conn->close();

    $_SESSION['msg'] = "Record deleted successfully";
    $_SESSION['msg_type'] = "danger";

    header('location: index.php');
}

// select data
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;

    $selectsql = "SELECT * FROM $dbname.datatable WHERE id='$id'";
    $result2 = $conn->query($selectsql);
    // if (count($check) == 1) {
    //     $row = $check->fetch_array();
    //     $name = $row['name'];
    //     $location = $row['location'];
    // }
    $row = $result2->fetch_array();
    $name = $row['name'];
    $location = $row['location'];

    $conn->close();
}

// update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];

    $updatesql = "UPDATE $dbname.datatable SET name='$name', location='$location' WHERE id='$id'";
    $result3 = $conn->query($updatesql);

    $_SESSION['msg'] = "Record updated successfully";
    $_SESSION['msg_type'] = "warning";

    header('location: index.php');

    $conn->close();
}