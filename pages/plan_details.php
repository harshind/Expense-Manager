<?php
session_start();
if (!isset($_SESSION['id'])) { 
		header("location:login.php");
	 
	}
$people = $_POST['people'];
$budget = $_POST['budget'];
$_SESSION['people'] = $people;
$_SESSION['budget'] =$budget;
require "../includes/common.php"; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Plan Details|Ctrl Budget</title>
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
			<div class="col-xs-12 col-md-6 col-md-offset-3">
				<form action="plan_submit.php" method="post" >
					<div class="form-group">
						<label for="title">Title</label><br>
						<input type="text" class="form-control" name="title" placeholder="Enter title (Ex: Trip to Goa)" required="true" >
					</div>
					<div class="form-inline ">	
						<div class="form-group ">
							<label for="from">From</label><br>
							 <input style="width: 292px" type="date" class="form-control " name="from" required= "true" > 
						</div>
						<div class="form-group col-lg-offset-1">
							<label for="to">To</label><br>
							 <input style="width: 292px" type="date" class="form-control " name="to" required ="true"> 
						</div>
						<div class="form-group">
							<label for="initialbudget">Initial Budget</label><br>
							<input type="text" class="form-control" name="initialbudget" value="<?php echo $budget; ?>"  size="44" disabled><br>
						</div>
						<div class="form-group col-lg-offset-1">
							<label for="people">No. of people</label><br>
							<input type="number" class="form-control" name="people"  value="<?php echo $people; ?>" disabled><br>
						</div>
					</div>
					<?php
						$num_person =$people; 
						$count =1;
						$str ='';
						while ($num_person>0) { ?>
							<div class="form-group">
								<label for="person">Person <?php echo  $count ; ?></label><br>
								<input type="text" class="form-control" name="person<?php echo $count; ?>" placeholder="Person <?php echo  $count ; ?> Name" required="true" >
							</div>
						<?php 
						$count+=1;
						$num_person -=1;
						}
					 ?>
					<input type="submit" class="btn  btn-block button" value="submit"><br>
				</form>
			</div>
		</div>
	</div>
	
	<?php 
	include '../includes/footer.php';
	?>
</body>
</html>