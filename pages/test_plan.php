
<?php 
	//session_start();
	if (!isset($_SESSION['id'])) { 
		header("location:login.php");
	 
	}
	$id = $_SESSION ['id'];
	require '../includes/common.php';
	$select_query =" Select id, Title, start_date,end_date,Budget,People,people_name from budgetplan where id ='$id'";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total = mysqli_num_rows($select_query_result);
	$select_expense_query =" Select amt_spent,Title,date,person,upload_bill from expense where id ='$id'";
	$select_expense_query_result = mysqli_query($con, $select_expense_query) or die(mysqli_error($con));
	$expense =0;
	//echo mysqli_num_rows($select_expense_query_result);
		//echo $row;
	//}
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
	<?php //include '../includes/header.php'; ?>	
				<div class=" col-sm-12 col-md-6 col-lg-3" >
					<?php while($row = mysqli_fetch_array($select_expense_query_result)) { 
					$expense += $row['amt_spent']; ?>
					<div class="panel panel-default">
						<div class="panel-heading panel-heading-custom2">
							<h4><center><?php echo $row['Title'];?></center> </h4>
						</div>
					<div class="panel-body">
						<?php //	while($row = mysqli_fetch_array($select_expense_query_result)) { ?>
						<div class="row">
							<div class="col-xs-4">Amount</div>
							<div class="col-xs-6 col-xs=offset-2"><?php echo $row['amt_spent'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-4">Paid by</div>
							<div class="col-xs-6 col-xs=offset-2"><?php echo $row['person'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-4">Paid on</div>
							<div class="col-xs-6 col-xs=offset-2"><?php echo $row['date'];?></div>
						</div>
						<?php if (!isset($row['bill'])) { ?>                       
							<p><a href="#" role="button" class="btn btn-primary btn-block">You Don't have bill</a></p><br>                                 
						<?php } else { 
								echo '<a href="show_bill.php" class="btn btn-block btn-success" >Show Bill</a><br>';
					  	}?>
					  	
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
