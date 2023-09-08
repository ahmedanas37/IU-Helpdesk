<?php
// Include config file
require_once "config.php";
require_once "helpers.php";

// Define variables and initialize with empty values
$title = "";
$ticket_description = "";
$date_added = "";
$date_updated = "";
$user_id = "";
$department_id = "";
$comments = "";
$ticket_status = "";

$title_err = "";
$ticket_description_err = "";
$date_added_err = "";
$date_updated_err = "";
$user_id_err = "";
$department_id_err = "";
$comments_err = "";
$ticket_status_err = "";


// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    $title = trim($_POST["title"]);
		$ticket_description = trim($_POST["ticket_description"]);
		$date_added = trim($_POST["date_added"]);
		$date_updated = trim($_POST["date_updated"]);
		$user_id = trim($_POST["user_id"]);
		$department_id = trim($_POST["department_id"]);
		$comments = trim($_POST["comments"]);
		$ticket_status = trim($_POST["ticket_status"]);
		

    // Prepare an update statement
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
        exit('Something weird happened');
    }

    $vars = parse_columns('ticket', $_POST);
    $stmt = $pdo->prepare("UPDATE ticket SET title=?,ticket_description=?,date_added=?,date_updated=?,user_id=?,department_id=?,comments=?,ticket_status=? WHERE id=?");

    if(!$stmt->execute([ $title,$ticket_description,$date_added,$date_updated,$user_id,$department_id,$comments,$ticket_status,$id  ])) {
        echo "Something went wrong. Please try again later.";
        header("location: error.php");
    } else {
        $stmt = null;
        header("location: ticket-read.php?id=$id");
    }
} else {
    // Check existence of id parameter before processing further
	$_GET["id"] = trim($_GET["id"]);
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM ticket WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Set parameters
            $param_id = $id;

            // Bind variables to the prepared statement as parameters
			if (is_int($param_id)) $__vartype = "i";
			elseif (is_string($param_id)) $__vartype = "s";
			elseif (is_numeric($param_id)) $__vartype = "d";
			else $__vartype = "b"; // blob
			mysqli_stmt_bind_param($stmt, $__vartype, $param_id);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);

                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                    // Retrieve individual field value

                    $title = htmlspecialchars($row["title"]);
					$ticket_description = htmlspecialchars($row["ticket_description"]);
					$date_added = htmlspecialchars($row["date_added"]);
					$date_updated = htmlspecialchars($row["date_updated"]);
					$user_id = htmlspecialchars($row["user_id"]);
					$department_id = htmlspecialchars($row["department_id"]);
					$comments = htmlspecialchars($row["comments"]);
					$ticket_status = htmlspecialchars($row["ticket_status"]);
					

                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }

            } else{
                echo "Oops! Something went wrong. Please try again later.<br>".$stmt->error;
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<?php require_once('navbar.php'); ?>
<body>
    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">

                        <div class="form-group">
                                <label>Ticket Title</label>
                                <input type="text" name="title" maxlength="256"class="form-control" value="<?php echo $title; ?>">
                                <span class="form-text"><?php echo $title_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Description</label>
                                <textarea name="ticket_description" class="form-control"><?php echo $ticket_description ; ?></textarea>
                                <span class="form-text"><?php echo $ticket_description_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Date Added</label>
                                <input type="text" name="date_added" maxlength="30"class="form-control" value="<?php echo $date_added; ?>">
                                <span class="form-text"><?php echo $date_added_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Date Updated</label>
                                <input type="text" name="date_updated" maxlength="30"class="form-control" value="<?php echo $date_updated; ?>">
                                <span class="form-text"><?php echo $date_updated_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>User ID</label>
                                    <select class="form-control" id="user_id" name="user_id">
                                    <?php
                                        $sql = "SELECT *,id FROM user";
                                        $result = mysqli_query($link, $sql);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $duprow = $row;
                                            unset($duprow["id"]);
                                            $value = implode(" | ", $duprow);
                                            if ($row["id"] == $user_id){
                                            echo '<option value="' . "$row[id]" . '"selected="selected">' . "$value" . '</option>';
                                            } else {
                                                echo '<option value="' . "$row[id]" . '">' . "$value" . '</option>';
                                        }
                                        }
                                    ?>
                                    </select>
                                <span class="form-text"><?php echo $user_id_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Department ID</label>
                                    <select class="form-control" id="department_id" name="department_id">
                                    <?php
                                        $sql = "SELECT *,id FROM departments";
                                        $result = mysqli_query($link, $sql);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $duprow = $row;
                                            unset($duprow["id"]);
                                            $value = implode(" | ", $duprow);
                                            if ($row["id"] == $department_id){
                                            echo '<option value="' . "$row[id]" . '"selected="selected">' . "$value" . '</option>';
                                            } else {
                                                echo '<option value="' . "$row[id]" . '">' . "$value" . '</option>';
                                        }
                                        }
                                    ?>
                                    </select>
                                <span class="form-text"><?php echo $department_id_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Comments</label>
                                <input type="number" name="comments" class="form-control" value="<?php echo $comments; ?>">
                                <span class="form-text"><?php echo $comments_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>Ticket Status</label>
                                <input type="text" name="ticket_status" maxlength="20"class="form-control" value="<?php echo $ticket_status; ?>">
                                <span class="form-text"><?php echo $ticket_status_err; ?></span>
                            </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="ticket-index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
