<?php
include_once ("db.php");
  

	// $apartment_query = "SELECT * FROM `tblapartment_lot` ";
	// $apartment_result = mysqli_query($conn,$apartment_query);
	// $rowCountApartment = $apartment_result->num_rows;

	// if ($rowCountApartment > 0){
	//     while ($rowapartment = mysqli_fetch_array($apartment_result))
	//     {
	//         $apartment_id = $rowapartment['apartment_id'];
	//     }
	// }


	$apartment_id=$_POST['input-apartmentid'];
	$tomb_number=$_POST['input-tombNumber'];
	$tomb_price=$_POST['input-tombPrice'];
	$status=$_POST['input-tombStatus'];
	// $plot_id=$_POST['input-tombPlotId'];



	$sql = "INSERT INTO tbl_tomb VALUES (null,'$tomb_number','$tomb_price', null , '$apartment_id', '$status' )";
	$conn -> query($sql) or die ($conn->error);
	echo header("Location: ../mscv2/map.php");


	mysqli_close($conn);
		
?>