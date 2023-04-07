<?php
$host = "localhost"; // Your database host name
$user = "root"; // Your database username
$password = ""; // Your database password
$database = "project"; // Your database name

// Create a connection to the database
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
