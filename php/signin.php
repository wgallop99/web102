<?php
session_start();

$email = $_POST["login_email"];
$password = $_POST["login_password"];

        $con = mysql_connect("iweb.ossys.com","web102","PUR5tr3ngth","web102");
        if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        mysql_select_db("web102");
		
		$password2 = "";
        
        $result = mysql_query("SELECT password FROM user WHERE email = '$email'");
        if(!$result) {
                echo mysql_error();
        } else {
                while($row = mysql_fetch_array($result)){
                        $password2 = $row['password'];
                }
        }

	if($password==$password2) {
    	echo"You are a validated user.";
    	$_SESSION['auth']=true;
    	header( 'Location: php/dashboard.php');
    	}
	else {
    	echo"Sorry, your credentials are not valid, Please try again.";
    	}
?>