 <?php

include_once ("db.php");

	$did = $_POST['did'];

	
	// start to update
	$sqlPlot = "SELECT * FROM tblplot";
	$resultsPlot= mysqli_query($conn,$sqlPlot);
	while($rows = mysqli_fetch_assoc($resultsPlot))
	{
	 	$pid = $rows['plot_id'];
	 	$pstatus = $rows['status'];
	}


	$sqlDeceased = "SELECT * FROM tbldeceasedinfo WHERE deceased_id = $did ";
	$resultsDeceased= mysqli_query($conn,$sqlDeceased);
	while($rows = mysqli_fetch_assoc($resultsDeceased))
	{
	 	$tombid = $rows['tomb_id'];
	 	$urnid = $rows['urn_id'];
	 	$cryptid = $rows['crypt_id'];
	}


	$sqlTombUpdate = "SELECT * FROM tbl_tomb WHERE tomb_id = '$tombid' ";
	$results= mysqli_query($conn,$sqlTombUpdate);
	while($rows = mysqli_fetch_assoc($results))
	{
		
	 	$tid = $rows['tomb_id'];
	 	$plotid = $rows['plot_id'];
	 	$apartmentid = $rows['apartment_id'];

	 	echo $plotid;

	  	if($tid === $tombid){
			$avail = "Available";
			$sqlStatusTomb = "UPDATE tbl_tomb SET status = '$avail' WHERE tomb_id = '$tid' ";
			$conn -> query($sqlStatusTomb) or die ($conn->error);
			echo header("Location: ../mscv2/map.php");
		}

		// if($pid === $plotid){
			$avail = "Available";
			$sqlStatusPlot = "UPDATE tblplot SET status = '$avail' WHERE plot_id = '$plotid' ";
			$conn -> query($sqlStatusPlot) or die ($conn->error);
			echo header("Location: ../mscv2/map.php");
		// }	

	}

	$sqlUrnUpdate = "SELECT * FROM tbl_urn";
	$resultsUrn= mysqli_query($conn,$sqlUrnUpdate);
	while($rows = mysqli_fetch_assoc($resultsUrn))
	{
		
	 	$uid = $rows['urn_id'];

	  	if($uid === $urnid){
			$avail = "Available";
			$sqlStatusUrn = "UPDATE tbl_urn SET status = '$avail' WHERE urn_id = '$uid' ";
			$conn -> query($sqlStatusUrn) or die ($conn->error);
			echo header("Location: ../mscv2/map.php");
		}
		
	}

	$sqlCryptUpdate = "SELECT * FROM tbl_crypt";
	$resultsCrypt= mysqli_query($conn,$sqlCryptUpdate);
	while($rows = mysqli_fetch_assoc($resultsCrypt))
	{
		
	 	$cid = $rows['crypt_id'];

	  	if($cid === $cryptid){
			$avail = "Available";
			$sqlStatusCrypt = "UPDATE tbl_crypt SET status = '$avail' WHERE crypt_id = '$cid' ";
			$conn -> query($sqlStatusCrypt) or die ($conn->error);
			echo header("Location: ../mscv2/map.php");
		}
		
	}
	


	$query = "SELECT * FROM tbldeceasedinfo WHERE deceased_id ='$did'";
	$result = mysqli_query($conn,$query);
	$rowCountDeceased = $result->num_rows;

	if ($rowCountDeceased > 0){
	    while ($rowdeceased = mysqli_fetch_array($result))
	    {
	       
	        if($rowdeceased['deceased_id'] === $did){

	        	$tomb_id=$rowdeceased['tomb_id'];
	        	$crypt_id=$rowdeceased['crypt_id'];
	        	$urn_id=$rowdeceased['urn_id'];
				$first_name=$rowdeceased['first_name'];
				$middle_name=$rowdeceased['middle_name'];
				$last_name=$rowdeceased['last_name'];
				$year_born=$rowdeceased['year_born'];
				$year_died=$rowdeceased['year_died'];
				$tomb_status=$rowdeceased['status'];
				$rowdeceased['image'];
				$image = $rowdeceased['image'];


				// if ($fileName == NULL){

					if ($img_path = "mapping/assets/img/grave_img/".$rowdeceased['image'])
					{
						unlink($img_path);
						$image_data = $rowdeceased['image'];

					}

				// }


				$sql = "INSERT INTO tblarchived_deceased VALUES (null,'$tomb_id','$crypt_id','$urn_id','$first_name', '$middle_name' ,'$last_name','$year_born','$year_died', '$image_data','$tomb_status', now())";

				// $allowTypes = array('.jpg','.png','.jpeg','.gif'); 

				// unlink('./mapping/assets/img/grave_img/',$image_name,$allowTypes);

				$graves = $conn -> query($sql) or die ($conn->error);
				echo header("Location: ../mscv2/map.php");

				// if ($graves){
				// 	// if( $fileName == NULL )
				// 	// {
				// 		move_uploaded_file($_FILES["fileName"]["tmp_name"], "mapping/assets/img/archived_img/".$_FILES["fileName"]["name"] );
				// 		header("Location: ../mscv2/map.php");
				// 	// }
				// }

	        }

	    }
	}



	$sqlDelete = "DELETE FROM tbldeceasedinfo WHERE deceased_id = '$did' ";
	$conn -> query($sqlDelete) or die ($conn->error);
	echo header("Location: ../mscv2/map.php");


	if ($tid === $tombid && $plotid === $pid){
		$sqlDelTomb = "DELETE FROM tbl_tomb WHERE tomb_id = '$tid' ";
		$conn -> query($sqlDelTomb) or die ($conn->error);
	}// end if

        
mysqli_close($conn);

