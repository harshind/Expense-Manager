<?php 
	session_start();
	$_SESSION ['email'];
	$id =$_SESSION ['id'];
	require '../includes/common.php';
	$select_expense_query =" Select upload_bill from expense where id ='$id'";
	$select_expense_query_result = mysqli_query($con, $select_expense_query) or die(mysqli_error($con));
	echo "<table>";
   	echo "<tr>";
   
   	while($row=mysqli_fetch_array($select_expense_query_result)){
   	echo "<td>"; 
   	echo '<img src="data:image/jpeg ;base64,'.base64_encode($row['upload_bill'] ).'" height="200" width="200"/>';
   	echo "<br>";
   	?><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a> <?php
   	echo "</td>";
   	} 
   	echo "</tr>";
   
   	echo "</table>";
  }
?>