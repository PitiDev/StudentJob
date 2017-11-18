<?php
require '../../config.php';

$user_id = $_GET ['user_id'];

$sql = " DELETE FROM user WHERE user_id = '$user_id'";
$query = "SELECT * FROM `user` WHERE user_id = '$user_id'" ;
$res = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($res);
if($data['user_img'] != ''){
	try{
		unlink($data['user_img']);
	} catch (Exception $e) {
       echo 'Caught exception in drink delete image: ' . $e->getMessage();
	}
}

$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: ../student-cv.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($conn);
}

mysqli_close($conn);

 ?>
