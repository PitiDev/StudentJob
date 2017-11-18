<?php   require '../../config.php' ?>

<?php

$s_id = $_POST['s_id'];
$s_name = $_POST['s_name'];
$s_post = $_POST['s_post'];
// $s_img = $_POST['s_img'];


$query = "UPDATE service SET s_name='$s_name', s_post='$s_post' WHERE s_id='$s_id'";

$result = mysqli_query($conn, $query);
if ($result) {
  header( 'Location: ../service.php' ) ;
}else {
  echo "ຜິດພາດ" .mysqli_error($conn);
}
mysqli_close($conn);



?>
