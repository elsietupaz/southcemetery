<?php
include_once ("db.php");
	
	if (!empty($_POST)) {
		$area_number_colum=$_POST['modalAreaNumberColum'];
		$lot_number_colum=$_POST['modalLotNumberColum'];
		$size_colum=$_POST['modalColumbariumSize'];
		$latitude_colum=$_POST['modalLatColum'];
		$longitude_colum=$_POST['modalLngColum'];
		$type=$_POST['typeColumbarium'];


		$sql = "INSERT INTO tblcolumbarium_lot VALUES (null,'$area_number_colum','$lot_number_colum','$size_colum','$latitude_colum', '$longitude_colum', '$type')";
		$conn -> query($sql) or die ($conn->error);
		echo header("Location: ../mscv2/map.php");
	}


	mysqli_close($conn);
		
?>