<?php
include_once ("db.php");


		$crypt_number=$_POST['publicLawnCryptNumber'];
		$crypt_price=$_POST['publicLawnCryptPrice'];
		$crypt_spacetype=$_POST['publicLawnCryptType'];
		$mausoleum_id=$_POST['publiclawnmausoleumid'];
		$status=$_POST['publicLawnCryptStatus'];



		$sql = "INSERT INTO tbl_crypt VALUES (null,'$crypt_number',null,'$crypt_price',null,'$crypt_spacetype', '$mausoleum_id', '$status' )";
		$conn -> query($sql) or die ($conn->error);
		echo header("Location: ../mscv2/map.php");


		mysqli_close($conn);

	
		
?>