<?php

$host = "localhost";
$user = "Divine";
$password = "chi09073170307";
$database = "login";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
// $sql = "CREATE DATABASE login";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
// $sql = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }
    


?>