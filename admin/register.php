
<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
	header("Location: user.php");
}
require '../config.php';

if(isset($_POST['btn-signup'])) {

	$uname = strip_tags($_POST['username']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);

	$uname = $conn->real_escape_string($uname);
	$email = $conn->real_escape_string($email);
	$upass = $conn->real_escape_string($upass);

	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

	$check_email = $conn->query("SELECT email FROM admin WHERE email='$email'");
	$count=$check_email->num_rows;

	if ($count==0) {

		$query = "INSERT INTO admin(username,email,password) VALUES('$uname','$email','$hashed_password')";

		if ($conn->query($query)) {
			$msg = "<div class='alert alert-success'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
					</div>";
		}else {
			$msg = "<div class='alert alert-danger'>
						<span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
					</div>";
		}

	} else {


		$msg = "<div class='alert alert-danger'>
					<span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
				</div>";

	}

	$conn->close();
}
?>

   <link rel="stylesheet" type="text/css" href="style_login.css">
   <link rel="stylesheet" type="text/css" href="lao/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.main.css">
<!--
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
<div class="signin-form">
	<div class="container">
       <form class="form-signin" method="post" id="register-form">
        <h2 class="form-signin-heading" style="text-align:center">ລົງທະບຽນເຂົ້າສູ່ລະບົບ</h2><hr />

        <?php
		if (isset($msg)) {
			echo $msg;
		}
		?>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>

        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>

     	<hr />

        <div class="form-group">
            <button type="submit" class="btn btn-danger" name="btn-signup">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp;ລົງທະບຽນ
			</button>
            <a href="index.php" class="btn btn-info" style="float:right;">ເຂົ້າສູ່ລະບົບ</a>
        </div>
      </form>
    </div>
</div>

</body>
</html>
