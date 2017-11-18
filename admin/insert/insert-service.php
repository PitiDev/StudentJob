<?php

require '../../config.php';

$s_name = html_entity_decode($_POST["name"]);
$s_post = $_POST["post"];

$target_dir = "../../img/uploads/";

$s_img =  md5(basename($_FILES["img_menu"]["name"]).microtime()).basename($_FILES["img_menu"]["name"]);
$target_file = $target_dir.$s_img;
$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img_menu"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if($uploadOk == 1){
    if (move_uploaded_file($_FILES["img_menu"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img_menu"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }


	$query = "INSERT INTO `service` (`s_id`, `s_name`, `s_post`, `s_img`) VALUES (NULL, '" . $s_name ."', '$s_post', '$target_file')";
	$result = mysqli_query($conn, $query);

	if ($result) {
		echo "ເພືີ່ເມນູອາຫານສຳເລັດ";
		header('Location: '.$_SERVER['HTTP_REFERER']);
		exit();
	}
	else{
		echo "ເພີ່ມເມນູບໍ່ໄດ້". mysqli_error($conn);
	}

}

?>
