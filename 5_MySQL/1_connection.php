<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "practice1";
// using MYSQLi Object-oriented way
$conn = new mysqli($servername, $username, $password, $databasename);

// using MYSQLi Procedural way
// $conn = mysqli_connect($servername, $username, $password, $databasename);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "CREATE TABLE `practice2` . `viaphp` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `address` VARCHAR(30) NOT NULL,
    `marks` INT(6) NOT NULL )";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
