<?php
include_once ("db.php");
	
	if (isset($_POST['delete'])){
		$tombid=$_POST['tid'];

		$tomb = "SELECT * from tbl_tomb WHERE tomb_id = '$tombid' ";
		$result = mysqli_query($conn, $tomb);
		foreach ($result as $row) {
			$pid = $row['plot_id'];			
		}
		$stat = "Available";
		$updatePlot = "UPDATE tblplot SET status = '$stat' WHERE plot_id = '$pid' ";
		$conn -> query($updatePlot) or die($conn->error);
		

		$sqlDelTomb = "DELETE FROM tbl_tomb WHERE tomb_id = '$tombid' ";
		$conn -> query($sqlDelTomb) or die ($conn->error);
		echo header("Location: ../mscv2/map.php");
	}
		

	mysqli_close($conn);
		
?>