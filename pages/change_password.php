<?php 
	require '../includes/common.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ctrl Budget | Change Password</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
	<?php include '../includes/header.php'; ?>
	<div id="content">
		<div  class="container-fluid decor_bg" style="float: right;">
			<div class="container ">
				<div class="col-sm-12 col-md-5 col-md-offset-3 ">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4><center>Change Password</center> </h4>
						</div>
						<div class="panel-body">
							<form action="change_pswd_submit.php" method="post">
								<div class="form-group">
									<label for="old_password">Old Password</label>
									<input type="text" name="old_password" class="form-control" placeholder="Old Password">
								</div>
								<div class="form-group">
									<label for="new_password">New Password</label>
									<input type="text" name="new_password" class="form-control" placeholder="New Password (Min 6 characters)">
								</div>
								<div class="form-group">
									<label for="cnf_new_password">Confirm New Password</label>
									<input type="text" name="cnf_new_password" class="form-control" placeholder="Re-type New Password">
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-block btn" name="change-password" value="Change">
								</div>
			</form>
		</div>