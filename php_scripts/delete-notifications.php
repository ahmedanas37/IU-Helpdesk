<?php
// Assuming you have a database connection established
// ...

include('database.php');

if (isset($_GET['id'])) {
    $notificationId = $_GET['id'];

    // Perform necessary validation and security checks here, such as checking user permissions

    // Delete the notification from the database
    $deleteQuery = "DELETE FROM notifications WHERE id = $notificationId";
    $deleteResult = mysqli_query($conn, $deleteQuery);

    if ($deleteResult) {
        // Notification deleted successfully
        // You can perform any necessary actions or display a success message here
    } else {
        // Failed to delete the notification
        // Handle the error appropriately, such as displaying an error message
        echo "Failed to delete the notification.";
    }
}


// Redirect the user back to the appropriate page
header("Location: ..\index.php");
exit();
?>
