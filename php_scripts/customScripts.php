<?php


// Check if form has been submitted for login
if(isset($_POST['btnLogin'])){
    // Perform validation of username and password here
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username and password are correct
    if($username === 'myusername' && $password === 'mypassword'){
        // Set session variables and redirect to index.php
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        // Display error message if username or password is incorrect
        $errorMessage = 'Invalid username or password';
    }
}

// // Check if form has been submitted for logout
// if(isset($_POST['btnLogout'])){
//     // Clear session variables and redirect to index.php
//     session_unset();
//     session_destroy();
//     header('Location: index.php');
//     exit;
// }

  


?>
