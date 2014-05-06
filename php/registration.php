<?php

if((!isset($_POST['fname']) && !isempty($_POST['fname'])) && 
	(!isset($_POST['lname']) && !isempty($_POST['lname'])) &&
	(!isset($_POST['pass1']) && !isempty($_POST['pass1'])) && 
	(!isset($_POST['pass2']) && !isempty($_POST['pass2'])) && 
	(!isset($_POST['email']) && !isempty($_POST['email']))) {
	echo "You must fill out all fields, go back and try again!";
} else {
	$first_name = $_POST['fname'];
	$last_name = $_POST['lname'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$email = $_POST['email'];
	
	if($pass1 != $pass2) {
		echo "Passwords don't match!";
	} else {
	    $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
	    if (mysqli_connect_errno()) {
	            echo "Failed to connect to MySQL: " . mysqli_connect_error();
	    }
	    mysql_select_db("web102");
	
	    $result = mysql_query("INSERT INTO user (first_name, last_name, password, email) VALUES ('$first_name', '$last_name', '$pass1', '$email')");
	    if(!$result) {
	            echo mysql_error();
	    } else {
	    	echo "You successfully registered!";
	    }
    }

}

?>