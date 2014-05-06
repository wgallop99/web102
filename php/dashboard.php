<?php

session_start();

if ($_SESSION ['auth']) {
	echo "You're authorized!";
	}
	
else {
	echo "You are not authorized";
	}	

?>