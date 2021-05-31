<?php

include_once ("db.php");

	$lot_number=$_POST['lot'];
	$first_name=$_POST['fname'];
	$middle_name=$_POST['mname'];
	$last_name=$_POST['lname'];
	$year_died=$_POST['yeardied'];
	$description=$_POST['description']; 
	$image_name = ($_FILES["file"]["name"]);
	$image = ($_FILES["file"]["tmp_name"]);


	$sql = "UPDATE tbldeceased_info SET first_name = '$first_name', middle_name = '$middle_name' , last_name = '$last_name', year_died = '$year_died' , description = '$description', image = '$image_name' WHERE lot_number = '$lot_number' ";

	$graves = $conn -> query($sql) or die ($conn->error);
	
	

	// mysqli_query($pripoj, $sql);
	// <meta http-equiv="refresh" content="http://localhost:8080/map-polygon/custom-popups.php" />
	// echo "<img src= img/thankyou.png width=50% style= 'position: absolute; left:30%; top: 30%';>";


if ($graves){

	echo '<html>
	<head>
	    
	</head>

	<body>
	   <div>';
	   echo header("Location: map.php");
	    if (!empty($image)) {
		    if (move_uploaded_file($image, "mapping/assets/img/grave_img/" . $image_name))
		        {
				    chmod ("mapping/assets/img/grave_img/" . $image_name, 0646);       
		        }
		    else
		        {
					echo "<b>Chyba - The file was not uploaded </b><BR>";
		        }
		}

	     echo '</div></body></html>';

}else
print "Sorry";
        
mysqli_close($conn);

?>