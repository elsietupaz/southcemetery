 <?php


include_once ("db.php");


$crypt_id=$_POST['idCrypt'];
$latitude=$_POST['cryptLatitude'];
$longitude=$_POST['cryptLongitude'];

$status=$_POST['cryptStatus'];
$first_name=$_POST['fnameCrypt'];
$middle_name=$_POST['mnameCrypt'];
$last_name=$_POST['lnameCrypt'];
$year_born=$_POST['yearbornCrypt'];
$year_died=$_POST['yeardiedCrypt'];
$image_name = ($_FILES["fileCrypt"]["name"]);
$image = ($_FILES["fileCrypt"]["tmp_name"]);


$sql = "INSERT INTO tbldeceasedinfo VALUES (null,null,'$crypt_id',null,'$first_name', ' $middle_name ' ,'$last_name','$year_born','$year_died','$latitude','$longitude', '$image_name','$status', now())";
	

$graves = $conn -> query($sql) or die ($conn->error);



$sqlStatus = "UPDATE tbl_crypt SET status = '$status' WHERE crypt_id = '$crypt_id' ";
$conn -> query($sqlStatus) or die ($conn->error);



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