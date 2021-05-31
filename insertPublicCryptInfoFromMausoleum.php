<?php
include_once ("db.php");


		$crypt_number=$_POST['publicCryptNumber'];
		$crypt_price=$_POST['publicCryptPrice'];
		$crypt_location=$_POST['publicCryptLocation'];
		$crypt_spacetype=$_POST['publicCryptType'];
		$mausoleum_id=$_POST['publicmausoleumid'];
		$status=$_POST['publicCryptStatus'];



		$sql = "INSERT INTO tbl_crypt VALUES (null,'$crypt_number',null,'$crypt_price','$crypt_location','$crypt_spacetype', '$mausoleum_id', '$status' )";
		$conn -> query($sql) or die ($conn->error);
		echo header("Location: ../mscv2/map.php");


		mysqli_close($conn);

	
		
?>