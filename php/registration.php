<?php

if((!isset($_POST['UserName']) && !isempty($_POST['UserName'])) && 
	(!isset($_POST['UserAge']) && !isempty($_POST['UserAge'])) &&
	(!isset($_POST['UserSpecies']) && !isempty($_POST['UserSpecies'])) && 
	(!isset($_POST['HomePlanet']) && !isempty($_POST['HomePlanet'])) && 
	(!isset($_POST['HomeStar']) && !isempty($_POST['HomeStar'])) && 
	(!isset($_POST['Duration']) && !isempty($_POST['Duration'])) && 
	(!isset($_POST['E_Address']) && !isempty($_POST['E_Address'])) && 
	(!isset($_POST['Password1']) && !isempty($_POST['Password1'])) && 
	(!isset($_POST['Password2']) && !isempty($_POST['Password2']))) {
	echo "You must fill out all fields, go back and try again!";
} else {
	$name = $_POST['UserName'];
	$age = $_POST['UserAge'];
	$species = $_POST['UserSpecies'];
	$planet = $_POST['HomePlanet'];
	$star = $_POST['HomeStar'];
	$duration = $_POST['Duration'];
	$email = $_POST['E_Address'];
	$password1 = $_POST['Password1'];
	$password2 = $_POST['Password2'];
	
	if($password1 != $password2) {
		echo "Passwords don't match!";
	} else {
	    $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
	    if (mysqli_connect_errno()) {
	            echo "Failed to connect to MySQL: " . mysqli_connect_error();
	    }
	    mysql_select_db("web102");
	
	    $result = mysql_query("INSERT INTO user (name, age, species, planet, star, duration, email, password1, password2) VALUES ('$name', '$age', '$species', '$planet','$star','$duration','$email','$password1','$password2')");
	    if(!$result) {
	            echo mysql_error();
	    } else {
	    	echo "You successfully registered!";
	    }
    }

}

?>