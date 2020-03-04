<?php 
	require '../includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<body>
	<?php
        include '../includes/header.php';
    ?>

    <div id="content">
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row ">
                <div class="col-md-4 col-md-offset-4">
					<div  class="panel panel-default">
						<div class="panel-heading panel-style">
							<h4><center>Login</center> </h4>
						</div>
						<div class="panel-body">
							<form method="Post" action="login_submit.php">
								<div class="form-group">
									<label for="email">Email:</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="email" placeholder="Email"><br>
								</div>
								<div class="form-group">
									<label for="password">Password:</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="password" placeholder="Password"><br>
								</div>
								<button class="btn btn-block btn-style">Login</button>
							</form><br>
							<div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
        include '../includes/footer.php';
    ?>
</body>
</html>