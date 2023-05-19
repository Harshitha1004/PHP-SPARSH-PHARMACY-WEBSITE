





				<?php
						
if(isset($_POST["S"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	//console.log($user);




	//$con=mysql_connect('localhost','root','') or die(mysql_error());
	//mysql_select_db('user_registration') or die("cannot select DB");
	$con= mysqli_connect("localhost","root","","project","3308");
   
	$query=$con->query("SELECT * FROM tbl_user WHERE username='".$user."' AND password='".$pass."'");
     
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))//picks up every row's username and password
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	//console.log($dbusername);
	//console.log($dbpassword);
	}// to differentiate and segregate the username and password seperately, we do the above two statements as data from a database is fetched together.

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;


	/* Redirect browser */
	header("location: ../index.php");
	}
	} else {
	echo '<script> alert("Invalid username or password!")</script>';
	}

} else {
	echo "All fields are required!";
}
}
?>


