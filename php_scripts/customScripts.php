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


if (isset($_POST['ticketSubmitted2'])) {
  // Get form data
  $title = $_POST['title'];
  $description = $_POST['description'];
  $date_added = date('Y-m-d H:i:s'); // Current date and time
  $date_updated = date('Y-m-d H:i:s'); // Current date and time
  $user_id = $_SESSION['userid'];
  $department_id = $_POST['category_id'];
  $comments=0;
  $status='Open';

  // Prepare SQL statement
  $sql = "INSERT INTO ticket (title, ticket_description, date_added, date_updated, user_id, department_id, comments, ticket_status)
          VALUES ('$title', '$description', '$date_added', '$date_updated', '$user_id', '$department_id', '$comments', '$status')";

  // Execute query and check if successful
  if (mysqli_query($conn, $sql)) {
    // Redirect to success page or display success message
    header("Location: success.php");
    exit();
  } else {
    // Redirect to error page or display error message
    header("Location: error.php");
    exit();
  }

  // Close database connection
  mysqli_close($conn);
}

if (isset($_POST['updateUser'])) {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $department_id = $_POST['department'];
  $user_id=$_SESSION['userid'];

  // Prepare SQL statement
  $sql = "UPDATE user SET name = '$name', email = '$email', phone_number = '$phone', department_id = $department_id WHERE id = $user_id";

  // Execute query and check if successful
  if (mysqli_query($conn, $sql)) {
    // Display success alert
    // Redirect to success page or display success message
    // header("Location: success.php");
    echo '<div class="alert alert-success" role="alert">Your operation was successful!</div>';

    // header("Refresh:0");
    // exit();
  } else {
    // Display error alert
    echo "<script>alert('Failed to update user information. Please try again.');</script>";
    // Redirect to error page or display error message
    header("Location: error.php");
    exit();
  }
  mysqli_close($conn);
}



?>
