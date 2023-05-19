<?php 

$localhost = "127.0.0.1";//default address of local host 
$username = "root";
$password = "";
$dbname = "email";

// create connection
$connect = new mysqli($localhost, $username, $password, $dbname,"3308");

// check connection
if($connect->connect_error) {
	die("connection failed : " . $connect->connect_error);
} else {
	// echo "Successfully Connected";
}

?>