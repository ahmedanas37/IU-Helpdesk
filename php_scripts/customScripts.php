<?php
session_start();
include('php_scripts\database.php');


if(isset($_POST['btnLogin'])){
    // Perform validation of username and password here
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Create database connection

    // Prepare and execute SQL query
    $query = "SELECT * FROM user WHERE email=? AND password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if username and password are correct
    if($result->num_rows == 1){
        $row = mysqli_fetch_assoc($result);

        // Set session variables and redirect to index.php
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $row['name'];
        $_SESSION['userid'] = $row['id'];

        header('Location: index.php');
        exit;
    } else {
        // Display error message if username or password is incorrect
        $errorMessage = 'Invalid username or password';
    }

    // Close database connection
    $stmt->close();
    $conn->close();
}




// Check if the form is submitted
if (isset($_POST['ticketSubmitted2'])) {
  // Get form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date_added = date('Y-m-d H:i:s'); // Current date and time
  $date_updated = '';
  $attachment_name = '';
  $user_id = $_SESSION['userid'];
  $department_id = $_POST['category'];
  $comments = 0;
  $status = 'Open';

  // Prepare SQL statement
  $sql = "INSERT INTO tickets (title, description, date_added, date_updated, attachment_name, user_id, department_id, comments, status)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

  // Create prepared statement
  $stmt = mysqli_stmt_init($conn);

  // Check if prepared statement is valid
  if (mysqli_stmt_prepare($stmt, $sql)) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "sssssiiss", $title, $description, $date_added, $date_updated, $attachment_name, $user_id, $department_id, $comments, $status);

    // Execute prepared statement and check if successful
    if (mysqli_stmt_execute($stmt)) {
      // Redirect to success page or display success message
      header("Location: success.php");
      exit();
    } else {
      // Redirect to error page or display error message
      header("Location: error.php");
      exit();
    }
  }

  // Close prepared statement and database connection
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}







?>
