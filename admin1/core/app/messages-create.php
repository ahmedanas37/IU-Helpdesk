<?php
// Include config file
require_once "config.php";
require_once "helpers.php";

// Define variables and initialize with empty values
$sender_id = "";
$recipient_id = "";
$content = "";
$timestamp = "";

$sender_id_err = "";
$recipient_id_err = "";
$content_err = "";
$timestamp_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $sender_id = trim($_POST["sender_id"]);
		$recipient_id = trim($_POST["recipient_id"]);
		$content = trim($_POST["content"]);
		$timestamp = trim($_POST["timestamp"]);
		

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

        $vars = parse_columns('messages', $_POST);
        $stmt = $pdo->prepare("INSERT INTO messages (sender_id,recipient_id,content,timestamp) VALUES (?,?,?,?)");

        if($stmt->execute([ $sender_id,$recipient_id,$content,$timestamp  ])) {
                $stmt = null;
                header("location: messages-index.php");
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
                                <label>Sender ID</label>
                                <input type="number" name="sender_id" class="form-control" value="<?php echo $sender_id; ?>">
                                <span class="form-text"><?php echo $sender_id_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Recipient ID</label>
                                <input type="number" name="recipient_id" class="form-control" value="<?php echo $recipient_id; ?>">
                                <span class="form-text"><?php echo $recipient_id_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Content</label>
                                <textarea name="content" class="form-control"><?php echo $content ; ?></textarea>
                                <span class="form-text"><?php echo $content_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Timestamp</label>
                                <input type="text" name="timestamp" class="form-control" value="<?php echo $timestamp; ?>">
                                <span class="form-text"><?php echo $timestamp_err; ?></span>
                            </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="messages-index.php" class="btn btn-secondary">Cancel</a>
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