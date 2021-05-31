<?php
include_once ("db.php");


	// if(isset($_POST['addPrice'])){
		$lotname=$_POST['input-lotName'];
		$lotprice=$_POST['input-lotPrice'];
		$lotstatus=$_POST['tombStatus'];


		$sql = "INSERT INTO tbl_lot VALUES (null,'$lotname','$lotprice','$lotstatus')";
		$lots = $conn -> query($sql) or die ($conn->error);

		echo header("Location: ../msc/map.php");

	// }

	mysqli_close($conn);
?>  