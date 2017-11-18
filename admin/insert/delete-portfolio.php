<?php
require '../../config.php';

$p_id = $_GET ['p_id'];

$sql = " DELETE FROM portfolio WHERE p_id = '$p_id'";
$query = "SELECT * FROM `portfolio` WHERE p_id = '$p_id'" ;
$res = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($res);
if($data['p_img'] != ''){
	try{
		unlink($data['p_img']);
	} catch (Exception $e) {
       echo 'Caught exception in drink delete image: ' . $e->getMessage();
	}
}

$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: ../portfolio.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($conn);
}

mysqli_close($conn);

 ?>
