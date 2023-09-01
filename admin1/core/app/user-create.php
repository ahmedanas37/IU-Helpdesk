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
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$password = trim($_POST["password"]);
		$created_at = trim($_POST["created_at"]);
		$profile_picture = trim($_POST["profile_picture"]);
		$phone_number = trim($_POST["phone_number"]);
		$department_id = trim($_POST["department_id"]);
		$role = trim($_POST["role"]);
		

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

        $vars = parse_columns('user', $_POST);
        $stmt = $pdo->prepare("INSERT INTO user (name,email,password,created_at,profile_picture,phone_number,department_id,role) VALUES (?,?,?,?,?,?,?,?)");

        if($stmt->execute([ $name,$email,$password,$created_at,$profile_picture,$phone_number,$department_id,$role  ])) {
                $stmt = null;
                header("location: user-index.php");
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

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="user-index.php" class="btn btn-secondary">Cancel</a>
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