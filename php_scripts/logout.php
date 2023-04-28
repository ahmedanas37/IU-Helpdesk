<?php
session_start();
// Check if form has been submitted for logout
    unset($_SESSION['loggedin']);
    header('Location:../index.php');


?>
