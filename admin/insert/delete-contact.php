<?php
require '../../config.php';

$ct_id = $_GET ['ct_id'];

$sql = " DELETE FROM contact WHERE ct_id = '$ct_id'";
$result = mysqli_query($conn, $sql);

if ($result) {
	header("location: ../contact.php");
}
else{

	echo "ລົບບໍ່ໄດ້". mysqli_error($conn);
}

mysqli_close($conn);

 ?>
