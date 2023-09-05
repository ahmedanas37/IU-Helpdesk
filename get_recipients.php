<?php
session_start();

// Include your database connection
require_once 'php_scripts\database.php';

$userId = $_SESSION['userid']; // Get the ID of the currently logged-in user

$sql = "SELECT * FROM user WHERE id != $userId"; // Modify the query to exclude the currently logged-in user
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $options = '<option value="0">Select recipient</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
    }
    echo $options;
} else {
    echo '<option value="0">No recipients found</option>';
}
?>
