<?php
$hostname_myDBconn = "localhost";
$database_myDBconn = "jquerydb"; //change this
$username_myDBconn = "root"; //change this
$password_myDBconn = "genomes"; //change this
$myDBconn = mysql_pconnect($hostname_myDBconn, $username_myDBconn, $password_myDBconn) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_myDBconn) or die(mysql_error());
?>