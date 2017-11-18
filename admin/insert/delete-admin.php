<?php
require '../../config.php';

$user_id = $_GET ['user_id'];

$sql = " DELETE FROM admin WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: ../user.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($conn);
}

mysqli_close($conn);

 ?>
