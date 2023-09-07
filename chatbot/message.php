<!-- Created By CampCodes -->
<?php
// connecting to the database
$conn = mysqli_connect("localhost", "root", "", "project") or die("Database Error");

// getting user message through AJAX
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// checking user query against database queries using prepared statement
$check_data = "SELECT replies FROM chatbot WHERE queries = ?";
$stmt = mysqli_prepare($conn, $check_data);
mysqli_stmt_bind_param($stmt, "s", $getMesg);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);

// if user query matched to database query, show the reply; otherwise, go to the else statement
if (mysqli_stmt_num_rows($stmt) > 0) {
    // fetching reply from the database according to the user query
    mysqli_stmt_bind_result($stmt, $replay);
    mysqli_stmt_fetch($stmt);
    echo $replay;
} else {
    echo "Sorry, can't be able to understand you!";
}

// close the prepared statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
