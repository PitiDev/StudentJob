<?php
require '../../config.php';

$s_id = $_GET ['s_id'];

$sql = " DELETE FROM service WHERE s_id = '$s_id'";
$query = "SELECT * FROM `service` WHERE s_id = '$s_id'" ;
$res = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($res);
if($data['s_img'] != ''){
	try{
		unlink($data['s_img']);
	} catch (Exception $e) {
       echo 'Caught exception in drink delete image: ' . $e->getMessage();
	}
}

$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: ../service.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($conn);
}

mysqli_close($conn);

 ?>
