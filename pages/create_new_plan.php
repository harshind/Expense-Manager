<?php 
require '../includes/common.php';
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
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-custom2">
					<h4><center>Create New Plan</center> </h4>
				</div>
						<div class="panel-body">
							<form method="Post" action="plan_details.php">
								<div class="form-group">
									<label for="budget">Initial Budget</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="budget" placeholder="Initial Budget (Ex. 4000)"><br>
								</div>
								<div class="form-group">
									<label for="people">How many people you want to add in your group?</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="people" placeholder="No. of people"><br>
								</div>
								<button class="btn btn-block button">Next</button>
							</form><br>
						</div>
					</div>
				</div>
			</div>
		</body>
