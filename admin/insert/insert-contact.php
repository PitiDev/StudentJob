<?php

require '../../config.php';

$ct_name = html_entity_decode($_POST["name"]);
$ct_email = $_POST["email"];
$ct_phone = $_POST["phone"];
$ct_post = $_POST["post"];
$uploadOk = 1;


if($uploadOk == 1){

	$query = "INSERT INTO `contact` (`ct_id`, `ct_name`, `ct_email`,`ct_phone`,`ct_post`) VALUES (NULL, '"
   . $ct_name ."', '$ct_email','$ct_phone','$ct_post')";

	$result = mysqli_query($conn, $query);

	if ($result) {
		echo "ເພືີ່ເມນູອາຫານສຳເລັດ";
		header("location: ../../sucess.php");
		exit();
	}
	else{
		echo "ເພີ່ມເມນູບໍ່ໄດ້". mysqli_error($conn);
	}

}

?>
