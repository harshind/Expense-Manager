<?php 
	session_start();
	if (!isset($_SESSION['id'])) { 
		header("location:login.php");
	 
	}
	$_SESSION ['email'];
	$id =$_SESSION ['id'];
	require '../includes/common.php';
	$select_query =" Select id, Title, start_date,end_date,Budget,People, people_name from budgetplan where id ='$id'";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total = mysqli_num_rows($select_query_result);
	$select_expense_query =" Select amt_spent,person from expense where id ='$id'";
	$select_expense_query_result = mysqli_query($con, $select_expense_query) or die(mysqli_error($con));
	$expense =0;
	$cou =0;
	
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
	<?php include '../includes/header.php'; ?>
	<div id="content">
		<div  class="container-fluid decor_bg" id="content">
			<div class="row ">
			<?php while($row = mysqli_fetch_array($select_query_result)) { 
				$remaining_amt =$row['Budget']- $expense;
				$cou = $row['People'];
				?>
			<div class="col-sm-6 col-md-5 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-custom2">
					<h4><center><?php echo $row['Title'];?><span class="glyphicon glyphicon-user" style="float: right;"><?php echo $row['People']; ?></span></center> </h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-5">Initial Budget</div>
							<div class="col-xs-offset-2 col-xs-5 " style="float: right;"><?php echo $row['Budget'];?></div>
						</div>
						<div class="row">
							<?php 
								while($row2 = mysqli_fetch_array($select_expense_query_result)) { 
		 							$row2['amt_spent'];
		 							$row2['person'];
									$expense += $row2['amt_spent'];?>
							<div class="col-xs-5"><?php echo $row2['person']; ?></div>
							<div class="col-xs-5 col-xs-offset-2"><?php echo $row2['amt_spent'];?></div>
							<?php } ?>
						</div>
						<div class="row">
							<div class="col-xs-5">Total Amount Spent</div>
							<div class="col-xs-5 col-xs-offset-2"><?php echo $expense;?></div>
						</div>
						<div class="row">
							<div class="col-xs-5">Remaining Amount</div>
							<div class="col-xs-5 col-xs-offset-2"><?php echo $row['Budget']- $expense;?></div>
						</div>

						<div class="row">
							<div class="col-xs-5">Individual Shares</div>
							<div class="col-xs-5 col-xs-offset-2"><?php echo $expense / $cou;?></div>
						</div>
						<div class="row">
							<div class="col-xs-5"><?php echo $row2['person']; ?></div>
							<div class="col-xs-5 col-xs-offset-2"><?php echo $row2['amt_spent'];?></div>
							<?php } ?>
						</div>
						<div class="text-center">
							<a href="view_plan.php" ><button class="btn btn-outline-info btn-lg "> Go Back</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
