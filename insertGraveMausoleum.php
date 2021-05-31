<?php
include_once ("db.php");
	
	if (!empty($_POST)) {
		$area_number_mau=$_POST['modalAreaNumberMau'];
		$lot_number_mau=$_POST['modalLotNumberMau'];
		$mausoleum_size=$_POST['modalMausoleumSize'];
		$mausoleum_type=$_POST['modalMausoleumType'];
		$mausoleum_price=$_POST['modalMausoleumPrice'];
		$latitude_mau=$_POST['modalLatMau'];
		$longitude_mau=$_POST['modalLngMau'];
		$type=$_POST['gravetypeMausoleum'];


		$sql = "INSERT INTO tblmausoleum_lot VALUES (null,'$area_number_mau','$lot_number_mau','$mausoleum_size','$mausoleum_type','$mausoleum_price','$latitude_mau', '$longitude_mau', '$type')";
		$conn -> query($sql) or die ($conn->error);
		
	}


	mysqli_close($conn);
		
?>