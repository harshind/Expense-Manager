<?php 
// common.php is a db connection file
require 'includes/common.php';
if (isset($_SESSION['email'])) {   
    header('location: ../Expense-Manager/pages/home.php'); 
} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Ctrl Budget</title>
	<link rel="icon" href="img/store.png" type="img/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../Final Project/css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php include 'includes/header.php'; ?>
	<div id="banner_image">
        <div class="container " style="padding-left: 100px">
        	<div id="banner_content" >
                We help you control your budget <br><a class="btn btn-success btn-lg active" href="../Final Project/pages/signup.php">Start Today</a>
            </div>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>  
</body>
</html>