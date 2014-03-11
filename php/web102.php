<?php

$con=mysqli_connect("localhost","web102","web102","web102");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!empty($_GET['first_name']) || !empty($_GET['last_name']) || !empty($_GET['email'])) {
	echo 'Oops! We only accept POST variables! Try again!';
} else if(empty($_POST['first_name']) || empty($_POST['email']) || $_POST['first_name'] == '' || $_POST['email'] == '') {
	echo 'Oops! Remember, both first name and email are required!';
} else {
	$sql="INSERT INTO user (first_name, last_name, email) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]')";
	
	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}
}

mysqli_close($con);

header( 'Location: users.php' ) ;
?>