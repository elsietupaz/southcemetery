<?php


include_once ("db.php");


$latitude=$_POST['input-startLat'];
$longitude=$_POST['input-startLng'];

$sql = "INSERT INTO tbladmin_startLocation VALUES (null,'$latitude','$longitude')";
	

$conn -> query($sql) or die ($conn->error);
echo header("Location: ../mscv2/map.php");


mysqli_close($conn);


?>