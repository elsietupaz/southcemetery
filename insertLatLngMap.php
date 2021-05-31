<?php


include_once ("db.php");


$latitude=$_POST['input-defaultLat'];
$longitude=$_POST['input-defaultLng'];

$sql = "INSERT INTO tbladminmap VALUES (null,'$latitude','$longitude')";
	

$conn -> query($sql) or die ($conn->error);
echo header("Location: ../mscv2/map.php");


mysqli_close($conn);


?>