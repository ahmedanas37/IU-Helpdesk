<?php
// Include config file
require_once "config.php";
require_once "helpers.php";

// Define variables and initialize with empty values
$name = "";
$email = "";
$password = "";
$created_at = "";
$profile_picture = "";
$phone_number = "";
$department_id = "";
$role = "";

$name_err = "";
$email_err = "";
$password_err = "";
$created_at_err = "";
$profile_picture_err = "";
$phone_number_err = "";
$department_id_err = "";
$role_err = "";


// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

    $name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$created_at = trim($_POST["created_at"]);
		$profile_picture = trim($_POST["profile_picture"]);
		$phone_number = trim($_POST["phone_number"]);
		$department_id = trim($_POST["department_id"]);
		$role = trim($_POST["role"]);
		

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

    $vars = parse_columns('user', $_POST);
    $stmt = $pdo->prepare("UPDATE user SET name=?,email=?,password=?,created_at=?,profile_picture=?,phone_number=?,department_id=?,role=? WHERE id=?");

    if(!$stmt->execute([ $name,$email,$password,$created_at,$profile_picture,$phone_number,$department_id,$role,$id  ])) {
        echo "Something went wrong. Please try again later.";
        header("location: error.php");
    } else {
        $stmt = null;
        header("location: user-read.php?id=$id");
    }
} else {
    // Check existence of id parameter before processing further
	$_GET["id"] = trim($_GET["id"]);
    if(isset($_GET["id"]) && !empty($_GET["id"])){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        // Prepare a select statement
        $sql = "SELECT * FROM user WHERE id = ?";
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

                    $name = htmlspecialchars($row["name"]);
					$email = htmlspecialchars($row["email"]);
					$password = htmlspecialchars($row["password"]);
					$created_at = htmlspecialchars($row["created_at"]);
					$profile_picture = htmlspecialchars($row["profile_picture"]);
					$phone_number = htmlspecialchars($row["phone_number"]);
					$department_id = htmlspecialchars($row["department_id"]);
					$role = htmlspecialchars($row["role"]);
					

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
                                <label>name</label>
                                <input type="text" name="name" maxlength="128"class="form-control" value="<?php echo $name; ?>">
                                <span class="form-text"><?php echo $name_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>email</label>
                                <input type="text" name="email" maxlength="128"class="form-control" value="<?php echo $email; ?>">
                                <span class="form-text"><?php echo $email_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>password</label>
                                <input type="text" name="password" maxlength="128"class="form-control" value="<?php echo $password; ?>">
                                <span class="form-text"><?php echo $password_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>created_at</label>
                                <input type="text" name="created_at" maxlength="30"class="form-control" value="<?php echo $created_at; ?>">
                                <span class="form-text"><?php echo $created_at_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>profile_picture</label>
                                <input type="text" name="profile_picture" maxlength="256"class="form-control" value="<?php echo $profile_picture; ?>">
                                <span class="form-text"><?php echo $profile_picture_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>phone_number</label>
                                <input type="text" name="phone_number" maxlength="20"class="form-control" value="<?php echo $phone_number; ?>">
                                <span class="form-text"><?php echo $phone_number_err; ?></span>
                            </div>
						<div class="form-group">
                                <label>department_id</label>
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
                                <label>role</label>
                                <input type="text" name="role" maxlength="20"class="form-control" value="<?php echo $role; ?>">
                                <span class="form-text"><?php echo $role_err; ?></span>
                            </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="user-index.php" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
