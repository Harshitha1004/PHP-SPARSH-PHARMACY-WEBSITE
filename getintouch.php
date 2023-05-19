<?php 

require_once 'dbcon.php';

if($_POST) {      // isset provides more security than writing $_POST directly
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$sql = "INSERT INTO emailing(name,emailid,query) VALUES ('$name', '$email', '$message')";
	if($connect->query($sql) === TRUE) {
		echo '<script> alert("Your response has been recorded !")</script>';
		echo '<script> window.location="index.php" </script>';
		//echo "<a href='../create.php'><button type='button'>Back</button></a>";// .. to get out of the php_action folder to come to the create.php outside that folder(the design create.php);
		//echo "<a href='../index.php'><button type='button'>Home</button></a>"; // .. to get out of the php_action folder and go to index.php outside the php_action folder.


	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}



	$connect->close();
}





?>