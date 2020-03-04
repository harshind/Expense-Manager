<?php
/*session_start();
echo $_SESSION ['email']; 
require '../includes/common.php';
if (isset($_SESSION['email'])) {   
	header('location: home.php'); 
} */

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	.btn_style{
    		
    	}
    </style>
	
</head>
<body>
	<?php 
	include '../includes/header.php';
	?>
    <div  class="container-fluid decor_bg" id="content">
		<div class="row ">
			<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
				<h2>Sign Up</h2>
				<form action="signup_script.php" method="POST">
					<div class="form-group">
						<label for="name">Name</label><br>
						<input type="text" class="form-control col-xs-12 rounded input-lg" name="name" placeholder="Name" required="true" >
					</div>		
					<div class="form-group">
						<label for="email">Email</label><br>
						<input type="text" class="form-control col-xs-12 rounded input-lg" name="email" placeholder="Enter Valid Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="info12@internshalla.com"><br>
					</div>
					<div class="form-group">
						<label for="password">Password</label><br>
						<input type="text" class="form-control col-xs-12 rounded input-lg" name="password" placeholder="Password (Min 6 characters)" required="true"
						pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br>
					</div>
					<div class="form-group">
						<label for="phone">Phone Number</label><br>
						<input type="text" class="form-control col-xs-12 rounded input-lg" name="phone" placeholder="Enter Valid Phone Number(Ex 8448444853)" required="true">
					</div><br><br><br>
					<div class="form-group">
						<button type="submit" class="btn  btn-block button ">Sign Up</button><br>
					</div>
				</form>
			</div>
		</div>	
	</div>
</div>
	<?php 
	include '../includes/footer.php';
	?>
</body>
</html>