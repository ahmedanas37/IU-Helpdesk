<?php
// Include config file
require_once "config.php";
require_once "helpers.php";

// Define variables and initialize with empty values
$user_id = "";
$message = "";
$is_read = "";
$created_at = "";

$user_id_err = "";
$message_err = "";
$is_read_err = "";
$created_at_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user_id = trim($_POST["user_id"]);
		$message = trim($_POST["message"]);
		$is_read = trim($_POST["is_read"]);
		$created_at = trim($_POST["created_at"]);
		

        $dsn = "mysql:host=$db_server;dbname=$db_name;charset=utf8mb4";
        $options = [
          PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
        ];
        try {
          $pdo = new PDO($dsn, $db_user, $db_password, $options);
        } catch (Exception $e) {
          error_log($e->getMessage());
          exit('Something weird happened'); //something a user can understand
        }

        $vars = parse_columns('notifications', $_POST);
        $stmt = $pdo->prepare("INSERT INTO notifications (user_id,message,is_read,created_at) VALUES (?,?,?,?)");

        if($stmt->execute([ $user_id,$message,$is_read,$created_at  ])) {
                $stmt = null;
                header("location: notifications-index.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<?php require_once('navbar.php'); ?>
<body>
    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add a record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="form-group">
                                <label>User ID</label>
                                <input type="number" name="user_id" class="form-control" value="<?php echo $user_id; ?>">
                                <span class="form-text"><?php echo $user_id_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Message</label>
                                <input type="text" name="message" maxlength="255"class="form-control" value="<?php echo $message; ?>">
                                <span class="form-text"><?php echo $message_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Read Status</label>
                                <input type="number" name="is_read" class="form-control" value="<?php echo $is_read; ?>">
                                <span class="form-text"><?php echo $is_read_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Created At</label>
                                <input type="datetime-local" name="created_at" class="form-control" value="<?php echo date("Y-m-d\TH:i:s", strtotime($created_at)); ?>">
                                <span class="form-text"><?php echo $created_at_err; ?></span>
                            </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="notifications-index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>