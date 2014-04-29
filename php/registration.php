<?php
	$firstname = $GET[''];
	$lastname = $_GET[''];
	$email = $_GET[''];
	$password1 = $_GET[''];
	$password2 = $_GET[''];

if (($firstname==null || $firstname=="") && ($lastname==null || $lastname=="") && ($email==null || $email=="") && ($password1==null || $password1=="") && ($password2==null || $password2==""))
	{
	echo "All fields must be filled out";
	return false;
	}	
if ($firstname==null || $firstname=="");
	{
	echo "Fill in first name";
	return false;
	}
if ($lastname==null	|| $lastname=="");
	{
	echo "Fill in last name";
	return false;
	}
if	($email ==null || $email=="");
	{
	echo "Fill in email";
	return false;
	}
if ($password1==null || $password1=="");
	{
	echo "Fill in password";
	return false;
	}
if ($password2==null || $password2=="");
	{
	echo "Verify password";
	return false;
	}	
if ($_GET['$password1'] != $_GET['$password2'])
	{
	echo "Passwords do not match. Try again.";
	}
else 
	{
	echo "You've registered!";
	}

	
// extra - if (!isset(($_GET['firstname'])) {
// http://techtalk.virendrachandak.com/php-isset-vs-empty-vs-is_null/

?>