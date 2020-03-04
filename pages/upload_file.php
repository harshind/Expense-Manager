<?php

function GetImageExtension($imagetype){
	if (empty($imagetype)) return false;
	switch ($imagetype) {
		case 'image/bmp': return '.bmp';
		case 'image/gif': return '.gif';
		case 'image/jpeg': return '.jpg';
		case 'image/png': return '.png';
		default: return false;
	}
}
if​ (!​empty​($_FILES[​"uploadedimage"​][​"name"​])) { 
	$file_name=$_FILES[​"uploadedimage"​][​"name"​]; 
	$temp_name=$_FILES[​"uploadedimage"​][​"tmp_name"​];
	$imgtype=$_FILES[​"uploadedimage"​][​"type"​]; 
	$ext= GetImageExtension($imgtype); 
	$imagename=date(​"d-m-Y"​).​"-"​.time().$ext; 
	$target_path = ​"img/"​.$imagename; 
	if​(move_uploaded_file($temp_name, $target_path)){
		 // Make a query to save data to your database. 
	} 
} 
?>