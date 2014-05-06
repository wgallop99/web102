<?php

if((!isset($_POST['Fname']) && !isempty($_POST['Fname'])) && 
	(!isset($_POST['Lname']) && !isempty($_POST['Lname'])) && 
	(!isset($_POST['Username']) && !isempty($_POST['Username'])) && 
	(!isset($_POST['password2']) && !isempty($_POST['password2'])) && 
	(!isset($_POST['Email']) && !isempty($_POST['Email']))) {
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
	
	    $result = mysql_query("INSERT INTO user (first_name, last_name, username, password, email) VALUES ($_POST['Fname'], $_POST['Lname'], $_POST['Username'], $_POST['password2'], $_POST['Email'])");
	    if(!$result) {
	            echo mysql_error();
	    } else {
	    	echo "You successfully registered!";
	    }
    }

}

?>