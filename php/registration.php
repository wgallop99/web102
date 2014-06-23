<?php

if((!isset($_POST['UserName']) || empty($_POST['UserName'])) || 
	(!isset($_POST['UserAge']) || empty($_POST['UserAge'])) ||
	(!isset($_POST['UserSpecies']) || empty($_POST['UserSpecies'])) || 
	(!isset($_POST['HomePlanet']) || empty($_POST['HomePlanet'])) || 
	(!isset($_POST['HomeStar']) || empty($_POST['HomeStar'])) || 
	(!isset($_POST['Duration']) || empty($_POST['Duration'])) || 
	(!isset($_POST['E_Address']) || empty($_POST['E_Address'])) || 
	(!isset($_POST['Password1']) || empty($_POST['Password1'])) ||
	(!isset($_POST['Password2']) || empty($_POST['Password2']))) {
	echo "You must fill out all fields, go back and try again!";
} else {
	$name = $_POST['UserName'];
	$age = $_POST['UserAge'];
	$species = $_POST['UserSpecies'];
	$planet = $_POST['HomePlanet'];
	$star = $_POST['HomeStar'];
	$duration = $_POST['Duration'];
	$address = $_POST['E_Address'];
	$pass1 = $_POST['Password1'];
	$pass2 = $_POST['Password2'];

	
	if($pass1 != $pass2) {
		echo "Passwords don't match!";
	} else {
	    $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
	    if (mysqli_connect_errno()) {
	            echo "Failed to connect to MySQL: " . mysqli_connect_error();
	    }
	    mysql_select_db("web102");

	    $result = mysql_query("INSERT INTO alien (name, age, species, planet, star, duration, address, pass) VALUES ('$name', '$age', '$species', '$planet', '$star', '$duration', '$address', '$pass1')");

	    if(!$result) {
	            echo mysql_error();
	    } else {
	    	echo "You successfully registered!";
	    }
    }

}

?>
