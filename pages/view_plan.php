<?php 
	session_start();
	if (!isset($_SESSION['id'])) { 
		header("location:login.php");
	 
	}
	$id =$_SESSION ['id'];
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
	<?php include '../includes/header.php'; ?>
	<div id="content">
		<div  class="container decor_bg" id="content">
			<div class="row ">
				<a href="expense1.php" class="col-xs-offset-2"><button class="btn btn-outline-info btn-lg"> Expense Distribution</button></a>
			<?php while($row = mysqli_fetch_array($select_query_result)) { 
				$remaining_amt =$row['Budget']- $expense;
				?>
			<div class="col-sm-12 col-md-4 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-custom2">
						<h4><center><?php echo $row['Title'];?><span class="glyphicon glyphicon-user" style="float: right;"><?php echo $row['People']; ?></span></center> </h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-4">Budget</div>
							<div class="col-xs-6 col-xs-offset-2"><?php echo $row['Budget'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-4">Remaining Amount</div>
							<div class="col-xs-6 col-xs-offset-2"><?php echo $remaining_amt;?></div>
						</div>
						<div class="row">
							<div class="col-xs-4">Date</div>
							<div class="col-xs-6 col-xs-offset-2"><?php echo $row['start_date']."-".$row['end_date'];?></div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		<div  class="container decor_bg" >
			<div class="row ">
				<div >
					<?php include "test_plan.php"; ?>
				</div>
				<div>
					<?php include "test.php";?>
				</div>
			</div>
		</div>
	<?php include '../includes/footer.php'; ?>
</body>
</html>