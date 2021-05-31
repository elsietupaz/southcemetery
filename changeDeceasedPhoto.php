<?php


include_once ("db.php");


		$deceased_id=$_POST['changephotodid'];

		$image_name = ($_FILES["changePhoto"]["name"]);
		$image = ($_FILES["changePhoto"]["tmp_name"]);


		$sqlStatus = "UPDATE tbldeceasedinfo SET image = '$image_name' WHERE deceased_id = '$deceased_id' ";
			

		$graves = $conn -> query($sqlStatus) or die ($conn->error);



		// $sqlStatus = "UPDATE tbl_lot SET lotstatus = '$lot_status' WHERE lotname = '$lot_number' ";
		// $conn -> query($sqlStatus) or die ($conn->error);



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
// }

		


mysqli_close($conn);


?>