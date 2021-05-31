<?php

$hostname="localhost";

$username="root";

$password="";

$dbname="registration";



// Create connection

$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}



$sql = "select * from events";

$result = mysqli_query($conn, $sql);

$book_array = array();

if (mysqli_num_rows($result) > 0) 

{	

	while($row = mysqli_fetch_assoc($result)){

    $book_array[] = array(

	  'id'   => $row["id"],

	  'title'   => $row["title"],
	  
	  'email' => $row["email"],

	  'start'   => $row["start_event"],

	  'end'   => $row["end_event"]

	 );

	}

}

echo json_encode($book_array);

?>