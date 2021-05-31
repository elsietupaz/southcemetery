<?php
include_once ("db.php");
	
	if (!empty($_POST)) {
		$area_name=$_POST['modalAreaName'];
		$plot_number=$_POST['modalPlotNumber'];
		$plot_size=$_POST['modalPlotSize'];
		$plot_price=$_POST['modalPlotPrice'];
		$latitude=$_POST['modalLat'];
		$longitude=$_POST['modalLng'];
		$type=$_POST['typePlot'];
		$status=$_POST['statusPlot'];


		$sql = "INSERT INTO tblplot VALUES (null,'$area_name','$plot_number','$plot_size','$plot_price','$latitude', '$longitude', '$type', '$status')";
		$conn -> query($sql) or die ($conn->error);
	}


	mysqli_close($conn);
		
?>