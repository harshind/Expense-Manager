<?php 
session_start();
require '../includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$str = md5($password);
$select_query =" Select id,password from users where email = '$email'";
$select_query_result = mysqli_query($con, $select_query) or 
die(mysqli_error($con));
if (mysqli_num_rows($select_query_result) == 0) {
	echo "<script>alert('The email is not registered')</script>";
} else{
	while ($row =mysqli_fetch_array($select_query_result)) {
		if ($row['password'] != $str) {
		echo "<script>alert('Wrong Password')</script>";
		} else {
		$_SESSION ['email'] =$email;
		$_SESSION ['id'] = $row['id'];
		header("location:home.php");
		}
	}
}
?>