<?php
session_start();

// Include your database connection
require_once 'php_scripts\database.php';

$recipientId = $_POST['recipientId']; // Make sure to validate and sanitize user input
$message = $_POST['message']; // Make sure to validate and sanitize user input
$userId=$_SESSION['userid'];

$sql = "INSERT INTO messages (sender_id, recipient_id, content) VALUES ($userId, $recipientId, '$message')"; // Modify the query as per your database schema
$conn->query($sql);
?>
