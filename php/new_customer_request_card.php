<?php

include("connect.php");

$con = OpenCon();

session_start();

if(isset($_POST['submit']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$username = $_POST['user_id'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$add_new_request = mysqli_query($con,"INSERT INTO `user`(`address`, `phone_no`, `Fname`, `Lname`, `password`, `user_id`) VALUES ('$address','$phone','$fname','$lname','$password','$username')");
	$cust_id = mysqli_insert_id($con);
	$smartcard_no = rand(1111111111,1999999991);
	$add_new_card = mysqli_query($con,"INSERT INTO `smartcard`(`Scard_no`,`user_id`) VALUES ('$smartcard_no','$username')");
	$_SESSION['request_sent'] = "Your request has been sent successfully, Login to check the status";
	header("location: ../login.php");
}
CloseCon($con);
?>