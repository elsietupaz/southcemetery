<?php
include_once ("db.php");
	
	if (!empty($_POST)) {
		$area_number_app=$_POST['modalAreaNumberApp'];
		$lot_number_app=$_POST['modalLotNumberApp'];
		$size_app=$_POST['modalApartmentSize'];
		$latitude_app=$_POST['modalLatApp'];
		$longitude_app=$_POST['modalLngApp'];
		$type=$_POST['typeAppartment'];


		$sql = "INSERT INTO tblapartment_lot VALUES (null,'$area_number_app','$lot_number_app','$size_app','$latitude_app', '$longitude_app', '$type')";
		$conn -> query($sql) or die ($conn->error);
	}

 
	mysqli_close($conn);
		
?>