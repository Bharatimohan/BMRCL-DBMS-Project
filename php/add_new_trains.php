<?php

include("connect.php");

$con = OpenCon();

session_start();

if(isset($_POST['submit']))
{
	$t_id = $_POST['t_id'];
	$r_id = $_POST['r_id'];
	$a_id = $_SESSION['admin_id'];

	$sql = "INSERT INTO `train`(`train_id`, `admin_id`, `route_id`) VALUES ('$t_id','$a_id','$r_id')";

	if (mysqli_query($con, $sql)) {
		header('Location: admin_manage_trains.php');
		exit;
	} else {
		$_SESSION['error'] = mysqli_error($con);
		header('Location: admin_manage_trains.php');
	}
}

CloseCon($con);

?>