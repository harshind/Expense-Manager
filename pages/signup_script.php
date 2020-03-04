<?php 
session_start();
require '../includes/common.php';
$email =mysqli_real_escape_string($con,$_POST['email']);
$name = mysqli_real_escape_string($con,$_POST['name']);
$phone =mysqli_real_escape_string($con, $_POST['phone']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$str =md5($password);
$select_query =" Select id from users where email ='$email'";
$select_query_result = mysqli_query($con, $select_query) or 
die(mysqli_error($con));
if (mysqli_num_rows($select_query_result) > 0) {
	echo "<script> alert('Email id already exists')</script>";
}else{
	$user_registration_query = "Insert into users(name,email,password,phone)values ( '$name','$email','$str', '$phone')" or die($user_registration_query);
	$user_registration_submit= mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
	$_SESSION ['email'] = $email;
	$_SESSION ['id'] = mysqli_insert_id($con);
	header("location:home.php");
}

//echo "User inserted Successfully";

?>