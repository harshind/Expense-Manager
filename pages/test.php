<?php 
	//session_start();
	if (!isset($_SESSION['id'])) { 
		header("location:login.php");
	 
	}
	$id =$_SESSION ['id'];
	$_SESSION['email'];
	require '../includes/common.php';
	$select_query =" Select id, Title, start_date,end_date,Budget,People,people_name from budgetplan where id ='$id'";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total = mysqli_num_rows($select_query_result);
	$select_expense_query =" Select amt_spent from expense where id ='$id'";
	$select_expense_query_result = mysqli_query($con, $select_expense_query) or die(mysqli_error($con));
	$expense =0;
	while($row = mysqli_fetch_array($select_expense_query_result)) { 
		$expense += $row['amt_spent'];
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
	<link rel="stylesheet" type="text/css" href="../css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
	<?php// include '../includes/header.php'; ?>
	<div id="content">
				<div class="col-sm-12 col-md-4 " style="float: right;">
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-custom2">
							<h4><center>Add New Expense</center> </h4>
						</div>
					<div class="panel-body">
							<form method="Post" action="expense_submit.php" enctype="multipart/form-data" >
								<div class="form-group">
									<label for="title">Title</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="title" placeholder="Expense Name"><br>
								</div>
								<div class="form-group">
									<label for="date">Date</label><br>
									<input type="date" class="form-control col-xs-12 rounded" name="date"><br>
								</div>
								<div class="form-group">
									<label for="amt_spent">Amount Spent</label><br>
									<input type="text" class="form-control col-xs-12 rounded" name="amt_spent" placeholder="Amount Spent"><br>
								</div>
								<div class="form-group">
									<?php while($row = mysqli_fetch_array($select_query_result)) { 
											$str = $row['people_name'];
											$x = explode(",", $str);
											$count =$row['People'];
										}
									?>
									<select class="form-control col-xs-12 rounded" name="select">
										<option>Choose</option>
									<?php 
										$count1 =0;
										while($count1 !=$count) { ?>
										<option value="<?php echo $x[$count1];?>">
											<?php echo $x[$count1];
											?>	
										</option>
										<?php $count1+=1; } ?>
									</select>

								</div>
								<div class="form-group">
									<label for="bill">Upload Bill</label><br>
									<input type="file" class="form-control col-xs-12 rounded" name="fileToUpload" ><br><br>
									<input type="submit" class="btn btn-outline-success btn-block button" value="Add"></input>
								</div>
							</form><br>
						</div>
				</div>
			</div>
		</div>
	</div>
	<?php //include '../includes/footer.php'; ?>
</body>
</html>