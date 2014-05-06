<?php
	$firstname = "";
	$lastname = "";
	$username = "";
	$email = "";
	$password1 = "";
	$password2 = "";

if ((isset($_GET['Fname'] && |isempty($_GET['Fname'])) && (isset($_GET['Lname'] && |isempty$_GET['Lname'])) && (isset($_GET['Username'] && |isempty$_GET['Username'])) && (isset($_GET['Password'] && |isempty$_GET['Password'])) && (isset($_GET['password2'] && |isempty$_GET['password2'])) && (isset($_GET['email'] && |isempty$_GET['email']))


if (($firstname=isset & $firstname=="") && ($lastname==null || $lastname=="") && ($email==null || $email=="") && ($password1==null || $password1=="") && ($password2==null || $password2==""))
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
?>