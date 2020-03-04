<?php
session_start();
require '../includes/common.php';
$id = $_SESSION['id'];
$people = $_SESSION['people'];
$budget = $_SESSION['budget'];
$title = $_POST['title'];
$from =$_POST['from'];
$to = $_POST['to'];
$num_person =$people;
$count =1;
$str ="";
while ($num_person>0) { 
	$str =$str.$_POST['person'.$count].',';
	$count+=1;
	$num_person -=1;
	}
echo "$str";
//echo "person";<?php echo  $count ; 
$insert_plan_query = "Insert into budgetplan(id,Title, start_date,end_date,Budget,People,people_name)values('$id','$title','$from','$to','$budget','$people','$str')" or die($inserT_plan_query);
$insert_plan_query_result =mysqli_query($con, $insert_plan_query) or die(mysqli_error($con));
header("location:home.php");	
?>

