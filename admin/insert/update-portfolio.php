<?php   require '../../config.php' ?>

<?php

$p_id = $_POST['p_id'];
$p_name = $_POST['p_name'];
$p_post = $_POST['p_post'];
// $p_img = $_POST['p_img'];


$query = "UPDATE portfolio SET p_id='$p_id', p_name='$p_name', p_post='$p_post' WHERE p_id='$p_id'";

$result = mysqli_query($conn, $query);
if ($result) {
  header( 'Location: ../portfolio.php' ) ;
}else {
  echo "ຜິດພາດ" .mysqli_error($conn);
}
mysqli_close($conn); 

?>
