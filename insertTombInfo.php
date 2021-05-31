<?php
include_once ("db.php");
	
	if (isset( $_POST['submitFromPlot']) ){

		$plot_id=$_POST['input-plotid'];
		$tomb_number=$_POST['input-tombNumber'];
		$status=$_POST['input-tombStatus'];


		$sqlSelect = "SELECT plot_id FROM tblplot WHERE plot_id = '$plot_id' ";
		$sqlresult = mysqli_query($conn, $sqlSelect);
		foreach ($sqlresult as $row_result ) {
			$pid = $row_result['plot_id'];

			if ($pid == $plot_id) {
				$sqlSelectUpdate = "UPDATE tblplot SET status = '$status' WHERE plot_id = '$plot_id' ";
				$conn -> query($sqlSelectUpdate) or die ($conn->error);
			}
			
		}


		
		if (!empty($_POST)) {

			// $plot_id=$_POST['input-tombPlotId'];
			$sql = "INSERT INTO tbl_tomb VALUES (null,'$tomb_number',null, '$plot_id', null, '$status' )";
			$conn -> query($sql) or die ($conn->error);
			echo header("Location: ../mscv2/map.php");
		}

	}else if (isset($_POST['deleteFromPlot'])){
		$plotid=$_POST['input-plotid'];

		$sqlDelPlot = "DELETE FROM tblplot WHERE plot_id = '$plotid' ";
		$conn -> query($sqlDelPlot) or die ($conn->error);
		echo header("Location: ../mscv2/map.php");
	}
		

	mysqli_close($conn);
		
?>