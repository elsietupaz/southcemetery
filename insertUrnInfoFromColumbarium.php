<?php
include_once ("db.php");

 
	$columbarium_id=$_POST['input-columbariumid'];
	$urn_number=$_POST['input-urnNumber'];
	$urn_size=$_POST['input-urnSize'];
	$urn_price=$_POST['input-urnPrice'];
	$status=$_POST['input-urnStatus'];



	$sql = "INSERT INTO tbl_urn VALUES (null,'$urn_number','$urn_size','$urn_price', '$columbarium_id', '$status' )";
	$conn -> query($sql) or die ($conn->error);
	echo header("Location: ../mscv2/map.php");


	mysqli_close($conn);
		
?>