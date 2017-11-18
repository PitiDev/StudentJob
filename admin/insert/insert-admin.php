<?php

require '../../config.php';

$uname = strip_tags($_POST['username']);
$email = strip_tags($_POST['email']);
$upass = strip_tags($_POST['password']);

$uname = $conn->real_escape_string($uname);
$email = $conn->real_escape_string($email);
$upass = $conn->real_escape_string($upass);
$uploadOk = 1;
	$hashed_password = password_hash($upass, PASSWORD_DEFAULT); 
if($uploadOk == 1){


$query = "INSERT INTO admin(username,email,password) VALUES('$uname','$email','$hashed_password')";

	$result = mysqli_query($conn, $query);

	if ($result) {
		echo "ເພືີ່ເມນູອາຫານສຳເລັດ";
		header("location: ../user.php");
		exit();
	}
	else{
		echo "ເພີ່ມເມນູບໍ່ໄດ້". mysqli_error($conn);
	}

}

?>
