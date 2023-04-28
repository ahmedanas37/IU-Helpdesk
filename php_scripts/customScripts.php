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

?>
