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
    $comments = 0;
    $status = 'Open';
  
    // Prepare SQL statement for inserting ticket
    $sql = "INSERT INTO ticket (title, ticket_description, date_added, date_updated, user_id, department_id, comments, ticket_status)
            VALUES ('$title', '$description', '$date_added', '$date_updated', '$user_id', '$department_id', '$comments', '$status')";
  
    // Execute query and check if successful
    if (mysqli_query($conn, $sql)) {
      // Get the ID of the inserted ticket
      $ticketId = mysqli_insert_id($conn);
  
      // Upload attachments
      // ...

// Upload attachments
$attachments = $_FILES['attachments'];
$attachmentCount = count($attachments['name']);

// Directory to store uploaded files
$uploadDirectory = 'uploads/';

for ($i = 0; $i < $attachmentCount; $i++) {
  $attachmentName = $attachments['name'][$i];
  $attachmentSize = $attachments['size'][$i];
  $attachmentTmpName = $attachments['tmp_name'][$i];
  $attachmentError = $attachments['error'][$i];

  if ($attachmentError === UPLOAD_ERR_OK) {
    // Generate a unique filename for better referencing
    $randomName = uniqid();
    $fileExtension = pathinfo($attachmentName, PATHINFO_EXTENSION);
    $attachmentPath = $uploadDirectory . $randomName . '.' . $fileExtension;

    // Move the uploaded file to the upload directory with the unique filename
    move_uploaded_file($attachmentTmpName, $attachmentPath);

    // Prepare SQL statement for inserting attachment
    $attachmentSql = "INSERT INTO ticket_attachments (ticket_id, file_name, file_path, created_at)
                      VALUES ('$ticketId', '$attachmentName', '$attachmentPath', '$date_added' )";

    // Execute query and check if successful
    if (!mysqli_query($conn, $attachmentSql)) {
      // Handle attachment insert error
    }
  } else {
    // Handle attachment upload error
  }
}

// ...

  
      // Redirect to success page or display success message
      header("Location: ticket.php");
      exit();
    } else {
      // Redirect to error page or display error message
      header("Location: error.php");
      exit();
    }
  
    // Close database connection
    mysqli_close($conn);
  }
  



// Update User
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
    // showSuccessAlert('Your action was successful!', 'bg-green text-white');


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










// Function to convert date to time elapsed
function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'year',
      'm' => 'month',
      'w' => 'week',
      'd' => 'day',
      'h' => 'hour',
      'i' => 'minute',
      's' => 'second',
  );

  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) . ' ago' : 'just now';
}

// Check if the form has been submitted
if (isset($_POST['submitComment'])) {
    // Get the comment text from the form
    $comment_text = $_POST['comment_text'];
    $current_user_id = $_SESSION['userid'];
    $ticket_id = $_POST['ticket_id'];
    $date_added = date('Y-m-d H:i:s');

    // Insert the new comment into the database
    $sql = "INSERT INTO comments (ticket_id, user_id, comment, date_added) VALUES ('$ticket_id', '$current_user_id', '$comment_text', '$date_added')";
    if (mysqli_query($conn, $sql)) {
        // Get the ID of the inserted comment
        $comment_id = mysqli_insert_id($conn);

        // Handle file uploads
        if (isset($_FILES['attachment'])) {
            $fileCount = count($_FILES['attachment']['name']);

            for ($i = 0; $i < $fileCount; $i++) {
                $fileName = $_FILES['attachment']['name'][$i];
                $fileTmpPath = $_FILES['attachment']['tmp_name'][$i];
                $fileType = $_FILES['attachment']['type'][$i];
                $fileError = $_FILES['attachment']['error'][$i];

                // Check if a file was selected for upload
                if ($fileError === UPLOAD_ERR_NO_FILE) {
                    echo 'Failed to upload file';
                } else {
                    // Generate a unique file name or use the original file name
                    $uniqueFileName = uniqid() . '_' . $fileName;

                    // Set the file path where you want to store the uploaded file
                    $destination = 'uploads/' . $uniqueFileName;

                    // Move the uploaded file to the desired directory
                    if (move_uploaded_file($fileTmpPath, $destination)) {
                        // Insert attachment into the database
                        $attachmentSql = "INSERT INTO attachments (comment_id, file_name, file_path, created_at) VALUES ('$comment_id', '$fileName', '$destination', '$date_added')";
                        mysqli_query($conn, $attachmentSql);
                    } else {
                        echo 'Failed to move the uploaded file.';
                    }
                }
            }
        }
    } else {
        echo 'Error inserting comment: ' . mysqli_error($conn);
    }
}





//ticket close
if (isset($_POST['closeTicket'])) {
  $ticketId = $_POST['ticket_id'];
  $authorId = $_POST['author_id'];

  try {
    // Update ticket status to "closed"
    $updateTicketQuery = "UPDATE ticket SET ticket_status = 'Closed' WHERE id = $ticketId";
    mysqli_query($conn, $updateTicketQuery);

    // Add notification for the author
    $notificationMessage = "Your ticket (ID: $ticketId) has been closed.";
    $addNotificationQuery = "INSERT INTO notifications (user_id, message, created_at) VALUES ($authorId, '$notificationMessage', NOW())";
    mysqli_query($conn, $addNotificationQuery);

    // Redirect after successful execution
    header("Location: http://localhost/project/ticket.php");
    exit;
  } catch (Exception $e) {
    // Handle any exceptions or errors here
    echo "An error occurred: " . $e->getMessage();
  }
}




// Reopen ticket
if (isset($_POST['reopenTicket'])) {
  $ticketId = $_POST['ticket_id'];
  $authorId = $_POST['author_id'];

  try {
      // Update ticket status to "Open"
      $updateTicketQuery = "UPDATE ticket SET ticket_status = 'Open' WHERE id = $ticketId";
      mysqli_query($conn, $updateTicketQuery);

      // Add notification for the author
      $notificationMessage = "Your ticket (ID: $ticketId) has been reopened.";
      $addNotificationQuery = "INSERT INTO notifications (user_id, message, created_at) VALUES ($authorId, '$notificationMessage', NOW())";
      mysqli_query($conn, $addNotificationQuery);

      // Redirect to ticket.php after successful reopening
      header("Location: http://localhost/project/ticket.php");
      exit;
  } catch (Exception $e) {
      // Handle any exceptions or errors here
  }
}








?>
