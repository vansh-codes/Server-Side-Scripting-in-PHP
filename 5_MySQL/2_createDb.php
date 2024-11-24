<?php
//Procedural oriented way
$link = mysqli_connect("localhost", "root", "");

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE practice2";
if (mysqli_query($link, $sql)) {
    echo "Database created successfully";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

//Object oriented way
/* $servername = "localhost";
$username = "root";
$password = "";
$databasename = "practice2";
// using MYSQLi Object-oriented way
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE DATABASE practice2";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Database exists";
}

$conn->close(); */
