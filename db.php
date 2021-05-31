<?php

$conn = mysqli_connect("localhost","root","","registration") ;



if (!$conn)

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

?>