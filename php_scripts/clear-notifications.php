<?php
// Assuming you have a database connection established
include('database.php');

session_start(); // Start the session
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    // Get the user's ID or any identifier for the logged-in user
    $userID = $_SESSION['userid'];

    // Query to delete all notifications for the user
    $deleteQuery = "DELETE FROM notifications WHERE user_id = $userID";
    $result = mysqli_query($conn, $deleteQuery);

    if ($result) {
        // Notifications cleared successfully
        echo 'Notifications cleared successfully.';
        header('Location: ..\index.php');
    } else {
        // Error occurred while clearing notifications
        echo 'Error occurred while clearing notifications.';
        header('Location: ..\index.php');

    }
} else {
    // User not logged in
    echo 'User not logged in.';
}
?>
