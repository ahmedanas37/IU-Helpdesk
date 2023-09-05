<?php
session_start();
// Include your database connection
require_once 'php_scripts/database.php';

$recipientId = $_GET['recipientId']; // Make sure to validate and sanitize user input
$userId = $_SESSION['userid'];

$sql = "SELECT m.*, u.name 
        FROM messages m 
        INNER JOIN user u ON (m.sender_id = u.id)
        WHERE (m.sender_id = $recipientId AND m.recipient_id = $userId) 
        OR (m.sender_id = $userId AND m.recipient_id = $recipientId) 
        ORDER BY m.timestamp ASC"; // Modify the query as per your database schema

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Format and display messages with sender's name
        $messageContent = htmlspecialchars($row['content']);
        $senderName = htmlspecialchars($row['name']);
        $formattedMessage = '<strong>' . $senderName . ':</strong> ' . $messageContent;
        echo '<div class="message">' . $formattedMessage . '</div></br>';
    }
} else {
    echo 'No messages found';
}
?>
