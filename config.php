<?php

$conn = mysqli_connect("localhost","root","","modernjob");
$conn->set_charset("utf8");

if (mysqli_connect_error()) {
  echo "Not Connect Database". mysqli_connect_error();
}

 ?>
