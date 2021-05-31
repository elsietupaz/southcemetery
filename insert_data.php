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



$sql = "INSERT INTO events (title, email, start_event, end_event)  VALUES('".$_POST['title']."','".$_POST['email']."','".$_POST['start']."','".$_POST['end']."')";

if (mysqli_query($conn, $sql)) {

    echo "success";

} else {

    echo "error";

}



mysqli_close($conn);



?>