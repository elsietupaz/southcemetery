<?php

	include_once ("db.php");


	if(isset($_POST['delete'])){
		$lot_number=$_POST['lot'];

		$sql = "DELETE FROM tbldeceased_info WHERE lot_number = '$lot_number' ";
		$conn -> query($sql) or die ($conn->error);

		$sqlStatus = "DELETE FROM tbl_lot WHERE lotname = '$lot_number' ";
		$conn -> query($sqlStatus) or die ($conn->error);

		echo header("Location: map.php");
	}

	mysqli_close($conn);
	
?>