<?php

//setting header to json

header('Content-Type: application/json');



//database

define('DB_HOST', 'localhost');

define('DB_USERNAME', 'root');

define('DB_PASSWORD', '');

define('DB_NAME', 'registration');



//get connection

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);



if(!$mysqli){

  die("Connection failed: " . $mysqli->error);

}



//query to get data from the table

$query = sprintf("SELECT CONCAT(monthname(start_event),' ',year(start_event)) as monthly, count(start_event) as numusers FROM events GROUP BY YEAR(start_event), MONTHNAME(start_event) ORDER BY start_event");



//execute query

$result = $mysqli->query($query);



//loop through the returned data

$data = array();

foreach ($result as $row) {

  $data[] = $row;

}



//free memory associated with result

$result->close();



//close connection

$mysqli->close();



//now print the data

print json_encode($data);