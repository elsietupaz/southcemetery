 <?php


include_once ("db.php");

 
$urn_id=$_POST['idUrn'];
$latitude=$_POST['urnLatitude'];
$longitude=$_POST['urnLongitude'];

$status=$_POST['urnStatus'];
$first_name=$_POST['fnameUrn'];
$middle_name=$_POST['mnameUrn'];
$last_name=$_POST['lnameUrn'];
$year_born=$_POST['yearbornUrn'];
$year_died=$_POST['yeardiedUrn'];
$image_name = ($_FILES["fileUrn"]["name"]);
$image = ($_FILES["fileUrn"]["tmp_name"]);


$sql = "INSERT INTO tbldeceasedinfo VALUES (null,null,null,'$urn_id','$first_name', ' $middle_name ' ,'$last_name','$year_born','$year_died','$latitude','$longitude', '$image_name','$status', now())";
	

$graves = $conn -> query($sql) or die ($conn->error);


$sqlStatus = "UPDATE tbl_urn SET status = '$status' WHERE urn_id = '$urn_id' ";
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