<?php
/*
 * jQuery login
 * Version: 1.0
 * Author: Tamuir khan
 *
*/
require_once('../Connections/myDBconn.php');
//Get Vars from Login Page
$username = $_POST['sUname'];
$password = $_POST['sPass'];
	// Check database to see if username and the hashed password exist there.
	$query = "SELECT UserID, UserName FROM users
			  WHERE UserName = '$username' AND UserPass = '$password'";
	$result_set = mysql_query($query);
	
	if($row = mysql_fetch_array($result_set)) {
		//Record found, username,password authenticated
		echo $row['UserName'];
		} else {
			echo "notFound";
		}
?>