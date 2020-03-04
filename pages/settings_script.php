<?php 
	session_start();
	require 'includes/common.php';
	if (!isset($_SESSION['email'])) { 
		header("location:index.php");
	 
	}
	$password = mysqli_real_escape_string($_POST['old-password']);
	$new_password = mysqli_real_escape_string($_POST['new-password']);
	$re_type_new_password = mysqli_real_escape_string($_POST['re-type-new-password']);
	$user_id = $_SESSON['id'];
	$select_query ="Select password from users where id= '$user_id'";
	$select_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($select_result);
	if ($new_password != $re_type_new_password) {
		echo "Re type the password";
	} elseif (strlen($new_password)< 8) {
		echo "Password too Short";
	} elseif ($password == $row['password'] ) {
		$update_query = "Update users SET password = '$new_password' WHERE id = '$user_id'";
		$update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
		echo "Password Updated";
	} else {
		header('location:settings.php');
	}
		
?>