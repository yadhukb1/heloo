<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_db";

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql code to create table
$sql = "CREATE TABLE `users` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(100),
    `email` varchar(100),
    `mobile` varchar(15),
    PRIMARY KEY  (`id`)
  )";

if ($conn->query($sql) === TRUE) {
    echo "Table employees created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>