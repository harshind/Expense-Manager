<?php 

	session_start();
	if (!isset($_SESSION['id'])) { 
		header("location:index.php");
	 
	}
	//echo $_SESSION ['email'];
	//echo $_SESSION ['id'];
	$id =$_SESSION ['id'];
	require '../includes/common.php';
	$select_query =" Select id, Title, start_date,end_date,Budget,People from budgetplan where id = '$id'";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total = mysqli_num_rows($select_query_result);
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
<body style="background-color: rgb(224,255,255)">
	<?php include '../includes/header.php'; 
	if ($total <= 0) { ?>
	<div id="content">
		<div class="container">
			<h3>You don't have any active plans</h3>
			<center>
				<div class="box">
					<style type="text/css">
						.glyphicon.glyphicon-plus-sign {
    							font-size: 30px;

						}
					</style>
					<div>
						<center> 
							<a href="create_new_plan.php" style="padding-left: 5px"><span class="glyphicon glyphicon-plus-sign"></span>Create a New Plan</a>
						</center>
					</div>
				</div>
			</center>
		</div>		
	</div><?php } else { ?>
	<div  class="container decor_bg" id="content">
		<h1>Your plans</h1><br>
		<div class="row ">
		<?php while($row = mysqli_fetch_array($select_query_result)) { ?>
			<div class="col-sm-12 col-md-4 ">
				<div class="panel panel-default">
					<div class="panel-heading panel-heading-custom2">
					<h4><center><?php echo $row['Title'];?><span class="glyphicon glyphicon-user" style="float: right;"><?php echo $row['People']; ?></span></center> </h4>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-4">Budget</div>
							<div class="col-xs-6 col-xs-offset-2"><?php echo $row['Budget']."   ";?></div>
						</div>
						<div class="row">
							<div class="col-xs-4">Date</div>
							<div class="col-xs-6 col-xs-offset-2"><?php echo $row['start_date']."-".$row['end_date']; ?></div>
						</div>
						<a href="view_plan.php" style="text-decoration: none;"><button  class="btn btn-block btn-outline-success button"  >View Plan</button></a>
					</div>
				</div>
			</div>
		<?php } ?>
		</div >
		<style type="text/css">
			.glyphicon.glyphicon-plus-sign {
    				font-size: 50px;
			}
		</style>
		<div class="new-plan">
			<a href="create_new_plan.php" style="float: right;" class="btn btn-lg ">
				<span class="glyphicon glyphicon-plus-sign "></span>
			</a>
		</div>
	</div>
	<?php }?>
	<?php 	include '../includes/footer.php'; ?>
		
</body>
</html>