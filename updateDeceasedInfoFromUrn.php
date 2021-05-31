 <?php

include_once ("db.php");
	
	$deceased_id=$_POST['deceasedidUrn'];
	$first_name=$_POST['fnameUpUrn'];
	$middle_name=$_POST['mnameUpUrn'];
	$last_name=$_POST['lnameUpUrn'];
	$year_born=$_POST['yearbornUpUrn'];
	$year_died=$_POST['yeardiedUpUrn'];
	$image_name = ($_FILES["fileUpUrn"]["name"]);


	$sqlEdit = "SELECT * FROM tbldeceasedinfo WHERE deceased_id = '$deceased_id' ";
	$edit_query = mysqli_query($conn, $sqlEdit );
	foreach ($edit_query as $tomb_row ) {
		
		// echo $tomb_row['image'];
		if( $image_name == NULL )
		{
			//Update with existing image
			$image_data = $tomb_row['image'];
		}
		else
		{	
			//Update with new image and delete with old image
			if ($img_path = "mapping/assets/img/grave_img/".$tomb_row['image'])
			{
				unlink($img_path);
				$image_data = $image_name;
			}

		}

	}


	$sql = "UPDATE tbldeceasedinfo SET first_name = '$first_name', middle_name = '$middle_name' , last_name = '$last_name', year_born = '$year_born', year_died = '$year_died' , image = '$image_data' WHERE deceased_id = '$deceased_id' ";

	$graves = $conn -> query($sql) or die ($conn->error);


	if ($graves)
	{
		if( $image_name == NULL )
		{	
			//Update with existing image
			header("Location: ../mscv2/map.php");
		}else{
			//Update with new image and delete with old image
			move_uploaded_file($_FILES["fileUpUrn"]["tmp_name"], "mapping/assets/img/grave_img/".$_FILES["fileUpUrn"]["name"] );
			header("Location: ../mscv2/map.php");
		}

	}else{	
		echo "<b>The file was not uploaded </b><BR>";
	}


        
mysqli_close($conn);

?>

<script>
	
	
	
</script>