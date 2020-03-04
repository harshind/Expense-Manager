<?php 
	session_start();
	require 'includes/common.php';
	if (!isset($_SESSION['email'])) { 
		header("location:index.php");
	 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
    	.container-padding{
    		padding-top:75px;
    		padding-bottom: 25px;
    	}
    </style>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-inverse navbar-fixed-top">
		        	<div class="container">
		        		<div class="navbar-header">
		        			<button type="button" class="navbar-toggle" toggle= "collapse" data-target="#myNavbar">
		        				<span class="icon-bar"></span>
		        				<span class="icon-bar"></span>
		        				<span class="icon-bar"></span>
		        			</button>
		        			<a href="#" class="navbar-brand">Lifestyle Store</a>
		        		</div>
		        		<div class="collapse navbar-collapse" id="myNavbar">
		        			<ul class="nav navbar-nav navbar-right">
		        				<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
		        				<li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
		        				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		        			</ul>
		        		</div>
		        	</div>
		    </nav>
		</div>
	</div>
	<!--<center>-->
		<div class="container text-center container-padding">
			<div class="row">
				<h3>Change Password</h3>
				<form>
					<div class="form-group">
						<input type="text" class="from-control" name="old-password" placeholder="Old Password">
					</div>
					<div class="form-group">
						<input type="text" class="from-control" name="new-password" placeholder="New Password">
					</div>
					<div class="form-group">
						<input type="text" class="from-control" name="re-type new-password" placeholder="Re-type New Password">
					</div>
					<button class="btn btn-primary">Change</button>
				</form>
			</div>
		</div>
	<!--</center>-->
	
</body>
<?php include 'includes/footer.php' ?>
</html>