<?php


session_start();

require '../config.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $conn->query("SELECT * FROM admin WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$conn->close();

?>
