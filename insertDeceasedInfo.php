<?php


include_once ("db.php");


$tomb_id=$_POST['idTomb'];
$latitude=$_POST['tombLatitude'];
$longitude=$_POST['tombLongitude'];

$status=$_POST['tombStatus'];
$first_name=$_POST['fname'];
$middle_name=$_POST['mname'];
$last_name=$_POST['lname'];
$year_born=$_POST['yearborn'];
$year_died=$_POST['yeardied'];
$image_name = ($_FILES["file"]["name"]);
$image = ($_FILES["file"]["tmp_name"]);


$sql = "INSERT INTO tbldeceasedinfo VALUES (null,'$tomb_id',null,null,'$first_name', ' $middle_name ' ,'$last_name','$year_born','$year_died','$latitude','$longitude', '$image_name','$status', now())";
	

$graves = $conn -> query($sql) or die ($conn->error);


	// $sqltomb = "SELECT tomb_id FROM tbl_tomb";
	// if ($tomb_id === 'tomb_id'){
	$sqlStatus = "UPDATE tbl_tomb SET status = '$status' WHERE tomb_id = '$tomb_id' ";
	$conn -> query($sqlStatus) or die ($conn->error);


	$sqlTomb = "SELECT * FROM tbl_tomb WHERE tomb_id = '$tomb_id' ";
	$results= mysqli_query($conn,$sqlTomb);
	while($rows = mysqli_fetch_assoc($results))
	{
	 	$plotid = $rows['plot_id'];
	 		
	}


	$sqlPlot = "SELECT * FROM tblplot WHERE plot_id = '$plotid' ";
	$resultsPlot= mysqli_query($conn,$sqlPlot);
	while($rows = mysqli_fetch_assoc($resultsPlot))
	{

		$pid = $rows['plot_id'];

		if ($pid == $plotid) {
			$sqlPlotStatus = "UPDATE tblplot SET status = '$status' WHERE plot_id = '$pid' ";
			$conn -> query($sqlPlotStatus) or die ($conn->error);
		}
		
	}


if ($graves){

	    if (!empty($image)) {
		    if (move_uploaded_file($image, "mapping/assets/img/grave_img/" . $image_name))
		        {	

				    chmod ("./mapping/assets/img/grave_img/" . $image_name, 0646); 
				    echo header("Location: ../mscv2/map.php");

		        }
		    else
		        {
		        
					echo "<b>Chyba - The file was not uploaded </b><BR>";
				
		        }
		}
		
}else
print "Sorry";


mysqli_close($conn);


?>