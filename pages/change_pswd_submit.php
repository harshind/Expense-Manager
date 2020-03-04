<?php 
	session_start();
	require '../includes/common.php';
	if (!isset($_SESSION['email'])) { 
		header("location:index.php");
	 
	}
	$user_id = $_SESSION['id'];
	$old_pswd = mysqli_real_escape_string($con,$_POST['old_password']);
	$new_pswd = mysqli_real_escape_string($con,$_POST['new_password']);
	$cnf_new_pswd = mysqli_real_escape_string($con,$_POST['cnf_new_password']);
	$select_query ="Select password from users where id= '$user_id'";
	$select_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$row = mysqli_fetch_array($select_result);
	if ($new_pswd != $cnf_new_pswd) {
		echo "<script>location.href='change_password.php</script>";
		echo "<script>alert('passwords don’t match')</script>";

	} elseif (strlen($new_pswd)< 6) {
		echo "<script>location.href='change_password.php</script>";
		echo "<script>alert('passwords too short')</script>";
	} elseif (md5($old_pswd) == $row['password'] ) {
		$str = md5($new_pswd);
		$update_query = "Update users SET password = '$str' WHERE id = '$user_id'";
		$update_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
		echo "<script>alert('passwords updated')</script>";
		echo "<script>location.href='../index.php'</script>";
	} else {
		header('location:change_password.php');
	}
?>
