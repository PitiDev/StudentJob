<?php
session_start();

require '../config.php';

if (isset($_SESSION['userSession'])!="") {
	header("Location: dashboard.php");
	exit;
}

if (isset($_POST['btn-login'])) {

	$email = strip_tags($_POST['email']);
	$password = strip_tags($_POST['password']);

	$email = $conn->real_escape_string($email);
	$password = $conn->real_escape_string($password);

	$query = $conn->query("SELECT user_id, email, password FROM admin WHERE email='$email'");
	$row=$query->fetch_array();

	$count = $query->num_rows; // if email/password are correct returns must be 1 row

	if (password_verify($password, $row['password']) && $count==1) {
		$_SESSION['userSession'] = $row['user_id'];
		header("Location: dashboard.php");
	} else {
		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; Invalid Username or Password !
				</div>";
	}
	$conn->close();
}
?>
