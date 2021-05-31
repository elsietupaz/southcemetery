<?php
include_once ("db.php");


	$mausoleum_id=$_POST['input-mausoleumid'];
	$crypt_number=$_POST['input-cryptNumber'];
	$crypt_size=$_POST['input-cryptSize'];
	$status=$_POST['input-cryptStatus'];
	// $plot_id=$_POST['input-tombPlotId'];



	$sql = "INSERT INTO tbl_crypt VALUES (null,'$crypt_number','$crypt_size',null,null,null, '$mausoleum_id', '$status' )";
	$conn -> query($sql) or die ($conn->error);
	echo header("Location: ../mscv2/map.php");


	mysqli_close($conn);
		
?>