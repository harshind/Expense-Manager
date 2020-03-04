<?php 
session_start();
require "../includes/common.php";
echo $_SESSION ['id'];
echo $_SESSION ['email'];
$id = $_SESSION ['id'];
$title = mysqli_real_escape_string($con,$_POST['title']);
$date = mysqli_real_escape_string($con,$_POST['date']);
$person = $_POST['select'];
$amt_spent =mysqli_real_escape_string($con,$_POST['amt_spent']);
$target_dir = "../img/";
$file_name =basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $insert_expense_query = "Insert into expense(id,Title,date,amt_spent,person,upload_bill)values('$id','$title','$date','$amt_spent','$person','$file_name')" or die($insert_expense_query);
		$insert_expense_query_result =mysqli_query($con, $insert_expense_query) or die(mysqli_error($con));
        //$insert_bill_query = "Insert into expense(upload_bill)values('$file_name')" or die($insert_bill_query);
		//$insert_bill_query_result =mysqli_query($con, $insert_bill_query) or die(mysqli_error($con));
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

?>